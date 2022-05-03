<?php

namespace App\Http\Controllers;

use App\Models\UserPayment;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    public function index(){
        return UserPayment::all();
    }

    public function prueba(){
        return UserPayment::all();
    }
}
