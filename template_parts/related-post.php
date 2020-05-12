<div class="col-sm-4">
    <?php if(has_post_thumbnail()):?>
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'post_thumb'));?>
    </a>
    <?php endif;?>
    <h3 class="post_title">
        <a href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>
    </h3>
    <p>
        <?php comments_number('0 comentários', 'um comentário', '% comentários');?>
    </p>
</div>