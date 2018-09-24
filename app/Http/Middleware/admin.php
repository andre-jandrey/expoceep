<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\facades\Auth;

class admin
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

        if (!$user_id == 1) {
            $data = ['data' => 'Não autorizado.'];
            $headers = array('Content-Type' => 'application/json;charset=utf8');
            return response()->json($data, 401, $headers, JSON_UNESCAPED_UNICODE);
        }

        /**
         * Se chegou até aqui é porque existe a permissão, então deixa passar chamando função $Next;
         */
        return $next($request);
    }
}
