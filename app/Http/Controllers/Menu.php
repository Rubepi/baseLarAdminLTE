<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Menu extends Controller
{
    public function menuslista()
    {
        $menu_sid=App\menu::all();
        return view('admin.dashboard',compact('menu_sid'));
    }

}
