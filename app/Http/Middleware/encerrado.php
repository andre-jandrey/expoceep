<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class encerrado
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
        $user_id = Auth::id();
        
        
        return $next($request);


        if ($user_id == 1) {
            return $next($request);
        } else {
            $data = ['data' => 'Processo encerrado.'];
            $headers = array('Content-Type' => 'application/json;charset=utf8');
            return response()->json($data, 401, $headers, JSON_UNESCAPED_UNICODE);

        }
    }
}
