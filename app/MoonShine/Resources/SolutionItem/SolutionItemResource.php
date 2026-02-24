<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SolutionItem;

use Illuminate\Database\Eloquent\Model;
use App\Models\SolutionItem;
use App\MoonShine\Resources\SolutionItem\Pages\SolutionItemIndexPage;
use App\MoonShine\Resources\SolutionItem\Pages\SolutionItemFormPage;
use App\MoonShine\Resources\SolutionItem\Pages\SolutionItemDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SolutionItem, SolutionItemIndexPage, SolutionItemFormPage, SolutionItemDetailPage>
 */
class SolutionItemResource extends ModelResource
{
    protected string $model = SolutionItem::class;

    protected string $title = 'SolutionItems';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SolutionItemIndexPage::class,
            SolutionItemFormPage::class,
            SolutionItemDetailPage::class,
        ];
    }
}
