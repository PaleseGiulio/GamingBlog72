<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Consol;
use Illuminate\Http\Request;
use App\Http\Requests\ConsolRequest;
use Illuminate\Support\Facades\Auth;

class ConsolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consols = Consol::All();
        return view('console.index', compact('consols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games=Game::all();
        return view('console.create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConsolRequest $request)
    {
        $consol=Consol::create([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
        ]);
        if($request->logo){
            $consol->update([
                'logo'=>$request->file('logo')->store('public/logos'),
            ]);
        }
        $consol->games()->attach($request->games);
        return redirect(route('console.index'))->with('consolCreated','Complimenti, console creata con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consol $consol)
    {
        return view('console.show', compact('consol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consol $consol)
    {
        $games=Game::all();
        return view('console.edit', compact('consol','games'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consol $consol)
    {
        if($request->logo){
            $consol->update([
                'name'=>$request->name,
                'brand'=>$request->brand,
                'description'=>$request->description,
                'logo'=>$request->file('logo')->store('public/logos'),
            ]);
        }
        else{
            $consol->update([
                'name'=>$request->name,
                'brand'=>$request->brand,
                'description'=>$request->description,
            ]);
        }
        
        $consol->games()->attach($request->games);
        return redirect(route('console.index'))->with('consoleupdate', 'Console aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consol $consol)
    {
        foreach($console->games as $game){
            $consol->games()->detach($game->id);
        }
        $consol->delete();
        return redirect(route('console.index'))->with('consoldelete', 'Console eliminata con successo!');
    }

    public function detach(Consol $consol, Game $game){
        $consol->games()->detach($game);
        return redirect()->back()->with('gamedetached', 'Gioco rimosso!');
    }
}
