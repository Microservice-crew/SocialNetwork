<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request); // L'utilisateur est un administrateur, laissez-le accéder à la route.
        }

        // L'utilisateur n'est pas un administrateur, redirigez-le ou renvoyez une réponse d'erreur.
        return redirect('/'); // Vous pouvez rediriger l'utilisateur vers la page d'accueil ou une autre page.
    }
}
