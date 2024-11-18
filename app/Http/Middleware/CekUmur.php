<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekUmur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // ini bagian aturan :
        $umur = $request->session()->get('umur');

        // aturan jika umurnya kurang dari 18 tahun.
        if($umur <= 18)
        {
            return back()->with('error', 'Maaf, anda belum memenuhi syarat');
        }

        return $next($request);
    }
}
