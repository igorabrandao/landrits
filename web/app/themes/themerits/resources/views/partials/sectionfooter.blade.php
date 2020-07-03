<div class="container-fluid sectionFooter">
    <div class="container">
        <div class="row justify-content-center setpOne">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col one">

                    </div>
                    <div class="col two">

                    </div>
                    <div class="col three">

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center setpTwo">
            <div class="col-sm-10">
                <div class="row one">
                    <div class="col align-self-start ">
                        <a class="brand" href="{{ home_url('/') }}">
                            <?php $image =  wp_get_attachment_url(get_theme_mod( 'custom_logo' )); ?>
                            <img src="{{ $image }}" alt="{{ $siteName }}">
                        </a>
                    </div>
                    <div class="col align-self-end">
                        <nav class="nav">
                            <a class="nav-link active" href="#">Active</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </nav>
                    </div>
                </div>
                <div class="row two" >
                    <p>Lorem Ipsum é simplesmente uma simulação de impressos. </p>
                </div>
            </div>
        </div>
    </div>
</div>