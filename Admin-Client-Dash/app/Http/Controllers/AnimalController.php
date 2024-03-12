<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnimalController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'storePet', 'addPet'
        ]);
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePet(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|min:0',
            'postal_code' => 'required|string|max:250',
        ]);



        $pet = new Animal();
        $pet->name = $request->name;
        $pet->age = $request->age;
        $pet->postal_code = $request->postal_code;
        $pet->user_id = auth()->user()->id;
        $pet->save();

        return redirect()->route('dashboard')
        ->withSuccess('Pet registered successfully!');
    }

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPet()
    {
        if(Auth::check())
        {
            $data = User::all();
            return view('addPet', ['users' => $data]);
        }
        
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 
}