<?php

use Illuminate\Contracts\Auth\Authenticatable;

if (!function_exists('adminAuth')) {
    function adminAuth() {
        return auth()->guard('admin');
    }
}

if (!function_exists('adminUser')) {
    function adminUser(): ?Authenticatable
    {
        return auth()->guard('admin')->user();
    }
}
