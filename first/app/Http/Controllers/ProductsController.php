<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function insertForm()
    {
        return view('products.add');
    }

    public function list()
    {
        $products = DB::select('SELECT * FROM products');
        return view('products.list',[
            'products' => $products
            ]);
    }

    public function editForm($id)
    {
        $editProd = DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        return view('products.edit',[
            'editProd' => $editProd
            ]);
    }

    public function deleteForm($id)
    {
        $deleteProd = DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        return view('products.delete',[
            'deleteProd' => $deleteProd
            ]);
    }

    public function store(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_quantity = $request->input('product_quantity');
        $product_code = $request->input('product_code');

        $data = array(
            'product_name' => $product_name,
            "product_quantity" => $product_quantity,
            "product_code" => $product_code
        );
        DB::table('products')->insert($data);

        return redirect('/home')->with('success', 'Data inserted Successfully');
    }

    public function updateProd(Request $request, $id)
    {
        $product_name = $request->input('product_name');
        $product_quantity = $request->input('product_quantity');
        $product_code = $request->input('product_code');

        $data = array(
            'product_name' => $product_name,
            "product_quantity" => $product_quantity,
            "product_code" => $product_code
        );
        DB::update('UPDATE products 
        SET 
        product_name = ?, 
        product_quantity=?,
        product_code=? 
        WHERE id = ?',[
            $product_name,
            $product_quantity,
            $product_code,
            $id
            ]);

        return redirect('/home')->with('success', 'Data has been updated Successfully');
    }

    public function deleteProd($id)
    {
        DB::delete('DELETE FROM products WHERE id = ?',[$id]);
        return redirect('/home')->with('status' ,'Record deleted successfully.');  
    }
}
