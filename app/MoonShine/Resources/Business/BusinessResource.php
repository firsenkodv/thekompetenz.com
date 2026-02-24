<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Business;

use Illuminate\Database\Eloquent\Model;
use App\Models\Business;
use App\MoonShine\Resources\Business\Pages\BusinessIndexPage;
use App\MoonShine\Resources\Business\Pages\BusinessFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Business, BusinessIndexPage, BusinessFormPage>
 */
class BusinessResource extends ModelResource
{
    protected string $model = Business::class;

    protected string $title = 'Businesses';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    public function search(): array
    {
        return ['title', 'subtitle', 'short_desc', 'desc'];
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            BusinessIndexPage::class,
            BusinessFormPage::class,
        ];
    }

}
