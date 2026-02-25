<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\SolutionCategory;
use App\Models\SolutionItem;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;
use Domain\Solution\SolutionItem\SolutionItemViewModel;
use Illuminate\View\View;

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

}
