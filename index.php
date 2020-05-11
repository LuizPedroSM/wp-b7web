<?php get_header();?>

<?php (is_home())? get_template_part('template_parts/banner-home') : get_template_part('template_parts/banner-single');?>

<div class="testimonials">
    <div class="container">
        <div class="col-sm-6">
            <?php 
            $t = rand(1, 5);
            $txt = get_theme_mod('bb_testi'.$t.'_txt');
            $author = get_theme_mod('bb_testi'.$t.'_author');
            $url = get_theme_mod('bb_testi'.$t.'_url');
            $url = wp_get_attachment_image_src($url);
            ?>
            <img src="<?php echo $url[0];?>" alt="Autor img">
            <i>"<?php echo $txt;?>"</i> <br />
            <strong><?php echo $author;?></strong>
        </div>
        <div class="col-sm-6">
            <?php 
            $t2 = rand(1, 5);
            while($t2 == $t) {
                $d2 = rand(1 ,5);
            };
            $txt = get_theme_mod('bb_testi'.$t2.'_txt');
            $author = get_theme_mod('bb_testi'.$t2.'_author');
            $url = get_theme_mod('bb_testi'.$t2.'_url');
            $url = wp_get_attachment_image_src($url);
            ?>
            <img src="<?php echo $url[0];?>" alt="Autor img">
            <i>"<?php echo $txt;?>"</i> <br />
            <strong><?php echo $author;?></strong>
        </div>
    </div>
</div>
<?php get_footer()?>