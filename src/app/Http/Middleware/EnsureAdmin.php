<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $allowedEmails = config('admin.emails', []);

        // 設定が空の場合は、ログインユーザーは全員OK（開発用）
        if (empty($allowedEmails)) {
            return $next($request);
        }

        if ($user && in_array($user->email, $allowedEmails, true)) {
            return $next($request);
        }

        abort(403, '管理者権限が必要です。');
    }
}
