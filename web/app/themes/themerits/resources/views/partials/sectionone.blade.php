<div class="container-fluid sectioOne" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-10 col-lg-10">
        <div class="row">
          <div class="col-12 col-sm-4">
            <h2><?php the_field('sectionOne_title'); ?></h2>
            <p><?php the_field('sectionOne_description'); ?></p>
            <a href="<?php the_field('sectionOne_link_button') ?>" class="btn btn-danger"><?php the_field('sectionOne_title_button') ?></a>
          </div>
          <div class="col-12 col-sm-7 align-self-end">
            <?php $image_one = get_field('sectionOne_image'); ?>
            <img class="img-fluid" src="{{ $image_one }}" alt="<?php the_field('sectionOne_title'); ?>" >
            <div class="bg-sectioOne"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>