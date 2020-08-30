<?php

namespace App\Http\Controllers;

use App\Login;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        $users = session('data_login');
        return view('admin.index', ['users' => $users]);
    }

    public function create()
    {
        $users = session('data_login');
        return view('admin.createpost', ['users' => $users]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Login $login)
    {
        return view('admin.daftarpost');
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Login $login)
    {
        //
    }

    public function destroy(Login $login)
    {
        //
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }

    public function login()
    {
        if (session('data_login')) {
            return redirect('/administrator');
        }
        return view('/login');
    }

    public function postlogin(Request $request)
    {
        $data_login = Login::where('username', $request->username)->firstOrFail();
        $cek_password = Hash::check($request->password, $data_login->password);

        if ($data_login) {
            if ($cek_password) {
                if ($data_login->level == 1) {
                    $users = session(['data_login' => $data_login]);
                    return redirect('/administrator');
                }
            }
        }
        return redirect('/login')->with('status_fail', 'Login gagal, username atau password salah')->withInput();
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        $login_data = new Login;

        $validatedLogin = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $hashPassword = Hash::make($request->password, [
            'rounds' => 12,
        ]);

        $token = Str::random(16);

        $level = 1;

        $login_data = Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $hashPassword,
            'token' => $token,
            'level' => $level
        ]);

        $login_data->save();

        return redirect('/login')->with('berhasil_register', 'Berhasil melakukan registrasi');
    }
}
