<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Recording;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function show() {
        return Recording::all();
    }

    public function store(Request $request)
    {
        return recording::create($request->all());
    }
}
