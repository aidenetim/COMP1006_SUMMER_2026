<?php
    class LessonMovieHandler{
        private $targetURL;
        private $securityKey;

        public function __construct($incomingURL, $incomingKey){
            $this->targetURL = $incomingURL;
            $this->securityKey = $incomingKey;
        }

        // this pulls the movie dataset from the API

        public function fetchCurrentPopular($selectedPage = 1){
            // constructing the string with newly assigned class properties
            $endpointUrl = "{$this->targetURL}/movie/popular?api_key={$this->securityKey}&language=en-US&page=" . intval($selectedPage);
            $rawJsonString = @file_get_contents($endpointUrl);
            if ($rawJsonString === false){
                return [];
            }
            $decodedPayLoad = json_decode($rawJsonString);
            return $decodedPayLoad->results ?? [];
        }

    }

?>