
    <footer>
        <div class="container text-center">
            <div class="row">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <a href="#" class="footer-logo mb-4">Vex</a>
                        <ul class="list-inline footer-menu">
                            <li class="list-inline-item">
                                <a href="#">HOME</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#about">ABOUT</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#service">SERVICES</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#contact">CONTACT</a>
                            </li>
                        </ul>
                        <p class="copyright-text"><?php echo cs_get_option('cpt_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <?php wp_footer(); ?>
</body>

</html>