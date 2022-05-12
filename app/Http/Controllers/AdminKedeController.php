<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminKede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminKedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index', [
            "title" => "Sangrid CRUD",
            "creator" => "San"
        ]);
    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('admin/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('admin.login')->with('success', 'Registration success. Please login!');
    }

    public function login() {
        return view('admin/loginadmin', [
            "title" => "Sangrid CRUD",
            "creator" => "San"
        ]);
    }

    public function login_action(Request $request)
    {
        // validasi input
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // jika berhasil loginkan
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        // jika tidak sesuai maka beri error
        return back()->withErrors([
            'password' => 'Wrong name or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function show(AdminKede $adminKede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminKede $adminKede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminKede $adminKede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminKede $adminKede)
    {
        //
    }
}
