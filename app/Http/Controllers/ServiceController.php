<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encart;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view('front.service.index');
    }

    public function accompagnementProjet()
    {
        return view('front.accompagnement-projet.index');
    }

    public function ameliorationPerformance()
    {
        return view('front.amelioration-performance.index');
    }

    public function conseilFinancier()
    {
        return view('front.conseil-financier.index');
    }

    public function formationGestion()
    {
        return view('front.formation-gestion.index');
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
