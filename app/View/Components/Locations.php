<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Locations extends Component
{
    public $all_location;

    public function __construct()
    {
        $this->all_location = [
            "Дворцовая площадь" => "dwor-p.jpg",
            "Сенатская площадь" => "senat-p.jpg",
            "Адмиралтейство" => "admiral.jpg",
            "Стрелка Васильевского острова" => "strelka.jpg",
            "Петропавловская крепость" => "petropavl.jpg",
            "Казанский собор" => "kazan.jpg",
            "Государственный Эрмитаж" => "ermit.jpg",
            "Юсуповский Дворец" => "ysup.jpg",
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.locations');
    }
}
