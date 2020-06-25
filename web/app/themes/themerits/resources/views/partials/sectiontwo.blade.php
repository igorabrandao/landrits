<div class="container-fluid sectioTwo">
    <div class="container mb-5">
        <div class="row justify-content-center ">
            <div class="col-sm-9 sectioRow">
                <div class="row">
                    <div class="col setTwo one">
                        <h3><?php the_field('sectioTwo_title'); ?></h3>
                        <p>
                            <?php the_field('sectioTwo_description'); ?>
                        </p>
                    </div>
                    <div class="col">
                        <?php $image_two = get_field('sectioTwo_image'); ?>
                        <img src="{{ $image_two }}" alt="<?php the_field('sectioTwo_title'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>