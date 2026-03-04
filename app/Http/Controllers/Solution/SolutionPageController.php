<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\SolutionCategory;
use App\Models\SolutionItem;
use Domain\Contact\ViewModel\ContactViewModel;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;
use Domain\Solution\SolutionItem\SolutionItemViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SolutionPageController extends Controller
{
    public function categories():View
    {
        $categories = SolutionCategoryViewModel::make()->categories();
        return view('pages.solution.categories', compact('categories'));
    }

    public function items(SolutionCategory $solution_category):View
    {
        $items = SolutionItemViewModel::make()->items($solution_category->id);
        return view('pages.solution.items', compact('solution_category','items'));
    }

    public function item(SolutionCategory $solution_category, SolutionItem $solution_item):View
    {
      return view('pages.solution.item', compact('solution_category','solution_item'));
    }

    public function search(Request $request): View
    {

        $data = $request->only('sorting', 'tag');
        $value_sorting = $request['sorting'];
        $value_tag = $request['tag'];

        $categories = SolutionCategoryViewModel::make()->search($data);
        return view('pages.solution.categories', compact('categories', 'value_sorting', 'value_tag'));


    }

}
