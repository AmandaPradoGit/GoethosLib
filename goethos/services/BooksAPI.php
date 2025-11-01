<?php
    class BooksAPI{
        private $apiKey;

        public function __construct($apikey){
            $this->apiKey = $apiKey;
        }

        public function search($query, $maxResults = 25){
            $url = "https://www.googleapis.com/books/v1/volumes?q="
            . urlencode($query)
            . "&maxResults={$maxResults}&key={$this->apiKey}";

            $response = file_get_contents($url);

            if($response === false) {
                return [];
            }

            $data = json_decode($response, true);
            return $data['items'] ?? [];
        }
    }
?>