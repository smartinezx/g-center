<!-- 
        footer
     -->
<div id="footer" class="sec-footer">
    <div class="container">
        <div class="content-footer-wrapper">
            <div class="greed-footer-wrapper">
                <div class="footer-column-wrapper1">
                    <img src="<?php echo base_url; ?>Assets/images/gym--logo.png" alt="">
                </div>
                <div class="footer-column-wrapper">
                    <div class="menu-content-footer-wrapper">
                        <a href="#" class="link-txt-20 w-inline-block">
                            <div class="txt-20">Inicio</div>
                        </a>
                        <div class="line-content-footer"></div>
                        <a href="#about" class="link-txt-20 w-inline-block">
                            <div class="txt-20">Sobre nosotros</div>
                        </a>
                        <div class="line-content-footer"></div>
                        <a href="#pricing" class="link-txt-20 w-inline-block">
                            <div class="txt-20">Precio</div>
                        </a>
                    </div>
                    <div class="cta-footer-wraper">
                        <div class="line-gorizontal-footer"></div>
                        <div class="class-name-txt">Tienes el control</div>
                    </div>
                    <div class="line-vertical-footer"></div>
                    <div class="line-vertical-footer right"></div>
                </div>
                <div class="footer-column-wrapper">
                    <div class="menu-content-footer-wrapper">
                        <div class="link-txt-20 w-inline-block">
                            <div class="txt-20">Siguenos en redes :</div>
                        </div>
                        <a href="https://www.facebook.com/Gcenter.gimnasio/" target="_blank" class="link-txt-20 w-inline-block">
                            <div class="txt-20">Facebook</div>
                        </a>
                        <a href="https://www.instagram.com/gcentergimnasio/" target="_blank" class="link-txt-20 w-inline-block">
                            <div class="txt-20">Instagram</div>
                        </a>
                    </div>
                    <div class="cta-footer-wraper">
                        <div class="line-gorizontal-footer"></div>
                        <div class="content-footer-bottom">
                            <a class="txt-16" href="mailto:g.center.corp<@gmail.com">g.center.corp@gmail.com</a>
                            <a class="txt-16" href="tel:305 3561065">305 3561065</a>
                            <a class="txt-16" href="#">Diagonal 32 Tv 71-85 Cerezos</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="<?php echo base_url; ?>Assets/js/home.js"></script>
<!-- 
    navbar background scrolled
 -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");

        window.onscroll = function() {
            // Verifica la posición del scroll
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        };
    });
</script>

</body>

</html>