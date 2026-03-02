<?php

use App\Models\WebsiteSetup;
use Illuminate\Support\Facades\DB;

if (!function_exists('websiteSetupValue')) {
    function websiteSetupValue($name) {
        return WebsiteSetup::where('name', $name)->first() ? WebsiteSetup::where('name', $name)->first()->value : "";
    }
}

if(! function_exists('isActiveRoute')){
    function isActiveRoute($routes=[]){
        foreach ($routes as $key => $route) {
            if(Route::currentRouteName() == $route){
                return true;
            }
        }
    }
}

if(! function_exists('getPaginate')){
    function getPaginate($paginate = 20){
        return $paginate;
    }
}

if(!function_exists('dateTimeFormat')){
    function dateTimeFormat($datesTime){
        return date('M d, Y h:i A', strtotime($datesTime));
    }
}

if(!function_exists('dateFormat')){
    function dateFormat($dates){
        return date('M d, Y', strtotime($dates));
    }
}

if(!function_exists('timeFormat')){
    function timeFormat($time){
        return date('h:i A', strtotime($time));
    }
}

/**
 * Check if logged in admin has permission for a page
 */
if (!function_exists('adminCan')) {
    function adminCan($pageSlug) {
        $admin = auth()->guard('admin')->user();
        if (!$admin) return false;
        if ($admin->isSuperAdmin()) return true;
        return $admin->hasPagePermission($pageSlug);
    }
}

/**
 * Check if logged in admin has permission for any of the given pages
 */
if (!function_exists('adminCanAny')) {
    function adminCanAny($pageSlugs = []) {
        foreach ($pageSlugs as $slug) {
            if (adminCan($slug)) return true;
        }
        return false;
    }
}

