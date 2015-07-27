<?php
/**
 * Footer Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
?>
<?php do_atomic('after_main'); // after_main  ?>

<?php get_sidebar('subsidiary'); // Loads the sidebar-subsidiary.php template. ?>

<?php do_atomic('before_footer'); // before_footer ?>

<footer id="footer-wrapper">

    <?php do_atomic('open_footer_wrapper'); // open_footer_wrapper ?>

    <div class="container">

        <div class="row">

            <?php hybrid_footer_content(); ?>

            <?php do_atomic('footer'); // footer ?>

        </div><!-- .row -->

    </div><!-- .container -->

    <?php do_atomic('close_footer'); // close_footer_wrapper ?>

</footer><!-- #footer -->

<?php do_atomic('after_footer'); // after_footer ?>

</div><!-- #body-innerwrapper -->

<?php do_atomic('close_body'); // close_body ?>

<?php wp_footer(); // wp_footer ?>

</body>
</html>