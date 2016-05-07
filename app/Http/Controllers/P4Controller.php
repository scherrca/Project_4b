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

    //Route to the login page
    public function getLogin() {
        return view('users.login');
    }

    //Route to the login page
    public function getRegister() {
        return view('users.register');
    }

    //Route to the login page
    public function getManage() {
        return view('users.manage');
    }

    //Route to the form page for Random User
    public function getCreate() {
        return view('company.create');
    }

    //Route to the form page for Lorem Ipsem
    public function getUpdate() {
        return view('company.update');
    }

    //Route to the form page for Lorem Ipsem
    public function getDelete() {
        return view('company.delete');
    }

    //Route to the form page for Lorem Ipsem
    public function getShow() {
        return view('company.show_all');
    }

    /*************************************
                  Methods to
                 PROCESS DATA
    *************************************/


}

