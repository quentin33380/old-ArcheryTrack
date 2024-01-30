<section id="carousel-article">
    <div class="container">
        <div class="card">
            <div class="purple-card-title left">
                <h2>Ressources et Conseils 📚</h2>
            </div>
            <div class="carrousel-card">
                <div class="carrousel-text">
                    <p>Découvrez notre bibliothèque d'articles et de ressources pour vous aider à perfectionner votre technique. </p>
                    <p>De l'apprentissage des bases du tir à l'arc à la maîtrise des gestes avancés, nous avons tout ce dont vous avez besoin pour réussir.</p>
                </div>
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{$slot}}
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
