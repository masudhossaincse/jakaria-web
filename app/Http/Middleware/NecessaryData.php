<?php

namespace App\Http\Middleware;

use App\Models\Admin\Institute;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class NecessaryData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::composer('*', function ($view) {
            $institute = Institute::where('status', 1)->first();
            $view->with('institute', $institute );
        });
//        $institute = Institute::where('status', 1)->first();
//        $request->merge(['institute' => $institute]);
        return $next($request);
    }
}
