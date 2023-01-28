<?php 

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponserTrait 
{
    protected function successResponse($data = [], int $httpResponseCode = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $data ?? null,
        ], $httpResponseCode);
    }
}