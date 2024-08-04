<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreemapController extends Controller
{
    public function principaisLinguagensUtiliadas2023()
    {
        $linguagens = [
            'JavaScript' => 20,
            'Python' => 15,
            'Java' => 10,
            'C#' => 8,
            'C++' => 8,
            'TypeScript' => 7,
            'PHP' => 6,
            'Swift' => 5,
            'Kotlin' => 5,
            'Ruby' => 4,
            'Go (Golang)' => 4,
            'R' => 3,
            'Rust' => 2,
            'Dart' => 2,
            'Perl' => 2,
            'MATLAB' => 2,
            'Scala' => 1,
            'Shell Script' => 1,
            'SQL' => 1,
            'Objective-C' => 1
        ];

        echo json_encode($linguagens);

    }
}
