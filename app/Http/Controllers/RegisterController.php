<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function store (RegistrationRequest $request)
    {
        $data = $request->validated();
        // dd($data["errors"]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return view('info', ["message"=>"Welcome, $request->name $request->surname (@$request->username)!"]);
    }
}
