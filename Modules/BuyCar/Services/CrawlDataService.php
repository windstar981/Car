<?php

namespace Modules\BuyCar\Services;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\BuyCar\Entities\Product;

class CrawlDataService
{
    public function insertData()
    {
        $configApi = config('api.spider');
        $url_api = '' . $configApi['host'] . '' . $configApi['url'] . '?';
        $paramQuery = $configApi['param'];

        $url_api .= http_build_query($paramQuery);

        $client = new Client();

        while ($url_api != '') {
            $request = $client->request('GET', $url_api);
            if ($request->getStatusCode() == 200) {
                $response = $request->getBody()->getContents();
                $dataset = json_decode($response, true);
                foreach ($dataset['data']['data'] as $data) {
                    if (!$data['id']) {
                        continue;
                    }
                    if ($this->__findOneProduct($data['url_hash_unique'])) {
                        echo $data['data']['title'] . " đã tồn tại\n";
                    } else {
                        $sellerId = $this->__insertOrGetSeller($data['data']);
                        self::__insertProduct($data, $sellerId);
                    }
                }
                $url_api = $dataset['data']['next_page_url'];
            }
        }
    }

    private function __findOneProduct($url_hash_unique)
    {
        return Product::where('url_hash_unique', $url_hash_unique)->count();
    }

    private function __insertOrGetSeller($data = [])
    {
        $sellerId = DB::table("sellers")
            ->where('phone', $data['user_phone'])
            ->value("id");

        if ($sellerId) {
            return $sellerId;
        } else {
            $dataInsert = [
                'address' => $data['user_address'],
                'avatar' => 'default',
                'name' => $data['user_name'],
                'phone' => $data['user_phone']
            ];
            return DB::table("sellers")
                ->insertGetId($dataInsert);
        }
    }

    private function __insertProduct($data, $seller_id)
    {
        $vehicle_fuel = [
            'gasoline' => 'Xăng',
            'diesel' => 'Diesel',
            'electricity' => 'Điện',
            'hybrid' => 'Hybrid',
            'other' => 'Loại khác',
            'null' => '',
        ];
        $vehicle_gear = [
            'automatic' => 'Số tự động',
            'manual' => 'Số tay',
            'mixed' => 'Số hỗn hợp',
            'null' => '',
        ];
        $vehicle_style = [
            'suv' => 'SUV',
            'truck' => 'Truck',
            'hatchback' => 'Hatchback',
            'van_minivan' => 'Van/Minivan',
            'mpv' => 'MPV',
            'sedan' => 'Sedan',
            'pick_up_truck' => 'Pick-up Truck',
            'convertible' => 'Convertible',
            'cuv' => 'CUV',
            'coupe' => 'Coupe',
            'apecial_purpose' => 'Special Purpose',
            'city_car' => 'City Car',
            'sport_car' => 'Sport Car',
            'wagon' => 'Wagon',
            'null' => '',
        ];
        $vehicle_origin = [
            'imported' => 'Nhập khẩu',
            'domestic' => 'Trong nước',
        ];
        $vehicle_status = [
            'used' => 'Đã qua sử dụng',
            'new' => 'Mới',
        ];
        $image_thumbnail = 'default';
        if (sizeof($data['data']['images']) != 0) {
            $image_thumbnail = $data['data']['images'][0];
        }
        $fuel = $this->__getKeyAttribute($vehicle_fuel, $data['data']['vehicle_fuel']);

        $gear = $this->__getKeyAttribute($vehicle_gear, $data['data']['vehicle_gear']);

        $style = $this->__getKeyAttribute($vehicle_style, $data['data']['vehicle_style']);

        $origin = $this->__getKeyAttribute($vehicle_origin, $data['data']['vehicle_origin']);

        $status = $this->__getKeyAttribute($vehicle_status, $data['data']['vehicle_status']);

        DB::table('products')->insert([
            'id' => $data['id'],
            'name' => 'crawl',
            'type' => 'car',
            'image_thumbnail' => $image_thumbnail,
            'price_real' => $data['data']['price_real'],
            'user_id' => $seller_id,
            'cate_id' => '1',
            'location' => $data['data']['address'],
            'brand_id' => '1',
            'model_id' => '1',
            'secondhand' => '1',
            'gauge' => '1',
            'allow_test_drives' => '1',
            'video' => '1',
            'post_status' => '1',
            'sub_content' => $data['data']['title'],
            'price_min' => $data['data']['price'],
            'attribute' => json_encode([
                'vehicle_fuel' => $fuel,
                'vehicle_gear' => $gear,
                'vehicle_year' => $data['data']['vehicle_year'],
                'vehicle_style' => $style,
                'vehicle_origin' => $origin,
                'vehicle_status' => $status
            ]),
            'approve_status' => 0,
            'publish_at' => null,
            'created_at' => null,
            'updated_at' => null,
            'slug' => Str::slug($data['data']['title']),
            'url_hash_unique' => $data['url_hash_unique'],
        ]);

        $this->__insertContent($data['id'], $data['data']['content']);

        $this->__insertImage($data);

    }

    private function __getKeyAttribute($values, $attribute_crawl)
    {
        foreach ($values as $key => $value) {
            if ($attribute_crawl == $value) {
                return $key;
            }
        }
        return null;
    }

    private function __insertContent($product_id, $content)
    {
        DB::table('product_contents')->insert([
            'product_id' => $product_id,
            'content' => $content,
        ]);
    }

    private function __insertImage($data)
    {
        foreach ($data['data']['images'] as $image) {
            DB::table('product_images')->insert([
                'product_id' => $data['id'],
                'url' => $image
            ]);
        }
    }
}
