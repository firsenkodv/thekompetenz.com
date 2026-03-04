<?php

namespace App\Http\Controllers\Insight;

use App\Http\Controllers\Controller;
use App\Models\Individual;
use App\Models\Insight;
use Domain\Individual\ViewModel\IndividualViewModel;
use Domain\Insight\ViewModel\InsightViewModel;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;
use FilesystemIterator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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

    public function search(Request $request): View
    {

        $data = $request->only('sorting', 'tag');
        $value_sorting = $request['sorting'];
        $value_tag = $request['tag'];

        $items = InsightViewModel::make()->search($data);
        return view('pages.insight.items', compact('items', 'value_sorting', 'value_tag'));


    }


}
