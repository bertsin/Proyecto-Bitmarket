<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitMarket, tu tienda online</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="cabecera">
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo" width="150">
        </div>
        <nav class="menu-principal">
            <ul>
                <li class="menu-item">
                    <a href="#" class="categoria-link"><i class="fas fa-bars"></i>CATEGORÍAS
                    </a>
                         <ul class="submenu">
                                <li><a href="#">Ordenadores</a></li>
                                <li><a href="#">Componentes</a></li>
                                <li><a href="#">Periféricos</a></li>
                                <li><a href="#">Software</a></li>
                         </ul>
                </li>
                    <li><a href="#">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="buscador">
            <input type="search" placeholder="Buscar productos, marcas y más...">
            <span class="icono-lupa">&#128269;</span>
        </div>
        <div class="acciones-usuario">
            <a href="login.html" class="btn-header"><i class="fas fa-user"></i>Iniciar sesión </a>
            <a href="cesta.html" class="btn-header"><i class= "fas fa-shopping-cart"></i>Mi cesta</a>
                  
        </div>
    </header>
    <section class="frase-introductoria">
        <span class="resaltado">Calidad y experiencia</span> tecnológica, con solo un clic.
    </section>
    <section class="banner-principal">
        <img src="images/banner.jpg" alt="Banner">
    </section>
    <main>
        <section class="productos-destacados">
            <h2>Productos Destacados</h2>
            <div class="productos-grid">
                <div class="producto-card">
                    <img src="images/producto1.png" alt="Teclado RGB">
                    <h3>Teclado RGB</h3>
                    <p>€45.00</p>
                    <button class="btn-cesta">Añadir al carrito</button>
                </div>
                <div class="producto-card">
                    <img src="images/producto2.png" alt="Ratón Gaming">
                    <h3>Ratón Gaming</h3>
                    <p>€25.00</p>
                    <button class="btn-cesta">Añadir al carrito</button>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        &copy; 2025 BitMarket. Todos los derechos reservados.
    </footer>
</body>
</html>
