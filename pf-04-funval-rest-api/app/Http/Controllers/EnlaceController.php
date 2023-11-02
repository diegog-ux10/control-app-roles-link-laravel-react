<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enlace;

class EnlaceController extends Controller
{
    public function index()
    {
        return Enlace::all();
    }

    public function show($id)
    {
        return Enlace::find($id);
    }

    public function store(Request $request)
    {
        return Enlace::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $enlace = Enlace::findOrFail($id);
        $enlace->update($request->all());

        return $enlace;
    }

    public function destroy($id)
    {
        $enlace = Enlace::findOrFail($id);
        $enlace->delete();

        return 204;
    }
}
