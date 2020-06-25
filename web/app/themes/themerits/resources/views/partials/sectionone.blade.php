<div class="container-fluid sectioOne" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-10">
        <div class="row">
          <div class="col setOne">
            <h2><?php the_field('sectionOne_title'); ?></h2>
            <p><?php the_field('sectionOne_description'); ?></p>
            <a href="<?php the_field('sectionOne_link_button') ?>" class="btn btn-danger"><?php the_field('sectionOne_title_button') ?></a>
          </div>
          <div class="col">
            <?php $image_one = get_field('sectionOne_image'); ?>
            <img class="mb-5" src="{{ $image_one }}" alt="<?php the_field('sectionOne_title'); ?>" >
            <div class="icon-sectioOne"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>