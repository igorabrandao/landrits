<div class="container-fluid sectionThree">
    <div class="container">
        <div class="row justify-content-center" style="position: relative; z-index:1; margin-bottom: 5%;">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col">
                        <h3><?php the_field('sectioThree_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center setThree-one">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <?php $image = get_field('sectioThree_image'); ?>
                            <img src="{{ $image }}" alt="<?php the_field('sectioThree_title'); ?>">
                            <a href="<?php the_field('sectioThree_link_button') ?>"
                                class="btn btn-danger"><?php the_field('sectioThree_title_button') ?></a>
                        </div>
                        <div class="col" style="top: 25%;">
                            <h3><?php the_field('sectioThree_title'); ?></h3>
                        </div>
                    </div>
                    <div class="col setThree-two">
                        <div class="col">
                            <p><?php the_field('sectioThree_description_one'); ?></p>
                        </div>
                        <div class="col">
                            <p><?php the_field('sectioThree_description_two'); ?>
                            </p>
                        </div>
                        <div class="col">
                            <div class="bg-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>