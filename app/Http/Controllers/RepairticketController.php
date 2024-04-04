<?php

namespace App\Http\Controllers;

use App\Models\repairticket;
use Illuminate\Http\Request;

class RepairticketController extends Controller
{

     public function landing()
     {
        return view('welcome');
     }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Repairtickets = repairticket::query()->orderby('created_at', 'desc')->get();
        return view('dashboard',['repairtickets'=>$Repairtickets]);
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('repairticket.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'emailaddress' => ['required','string'],
            'division' => ['required','string'],
            'unitsection' => ['required','string'],
            'name' => ['required','string'],
           'designation' => ['required','string'],
           'typeofrequest' => ['required','string'],
            'description' => ['required','string'],
        ]);

        $data["status"]= 'ONGOING';
        $data["user_id"]= '';
        $data["addtlstatus"]= '';
        $data["itemtype"]= '';
        $repairticket = repairticket::create($data);

        return to_route('repairticket.landing')->with('message','Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(repairticket $repairticket)
    {
        dd($repairticket);
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(repairticket $repairticket)
    {
        dd($repairticket);
        return view('repairticket.edit', ['repairticket'=>$repairticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, repairticket $repairticket)
    {   
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(repairticket $repairticket)
    {
        return 'destroy';
    }
}
