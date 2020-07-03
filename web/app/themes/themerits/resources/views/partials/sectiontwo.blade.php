<div class="container-fluid sectioTwo">
    <div class="container mb-5">
        <div class="row justify-content-center ">
            <div class="col-sm-10 setTwo">
                <div class="row">
                    <div class="col-sm-8 one">
                        <h3><?php the_field('sectioTwo_title'); ?></h3>
                        <p>
                            <?php the_field('sectioTwo_description'); ?>
                        </p>
                    </div>
                    <div class="col-sm-4 two">
                        <?php $image_two = get_field('sectioTwo_image'); ?>
                        <img src="{{ $image_two }}" alt="<?php the_field('sectioTwo_title'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>