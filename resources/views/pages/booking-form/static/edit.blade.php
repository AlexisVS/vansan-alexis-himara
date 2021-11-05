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
                Static Booking form
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section>

                <x-form.form action='/dashboard/booking-form/edit-static' method='PUT' enctype title='Edition static booking form'
                    subtitle="All text in your page">
                    <x-form.upload name="page_title_bg_img" />
                    <x-form.text name="page_title_title" :text="$edit->page_title_title" />
                    <x-form.text name="page_title_text" :text="$edit->page_title_text" />
                    <x-form.text name="section_title_title" :text="$edit->section_title_title" />
                    <x-form.text name="section_title_subtitle" :text="$edit->section_title_subtitle" />
                    <x-form.textarea name="section_title_text" :text="$edit->section_title_text" />
                    <x-form.text name="section_title_not_connected" :text="$edit->section_title_not_connected" />
                    <x-form.text name="form_name_text" :text="$edit->form_name_text" />
                    <x-form.text name="form_name_placeholder" :text="$edit->form_name_placeholder" />
                    <x-form.text name="form_email_text" :text="$edit->form_email_text" />
                    <x-form.text name="form_email_placeholder" :text="$edit->form_email_placeholder" />
                    <x-form.text name="form_phone_text" :text="$edit->form_phone_text" />
                    <x-form.text name="form_phone_placeholder" :text="$edit->form_phone_placeholder" />
                    <x-form.text name="select_label" :text="$edit->select_label" />
                    <x-form.text name="select_title" :text="$edit->select_title" />
                    <x-form.text name="select_data_header" :text="$edit->select_data_header" />
                    <x-form.text name="form_check_text" :text="$edit->form_check_text" />
                    <x-form.text name="form_check_title" :text="$edit->form_check_title" />
                    <x-form.text name="form_check_data_content" :text="$edit->form_check_data_content" />
                    <x-form.fa-select name="form_check_i_class" :icons="$icons" :selected="$edit->form_check_i_class" />
                    <x-form.text name="guest_text" :text="$edit->guest_text" />
                    <x-form.text name="guest_title" :text="$edit->guest_title" />
                    <x-form.text name="guest_data_content" :text="$edit->guest_data_content" />
                    <x-form.fa-select name="guest_i_class" :icons="$icons" :selected="$edit->guest_i_class" />
                    <x-form.text name="dropdown_text" :text="$edit->dropdown_text" />
                    <x-form.text name="dropdown_adult_text" :text="$edit->dropdown_adult_text" />
                    <x-form.text name="dropdown_adult_data_content" :text="$edit->dropdown_adult_data_content" />
                    <x-form.fa-select name="dropdown_adult_i_class" :icons="$icons" :selected="$edit->dropdown_adult_i_class" />
                    <x-form.text name="dropdown_children_text" :text="$edit->dropdown_children_text" />
                    <x-form.text name="dropdown_children_data_content" :text="$edit->dropdown_children_data_content" />
                    <x-form.fa-select name="dropdown_children_i_class" :icons="$icons" :selected="$edit->dropdown_children_i_class" />
                    <x-form.text name="room_type_title" :text="$edit->room_type_title" />
                    <x-form.text name="room_type_select_title" :text="$edit->room_type_select_title" />
                    <x-form.text name="room_type_select_data_header" :text="$edit->room_type_select_data_header" />
                    <x-form.text name="room_name_title" :text="$edit->room_name_title" />
                    <x-form.text name="room_name_select_title" :text="$edit->room_name_select_title" />
                    <x-form.text name="room_name_select_data_header" :text="$edit->room_name_select_data_header" />
                    <x-form.text name="comment_title" :text="$edit->comment_title" />
                    <x-form.text name="comment_placeholder" :text="$edit->comment_placeholder" />
                    <x-form.fa-select name="submit_i_class" :icons="$icons" :selected="$edit->submit_i_class" />
                    <x-form.text name="submit_text" :text="$edit->submit_text" />
                    <x-form.text name="sidebar_title" :text="$edit->sidebar_title" />
                    <x-form.text name="sidebar_subtitle" :text="$edit->sidebar_subtitle" />
                </x-form.form>

            </section>
        </div>
    </div>

</x-app-layout>