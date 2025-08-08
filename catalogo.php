<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Completo - Colchones Sarai</title>

    <!-- Dependencias CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Estilos Personalizados Integrados -->
    <style>
        /* Paleta de Colores
           Azul Oscuro Principal: #0A2463
           Azul Acento: #3E92CC
           Azul Intermedio: #1E4258
           Gris Claro (Fondo): #F8F9FA
           Texto: #343a40
        */

        body {
            font-family: 'Poppins', sans-serif;
            color: #343a40;
            line-height: 1.7;
            padding-top: 70px; /* Evita que el contenido se oculte detrás del navbar fijo */
        }

        /* --- Barra de Navegación --- */
        .navbar {
            background-color: #0A2463;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 0.8rem 1rem !important;
            transition: color 0.2s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: #3E92CC !important;
        }

        /* --- Encabezado de Página (Catálogo) --- */
        .page-header {
            background-color: #0A2463;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        /* --- Tarjetas de Producto --- */
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .product-card .card-img-top { height: 250px; object-fit: cover; }
        .product-card .card-body { padding: 1.5rem; }

        /* --- Filtro de Productos --- */
        #filter-buttons .btn {
            font-weight: 600;
        }
        #filter-buttons .btn.active {
            background-color: #0A2463;
            color: white;
        }

        /* --- Modal de Producto --- */
        .modal-content {
            border-radius: 15px;
        }
        #modalProductFeatures li {
            padding-left: 1.5em;
            text-indent: -1.5em;
        }
        #modalProductFeatures li::before {
            content: "✓";
            color: #3E92CC;
            margin-right: 0.5em;
        }

        /* --- Botones Flotantes --- */
        .floating-socials {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .floating-socials .social-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
            transition: transform 0.2s ease-in-out;
        }

        .floating-socials .social-icon:hover {
            transform: scale(1.15);
        }

        .floating-socials .whatsapp { background-color: #25D366; }
        .floating-socials .facebook { background-color: #1877F2; }
        .floating-socials .instagram { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%); }

        /* --- Footer --- */
        footer { background-color: #151c2e; }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Colchones Sarai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#quienes-somos">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#destacados">Productos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="catalogo.php">Catálogo Completo</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado del Catálogo -->
    <header class="page-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestro Catálogo</h1>
            <p class="lead">Descubre la gama completa de productos diseñados para tu confort.</p>
        </div>
    </header>

    <!-- Contenido del Catálogo -->
    <main class="py-5">
        <div class="container">
            <!-- Botones de Filtro y Catálogo de Colores -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <a href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" download="catalogo-colores-sarai.pdf" class="btn btn-info">
                        <i class="fas fa-palette me-2"></i>Ver Catálogo de Colores
                    </a>
                </div>
                <div class="col-12 text-center mb-5">
                    <div id="filter-buttons" class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">Todos</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="colchon">Colchones</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="base">Bases Cama</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="espaldar">Espaldares</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="combo">Combos</button>
                    </div>
                </div>
            </div>

            <!-- Lista de Productos -->
            <div id="product-list" class="row">
                <!-- Producto 1 (Colchón) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="colchon">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/0A2463/FFF?text=Colchón+Imperial" class="card-img-top" alt="Colchón Ortopédico Imperial">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Colchón Ortopédico Imperial</h5>
                            <p class="card-text text-muted">Firmeza y confort para tu espalda. Disponible en todas las medidas.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $450.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Colchón Ortopédico Imperial"
                                data-image="https://placehold.co/600x400/0A2463/FFF?text=Colchón+Imperial"
                                data-description="El balance perfecto entre firmeza y confort para cuidar tu espalda. Fabricado con espuma de alta densidad y resortes encapsulados para un soporte óptimo y duradero."
                                data-features="<li>Núcleo de resortes encapsulados</li><li>Capas de espuma de alta densidad</li><li>Tela Jacquard antiácaros</li><li>Nivel de firmeza: Alto</li><li>Garantía: 5 años</li>"
                                data-prices='{"Sencillo (100x190cm)": 450000, "Semidoble (120x190cm)": 520000, "Doble (140x190cm)": 580000, "Queen (160x190cm)": 650000, "King (200x200cm)": 780000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 (Base) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="base">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/3E92CC/FFF?text=Base+Cama+Premium" class="card-img-top" alt="Base Cama Premium">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Base Cama Premium</h5>
                            <p class="card-text text-muted">Estructura en madera pino, tapizada en microfibra o ecocuero.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $280.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Base Cama Premium"
                                data-image="https://placehold.co/600x400/3E92CC/FFF?text=Base+Cama+Premium"
                                data-description="Nuestra base cama premium ofrece un soporte sólido y estable para tu colchón, alargando su vida útil. Su diseño moderno se adapta a cualquier decoración."
                                data-features="<li>Estructura en madera de pino inmunizada</li><li>Tapizado en microfibra o ecocuero</li><li>Patas metálicas o de madera</li><li>Altura total: 30 cm</li><li>Garantía: 1 año</li>"
                                data-prices='{"Sencillo (100x190cm)": 280000, "Semidoble (120x190cm)": 310000, "Doble (140x190cm)": 340000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 (Espaldar) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="espaldar">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/1E4258/FFF?text=Espaldar+Capitoné" class="card-img-top" alt="Espaldar Capitoné">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Espaldar Capitoné</h5>
                            <p class="card-text text-muted">Diseño clásico y elegante. Variedad de colores y texturas.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $220.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Espaldar Capitoné"
                                data-image="https://placehold.co/600x400/1E4258/FFF?text=Espaldar+Capitoné"
                                data-description="Añade un toque de lujo a tu habitación con nuestro espaldar capitoné. Hecho a mano con atención al detalle para un acabado impecable."
                                data-features="<li>Estructura de madera resistente</li><li>Acolchado con espuma de alta densidad</li><li>Tapizado en lino, microfibra o ecocuero</li><li>Variedad de colores disponibles</li><li>Fácil instalación</li>"
                                data-prices='{"Sencillo": 220000, "Semidoble": 250000, "Doble": 280000, "Queen": 320000, "King": 380000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 (Colchón) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="colchon">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/5D5C61/FFF?text=Colchón+Pillow+Top" class="card-img-top" alt="Colchón Pillow Top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Colchón Pillow Top</h5>
                            <p class="card-text text-muted">Capa extra de acolchado para una sensación de nube al dormir.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $550.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Colchón Pillow Top"
                                data-image="https://placehold.co/600x400/5D5C61/FFF?text=Colchón+Pillow+Top"
                                data-description="Disfruta de una suavidad extra sin sacrificar el soporte. El Pillow Top se amolda a tu cuerpo, aliviando los puntos de presión para un descanso profundo."
                                data-features="<li>Capa superior de confort (Pillow Top)</li><li>Núcleo de espuma de alta resiliencia</li><li>Tela de tejido de punto suave al tacto</li><li>Nivel de firmeza: Medio-Suave</li><li>Garantía: 5 años</li>"
                                data-prices='{"Sencillo (100x190cm)": 550000, "Semidoble (120x190cm)": 630000, "Doble (140x190cm)": 700000, "Queen (160x190cm)": 790000, "King (200x200cm)": 920000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 (Combo) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="combo">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/7395AE/FFF?text=Combo+Completo" class="card-img-top" alt="Combo Completo">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Combo Completo Sarai</h5>
                            <p class="card-text text-muted">Incluye colchón, base cama, espaldar y 2 almohadas. ¡Todo lo que necesitas!</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $850.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Combo Completo Sarai"
                                data-image="https://placehold.co/600x400/7395AE/FFF?text=Combo+Completo"
                                data-description="La solución integral para renovar tu habitación. Este combo incluye nuestro popular Colchón Ortopédico Imperial, una base cama premium, un elegante espaldar y dos almohadas de obsequio."
                                data-features="<li>Colchón Ortopédico Imperial</li><li>Base Cama Premium</li><li>Espaldar a elección (Capitoné o Moderno)</li><li>2 Almohadas de fibra siliconada</li><li>Ahorro garantizado</li>"
                                data-prices='{"Sencillo": 850000, "Semidoble": 950000, "Doble": 1050000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                 <!-- Producto 6 (Base) -->
                 <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="base">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/B1A296/FFF?text=Base+Cama+Dividida" class="card-img-top" alt="Base Cama Dividida">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Base Cama Dividida</h5>
                            <p class="card-text text-muted">Ideal para espacios de difícil acceso. Misma robustez, mayor versatilidad.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $320.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Base Cama Dividida"
                                data-image="https://placehold.co/600x400/B1A296/FFF?text=Base+Cama+Dividida"
                                data-description="La solución perfecta para apartamentos o casas con escaleras y pasillos estrechos. Dos módulos que se unen fácilmente para formar una base sólida y uniforme."
                                data-features="<li>Estructura doblemente reforzada</li><li>Fácil de transportar y ensamblar</li><li>Disponible para camas dobles, Queen y King</li><li>Tapizado y patas a elección</li><li>Garantía: 1 año</li>"
                                data-prices='{"Doble (140x190cm)": 320000, "Queen (160x190cm)": 360000, "King (200x200cm)": 410000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Producto 7 (Espaldar) -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="espaldar">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/1E4258/FFF?text=Espaldar+Moderno" class="card-img-top" alt="Espaldar Moderno">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Espaldar Moderno Lineal</h5>
                            <p class="card-text text-muted">Líneas limpias y diseño minimalista para un look contemporáneo.</p>
                            <h6 class="card-subtitle mb-2 text-primary fw-bold">Desde $190.000</h6>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#productModal"
                                data-title="Espaldar Moderno Lineal"
                                data-image="https://placehold.co/600x400/1E4258/FFF?text=Espaldar+Moderno"
                                data-description="Un diseño sobrio y actual que se convierte en el punto focal de tu habitación. Sus líneas horizontales o verticales aportan una sensación de amplitud y orden."
                                data-features="<li>Diseño minimalista y versátil</li><li>Estructura de madera</li><li>Tapizado en telas de alta calidad</li><li>Variedad de colores neutros y vibrantes</li><li>Fácil instalación tipo flotante</li>"
                                data-prices='{"Sencillo": 190000, "Semidoble": 220000, "Doble": 250000, "Queen": 290000, "King": 340000}'>
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center">
            <p>Para consultas y pedidos, contáctanos a través de nuestras redes sociales o números de atención.</p>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2024 Colchones Sarai. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Botones de Redes Sociales Flotantes -->
    <div class="floating-socials">
        <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20un%20producto%20del%20catálogo." target="_blank" class="social-icon whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" class="social-icon facebook" title="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon instagram" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <!-- Modal de Producto -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img id="modalProductImage" src="" class="img-fluid rounded mb-3" alt="Producto">
              </div>
              <div class="col-md-6 d-flex flex-column">
                <h2 id="modalProductTitle" class="mb-3"></h2>
                <p id="modalProductDescription" class="text-muted"></p>
                <div class="mb-3">
                    <label for="modalProductSize" class="form-label"><strong>Selecciona la medida:</strong></label>
                    <select class="form-select" id="modalProductSize"></select>
                </div>
                <h4 class="mt-3">Características:</h4>
                <ul id="modalProductFeatures" class="list-unstyled">
                </ul>
                <h3 id="modalProductPrice" class="text-primary fw-bold mt-auto"></h3>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0">
            <a href="#" target="_blank" class="btn btn-success" id="modalWhatsappButton"><i class="fab fa-whatsapp"></i> Pedir por WhatsApp</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Dependencias JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Script Personalizado Integrado -->
    <script>
    $(document).ready(function() {
        // --- Filtro de Productos en Catálogo ---
        if ($('#filter-buttons').length) {
            const filterButtons = $('#filter-buttons .btn');
            const productItems = $('.product-item');

            filterButtons.on('click', function() {
                filterButtons.removeClass('active');
                $(this).addClass('active');

                const filter = $(this).data('filter');

                productItems.fadeOut(200).promise().done(function() {
                    productItems.each(function() {
                        const category = $(this).data('category');
                        if (filter === 'all' || filter === category) {
                            $(this).fadeIn(200);
                        }
                    });
                });
            });
        }

        // --- Lógica para el Modal de Producto ---
        const productModal = document.getElementById('productModal');
        if (productModal) {
            const modalProductSize = productModal.querySelector('#modalProductSize');
            const modalProductPrice = productModal.querySelector('#modalProductPrice');
            const whatsappButton = productModal.querySelector('#modalWhatsappButton');
            let currentPrices = {};
            let currentTitle = '';

            // Función para formatear el precio a moneda colombiana
            function formatPrice(price) {
                return new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(price);
            }

            // Función para actualizar el enlace de WhatsApp
            function updateWhatsappLink() {
                const selectedSize = modalProductSize.value;
                const selectedPrice = currentPrices[selectedSize];
                const whatsappBaseUrl = 'https://wa.me/573001234567?text=';
                const whatsappText = `Hola, estoy interesado en el producto: ${currentTitle} (Medida: ${selectedSize}, Precio: ${formatPrice(selectedPrice)})`;
                whatsappButton.href = whatsappBaseUrl + encodeURIComponent(whatsappText);
            }

            // Evento que se dispara cuando el modal está a punto de mostrarse
            productModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                currentTitle = button.getAttribute('data-title');
                const image = button.getAttribute('data-image');
                const description = button.getAttribute('data-description');
                const features = button.getAttribute('data-features');
                const pricesString = button.getAttribute('data-prices');

                // Parsear el JSON de precios
                currentPrices = JSON.parse(pricesString);

                // Poblar los campos del modal
                productModal.querySelector('#modalProductTitle').textContent = currentTitle;
                productModal.querySelector('#modalProductImage').src = image;
                productModal.querySelector('#modalProductDescription').textContent = description;
                productModal.querySelector('#modalProductFeatures').innerHTML = features;

                // Limpiar y poblar el select de medidas
                $(modalProductSize).empty();
                for (const size in currentPrices) {
                    $(modalProductSize).append($('<option>', {
                        value: size,
                        text: size
                    }));
                }

                // Actualizar el precio inicial y el enlace de WhatsApp
                const initialPrice = currentPrices[Object.keys(currentPrices)[0]];
                modalProductPrice.textContent = formatPrice(initialPrice);
                updateWhatsappLink();
            });

            // Evento que se dispara cuando el usuario cambia la medida en el select
            $(modalProductSize).on('change', function() {
                const selectedSize = this.value;
                const newPrice = currentPrices[selectedSize];
                modalProductPrice.textContent = formatPrice(newPrice);
                updateWhatsappLink();
            });
        }
    });
    </script>
</body>
</html>
