<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\DownloadTracker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $countries = Country::all();
        return view('welcome')->with('countries', $countries);
    }

    public function processForm(Request $request)
    {
        // database save part
        $parts = explode(',', $request->get('country'));
        $prefix = $parts[0];
        $country = $parts[1];
        $downloadTracker = new DownloadTracker;
        $downloadTracker->firstName = $request->firstName;
        $downloadTracker->lastName = $request->lastName;
        $downloadTracker->company = $request->company;
        $downloadTracker->country = $country;
        $downloadTracker->prefix = $prefix;
        $downloadTracker->phoneNumber = $request->phoneNumber;
        $downloadTracker->email = $request->email;

        $downloadTracker->save();

        // file download part
        $file = public_path()."/assets/TKI-Membership-Brochure.pdf";
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, 'TKI-Membership-Brochure.pdf',$headers);
    }
}
