<?php
namespace App\Http\Middleware;
use Closure;
use App;
use Session;
use Config;
class LocaleMiddleware
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
        if (Session::has('locale') AND in_array(Session::get('locale'), Config::get('app.locales'))){
            App::setLocale(Session::get('locale'));
        }else{
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);
    }
}

