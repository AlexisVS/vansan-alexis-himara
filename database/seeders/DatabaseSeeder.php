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

            PostCategorySeeder::class,
            PostSeeder::class, // ! footer | news | latest posts
            PostTagSeeder::class,
            PostTagPostSeeder::class,
            
            RoomCategoriesSeeder::class,
            RoomSeeder::class,
            RoomImageSeeder::class,
            RoomReviewSeeder::class,
            RoomServiceSeeder::class,
            RoomServiceRoomSeeder::class,
            
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

            // ROOM LIST
            PageRoomlistSeeder::class,

            // TEAM
            PageTeamSeeder::class,
            PageTeamTeamSeeder::class,

            /* -------------------------------------------------------------------------- */
            /*                                   Backend                                  */
            /* -------------------------------------------------------------------------- */

            FontawesomeiconlistSeeder::class,
        ]);
    }
}
