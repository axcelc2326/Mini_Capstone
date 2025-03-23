<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;
use Illuminate\Support\Facades\Auth;

class LostItemController extends Controller
{
    public function index()
    {
        $lostItems = LostItem::all();
        return view('lost_items.index', compact('lostItems'));
    }

    public function create()
    {
        return view('lost_items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle image upload if exists
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('lost_items', 'public');
        }

        LostItem::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'user_id' => Auth::id(),
            'status' => 'lost',
            'image' => $imagePath
        ]);

        return redirect()->route('lost-items.index')->with('success', 'Lost item reported successfully!');
    }

    public function show(LostItem $lostItem)
    {
        return view('lost_items.show', compact('lostItem'));
    }

    public function edit(LostItem $lostItem)
{
    if (!auth()->user()->can('manage-items')) {
        abort(403, 'Unauthorized action.');
    }
    
    return view('lost_items.edit', compact('lostItem'));
}

public function update(Request $request, LostItem $lostItem)
{
    if (!auth()->user()->can('manage-items')) {
        abort(403, 'Unauthorized action.');
    }

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'location' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['name', 'description', 'location']);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('lost_items', 'public');
        $data['image'] = $imagePath;
    }

    $lostItem->update($data);

    return redirect()->route('lost-items.index')->with('success', 'Item updated successfully.');
}

public function destroy(LostItem $lostItem)
{
    if (!auth()->user()->can('manage-items')) {
        abort(403, 'Unauthorized action.');
    }

    $lostItem->delete();

    return redirect()->route('lost-items.index')->with('success', 'Item deleted successfully.');
}
}
