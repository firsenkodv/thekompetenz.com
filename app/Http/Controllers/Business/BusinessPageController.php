<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Domain\Business\ViewModel\BusinessViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BusinessPageController extends Controller
{

    public function index():View
    {
        $items = BusinessViewModel::make()->businesses();
        return view('pages.business.items', compact('items'));
    }



    public function show(Business $business)
    {
        if(!$business->published) {
            abort(404);
        }
        return view('pages.business.item', [
            'item'=> $business
        ]);
    }



}
