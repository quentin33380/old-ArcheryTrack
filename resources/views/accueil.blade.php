<x-guest-layout>
    <main>
        <section id="compagnon" class="container">
            <div class="container-card">
                <div class="card">
                    <div class="purple-card-title left">
                        <p>Votre Compagnon de Tir à l'Arc</p>
                    </div>
                    <div class="purple-card">
                        <p>ArcheryTrack est votre allié incontournable pour améliorer vos compétences en tir à l'arc. Notre plateforme a été spécialement conçue pour les archers de tous niveaux, qu'ils soient débutants, intermédiaires ou experts.</p>
                    </div>
                </div>
                <div class="compagnon-img">
                    <img src="{{asset('images/image-compagnon.png')}}" alt="">
                </div>
            </div>
        </section>

        <section id="progress">
            <div class="container-card container">
                <div class="progress-img">
                    <img src="{{asset('images/progress-img.png')}}" alt="">
                </div>
                <div class="card">
                    <div class="purple-card-title right">
                        <p>Suivez Votre Progression 🏹 </p>
                    </div>
                    <div class="purple-card">
                        <p>Avec ArcheryTrack, vous pouvez enregistrer et suivre tous les détails essentiels de votre équipement, des réglages de votre arc aux caractéristiques de vos flèches. Vous pouvez également consigner vos scores, votre progression au fil du temps et vos objectifs personnels. Plus jamais vous ne vous sentirez seul dans votre parcours de tir à l'arc.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="carousel-article">
            <div class="container">
                <div class="card">
                    <div class="purple-card-title left">
                        <p>Ressources et Conseils 📚</p>
                    </div>
                    <div class="carrousel-card">
                        <div class="carrousel-text">
                            <p>Découvrez notre bibliothèque d'articles et de ressources pour vous aider à perfectionner votre technique. </p>
                            <p>De l'apprentissage des bases du tir à l'arc à la maîtrise des gestes avancés, nous avons tout ce dont vous avez besoin pour réussir.</p>
                        </div>
                        <section class="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @for ($i=0; $i < 20; $i++)
                                        <li class="splide__slide">Slide {{$i}}</li>
                                    @endfor
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-guest-layout>
