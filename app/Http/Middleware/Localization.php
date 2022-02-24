<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Arr;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Arr::has(config('translatable.locales'), $request->segment(1))) {

            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $segments = Arr::prepend($segments, config('app.fallback_locale'));;

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }
        return $next($request);
    }
}
