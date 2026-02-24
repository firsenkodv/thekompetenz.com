<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\MoonShine\Fields\PreviewCarouselImage;
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


class HomePage extends Page
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

        if (Storage::disk('config')->exists('moonshine/home.php')) {
            $result = include(storage_path('app/public/config/moonshine/home.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Home';
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
            FormBuilder::make('/moonshine/home', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Главная'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Our mission'),

                                    Box::make([
                                        Textarea::make('Mission', 'our_mission')->unescape()->default((isset($our_mission)) ? $our_mission : ''),

                                    ]),

                                    Divider::make('Slider'),

                                    Box::make([
                                        Json::make('', 'slider')->fields([

                                            Text::make('Title', 'json_title')->unescape(),
                                            Textarea::make('Desc HTML', 'json_text')->unescape(),

                                        ])->vertical()->creatable(limit: 10)
                                            ->removable()->default((isset($slider)) ? $slider : ''),
                                    ]),

                                    Divider::make('Image'),

                                    Box::make([
                                        Box::make([
                                            Image::make(__('Img'), 'temp_img')->hint('Size 1360*500'),
                                            PreviewImage::make()->default((isset($temp_img)) ? $temp_img : ''),
                                        ]),
                                    ]),

                                    Divider::make('Trusted Protection'),

                                    Box::make([
                                        Box::make([
                                            Textarea::make('Protection', 'trusted_protection_title')->unescape()->default((isset($trusted_protection_title)) ? $trusted_protection_title : ''),
                                            Json::make('', 'trusted_protection')->fields([

                                                Text::make('Number', 'json_title')->unescape(),
                                                Text::make('One', 'json_subtitle')->unescape(),
                                                Textarea::make('Desc HTML', 'json_text')->unescape(),

                                            ])->vertical()->creatable(limit: 10)
                                                ->removable()->default((isset($trusted_protection)) ? $trusted_protection : ''),

                                        ]),
                                    ]),
                                    Divider::make('Services'),

                                        Box::make([
                                            Text::make('Services for Business', 'services_business')->unescape()->default((isset($services_business)) ? $services_business : 'Services for Business'),


                                            Text::make('Services for Individuals', 'services_individuals')->unescape()->default((isset($services_individuals)) ? $services_individuals : 'Services for Individuals'),


                                            Textarea::make('', 'services_text')->unescape()->default((isset($services_text)) ? $services_text : ''),


                                            Json::make('', 'services_carousel')->fields([
                                                Image::make(__('Img'), 'json_img'),
                                                Text::make('Title', 'json_title')->unescape(),
                                                Text::make('Link', 'json_link')->unescape(),

                                            ])->vertical()->creatable(limit: 10)
                                                ->removable()->default((isset($services_carousel)) ? $services_carousel : ''),

                                        ]),

                                    Divider::make('Latest Insights'),

                                        Box::make([
                                            Text::make('Title', 'latest_insights')->unescape()->default((isset($latest_insights)) ? $latest_insights : 'Latest Insights'),
                                            Text::make('Link', 'latest_insights_link')->unescape()->default((isset($latest_insights_link)) ? $latest_insights_link : '#'),



                                            Json::make('', 'latest_insights_options')->fields([
                                                Text::make('Category', 'json_category')->unescape(),
                                                Text::make('Title', 'json_title')->unescape(),
                                                Text::make('Link', 'json_link')->unescape(),

                                            ])->vertical()->creatable(limit: 3)
                                                ->removable()->default((isset($latest_insights_options)) ? $latest_insights_options : ''),

                                    ]),
                                    Divider::make('Your personal profile'),

                                        Box::make([
                                            Text::make('Title', 'personal_profile_title')->unescape()->default((isset($personal_profile_title)) ? $personal_profile_title : 'Your personal profile'),
                                            Text::make('Subtitle', 'personal_profile_subtitle')->unescape()->default((isset($personal_profile_subtitle)) ? $personal_profile_subtitle : 'For corporate business, we provide comprehensive insurance solutions to protect your assets, employees, and operations'),


                                    ]),
                                    Divider::make('Vacancies'),

                                        Box::make([
                                            Text::make('Title', 'vacancies_title')->unescape()->default((isset($vacancies_title_title)) ? $vacancies_title_title : 'Vacancies all over the world'),
                                            Text::make('Subtitle', 'vacancies_subtitle')->unescape()->default((isset($vacancies_subtitle)) ? $vacancies_subtitle : 'Partner with us to protect what matters — today and for the future.'),
                                            Text::make('Button', 'vacancies_button')->unescape()->default((isset($vacancies_button)) ? $vacancies_button : 'Kompetenz Careers'),
                                            Text::make('Link', 'vacancies_link')->unescape()->default((isset($vacancies_link)) ? $vacancies_link : '#'),


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
