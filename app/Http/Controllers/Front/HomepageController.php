<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class HomepageController extends Controller {
    public function index(): Viewable {
        return View::make('front.pages.index');
    }
}
