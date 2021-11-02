<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_pages')->insert([
            'page_title_bg_img' => 'breadcrumb.jpg',
            'page_title_title' => 'RIGHT SIDEBAR PAGE',
            'page_title_a_href' => '/',
            'page_title_text' => 'Home',
            'page_title_li' => 'Right Sidebar Page',
            'text1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae fugiat fugit, asperiores veritatis aliquam numquam eaque quas, voluptas dolorum at totam minima porro odit reprehenderit, dicta mollitia. Dolorem veniam iusto dolor nam in dolores culpa nostrum pariatur consectetur architecto sed et maxime nisi magni quisquam, asperiores saepe optio, aut officia deserunt voluptate suscipit officiis! Amet minima dolore quisquam sed, laudantium quasi provident reprehenderit, adipisci earum placeat numquam cum, mollitia suscipit. Dolorum magni provident sed corporis ad excepturi quod laudantium soluta ullam hic fugiat laborum consectetur minima, libero consequuntur tempora saepe accusantium. Ducimus neque commodi perspiciatis dolore inventore culpa, dicta, ipsam sunt! Cumque praesentium nemo ipsum dolor a aliquam possimus tempora minima eum, fugit, amet iure tempore veritatis eius earum sed vero quia tenetur nesciunt aut eaque labore similique incidunt ad. Nemo est nostrum aperiam similique culpa tenetur esse, quia a mollitia cum laboriosam distinctio expedita molestiae quasi perferendis, laborum et harum eos animi nisi soluta. Ab repellat dolore nostrum sunt obcaecati ex, fugit pariatur aut amet nobis vero reiciendis excepturi. Exercitationem laboriosam quis nam, pariatur ab impedit consequatur, explicabo deleniti rem sunt optio praesentium. Suscipit laboriosam vitae provident iusto, sed, distinctio, quasi quaerat similique tempora quia quas autem corporis reiciendis.',
            'text2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet labore cumque excepturi sapiente earum dicta quisquam architecto illo, id eligendi reprehenderit facere magni minima aspernatur consequatur assumenda numquam, quae voluptates quibusdam nemo non eveniet facilis saepe! Aspernatur unde autem, quis, voluptatum obcaecati nobis. Asperiores voluptate accusantium, minima magni in culpa, iusto voluptatem quasi ipsum dolores dolorum inventore nesciunt reprehenderit, expedita deleniti consectetur itaque non. Veritatis ab numquam dolores reprehenderit repellat officia voluptatibus velit commodi sint labore porro ad obcaecati quos non, nemo dolorum recusandae culpa dolorem odio, nihil distinctio rem. Ducimus laborum veniam, nostrum ab ut quaerat, neque animi. Vel incidunt id quod, nostrum totam. Eveniet, tempore? Hic error rem voluptatum perspiciatis quas, adipisci culpa placeat, eligendi sunt, nesciunt tempore optio pariatur! Dignissimos dolore, qui pariatur consectetur hic illum ea, tenetur molestias! Pariatur omnis provident, placeat ipsa natus doloribus veniam. Placeat, ea voluptatum. Itaque atque, dolores aspernatur quibusdam natus, quidem asperiores ab quasi ex soluta mollitia nihil. Placeat, maiores quia voluptatum deserunt deleniti dignissimos quam aspernatur, architecto esse accusantium officiis sunt veniam repellendus. Earum repellendus voluptates quas, id consequatur, non error molestias aperiam accusantium, enim veritatis aliquid ab, nobis incidunt. Eum natus earum pariatur reiciendis sint. Tempore magni veniam, reiciendis, maxime fugiat possimus minima, amet nemo consequatur, corporis placeat vel assumenda? Minus culpa voluptates dicta voluptatibus quia, quisquam autem ducimus quod voluptate atque asperiores tenetur laudantium exercitationem, eveniet nihil accusantium perferendis! Quis illum voluptatem in necessitatibus quasi rerum inventore sit vitae sint ad error nam praesentium ducimus eveniet, voluptatum impedit aspernatur deleniti maiores non temporibus atque ipsum! Facere culpa quasi numquam eos autem tenetur eum, ea aut. Tempora, commodi, aspernatur. Ipsum, odio. Neque hic, tenetur optio voluptatem! Facilis asperiores reiciendis commodi ex debitis eaque tenetur ad blanditiis dolor, voluptas officia quia pariatur officiis sed alias velit, qui non perferendis saepe explicabo ut maxime! Magni consectetur ex vitae, qui ratione quos aperiam voluptatibus illum, totam quibusdam, assumenda ducimus nesciunt, animi maiores tenetur saepe aliquam nobis reprehenderit iusto fugiat harum aliquid nam in vero. Necessitatibus, voluptatibus. Laborum alias maxime ut assumenda, recusandae laudantium velit iusto esse nam, repellendus est dolores, necessitatibus illum.',
            'text3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo aliquam dolor reiciendis, eum odio eos, maxime corporis in dolorem temporibus adipisci veritatis error tempora consequuntur. Doloribus earum omnis nam explicabo temporibus esse quia quisquam obcaecati, laboriosam facilis, officiis sapiente eveniet eius a, velit voluptatibus commodi dolore magni et repellat rerum voluptatem, quod voluptatum exercitationem. Odit qui rem obcaecati minus dolorem quasi officiis molestias vel veniam velit, reiciendis repudiandae. Rerum dolorum, pariatur nesciunt. Ullam corporis voluptates explicabo beatae, minima, minus praesentium ab magni rerum fuga ut consequuntur nemo quae ex animi soluta officia reprehenderit placeat? Dolorum vel velit ratione voluptatibus praesentium.',
            'sidebar_search_placeholder' => '',
            'sidebar_i_class' => 'fa-search',
            'sidebar_widget1_name' => 'CATEGORIES',
            'sidebar_widget2_name' => 'Latest Posts',
            'sidebar_widget3_name' => 'Tags',
        ]);
    }
}
