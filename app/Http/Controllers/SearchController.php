<?php

namespace App\Http\Controllers;

use App\Models\Results;
use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use DB;

class SearchController extends Controller
{
     public function __construct(){
            $this->middleware('auth');
        }
    public function index(){
        return view('front.index');
    }

     public function search( Request $request )
     { 

        if($request->ajax()){     
        $searchQuery = $_GET['search']; 
        $allItmes = Results::join('details', 'details.result_id', '=', 'results.id')
                    ->select('details.id as detail_id','details.case_number as detail_case_number', 'details.case_name as detail_case_name','details.nature_of_proceeding as nature_of_proceeding','details.ruling as ruling','details.judge as details_judge','details.hearing_date as details_hearing_date','details.county as details_county','details.department as details_department','details.filed as details_filed','details.category as details_category ','results.case_number as results_case_number ','results.heading as results_heading','results.text as results_text','results.hearing as results_hearing','results.type as results_type','results.subtype as results_subtype')
                    ->where('heading', 'LIKE','%'.$searchQuery.'%')
                    ->orWhere('text','like','%'. $searchQuery.'%')
                    ->orWhere('judge','like','%'.$searchQuery.'%')
                    ->orWhere('county','like','%'.$searchQuery.'%')
                    ->orWhere('hearing','like','%'.$searchQuery.'%')
                    ->get(); 
                   
        if(count($allItmes) > 0){
            foreach ($allItmes as $key =>$result) {
                echo '<div class="search-result result-tentative">
                                <h2 class="resultHeader2">
                                    <a href="searchView/'.$result->detail_id.'" class="">
                                    <h4>'.$result->results_heading.'</h4>
                                    </a>
                                </h2>
                                <p class="search-snippet">'.$result->results_text.'</p>
                                <div class="result-info-module d-flex flex-column flex-md-row">
                                    <ul class="d-flex flex-column">
                                        <li class="result-info-module-item"> <span>Hearing</span>
                                            <p>'.$result->results_hearing.'</p>
                                        </li>
                                    </ul>
                                    <ul class="d-flex flex-column">
                                        <li class="result-info-module-item"> <span>Judge </span> <a href="/judge/thomas.p.anderle">'.$result->details_judge.'</a> </li>
                                        <li class="result-info-module-item"> <span>County</span>
                                            <p>'.$result->details_county.'</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>';
            }
        }else{
            echo '<div class="no_item_result">Nothing Found!</div>';
        }
      }else{
        return redirect('searchpage');
      }
    }
    
    public function mainSearch(Request $request){
        if($request->has('searchQuery') && !empty($request->searchQuery)){
            $searchQuery = $request->searchQuery;
            return redirect('searchFilter?searchQuery='.$searchQuery);
        }
    }

    public function searchFilter(Request $request){
        $searchQuery = '';
        if($request->has('searchQuery') && !empty($request->searchQuery)){
            $searchQuery = $request->searchQuery;
        }
        return view('home.dashboard',compact('searchQuery'));
    }

    public function searchView($id){
        $result = Results::join('details', 'details.result_id', '=', 'results.id')
                    ->select('details.id as detail_id','details.case_number as detail_case_number', 'details.case_name as detail_case_name','details.nature_of_proceeding as nature_of_proceeding','details.ruling as ruling','details.judge as details_judge','details.background as details_background','details.hearing_date as details_hearing_date','details.county as details_county','details.department as details_department','details.filed as details_filed','details.category as details_category','results.case_number as results_case_number','results.heading as results_heading','results.text as results_text','results.hearing as results_hearing','results.type as results_type','results.subtype as results_subtype')
                    ->where('details.id', $id)
                    ->first();
        
        return view('pages.view',compact('result'));
    }

}
