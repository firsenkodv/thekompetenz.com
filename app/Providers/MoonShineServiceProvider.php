<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Resources\Business\BusinessResource;
use App\MoonShine\Resources\Individual\IndividualResource;
use App\MoonShine\Pages\BusinessPage;
use App\MoonShine\Pages\IndividualPage;
use App\MoonShine\Resources\Insight\InsightResource;
use App\MoonShine\Pages\InsightPage;
use App\MoonShine\Resources\Work\WorkResource;
use App\MoonShine\Pages\WorkPage;
use App\MoonShine\Resources\SolutionCategory\SolutionCategoryResource;
use App\MoonShine\Resources\SolutionItem\SolutionItemResource;
use App\MoonShine\Resources\SolutionTag\SolutionTagResource;
use App\MoonShine\Resources\Contact\ContactResource;


class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                BusinessResource::class,
                IndividualResource::class,
                InsightResource::class,
                WorkResource::class,

                SolutionCategoryResource::class,
                SolutionItemResource::class,
                SolutionTagResource::class,
                ContactResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
                SettingPage::class,
                HomePage::class,
                BusinessPage::class,
                IndividualPage::class,
                InsightPage::class,
                WorkPage::class,
            ])
        ;
    }
}
