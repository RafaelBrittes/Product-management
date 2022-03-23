<?php

namespace App\Traits;


trait ApiResponser
{
	protected function success(string $message = null, int $code = 200)
	{
		return response()->json([
			'status' => 'Success',
			'message' => $message
		], $code);
	}

	protected function error(string $message = null, int $code)
	{
		return response()->json([
			'status' => 'Error',
			'message' => $message
		], $code);
	}

}