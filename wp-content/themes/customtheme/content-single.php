<div class="headea-page">
    <h1 class="mt-4"><?php the_title() ?></h1>
    <p>Posted on <?php echo get_the_date() ?></p>
</div>
<?php the_content() ?>
<!-- swiper -->
<div class="card">
    <?php the_post_thumbnail('post-large',  ['class' => 'card-img-top' ]) ?>
    <div class="card-body">
        <h3 class="card-title"><?php the_title() ?></h3>
        <p class="card-text"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>">[..]</a>
    </div>
    <div class="card-footer text-muted">
        Posted on <?php echo get_the_date() ?> by
        <a href="#"><?php the_author() ?></a>
    </div>
</div>