<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;

class BaseController extends Controller
{
    use AuthorizesRequests;
    
    protected function successRedirect(string $route, string $message): RedirectResponse
    {
        return redirect()->route($route)->with('success', $message);
    }

    protected function errorRedirect(string $route, string $message): RedirectResponse
    {
        return redirect()->route($route)->with('error', $message);
    }
}
