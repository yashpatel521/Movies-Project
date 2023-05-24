<?php

$type = $_GET['type'];
$id = $_GET['id'];

$movieDetails = getMovieDetails($id);

$movieCast = getCast($id);
$director = array_filter($movieCast->crew, function ($var) {
    return ($var->job == 'Director');
});

$video = getVideo($id);

$genreList = [];
foreach ($movieDetails->genres as $item) {
    array_push($genreList, $item->name);
}
?>

<div class="main-content">
    <div class="show-movie">
        <div class="container-fluid">
            <div class="banner-wrapper overlay-wrapper iq-main-slider" style="background-image: url(<?= IMAGEURL . 'original' . $movieDetails->backdrop_path; ?>);">
                <div class="banner-caption">
                    <div class="movie-detail">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trending-info p-0">
                                    <h1 class="trending-text big-title text-uppercase mt-0"><?= $movieDetails->original_title ?></h1>
                                    <div class="slider-ratting d-flex align-items-center" data-animation-in="fadeInLeft">
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
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                        <span class="text-white ml-3"><?= (int)$movieDetails->vote_average ?>+</span>
                                    </div>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                        <?php
                                        for ($i = 0; $i < sizeof($genreList); $i++) {
                                            if ($i == 3) break;
                                        ?>
                                            <li class="trending-list"><a class="text-primary title" href=""><?= $genreList[$i] ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <div class="d-flex flex-wrap align-items-center text-white text-detail sesson-date">
                                        <span class="">Release Date </span>
                                        <span class="trending-year"><?= $movieDetails->release_date; ?></span>
                                    </div>
                                    <div class="trending-dec w-50">
                                        <p class="m-0"><?= $movieDetails->overview ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <a href="<?= $movieDetails->homepage ?>" target="_blank" class="d-flex align-items-center">
                            <div class="play-button ">
                                <i class="ri-play-fill" style="margin-right: 5px;"></i>
                            </div>
                            <h4 class="w-name text-white font-weight-700">Watch Original site</h4>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-auto mb-auto">

                            <ul class="p-0 list-inline d-flex flex-wrap align-items-center movie-content movie-space-action flex-wrap iq_tag-list">
                                <li class="text-primary text-lable"><i class="fa fa-tags font-Weight-900" aria-hidden="true"></i>Genre:</li>
                                <?php
                                foreach ($genreList as $genre) {
                                ?>
                                    <li> <a class="tag-list" href="#"><?= $genre ?></a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trailor-video  text-sm-right p-3  col-md-3 col-12">
                    <a href="https://www.youtube.com/watch?v=<?= $video; ?>" class="video-open playbtn block-images position-relative playbtn_thumbnail ">
                        <img width="1920" height="1080" src="<?= IMAGEURL . 'w500' . $movieDetails->backdrop_path; ?>" class="attachment-medium-large size-medium-large wp-post-image" alt="" loading="lazy"> <span class="content btn btn-transparant iq-button">
                            <i class=" mr-2"></i>
                            <span>Trailer Link</span>
                        </span>
                    </a>
                </div>
            </div>
            <br>
            <div id="iq-favorites" class="s-margin detail-cast-list iq-rtl-direction mt-0 starring">
                <div class="row m-0">
                    <div class="col-sm-12 overflow-hidden p-0">
                        <div class="iq-main-header d-flex align-items-center justify-content-between iq-ltr-direction">
                            <h4 class="main-title">Crew</h4>
                        </div>
                        <div class="favorites-contens iq-smovie-slider">
                            <ul class="inner-slider list-inline row p-0  iq-ltr-direction">
                                <?php
                                $i = 0;
                                foreach ($director as $item) {
                                    $i++;
                                    if ($i == 10) break;
                                ?>
                                    <li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6 my-2">
                                        <div class="cast-images position-relative row mx-0">
                                            <div class="col-sm-4 col-12 img-box p-0">
                                                <img src="<?= IMAGEURL . 'original' . $item->profile_path; ?>" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                            </div>
                                            <div class="col-sm-8 col-12 block-description starring-desc ">
                                                <h6 class="iq-title">
                                                    <a href="#" tabindex="0">
                                                        <?= $item->name ?></a>
                                                </h6>
                                                <div class="video-time d-flex align-items-center my-2">
                                                    <span class="text-white">As <?= $item->job; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                                <?php
                                $i = 0;
                                foreach ($movieCast->cast as $item) {
                                    $i++;
                                    if ($i == 10) break;
                                ?>
                                    <li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6 my-2">
                                        <div class="cast-images position-relative row mx-0">
                                            <div class="col-sm-4 col-12 img-box p-0">
                                                <img src="<?= IMAGEURL . 'original' . $item->profile_path; ?>" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                            </div>
                                            <div class="col-sm-8 col-12 block-description starring-desc ">
                                                <h6 class="iq-title">
                                                    <a href="#" tabindex="0">
                                                        <?= $item->name ?></a>
                                                </h6>
                                                <div class="video-time d-flex align-items-center my-2">
                                                    <span class="text-white">As <?= $item->character; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('similar.php') ?>
    </div>
</div>