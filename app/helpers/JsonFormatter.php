<?php

namespace App\Helpers;

/**
 * Json Format For API
 */
class JsonFormatter
{
    /**
     * API Response
     *
     * @var array
     */
    protected static $response = [

        'code' => 200,
        'success' => true,
        'message' => null,

        // 'meta' => [
        //     'code' => 200,
        //     'success' => true,
        //     'message' => null,
        // ],
        'data' => null,
    ];

    /**
     * Give success response.
     */
    public static function success($data = null, String $message = null)
    {
        // self::$response['meta']['message'] = $message;
        self::$response['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }

    /**
     * Give error response.
     */
    public static function error($data = null, $message = null, $code = 400)
    {
        // self::$response['meta']['success'] = false;
        // self::$response['meta']['code'] = $code;
        // self::$response['meta']['message'] = $message;
        self::$response['success'] = false;
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }
}
