<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-12">
            <a href="{{ url()->previous() }}" class="px-6 py-1 bg-himaraGold-500 hover:bg-himaraGold-400 shadow">
                <svg version="1.1" id="Layer_1" class="fill-current text-white w-7" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492"
                    style="enable-background:new 0 0 550 492;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M487.912,115.343H269.116V38.831c0-1.48-0.952-2.82-2.276-3.456c-1.324-0.64-2.952-0.464-4.116,0.448L1.464,242.991C0.548,243.719,0,244.827,0,245.999c0,1.176,0.528,2.284,1.444,3.012l261.224,207.164c0.7,0.548,1.54,0.832,2.392,0.832c0.568,0,1.248-0.124,1.78-0.38c1.324-0.64,2.276-1.988,2.276-3.464v-76.508h218.908c2.116,0,3.976-1.536,3.976-3.664v-253.46C492,117.407,490.032,115.343,487.912,115.343z" />
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
                Static Contact
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section>


                <x-form.form action='/dashboard/contact/edit-static' method='PUT' enctype title='Edition static contact'
                    subtitle="All text in your page">
                    <x-form.upload name="page_title_bg_img" />
                    
                    <x-form.text name="page_title_title" :text="$edit->page_title_title" />
                    <x-form.text name="page_title_li" :text="$edit->page_title_li" />
                    <x-form.text name="section_title_title" :text="$edit->section_title_title" />
                    <x-form.text name="section_title_subtitle" :text="$edit->section_title_subtitle" />
                    <x-form.text name="section_title_text" :text="$edit->section_title_text" />
                    <x-form.text name="form_name" :text="$edit->form_name" />
                    <x-form.text name="form_email" :text="$edit->form_email" />
                    <x-form.text name="form_phone" :text="$edit->form_phone" />
                    <x-form.text name="form_subject" :text="$edit->form_subject" />
                    <x-form.text name="form_message" :text="$edit->form_message" />
                    <x-form.text name="form_submit" :text="$edit->form_submit" />

                    <x-form.fa-select name="sidebar_map_i_class" :icons="$icons" :selected="$edit->sidebar_map_i_class" />
                    <x-form.text name="sidebar_map_canvas_address" :text="$edit->sidebar_map_canvas_address" />

                    <x-form.text name="sidebar_info_li1_a_href" :text="$edit->sidebar_info_li1_a_href" />
                    <x-form.fa-select name="sidebar_info_li1_i_class" :icons="$icons" :selected="$edit->sidebar_info_li1_i_class" />
                    <x-form.text name="sidebar_info_li1_text" :text="$edit->sidebar_info_li1_text" />

                    <x-form.text name="sidebar_info_li2_a_href" :text="$edit->sidebar_info_li2_a_href" />
                    <x-form.fa-select name="sidebar_info_li2_i_class" :icons="$icons" :selected="$edit->sidebar_info_li2_i_class" />
                    <x-form.text name="sidebar_info_li2_text" :text="$edit->sidebar_info_li2_text" />

                    <x-form.text name="sidebar_info_li3_a_href" :text="$edit->sidebar_info_li3_a_href" />
                    <x-form.fa-select name="sidebar_info_li3_i_class" :icons="$icons" :selected="$edit->sidebar_info_li3_i_class" />
                    <x-form.text name="sidebar_info_li3_text" :text="$edit->sidebar_info_li3_text" />

                    <x-form.text name="sidebar_info_li4_a_href" :text="$edit->sidebar_info_li4_a_href" />
                    <x-form.fa-select name="sidebar_info_li4_i_class" :icons="$icons" :selected="$edit->sidebar_info_li4_i_class" />
                    <x-form.text name="sidebar_info_li4_text" :text="$edit->sidebar_info_li4_text" />

                    <x-form.text name="sidebar_info_li5_a_href" :text="$edit->sidebar_info_li5_a_href" />
                    <x-form.fa-select name="sidebar_info_li5_i_class" :icons="$icons" :selected="$edit->sidebar_info_li5_i_class" />
                    <x-form.text name="sidebar_info_li5_text" :text="$edit->sidebar_info_li5_text" />

                    <x-form.text name="sidebar_social_facebook_title" :text="$edit->sidebar_social_facebook_title" />
                    <x-form.text name="sidebar_social_facebook_href" :text="$edit->sidebar_social_facebook_href" />
                    <x-form.fa-select name="sidebar_social_facebook_i_class" :icons="$icons" :selected="$edit->sidebar_social_facebook_i_class" />

                    <x-form.text name="sidebar_social_twitter_title" :text="$edit->sidebar_social_twitter_title" />
                    <x-form.text name="sidebar_social_twitter_href" :text="$edit->sidebar_social_twitter_href" />
                    <x-form.fa-select name="sidebar_social_twitter_i_class" :icons="$icons" :selected="$edit->sidebar_social_twitter_i_class" />

                    <x-form.text name="sidebar_social_googleplus_title" :text="$edit->sidebar_social_googleplus_title" />
                    <x-form.text name="sidebar_social_googleplus_href" :text="$edit->sidebar_social_googleplus_href" />
                    <x-form.fa-select name="sidebar_social_googleplus_i_class" :icons="$icons" :selected="$edit->sidebar_social_googleplus_i_class" />

                    <x-form.text name="sidebar_social_pinterest_title" :text="$edit->sidebar_social_pinterest_title" />
                    <x-form.text name="sidebar_social_pinterest_href" :text="$edit->sidebar_social_pinterest_href" />
                    <x-form.fa-select name="sidebar_social_pinterest_i_class" :icons="$icons" :selected="$edit->sidebar_social_pinterest_i_class" />

                    <x-form.text name="sidebar_social_linkedin_title" :text="$edit->sidebar_social_linkedin_title" />
                    <x-form.text name="sidebar_social_linkedin_href" :text="$edit->sidebar_social_linkedin_href" />
                    <x-form.fa-select name="sidebar_social_linkedin_i_class" :icons="$icons" :selected="$edit->sidebar_social_linkedin_i_class" />

                    <x-form.text name="sidebar_social_youtube_title" :text="$edit->sidebar_social_youtube_title" />
                    <x-form.text name="sidebar_social_youtube_href" :text="$edit->sidebar_social_youtube_href" />
                    <x-form.fa-select name="sidebar_social_youtube_i_class" :icons="$icons" :selected="$edit->sidebar_social_youtube_i_class" />

                    <x-form.text name="sidebar_social_tripadvisor_title" :text="$edit->sidebar_social_tripadvisor_title" />
                    <x-form.text name="sidebar_social_tripadvisor_href" :text="$edit->sidebar_social_tripadvisor_href" />
                    <x-form.fa-select name="sidebar_social_tripadvisor_i_class" :icons="$icons" :selected="$edit->sidebar_social_tripadvisor_i_class" />

                </x-form.form>
                {{--
                <x-form.checkbox name="" title="" label="" label-subtitle="" />

                <x-form.select title="" selected="" :options="" />

                <x-form.fa-select name="" title="" :icons="$icons" selected />

                <x-form.text name="" title="" placeholder="" :text="" />

                <x-form.textarea name="" title="" placeholder="" :text="" description="" />

                <x-form.upload name="" title="" />
                --}}
            </section>

        </div>
    </div>

</x-app-layout>