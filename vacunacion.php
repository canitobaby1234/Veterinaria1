<!-- vacunacion.php -->
<?php
$pageTitle = 'Vacunación';
$noCarousel = true;
$parentPage = [
    'url' => 'vacunacion.php',
    'title' => 'Servicios'
];
include './templates/header.php';
?>

<div class="service-detail-hero">
    <div class="container-fluid p-0">
        <div class="hero-image position-relative">
            
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.5);">
                <h1 class="text-white display-4 fw-bold">Servicio de Vacunación</h1>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-description mb-4">
                <h2 class="h3 mb-4">Programa de Vacunación</h2>
                <p class="lead">Protege a tu mascota contra enfermedades infecciosas con nuestro programa completo de vacunación, diseñado según la edad, estilo de vida y necesidades específicas.</p>
                
                <div class="mt-4">
                    <h3 class="h4 mb-3">Vacunas disponibles para perros:</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Vacuna</th>
                                    <th>Edad recomendada</th>
                                    <th>Frecuencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Parvovirus</td>
                                    <td>6-8 semanas</td>
                                    <td>Anual</td>
                                </tr>
                                <tr>
                                    <td>Distemper</td>
                                    <td>6-8 semanas</td>
                                    <td>Anual</td>
                                </tr>
                                <tr>
                                    <td>Rabia</td>
                                    <td>12 semanas</td>
                                    <td>Anual</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 class="h4 mb-3 mt-4">Vacunas disponibles para gatos:</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Vacuna</th>
                                    <th>Edad recomendada</th>
                                    <th>Frecuencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Triple Felina</td>
                                    <td>8 semanas</td>
                                    <td>Anual</td>
                                </tr>
                                <tr>
                                    <td>Leucemia Felina</td>
                                    <td>12 semanas</td>
                                    <td>Anual</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="alert alert-info mt-4">
                    <i class="fas fa-info-circle me-2"></i>
                    Todas nuestras vacunas incluyen certificado de vacunación y recordatorio para la próxima dosis.
                </div>
            </div>

            <div class="service-benefits mb-4">
                <h3 class="h4 mb-3">¿Por qué es importante vacunar?</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h4 class="h5 card-title">
                                    <i class="fas fa-shield-alt text-primary me-2"></i>
                                    Prevención
                                </h4>
                                <p class="card-text">Las vacunas son la mejor forma de prevenir enfermedades graves y potencialmente mortales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h4 class="h5 card-title">
                                    <i class="fas fa-heart text-primary me-2"></i>
                                    Protección
                                </h4>
                                <p class="card-text">Ayuda a construir el sistema inmunológico de tu mascota contra enfermedades específicas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div class="faq-section mb-4">
                <h3 class="h4 mb-3">Preguntas Frecuentes</h3>
                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Cuándo debo empezar a vacunar a mi mascota?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Los cachorros y gatitos deben comenzar su esquema de vacunación entre las 6 y 8 semanas de edad.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Las vacunas tienen efectos secundarios?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Las reacciones son muy poco comunes. Algunas mascotas pueden experimentar letargo leve o sensibilidad en el sitio de la inyección.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Formulario de cita -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="h4 mb-4">Agenda tu cita de vacunación</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nombreMascota" class="form-label">Nombre de la mascota</label>
                            <input type="text" class="form-control" id="nombreMascota" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipoMascota" class="form-label">Tipo de mascota</label>
                            <select class="form-select" id="tipoMascota" required>
                                <option value="">Seleccionar...</option>
                                <option value="perro">Perro</option>
                                <option value="gato">Gato</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad de la mascota</label>
                            <input type="text" class="form-control" id="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono de contacto</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha deseada</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Solicitar cita</button>
                    </form>
                </div>
            </div>

            <!-- Horario y contacto -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h3 class="h4 mb-3">Horario de Vacunación</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Lunes a Viernes: 9:00 - 20:00
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Sábados: 9:00 - 15:00
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone text-primary me-2"></i>
                            Teléfono: (427) 273-7288
                        </li>
                        <li>
                            <i class="fas fa-envelope text-primary me-2"></i>
                            Email: citas@veterinaria.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php'; ?>