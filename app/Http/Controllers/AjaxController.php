<?php

namespace App\Http\Controllers;

use App\Models\UserRequisite;
use Illuminate\Http\Request;

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
}
