<?php
$movie = $TopRatedMoviesList->results[0];
?>

<section id="parallex" class="parallax-window" style="background: url(<?= IMAGEURL . 'original' . $movie->backdrop_path; ?>) center center;">
    <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
            <div class="col-xl-5 col-lg-12 col-md-12 r-mb-23">
                <div class="text-left">
                    <a href="javascript:void(0);">
                        <h2><strong><em><?= $movie->title; ?></em></strong></h2>
                    </a>
                    <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                            <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                        </ul>
                        <span class="text-white ml-3"><?= $movie->vote_average; ?></span>
                    </div>
                    <div class="movie-time d-flex align-items-center mb-3 iq-ltr-direction">
                        <div class="badge badge-secondary mr-3"><?= $movie->adult ? '18' : '13'; ?>+</div>
                        <h6 class="text-white"><?= $movie->release_date ?></h6>
                    </div>
                    <h4 class="iq-title mb-2">
                        Top Rated Movie
                    </h4>
                    <p class="iq-title-desc mb-5"><?= $movie->overview ?> </p>
                    <div class="parallax-buttons">
                        <a href="movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>Play Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 col-md-12 mt-5 mt-xl-0">
                <div class="parallax-img">
                    <a href="movie-details.html">
                        <img src="<?= IMAGEURL . 'original' . $movie->backdrop_path; ?>" class="img-fluid w-100" loading="lazy" alt="bailey">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>