<?php

namespace App\View\Components\Menu;

use Closure;
use Domain\Menu\ViewModel\MenuViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderMenuComponent extends Component
{

    public array $menu_rendered;

    public function __construct()
    {

        $this->menu_rendered = $this->setMenu();


    }


    public function setMenu():array
    {

        $menu = [];


            $menu[0]['text'] = 'For business';
            $menu[0]['link'] = route('for.businesses');
            $menu[0]['class'] = false;
            $menu[0]['data'] = false;
            $menu[0]['class_li'] = false;
            $menu[0]['parent'] = false;

            $menu[1]['text'] = 'For individuals';
            $menu[1]['link'] = route('for.individuals');
            $menu[1]['class'] = false;
            $menu[1]['data'] = false;
            $menu[1]['class_li'] = false;
            $menu[1]['parent'] = false;

            $menu[2]['text'] = 'Solutions';
            $menu[2]['link'] = route('categories.solutions');;
            $menu[2]['class'] = false;
            $menu[2]['data'] = false;
            $menu[2]['class_li'] = false;
            $menu[2]['parent'] = false;

            $menu[3]['text'] = 'Insights';
            $menu[3]['link'] = route('for.insights');
            $menu[3]['class'] = false;
            $menu[3]['data'] = false;
            $menu[3]['class_li'] = false;
            $menu[3]['parent'] = false;

            $menu[4]['text'] = 'About Us';
            $menu[4]['link'] = route('about-us');
            $menu[4]['class'] = false;
            $menu[4]['data'] = false;
            $menu[4]['class_li'] = false;
            $menu[4]['parent'] = false;

            $menu[5]['text'] = 'Contact Us';
            $menu[5]['link'] =  route('contacts');
            $menu[5]['class'] = false;
            $menu[5]['data'] = false;
            $menu[5]['class_li'] = false;
            $menu[5]['parent'] = false;


        return $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.menu-header-component');
    }
}
