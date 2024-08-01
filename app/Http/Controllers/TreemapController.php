<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreemapController extends Controller
{
    public function principaisLinguagensUtiliadas2023()
    {
        $linguagens = [
            'JavaScript' => 12,
            'Python' => 12,
            'Java' => 10,
            'C#' => 9,
            'C/C++' => 8,
            'TypeScript' => 6,
            'Go (Golang)' => 4,
            'Rust' => 3,
            'PHP' => 5,
            'Kotlin' => 3
        ];

        echo json_encode($linguagens);

    }
}
