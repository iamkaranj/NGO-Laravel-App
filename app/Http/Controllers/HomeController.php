<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipments;
use App\Donors;
use App\DonationTypes;
use App\Events;
use App\Donations;
use App\Funds;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $data['total_donors'] = Donors::count();
        $data['total_events'] = Events::count();

        $data['total_donated_cash'] = Funds::all()->sum('total');
        // $data['total_donated_cash'] = (int)$data['total_donated_cash'];

        $data['total_equipments'] = Equipments::all()->sum('avail');
        // $data['total_equipments'] = (int)$data['total_equipments'];

        $events = Events::orderBy('id', 'desc')->limit(5)->get();
        
        $funds = Funds::all();

        $labels = array();
        $values = array();
        foreach($funds as $fund){
            $labels[] = $fund->modes;
            $values[] = (int)$fund->total;
        }
        
        $pie_labels = "'";
        $pie_labels .= implode("','",$labels);
        $pie_labels .= "'";

        $pie_values = implode(",",$values);

        return view('home', compact('data','events','pie_labels','pie_values'));
    }
}
