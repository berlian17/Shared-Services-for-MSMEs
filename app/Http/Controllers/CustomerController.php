<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customer = User::where('role', 'customer')->get();

        return view('pages.customer.index', compact('customer'));
    }

    public function addCustomerpage() {
        return view('pages.customer.addCustomer');
    }

    public function addCustomer(Request $request) {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        $customer = User::create([
            'name' => $validation['name'],
            'email' => $validation['email'],
            'password' => bcrypt($validation['password']),
            'phone' => $validation['phone'],
            'address' => $validation['address'],
            'role' => 'customer',
        ]);
        $customer->save();

        return redirect()->route('customer.index');
    }

    public function deleteCustomer($id) {
        User::findOrFail($id)->delete();

        return redirect()->back();
    }
}
