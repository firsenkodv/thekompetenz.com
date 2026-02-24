<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SolutionCategory;

use Illuminate\Database\Eloquent\Model;
use App\Models\SolutionCategory;
use App\MoonShine\Resources\SolutionCategory\Pages\SolutionCategoryIndexPage;
use App\MoonShine\Resources\SolutionCategory\Pages\SolutionCategoryFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SolutionCategory, SolutionCategoryIndexPage, SolutionCategoryFormPage>
 */
class SolutionCategoryResource extends ModelResource
{
    protected string $model = SolutionCategory::class;

    protected string $title = 'Solution Categories';

    protected string $column = 'title';
    protected string $sortColumn = 'sorting';


    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SolutionCategoryIndexPage::class,
            SolutionCategoryFormPage::class,
        ];
    }
}
