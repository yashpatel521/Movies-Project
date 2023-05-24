<div class="main-content">
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Trending Movies</h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="favourite-slider">
                <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                    <ul class="swiper-wrapper p-0 m-0 ">
                        <?php
                        for ($i = 0; $i < sizeof($TrendingMoviesList->results); $i++) {
                            $movie = $TrendingMoviesList->results[$i];
                        ?>
                            <li class="swiper-slide slide-item">
                                <div class="block-images position-relative ">
                                    <div class="img-box">
                                        <img src="<?= IMAGEURL . 'w500' . $movie->backdrop_path; ?>" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-detail.html"><?= $movie->title; ?></a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-white">Release Date : <?= $movie->release_date; ?></span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="show-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now
                                            </a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li>
                                                <span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box"><?= (int)$movie->vote_average; ?>+</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="verticle-slider">
        <div class="container-fluid">
            <section class="slider">
                <div class="slider-flex position-relative">
                    <div class="swiper-button-prev verticle-btn"></div>
                    <h4 class="main-title ">Popular Tv Shows</h4>
                    <div class="slider--col position-relative">
                        <div class="slider-prev btn-verticle"><i class="ri-arrow-up-s-line vertical-aerrow"></i></div>
                        <div class="slider-thumbs" data-swiper="slider-thumbs">
                            <div class="swiper-container " data-swiper="slider-thumbs-inner">
                                <div class="swiper-wrapper top-ten-slider-nav">
                                    <?php
                                    for ($i = 0; $i < sizeof($TopRatedTvShowsList->results); $i++) {
                                        $tvShow = $TopRatedTvShowsList->results[$i];
                                    ?>
                                        <div class="swiper-slide swiper-bg">
                                            <div class="block-images position-relative ">
                                                <div class="img-box slider--image">
                                                    <img src="<?= IMAGEURL . 'w500' . $tvShow->backdrop_path; ?>" class="img-fluid" alt="" loading="lazy">
                                                </div>
                                                <div class="block-description">
                                                    <h6 class="iq-title"><a href="show-detail.html"><?= $tvShow->name; ?></a></h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <span class="text-white">Rating <?= $tvShow->vote_average; ?></span>
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a href="show-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                            Play Now
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
                                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                                        <li>
                                                            <span><i class="ri-heart-fill"></i></span>
                                                            <span class="count-box">2+</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="slider-next btn-verticle"><i class="ri-arrow-down-s-line vertical-aerrow"></i></div>
                    </div>
                    <div class="slider-images" data-swiper="slider-images">
                        <div class="swiper-container " data-swiper="slider-images-inner">
                            <div class="swiper-wrapper ">
                                <?php
                                for ($i = 0; $i < sizeof($TopRatedTvShowsList->results); $i++) {
                                    $tvShow = $TopRatedTvShowsList->results[$i];
                                ?>
                                    <div class="swiper-slide">
                                        <div class="slider--image block-images"><img src="<?= IMAGEURL . 'original' . $tvShow->backdrop_path; ?>" loading="lazy" alt="" /></div>
                                        <div class="description">
                                            <div class="block-description">
                                                <h6 class="iq-title"><a href="show-detail.html"><?= $tvShow->name; ?></a></h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="text-white">Rating <?= $tvShow->vote_average; ?></span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="show-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                        Play Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev verticle-btn"></div>
                    <div class="swiper-button-next verticle-btn"></div>
                </div>
        </div>
        </section>
    </div>
</div>