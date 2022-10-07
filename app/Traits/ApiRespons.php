<?php
  
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiRespons 
{
    /**
     * Set api version
     *
     * @var string
     */
    protected static $version = "v1";

    /**
     * Set type sent data
     *
     * @var string
     */
    protected static $type = "API";

    /**
     * Set content type
     *
     * @var string
     */
    protected static $contentType = "application/json";

    /**
     * Set response body
     *
     * @var object
     */
    protected static $formatter = [
        'status' => Response::HTTP_OK,
        'message' => null,
        'links' => [],
        'meta' => [
            'version' => null,
            'author' => null,
            'host' => null,
            'type' => null,
            'date' => null,
            'content' => [
                'accept' => null,
                'type' => null
            ]
        ],
        'data' => [],
        'metadata' => [
            'total_data' => 0,
            'count_data' => 0
        ]
    ];

    /**
     * Create response body
     *
     * @param $code, $message, $data, $link
     * @var void
     */
    protected function createResponse($code, $message, array $data, array $link)
    {
        try {
            static::$formatter['status'] = $code;
            static::$formatter['message'] = $message;
            static::$formatter['links'] = $link;

            static::$formatter['metadata']['total_data'] = isset($data['total_data']) ? $data['total_data'] : (isset($data['data']) ? (is_countable($data['data']) ? count($data['data']) : (($data['data'] == "") ? 0 : 1)) : 0);
            static::$formatter['metadata']['count_data'] = isset($data['data']) ? (is_countable($data['data']) ? count($data['data']) : (($data['data'] == "") ? 0 : 1)) : 0;

            static::$formatter['meta']['version'] = static::$version;
            static::$formatter['meta']['author'] = config('meta.author');
            static::$formatter['meta']['host'] = config('app.url');
            static::$formatter['meta']['type'] = static::$type;
            static::$formatter['meta']['date'] = date('d-m-Y H:i:s');

            static::$formatter['meta']['content']['accept'] = static::$contentType;
            static::$formatter['meta']['content']['type'] = static::$contentType;
            
            static::$formatter['data'] = isset($data['data']) ? $data['data'] : [];

            if (isset($data['error'])) {
                static::$formatter['errors'] = $data['error'];
            }

            if (isset($data['token'])) {
                static::$formatter['token'] = $data['token'];
                static::$formatter['token_type'] = $data['token_type'];
                static::$formatter['expires_in'] = $data['expires_in'];
            }

            return response()->json(static::$formatter, static::$formatter['status']);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Replace empty string if variable have null value
     *
     * @param $value
     * @var void
     * @return string
     */
    protected function replaceNullValueWithEmptyString($value)
    {
        return $value = $value === null ? "" : $value;
    }
}