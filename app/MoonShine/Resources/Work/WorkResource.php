<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Work;

use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
use App\MoonShine\Resources\Work\Pages\WorkIndexPage;
use App\MoonShine\Resources\Work\Pages\WorkFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Work, WorkIndexPage, WorkFormPage>
 */
class WorkResource extends ModelResource
{
    protected string $model = Work::class;


    protected string $title = 'About Us';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            WorkIndexPage::class,
            WorkFormPage::class,
        ];
    }
}
