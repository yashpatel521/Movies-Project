<?php

define('PATHDIR', __DIR__);

//API Files Include 
include(PATHDIR . '/API/credential.php');
include(PATHDIR . '/API/functions.php');
include(PATHDIR . '/API/request.php');

// File to include like Css and JavaScript
include('./components/headerFile.php');
include('./components/header.php');

// Content of the page start
include('./components/details/main.php');
//Content of the page End

//Javascript for web page
include('./components/footer.php');
include('./components/footerFile.php');
