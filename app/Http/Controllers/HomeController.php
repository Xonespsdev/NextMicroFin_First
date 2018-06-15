<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
class HomeController extends Controller
{
      public function index(Request $request){
      	return view('pages.home');
      }
            public function history(Request $request){
          return view('pages.profile.history.index');
      }
       public function vision_mission(Request $request){
          return view('pages.profile.vision_mission.index');
      }
       public function organization(Request $request){
          return view('pages.profile.organization.index');
      }

       public function about(Request $request){
      	return view('pages.about.index');
      }
         public function service(Request $request){
      	return view('pages.services.index');
      }
      //finance 
       public function finance(Request $request){
          return view('pages.finance.index');
        }

      public function credit_ability(Request $request){
          return view('pages.finance.credit-ability.index');
        }
          public function checkbalance(Request $request){
          return view('pages.finance.checkbalance_customer.index');
      }
        public function credit(Request $request){
          return view('pages.finance.credit.index');
      }
        public function currency(Request $request){
          return view('pages.finance.currency.index');
      }
       public function payment(Request $request){
          return view('pages.finance.payment.index');
      }


      public function register(Request $request){
          return view('pages.register.index');
      
      }
       public function activity(Request $request){
          return view('pages.activity.index');
      }

      public function contact(Request $request){
          return view('pages.contact.index');
}

}
