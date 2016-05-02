<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class P4Controller extends Controller {

    /*************************************
                  Methods to
                  GET VIEWS
    *************************************/

    //Route to the index page
    public function getIndex() {
      return view('users.show');
    }

    public function postIndex() {
      return view('users.show');
    }

    //Route to the form page for Random User
    //public function getRandom() {
    //    return view('users.random_user');
    //}

    //Route to the form page for Lorem Ipsem
    //public function getText() {
    //    return view('users.lorem');
   // }

    /*************************************
                  Methods to
                 PROCESS DATA
    *************************************/

    
}

