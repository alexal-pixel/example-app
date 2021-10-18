<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        //ambil data
        $products = Product::all();
        return view('Products.index', compact(['products']));
    }

    public function showFormCreate()
    {
        return view('Products.form_Create');
    }

    public function prosesCreate(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }

    public function showFormEdit($id)
    {
        //ambil data
       $product = Product::find($id);
       return view('Products.form_Edit', compact(['product']));
    }

    public function prosesEdit(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function prosesDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
