<?php
$pageTitle = 'Agendar Cita';
$noCarousel = true;
include './templates/header.php';
?>

<div class="service-detail-hero">
    <div class="container-fluid p-0">
        <div class="hero-image position-relative">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.5);">
                <h1 class="text-white display-4 fw-bold">Agendar Cita</h1>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Agenda tu Cita</h2>
                    
                    <form action="procesar_cita.php" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">
                                <i class="fas fa-user text-primary me-2"></i>
                                Nombre completo *
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu nombre completo.
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefono" class="form-label">
                                <i class="fas fa-phone text-primary me-2"></i>
                                Teléfono *
                            </label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" 
                                   pattern="[0-9]{10}" required>
                            <div class="invalid-feedback">
                                Por favor ingresa un número de teléfono válido (10 dígitos).
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mascota" class="form-label">
                                <i class="fas fa-paw text-primary me-2"></i>
                                Nombre de tu mascota *
                            </label>
                            <input type="text" class="form-control" id="mascota" name="mascota" required>
                            <div class="invalid-feedback">
                                Por favor ingresa el nombre de tu mascota.
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="fecha" class="form-label">
                                <i class="fas fa-calendar text-primary me-2"></i>
                                Fecha deseada *
                            </label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                            <div class="invalid-feedback">
                                Por favor selecciona una fecha.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hora" class="form-label">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Hora preferida *
                            </label>
                            <select class="form-select" id="hora" name="hora" required>
                                <option value="">Selecciona una hora</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor selecciona una hora.
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensaje" class="form-label">
                                <i class="fas fa-comment text-primary me-2"></i>
                                Mensaje adicional
                            </label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" 
                                      placeholder="Describe el motivo de tu consulta o cualquier información relevante"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-calendar-check me-2"></i>
                            Solicitar cita
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">
                        <i class="fas fa-clock text-primary me-2"></i>
                        Horario de atención
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-calendar-day text-primary me-3"></i>
                            <div>
                                <strong>Lunes a Viernes:</strong><br>
                                9:00 - 20:00
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-calendar-day text-primary me-3"></i>
                            <div>
                                <strong>Sábados:</strong><br>
                                9:00 - 15:00
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-phone-alt text-primary me-3"></i>
                            <div>
                                <strong>Emergencias 24/7:</strong><br>
                                (427) 273-7288
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Validación del formulario
(function () {
    'use strict'
    
    // Obtener todos los formularios a los que queremos aplicar validación
    var forms = document.querySelectorAll('.needs-validation')
    
    // Bucle sobre ellos y prevenir envío
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })

    // Establecer fecha mínima como hoy
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('fecha').setAttribute('min', today);
})()
</script>

<?php include './templates/footer.php'; ?>