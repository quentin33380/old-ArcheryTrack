<?php

// app/Http/Controllers/ArcController.php

namespace App\Http\Controllers;

use App\Models\Arcs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArcController extends Controller
{
    public function createProfile(Request $request)
    {
        $count = Auth::user()->arcs->count() + 1;
        $user_id = Auth::user()->id;
        $nomArc = 'Arc n°' . $count;
        $arc = Arcs::create(['name' => $nomArc, 'user_id' => $user_id]);

        return redirect()->route('arcs.index', ['slug' => Str::slug($arc->name, '-')]);
    }

    public function index(string $slug)
    {
        $arcs = Auth::user()->arcs->sortBy('name');

        $arcs->map(function ($arc, $index) {
            $arc->slug = Str::slug($arc->name, '-');
        })->toArray();

        $arc = $arcs->firstWhere('slug', $slug);

        return view('arcs.index', compact('arc'));
    }

}

