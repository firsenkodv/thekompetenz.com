<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class WorkPage extends Page
{

    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }
    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/work.php')) {
            $result = include(storage_path('app/public/config/moonshine/work.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'About Us';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if (!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/work', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('About Us'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Title'),

                                    Box::make([
                                        Text::make('Title', 'title')->unescape()->default((isset($title)) ? $title : ''),
                                        Textarea::make('Short Desc', 'short_desc')->unescape()->default((isset($short_desc)) ? $short_desc : ''),
                                    ]),


                                    Divider::make('Our values'),

                                    Box::make([
                                        Text::make('Title', 'our_value_title')->unescape()->default((isset($our_value_title)) ? $our_value_title : 'Our values'),


                                        Json::make('', 'our_value_options')->fields([
                                            Text::make('Number', 'json_number')->unescape(),
                                            Text::make('Title', 'json_title')->unescape(),
                                            Textarea::make('Text', 'json_text')->unescape(),

                                        ])->vertical()->creatable(limit: 3)
                                            ->removable()->default((isset($our_value_options)) ? $our_value_options : ''),

                                    ]),

                                    Divider::make('Content'),

                                    Box::make([
                                        TinyMce::make('Description 1', 'desc')->default((isset($desc)) ? $desc : ''),

                                       TinyMce::make('Description 2', 'desc2')->default((isset($desc2)) ? $desc2 : ''),


                                    ]),


                                ])->columnSpan(8),


                                Column::make([
                                    Divider::make('Metatitle'),

                                    Box::make([
                                        Text::make('Title ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Description', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                        Text::make('Keywords', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),
                                    ]),

                                ])->columnSpan(4),
                            ]),


                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
