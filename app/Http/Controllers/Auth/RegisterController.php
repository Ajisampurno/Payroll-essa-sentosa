<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Saw;
use App\Models\Penilaian;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required', 'integer', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'foto' => ['image', 'file', 'max:5000000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $penilaian = Penilaian::where('nip', $data['nip'])->get();


        if ($penilaian->toarray() == null) {
            Penilaian::create([
                'nip' => $data['nip'],
                'nilai1' => 0,
                'nilai2' => 0,
                'nilai3' => 0,
                'nilai4' => 0,
                'nilai5' => 0,
                'nilai6' => 0,
                'nilai7' => 0,
                'nilai8' => 0,
                'nilai9' => 0,
                'nilai10' => 0,
                'nilai11' => 0,
                'nilai12' => 0,
                'nilai13' => 0,
                'nilai14' => 0,
                'nilai15' => 0,
                'nilai16' => 0,
                'nilai17' => 0,
                'nilai18' => 0,
                'nilai19' => 0,
                'nilai20' => 0
            ]);
        }


        if ($data['foto']) {
            $validasi['foto'] = $data['foto']->store('foto-profil');
        }

        return User::create([
            'name' => $data['name'],
            'nip'   => $data['nip'],
            'ceklevel' => $data['ceklevel'],
            'email' => $data['email'],
            'foto' => $validasi['foto'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
