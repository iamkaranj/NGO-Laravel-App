<?php

namespace App\Modules\Donation\Http\Controllers;

use App\Donations;
use App\Donors;
use App\Equipments;
use App\Funds;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view-donations');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipments::all();
        return view('add-donation', compact('equipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['donation_no'] = $this->generateDonationNumber();
        if(!$donor = Donors::where('email', $request->email)->first() ){
            $donor = Donors::create($input);
        }
        $input['donor_id'] = $donor->id;
        $donation = Donations::create($input);

        if($request->type === "equipment"){
            $equipment = Equipments::find($request->equipment);
            $equipment->donationType()->create([
                                                'donation_id' => $donation->id, 
                                                'quantity' => $request->qty, 
                                                'note'  => $request->note,
                                               ]);
            $equipment->increment('avail',$request->qty);
        }
        elseif($request->type === "fund_donation"){
            $fund = Funds::where('modes', $request->mode)->first();
            $fund->donationType()->create([
                                            'donation_id' => $donation->id, 
                                            'quantity' => $request->amount, 
                                            'note'  => $request->note,
                                        ]);
            $fund->increment('total', $request->amount);
        }
        
        return redirect()->route('donations.index');
    }
    
    public function generateDonationNumber() {
        $number = "DN" . mt_rand(10000, 99999);
        if (Donations::where(['donation_no' => $number])->first()) {
            $this->generateDonationNumber();
        }

        return $number;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donations::find($id);
        return view('edit-donation', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Donations $donation, Request $request)
    {
        $donation->update($request->all());
        toastr()->success('Donation Has Been Update!');
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}