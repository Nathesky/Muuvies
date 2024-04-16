<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showGerenciamento(Request $request){
        return view("adm");
    }

}
