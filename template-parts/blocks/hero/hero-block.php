<?php
/* Hero Block */
$link = get_field('button');
$image = get_field('image');
?>

<section class="hero">
    <div class="container hero-content d-flex-md-up">
        <div class="hero-content-left">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('text'); ?></p>
            <a class="btn" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
        </div>
        <div class="hero-content-right">
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        </div>
    </div>
</section>

