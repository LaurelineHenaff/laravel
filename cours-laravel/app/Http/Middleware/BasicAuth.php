<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuth
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
      $AUTH_USER = ['Machin', 'Bidule', 'Truc']; //Les utilisateurs connus

      if (in_array($request->Input('nom'),$AUTH_USER)){
          //L'utilisateur est connu, je vais vers la prochaine route
          return $next($request);
      }
      //L'utilisateur n'est pas connu, je reste sur le formulaire
      return redirect(route('home'));
  }
}
