<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function index()
    {
        $items = product::all();
        return response()->json($items);
    }

    public function show($id)
    {
        $item = product::find($id);
        return response()->json($item);
    }

    public function store(Request $request)
    {
        $item = product::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = product::find($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        product::destroy($id);
        return response()->json(null, 204);
    }
}
