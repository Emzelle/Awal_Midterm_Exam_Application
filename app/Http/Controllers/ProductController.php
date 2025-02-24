<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Define an array of anime
    protected $animeList = [
        ['id' => 1, 'title' => 'Naruto', 'genre' => 'Action, Adventure', 'episodes' => 220],
        ['id' => 2, 'title' => 'Attack on Titan', 'genre' => 'Action, Drama, Fantasy', 'episodes' => 75],
        ['id' => 3, 'title' => 'My Hero Academia', 'genre' => 'Action, Superhero', 'episodes' => 113],
        ['id' => 4, 'title' => 'Demon Slayer', 'genre' => 'Action, Fantasy', 'episodes' => 26],
        ['id' => 5, 'title' => 'Death Note', 'genre' => 'Mystery, Psychological', 'episodes' => 37],
    ];

    // Method to retrieve and display the anime list
    public function showAnime()
    {
        // Pass the anime array to the Blade view
        return view('anime', ['animeList' => $this->animeList]);
    }
}