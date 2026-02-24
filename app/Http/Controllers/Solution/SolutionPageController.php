<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;

class SolutionPageController extends Controller
{
    public function categories() {
        $categories = SolutionCategoryViewModel::make()->categories();
        return view('pages.solution.categories', compact('categories'));
    }
    public function items() {
        return view('pages.solution.items');
    }
    public function item() {
        return view('pages.solution.item');
    }

}
