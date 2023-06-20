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

    public function phoneMask($phone)
    {
        $phone = preg_replace('/[^0-9+]/', '', $phone);
        $phone = str_replace(['+', ' ', '-'], '+', $phone);
        $phone = '+' . substr($phone, 1, 3) . ' ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9);

        return view('home', ['phone' => $phone]);
    }
}
