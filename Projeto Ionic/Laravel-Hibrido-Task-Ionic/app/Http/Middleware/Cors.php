<?php
/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 18/03/2016
 * Time: 20:15
 */

namespace App\Http\Middleware;

use Closure;

class Cors
{

    public function handle($request, Closure $next)
    {
       return $next($request)
           ->header('Access-Control-Allow-Origin','*')
           ->header('Access-Control-Allow-Methods','GET, POST, DELETE, PUT, OPTIONS');
    }
}