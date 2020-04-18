<?php

declare(strict_types=1);

namespace App\Controllers;

class CalculateController extends BaseController
{
	public function index(): string
	{
		return view('welcome_message');
	}
}
