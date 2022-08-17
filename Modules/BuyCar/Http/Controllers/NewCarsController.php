<?php

namespace Modules\BuyCar\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\BuyCar\Entities\Product;
class NewCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $new_cars_for_sale = DB::table('products')
            ->orderbyDESC('attribute->vehicle_year')
            ->limit(4)
            ->get();
        $brands = DB::table('brands')->limit(10)->get();
        $body_suv = Product::limit(3)->get();
        $body_mpv =  Product::limit(3)->get();
        $body_sedan = Product::limit(3)->get();
        $body_hatchback =  Product::limit(3)->get();
        $body_wagon = Product::limit(3)->get();
        $body_minivan =  Product::limit(3)->get();
        $body_van = Product::limit(3)->get();
        $body_pickup =  Product::limit(3)->get();
        $body_commerical = Product::limit(3)->get();
        $body_coupe =  Product::limit(3)->get();
        $products_body_type = [];
        array_push($products_body_type ,$body_suv,$body_mpv, $body_sedan,$body_hatchback, $body_wagon,$body_minivan,
        $body_van,$body_pickup,$body_commerical, $body_coupe  );

        $range_1 = Product::limit(3)->get();
        $range_2 = Product::limit(3)->get();
        $range_3 = Product::limit(3)->get();
        $range_4 = Product::limit(3)->get();
        $range_5 = Product::limit(3)->get();
        $products_price_range = [];
        array_push($products_price_range,$range_1, $range_2,$range_3, $range_4, $range_5  );

        $partners_all = Product::limit(6)->get();
        $partners_toyota = Product::limit(6)->get();
        $partners_suzuki = Product::limit(6)->get();
        $partners_mitsubishi = Product::limit(6)->get();
        $partners_honda = Product::limit(6)->get();
        $partners_ford = Product::limit(6)->get();
        $partners_nissan = Product::limit(6)->get();
        $partners_isuzi = Product::limit(6)->get();
        $promotions_partners = [];
        array_push($promotions_partners, $partners_all, $partners_toyota,$partners_suzuki,$partners_mitsubishi,
            $partners_honda,$partners_ford,$partners_nissan,$partners_isuzi);

        $lastes_all =  Product::limit(9)->get();
        $lastes_toyota =  Product::limit(3)->get();
        $lastes_mg =  Product::limit(3)->get();
        $lastes_chery =  Product::limit(3)->get();
        $lastes_mitsubishi =  Product::limit(3)->get();
        $lastes_isuzu =   Product::limit(3)->get();
        $lastes_ford =  Product::limit(3)->get();
        $lastes_honda =  Product::limit(3)->get();
        $lastes_mazda =  Product::limit(3)->get();
        $lastes_kia =  Product::limit(3)->get();
        $lastes_hyundai =  Product::limit(3)->get();
        $lastes_suzuki =  Product::limit(3)->get();
        $latest_new_car = [];
        array_push($latest_new_car,$lastes_all, $lastes_toyota, $lastes_mg, $lastes_chery,$lastes_mitsubishi,
            $lastes_isuzu, $lastes_ford, $lastes_honda,$lastes_mazda, $lastes_kia, $lastes_hyundai, $lastes_suzuki);

        return view('buycar::pages.newcar.index',
        [
            'new_cars_for_sale' => $new_cars_for_sale,
            'brands' =>$brands,
            'products_body_type' => $products_body_type,
            'products_price_range' => $products_price_range,
            'promotions_partners' => $promotions_partners,
            'latest_new_car' => $latest_new_car
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
        return view('buycar::show');
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
