<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoundItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoundItemController extends Controller
{
    public function index()
    {
        $foundItems = FoundItem::latest()->get();
        return view('found_items.index', compact('foundItems'));
    }

    public function create()
    {
        return view('found_items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' // Validate image upload
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('found_items', 'public');
        }

        // Create found item
        FoundItem::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'user_id' => Auth::id(),
            'status' => 'found',
            'image' => $imagePath
        ]);

        return redirect()->route('found-items.index')->with('success', 'Found item reported successfully!');
    }

    public function show(FoundItem $foundItem)
    {
        return view('found_items.show', compact('foundItem'));
    }

    public function edit(FoundItem $foundItem)
    {
        if (!auth()->user()->can('manage-items')) {
            abort(403, 'Unauthorized action.');
        }

        return view('found_items.edit', compact('foundItem'));
    }

    public function update(Request $request, FoundItem $foundItem)
    {
        if (!auth()->user()->can('manage-items')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle image upload if a new one is provided
        if ($request->hasFile('image')) {
            if ($foundItem->image) {
                Storage::disk('public')->delete($foundItem->image);
            }
            $imagePath = $request->file('image')->store('found_items', 'public');
            $foundItem->image = $imagePath;
        }

        $foundItem->update([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'status' => $request->status ?? 'found',
        ]);

        return redirect()->route('found-items.index')->with('success', 'Found item updated successfully!');
    }

    public function destroy(FoundItem $foundItem)
    {
        if (!auth()->user()->can('manage-items')) {
            abort(403, 'Unauthorized action.');
        }

        if ($foundItem->image) {
            Storage::disk('public')->delete($foundItem->image);
        }
        
        $foundItem->delete();

        return redirect()->route('found-items.index')->with('success', 'Found item deleted successfully!');
    }
}
