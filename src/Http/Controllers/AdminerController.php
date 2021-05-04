<?php

namespace Onecentlin\Adminer\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminerController extends Controller
{
	protected $adminer;
	protected $version;

	public function __construct ()
	{
		// add custom middleware to restrict access permission
		$this->middleware('adminer');
	}

	public function index ()
	{
		require(__DIR__ . '/../../../resources/adminer-4.8.0-mysql-en.php');
	}
}
