<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function allUser() {
        $all = User::all();
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

    function updateUser(Request $request, $id) {
        $request->validate([
            "up_name" => "required|string",
            "up_email" => "required|email|unique:users,email" . $id,
            "up_password" => "required|string|min:8",
            "up_user_type" => "required|string",
            "up_kelas" => "required|string",
            "up_nis" => "required|string"
        ]);
        
        try {
            $user = User::findOrFail($id);
            if($user) {
                $user->update([
                    'up_name' => $request->up_name,
                    'up_email' => $request->up_email,
                    'up_password' => $request->up_password ? Hash::make($request->up_password) : $request->up_password,
                    'up_user_type' => $request->up_user_type,
                    'up_kelas' => $request->up_kelas,
                    'up_nis' => $request->up_nis,
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

    function verifUser() {
        $userAll = User::all();
        return view("verif_user", compact('userAll'));
    }
}
