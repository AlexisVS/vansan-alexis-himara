<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            TopMenuSeeder::class,
            HeaderSeeder::class,
            FooterSeeder::class,
            // HOME
            PageHomeRevolutionSliderSeeder::class,
            PageHomeBookingFormSeeder::class,
            PageHomeAboutSeeder::class,
            PageHomeAboutProvidersSeeder::class,
            PageHomeOurRoomsSeeder::class,
            PageHomeOurRoomsRoomSeeder::class,
            PageHomeServicesSeeder::class,
            PageHomeServicesServiceSeeder::class,
            PageHomeGallerySeeder::class,
            PageHomeGalleryGallerySeeder::class,
            PageHomeTestimonialSeeder::class,
            PageHomeTestimonialTestimonialSeeder::class,
            PageHomeRestaurantSeeder::class,
            PageHomeRestaurantRestaurantSeeder::class,
            PageHomeNewSeeder::class,
            PageHomeNewNewSeeder::class,
            PageHomeVideoSeeder::class,
            PageHomeContactV2Seeder::class,
        ]);
    }
}
