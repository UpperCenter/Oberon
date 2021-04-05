<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class FlagsController extends Controller
{
	public function index()
	{
		return view('students.flags.index');
	}
}
