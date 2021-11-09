<x-app-layout>
    <x-slot name="header">

        <div class="flex w-full items-center justify-between">

            
            <div class="flex items-center space-x-12">
                <a href="{{ url()->previous() }}" class="px-6 py-1 bg-himaraGold-500 hover:bg-himaraGold-400 shadow">
                  <svg version="1.1" id="Layer_1" class="fill-current text-white w-7" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492"
                    style="enable-background:new 0 0 550 492;" xml:space="preserve">
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
                Home
            </h2>
        </div>

        <div class="hidden lg:flex items-center space-x-4">

          <a href="#homeSlider" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
            Sliders
          </a>
  
          <a href="#homeProviders" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
            Providers
          </a>
  
          <a href="#homeServices" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
            Services
          </a>
  
          <a href="#homeTestimonial" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
            Testimonial
          </a>
  
          <a href="#homeRestaurant" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
            Restaurant
          </a>
  
        </div>

        <div class="flex items-center space-x-4">
            <a href="/dashboard/home/index-static" class="px-6 py-3 mr-2 ml-3 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Static content</a>
        </div>

    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <section id="homeSlider">

                <div class="flex justify-between items-center">
                    <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                        Revolution Slider Elements
                    </h3>
                    <a href="/dashboard/home/slider/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add slide</a>
                </div>

                <x-description.description 
                  image-path="/images/slider/"
                  :columns="collect($sliders->first())->keys()" 
                  title='First Slide' 
                  subtitle='Description' 
                  :data-tables="collect($sliders->take(1))" 
                  edit-uri="/dashboard/home/slider/" 
                />

                <x-description.description 
                  image-path="/images/slider/"
                  :columns="collect(['id', 'mainImage_img', 'layer1_text', 'layer2_text', 'order'])" 
                  title='Second Slide'  
                  subtitle='Description'  
                  :data-tables="collect($sliders->skip(1)->take(1))" 
                  edit-uri="/dashboard/home/slider/" 
                />

                <x-description.description 
                  image-path="/images/slider/"
                  :columns="collect(['id', 'mainImage_img', 'layer1_text', 'layer2_text', 'order'])" 
                  title='third Slide' 
                  subtitle='Description'  
                  :data-tables="collect($sliders->skip(2)->take(1))" 
                  edit-uri="/dashboard/home/slider/" 
                />

                @if($sliders->count() > 3)
                  <x-table.table 
                  image-path="/images/slider/"
                  :columns="collect(['mainImage_img', 'layer1_text', 'layer2_text', 'order', '', ''])" 
                  crud-uri="/dashboard/home/slider/" 
                  :data-tables="collect($sliders->skip(3)) " 
                  numberHeadActions="" 
                  />
                
                @endif

            </section>

            <section id="homeProviders">

                <div class="flex justify-between items-center">
                    <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                        About Provider Elements
                    </h3>
                    <a href="/dashboard/home/provider/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add provider</a>
                </div>
                
                <x-table.table 
                    image-path="/images/providers"
                    :columns="collect($providers->first())->keys()" 
                    crud-uri="/dashboard/home/provider" 
                    :data-tables="$providers" 
                    numberHeadActions="2"
                    show=""
                />

            </section>

            <section id="homeServices">

                <div class="flex justify-between items-center">
                    <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                        Service Elements
                    </h3>
                    <a href="/dashboard/home/service/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add service</a>
                </div>
                
                <x-table.table 
                    image-path="/images/services"
                    :columns="collect($services->first())->keys()" 
                    crud-uri="/dashboard/home/service" 
                    :data-tables="$services" 
                    numberHeadActions=""
                />

            </section>

            <section id="homeTestimonial">

                <div class="flex justify-between items-center">
                    <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                        Testimonial Elements
                    </h3>
                    <a href="/dashboard/home/testimonial/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add testimonial</a>
                </div>
                
                <x-table.table 
                    image-path="/images/users"
                    :columns="collect($testimonials->first())->keys()" 
                    crud-uri="/dashboard/home/testimonial"  
                    :data-tables="$testimonials" 
                    numberHeadActions="" 
                />

            </section>

            <section id="homeRestaurant">

                <div class="flex justify-between items-center">
                    <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                        Restaurant Elements
                    </h3>
                    <a href="/dashboard/home/restaurant/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add meal</a>
                </div>
                
                <x-table.table 
                    image-path="/images/restaurant"
                    :columns="collect($restaurants->first())->keys()" 
                    crud-uri="/dashboard/home/restaurant" 
                    :data-tables="$restaurants"  
                    numberHeadActions="2"
                    show="" 
                />

            </section>
        </div>
    </div>
</x-app-layout>