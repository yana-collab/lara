<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        $errors = [];

        if($request->isMethod('post')) {
            $password = $request->post('password');
            if(Hash::check($request->post('current_password'), $user->password)){
            if($this->validate($request, $this->validateRules())) {
                $user->name = $request->post('name');
                $user->email = $request->post('email');
                if (!empty($password)) {
                    $user->password = Hash::make($request->post('password'));
                }
                $user->save();
            }
            }else {
                $errors['current_password'][]= 'Errors, warning';
            }
            return redirect()->back()
                ->withErrors($errors);
        }
        return view('admin.profile.update', ['user'=> $user]);

    }

    public function validateRules()
    {
        return [
            'name' => 'required|string|max:100',
            'email'=> 'required|email',
            'password' => 'required|'
        ];
    }
}
