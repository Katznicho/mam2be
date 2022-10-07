<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PlanModel;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $total_users = User::count();
        //get the current user
        $user = Auth::user();
        //check if user has a subscriptionPlan
        $total_comments = 1;
        $total_approved_comments =2;
       $total_unapproved_comments = 2;
        $planId=null;
         $planName=null;

        if($user->subscriptionPlan){
            //
            $planId = $user->subscriptionPlan;
            //get plan details by id
            $planName = PlanModel::where('id', $planId)->first();
        }

        if($user->role == 'admin'){
            $total_appointments =10;
            $total_payments = 10;
            return view('admin.admin_health', compact('total_users', 'total_appointments', 'total_payments'));
        }else{

       return view('admin.index', compact('total_users','total_comments',
       'total_approved_comments',
       'total_unapproved_comments', 'planId', 'planName', 'user'));
        }

   }
}
