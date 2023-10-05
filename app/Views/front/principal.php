<main>
    <section class="hero">
        <div>
            <p>Deja que nuestros agentes de viajes te lleven de la mano hacia la experiencia de viaje perfecta.</p>
            <p>Crea recuerdos invaluables con nosotros; cada destino es una historia que contar.
            </p>
            <a href="<?= base_url('quienessomos'); ?>"><button>Conocenos</button></a>
        </div>
        <div>
            <img src="./assets/img/hero.svg" alt="">
        </div>
    </section>

    <section id="destinos">
        <h2 class="title-section">Destinos</h1>
            <article class="card-section justify-content-center">
                <p>Destiny Travel es tu ventana al mundo de las aventuras y los destinos soñados. En nuestro viaje juntos, exploraremos lugares asombrosos, desde exóticas playas hasta antiguas ciudades, desde montañas majestuosas hasta desiertos misteriosos.</p>
                <p>Únete a nosotros en este emocionante viaje y descubre los destinos que tenemos preparados para ti. La aventura te espera. ¡Vayamos juntos a explorar el mundo!</p>

                <div class="card">
                    <img src="assets/img/paris.jpg" class="card-img-top" alt="París">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">Paris, Francia</h5>
                        </div>
                        <p class="card-text card_description">¡Descubre la magia de París con nosotros! Reserva tu viaje hoy mismo y sumérgete en el encanto de la Ciudad de la Luz.</p>
                        <div class="card_footer">
                            <p>$150000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/egipto.jpg" class="card-img-top" alt="Egipto">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">El Cairo, Egipto</h5>
                        </div>
                        <p class="card-text card_description">Explora las maravillas ancestrales de Egipto con nosotros y descubre un mundo perdido.</p>
                        <div class="card_footer">
                            <p>$180000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/maldivas.jpg" class="card-img-top" alt="Maldivas">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">Malé, Maldivas</h5>
                        </div>
                        <p class="card-text card_description">Un viaje a las Maldivas es un salto directo a un mundo de ensueño, donde el lujo y la belleza natural se encuentran.</p>
                        <div class="card_footer">
                            <p>$200000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/machupicchu.jpg" class="card-img-top" alt="Machu Picchu">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">Machu Picchu, Perú</h5>
                        </div>
                        <p class="card-text card_description">Machu Picchu es mucho más que un destino turístico; es una experiencia transformadora que nunca olvidarás.</p>
                        <div class="card_footer">
                            <p>$120000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/nuevayork.jpg" class="card-img-top" alt="Nueva York">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">Nueva York, EEUU</h5>
                        </div>
                        <p class="card-text card_description">Desde la Estatua de la Libertad hasta Central Park, Nueva York es un museo al aire libre de arte y arquitectura impresionantes</p>
                        <div class="card_footer">
                            <p>$150000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/japon.jpg" class="card-img-top" alt="Tokio">
                    <div class="card-body">
                        <div class="card_destino">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5 class="card-title">Tokio, Japón</h5>
                        </div>
                        <p class="card-text card_description">Viaja a Japón y sumérgete en una cultura milenaria que coexiste con la innovación del siglo XXI.</p>
                        <div class="card_footer">
                            <p>$190000</p>
                            <a href="#" class="btn card_button">Reserva tu lugar</a>
                        </div>
                    </div>
                </div>
            </article>
    </section>

    <section class="galeria-section">
        <h2 class="title-section">Galería</h2>
        <div class="galeria">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/img/vacaciones1.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/img/vacaciones2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/vacaciones3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <p>Suscribete a nuestro newsletter</p>
        <div>
            <input type="mail" placeholder="Ingrese su email">
            <button type="submit" class="newsletter_button">Suscribirse</button>
        </div>
    </section>
</main>