<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {        
        $animeList = [
            ["title" => "Solo Leveling", "description" => "A weak hunter gets a system that helps him become the strongest.", "rating" => "8.9"],
            ["title" => "Frieren: Beyond Journey’s End", "description" => "An elf mage reflects on her adventures after defeating the Demon King.", "rating" => "9.1"],
            ["title" => "The Apothecary Diaries", "description" => "A young girl with medical knowledge becomes an imperial court attendant.", "rating" => "8.7"],
            ["title" => "Undead Unluck", "description" => "A girl cursed with bad luck meets an immortal man.", "rating" => "8.3"],
            ["title" => "The Witch and the Beast", "description" => "A mysterious duo hunts down witches and magical beings.", "rating" => "8.2"],
            ["title" => "Sengoku Youko", "description" => "A mix of historical and supernatural battles in feudal Japan.", "rating" => "8.4"],
            ["title" => "Mashle: Magic and Muscles Season 2", "description" => "A boy with no magic survives in a magic academy using brute strength.", "rating" => "8.6"],
            ["title" => "Ragna Crimson", "description" => "A dragon hunter seeks ultimate power to defeat mighty dragons.", "rating" => "8.0"]
        ];

        return view('welcome', compact('animeList'));
    }
}
