<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SolutionCategory\Pages;

use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\SolutionCategory\SolutionCategoryResource;
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
 * @extends FormPage<SolutionCategoryResource>
 */
class SolutionCategoryFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Solution Categories'),
                Tabs::make([

                    Tab::make(__('Setting'), [

                        Grid::make([
                            Column::make([

                                Box::make([
                                    Text::make('Title', 'title')->required()->unescape(),
                                    Slug::make('Slug', 'slug')
                                        ->from('title')->unique()->locked(),
                                    Text::make('SubTitle', 'subtitle')->unescape(),
                                    Textarea::make('Short Description', 'short_desc')->unescape()
                                ]),

                                Box::make([
                                    Image::make(__('Img'), 'img')
                                        ->dir('pages')
                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                        ->removable(),
                                    //   TinyMce::make('Short Description', 'short_desc'),
                                ]),

                                Box::make([
                                    Text::make('Slogan', 'slogan')->unescape(),
                                    Image::make(__('Img 2'), 'img2')
                                        ->dir('pages')
                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                        ->removable(),
                                ]),

                                Box::make([
                                    TinyMce::make('Description 1', 'desc'),
                                ]),

                            ])->columnSpan(6),

                            Column::make([

                                Divider::make('Metatitle'),

                                Box::make([
                                    Text::make('Title ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                    Text::make('Description', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                    Text::make('Keywords', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),
                                ]),

                                Box::make([
                                    Switcher::make('Published', 'published')->default(1),
                                    Number::make('Sorting', 'sorting')->buttons()->default(0),

                                    Date::make(__('Дата создания'), 'created_at')
                                        ->format("d.m.Y")
                                        ->default(now()->toDateTimeString())
                                        ->sortable(),
                                ]),

                            ])->columnSpan(6),
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
