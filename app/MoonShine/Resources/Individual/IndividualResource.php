<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Individual;

use Illuminate\Database\Eloquent\Model;
use App\Models\Individual;
use App\MoonShine\Resources\Individual\Pages\IndividualIndexPage;
use App\MoonShine\Resources\Individual\Pages\IndividualFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Individual, IndividualIndexPage, IndividualFormPage>
 */
class IndividualResource extends ModelResource
{
    protected string $model = Individual::class;

    protected string $title = 'Individuals';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            IndividualIndexPage::class,
            IndividualFormPage::class,
        ];
    }
}
