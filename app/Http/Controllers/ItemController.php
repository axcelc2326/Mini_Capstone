<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;
use App\Models\FoundItem;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = LostItem::select('id', 'name', 'description', 'location', 'image', 'user_id', 'created_at', DB::raw("'lost' as type"))
            ->with('user')
            ->union(
                FoundItem::select('id', 'name', 'description', 'location', 'image', 'user_id', 'created_at', DB::raw("'found' as type"))
                    ->with('user')
            )
            ->orderBy('created_at', 'desc')
            ->get();

        return view('items.index', compact('items'));
    }
}
