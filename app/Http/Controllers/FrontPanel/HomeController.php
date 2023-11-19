<?php

namespace App\Http\Controllers\FrontPanel;


use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Product;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function loadHome(): Response
    {
        try {
            $dealsOfTheDay = Product::where('status', 'Approved')->with('account', 'productProperties')->get();
            return response()->view('FrontPanel.home', compact('dealsOfTheDay'), Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->view('errors.FrontPanel.500', ['title' => 'Internal Server Error', 'message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getCategoryTypes(): JsonResponse
    {
        try {
            $categoryTypes = CategoryType::where('status', 'Active')->with('categories')->get();
            return response()->json(['payload' => $categoryTypes], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getHotDealItems(Request $request): JsonResponse
    {
        try {

            $products = Product::whereIn('status', ['Approved', 'Restored'])

                ->whereHas('category.categoryType', function ($query) {
                    $query->where('category_type', 'Retail');
                })
                ->with([
                    'productProperties',
                    'productProperties.property:id,property',
                    'watchedProducts' => function ($query) {
                        if (auth()->check()) {
                            $query->where('account_id', auth()->user()->account->id);
                        } else {
                            $query->where('account_id', 0);
                        }
                    }
                ])->inRandomOrder()->get();
            return response()->json(['payload' => $products], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getFeaturedProductItems(Request $request): JsonResponse
    {
        try {

            $products = Product::whereIn('status', ['Approved', 'Restored'])

                ->whereHas('category.categoryType', function ($query) {
                    $query->where('category_type', 'Retail');
                })
                ->with([
                    'productProperties',
                    'productProperties.property:id,property',
                    'watchedProducts' => function ($query) {
                        if (auth()->check()) {
                            $query->where('account_id', auth()->user()->account->id);
                        } else {
                            $query->where('account_id', 0);
                        }
                    }
                ])->inRandomOrder()->get();
            return response()->json(['payload' => $products], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }







}
