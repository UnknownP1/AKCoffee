<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('id', 'desc')->get();
        return Inertia::render('Owner/Menu/Index', ['menus' => $menus]);
    }

    public function create()
    {
        $currentBestSellers = Menu::where('is_best_seller', true)
                                  ->whereNotNull('best_seller_order')
                                  ->orderBy('best_seller_order')
                                  ->get();
        return Inertia::render('Owner/Menu/Create', ['currentBestSellers' => $currentBestSellers]);
    }

    public function store(Request $request)
    {
        // Tambahkan validasi description, pastikan price required!
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'description' => 'nullable|string', 
            'image' => 'nullable|image|max:2048',
            'is_best_seller' => 'boolean',
            'best_seller_order' => 'nullable|integer|min:1|max:4'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menus', 'public');
            $validated['image'] = $path;
        }

        if (!$request->has('is_best_seller')) {
            $validated['is_best_seller'] = false;
            $validated['best_seller_order'] = null;
        }

        Menu::create($validated);
        return redirect()->route('owner.menu.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $currentBestSellers = Menu::where('is_best_seller', true)
                                  ->whereNotNull('best_seller_order')
                                  ->orderBy('best_seller_order')
                                  ->get();
        return Inertia::render('Owner/Menu/Edit', [
            'menu' => $menu,
            'currentBestSellers' => $currentBestSellers
        ]);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'description' => 'nullable|string', // Tambahkan ini!
            'image' => 'nullable|image|max:2048',
            'is_best_seller' => 'boolean',
            'best_seller_order' => 'nullable|integer|min:1|max:4'
        ]);

        if ($request->hasFile('image')) {
            if ($menu->image) Storage::disk('public')->delete($menu->image);
            $path = $request->file('image')->store('menus', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = $menu->image;
        }

        if ($request->has('is_best_seller') && $request->is_best_seller && $request->best_seller_order) {
            Menu::where('best_seller_order', $request->best_seller_order)
                ->where('id', '!=', $id)
                ->update(['is_best_seller' => false, 'best_seller_order' => null]);
        } else {
            $validated['is_best_seller'] = false;
            $validated['best_seller_order'] = null;
        }

        $menu->update($validated);
        return redirect()->route('owner.menu.index')->with('success', 'Menu berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        if ($menu->image) Storage::disk('public')->delete($menu->image);
        $menu->delete();
        return redirect()->route('owner.menu.index');
    }
}