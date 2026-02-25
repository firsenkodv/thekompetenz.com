<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SolutionTag;

use Illuminate\Database\Eloquent\Model;
use App\Models\SolutionTag;
use App\MoonShine\Resources\SolutionTag\Pages\SolutionTagIndexPage;
use App\MoonShine\Resources\SolutionTag\Pages\SolutionTagFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SolutionTag, SolutionTagIndexPage, SolutionTagFormPage>
 */
class SolutionTagResource extends ModelResource
{
    protected string $model = SolutionTag::class;

    protected string $title = 'SolutionTags';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SolutionTagIndexPage::class,
            SolutionTagFormPage::class,
        ];
    }
}
