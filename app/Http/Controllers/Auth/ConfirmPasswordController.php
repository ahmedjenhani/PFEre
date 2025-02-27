<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */

    use ConfirmsPasswords;

    /**
     * 
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
