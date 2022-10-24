<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    /**
     * Success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message = 'Successfully', $code = 200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, $code);
    }


    /**
     * Return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

    protected function getUrlFile($path)
    {
        if (config('filesystems.default') === 's3') {
            return Storage::temporaryUrl($path, now()->addMinutes(10));
        }
        return Storage::url($path);
    }

    protected function storeFile($path, $file)
    {
        $fileName = $file->hashName();
        return $file->storeAs($path, $fileName);
    }

    protected function deleteFiles($names)
    {
        Storage::delete($names);
    }
}
