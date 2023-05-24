<section id="iq-tvthrillers" class="s-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">Trending Tv Shows</h4>
                    <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper p-0 m-0">
                    <?php
                    for ($i = 0; $i < sizeof($TrendingTvShowList->results); $i++) {
                        $tvShow = $TrendingTvShowList->results[$i];
                    ?>
                        <li class="swiper-slide slide-item">
                            <div class="block-images position-relative ">
                                <div class="img-box">
                                    <img src="<?= IMAGEURL . 'w500' . $tvShow->backdrop_path; ?>" loading="lazy" class="img-fluid" alt="">
                                </div>
                                <div class="block-description">
                                    <h6 class="iq-title"><a href="show-detail.html"><?= $tvShow->name ?></a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <span class="text-white">Release Date : <?= $tvShow->first_air_date; ?></span>
                                    </div>
                                    <div class="hover-buttons">
                                        <a href="show-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                            Play Now
                                        </a>
                                    </div>
                                </div>
                                <div class="block-social-info">
                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                        <li class="share">
                                            <span><i class="ri-share-fill"></i></span>
                                            <div class="share-box">
                                                <div class="d-flex align-items-center">
                                                    <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                    <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span><i class="ri-heart-fill"></i></span>
                                            <span class="count-box">2+</span>
                                        </li>
                                        <li><span><i class="ri-add-line"></i></span></li>
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