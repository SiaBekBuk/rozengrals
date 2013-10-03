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
    <div id="footer-info">
        Rozena 1, Rīga, Latvija<br/>
        <a href="mailto:info@rozengrals.lv">info@rozengrals.lv</a><br/>
        +371 67220356<br/>
        12:00 - 24:00
    </div>
</div>

</div>

<?php wp_footer(); ?>

<!-- Don't forget analytics -->

</body>

</html>
