<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agencies = Agency::whereHas('Volunteers', function($q) {
            $q->where('user_id', auth()->user()->id);
        })->get();//->toArray()
        return view('profile',[
            'agencies' => $agencies
        ]);
    }

    public function profile()
    {
        
        $agencies = Agency::whereHas('Volunteers', function($q) {
            $q->where('user_id', auth()->user()->id);
        })->get();//->toArray()

        return view('profile',[
            'agencies' => $agencies
        ]);
    }

    public function agency($agencyId, $agencyName, $agencyDesc)
    {

        
        //echo $agencyId;
        //echo $agencyName;
        //echo $agencyDesc;
        $userId =auth()->user()->id;
        $userName = auth()->user()->name;
        $userEmail = auth()->user()->email;
        $userMobile = auth()->user()->mobile;

        //check if user signed before
        //retrive all agencies id that has the user id
        $agencies = Agency::whereHas('Volunteers', function($q) {
            $q->where('user_id', auth()->user()->id);
        })->pluck('id')->toArray();

        foreach($agencies as $a){
            if($a==$agencyId){
                //echo $a;
                return redirect(route("homepage"))->with("sorry", "لقد سجلت مسبقا");
            }
        }

        return view('agency', [
            'userId' => $userId,
            'agencyId' => $agencyId,
            'agencyName' => $agencyName,
            'agencyDesc' => $agencyDesc,
            'userName' => $userName,
            'userEmail' => $userEmail,
            'userMobile' => $userMobile,
        ]);
    }
}
