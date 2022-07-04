<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuiviController extends Controller
{
    public function progression(){
        return view('admin.etudiants.suivi.progression');
    }
}
