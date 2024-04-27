<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\akun;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $akun= $request->validate([
            'name'=>'nullable',
            'email'=>'nullable',
            'password'=> 'nullable',
            'tahun_berdiri'=>'nullable',
            'sertifikasi'=>'nullable',
            'alamat'=>'nullable',
            'no_hp'=>'nullable',
            'jenis_petani'=>'nullable',
            'role'=>'nullable',
        ]);

        $user = User::create([
            
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            akun::create($akun);

        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
