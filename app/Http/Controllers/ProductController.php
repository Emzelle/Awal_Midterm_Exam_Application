<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Define an array of anime
    protected $animeList = [
        ['id' => 1, 'title' => 'Naruto', 'genre' => 'Action, Fantasy, Shonen', 'episodes' => 220, 'ratings' => 4.8],
        ['id' => 2, 'title' => 'Attack on Titan', 'genre' => 'Shonen, Dark Fantasy', 'episodes' => 75, 'ratings' => 4.9],
        ['id' => 3, 'title' => 'My Hero Academia', 'genre' => 'Shonen manga, Comedy, Comedy drama, Science fantasy, Action manga, Superhero comics', 'episodes' => 113, 'ratings' => 4.7],
        ['id' => 4, 'title' => 'Demon Slayer', 'genre' => 'Shonen manga, Dark fantasy, Action manga, Fantasy', 'episodes' => 26, 'ratings' => 4.8],
        ['id' => 5, 'title' => 'Death Note', 'genre' => 'mystery, supernatural, thriller', 'episodes' => 37, 'ratings' => 4.9],
    ];

    // Method to retrieve and display the anime list
    public function showAnime()
    {
        // Pass the anime array to the Blade view
        return view('anime', ['animeList' => $this->animeList]);
    }
}