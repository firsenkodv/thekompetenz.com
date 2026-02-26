<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Contact;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\MoonShine\Resources\Contact\Pages\ContactIndexPage;
use App\MoonShine\Resources\Contact\Pages\ContactFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Contact, ContactIndexPage, ContactFormPage>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Contacts';

    protected string $column = 'title';
    protected string $sortColumn = 'sorting';
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ContactIndexPage::class,
            ContactFormPage::class,
        ];
    }
}
