<section class="">
    <div class="container-fluid">
        <div class="row m-0 p-0">
            <div id="iq-trending" class="s-margin iq-tvshow-tabs iq-rtl-direction iq-trending-tabs">
                <div class="iq-main-header d-flex align-items-center justify-content-between">
                    <h4 class="main-title">
                        Popular Tv Shows
                    </h4>
                </div>
                <div class="trending-contens position-relative ">
                    <div id="gallery-top" class="gallery-thumbs" data-swiper="gallery-top">
                        <ul class="swiper-wrapper list-inline p-0 m-0  trending-slider-nav align-items-center ">
                            <?php
                            for ($i = 0; $i < sizeof($TopRatedTvShowsList->results); $i++) {
                                $tvShow = $TopRatedTvShowsList->results[$i];
                            ?>
                                <li class="swiper-slide">
                                    <a href="javascript:void(0);">
                                        <div class="movie-swiper position-relative">
                                            <img src="<?= IMAGEURL . 'w500' . $tvShow->backdrop_path; ?>" alt="" />
                                        </div>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="gallery-bottom" class="swiper trending-tab-slider" data-swiper="gallery-bottom">
                        <ul class="swiper-wrapper  list-inline p-0 m-0 d-flex align-items-center">
                            <?php
                            for ($i = 0; $i < sizeof($TopRatedTvShowsList->results); $i++) {
                                $tvShow = $TopRatedTvShowsList->results[$i];
                            ?>
                                <li class="swiper-slide swiper-bg slider-big-img-1" style="background-image: url(<?= IMAGEURL . 'original' . $tvShow->backdrop_path; ?>);">
                                    <div class="position-relative">
                                        <div class="trending-custom-tab">
                                            <div class="tab-title-info position-relative">
                                                <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" data-toggle="pill" href="#trending-data1" role="tab" aria-selected="true">Overview</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill" href="#trending-data2" role="tab" aria-selected="false">Episodes</a>
                                                    </li>
                                                    <li class="nav-item d-none">
                                                        <a class="nav-link" data-toggle="pill" href="#trending-data3" role="tab" aria-selected="false">Trailers</a>
                                                    </li>
                                                    <li class="nav-item d-none">
                                                        <a class="nav-link" data-toggle="pill" href="#trending-data4" role="tab" aria-selected="false">Similar Like This</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content trending-content">
                                                    <div id="trending-data1" class="tab-pane fade active show ">
                                                        <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                            <a href="javascript:void(0);" tabindex="0">
                                                                <div class="res-logo">
                                                                    <div class="channel-logo">
                                                                        <img src="images/logo.png" class="c-logo" alt="streamit">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <h1 class="trending-text big-title text-uppercase"><?= $tvShow->name; ?></h1>
                                                            <div class="d-flex align-items-center text-white text-detail">
                                                                <span class="badge badge-secondary p-3">18+</span>
                                                                <span class="ml-3">3 Seasons</span>
                                                                <span class="trending-year">2020</span>
                                                            </div>
                                                            <div class="d-flex align-items-center series mb-4">
                                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                                            </div>
                                                            <p class="trending-dec">
                                                                <?= $tvShow->overview; ?>
                                                            </p>
                                                            <div class="p-btns">
                                                                <div class="d-flex align-items-center p-0">
                                                                    <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                                    <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                        List</a>
                                                                </div>
                                                            </div>
                                                            <div class="trending-list mt-4">
                                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                        Moura, Boyd Holbrook, Joanna</span>
                                                                </div>
                                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                        Action, Thriller, Biography</span>
                                                                </div>
                                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                        Forceful</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="trending-data2" class="tab-pane fade ">
                                                        <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                            <a href="show-details.html" tabindex="0">
                                                                <div class="channel-logo">
                                                                    <img src="images/logo.png" class="c-logo" alt="stramit">
                                                                </div>
                                                            </a>
                                                            <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                            <div class="d-flex align-items-center text-white text-detail mb-4">
                                                                <span class="season_date ml-2">
                                                                    2 Seasons
                                                                </span>
                                                                <span class="trending-year">Feb 2019</span>
                                                            </div>
                                                            <div class="iq-custom-select d-inline-block sea-epi">
                                                                <select name="cars" class="form-control season-select">
                                                                    <option value="season1">Season 1</option>
                                                                    <option value="season2">Season 2</option>
                                                                    <option value="season3">Season 3</option>
                                                                </select>
                                                            </div>
                                                            <div class="episodes-contens mt-4">
                                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 1</a>
                                                                                <span class="text-primary">2.25 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body ">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 2</a>
                                                                                <span class="text-primary">3.23 m</span>
                                                                            </div>
                                                                            <p class="mb-0">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 3</a>
                                                                                <span class="text-primary">2 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body ">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 4</a>
                                                                                <span class="text-primary">1.12 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 5</a>
                                                                                <span class="text-primary">2.54 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="trending-data3" class="tab-pane fade">
                                                        <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                            <a href="javascript:void(0);" tabindex="0">
                                                                <div class="channel-logo">
                                                                    <img src="images/logo.png" class="c-logo" alt="stramit">
                                                                </div>
                                                            </a>
                                                            <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                            <div class="episodes-contens mt-4">
                                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="watch-video.html" target="_blank">
                                                                                <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                                <span class="text-primary">2.25 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="watch-video.html" target="_blank">
                                                                                <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                                <span class="text-primary">3.23 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="watch-video.html" target="_blank">
                                                                                <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                                <span class="text-primary">2 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="watch-video.html" target="_blank">
                                                                                <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                                <span class="text-primary">1.12 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="watch-video.html" target="_blank">
                                                                                <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                                <span class="text-primary">2.54 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="trending-data4" class="tab-pane fade">
                                                        <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                            <a href="javascript:void(0);" tabindex="0">
                                                                <div class="channel-logo">
                                                                    <img src="images/logo.png" class="c-logo" alt="stramit">
                                                                </div>
                                                            </a>
                                                            <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                            <div class="episodes-contens mt-4">
                                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 1</a>
                                                                                <span class="text-primary">2.25 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 2</a>
                                                                                <span class="text-primary">3.23 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 3</a>
                                                                                <span class="text-primary">2 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 4</a>
                                                                                <span class="text-primary">1.12 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="e-item">
                                                                        <div class="block-image position-relative">
                                                                            <a href="show-details.html">
                                                                                <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                            <div class="episode-play-info">
                                                                                <div class="episode-play">
                                                                                    <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="episodes-description text-body">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="show-details.html">Episode 5</a>
                                                                                <span class="text-primary">2.54 m</span>
                                                                            </div>
                                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-arrow swiper-button-next"></div>
                    <div class="swiper-arrow swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>