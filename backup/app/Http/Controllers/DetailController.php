<?php

namespace App\Http\Controllers;
use App\Models\Results;
use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use DB;

class DetailController extends Controller
{
   public function index($id){
        $data['details'] = Details::where('id',$id)->get();
         //dd($data);
        
        return view('detail.index',$data);
    }
    public function details()
     {
        $data['details'] = Details::all();
       dd($data);
       return view('detail.index',$data);
    }

    
}
