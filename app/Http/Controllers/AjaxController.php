<?php

namespace App\Http\Controllers;

use App\Models\HistoryPurchase;
use App\Models\Packet;
use App\Models\QuestionSupport;
use App\Models\Tariff;
use App\Models\TechSupport;
use App\Models\User;
use App\Models\UserPacket;
use App\Models\UserRequisite;
use App\Models\UserTariff;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function saveRequisites(Request $request)
    {
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $address = $request->input('address');
        $nip = $request->input('nip');

        $userRequisite = UserRequisite::firstOrNew(['user_id' => $user_id]);
        $userRequisite->title = $title;
        $userRequisite->address = $address;
        $userRequisite->nip = $nip;
        $userRequisite->save();

        return response()->json(['message' => 'SUCCESS']);
    }

    public function tryTariff(Request $request)
    {
        $userId = Auth::user()->id;
        $userTariff = UserTariff::where('user_id', $userId)->first();
        if(!$userTariff)
        {
            $tariffId = $request->input('tariff_id');
            $trial = Tariff::where('id', $tariffId)->first()->trial;
            $dateStart = Carbon::now();
            //$dateEnd = $dateStart->addDays((int)$trial);

            UserTariff::create([
                'user_id' => $userId,
                'tariff_id' => $tariffId,
                'date_start' => $dateStart,
                'date_end' => Carbon::now()->addDays((int)$trial),
                'is_active' => 1,
            ]);

            HistoryPurchase::create([
                'user_id' => $userId,
                'product_type' => 'tariff',
                'product_id' => $tariffId,
                'product_title' => Tariff::where('id', $tariffId)->first()->title,
            ]);

            return 'SUCCESS';
        }

        return false;
    }

    public function tryPacket(Request $request)
    {
        $userId = Auth::user()->id;
        $userPacket = UserPacket::where('user_id', $userId)->first();
        if(!$userPacket)
        {
            $packetId = $request->input('packet_id');
            $uSmsQty = User::where('id', $userId)->first()->sms_quantity;
            $smsQty = Packet::where('id', $packetId)->first()->quantity;
            $dateStart = Carbon::now();

            UserPacket::create([
                'user_id' => $userId,
                'packet_id' => $packetId,
                'sms_quantity' => $smsQty,
                'date_start' => $dateStart,
            ]);

            HistoryPurchase::create([
                'user_id' => $userId,
                'product_type' => 'packet',
                'product_id' => $packetId,
                'product_title' => Packet::where('id', $packetId)->first()->title,
            ]);

            User::where('id', $userId)
                ->update([
                    'sms_quantity' => (int)$uSmsQty + (int)$smsQty,
                ]);

            return 'SUCCESS';
        }

        return false;
    }

    public function techSend(Request $request)
    {
        $userId = Auth::user()->id;
        $name = $request->input('name');
        $phone = $request->input('phone') ?? null;
        $email = $request->input('email');
        $text = $request->input('text');

        if($userId && $name && $email && $text)
        {
            TechSupport::create([
                'user_id' => $userId,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'text' => $text,
            ]);
            return 'SUCCESS';
        }

        return false;
    }

    public function questSend(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');

        if($name && $phone)
        {
            QuestionSupport::create([
                'name' => $name,
                'phone' => $phone,
            ]);
            return 'SUCCESS';
        }

        return false;
    }

    public function phoneVerify(Request $request)
    {
        $code = $request->input('code');
        $verifyCode = $request->input('verifyCode');
        $userId = Auth::user()->id;
        if($code == $verifyCode)
        {
            User::where('id', $userId)
                ->update([
                    'is_phone_confirm' => 1,
                ]);

            return 'SUCCESS';
        }

        return false;
    }

    public static function getDate($dateString)
    {
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dateString);
        return $date->format('d.m.Y');
    }
}
