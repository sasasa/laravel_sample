<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id=0)
    {
        return 'id値:'. $id;
    }

    // http://localhost/route/search/asdfas/asdfasd/fasdfasdfa/fasd
    public function search(string $keywd)
    {
        return '$keywd -> '. $keywd;
    }
    // members/info
    public function info()
    {
        return 'info';
    }
    // members/article
    public function article()
    {
        return 'article';
    }
}
