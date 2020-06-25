<?php $image =  wp_get_attachment_url(get_theme_mod( 'custom_logo' )); // get image custom logo ?>

<div class="container-fuild">
  <nav class="navbar navbar-expand-lg navbar-light" style="">
    <div class="container">
          <a class="brand" href="{{ home_url('/') }}">
              <img src="{{ $image }}" alt="{{ $siteName }}">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'echo' => false]) !!}
              @endif
          </div>
      </div>
  </nav>
</div> 