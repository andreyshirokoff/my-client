<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use App\Models\Tariff;
use App\Models\UserPacket;
use App\Models\UserRequisite;
use App\Models\UserTariff;
use Carbon\Carbon;
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

//    public static function getHistory($userId)
//    {
//        $array = [];
//        $userTariffs = UserTariff::where('user_id', $userId)->get();
//        $userPackets = UserPacket::where('user_id', $userId)->get();
//
//        foreach($userTariffs as $userTariff)
//        {
//            $title = Tariff::where('id', $userTariff->tariff_id)->first()->title;
//            $date = Carbon::createFromFormat('Y-m-d H:i:s', $userTariff->date_start);
//            $formattedDate = $date->format('d.m.Y');
//            $array[] = [
//                'user_id' => $userTariff->user_id,
//                'title' => 'Zakup pakietu '.$title,
//                'date_start' => $formattedDate,
//            ];
//        }
//        foreach($userPackets as $userPacket)
//        {
//            $title = Packet::where('id', $userPacket->packet_id)->first()->title;
//            $date = Carbon::createFromFormat('Y-m-d H:i:s', $userPacket->date_start);
//            $formattedDate = $date->format('d.m.Y');
//            $array[] = [
//                'user_id' => $userPacket->user_id,
//                'title' => 'Zakup pakietu '.$title,
//                'date_start' => $formattedDate,
//            ];
//        }
//
//        usort($array, function ($a, $b) {
//            $dateA = strtotime($a['date_start']);
//            $dateB = strtotime($b['date_start']);
//
//            return $dateB - $dateA;
//        });
//
//        return $array;
//    }
}
