<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{


    // Create

    public function createProduct(Request $req)
    {
        $data = [
            'name' => $req->post('name'),
            'product_id' => $req->post('productId'),
            'description' => $req->post('description'),
        ];

        DB::table('products')->insert($data);

        return response()->json(['success' => true, 'message' => 'Product Created Successfully!']);
    }


    // Read

    public function showData()
    {
        $data = DB::table('products')->get();

        return view('show', ['data' => $data]);
    }
        

    // Update

    public function editData(Request $req, $id)
    {
        $data = DB::table('products')->where(['id' => $id])->get();

        return view('edit', ['data' => $data]);
    }

    public function updateData(Request $req, $id)
    {

        $data = [
            'name' => $req->post('name'),
            'product_id' => $req->post('productId'),
            'description' => $req->post('description'),
        ];

        DB::table('products')->where(['id' => $id])->update($data);

        return redirect('/show');
    }


    // Delete

    public function removeData($id)
    {
        DB::table('products')->where(['id' => $id])->delete();
        return redirect('/show');
    }

}
