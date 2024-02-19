<?php

// app/Http/Controllers/ArcController.php

namespace App\Http\Controllers;

use App\Models\Arcs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArcController extends Controller
{
    public function store(Request $request)
    {
        $count = Auth::user()->arcs()->count() + 1;
        $nomArc = 'Arc n°' . $count;
        $arc = Auth::user()->arcs()->create(['nom' => $nomArc]);
        return redirect()->route('arcs.edit', $arc);
    }

    public function edit(Arcs $arc)
    {
        $this->authorize('update', $arc);

        return view('arcs.edit', compact('arc'));
    }

}

