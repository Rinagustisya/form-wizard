<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('form');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username'  => 'required|exists:akuns',
            'password'  => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            $role = $user->role;

            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.monitoring');
                    break;
                case 'pengelola':
                    return redirect()->route('pengelola.monitoring');
                    break;
                // Add more cases for other roles if needed
                default:
                    return redirect()->route('dashboard');
            }

        }

        return back()->withErrors([
            'username'  => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
