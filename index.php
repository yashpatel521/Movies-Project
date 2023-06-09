<?php

define('PATHDIR', __DIR__);

//API Files Include 
include(PATHDIR . '/API/credential.php');
include(PATHDIR . '/API/functions.php');
include(PATHDIR . '/API/request.php');

// File to include like Css and JavaScript
include(PATHDIR . '/components/headerFile.php');
include('./components/header.php');

// Content of the page start
include('./components/home/slider.php');
include('./components/home/moviesList.php');
include('./components/home/parrallex.php');
// include('./components/swiperGallery.php');
include('./components/home/recommend.php');
//Content of the page End

//Javascript for web page
include('./components/footer.php');
include('./components/footerFile.php');
