<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Session;
use App;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $raw_locale = Session::get('locale');
        if (in_array($raw_locale, Config::get('app.locales'))) {
            $locale = $raw_locale;
        } else $locale = Config::get('app.locale');
        App::setLocale($locale);
        return $next($request);
    }
}
