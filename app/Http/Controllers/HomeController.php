<?php

namespace App\Http\Controllers;

use App\Models\UserRequisite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userRequisite = UserRequisite::where('user_id', $user->id)->first();
        if(!$userRequisite)
        {
            $userRequisite = [
                'title' => '',
                'address' => '',
                'nip' => ''
            ];
        }

        return view('home', ['userRequisite' => $userRequisite]);
    }
}
