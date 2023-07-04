<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encart;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function index()
    {
        return view('front.about.index');
    }

     public function store(Request $request)
     {
         
     }


     public function edit()
     {
        
     }


     public function update()
     {
         
     }


     public function destroy(Encart $encart)
     {
        
     }
}
