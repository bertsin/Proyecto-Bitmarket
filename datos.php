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
    <?php
      ini_set('display_errors', 1);
      error_reporting(E_ALL);

      $servername = "mysql";
      $username = "alberto";
      $password = "asir2024";
      $dbname = "Tienda_material_informatico";
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Conexión fallida: " . $conn->connect_error);
      }
    ?>
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
        <table>
            <thead>
                <tr>
                    <th>Razón Social</th>
                    <th>Descripción</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $sql = "SELECT * FROM CLIENTE";
                  $result = $conn->query($sql);

                  if ($result === false) {
                      die("Error en la consulta: " . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>
                            <td>{$row['nif']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['apellidos']}</td>
                            <td>{$row['telefono']}</td>
                            </tr>";
                      }
                  }
                ?>
            </tbody>
        </table>
    </main>
    <footer class="footer">
        &copy; 2025 BitMarket. Todos los derechos reservados.
    </footer>
</body>
</html>
