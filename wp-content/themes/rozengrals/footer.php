            <div id="footer">
                <div id="footer-nav">
                    <?php wp_nav_menu('menu=main'); ?>
                </div>
                <div id="copyright">
                    <span>Все права защищены</span>
                    &copy;<?php echo date("Y");
                    echo " ";
                    bloginfo('name'); ?>
                </div>
            </div>

        </div>

<?php wp_footer(); ?>

<!-- Don't forget analytics -->

</body>

</html>
