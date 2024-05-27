<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class TrainController extends Controller
{
    public function index() 
    {

        // recuperare i treni in partenza oggi 
        $trains = Train::whereDate('departure_time', today())->get();
        // dd($trains);

        // ritornare la vista home con i treni 
        return view('home', compact('trains'));
    }
}
