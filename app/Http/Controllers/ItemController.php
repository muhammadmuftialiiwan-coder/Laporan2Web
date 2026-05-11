<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Mengambil semua item beserta relasi kategorinya
        return response()->json(Item::with('category')->get(), 200);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    public function show($id)
{
    // Ini akan mencari item berdasarkan ID, jika tidak ada maka muncul 404
    $item = Item::with('category')->find($id);

    if (!$item) {
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    return response()->json($item, 200);
}

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(['message' => 'Item berhasil dihapus'], 200);
    }
}