<?php

namespace App\Http\Controllers;

use App\Models\Roster;
use App\Models\Team;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NbaController extends Controller
{
    //
    public function index(){
        $players = Roster::with('player_totals')->orderBy('name','asc')->paginate(10);
        $teams = Team::orderBy('code','asc')->get();
        
        return view('nba.index')->with(compact('players','teams'));
    }

    public function get($id){
        $player = Roster::where('id',$id)->with('player_totals','team')->first();
        
        return view('nba.view')->with(compact('player'));
    }

    public function export($type="xlsx"){
        dd('export');
        // return Excel::download(new Roster, 'users.xlsx');
    }   

    public function filter(Request $request){
        $key = $request->key;
        $players = Roster::where('team_code',$key)->orderBy('name','asc')->get();
        return $players;
    }
}
