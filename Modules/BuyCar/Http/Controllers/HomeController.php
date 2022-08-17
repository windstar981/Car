<?php

namespace Modules\BuyCar\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\BuyCar\Entities\Attributes;
use Illuminate\Support\Facades\DB;
use Modules\BuyCar\Repository\GetData;
use Modules\BuyCar\Entities\Product;
use Modules\BuyCar\Entities\Brand;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Modules\BuyCar\Services\CrawlDataService;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $products_new = DB::table('products')
            ->where('attribute->vehicle_status', '=', 'used')
            ->limit(8)
            ->get();
        $products_used = DB::table('products')
            ->where('attribute->vehicle_status', '=', 'new')
            ->limit(8)
            ->get();
        $brands = DB::table('brands')->get();
        return view('buycar::pages.home.index',
            [
                'products_new' => $products_new,
                'products_used' => $products_used,
                'brands' => $brands,
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
