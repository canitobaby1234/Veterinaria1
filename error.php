<?php
$pageTitle = "Error";
$noCarousel = true; // Para evitar el carrusel en esta página
include './templates/header.php';
?>

<div class="container text-center mt-5">
    <h1 class="display-3 text-danger">¡Oops! Página no encontrada</h1>
    <p class="lead">Lo sentimos, la página que buscas no existe o ha ocurrido un error.</p>
    <a href="index.php" class="btn btn-primary">Regresar al Inicio</a>
</div>

<?php include './templates/footer.php'; ?>
