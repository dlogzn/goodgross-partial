<?php

namespace App\Http\Controllers\AccountPanel;

use App\Http\Controllers\Controller;
use App\Models\AccountShippingToAddress;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommonController extends Controller
{
    public function getUser(): JsonResponse
    {
        try {
            $user = User::where('id', auth()->user()->id)->with(['account.personalAccount', 'account.businessAccount'])->first();
            return response()->json(['payload' => $user], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function countUnreadMessage(): JsonResponse
    {
        try {
            $payload = Message::where('receiver_account_id', auth()->user()->account->id)
                ->where('status_for_receiver', 'Active')
                ->where('read_at', null)
                ->orWhereHas('replyMessages', function ($query) {
                    $query->where('receiver_account_id', auth()->user()->account->id);
                    $query->where('status_for_receiver', 'Active');
                    $query->where('read_at', null);
                })->get()->count();
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
