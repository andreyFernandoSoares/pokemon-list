<?php

namespace App\Http\Controllers;

class PokemonController extends Controller 
{
    public function index(){
        $url = 'https://www.canalti.com.br/api/pokemons.json';
        $objeto = json_decode(file_get_contents($url));
        
        $pokemons = $objeto->pokemon;
        
        return view('pokemon.index', compact('pokemons'));
    }
}