<!-- footer.php -->
<footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; <?php echo date('Y'); ?> Veterinaria. Todos los derechos reservados.</p>
        <p><a href="#" class="text-white">Aviso de privacidad</a> | <a href="#" class="text-white">Términos y condiciones</a></p>
    </footer>

    <a href="https://wa.me/524272737288" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://facebook.com/tu_pagina" class="facebook-float" target="_blank">
        <i class="fab fa-facebook"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>