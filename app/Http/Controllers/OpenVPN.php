<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpenVPN extends Controller
{
	/* Download Protected Files */
	public function downloadConfig(Request $request)
	{
		if (Storage::disk('local')->exists('OpenVPN/$request->file')) {
			$path = Storage::disk('local')->path('OpenVPN/$request->file');
			$content = file_get_contents($path);
			return response($content)->withHeaders([
				'Content-Type' => mime_content_type($path),
				'Content-Type' => 'application/octet-stream',
				'Content-Disposition' => 'attachment',
			]);
		}
		return abort(404);
	}
}
