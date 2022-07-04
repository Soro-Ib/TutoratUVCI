<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home(){
        // dd(Auth::user()->getRoleNames());
        return view('admin.home');
    }

    public function profile(){
        return view('admin.profile');
    }

    //**GESTION DES DOCUMENTS (SUPPORT DE COURS) */
    public function index(){
        return view('admin.documents.index');
    }
}
