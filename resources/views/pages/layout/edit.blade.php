<x-app-layout>
  <x-slot name="header">

    <div class="w-full flex items-center justify-between">

      <div class="flex items-center space-x-12">

        <a href="{{ url()->previous() }}" class="px-6 py-1 bg-himaraGold-500 hover:bg-himaraGold-400 shadow">
          <svg version="1.1" id="Layer_1" class="fill-current text-white w-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 550 492;" xml:space="preserve">
            <g>
              <g>
                <path d="M487.912,115.343H269.116V38.831c0-1.48-0.952-2.82-2.276-3.456c-1.324-0.64-2.952-0.464-4.116,0.448L1.464,242.991C0.548,243.719,0,244.827,0,245.999c0,1.176,0.528,2.284,1.444,3.012l261.224,207.164c0.7,0.548,1.54,0.832,2.392,0.832c0.568,0,1.248-0.124,1.78-0.38c1.324-0.64,2.276-1.988,2.276-3.464v-76.508h218.908c2.116,0,3.976-1.536,3.976-3.664v-253.46C492,117.407,490.032,115.343,487.912,115.343z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>

        <h2 class="font-semibold font-display text-xl text-himaraGold-500 leading-tight">
          Static Home
        </h2>

      </div>

      <div class="hidden lg:flex items-center space-x-4">

        <a href="#layoutTopMenu" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Top Menu
        </a>

        <a href="#layoutHeader" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Header
        </a>

        <a href="#layoutFooter" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Footer
        </a>

      </div>

      <div></div>

    </div>

  </x-slot>

  <div id="homeStaticEditTop" class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <section id="layoutTopMenu">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Top Menu
        </h3>

        <x-form.form action='/dashboard/layout/edit-top-menu' method='PUT' title='Edition top menu' subtitle="">
          <x-form.text name="welcome_mssg" title="" placeholder="" :text="$top_menu->welcome_mssg" />
          <x-form.text name="a_tel_href" title="" placeholder="" :text="$top_menu->a_tel_href" />
          <x-form.fa-select name="a_tel_i_class" title="" :icons="$icons" :selected="$top_menu->a_tel_i_class" />
          <x-form.text name="a_tel_text" title="" placeholder="" :text="$top_menu->a_tel_text" />
          <x-form.text name="a_mail_href" title="" placeholder="" :text="$top_menu->a_mail_href" />
          <x-form.fa-select name="a_mail_i_class" title="" :icons="$icons" :selected="$top_menu->a_mail_i_class" />
          <x-form.text name="a_mail_text" title="" placeholder="" :text="$top_menu->a_mail_text" />
        </x-form.form>

      </section>

      <section id="layoutHeader">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Header
        </h3>

        <x-form.form action='/dashboard/layout/edit-header' method='PUT' enctype title='Edition header' subtitle="">
          <x-form.text name="brand_href" title="" placeholder="Title before yellow" :text="$header->brand_href" />
          <x-form.upload name="brand_img" title="" />
          <x-form.text name="menu_li1_href" title="" placeholder="Title in yellow" :text="$header->menu_li1_href" />
          <x-form.text name="menu_li1_text" title="" placeholder="Title after yellow" :text="$header->menu_li1_text" />
          <x-form.text name="menu_li2_href" title="" placeholder="" :text="$header->menu_li2_href" />
          <x-form.text name="menu_li2_text" title="" placeholder="" :text="$header->menu_li2_text" />
          <x-form.text name="menu_li3_href" title="" placeholder="" :text="$header->menu_li3_href" />
          <x-form.text name="menu_li3_text" title="" placeholder="" :text="$header->menu_li3_text" />
          <x-form.text name="menu_li4_href" title="" placeholder="" :text="$header->menu_li4_href" />
          <x-form.text name="menu_li4_text" title="" placeholder="" :text="$header->menu_li4_text" />
          <x-form.text name="menu_li5_href" title="" placeholder="" :text="$header->menu_li5_href" />
          <x-form.text name="menu_li5_text" title="" placeholder="" :text="$header->menu_li5_text" />
          <x-form.text name="menu_li6a_href" title="" placeholder="" :text="$header->menu_li6a_href" />
          <x-form.fa-select name="menu_li6a_i_class" title="" :icons="$icons" :selected="$header->menu_li6a_i_class" />
          <x-form.text name="menu_li6a_text" title="" placeholder="" :text="$header->menu_li6a_text" />
          <x-form.text name="menu_li6b_href" title="" placeholder="" :text="$header->menu_li6b_href" />
          <x-form.fa-select name="menu_li6b_i_class" title="" :icons="$icons" :selected="$header->menu_li6b_i_class" />
          <x-form.text name="menu_li6b_text" title="" placeholder="" :text="$header->menu_li6b_text" />
        </x-form.form>

      </section>

      <section id="layoutFooter">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Footer
        </h3>

        <x-form.form action='/dashboard/layout/edit-footer' method='PUT' enctype title='Edition footer' subtitle="">
          <x-form.upload name="w1_logo" title="" />
          <x-form.text name="w1_inner_text" title="" placeholder="Title before yellow" :text="$footer->w1_inner_text" />
          <x-form.text name="w1_a_href" title="" placeholder="Title in yellow" :text="$footer->w1_a_href" />
          <x-form.text name="w1_a_span" title="" placeholder="Title after yellow" :text="$footer->w1_a_span" />
          <x-form.upload name="w1_a_img" title="" />
          <x-form.text name="w2_h3" title="" placeholder="" :text="$footer->w2_h3" />
          <x-form.text name="w3_h3" title="" placeholder="" :text="$footer->w3_h3" />
          <x-form.text name="w3_a1_href" title="" placeholder="" :text="$footer->w3_a1_href" />
          <x-form.text name="w3_a1_text" title="" placeholder="" :text="$footer->w3_a1_text" />
          <x-form.text name="w3_a2_href" title="" placeholder="" :text="$footer->w3_a2_href" />
          <x-form.text name="w3_a2_text" title="" placeholder="" :text="$footer->w3_a2_text" />
          <x-form.text name="w3_a3_href" title="" placeholder="" :text="$footer->w3_a3_href" />
          <x-form.text name="w3_a3_text" title="" placeholder="" :text="$footer->w3_a3_text" />
          <x-form.text name="w3_a4_href" title="" placeholder="" :text="$footer->w3_a4_href" />
          <x-form.text name="w3_a4_text" title="" placeholder="" :text="$footer->w3_a4_text" />
          <x-form.text name="w3_a5_href" title="" placeholder="" :text="$footer->w3_a5_href" />
          <x-form.text name="w3_a5_text" title="" placeholder="" :text="$footer->w3_a5_text" />
          <x-form.text name="w4_h3" title="" placeholder="" :text="$footer->w4_h3" />
          <x-form.fa-select name="w4_li1_i_class" title="" :icons="$icons" :selected="$footer->w4_li1_i_class" />
          <x-form.text name="w4_li1_text" title="" placeholder="" :text="$footer->w4_li1_text" />
          <x-form.fa-select name="w4_li2_i_class" title="" :icons="$icons" :selected="$footer->w4_li2_i_class" />
          <x-form.text name="w4_li2_text" title="" placeholder="" :text="$footer->w4_li2_text" />
          <x-form.fa-select name="w4_li3_i_class" title="" :icons="$icons" :selected="$footer->w4_li3_i_class" />
          <x-form.text name="w4_li3_text" title="" placeholder="" :text="$footer->w4_li3_text" />
          <x-form.fa-select name="w4_li4_i_class" title="" :icons="$icons" :selected="$footer->w4_li4_i_class" />
          <x-form.text name="w4_li4_text" title="" placeholder="" :text="$footer->w4_li4_text" />
          <x-form.fa-select name="w4_li5_i_class" title="" :icons="$icons" :selected="$footer->w4_li5_i_class" />
          <x-form.text name="w4_li5_text" title="" placeholder="" :text="$footer->w4_li5_text" />
          <x-form.text name="w4_li5_li_text" title="" placeholder="" :text="$footer->w4_li5_li_text" />
          <x-form.text name="w4_li5_a_text" title="" placeholder="" :text="$footer->w4_li5_a_text" />
          <x-form.text name="sf_copyright" title="" placeholder="" :text="$footer->sf_copyright" />
          <x-form.text name="sf_copyright_href" title="" placeholder="" :text="$footer->sf_copyright_href" />
          <x-form.text name="sf_copyright_text" title="" placeholder="" :text="$footer->sf_copyright_text" />
          <x-form.text name="sf_sm_facebook_class" title="" placeholder="" :text="$footer->sf_sm_facebook_class" />
          <x-form.text name="sf_sm_facebook_title" title="" placeholder="" :text="$footer->sf_sm_facebook_title" />
          <x-form.text name="sf_sm_facebook_href" title="" placeholder="" :text="$footer->sf_sm_facebook_href" />
          <x-form.fa-select name="sf_sm_facebook_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_facebook_i_class" />
          <x-form.text name="sf_sm_twitter_class" title="" placeholder="" :text="$footer->sf_sm_twitter_class" />
          <x-form.text name="sf_sm_twitter_title" title="" placeholder="" :text="$footer->sf_sm_twitter_title" />
          <x-form.text name="sf_sm_twitter_href" title="" placeholder="" :text="$footer->sf_sm_twitter_href" />
          <x-form.fa-select name="sf_sm_twitter_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_twitter_i_class" />
          <x-form.text name="sf_sm_googleplus_class" title="" placeholder="" :text="$footer->sf_sm_googleplus_class" />
          <x-form.text name="sf_sm_googleplus_title" title="" placeholder="" :text="$footer->sf_sm_googleplus_title" />
          <x-form.text name="sf_sm_googleplus_href" title="" placeholder="" :text="$footer->sf_sm_googleplus_href" />
          <x-form.fa-select name="sf_sm_googleplus_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_googleplus_i_class" />
          <x-form.text name="sf_sm_pinterest_class" title="" placeholder="" :text="$footer->sf_sm_pinterest_class" />
          <x-form.text name="sf_sm_pinterest_title" title="" placeholder="" :text="$footer->sf_sm_pinterest_title" />
          <x-form.text name="sf_sm_pinterest_href" title="" placeholder="" :text="$footer->sf_sm_pinterest_href" />
          <x-form.fa-select name="sf_sm_pinterest_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_pinterest_i_class" />
          <x-form.text name="sf_sm_linkedin_class" title="" placeholder="" :text="$footer->sf_sm_linkedin_class" />
          <x-form.text name="sf_sm_linkedin_title" title="" placeholder="" :text="$footer->sf_sm_linkedin_title" />
          <x-form.text name="sf_sm_linkedin_href" title="" placeholder="" :text="$footer->sf_sm_linkedin_href" />
          <x-form.fa-select name="sf_sm_linkedin_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_linkedin_i_class" />
          <x-form.text name="sf_sm_youtube_class" title="" placeholder="" :text="$footer->sf_sm_youtube_class" />
          <x-form.text name="sf_sm_youtube_title" title="" placeholder="" :text="$footer->sf_sm_youtube_title" />
          <x-form.text name="sf_sm_youtube_href" title="" placeholder="" :text="$footer->sf_sm_youtube_href" />
          <x-form.fa-select name="sf_sm_youtube_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_youtube_i_class" />
          <x-form.text name="sf_sm_instagram_class" title="" placeholder="" :text="$footer->sf_sm_instagram_class" />
          <x-form.text name="sf_sm_instagram_title" title="" placeholder="" :text="$footer->sf_sm_instagram_title" />
          <x-form.text name="sf_sm_instagram_href" title="" placeholder="" :text="$footer->sf_sm_instagram_href" />
          <x-form.fa-select name="sf_sm_instagram_i_class" title="" :icons="$icons" :selected="$footer->sf_sm_instagram_i_class" />
        </x-form.form>

      </section>

    </div>

  </div>

</x-app-layout>
