<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function respondRedirectMessage($route)
    {
        return redirect()->route($route);
    }

    public function respondWithErrors($route, $validator, $type)
    {
        return redirect()->route($route)->withErrors($validator, $type)->withInput();
    }

    public function respondErrorException($e, $request)
    {
        $data = [];
        $message = $e->getMessage();
        $trace = $e->getTraceAsString();
        Log::error($message, [$trace]);

        $data = [
            'success' => false,
            'status_code' => $e->getCode(),
            'message' => $message
        ];

        if (in_array($e->getCode(), $this->error_codes)) {
            return $data . $e->getCode() . $request->header ?? [];
        } else {
            return $data . ' Status code 404';
        }
    }
}
