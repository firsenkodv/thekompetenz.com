<?php

namespace App\Http\Controllers\Insight;

use App\Http\Controllers\Controller;
use App\Models\Individual;
use App\Models\Insight;
use Domain\Individual\ViewModel\IndividualViewModel;
use Domain\Insight\ViewModel\InsightViewModel;
use FilesystemIterator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class InsightPageController extends Controller
{
    public function index():View
    {
        $items = InsightViewModel::make()->insights();
        return view('pages.insight.items', compact('items'));
    }



    public function show(Insight $insight)
    {
        if(!$insight->published) {
            abort(404);
        }
        return view('pages.insight.item', [
            'item'=> $insight
        ]);
    }
}
