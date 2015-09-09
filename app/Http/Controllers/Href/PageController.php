<?php
/**
 * Created by PhpStorm.
 * User: zjuzqj
 * Date: 15/7/22
 * Time: 上午9:45
 */

namespace App\Http\Controllers\Href;

use App\Http\Controllers\Controller;

class PageController extends Controller{

    public function loadLogin(){
        return view('login');
    }

    public function loadService(){
        return view('service.service');
    }

    public function newService(){
        return view('service.new_service');
    }

    public function detailService(){
        return view('service.detail_service');
    }


    public function loadBeautician(){
        return view('beautician.beautician');
    }

    public function newBeautician(){
        return view('beautician.new_beautician');
    }

    public function detailBeautician(){
        return view('beautician.detail_beautician');
    }

    public function loadOrder(){
        return view('order.order');
    }

    public function detailOrder(){
        return view('order.detail_order');
    }

    public function loadUser(){
        return view('user.user');
    }

    public function newUser(){
        return view('user.new_user');
    }

    public function detailUser(){
        return view('user.detail_user');
    }

    public function loadCity(){
        return view('city.city');
    }

    public function newCity(){
        return view('city.new_city');
    }

    public function newAccount(){
        return view('account.new_account');
    }

    public function loadAccount(){
        return view('account.account');
    }

    public function detailAccount(){
        return view('account.detail_account');
    }

    public function deleteAccount(){

    }

    public function deleteUser(){

    }

    public function deleteService(){

    }

    public function lockScreen(){
        return view('lock_account');
    }
}