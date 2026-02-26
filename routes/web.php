<?php

use App\Http\Controllers\Business\BusinessPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackForm\FeedbackFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Individual\IndividualPageController;
use App\Http\Controllers\Insight\InsightPageController;
use App\Http\Controllers\Solution\SolutionPageController;
use App\Http\Controllers\Work\WorkPageController;
use Illuminate\Support\Facades\Route;

/**
 * админка
 */
Route::post('/moonshine/setting', [\App\MoonShine\Controllers\SettingController::class, 'setting' ]);
Route::post('/moonshine/home', [\App\MoonShine\Controllers\HomeController::class, 'home' ]);
Route::post('/moonshine/business', [\App\MoonShine\Controllers\BusinessController::class, 'business' ]);
Route::post('/moonshine/individual', [\App\MoonShine\Controllers\IndividualController::class, 'individual' ]);
Route::post('/moonshine/insight', [\App\MoonShine\Controllers\InsightController::class, 'insight' ]);
Route::post('/moonshine/work', [\App\MoonShine\Controllers\WorkController::class, 'work' ]);
/**
 * админка
 */

/**
 * fancybox-ajax
 */
/** получение самой формы */
/*Route::controller(FancyBoxController::class)->group(function () {
    Route::post('/fancybox-ajax', 'fancybox');
});*/

/** Отправка самой формы */
/*Route::controller(FancyBoxSendingFromFormController::class)->group(function () {
    Route::post('/call_me', 'fancyboxCallMe');
    Route::post('/order_excursion', 'fancyboxOrderExcursion');
});*/

/**
 * ///fancybox-ajax */

/** Главная **/
Route::get('/', [HomeController::class, 'index' ])->name('home');
/** Бизнес */
Route::controller(BusinessPageController::class)->group(function () {
    Route::get('/for-business', 'index')->name('for.businesses');
    Route::get('/for-business/{business:slug}', 'show')->name('for.business');
});
/** ///Бизнес */

/** Частным клиентам */
Route::controller(IndividualPageController::class)->group(function () {
    Route::get('/for-individuals', 'index')->name('for.individuals');
    Route::get('/for-individuals/{individual:slug}', 'show')->name('for.individual');
});
/** ///Частным клиентам */

/** Идеи */
Route::controller(InsightPageController::class)->group(function () {
    Route::get('/insights', 'index')->name('for.insights');
    Route::get('/insights/{insight:slug}', 'show')->name('for.insight');
});
/** ///Идеи */

/** Решения */
Route::controller(SolutionPageController::class)->group(function () {
    Route::get('/solutions', 'categories')->name('categories.solutions');
    Route::get('/solutions/{solution_category:slug}', 'items')->name('items.solutions');
    Route::get('/solutions/{solution_category:slug}/{solution_item:slug}', 'item')->name('item.solutions');
});
/** ///Решения */

/** О компании */
Route::controller(WorkPageController::class)->group(function () {
    Route::get('/about-us', 'index')->name('about-us');
});
/** ///О компании */
/** О компании */
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contacts');
    Route::post('/contacts/search', 'search')->name('contacts.search');
});
/** ///О компании */

/** Форма обратной связи */
Route::controller(FeedbackFormController::class)->group(function () {
    Route::post('/feedback.form.businesses', 'feedbackFormBusiness')->name('feedback.form.business');
});
/** ///Форма обратной связи */

