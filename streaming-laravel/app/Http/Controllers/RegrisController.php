<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan Anda mengimpor namespace User dengan benar
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegrisController extends Controller
{
    public function create()
    {
        return view('regris');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'alpha_num', 'string', 'min:3', 'max:20'],
            'mail' => ['required', 'email'],
            'role' => ['required', 'in:admin,customer'],
            'telp' => ['required', 'string', 'min:11', 'max:13'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

        $user = User::where('mail', $request->mail_mhs)
            ->orWhere('telp', $request->telp_mhs)
            ->orWhere('password', $request->password)
            ->first();

        if ($user) {
            return dd('user sudah ada tolong cari yang lain');
        }

        User::create([
            'nama' => $request->nama,
            'mail' => $request->mail,
            'role' => $request->role,
            'telp' => $request->telp,
            'password' => Hash::make($request->password)
        ]);

        session()->flash('sukses', 'Terimakasih registrasi anda berhasil');

        return redirect('/homepage')->with('success', 'Pembayaran berhasil disimpan.');
    }
}
