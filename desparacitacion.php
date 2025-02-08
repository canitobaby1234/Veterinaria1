<!-- desparasitacion.php -->
<?php
$pageTitle = 'Desparasitación';
$noCarousel = true;
include './templates/header.php';
?>

<div class="service-detail-hero">
    <div class="container-fluid p-0">
        <div class="hero-image position-relative">
            
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.5);">
                <h1 class="text-white display-4 fw-bold">Servicio de Desparasitación</h1>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-description mb-4">
                <h2 class="h3 mb-4">Control de Parásitos</h2>
                <p class="lead">Protege a tu mascota contra parásitos internos y externos con nuestro programa completo de desparasitación, adaptado a las necesidades específicas de cada animal.</p>
                
                <div class="mt-4">
                    <h3 class="h4 mb-3">Tipos de Tratamientos:</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4 class="h5 mb-3">
                                        <i class="fas fa-bug text-danger me-2"></i>
                                        Parásitos Externos
                                    </h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pulgas</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Garrapatas</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ácaros</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Piojos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h4 class="h5 mb-3">
                                        <i class="fas fa-worm text-warning me-2"></i>
                                        Parásitos Internos
                                    </h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Lombrices intestinales</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gusano del corazón</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Giardia</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Coccidia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="h4 mb-3">Programa de Desparasitación:</h3>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Edad</th>
                                        <th>Frecuencia Recomendada</th>
                                        <th>Tipo de Tratamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cachorros/Gatitos</td>
                                        <td>Cada 2 semanas hasta los 3 meses</td>
                                        <td>Internos</td>
                                    </tr>
                                    <tr>
                                        <td>3-6 meses</td>
                                        <td>Mensual</td>
                                        <td>Internos y Externos</td>
                                    </tr>
                                    <tr>
                                        <td>Adultos</td>
                                        <td>Cada 3-4 meses</td>
                                        <td>Internos y Externos</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Síntomas de Alerta -->
                <div class="alert alert-warning mt-4">
                    <h4 class="h5">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Síntomas de Alerta
                    </h4>
                    <p class="mb-0">Si observas estos síntomas, tu mascota podría necesitar desparasitación:</p>
                    <ul class="list-unstyled mt-2 mb-0">
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 8px;"></i>Pérdida de apetito</li>
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 8px;"></i>Pelo sin brillo</li>
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 8px;"></i>Rascado excesivo</li>
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 8px;"></i>Diarrea o vómitos</li>
                    </ul>
                </div>

                <!-- Preguntas Frecuentes -->
                <div class="faq-section mt-5">
                    <h3 class="h4 mb-3">Preguntas Frecuentes</h3>
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    ¿Por qué es importante la desparasitación regular?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    La desparasitación regular es fundamental para prevenir infestaciones que pueden afectar la salud de tu mascota y tu familia. Los parásitos pueden causar desde molestias leves hasta problemas de salud graves.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    ¿El tratamiento tiene efectos secundarios?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Los tratamientos actuales son muy seguros y raramente causan efectos secundarios. Si ocurren, suelen ser leves y temporales. Siempre realizamos una evaluación previa para elegir el tratamiento más adecuado.
                                </div>
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
                    <h3 class="h4 mb-4">Agenda tu cita de desparasitación</h3>
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
                            <label for="edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="ultimaDesparasitacion" class="form-label">Última desparasitación</label>
                            <input type="date" class="form-control" id="ultimaDesparasitacion">
                        </div>
                        <div class="mb-3">
                            <label for="sintomas" class="form-label">Síntomas observados</label>
                            <textarea class="form-control" id="sintomas" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono de contacto</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Solicitar cita</button>
                    </form>
                </div>
            </div>

            <!-- Promoción -->
            <div class="card border-0 shadow-sm mt-4 bg-primary text-white">
                <div class="card-body">
                    <h3 class="h4 mb-3">¡Oferta Especial!</h3>
                    <p><i class="fas fa-tag me-2"></i>20% de descuento en tu primera desparasitación</p>
                    <p class="mb-0"><small>* Válido solo para nuevos pacientes</small></p>
                </div>
            </div>

            <!-- Horario y contacto -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <h3 class="h4 mb-3">Horario de Atención</h3>
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
                            Teléfono: (427) 273-7288
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php'; ?>