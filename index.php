<?php

define('PATHDIR', __DIR__);

//API Files Include 
include(PATHDIR . '/API/credential.php');
include(PATHDIR . '/API/functions.php');
include(PATHDIR . '/API/request.php');

// File to include like Css and JavaScript
include(PATHDIR . '/components/headerFile.php');

// Content of the page start
include('./components/header.php');
include('./components/slider.php');
include('./components/moviesList.php');
include('./components/parrallex.php');
// include('./components/swiperGallery.php');
include('./components/recommend.php');
include('./components/footer.php');
//Content of the page End

//Javascript for web page
include('./components/footerFile.php');
