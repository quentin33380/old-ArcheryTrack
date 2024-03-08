<x-admin-layout>
    <section id="gestion-articles">
        <div class="tableau-articles">
            <div class="section-title">
                <p>Créer un nouvel article</p>
            </div>
            <form method="POST" class="edit-articles" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" required>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <label for="content">Contenu :</label>
                    <textarea id="content" name="content" required></textarea>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>

                <div>
                    <label for="image">Image :</label>
                    <input type="file" id="image" name="image">
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div>
                    <label for="source_url">URL Source :</label>
                    <input type="url" id="source_url" name="source_url">
                    <x-input-error :messages="$errors->get('source_url')" class="mt-2" />
                </div>

                <div x-data="dropdown()" style="align-items: start">
                    <label for="categories">Catégories :</label>
                    <div style="display: block">
                        <div>
                            <div>
                                @foreach ($categories as $category)
                                    <div>
                                        <input type="checkbox" @change="selectCategory({{ $category->id }}, '{{ $category->name }}')" :checked="isSelected({{ $category->id }})">
                                        <label>{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p x-text="selected.length > 0 ? selected.map(a => a.name).join(', ') : 'Aucune catégorie choisie'"></p>
                    </div>
                    <x-input-error :messages="$errors->get('categories')" class="mt-2" />

                    <template x-for="category in selected" :key="category.id">
                        <input type="hidden" :name="'categories[]'" :value="category.id">
                    </template>
                </div>

                <div>
                    <label for="new_category">Ajouter une nouvelle catégorie :</label>
                    <input type="text" id="new_category" name="new_category">
                    <x-input-error :messages="$errors->get('new_category')" class="mt-2" />
                </div>

                <button type="submit">Créer</button>
            </form>
        </div>
    </section>
    <script>
        function dropdown() {
            return {
                selected: [],
                selectCategory(id, name) {
                    const index = this.selected.findIndex(category => category.id === id);
                    if (index !== -1) {
                        this.selected.splice(index, 1);
                    } else {
                        this.selected.push({id, name});
                    }
                },
                isSelected(id) {
                    return this.selected.findIndex(category => category.id === id) !== -1;
                }
            }
        }
    </script>

</x-admin-layout>
