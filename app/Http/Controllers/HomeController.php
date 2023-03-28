<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\tempat;
use Carbon\Carbon;
class HomeController extends Controller
{

    public function index(tempat $tempats){
        $tempats = tempat::paginate(10);
        return view('/tes/home',compact('tempats'));
    }
}
