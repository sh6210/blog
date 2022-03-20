<?php

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;

if (!function_exists('createSlugFrom')) {
    function createSlugFrom($str): string
    {
        return strtolower(str_replace(' ', '-', $str));
    }
}

if (!function_exists('createExcerpt')) {
    function createExcerpt($str): string
    {
        return Str::words($str, 5);
    }
}

if (!function_exists('attachmentPath')) {
    function attachmentPath($attachment): string
    {
        $path = 'storage' . DIRECTORY_SEPARATOR . $attachment;

        return asset($path);
    }
}

if (!function_exists('prepareInputLabel')) {
    function prepareInputLabel($str): string
    {
        return ucwords(rtrim(str_replace('_', ' ', $str), '_id'));
    }
}

if (!function_exists('dataPerPage')) {
    function dataPerPage()
    {
        return request()->per_page ?? DATA_PER_PAGE;
    }
}

if (!function_exists('adminAuth')) {
    function adminAuth()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('adminUser')) {
    function adminUser(): ?Authenticatable
    {
        return auth()->guard('admin')->user();
    }
}

if (!function_exists('loggedInUserPermissions')) {
    function loggedInUserPermissions($permissionName = '')
    {
        $permissions = app('aclService')->pluck('name');

        return $permissionName ? $permissions->contains($permissionName) : $permissions;
    }
}

if (!function_exists('checkPermissions')) {
    function checkPermissions($permissionName): bool
    {
        if (!is_array($permissionName))
            return loggedInUserPermissions($permissionName);

        $permissions = loggedInUserPermissions();
        foreach ($permissionName as $name) {
            if (!$permissions->contains($name)) continue;
            return true;
        }

        return false;
    }
}

if (!function_exists('menuOpen')) {
    function menuOpen($routeName): string
    {
        return isActive($routeName) ? 'menu-open' : '';
    }
}

if (!function_exists('isActive')) {
    function isActive($routeName): string
    {
//        return request()->route()->getName() === $routeName;
        return preg_match("/$routeName/", request()->route()->getName());
    }
}

if (!function_exists('findActive')) {
    function findActive($routeName): string
    {
        return is_array($routeName)
            ? (in_array(request()->route()->getName(), $routeName) ? 'active' : '')
//            : (request()->route()->getName() === $routeName ? 'active' : '');
            : (preg_match("/$routeName/", request()->route()->getName()) ? 'active' : '');
    }
}

