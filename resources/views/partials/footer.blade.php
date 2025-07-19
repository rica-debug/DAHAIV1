<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Columna Logo -->
            <div class="footer-column logo-column">
                <div class="footer-logo">
                    <img src="{{ asset('uploads/image/20240117/65a73f44af937.svg') }}" alt="Dahai Solar" class="logo-img">
                </div>
            </div>

            <!-- Columna Productos -->
<div class="footer-column">
    <h3 class="footer-title">PRODUCTO</h3>
    <ul class="footer-links">
        <li><a href="{{ route('products.solar-modules') }}">Módulos fotovoltaicos</a></li>
        <li><a href="{{ route('products.inverters') }}">Inversor</a></li>
        <li><a href="{{ route('products.storage-solutions') }}">Batería</a></li>
        <li><a href="{{ route('products.ev-charger') }}">Pila de carga</a></li>
    </ul>
</div>
            <!-- Columna Webpage -->
            <div class="footer-column">
                <h3 class="footer-title">WEBPAGE</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('company') }}">Sobre nosotros</a></li>
                    <li><a href="{{ route('career') }}">Ocupación</a></li>
                    <li><a href="{{ route('join') }}">Distribuidores</a></li>
                    <li><a href="{{ route('contact') }}">Enlace</a></li>
                </ul>
            </div>

            <!-- Columna Contacto -->
            <div class="footer-column contact-column">
                <div class="contact-info">
                    <p class="copyright">Copyright © 2011-2022 东营大海科林光电有限公司 All Rights Reserved.</p>
                    <p class="legal-link"><a href="https://beian.miit.gov.cn/" target="_blank">鲁ICP备2021028624号-2</a></p>
                    
                    <div class="contact-details">
                        <p><a href="tel:+4904212042155">+49(0)421 2042 155</a></p>
                        <p><a href="mailto:info@dahaisolar.de">info@dahaisolar.de</a></p>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100064287032583" target="_blank">Facebook</a>
                        <a href="https://www.instagram.com/dahaisolar_2011/" target="_blank">Instagram</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Línea inferior -->
        <div class="footer-bottom">
            <div class="legal-links">
                <a href="{{ route('statement') }}">Declaración del sitio web</a>
                <a href="{{ route('privacy') }}">Política de privacidad</a>
            </div>
        </div>
    </div>
</footer>