<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        file_put_contents('C:\xampp\htdocs\quick_laravel\access.log', date('Y-m-d H:i:s'). "\n", FILE_APPEND);
        // a. アクション を 実行
        $response = $next($request);
        // b. レスポンス の 内容 を 加工
        $response->setContent(mb_strtoupper($response->content()));
        return $response;
    }
}
