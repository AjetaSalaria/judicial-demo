<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Results;
use App\Models\Details;
use App\Models\Feedback;
use DB;

class PageController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function about(){
        return view('pages.about');
    }
    public function home(){
        return view('pages.home');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function searchpage(){
        return view('pages.search');
    }
    public function judicial(){
        return view('pages.judicial');
    }
    public function readme(){
        return view('pages.readme');
    }
    public function smartsearch(){
        return view('pages.smartsearch');
    }
    public function support(){
        return view('pages.support');
    }
    public function newone(){
        return view('pages.newone');
    }
    public function newtwo(){
        return view('pages.newtwo');
    }
    
    public function feedback(){
        return view('pages.feedback');
    }
    public function postfeedback(Request $request){
           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'feedback' => 'required',
         ]);

        if($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        try{
        $email = $request->email;
        $fback = $request->feedback;
        $name= $request->name;
        $saveData = ['name' => $request->name,'email' => $request->email,'feedback'=>$request->feedback];
        $Feedback =  Feedback::create($saveData);
        $msg = "Dear Admin,\n\n Here we have feedback from a tester. Please check the tester information & feedback. \n\n";
        $msg .= "Tester Name : ". $name . "\n";
        $msg .= "Tester Email : ". $email . "\n";
        $msg .= "Tester Feedback : ". $fback . "\n\n";
        $msg .= "Thanks!";
        if($Feedback){
            mail('jeffrey.gettleman@transcriptminer.com','Feedback',$msg);
           return redirect()->back()->with(['message' => 'Feedback added successfully']); 
        }
        return redirect()->back()->with(['message' => 'Something went wrong']);
    
    }catch (\Exception $e) {
       return redirect()->back()->with(['message' => 'Something went wrong']);
    }
 }
}

