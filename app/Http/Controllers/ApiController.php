<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use App\Models\Tariff;
use App\Models\User;
use Bitrix\Translate\Controller\Asset\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statusRequest = [];

        $isAuth = 0;
        $login = $request->input('login');
        $password = $request->input('password');

        $admin = User::where('role_id', 1)
            ->where('email', $login)
            ->where('password', $password)
            ->first();

        if($admin) $isAuth = 1;

        if(($request->input('method') !== false || $request->input('method') !== null) && $isAuth == 1)
        {
            switch($request->input('method')) {
                case 'user.list':
                    $users = User::all();

                    if($users !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The users are successfully returned', $users->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }

                    break;

                case 'tariff.list':
                    $tariffs = Tariff::all();

                    if($tariffs !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The tariffs are successfully returned', $tariffs->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }


                    break;

                case 'packet.list':
                    $packets = Packet::all();

                    if($packets !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The packets are successfully returned', $packets->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }

                    break;

                case 'user.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $users = User::where('id', $id)->first()->toArray();

                        if(count($users) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The user is successfully returned', $users);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This user does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                case 'tariff.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $tariff = Tariff::where('id', $id)->first()->toArray();

                        if(count($tariff) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The tariff is successfully returned', $tariff);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This tariff does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                case 'packet.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $packet = Packet::where('id', $id)->first()->toArray();

                        if(count($packet) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The packet is successfully returned', $packet);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This packet does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                default:
                    $statusRequest = $this->statusRequest('ERROR', "You didn't pass the method or this method doesn't exits");
                    break;
            }
        }
        else
        {
            if(($request->input('method') !== false || $request->input('method') !== null) && $isAuth == 0)
            {
                $statusRequest = $this->statusRequest('ERROR', 'You have to get the auth');
            }
            elseif(($request->input('method') === false || $request->input('method') === null))
            {
                $statusRequest = $this->statusRequest('ERROR', 'You have to pass the method');
            }
        }


        return response()->json($statusRequest, 201);
    }

    public function statusRequest($status, $message, $array = [])
    {
        return ['STATUS' => $status, 'MESSAGE' => $message, 'ARRAY' => $array];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
