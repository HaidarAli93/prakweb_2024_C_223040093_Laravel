<?php

namespace App\Services;

class SearchService {
    private $data = [
        'Haidar Ali',
        'Anin Denin Nadia',
        'Pandu Permana'
    ];

    public function search($query) {
        if (empty($query)) {
            return []; // Return an empty array for empty queries
        }

        return array_filter($this->data, function($item) use ($query) {
            return stripos($item, $query) !== false; // Case-insensitive search
        });
    }
}
