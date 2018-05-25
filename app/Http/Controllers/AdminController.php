<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admins.index');
    }
     public function history(){
    	return view('admins.pages.profile.history');
    }
         public function vision_mission(){
    	return view('admins.pages.profile.vision_mission');
    }
          public function organization(){
    	return view('admins.pages.profile.organization');
    }
    //Fiance
    public function finance(){
      return view('admins.pages.finance.index');
    }
      public function credit_ability(){
      return view('admins.pages.finance.credid-ability');
    }
     public function checkbalance(){
      return view('admins.pages.finance.checkbalance');
    }
     public function credit(){
      return view('admins.pages.finance.credit');
    }
     public function payment(){
      return view('admins.pages.finance.payment');
    }
       public function currency(){
      return view('admins.pages.finance.currency');
    }
        public function service(){
      return view('admins.pages.services.service');
    }
    public function about(){
      return view('admins.pages.about.about');
    }
}
