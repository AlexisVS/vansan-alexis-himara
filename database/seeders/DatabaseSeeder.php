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
            // LAYOUT
            LayoutTopMenuSeeder::class,
            LayoutHeaderSeeder::class,
            LayoutFooterSeeder::class,
            
            // UNIVERSAL
            GallerySeeder::class, // ! home gallery | gallery

            PostSeeder::class, // ! footer | news | latest posts
            PostCategorySeeder::class,
            PostTagSeeder::class,
            
            RoomSeeder::class,
            RoomImageSeeder::class,
            RoomProgressSeeder::class,
            RoomReviewSeeder::class,
            RoomServiceSeeder::class,
            RoomCategoriesSeeder::class,
            
            // HOME
            PageHomeRevolutionSliderSeeder::class,
            PageHomeBookingFormSeeder::class,
            PageHomeAboutSeeder::class,
            PageHomeAboutProvidersSeeder::class,
            PageHomeOurRoomsSeeder::class,
            PageHomeServicesSeeder::class,
            PageHomeServicesServiceSeeder::class,
            PageHomeGallerySeeder::class,
            PageHomeTestimonialSeeder::class,
            PageHomeTestimonialTestimonialSeeder::class,
            PageHomeRestaurantSeeder::class,
            PageHomeRestaurantRestaurantSeeder::class,
            PageHomeNewSeeder::class,
            PageHomeVideoSeeder::class,
            PageHomeContactV2Seeder::class,

            // BLOG
            PageBlogPageTitleSeeder::class,
            PageBlogSidebarSeeder::class,

            // BOOKING FORM
            PageBookingFormSeeder::class,
            PageBookingFormOfferSeeder::class,
            PageBookingFormLandSeeder::class,
            PageBookingFormLand2Seeder::class,
            
            // CONTACT
            PageContactSeeder::class,
            
            // Gallery
            PageGallerySeeder::class,

            // PAGE
            PagePageSeeder::class,

            // Room
            PageRoomSeeder::class,
            PageRoomSidebarSeeder::class,

            // TEAM
            PageTeamSeeder::class,
            PageTeamTeamSeeder::class,
        ]);
    }
}
