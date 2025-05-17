<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        $data = [  'name' => 'John Doe','email' =>'vothoai1503@gmail.com' ,'age' => 30];
        return response()->json($data);
    }

    public function show($id)
    {
        // Your logic here
    }

    public function store(Request $request)
    {
        // Your logic here
    }

    public function update(Request $request, $id)
    {
        // Your logic here
    }

    public function destroy($id)
    {
        // Your logic here
    }
}
?>