<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $order = Order::all();

        return view('pages.order.index', compact('order'));
    }

    public function inputOrderpage(){
        $customer = User::where('role', 'customer')->get();
        $product = Product::all();

        return view('pages.order.inputOrder', compact('customer', 'product'));
    }

    public function inputOrder(Request $request) {
        return redirect()->route('order.index');
    }

    public function orderEdit($id) {
        $order = Order::where('id', $id)->first();

        return view('pages.order.editOrder', compact('order'));
    }

    public function orderUpdate(Request $request, $id) {
        return redirect()->route('order.index');
    }

    public function deleteOrder($id) {
        Order::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function updateStatuspage() {
        $order = Order::all();

        return view('pages.order.editStatus', compact('order'));
    }

    public function updateStatus(Request $request, $id) {
        return redirect()->route('order.editStatuspage');
    }
}
