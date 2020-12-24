<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shoes')->insert([
            [
                'name' => 'Nike Air Jordan 1 Low OG Chinese New Year',
                'description' => 'Nike',
                'price' => 1000000,
                'image' => 'nike_jordanCN.jpg'],
            
            [
                'name' => 'Men Air Jordan 1 Retro High Gold',
                'description' => 'Nike',
                'price' => 5000000,
                'image' => 'nike_jordanRetro.jpg'],
            
            [
                'name' => 'Nike Off White X Nike Air Max 90',
                'description' => 'Nike',
                'price' => 8000000,
                'image' => 'nike_offwhiteX.jpg'],
            
            [
                'name' => 'Nike Jordan 4 Levi\'s Denim',
                'description' => 'Nike',
                'price' => 12000000,
                'image' => 'nike_jordanlevi4.jpg'],

            [
                'name' => 'Nike Downshifter 9',
                'description' => 'Nike',
                'price' => 10000000,
                'image' => 'nike_downshifter.jpg'],

            [
                'name' => 'Nike Lebron Wittness III',
                'description' => 'Nike',
                'price' => 90000000,
                'image' => 'nike_lebronW3.jpg'],
            
            //Adidas
            [
                'name' => 'AlphaEdge 4D - Reflective',
                'description' => 'Adidas',
                'price' => 45000000,
                'image' => 'adidas_alphaedge.jpg'],

            [
                'name' => 'AlphaEdge 4D - GoodBye Gravity',
                'description' => 'Adidas',
                'price' => 32000000,
                'image' => 'adidas_alphaedgeG.jpg'],
            
            [
                'name' => 'Vans Coastal',
                'description' => 'Adidas',
                'price' => 24000000,
                'image' => 'adidas_vansCoas.jpg'],

            [
                'name' => 'Crazy BYW Pharrell Williams',
                'description' => 'Adidas',
                'price' => 79000000,
                'image' => 'adidas_crazyBYW.jpg'],

            [
                'name' => 'Adidas Ultraboost 20',
                'description' => 'Adidas',
                'price' => 2500000,
                'image' => 'adidas_ultraboost.jpg'],

            [
                'name' => 'X9000L4 Cyberpunk 2077',
                'description' => 'Adidas',
                'price' => 2250000,
                'image' => 'adidas_cyberpunk.jpg'],
        ]);
    }
}
