<?php

namespace App\Http\Middleware;

use App\Models\Admin\ImportantLink;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ImportantLinks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::composer('*', function ($view) {
            $link = ImportantLink::where('status', 1)->orderBy('id', 'asc')->paginate(7);
            $view->with('link', $link );
        });
        return $next($request);
    }
}
