<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\AdminModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public final function auth(Request $request) {
        $validation = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['error' => 'Harap cek kembali input anda!'], 400);
        }

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['ok'], 200);
        } else {
            return response()->json(['error' => 'Username atau Password salah!'], 401);
        }
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(route('home'));
    }

    public final function index(){
        return view('page2-admin.index');
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
    public function store(StoreAdminRequest $request, AdminModel $adminModel)
    {
        //
        $adminModel->queryCreate($request->all());
        return back()->with('sukses', 'Query berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminModel $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminModel $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, AdminModel $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminModel $admin)
    {
        //
    }
}
