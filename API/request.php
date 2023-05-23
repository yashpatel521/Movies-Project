<?php

$appendApiKey = '?api_key=' . APIKEY . '&language=en-US';

$genere = callAPI('GET', BASEURL . 'genre/movie/list' . $appendApiKey);

$popularMoviesList = callAPI('GET', BASEURL . 'movie/popular' . $appendApiKey);
$TrendingMoviesList = callAPI('GET', BASEURL . 'trending/movie/day' . $appendApiKey);
$TrendingTvShowList = callAPI('GET', BASEURL . 'trending/tv/day' . $appendApiKey);
