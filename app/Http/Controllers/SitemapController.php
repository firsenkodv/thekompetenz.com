<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $path = public_path('sitemap.xml');
        SitemapGenerator::create(config('app.app_url'))->writeToFile($path);
       dd('sitemap created');
    }


}
