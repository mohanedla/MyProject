<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class locale
{
    // public function handle($request, Closure $next)
    // {
    //     // if ($request->method() === 'GET') {
    //     //     $segment = $request->segment(1);

    //     //     if (!in_array($segment, config('app.locales'))) {
    //     //         $segments = $request->segments();
    //     //         $fallback = session('locale') ?: config('app.fallback_locale');
    //     //         $segments = array_prepend($segments, $fallback);

    //     //         return redirect()->to(implode('/', $segments));
    //     //     }

    //     //     session(['locale' => $segment]);
    //         app()->setLocale($request->language);
    //     //}

    //     return $next($request);
    // }
}