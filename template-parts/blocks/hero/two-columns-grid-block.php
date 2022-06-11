<?php
/* Two Columns With Grid Block */
$link = get_field('button');
$image = get_field('image');
?>


<?php if( have_rows('two_columns_text_and_grid') ): ?>
    <?php while( have_rows('two_columns_text_and_grid') ): the_row(); ?>
        <?php if( get_row_layout() == 'two_columns' ): 
            $btn = get_sub_field('button');
            ?>
            <section class="col-2 p-y-1 <?php the_sub_field('section_custom_class'); ?>">
                <div class="container d-flex-lg-up">
                    <div class="col-2-left-w1 pr m-b-1">
                        <span class="letter-bg">W</span>
                        <h2 class="pr d-inline-b">
                            <?php the_sub_field('title'); ?>
                            <span class="dots"></span>
                        </h2>
                        <p class="m-b-1"><?php the_sub_field('text'); ?></p>
                        <a class="btn btn-secondary" href="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></a>
                    </div>

                    <div class="col-2-right col-2-right-w1">
                        <?php if( have_rows('grid') ): ?>
                            <div class="col-grid text-center">
                                <?php while( have_rows('grid') ): the_row(); 
                                    $itemBtn = get_sub_field('item_button'); 
                                    $itemIco = get_sub_field('item_icon'); ?>
                                    
                                        <div class="col-grid-item">
                                            <img src="<?php echo $itemIco['url']; ?>" alt="<?php echo $itemIco['alt']; ?>">
                                            <h3><?php the_sub_field('item_title');?></h3>
                                            <p><?php the_sub_field('item_text');?></p>
                                            <a class="btn btn-secondary" href="<?php echo $itemBtn['url']; ?>"><?php echo $itemBtn['title']; ?></a>
                                        </div>
                                
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
