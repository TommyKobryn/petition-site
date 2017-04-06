<?php

namespace App\Http\Controllers;
use App\Petition;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;


class PetitionController extends Controller
{
  public function index()
  {

      $petitions = Petition::all();
      //return $petitions;
      return view('petitions', compact('petitions'));
  }

  public function show(Petition $petition)
  {
    //  $petition = Petition::find($id); -- the same as above
      //return $petition;



      return view('petitionsdetails', compact('petition'));

  }

  public function api()
  {
      $petitions = Petition::all();
      return $petitions;
  }

  public function store(Request $request)
  {
    $petition = new Petition;

    $petition->title = $request->title;
    $petition->description = $request->description;
    $petition->photo = $request->photo;

   $petition->save();

   return back();
  }


  public function destroy( $petition)
  {
    $petition = Petition::find($petition);
    $petition->delete();
     return back();
  }

}
