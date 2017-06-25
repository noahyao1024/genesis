<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitController extends Controller
{
    public function commit(Request $request, $id) {
        return [$id];
    }
}
