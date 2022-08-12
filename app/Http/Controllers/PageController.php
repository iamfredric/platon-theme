<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController
{
    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }
}
