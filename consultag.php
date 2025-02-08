<!-- consulta-general.php (ejemplo de página individual de servicio) -->
<?php
$pageTitle = 'Consulta General';
$noCarousel = true;
include './templates/header.php';
?>

<div class="service-detail-hero">
    <div class="container-fluid p-0">
        <div class="hero-image position-relative">
            
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.5);">
                <h1 class="text-white display-4 fw-bold">Consulta General</h1>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-description mb-4">
                <h2 class="h3 mb-4">¿Qué incluye nuestra consulta general?</h2>
                <p class="lead">Nuestro servicio de consulta general es un examen completo que evalúa el estado de salud de tu mascota, realizado por veterinarios altamente calificados.</p>
                
                <div class="mt-4">
                    <h3 class="h4 mb-3">El proceso incluye:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Examen físico completo
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Revisión de signos vitales
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Evaluación de comportamiento
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Revisión de historial médico
                        </li>
                    </ul>
                </div>
            </div>

            <div class="service-benefits mb-4">
                <h3 class="h4 mb-3">Beneficios</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h4 class="h5 card-title">
                                    <i class="fas fa-heart text-primary me-2"></i>
                                    Prevención
                                </h4>
                                <p class="card-text">Detectamos problemas de salud en etapas tempranas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h4 class="h5 card-title">
                                    <i class="fas fa-shield-alt text-primary me-2"></i>
                                    Seguimiento
                                </h4>
                                <p class="card-text">Plan de cuidado personalizado para tu mascota.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="h4 mb-4">Agenda tu cita</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha deseada</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje adicional</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Solicitar cita</button>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h3 class="h4 mb-3">Horario de atención</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Lunes a Viernes: 9:00 - 20:00
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Sábados: 9:00 - 15:00
                        </li>
                        <li>
                            <i class="fas fa-phone text-primary me-2"></i>
                            Emergencias 24/7: (427) 273-7288
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php'; ?>