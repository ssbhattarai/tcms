<?php

namespace App\Http\Controllers\Frontend\ErrorPages;

use App\Http\Controllers\Controller;

class ErrorPagesController extends Controller
{
    // user account locked info page
    public function lockedPageView()
    {
        return view('frontend_pages.error_pages.locked');
    }
}