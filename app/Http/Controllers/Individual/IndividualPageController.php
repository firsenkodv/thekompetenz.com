<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Individual;
use Domain\Individual\ViewModel\IndividualViewModel;
use Illuminate\Contracts\View\View;

class IndividualPageController extends Controller
{
    public function index():View
    {
        $items = IndividualViewModel::make()->businesses();
        return view('pages.individual.items', compact('items'));
    }



    public function show(Individual $individual)
    {
        if(!$individual->published) {
            abort(404);
        }
        return view('pages.individual.item', [
            'item'=> $individual
        ]);
    }


}
