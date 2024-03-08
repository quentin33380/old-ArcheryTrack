<x-admin-layout>
    <section id="gestion-articles">
        <div class="tableau-articles">
            <div class="section-title">
                <p>Modification de l'article : {{ $article->title }}</p>
            </div>
            <form method="POST" class="edit-articles" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" value="{{ $article->title }}" required>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <label for="content">Contenu :</label>
                    <textarea id="content" name="content" required>{{ $article->content }}</textarea>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>

                <div>
                    @if ($article->image == null)
                        <p>Pas d'images selectionné pour cet article</p>
                        @else
                        <label for="image">Image actuelle :</label>
                        <img src="/images/{{ $article->image }}" width="100">
                    @endif
                    <label for="image">Changer l'image :</label>
                    <input type="file" id="image" name="image">
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div>
                    <label for="source_url">URL Source :</label>
                    <input type="url" id="source_url" name="source_url" value="{{ $article->source_url }}">
                    <x-input-error :messages="$errors->get('source_url')" class="mt-2" />
                </div>

                <div x-data="dropdown()">
                    <label for="categories">Catégories :</label>
                    <div>
                        <div>
                            <template x-for="category in selected" :key="category.id">
                                <span x-text="category.name"></span>
                            </template>
                            <select x-ref="select" style="display:none" name="categories[]" id="categories" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if(in_array($category->id, $article->categories->pluck('id')->toArray())) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @foreach ($categories as $category)
                                    <div>
                                        <input type="checkbox" @click="toggleCategory({{ $category->id }}, '{{ $category->name }}')" :checked="isSelected({{ $category->id }})">
                                        <label>{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <x-input-error :messages="$errors->get('categories')" class="mt-2" />
                        </div>
                    </div>

                    <template x-for="category in selected" :key="category.id">
                        <input type="hidden" :name="'categories[]'" :value="category.id">
                    </template>
                </div>

                <div>
                    <label for="new_category">Ajouter une nouvelle catégorie :</label>
                    <input type="text" id="new_category" name="new_category">
                    <x-input-error :messages="$errors->get('new_category')" class="mt-2" />
                </div>

                <button type="submit">Mettre à jour</button>
            </form>
        </div>
    </section>

    <script>
        function dropdown() {
            return {
                selected: [],
                init() {
                    this.selected = Array.from(this.$refs.select.options).filter(option => option.selected).map(option => ({ id: option.value, name: option.textContent }));
                },
                toggleCategory(id, name) {
                    let category = this.selected.find(category => category.id == id);
                    if (category) {
                        this.selected = this.selected.filter(category => category.id != id);
                    } else {
                        this.selected.push({ id, name });
                    }
                },
                isSelected(id) {
                    return this.selected.findIndex(category => category.id == id) !== -1;
                }
            }
        }
    </script>


</x-admin-layout>
