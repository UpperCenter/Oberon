<?php

namespace App\Http\Controllers\Lecturers;

use App\Http\Controllers\Controller;

class MonitorController extends Controller
{
	public function index()
	{
		return view('lecturer.monitoring.index');
	}
}
