<?php

require 'term-extractor/TermExtractor.php';
require 'app/contollers/Pins/PinController.php';


class Keyword extends KeywordExtraction {

    public function create() {
        $pin = new PinController;
        $extractor = new TermExtractor();
        $terms = $extractor->extract($pin);
        // We're outputting results in plain text...
        header('Content-Type: text/plain; charset=UTF-8');
        // Loop through extracted terms and print each term on a new line
        foreach ($terms as $term_info) {
            // index 0: term
            // index 1: number of occurrences in text
            // index 2: word count
            list($term, $occurrence, $word_count) = $term_info;
            var_dump($term_info);
        }
    }
}

