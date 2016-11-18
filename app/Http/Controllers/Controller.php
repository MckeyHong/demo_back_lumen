<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Log;

class Controller extends BaseController
{
    const ERROR = 'error';

    /**
     * 統整所有api 回傳給前端的 json格式
     * @param array $result
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function responseWithJson(array $result)
    {
        $data = $result['result'] ?? self::ERROR;
        $errorCode = $result['code'] ?? config('errorCode.otherError');
        $message = $result['msg'] ?? '';

        if ($data !== self::ERROR) {
            $statusCode = 200;
            $responseData = ['result' => $data];
        } else {
            $statusCode = substr($errorCode, 0, 3);
            $responseData = ['error' => ['code' => $errorCode, 'message' => $message]];
            $this->logData($responseData, $message);
        }
        return response()->json($responseData, $statusCode);
    }

    /**
     * @param array  $responseData
     * @param string $message
     */
    protected function logData(array $responseData, string $message)
    {
        Log::debug("========ERROR Start========");
        Log::debug(json_encode($responseData));
        Log::error($message);
        Log::debug("========ERROR END==========");
    }
}
