<?php

namespace App\Http\Controllers;

use App\Petition;
use App\Signature;
use Illuminate\Http\Request;
use App\Http\Requests;


class SignaturesController extends Controller
{


 public function store(Request $request, Petition $petition)
  {

     $signature = new Signature;

     $signature->firstname = $request->firstname;
     $signature->lastname = $request->lastname;

    $petition->signatures()->save($signature);

    return back();

  }

 public function api(Signature $signature)
  {
$signature = Signature::all();
return $signature;

  }
}
