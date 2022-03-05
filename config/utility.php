<?php

use Illuminate\Contracts\Auth\Authenticatable;

if (!function_exists('createSlugFrom')) {
    function createSlugFrom($str): string
    {
        return strtolower(str_replace(' ', '-', $str));
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
