<?php
/* CTA Contact Us */
    $btn = get_field('cta_button');
    $img = get_field('image');
?>

<section class="col-2 <?php the_field('custom_class'); ?>">
    <div class="container d-flex-lg-up">
        <div class="col-2-left">  
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('subtitle'); ?></p>
            <a href="<?php echo $btn['url']; ?>" class="btn btn-primary" title="<?php echo $btn['title']; ?>"><?php echo $btn['title']; ?></a>
        </div>
        <div class="col-2-right">
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
    </div>
</section>



