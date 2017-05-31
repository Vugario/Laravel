<?php

namespace App\Http\Web\Content\Controller;

use App\Http\Web\Core\Controller\WebController;

class ContentController extends WebController
{
    /**
     * Render the homepage
     */
    public function index()
    {
        return view('index');
    }
}
