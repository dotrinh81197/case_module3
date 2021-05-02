<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $employees = User::where('roles', '=', 1)
            ->get();

        return view('dashboard.user.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function showRegisterForm()
    {
        return view('dashboard.user.registerForm');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {

        $user = new User();
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password      = bcrypt($request->input('password'));
        $user->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới tài khoản thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('user.create');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return  view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->dob      = $request->input('dob');
        $user->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành viên thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('user.index');
    }

    public function search(Request $request)
    {

        $keyword = $request->input('key_word');

        if (!$keyword) {
            return redirect()->route('user.index');
        }
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);
        $cities = User::all();
        return view('user.list', compact('users'));
    }
}
