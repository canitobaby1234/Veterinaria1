<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - <?php echo $pageTitle ?? 'Inicio'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body.no-carousel {
            padding-top: 80px;
        }
        .carousel-item img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
        .navbar {
            transition: background-color 0.3s ease;
            background-color: rgba(0, 0, 0, 0.7) !important;
            width: 100%;
            z-index: 1000;
            padding: 0.5rem 0;
        }
        .navbar:not(.no-carousel-navbar) {
            background-color: rgba(0, 0, 0, 0.5) !important;
            position: absolute;
        }
        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.9) !important;
            position: fixed;
            top: 0;
        }
        .no-carousel-navbar {
            background-color: rgba(0, 0, 0, 0.9) !important;
            position: fixed;
            top: 0;
        }
        .navbar-brand img {
            height: 60px;
            max-width: 100%;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0.3rem 1rem;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #FF9800 !important;
        }
        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.9);
            border: none;
        }
        .dropdown-item {
            color: white;
        }
        .dropdown-item:hover {
            background-color: #FF9800;
            color: white;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="<?php echo isset($noCarousel) ? 'no-carousel' : ''; ?>">
    <nav class="navbar navbar-expand-lg navbar-dark <?php echo isset($noCarousel) ? 'no-carousel-navbar' : ''; ?>">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./Imagenes/logo.png" alt="Veterinaria">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown">SERVICIOS VETERINARIOS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="consultag.php?tipo=consulta">Consulta General</a></li>
                            <li><a class="dropdown-item" href="vacunacion.php?tipo=vacunacion">Vacunación</a></li>
                            <li><a class="dropdown-item" href="desparacitacion.php?tipo=desparasitacion">Desparasitación</a></li>
                            <li><a class="dropdown-item" href="esteticacanina.php?tipo=estetica">Estética Canina</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="tienda.php">TIENDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="citas.php">CITAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="urge">URGENCIAS 24h</a></li>
                </ul>
            </div>
        </div>
    </nav>
