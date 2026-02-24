<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Insight;

use App\Models\Individual;
use Illuminate\Database\Eloquent\Model;
use App\Models\Insight;
use App\MoonShine\Resources\Insight\Pages\InsightIndexPage;
use App\MoonShine\Resources\Insight\Pages\InsightFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Insight, InsightIndexPage, InsightFormPage>
 */
class InsightResource extends ModelResource
{
    protected string $model = Insight::class;

    protected string $title = 'Insights';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            InsightIndexPage::class,
            InsightFormPage::class,
        ];
    }
}
