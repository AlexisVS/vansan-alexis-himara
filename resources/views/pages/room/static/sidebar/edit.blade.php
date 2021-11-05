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
                Static Room Sidebar
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section>

                <x-form.form action='/dashboard/room/edit-static-sidebar' method='PUT' enctype
                    title='Edition static room sidebar' subtitle="All text in your page">
                    <x-form.text name="sidebar_title" :text="$edit->sidebar_title" />
                    <x-form.text name="sidebar_form_email_placeholder" :text="$edit->sidebar_form_email_placeholder" />
                    <x-form.text name="sidebar_form_roomtype_title" :text="$edit->sidebar_form_roomtype_title" />
                    <x-form.text name="sidebar_form_roomtype_data_header" :text="$edit->sidebar_form_roomtype_data_header" />
                    <x-form.text name="sidebar_form_date_placeholder" :text="$edit->sidebar_form_date_placeholder" />
                    <x-form.text name="sidebar_form_guestspicker" :text="$edit->sidebar_form_guestspicker" />
                    <x-form.text name="sidebar_form_label1" :text="$edit->sidebar_form_label1" />
                    <x-form.text name="sidebar_form_label1_data_content" :text="$edit->sidebar_form_label1_data_content" />
                    <x-form.text name="sidebar_form_label1_data_title" :text="$edit->sidebar_form_label1_data_title" />
                    <x-form.fa-select name="sidebar_form_label1_i_class" :icons="$icons"
                        :selected="$edit->sidebar_form_label1_i_class" />
                    <x-form.text name="sidebar_form_label2" :text="$edit->sidebar_form_label2" />
                    <x-form.text name="sidebar_form_label2_data_content" :text="$edit->sidebar_form_label2_data_content" />
                    <x-form.text name="sidebar_form_label2_data_title" :text="$edit->sidebar_form_label2_data_title" />
                    <x-form.fa-select name="sidebar_form_label2_i_class" :icons="$icons"
                        :selected="$edit->sidebar_form_label2_i_class" />
                    <x-form.text name="sidebar_form_submit" :text="$edit->sidebar_form_submit" />

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