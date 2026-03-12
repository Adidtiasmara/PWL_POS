<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index()
    {
    $data = [
        'level_id' => 2,
        'username' => 'Aditiasmr',
        'nama' => 'Adid2',
    ];  
    UserModel::create($data);

    // $user = UserModel::all();
    // return view('user', ['data' => $user]);

    // $data = [
    //     'nama' => 'Pelanggan Pertama',
    // ];
    // UserModel::where('username', 'customer-1')->update($data);

    // $data = UserModel::all();
    // return view('user', ['data' => $data]);

    // $data = [
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama' => 'Manager 3',
    //     'password' => Hash::make('12345')
    // ];

    // UserModel::create($data);

    // $user = UserModel::all();
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('level_id', 1)->first();
    // return view('user', ['data' => $user]);

    // $user = UserModel::firstwhere('level_id', 1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::findOr(1, ['username', 'nama'], function () {
    //     abort(404);
    // });
    // return view('user', ['data' => $user]);
    // }

    // $user = UserModel::findOr(20, ['username', 'nama'], function () {
    //     abort(404);
    // });
    // return view('user', ['data' => $user]);

    // $user = UserModel::findOrFail(1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('username', 'manager9')->firstOrFail();
    // return view('user', ['data' => $user]);
    
    // $user = UserModel::where('level_id',2)->count();

    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager22',
    //         'nama' => 'Manager Dua Dua',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );

    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'Manager',
    //     ],
    // );

    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager33',
    //         'nama' => 'Manager Tiga Tiga',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );

    // $user->save();
    // delete
    // $user = UserModel::where('username', 'manager22')->delete();


    // $user = UserModel::create([
    //     'username' => 'manager11',
    //     'nama' => 'Manager11',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 2
    // ]);

    // $user->username = 'manager12';

    // $user->isDirty('username'); //cek apakah ada perubahan data
    // $user->isDirty('nama');
    // $user->isDirty(['nama', 'username']);
    
    // $user->isClean();
    // $user->isClean('username');
    // $user->isClean('nama');
    // $user->isClean(['nama', 'username']);

    // $user->save();

    // $user->wasChanged();
    // $user->wasChanged('username');
    // $user->wasChanged(['username', 'level_id']);
    // $user->wasChanged('nama');
    // dd($user->wasChanged(['nama', 'username']));

    // $user = UserModel::all();
    
    $user = UserModel::with('level')->get();
    return view('user', ['data' => $user]);
    // dd($user);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create(
            [
                'username' => $request->username,
                'nama' => $request->nama,
                'password' => Hash::make($request->password),
                'level_id' => $request->level_id
            ]
        );
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request )
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
} 

