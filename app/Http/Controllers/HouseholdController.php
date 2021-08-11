<?php

namespace App\Http\Controllers;
use App\Household;
use App\Sponsors;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HouseholdController extends Controller
{
    public function index()
    {
        $households = Household::all();//::latest()->paginate(5); //Household::all();
        return json_encode($households);
    }

    public function createHousehold(Request $request)
    {
        $household = new Household($request->all());
        $household->save();
        
        return response()->json($household);
    }

    public function viewHouseholdMembership($hhid){
        // $households = Household::with('roomtypes')->get();
        // return view('home', array('households'=>$households));
        $households = DB::table('households')
                    ->join('household_memberships', 'households.id', '=', 'household_memberships.household_id')
                    ->join('participants', 'participants.id', '=', 'household_memberships.participant_id')
                    ->where('households.id', '=', $hhid)
                    ->get();
                    // ->get(['households.id','participants.id','participants.first_name','participants.last_name', 'participants.dob','participants.gender','participants.country']);
        return json_encode($households);
    }

    public function sponsorList()
    {
        $sponsors = Sponsors::all();//::latest()->paginate(5); //Household::all();
        return json_encode($sponsors);
    }

    public function createSponsor(Request $request)
    {
        $sponsor = new Sponsors($request->all());
        $sponsor->save();
        
        return response()->json($sponsor);
    }

    public function BeneficiaryList($sponsorid)
    {
        $beneficiary = DB::table('sponsor')
                    ->join('beneficiaries', 'sponsor.id', '=', 'beneficiaries.sponsor_id')
                    ->join('participants', 'beneficiaries.participant_id', '=', 'participants.id')
                    ->select('participants.first_name as participant_first_name','participants.last_name as participant_last_name', 'sponsor.first_name as sponsor_first_name','sponsor.last_name as sponsor_last_name')
                    ->where('sponsor.id', '=', $sponsorid)
                    ->get();
                    //->get(['participants.first_name','participants.last_name', 'sponsor.first_name','sponsor.last_name']);
        return json_encode($beneficiary);
    }
}
