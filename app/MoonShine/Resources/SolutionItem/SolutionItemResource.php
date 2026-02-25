<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SolutionItem;

use Illuminate\Database\Eloquent\Model;
use App\Models\SolutionItem;
use App\MoonShine\Resources\SolutionItem\Pages\SolutionItemIndexPage;
use App\MoonShine\Resources\SolutionItem\Pages\SolutionItemFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SolutionItem, SolutionItemIndexPage, SolutionItemFormPage>
 */
class SolutionItemResource extends ModelResource
{
    protected string $model = SolutionItem::class;

    protected string $title = 'Solution Items';

    protected string $column = 'title';
    protected string $sortColumn = 'sorting';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SolutionItemIndexPage::class,
            SolutionItemFormPage::class,
        ];
    }
}
