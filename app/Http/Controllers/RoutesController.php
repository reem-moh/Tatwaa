<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class RoutesController extends Controller
{

    public function homepage()
    {
        $agencies = Agency::all();

        return view('homepage', [
            'agencies' => $agencies
        ]);
    }

    public function individual()
    {
        return view('individual');
    }


    public function contactus()
    {
        return view('contactus');
    }

    public function signVolunteer(Request $request)
    {

        $this->validate(
            $request,
            [
                'fullname' => 'required|min:3',
                'email' => 'required|email:rfc,dns',
                'mobile' => 'required|regex:/(05)[0-9]{8}/|max:10',
            ]

        );
        
        $s=new Volunteer();
        $s->user_id=$request->user_id;
        $s->user_name=$request->fullname;
        $s->user_email=$request->email;
        $s->user_mobile=$request->mobile;
        $s->agency_id=$request->agencyId;
        $s->save();
        
        return redirect(route("homepage"))->with("success", "تم تسجيلك بنجاح");
    }
}
