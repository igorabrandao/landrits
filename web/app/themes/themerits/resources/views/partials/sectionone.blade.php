<div class="container-fluid sectioOne" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-10">
        <div class="row">
          <div class="col" style="padding: 5% 20% 0% 0%;font-size: smaller;">
            <h1 style="font-weight: bold;"><?php the_field('sectionOne_title'); ?></h1>
            <p><?php the_field('sectionOne_description'); ?></p>
            <a href="<?php the_field('sectionOne_link_button') ?>" style="
            -webkit-box-shadow: 7px 6px 3px 0px rgba(55, 61, 135, 0.61);
            -moz-box-shadow:    7px 6px 3px 0px rgba(55, 61, 135, 0.91);
            box-shadow:         7px 6px 3px 0px rgba(55, 61, 135, 0.91); 
            padding: 2% 10%; 
            font-size: unset;
            font-weight: 800;" class="btn btn-danger"><?php the_field('sectionOne_title_button') ?></a>
          </div>
          <div class="col">
            <?php $image_one = get_field('sectionOne_image'); ?>
            <img class="mb-5" src="{{ $image_one }}" alt="<?php the_field('sectionOne_title'); ?>" width="617">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>