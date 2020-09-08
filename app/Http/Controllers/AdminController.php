<?php

namespace App\Http\Controllers;

use App\Login;
use App\Article;
use App\Gambar;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Alert;

class AdminController extends Controller
{
    public function index()
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        // Alert::success('hore', 'hore');
        $users = session('data_login');
        return view('admin.index', ['users' => $users]);
    }

    public function create()
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        $users = session('data_login');
        $kategorilist = Kategori::all();
        return view('admin.createpost', [
            'users' => $users,
            'kategorilist' => $kategorilist
        ]);
    }

    public function logout(Request $request)
    {
        Alert::question('Keluar?', 'Apakah anda yakin ingin keluar?');
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
                    Alert::success('Login berhasil', 'Anda telah berhasil login!');
                    return redirect('/administrator');
                }
            }
        }
        Alert::success('Login berhasil', 'Anda telah berhasil login!');
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

    public function media()
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        $users = session('data_login');
        $gambars = Gambar::latest()->get();
        return view('admin.media', [
            'gambars' => $gambars,
            'users' => $users
        ]);
    }
}
