<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function create(){
        return view('game.gameCreate');
    }

    public function store(GameRequest $request){
        // metodo non antitruffa
        // $game = new Game();
        // $game->title = $request->title;
        // $game->producer = $request->producer;
        // $game->description = $request->description;
        // $game->save();

        // metodo antitruffa
        $game = Game::create([
            'title' => $request -> title,
            'producer' => $request -> producer,
            'description' => $request -> description,
            
        ]);
        if($request->cover){
            $game->update([
                'cover' => $request->file('cover')->store('public/covers'),            
            ]);
        }

        // dd($game)->all();

        return redirect(route('gameIndex'))->with('gameCreated','Hai inserito con sucesso un videogame!');
    }

    public function index(){
        $games = Game::all();
        return view('game.gameIndex',compact('games'));
    }

}
