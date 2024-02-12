<x-guest-layout>
    <div class="page-article container">
        <aside x-data="{
            selectedView:''
        }">
            <div class="filtre-mobile">
                <h2>Catégorie</h2>
                <div>
                    <button x-on:click="selectedView = selectedView === 'view1' ? '' : 'view1'">
                        <h3>
                            Type d'arc
                            <span class="chevron" x-bind:class="{'chevron-rotated': selectedView === 'view1'}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </h3>
                    </button>
                    <div class="categories" x-show="selectedView === 'view1'"
                        x-transition:enter.duration.250ms
                        x-transition:enter.origin.right
                        x-transition:leave.duration.200ms
                        x-cloak>
                        <div class="input-checkbox-group">
                            <input name="poulie-checkbox" id="poulie-checkbox" type="checkbox">
                            <label for="poulie-checkbox">Poulie</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="classique-checkbox" id="classique-checkbox" type="checkbox">
                            <label for="classique-checkbox">Classique</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="barebow-checkbox" id="barebow-checkbox" type="checkbox">
                            <label for="barebow-checkbox">BareBow</label>
                        </div>
                    </div>
                </div>
                <div class="separator-x"></div>
                <div>
                    <button x-on:click="selectedView = selectedView === 'view2' ? '' : 'view2'">
                        <h3>
                            Expérience
                            <span class="chevron" x-bind:class="{'chevron-rotated': selectedView === 'view2'}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </h3>
                    </button>
                    <div class="categories" x-show="selectedView === 'view2'"
                        x-transition:enter.duration.250ms
                        x-transition:enter.origin.right
                        x-transition:leave.duration.200ms
                        x-cloak>
                        <div class="input-checkbox-group">
                            <input name="debutant-checkbox" id="debutant-checkbox" type="checkbox" class="input">
                            <label for="debutant-checkbox">Débutant</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="confirme-checkbox" id="confirme-checkbox" type="checkbox" class="input">
                            <label for="confirme-checkbox">Confirmé</label>
                        </div>
                    </div>
                </div>
                <div class="separator-x"></div>
                <div>
                    <button x-on:click="selectedView = selectedView === 'view3' ? '' : 'view3'">
                        <h3>
                            Type de tir
                            <span class="chevron" x-bind:class="{'chevron-rotated': selectedView === 'view3'}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </h3>
                    </button>
                    <div class="categories" x-show="selectedView === 'view3'"
                        x-transition:enter.duration.250ms
                        x-transition:enter.origin.right
                        x-transition:leave.duration.200ms
                        x-cloak>
                        <div class="input-checkbox-group">
                            <input name="interieur-checkbox" id="interieur-checkbox" type="checkbox" class="input">
                            <label for="interieur-checkbox">Interieur</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="exterieur-checkbox" id="exterieur-checkbox" type="checkbox" class="input">
                            <label for="exterieur-checkbox">Exterieur</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="chasse-checkbox" id="chasse-checkbox" type="checkbox" class="input">
                            <label for="chasse-checkbox">3D</label>
                        </div>
                        <div class="input-checkbox-group">
                            <input name="campagne-checkbox"  id="campagne-checkbox" type="checkbox" class="input">
                            <label for="campagne-checkbox">Campagne</label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="separator-y"></div>
        <section id="article">
            @for ($i = 0; $i<10; $i++)
                <div class="purple-card">
                    <img src="{{asset('images/placehold-carousel.png')}}" alt="">
                    <div class="card-text">
                        <h3>Lorem, ipsum.</h3>
                        <p>
                            Pellentesque in felis eu nunc volutpat sagittis. Suspendisse pulvinar
                            dictum nisl et accumsan. Morbi venenatis scelerisque mattis.
                        </p>
                        <a href="javascript:void(0)">Voir l'article</a>
                    </div>
                </div>
            @endfor
        </section>
    </div>
</x-guest-layout>
