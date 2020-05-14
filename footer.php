<footer>
    <div class="footer_up">
        <div class="container">
            <h3>Nossos Cursos</h3>
            <div class="row cursos">
                <div class="col-sm-4">
                    <a href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cursos/pzp_cover.png"
                            alt="PHP">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cursos/wpzp_cover.png"
                            alt="WordPress">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cursos/rnzp_cover.png"
                            alt="Ract Native">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_down">
        <div class="container">
            <?php bloginfo('name'); echo ' - '.date('Y');?><br />
            Todos os direitos reservados
        </div>
    </div>
</footer>
<script type="text/javascript">
let ajaxUrl = "<?php echo admin_url('admin-ajax.php');?>";
</script>
<?php wp_footer();?>
<style type="text/css">
.post_title a {
    color: <?php echo get_theme_mod('bb_colorTitle');
    ?>;
}

.post_button {
    background-color: <?php echo get_theme_mod('bb_colorButton');
    ?>;
}
</style>
</body>

</html>