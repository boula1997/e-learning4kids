<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //      return route('login');
        // }
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticateddd.'], 401);
        }
        if ($request->is('student') || $request->is('student/*')) {
            return route('login/student');
        }
        if ($request->is('teacher') || $request->is('teacher/*')) {
            // return redirect()'/login/teacher'));
            return route('login/teacher');
        }
        if ($request->is('parent') || $request->is('parent/*')) {
            return route('login/parent');
        }
        return route('notAutherized');
    }
}
