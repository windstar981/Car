<?php

namespace Modules\BuyCar\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\BuyCar\Repository\GetData;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $products_used = DB::table('products')->paginate(15);
        $number_paginate = (int)floor(DB::table('products')->count()/15);
        $late_new_cars = DB::table('products')->orderByDesc('attribute->vehicle_year')
            ->limit(3)
            ->get();
//        dd((int)$number_paginate);
        return view('buycar::pages.cars.index',
            [
                'products' => $products_used,
                'lates_new_cars' => $late_new_cars,
                'number_paginate' => $number_paginate,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('buycar::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $images = DB::table('product_images')
            ->where('product_id', $id)
            ->get();
        $product = DB::table('products')
            ->where('id', '=', $id)
            ->get();

        $content = DB::table('product_contents')
            ->where('product_id', '=', $id)
            ->get();

        $seller = DB::table('sellers')
            ->where('id', '=', $product[0]->user_id)
            ->get();

        $recommend_for_you = DB::table('products')->limit(2)->get();
        $same_models = DB::table('products')->where('model_id', '=', $product[0]->model_id)
            ->limit(3)
            ->get();
        $price = $this->formatMoney($product[0]->price_min);
        $all_product = DB::table('products')->get();
        $same_price_rang = [];
        foreach ($all_product as $product_range) {
            if ($this->formatMoney($product_range->price_min) > $price - 200
                and $this->formatMoney($product_range->price_min) < $price + 200 && $product_range->id != $product[0]->id) {
                array_push($same_price_rang, $product_range);
            }
        }

        //@todo khoảng giá đang lưu bằng string không lọc được
        return view('buycar::pages.cars.car.index',
            [
                'car' => $product[0],
                'content' => $content[0],
                'seller' => $seller[0],
                'recommend_for_you' => $recommend_for_you,
                'same_models' => $same_models,
                'same_price_rang' => $same_price_rang,
                'images' => $images,
            ]);
    }

    private function formatMoney($money)
    {
//        dd($money);
        $price = explode(' ', $money);

        if (count($price) == 4) {
            return $price[0] * 1000 + $price[2];
        } else {
            if (count($price) == 2 && $price[1] == 'tỉ') {
                return $price[0] * 1000;
            } else {
                if (count($price) == 2 && $price[1] == 'triệu') {
                    return $price[0];
                }
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('buycar::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
