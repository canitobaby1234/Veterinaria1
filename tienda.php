<!-- tienda.php -->
<?php
$pageTitle = 'Tienda';
$noCarousel = true;
include './templates/header.php';
?>

<div class="container-fluid my-5">
    <div class="row">
        <!-- Filtros laterales -->
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 mb-4">Filtrar por</h3>
                    
                    <!-- Categorías -->
                    <div class="mb-4">
                        <h4 class="h6 mb-3">Categorías</h4>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="alimentos">
                            <label class="form-check-label" for="alimentos">Alimentos</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="accesorios">
                            <label class="form-check-label" for="accesorios">Accesorios</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="medicamentos">
                            <label class="form-check-label" for="medicamentos">Medicamentos</label>
                        </div>
                    </div>

                    <!-- Mascotas -->
                    <div class="mb-4">
                        <h4 class="h6 mb-3">Tipo de mascota</h4>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="perros">
                            <label class="form-check-label" for="perros">Perros</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="gatos">
                            <label class="form-check-label" for="gatos">Gatos</label>
                        </div>
                    </div>

                    <!-- Rango de precio -->
                    <div class="mb-4">
                        <h4 class="h6 mb-3">Precio</h4>
                        <div class="range">
                            <input type="range" class="form-range" min="0" max="5000" id="precioRange">
                            <div class="d-flex justify-content-between">
                                <span>$0</span>
                                <span>$5000</span>
                            </div>
                        </div>
                    </div>

                    <!-- Marcas -->
                    <div class="mb-4">
                        <h4 class="h6 mb-3">Marcas</h4>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca1">
                            <label class="form-check-label" for="marca1">Royal Canin</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca2">
                            <label class="form-check-label" for="marca2">Hills</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca3">
                            <label class="form-check-label" for="marca3">Purina</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-lg-9">
            <!-- Barra superior -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <div class="input-group me-3" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Buscar productos...">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <select class="form-select" style="width: 200px;">
                        <option>Ordenar por...</option>
                        <option>Menor precio</option>
                        <option>Mayor precio</option>
                        <option>Más vendidos</option>
                    </select>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-3">Vista:</span>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary active">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Grid de productos -->
            <div class="row g-4">
                <!-- Producto -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-15%</span>
                            <img src="/api/placeholder/300/300" class="card-img-top" alt="Producto">
                        </div>
                        <div class="card-body">
                            <span class="d-block text-muted small mb-2">Alimentos</span>
                            <h5 class="card-title h6">Royal Canin Adult Medium</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <span class="text-danger me-2">$899</span>
                                    <small class="text-muted text-decoration-line-through">$1,059</small>
                                </div>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="fas fa-shopping-cart me-2"></i>
                                Agregar al carrito
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Más productos aquí... -->
            </div>

            <!-- Paginación -->
            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php include './templates/footer.php'; ?>