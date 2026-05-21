<?php
    //API Controller
    require_once "config.php";
    require_once "LessonMovieHandler.php";

    //
    $lessonActivePage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $lessonHandlerInstance = new LessonMovieHandler(TMDB_BASE_URL, TMDB_API_KEY);
    $lessonMovieRecords = $lessonHandlerInstance->fetchCurrentPopular($lessonActivePage);

    //loads the website
    require_once "views/movies.view.php";
    //can tell whats ai based on bootstrap
    //right, page source, copy all, add through validator
?>