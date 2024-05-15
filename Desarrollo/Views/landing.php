<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing page</title>
    <!-- Fuente - conexión -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/css/landing.css">
    <!-- Iconos de la página web -->
    <script src="https://kit.fontawesome.com/8219737d4a.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="header-all">
    <div class="header-top">
        <p>Bienvenido a Flash Store</p>
        <ul>
            <li><a href="#"><i class="fa-solid fa-store"></i> Delivery 983 744 910 </a></li>
            <li><a><a href="#"><i class="fa-solid fa-location-dot"></i> Nuestras Tiendas </a></li>
        </ul>
    </div>
    <header>
        <div class="header-main">
            <h1><i class="fa-solid fa-bars"></i> FlashStore</h1>
            <form action="#" method="get">
                <label for="search-input">
                    <i class="fa-solid fa-search"></i>
                    <input id="search-input" type="text" placeholder="Buscar teléfonos, accesorios y más...">
                    <i class="fa-solid fa-bars f"></i>
                </label>
            </form>
            <div class="actions">
                <a href="#"><i class="fa-solid fa-user"></i> Iniciar Sesión</a> |
                <a href="#"><i class="fa-solid fa-cart-shopping"></i> Carrito</a>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Todas las Categorías</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Smartwatch</a></li>
            <li><a href="#">Tablets</a></li>
            <li><a href="#">Accesorios</a></li>
        </ul>
    </nav>
</div>
    <main>
        <section class="gallery-presentation">
            <div class="slider">
                <input type="radio" name="slider" id="slide1" checked />
                <input type="radio" name="slider" id="slide2" />
                <input type="radio" name="slider" id="slide3" />

                <div class="buttons">
                    <label for="slide1"></label>
                    <label for="slide2"></label>
                    <label for="slide3"></label>
                </div>

                <div class="content">
                    <img id="firstslide" src="assets/img/panel-gallery1.png" alt="smartWatch" />
                    <img id="secondslide" src="assets/img/panel-gallery1.png" alt="smartWatch" />
                    <img id="thirdslide" src="assets/img/panel-gallery1.png" alt="smartWatch" />
                </div>
            </div>

            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </section>
        <section class="section best-smartphones">
            <header>
                <h2>Lo mejor en <span class="important">Smartphones</span></h2>
                <button class="view-more">
                    <span>Ver más</span>
                    <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
            </header>
            <div class="line"></div>
            <section class="products-container">
                <article class="product">
                    <div class="product-image">
                        <img src="assets/img/smartphone.png" alt="">
                    </div>
                    <div class="product-background"></div>
                    <div class="product-content">
                        <h3 class="minimize product-name">Galaxy S22 Ultra</h3>
                        <p class="minimize product-price">S/ 3999</p>
                    </div>
                </article>
                <article class="product">
                    <div class="product-image">
                        <img src="assets/img/smartphone.png" alt="">
                    </div>
                    <div class="product-background"></div>
                    <div class="product-content">
                        <h3 class="minimize product-name">Galaxy S22 Ultra</h3>
                        <p class="minimize product-price">S/ 3999</p>
                    </div>
                </article>
                <article class="product">
                    <div class="product-image">
                        <img src="assets/img/smartphone.png" alt="">
                    </div>
                    <div class="product-background"></div>
                    <div class="product-content">
                        <h3 class="minimize product-name">Galaxy S22 Ultra</h3>
                        <p class="minimize product-price">S/ 3999</p>
                    </div>
                </article>
                <article class="product">
                    <div class="product-image">
                        <img src="assets/img/smartphone.png" alt="">
                    </div>
                    <div class="product-background"></div>
                    <div class="product-content">
                        <h3 class="minimize product-name">Galaxy S22 Ultra</h3>
                        <p class="minimize product-price">S/ 3999</p>
                    </div>
                </article>
                <article class="product">
                    <div class="product-image">
                        <img src="assets/img/smartphone.png" alt="">
                    </div>
                    <div class="product-background"></div>
                    <div class="product-content">
                        <h3 class="minimize product-name">Galaxy S22 Ultra</h3>
                        <p class="minimize product-price">S/ 3999</p>
                    </div>
                </article>
            </section>
        </section>

        <section class="section brands">
            <header>
                <h2>Encuentra las mejores <span class="important">Marcas</span></h2>
                <button class="view-more">
                    <span>Ver más</span>
                    <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
            </header>
            <div class="line"></div>
            <section class="brands-container">
                <article class="brand samsung">
                    <div class="brand-logo">
                        <img src="assets/img/marcas/Samsung.png" alt="">
                    </div>
                    Samsung
                </article>
                <article class="brand xiaomi">
                    <div class="brand-logo">
                        <img src="assets/img/marcas/Xiaomi.png" alt="">
                    </div>
                    Xiaomi
                </article>
                <article class="brand apple">
                    <div class="brand-logo">
                        <img class="img-min" src="assets/img/marcas/apple.png" alt="">
                    </div>
                    Apple
                </article>
                <article class="brand huawei">
                    <div class="brand-logo">
                        <img src="assets/img/marcas/Huawei.png" alt="">
                    </div>
                    Huawei
                </article>
                <article class="brand oppo">
                    <div class="brand-logo">
                        <img src="assets/img/marcas/Oppo.png" alt="">
                    </div>
                    Oppo
                </article>
                <article class="brand motorola">
                    <div class="brand-logo">
                        <img src="assets/img/marcas/Motorola.png" alt="">
                    </div>
                    Motorola
                </article>
            </section>
        </section>
        <section class="section offers">
            <header>
                <h2>Ofertas <span class="important">Exclusivas</span></h2>
                <button class="view-more">
                    <span>Ver más</span>
                    <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
            </header>
            <div class="line"></div>
            </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h2>FlashStore</h2>
                <p>Contáctanos</p>
                <ul>
                    <li><i class="fab fa-whatsapp"></i> WhatsApp: +51983744910</li>
                    <li><i class="fas fa-phone-alt"></i> Llámanos: +51983744910</li>
                </ul>
            </div>
            <div class="footer-section">
                <h2>Servicio al Cliente</h2>
                <ul>
                    <li>Sobre nosotros</li>
                    <li>Nuestras tiendas</li>
                    <li>Términos y condiciones</li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Todos los derechos reservados. Grupo8</p>
        </div>
    </footer>
    <script src="assets/js/landing.js"></script>
</body>

</html>