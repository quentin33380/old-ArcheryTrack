<x-guest-layout>
    <main>
        <section id="compagnon" class="container">
            <div class="container-card">
                <div class="card">
                    <div class="purple-card-title left">
                        <h2>Votre Compagnon de Tir à l'Arc</h2>
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
                        <h2>Suivez Votre Progression 🏹 </h2>
                    </div>
                    <div class="purple-card">
                        <p>Avec ArcheryTrack, vous pouvez enregistrer et suivre tous les détails essentiels de votre équipement, des réglages de votre arc aux caractéristiques de vos flèches. Vous pouvez également consigner vos scores, votre progression au fil du temps et vos objectifs personnels. Plus jamais vous ne vous sentirez seul dans votre parcours de tir à l'arc.</p>
                    </div>
                </div>
            </div>
        </section>

        <x-slider>
            @foreach ($articles as $article)
                <li class="purple-card splide__slide">
                    <img src="{{ asset($article->image) }}" alt="Image de l'article">
                    <div class="carousel-card-text">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ Str::limit($article->content, 150) }}</p>
                        @if (!empty($article->source_url))
                            <a href="{{ $article->source_url }}">Voir l'article</a>
                        @endif
                    </div>
                </li>
            @endforeach
        </x-slider>

        <section id="starting">
            <div class="container-card container">
                <div class="card">
                    <div class="purple-card-title left">
                        <h2>Prêt à Commencer ? 🔥</h2>
                    </div>
                    <div class="purple-card">
                        <p>Inscrivez-vous gratuitement dès aujourd'hui et découvrez comment ArcheryTrack peut vous aider à devenir un archer plus compétent et confiant. Le tir à l'arc n'a jamais été aussi gratifiant.</p>
                        <a href="{{route('register')}}">Connexion / Inscription</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-guest-layout>
