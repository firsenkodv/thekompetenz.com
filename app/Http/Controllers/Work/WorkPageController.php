<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Domain\Work\ViewModel\WorkViewModel;

class WorkPageController extends Controller
{
    public function index()
    {
        $items = WorkViewModel::make()->works();
        return view('pages.work.items', compact('items'));
    }
}
