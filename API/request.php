<?php


$genere = callAPI('GET', BASEURL . 'genre/movie/list' . $appendApiKey);

$popularMoviesList = callAPI('GET', BASEURL . 'movie/popular' . $appendApiKey);
$TrendingMoviesList = callAPI('GET', BASEURL . 'trending/movie/day' . $appendApiKey);
$TopRatedMoviesList = callAPI('GET', BASEURL . 'movie/top_rated' . $appendApiKey);
$TopRatedTvShowsList = callAPI('GET', BASEURL . 'tv/top_rated' . $appendApiKey);
$TrendingTvShowList = callAPI('GET', BASEURL . 'trending/tv/day' . $appendApiKey);
