</main>
    <!-- FOOTER SECTION-->
    <footer class="container-fluid">
        <div class="footer-content container">
            <div class="row footer-logo">
                <div class="col-md-4">
                    <img src="wp-content/themes/kow22/Assets/logos/kings-icon.svg" alt="Kings Academy Icon" class="footer-icon">
                </div>

            </div>
            <div class="row footer-text">
                <div class="col-md-4 footer-contact footer-column">
                    <p>The Kings of Wessex Academy<br>Station Road, Cheddar<br>Somerset BS27 3AQ</p>
                    <p>Headteacher: Dave Wiltshire</p>
                    <p><i class="fa-solid fa-phone"></i><span class="footer-spacer"></span>01934 742 608</p>
                    <p><a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope"></i></i><span class="footer-spacer"></span>Email Us</a></p>
                    <p class="mb-5"><a href="https://www.google.com/maps/dir//The+Kings+of+Wessex+Academy+Station+Rd+Cheddar+BS27+3AQ/@51.2744878,-2.7786577,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x48721dd466cc4fd1:0x35a655c7fba40d1!2m2!1d-2.7786577!2d51.2744878" target="_blank" ><i class="fa-solid fa-location-dot"></i></i><span class="footer-spacer"></span>Get Directions</a></p>

                    <div class="footer-social"><a href="https://twitter.com/kowessex" target="_blank" ><i class="fa-brands fa-twitter fa-2xl"></i></a><span class="footer-spacer"></span><span class="footer-spacer"></span><a href="https://www.facebook.com/kowessex/" target="_blank"><i class="fa-brands fa-facebook-f fa-2xl"></i></a></div>

                    <p class="mt-4">A charitable company limited by guarantee<br>
                        Registered in England<br>
                        Company Number 7348580</p>
                    
                </div>
                <div class="col-md-4 footer-links footer-column">
                    <h4 class="footer heading mb-3">Quick Links</h4>
                    <?php wp_nav_menu( array( 'theme_location' => 'quick-links' ) ); ?>
                    
                </div>
                

                <div class="col-md-4 footer-accessability d-flex-column footer-column">
                    <div class="accesability-top">
                        <h4 class="footer heading mb-3">Accessability</h4>
                        <?php wp_nav_menu( array( 'theme_location' => 'accessability' ) ); ?>
                    </div>

                    <a href="https://wessexlearningtrust.co.uk" target="_blank"><img class="wlt-white mt-5 mb-2" src="/KOW22-WP/wp-content/themes/kow22/Assets/logos/wlt-white.png" alt=""></a>               
                </div>

        </div>
    </footer>
    

  
    <?php

wp_footer();
?>

</body>
</html>
