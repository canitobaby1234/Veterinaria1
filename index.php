<!-- index.php -->
<?php
$pageTitle = 'Inicio';
include './templates/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="overlay"></div>
    <div class="container text-center">
        <h1 class="text-white">BIENVENIDO A NUESTRA VETERINARIA</h1>
        <p class="text-white">Cuidamos de tus mascotas con pasión y profesionalismo.</p>
        <a href="#servicios" class="btn btn-primary">Ver Servicios</a>
        
    </div>
</section>

<div class="main-content">
    <div class="container text-center mt-4">
        <h2 class="text-primary">Nuestros Servicios</h2>
        <p>Ofrecemos la mejor atención para tus mascotas.</p>
    </div>

    <div class="services-section py-5" id="servicios">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3 class="service-title">Consulta General</h3>
                        <p class="service-description">Exámenes completos y diagnósticos precisos para mantener a tu mascota saludable.</p>
                        <a href="#" class="btn btn-primary service-btn">Más información</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h3 class="service-title">Vacunación</h3>
                        <p class="service-description">Programa completo de vacunación para prevenir enfermedades comunes.</p>
                        <a href="#" class="btn btn-primary service-btn">Más información</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="service-title">Estética</h3>
                        <p class="service-description">Servicio profesional de grooming y cuidado estético para tu mascota.</p>
                        <a href="#" class="btn btn-primary service-btn">Más información</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3 class="service-title">Emergencias 24/7</h3>
                        <p class="service-description">Atención de emergencias veterinarias las 24 horas del día.</p>
                        <a href="#" class="btn btn-primary service-btn">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Iconos flotantes -->
<a href="https://wa.me/524272737288" class="floating-icon whatsapp" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<a href="https://facebook.com/tu_pagina" class="floating-icon facebook" target="_blank">
    <i class="fab fa-facebook-f"></i>
</a>

<style>
/* Hero Section */
.hero-section {
    background: url('./Imagenes/dog-5969006_1280.jpg') center/cover no-repeat;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center;
    color: white;
}
html {
    scroll-behavior: smooth;
}
.overlay {
    pointer-events: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}
.hero-section .btn {
    position: relative;
    z-index: 2; /* Asegura que el botón esté sobre la overlay */
}
.hero-section h1,
.hero-section p {
    position: relative;
    z-index: 2;
}

/* Iconos flotantes */
.floating-icon {
    position: fixed;
    bottom: 20px;
    width: 50px;
    height: 50px;
    color: white;
    font-size: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.whatsapp {
    background-color: #25D366;
    right: 20px;
}

.facebook {
    background-color: #1877F2;
    right: 80px;
}

/* Tarjetas de servicios */
.service-card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

.service-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
</style>

<?php include './templates/footer.php'; ?>
