<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Insight\Pages;

use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Insight\InsightResource;
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
 * @extends FormPage<InsightResource>
 */
class InsightFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Insights'),
                Tabs::make([

                    Tab::make(__('Setting'), [
                        Grid::make([
                            Column::make([

                                Box::make([
                                    Text::make('Title', 'title')->required(),
                                    Slug::make('Slug', 'slug')
                                        ->from('title')->unique()->locked(),
                                    Text::make('SubTitle', 'subtitle'),
                                    Textarea::make('Short Description', 'short_desc')
                                ]),

                                Box::make([
                                    Image::make(__('Img'), 'img')
                                        ->dir('pages')
                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                        ->removable(),
                                    //   TinyMce::make('Short Description', 'short_desc'),

                                ]),
                                Box::make([
                                    Text::make('Back', 'back')->unescape()->default('Back to insights'),
                                    Text::make('Slogan', 'slogan')->unescape()->default('Oil & Gas Industry · Insight'),


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
                                    Tab::make(__('Description'), [
                                        Grid::make([
                                            Column::make([
                                                Box::make([
                                                    TinyMce::make('Description 1', 'desc'),
                                                ]),

                                            ])->columnSpan(6),

                                            Column::make([
                                                Box::make([
                                                    Image::make(__('Img Full'), 'img2')
                                                        ->dir('pages')
                                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                                        ->removable(),
                                                    TinyMce::make('Description 2', 'desc2'),
                                                ]),

                                            ])->columnSpan(6)

                                        ]),
                                    ]),

                                    Tab::make(__('FAQ'), [

                                        Grid::make([
                                            Column::make([
                                                Collapse::make('Question/Answer', [
                                                    Text::make('Title', 'faq_title')->unescape(),

                                                    Json::make('Question-Answer', 'faq')->fields([
                                                        Textarea::make('Question', 'faq_question'),
                                                        TinyMce::make('Answer', 'faq_answer')

                                                    ])->vertical()->creatable(limit: 50)
                                                        ->removable(),

                                                ]),
                                            ])->columnSpan(12),
                                        ]),
                                    ]),

                                    Tab::make(__('Gallery'), [
                                        Grid::make([
                                            Column::make([

                                                Box::make([
                                                    Json::make('Gallery', 'gallery')->fields([

                                                        Text::make('', 'json_gallery_label')->hint('title image'),
                                                        Image::make(__('Img'), 'json_gallery_text')
                                                            ->dir('gallery/insights')
                                                            ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                                            ->removable(),
                                                    ])->vertical()->creatable(limit: 100)
                                                        ->removable(),
                                                ]),
                                            ])->columnSpan(6),
                                        ]),

                                    ]),
                                    Tab::make(__('Files'), [
                                        Grid::make([
                                            Column::make([

                                                Box::make([
                                                    Json::make('Files', 'files')->fields([
                                                        Text::make('Title', 'json_files_label'),
                                                        Image::make(__('File'), 'json_files_text')
                                                            ->dir('files/insights')
                                                            ->removable(),
                                                    ])->vertical()->creatable(limit: 100)
                                                        ->removable(),
                                                ]),
                                            ])->columnSpan(6),
                                        ]),

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
