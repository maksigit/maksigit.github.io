<footer class="main-footer">
    <div class="footer-top">
        <div class="container">
            <div class="widget-area widget-area_contact-us">
<!--                --><?php
//                if (function_exists('dynamic_sidebar'))
//                    dynamic_sidebar('footer-sidebar-contact-us');
//                ?>
                <h2 class="widgettitle">Contact Us</h2>
                <ul class="contact-us">
                    <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>647.296.6945</a></li>
                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>183 Willowdale Ave Toronto, ON M2N
                            4Y9, Canada</a></li>
                    <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>info@EliBakhtiari.com</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="widget-area widget-area_quick-links">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer-sidebar-quick-links:');
                ?>
            </div>

            <div class="widget-area widget-area_information">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('footer-sidebar-information');
                ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <ul class="privacy">
                <li><a href="">Privacy policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
            </ul>
            <ul>
                <li><a href="">Real estate websites by</a></li>
                <li><a href="">Lollipopmedia.ca</a></li>
            </ul>
        </div>
    </div>

    <?php wp_footer(); ?>

</footer>
</body>
</html>

