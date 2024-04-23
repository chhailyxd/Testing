<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class DeviceInfoMiddleware
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

        $agent = new Agent();
        $deviceName = $agent->device();
        $os = $agent->platform();

        // Store device name and OS in session or wherever you prefer
        session(['device_name' => $deviceName, 'os' => $os]);

        return $next($request);
    }
}
