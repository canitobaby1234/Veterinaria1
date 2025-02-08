<!-- estetica-canina.php -->
<?php
$pageTitle = 'Estética Canina';
$noCarousel = true;
include './templates/header.php';
?>

<div class="service-detail-hero">
    <div class="container-fluid p-0">
        <div class="hero-image position-relative">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.5);">
                <h1 class="text-white display-4 fw-bold">Servicio de Estética Canina</h1>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-description mb-4">
                <h2 class="h3 mb-4">Servicios de Estética y Belleza</h2>
                <p class="lead">Brindamos servicios profesionales de estética canina para mantener a tu mascota limpia, saludable y hermosa. Nuestro equipo está capacitado para trabajar con todas las razas y tipos de pelaje.</p>
                
                <div class="mt-4">
                    <h3 class="h4 mb-3">Nuestros servicios incluyen:</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Servicio</th>
                                    <th>Descripción</th>
                                    <th>Duración aproximada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Baño completo</td>
                                    <td>Incluye shampoo, acondicionador y secado</td>
                                    <td>1-2 horas</td>
                                </tr>
                                <tr>
                                    <td>Corte de pelo</td>
                                    <td>Personalizado según raza y preferencias</td>
                                    <td>2-3 horas</td>
                                </tr>
                                <tr>
                                    <td>Corte de uñas</td>
                                    <td>Limado y corte profesional</td>
                                    <td>30 minutos</td>
                                </tr>
                                <tr>
                                    <td>Limpieza de oídos</td>
                                    <td>Higiene y revisión de oídos</td>
                                    <td>20 minutos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="fas fa-info-circle me-2"></i>
                        Todos nuestros servicios incluyen revisión básica de la piel y el pelaje.
                    </div>
                </div>

                <div class="service-benefits mb-4">
                    <h3 class="h4 mb-3">Beneficios de la estética canina</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h4 class="h5 card-title">
                                        <i class="fas fa-heart text-primary me-2"></i>
                                        Higiene
                                    </h4>
                                    <p class="card-text">Mantiene a tu mascota libre de parásitos y previene problemas de piel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h4 class="h5 card-title">
                                        <i class="fas fa-smile text-primary me-2"></i>
                                        Bienestar
                                    </h4>
                                    <p class="card-text">Un pelaje bien cuidado contribuye al confort y la salud de tu mascota.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-section mb-4">
                    <h3 class="h4 mb-3">Preguntas Frecuentes</h3>
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    ¿Con qué frecuencia debo llevar a mi mascota al grooming?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    La frecuencia recomendada varía según la raza y tipo de pelaje, pero generalmente se recomienda cada 4-8 semanas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    ¿Qué debo tener en cuenta antes de la cita?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Es importante que tu mascota tenga sus vacunas al día y que nos informes sobre cualquier condición especial de salud o preferencias de corte.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="h4 mb-4">Agenda tu cita de estética</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nombreMascota" class="form-label">Nombre de la mascota</label>
                            <input type="text" class="form-control" id="nombreMascota" required>
                        </div>
                        <div class="mb-3">
                            <label for="raza" class="form-label">Raza</label>
                            <input type="text" class="form-control" id="raza" required>
                        </div>
                        <div class="mb-3">
                            <label for="servicio" class="form-label">Servicio deseado</label>
                            <select class="form-select" id="servicio" required>
                                <option value="">Seleccionar...</option>
                                <option value="bano">Baño completo</option>
                                <option value="corte">Corte de pelo</option>
                                <option value="completo">Servicio completo</option>
                            </select>
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

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h3 class="h4 mb-3">Horario de Atención</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Lunes a Viernes: 9:00 - 19:00
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Sábados: 9:00 - 14:00
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone text-primary me-2"></i>
                            Teléfono: (427) 273-7288
                        </li>
                        <li>
                            <i class="fas fa-envelope text-primary me-2"></i>
                            Email: estetica@veterinaria.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php'; ?>