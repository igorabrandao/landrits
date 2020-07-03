<div class="container-fluid sectionThree">
    <div class="container">
        <div class="row justify-content-center setThree-one">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col one">
                        <h3><?php the_field('sectioThree_title'); ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col setThree-two">
                        <div class="col one">
                            <?php $image = get_field('sectioThree_image'); ?>
                            <img src="{{ $image }}" alt="<?php the_field('sectioThree_title'); ?>">
                            <a href="<?php the_field('sectioThree_link_button') ?>"
                                class="btn btn-danger"><?php the_field('sectioThree_title_button') ?></a>
                        </div>
                        <div class="col two">
                            <h2><?php the_field('sectioThree_title'); ?></h2>
                        </div>
                    </div>
                    <div class="col setThree-three">
                        <div class="col one">
                            <p><?php the_field('sectioThree_description_one'); ?></p>
                        </div>
                        <div class="col two">
                            <p><?php the_field('sectioThree_description_two'); ?>
                            </p>
                        </div>
                        <div class="col three">
                            <div class="bg-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>