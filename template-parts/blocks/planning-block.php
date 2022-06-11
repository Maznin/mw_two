<?php
/* Project Planning Section */
    $title = get_field('title');
?>

<section class="p-y-1 <?php the_field('custom_class'); ?>" >
    <div class="container">
        <div class="planning-top text-center pr">
            <span class="letter-bg"><?php echo substr($title, 0, 1); ?></span>
            <h2 class="pr d-inline-b">
                <?php the_field('title'); ?>
                <span class="dots"></span>
            </h2>
            <p><?php the_field('subtitle'); ?></p>
        </div>
        <div class="planning-bottom">
            <?php if( have_rows('planning') ): 
                $counter = 0;    ?>
                <div class="planning-list">
                    <?php while( have_rows('planning') ): the_row(); 
                        $counter++; ?>
                        <div class="planning-list-item pr">
                            <h3><?php the_sub_field('item_title'); ?></h3>
                            <p><?php the_sub_field('item_subtitle'); ?></p>
                            <span class="counter-bg"><?php echo ".0" . $counter; ?></span>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>