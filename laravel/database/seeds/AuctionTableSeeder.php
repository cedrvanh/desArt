<?php

use Illuminate\Database\Seeder;

use App\Auction;

class AuctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Faker generated data via AuctionFactory for testing purposes
     *
     * @return void
     */
    public function run()
    {
        /*
         * Creates Faker generated Auctions attached with
         * new Users and Categories
         */
        factory(Auction::class)->create([
            'title' => 'Paesaggio con capriccio',
            'condition' => 'nieuw',
            'shipment' => 'bpost'
        ]);

        factory(Auction::class, 9)->create();
    }
}
