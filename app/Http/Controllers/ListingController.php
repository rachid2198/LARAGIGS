<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return view('Listings.index',[
            'listings'=> Listing::all(),
        ]);
    }

    public function show(Listing $listing){
        return view('Listings.show',[
            'listing'=>$listing
        ]);
    }
}
