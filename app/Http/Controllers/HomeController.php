<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
	}
	
	/**
	 * Returns the number of basket contents of the given basket id.
	 *
	 * @param int $basket_id ID of basket
	 * @return null
	 */
	public function getNumberOfBasketContents($basket_id) {
		return count($this->baskets[$basket_id]->contents);
	}

	/**
	 * Get currently logged in user.
	 *
	 * @return App\User
	 */
	public function getCurrentUser() {
		return $user;
	}

	/**
	 * Returns if logged in user is a superadmin.
	 *
	 * @return boolean
	 */
	public function isSuperAdmin() {
		if ($user->superadmin) {
			return true;
		} else {
			return false;
		}
	}

    /**
     * Show the application dashboard.
	 * 
     * @return \Illuminate\Http\Response
     */
    public function secret()
    {
        return view('secret');
    }
}
