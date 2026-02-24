<?php
declare(strict_types=1);
namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

class SettingPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/setting.php')) {
            $result = include(storage_path('app/public/config/moonshine/setting.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Настройки сайта';
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
            FormBuilder::make('/moonshine/setting', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Настройки'), [

                            Grid::make([

                                Column::make([

                                    Divider::make('Соц.сети'),

                                    Box::make([
                                    /*    Text::make('Vk.com', 'vk')->unescape()->default((isset($vk)) ? $vk : ''),
                                        Text::make('Telegram', 'telegram')->default((isset($telegram)) ? $telegram : '')->unescape(),*/
                                        Text::make('YouTube', 'youtube')->default((isset($youtube)) ? $youtube : '')->unescape(),
                                        Text::make('Instagram', 'instagram')->default((isset($instagram)) ? $instagram : '')->unescape(),
                                        Text::make('FaceBook', 'facebook')->default((isset($facebook)) ? $facebook : '')->unescape(),
                                        Text::make('TikTok', 'TikTok')->unescape()->default((isset($TikTok)) ? $TikTok : ''),


                                    ]),



                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Контакты'),

                                    Box::make([


                                    ]),


                                ])->columnSpan(6),
                            ]),
                        ]),

                        Tab::make(__('Футер'), [

                            Divider::make('Константы'),

                            Box::make([

                                Text::make('Title', 'f_title')->default((isset($f_title)) ? $f_title : '')->unescape(),
                                Text::make('Description', 'f_desc')->default((isset($f_desc)) ? $f_desc : '')->unescape(),

                                Json::make('These are circles', 'f_circles')->fields([
                                    Text::make('Title', 'json_title')->unescape(),
                                    Text::make('Description', 'json_text')->unescape(),

                                ])->vertical()->creatable(limit: 3)
                                    ->removable()->default((isset($f_circles)) ? $f_circles : ''),

                                Json::make('Menu Footer', 'f_menu')->fields([
                                    Text::make('Title', 'json_title')->unescape(),
                                    Text::make('Link', 'json_link')->unescape(),
                                ])->vertical()->creatable(limit: 3)
                                    ->removable()->default((isset($f_menu)) ? $f_menu : ''),

                                Text::make('Copyright', 'f_copyright')->default((isset($f_copyright)) ? $f_copyright : '«Kompetenz». All rights reserved')->unescape(),


                            ]),





                        ]),

                        Tab::make(__('Списки'), [

                            Divider::make('Константы'),

                            Box::make([

                                Json::make('Types of insurance', 'type_insurance')->fields([
                                    Text::make('Title', 'json_title')->unescape(),

                                ])->vertical()->creatable(limit: 30)
                                    ->removable()->default((isset($type_insurance)) ? $type_insurance : ''),


                            ]),

                        ]),

                        Tab::make(__('Email получателя системных сообщений'), [

                            Divider::make('Опции'),
                            Grid::make([
                                Column::make([

                                    Box::make([
                                        Json::make('Электронная почта', 'json_emails')->fields([

                                            Text::make('', 'json_email')->hint('Владелец этого email будет получать все уведомления (изменения) при редактировании личных кабинетов пользователями.'),

                                        ])->vertical()->creatable(limit: 3)
                                            ->removable()->default((isset($json_emails)) ? $json_emails : ''),


                                    ]),

                                ])->columnSpan(12),


                            ])


                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
