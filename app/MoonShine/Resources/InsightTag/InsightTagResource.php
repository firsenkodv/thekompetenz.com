<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\InsightTag;

use Illuminate\Database\Eloquent\Model;
use App\Models\InsightTag;
use App\MoonShine\Resources\InsightTag\Pages\InsightTagIndexPage;
use App\MoonShine\Resources\InsightTag\Pages\InsightTagFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<InsightTag, InsightTagIndexPage, InsightTagFormPage>
 */
class InsightTagResource extends ModelResource
{
    protected string $model = InsightTag::class;

    protected string $title = 'InsightTags';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            InsightTagIndexPage::class,
            InsightTagFormPage::class,
        ];
    }
}
