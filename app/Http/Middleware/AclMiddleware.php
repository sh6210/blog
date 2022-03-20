<?php

namespace App\Http\Middleware;

use App\Repositories\UserRepository;
use App\Services\UserPermissionService;
use App\Utility\AclMappingConstants;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class AclMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        app()->singleton('aclService', function () {
            return (new UserPermissionService(new UserRepository()))->getUserPermissions();
        });

        $routeName = request()->route()->getName();

        if (!isset(AclMappingConstants::$permissions[$routeName]) or isShowAble(AclMappingConstants::$permissions[$routeName])) {
            return $next($request);
        }

        Session::flash('error', 'Sorry you are not authorized');
        return redirect()->back();
    }
}
