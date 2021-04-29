<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FlagVerification extends Controller
{
	public function VerifyFlags(Request $request)
	{
		$flag = Flag::find(1);
		Log::debug($flag);
		Log::debug($request);
		return view('students.flags.index', [
			'flag' => $flag->name === $request->flag ? $flag : false,
		]);
	}
}
