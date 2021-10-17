<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageEventdetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_eventdetails')->insert([
            'revolution_slider_img' => 'event.jpg',
            'revolution_slider_text' => 'HIMARA SUMMER PARTY',
            'revolution_slider_countdown_year' => '2019',
            'revolution_slider_countdown_month' => '01',
            'revolution_slider_countdown_days' => '01',
            'booking_form_title' => 'BOOK YOUR TICKET',
            'booking_form_email_placeholder' => 'Your Email Address',
            'booking_form_email_title' => 'Select Room Type',
            'booking_form_email_data_header' => 'Room Type',
            'booking_form_email_option_value' => 'Offer',
            'booking_form_email_option_text' => 'Offer',
            'booking_form_guests_guestpicker' => 'Guests',
            'booking_form_guests_adult_label' => 'Adults',
            'booking_form_guests_adult_data_content' => '18+ years',
            'booking_form_guests_adult_i_class' => 'fa-info-circle',
            'booking_form_guests_children_label' => 'Children',
            'booking_form_guests_children_data_content' => 'Under 18 years',
            'booking_form_guests_children_i_class' => 'fa-info-circle',
            'booking_form_guests_submit_text' => 'BOOK A TICKET',
            'text1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum commodi incidunt labore unde minima numquam rerum, expedita itaque quibusdam ipsa consequuntur cupiditate, officia iure earum soluta voluptatem impedit pariatur rem! Nulla, error placeat! Animi harum, eveniet placeat excepturi perferendis, ex consectetur explicabo voluptatem totam hic, officiis quisquam? Similique eum itaque, delectus quo deserunt deleniti quibusdam alias sed commodi assumenda magnam unde provident praesentium doloribus a asperiores, amet dolores maiores, illo quis inventore sunt, nihil nemo pariatur! Culpa neque sint accusantium laboriosam reiciendis corporis, veritatis quos, debitis doloremque adipisci repudiandae atque, minus! Atque libero, asperiores ex fugit, quia consequatur modi officiis! Magnam quae atque quasi natus minima optio nobis eveniet aspernatur vitae deserunt totam in sed, placeat odio cumque, accusantium ducimus. Molestias quasi ipsa libero vero dolorem recusandae iusto beatae quae architecto provident expedita debitis, animi enim labore deleniti ullam, a nobis asperiores aliquam necessitatibus error? Quia consequatur vero assumenda architecto ex, aliquid. Perferendis, at, necessitatibus. Assumenda vel, consequuntur voluptatibus non voluptates!',
            'text2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quia itaque accusantium voluptatibus esse animi tenetur adipisci! Iure cumque aliquam tempore quam, asperiores obcaecati architecto earum vitae a commodi ratione velit nesciunt animi at dolore illo fugit. At nostrum, tenetur similique adipisci voluptatem mollitia, cum neque autem labore sapiente dolore accusantium et excepturi odit iusto corporis, facere inventore obcaecati incidunt, est quam. Maiores aliquid cupiditate tenetur aut fugit! Quis deleniti nesciunt at officiis! Iusto recusandae numquam ratione excepturi perspiciatis cumque nisi, explicabo dolorum alias ipsum voluptates non, possimus! Voluptatem adipisci dolor quos tenetur placeat?',
            'text3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quis autem natus dicta, possimus necessitatibus cum, et doloribus facilis fugit molestias! Delectus quo doloribus pariatur dolor sint, ad officiis totam similique quaerat nesciunt quod fugit libero voluptates deserunt laboriosam hic quia? Ex iusto maiores ipsum ab quis provident, molestiae veritatis, consequuntur nostrum aliquid quos. Eligendi enim fugiat fuga aperiam odio accusamus, architecto et, sequi ullam facere, quidem fugit ut. ',
            'text4' => 'Praesentium vel quos recusandae perferendis, dolore voluptatibus nesciunt provident quod ab laborum quisquam alias quaerat optio. Temporibus, saepe, atque, ea inventore excepturi explicabo tenetur similique, rerum tempora doloremque at nemo alias.',
        ]);
    }
}
