<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Mèo đen',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>1000000,
                'image'=>'http://ban-vinhomesgoldenriver.net/wp-content/uploads/2017/12/meo-den-vao-nha-.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Mèo trắng',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>2000000,
                'image'=>'https://vnkings.com/wp-content/uploads/2017/08/Untitled.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Mèo tam thể',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>500000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/06/28/139/22632507/3_42917.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Mèo Batu',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20000000,
                'image'=>'http://zkiwi.com/wp-content/uploads/2013/09/huong-dan-cham-soc-meo-ba-tu.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Mèo Xiêm',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20000000,
                'image'=>'http://lolipet.net/wp-content/uploads/62.jpg'
            ],
            [
                'id'=>6,
                'name'=>'Mèo nga xanh',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>3000000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/18/02/25/315/25049908/1_84674.jpg'
            ],
            [
                'id'=>7,
                'name'=>'Mèo Briman',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20000000,
                'image'=>'https://thucung.farmvina.com/wp-content/uploads/2015/12/birman6.jpg'
            ],
            [
                'id'=>8,
                'name'=>'Mèo maine',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>123456789,
                'image'=>'https://lh3.googleusercontent.com/-is6r-X_3D0U/VubDRe_8-ZI/AAAAAAAAWzU/fvUyR75ax5cNkWTlwKtPAiMCEMg9Q-ppACCo/s640-Ic42/gi%25C3%25A1-mua-b%25C3%25A1n-m%25C3%25A8o-maine-coon-5.jpg'
            ],
            [
                'id'=>9,
                'name'=>'Mèo angora',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20002222,
                'image'=>'http://meocun.com/wp-content/uploads/10-giong-meo-dep-nhat-the-gioi-meo-angora-tho-nhi-ky-1a.jpg'
            ],
            [
                'id'=>10,
                'name'=>'Mèo siberian',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20001011,
                'image'=>'http://www.thegioithunuoi.com/wp-content/uploads/2016/06/doi-net-ve-giong-meo-rung-Siberia-3.jpg'
            ],
            [
                'id'=>11,
                'name'=>'Mèo himalaya',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20002324,
                'image'=>'https://lh3.googleusercontent.com/-fK-NGySBBOA/Vp9CkMg9xMI/AAAAAAAAWGE/kQJ5CJyskWY/s720-Ic42/m%2525C3%2525A8o-himalayan.jpg'
            ],
            [
                'id'=>12,
                'name'=>'Mèo ai cập',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20011110,
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Egyptian_Mau_Bronze.jpg/1200px-Egyptian_Mau_Bronze.jpg'
            ],
            [
                'id'=>13,
                'name'=>'Mèo burmilan',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20001111,
                'image'=>'http://cfa.org/portals/0/Images/breeds/Burmilla/profile1.jpg'
            ],
            [
                'id'=>14,
                'name'=>'Mèo Khoa',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>20001111,
                'image'=>'https://i.ytimg.com/vi/rT_lzyr69dA/hqdefault.jpg'
            ],
            [
                'id'=>15,
                'name'=>'Thịt mèo nướng',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>100000,
                'image'=>'https://i.ytimg.com/vi/cPTHxEf3YtA/maxresdefault.jpg'
            ],
            [
                'id'=>16,
                'name'=>'Xương mèo',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>50000,
                'image'=>'https://emvaobep.com/wp-content/uploads/2017/07/cach-nau-chao-xuong-meo-2.jpg'
            ],
            [
                'id'=>17,
                'name'=>'Mèo luộc',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>200000,
                'image'=>'http://img.tinbaihay.net/ThumbImages/01/monn/mon-ngon-cach-lam-thit-meo-hap-ngon-dung-vi-feae_450.jpg'
            ],
            [
                'id'=>18,
                'name'=>'Mèo nhúng nước sôi',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>200000,
                'image'=>'https://images.xoso.me/news_xosome/2016/06/10/KL/mo-thay-an-thit-meo.jpg'
            ],
            [
                'id'=>19,
                'name'=>'Bán mèo',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>200000,
                'image'=>'https://trangvhntnguoncoi.files.wordpress.com/2012/10/thitchomeo.jpg'
            ],
            [
                'id'=>20,
                'name'=>'Mèo xào',
                'description'=>'Mua không?Không mua thì cút :))',
                'categoryId'=>1,
                'price'=>150000,
                'image'=>'http://vandinh.vn/product_images/uploaded_images/cachnauthitcho.jpg'
            ],
            ]);
    }
}
