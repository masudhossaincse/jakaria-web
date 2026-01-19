<?php

namespace App\Http\Middleware;

use App\Models\Admin\Institute;
use App\Models\Admin\InternalService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class InternalServices
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::composer('*', function ($view) {
            $service = InternalService::where('status', 1)->orderBy('id', 'asc')->paginate(6);
            $view->with('service', $service );
        });
        return $next($request);
    }
}
