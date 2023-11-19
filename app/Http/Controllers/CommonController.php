<?php

namespace App\Http\Controllers;

use App\Models\MessageNotification;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CommonController extends Controller
{
    public function countCartItems(): JsonResponse
    {
        try {
            return response()->json(['payload' => Session::has('cart_items') ? count(Session::get('cart_items')) : null], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
