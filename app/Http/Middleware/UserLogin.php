<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('abcdefgh')) {
            $token = session()->get('abcdefgh');
            $verification = verifyUserLogin($token);
            $status = $verification['status'];
            $data = $verification['data'];

            if ($status == 1 || $status === true) {
                $role = $data['role'];
                if ($role == 'user') {

                    return $next($request);
                } else {
                    return redirect()->route('frontend.notLogin');
                }
            } else {
                return redirect()->route('frontend.notLogin');
            }
        } else {
            return redirect()->route('frontend.notLogin');
        }
    }
}
