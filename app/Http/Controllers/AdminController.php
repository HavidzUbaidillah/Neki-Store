<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\AdminModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public final function auth(Request $request) {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        if($request->validate($rules)){
            if (Auth::guard('admin')->attempt($request->all())) {
                $request->session()->regenerate();
                return redirect()->intended(route('admin.dashboard'));
            }
            else{
                return back()->withErrors(['error'=>'Username atau Password Salah'])->onlyInput('username');
            }
        }else{
            return back()->withErrors(['error'=>'Cek kembali input anda!']);
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
