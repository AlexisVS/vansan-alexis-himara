<?php

namespace Database\Seeders;

use App\Models\Page_blog_sidebar_category;
use App\Models\Page_blog_sidebar_tag;
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
            PageHomeNewNewSeeder::class, // ? news

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
            PageHomeVideoSeeder::class,
            PageHomeContactV2Seeder::class,

            // BLOG
            PageBlogPageTitleSeeder::class,
            PageBlogSidebarSeeder::class,
            PageBlogSidebarCategorySeeder::class,
            PageBlogSidebarTagSeeder::class,
            
        ]);
    }
}
