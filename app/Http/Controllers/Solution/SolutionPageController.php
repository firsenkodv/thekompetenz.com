<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\SolutionCategory;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;

class SolutionPageController extends Controller
{
    public function categories() {
        $categories = SolutionCategoryViewModel::make()->categories();
        return view('pages.solution.categories', compact('categories'));
    }
    public function items(SolutionCategory $solution_category) {
        return view('pages.solution.items', compact('solution_category'));
    }
    public function item() {
        return view('pages.solution.item');
    }

}
