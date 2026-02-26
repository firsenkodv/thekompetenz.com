<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Contact\Pages;

use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Contact\ContactResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;


/**
 * @extends FormPage<ContactResource>
 */
class ContactFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Our Contacts'),
                Tabs::make([

                    Tab::make(__('Contacts'), [
                        Grid::make([
                            Column::make([

                                Box::make([
                                    Text::make('Title', 'title')->required(),
                                    Slug::make('Slug', 'slug')
                                        ->from('title')->unique()->locked(),
                                    Text::make('SubTitle', 'subtitle'),
                                ]),
                                Box::make([
                                    Image::make(__('Flag'), 'flag')
                                        ->dir('contacts')
                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                        ->removable(),
                                ]),

                                Box::make([
                                    Text::make('Office', 'office')->unescape()->default('Office'),
                                    Text::make('Address', 'address')->unescape(),
                                    Text::make('Country', 'country')->unescape(),
                                ]),

                            ])->columnSpan(6),
                            Column::make([

                                Divider::make('Metatitle'),

                                Box::make([
                                    Text::make('Title ', 'metatitle')->unescape(),
                                    Text::make('Description', 'description')->unescape(),
                                    Text::make('Keywords', 'keywords')->unescape(),
                                ]),

                                Box::make([

                                    Switcher::make('Published', 'published')->default(1),
                                    Switcher::make('Feedback Form', 'form')->default(1),
                                    Number::make('Sorting', 'sorting')->buttons()->default(0),

                                    Date::make(__('Дата создания'), 'created_at')
                                        ->format("d.m.Y")
                                        ->default(now()->toDateTimeString())
                                        ->sortable(),
                                ]),

                            ])->columnSpan(6),
                        ]),
                        Grid::make([
                            Column::make([

                                Tabs::make([

                                    Tab::make(__('Map'), [

                                        Grid::make([
                                            Column::make([
                                                Collapse::make('YandexMap', [

                                                    Json::make('Question-Answer', 'map')->fields([
                                                        Text::make('Title', 'map_title'),
                                                        Text::make('Coordinates', 'map_coordinates'),
                                                        Number::make('Phone', 'map_phone'),
                                                        Text::make('Email', 'map_email')

                                                    ])->vertical()->creatable(limit: 1)
                                                        ->removable(),

                                                ]),
                                            ])->columnSpan(12),
                                        ]),
                                    ]),

                                    Tab::make(__('Gallery'), [

                                    ]),


                                ]),

                            ])->columnSpan(12),

                        ]),

                    ]),


                ]),
            ]),
        ];

    }


    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [];
    }

    /**
     * @param  FormBuilder  $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
