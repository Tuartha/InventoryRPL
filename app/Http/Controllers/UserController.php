<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function allUser(Request $request) {
        $all = User::all();
        if($request->ajax()) {
            return response()->json([
                "data" => $all,
            ]);
        }
        return view("user", compact('all'));
    }

    function addUser(Request $request) {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:8",
            "user_type" => "required|string",
            "kelas" => "required|string",
            "nis" => "required|string"
        ]);

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
                'kelas' => $request->kelas,
                'nis' => $request->nis,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User Berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Terjadi kesalahan saat menambahkan user: ' . $e->getMessage()
            ]);
        }
    }

    function updateUser(Request $request) {
        $id = $request->input('up_id');
        $request->validate([
            "up_name" => "required|string",
            "up_email" => "required|email|unique:users,email," . $id,
            "up_password" => "required|string|min:8",
            "up_user_type" => "required|string",
            "up_kelas" => "required|string",
            "up_nis" => "required|string"
        ]);
        
        try {
            $user = User::findOrFail($id);
            if($user) {
                $user->update([
                    'name' => $request->up_name,
                    'email' => $request->up_email,
                    'password' => $request->up_password ? Hash::make($request->up_password) : $request->up_password,
                    'user_type' => $request->up_user_type,
                    'kelas' => $request->up_kelas,
                    'nis' => $request->up_nis,
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'User berhasil diubah!'
                ]);
            } else {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'User tidak ditemukan!'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'success',
                'message' => 'Terjadi kesalahan saat mengubah user: ' . $e->getMessage()
            ]);
        }
    }

    function deleteUser(Request $request) {
        $id = $request->input('id');
        $user = User::findOrFail($id);
        if(!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User tidak ditemukan!'
            ]);
        }
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil dihapus!'
        ]);
    }

    function noVerifUser(Request $request) {
        $userVerif = User::where('email_verified_at', null)->get();
        if($request->ajax()) {
            return response()->json([
                "data" => $userVerif,
            ]);
        }
        return view("verif_user", compact('userVerif'));
    }

    function verifUser(Request $request) {
        $id = $request->input('id');
        $user = User::find($id);
        if(!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User tidak dapat diverifikasi!'
            ]);
        }
        $user->email_verified_at = Carbon::now();
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil diverifikasi!'
        ]);
    }
}
