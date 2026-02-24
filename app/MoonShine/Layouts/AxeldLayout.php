<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Pages\BusinessPage;
use App\MoonShine\Pages\ContactPage;
use App\MoonShine\Pages\FleetShipPage;
use App\MoonShine\Pages\FleetSpeedBoatPage;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\IndividualPage;
use App\MoonShine\Pages\InsightPage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Pages\WorkPage;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\Page\PageResource;
use App\MoonShine\Resources\SiteNew\SiteNewResource;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\PurplePalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use MoonShine\MenuManager\MenuDivider;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use YuriZoom\MoonShineMediaManager\Pages\MediaManagerPage;
use App\MoonShine\Resources\Business\BusinessResource;
use App\MoonShine\Resources\Individual\IndividualResource;
use App\MoonShine\Resources\Insight\InsightResource;
use App\MoonShine\Resources\Work\WorkResource;
use App\MoonShine\Resources\SolitionCategory\SolitionCategoryResource;
use App\MoonShine\Resources\SolitionItem\SolitionItemResource;
use App\MoonShine\Resources\SolutionCategory\SolutionCategoryResource;
use App\MoonShine\Resources\SolutionItem\SolutionItemResource;

final class AxeldLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PurplePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('Users', [
                MenuItem::make(MoonShineUserResource::class, 'Admin', 'user'),
                MenuDivider::make(),
            ]),

            MenuGroup::make(static fn() => __('Pages'), [
                MenuItem::make(HomePage::class, 'IndexPage', 'building-library'),
                MenuGroup::make(static fn() => __('Businesses and Individuals'), [
                    MenuItem::make(BusinessPage::class, 'Business', 'arrow-right-end-on-rectangle'),
                    MenuItem::make(BusinessResource::class, 'Businesses', 'globe-alt'),
                    MenuItem::make(IndividualPage::class, 'Individual', 'arrow-right-end-on-rectangle'),
                    MenuItem::make(IndividualResource::class, 'Individuals', 'user-circle'),

                            ]),
                MenuGroup::make(static fn() => __('Business Ideas'), [
                    MenuItem::make(InsightPage::class, 'Insight', 'arrow-right-end-on-rectangle'),
                    MenuItem::make(InsightResource::class, 'Insights', 'sparkles'),
                    ]),
                MenuGroup::make(static fn() => __('About Us'), [
                    MenuItem::make(WorkPage::class, 'Index', 'arrow-right-end-on-rectangle'),
                    MenuItem::make(WorkResource::class, 'Departments', 'currency-dollar'),
                    ]),
                MenuGroup::make(static fn() => __('Solutions'), [
                    MenuItem::make(SolutionCategoryResource::class, 'Categories', 'arrow-right-end-on-rectangle'),
                    MenuItem::make(SolutionItemResource::class, 'Items' ,'bolt'),
                    ]),
            ]),

            MenuGroup::make(static fn() => __('Settings'), [
                MenuItem::make(SettingPage::class, 'Settings', 'adjustments-vertical'),
                MenuItem::make(MediaManagerPage::class, 'Media', 'film'),

            ]),


        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    protected function getFooterCopyright(): string
    {
        return \sprintf(
            <<<'HTML'
                &copy; %d Made  by
                <a href="https://t.me/firsenko"
                    class="font-semibold text-primary"
                    target="_blank"
                >
                    @firsenko
                </a>
                HTML,
            now()->year,
        );
    }
    protected function getFooterMenu(): array
    {
        return [
            config('app.app_url') => 'WebSite',
        ];
    }

}
