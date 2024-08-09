<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class PageController extends Controller {
    public function about(): Viewable {
        return View::make('front.pages.about');
    }

    public function contact(): Viewable {
        return View::make('front.pages.contact');
    }

    public function product(): Viewable {
        return View::make('front.pages.product');
    }

    public function shop(): Viewable {
        return View::make('front.pages.shop');
    }
}
