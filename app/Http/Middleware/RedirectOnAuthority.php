<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectOnAuthority
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role == "referee") 
        {
            return redirect()->route("referee.index");
        } 
        elseif(Auth::user()->role == "chiefeditor")
        {
            return redirect()->route("chiefeditor.index");
        } 
        elseif(Auth::user()->role == "superadmin")
        {
            return redirect()->route("superadmin.index");
        } 
        elseif(Auth::user()->role == "writer")
        {
            return redirect()->route("writer.index");
        }else {
            return abort(404);
        }
        // return $next($request);
    }
}
// {{ jdate($row->updated_at)->format('Y/m/d ساعت H:i:s') }}