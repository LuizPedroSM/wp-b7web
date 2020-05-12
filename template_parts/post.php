<article <?php post_class(); ?>>
    <div class="row">
        <div class="col-sm-6">
            <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('large', array('class' => 'post_thumb'));?>
            </a>
            <?php endif; ?>
        </div>
        <div class="col-sm-6">
            <div class="post_title">
                <a href="<?php the_permalink();?>">
                    <?php the_title();?>
                </a>
            </div>
            <div class="post_excerpt">
                <?php the_excerpt();?>
            </div>
            <div class="post_readmore">
                <a href="<?php the_permalink();?>">
                    <span class="post_button">Leia Mais</span>
                </a>
            </div>
        </div>
    </div>
</article>