<!-- Slider Start -->
<section id="home-banner-slider" class="iq-main-slider p-0 iq-rtl-direction swiper banner-home-swiper overflow-hidden" data-swiper="home-banner-slider">
    <div class="slider m-0 p-0 swiper-wrapper home-slider">
        <?php for ($i = 0; $i < 3; $i++) {
            $genreList = [];
            $movie = $popularMoviesList->results[$i];
            foreach ($genere->genres as $item) {
                if (in_array($item->id, $movie->genre_ids)) {
                    $genreList[] = $item->name;
                }
            }
        ?>
            <div class="swiper-slide  slide swiper-bg" style="background-image:url(<?= IMAGEURL . 'original' . $movie->backdrop_path; ?>);">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-inner h-100">
                        <div class="row align-items-center  iq-ltr-direction h-100 ">
                            <div class="col-lg-7 col-md-12">
                                <h1 class="slider-text big-title title text-uppercase" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4"><?= $movie->original_title; ?></h1>
                                <div class="d-flex flex-wrap align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">
                                    <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                        <span class="text-white ml-2"></span>
                                    </div>
                                    <div class="d-flex align-items-center mt-2 mt-md-3">
                                        <span class="badge badge-secondary p-2">Rating <?= $movie->vote_average; ?></span>
                                    </div>
                                    <p data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".5"><?= $movie->overview; ?>
                                    </p>
                                </div>
                                <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                                    <div class="text-primary title genres">
                                        Genres: <span class="text-body"><a href="category-action.html"><?= $genreList[0]; ?></a></span>
                                    </div>
                                    <div class="text-primary title tag">
                                        Tag: <span class="text-body"><?= implode(", ", $genreList) ?></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".6">
                                    <a href="show-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                </div>
                            </div>
                            <div class=" col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                                <a href="video/trailer.mp4" class="video-open playbtn" tabindex="0">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                        <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                        <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                        </circle>
                                    </svg>
                                    <span class="w-trailor">Watch Trailer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="swiper-banner-button-prev swiper-nav" id="home-banner-slider-prev">
        <i class="ri-arrow-left-s-line arrow-icon"></i>
    </div>
    <div class="swiper-banner-button-next swiper-nav" id="home-banner-slider-next">
        <i class="ri-arrow-right-s-line arrow-icon"></i>
    </div>
    <div class="swiper-pagination"></div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test"></circle>
        </symbol>
    </svg>
</section>
<!-- Slider End -->