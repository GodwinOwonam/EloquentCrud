<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function showAddPhone()
    {
        return view('addPhone');
    }

    public function addPhone(Request $request)
    {

        // dd(auth()->user());
        $phone = Phone::create([
            'number' => $request->number,
            'user_id' => auth()->user()->id
        ]);

        return view('showPhone', ['phone' => $phone]);
    }
    public function showPhone()
    {
        $user = User::find(auth()->user()->id);

        return view('showPhone', ['phone'=> $user->phone]);
    }
}
