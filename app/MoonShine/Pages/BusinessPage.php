<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\MoonShine\Fields\PreviewImage;
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


class BusinessPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/business.php')) {
            $result = include(storage_path('app/public/config/moonshine/business.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Business Category';
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
            FormBuilder::make('/moonshine/business', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Business'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Title'),

                                    Box::make([
                                        Text::make('Title', 'title')->unescape()->default((isset($title)) ? $title : ''),
                                        Text::make('Subtitle', 'subtitle')->unescape()->default((isset($subtitle)) ? $subtitle : ''),


                                    ]),


                                    Divider::make('Content'),

                                        Box::make([
                                            TinyMce::make('Description 1', 'desc')->default((isset($desc)) ? $desc : ''),

                                            Divider::make('Image Size 1360*500'),

                                            Box::make([
                                                Json::make('', 'temp_img')->fields([
                                                    Image::make(__('Img'), 'json_img'),
                                                    Text::make('Title', 'json_title')->unescape(),
                                                    Text::make('Link', 'json_link')->unescape(),

                                                ])->vertical()->creatable(limit: 1)
                                                    ->removable()->default((isset($temp_img)) ? $temp_img : ''),

                                            ]),



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
