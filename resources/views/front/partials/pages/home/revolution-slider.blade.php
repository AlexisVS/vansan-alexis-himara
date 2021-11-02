{{-- // pour faire le slider le mieux est de ne pas faire de foreach sur les 3 première et que si il y en a plus en
rajouter
// faire la table en sorte que toute les slides puisse rentrer dans les colonne quitte a laisser des columns vides

//slide n°1
// mainImage_img | layer1-text | layer2-text | layer3-href | layer3-i-class | layer3-text | layer4-href | layer4-i-class
|
layer4-text | layer5-i-class | layer6-text
//slide n°2
// mainImage_img | layer1-text | layer2-text
//slide n°3
// mainImage_img | layer1-text | layer2-text --}}
<div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
  <ul>
    <!-- SLIDE NR. 1 -->
    <li data-transition="crossfade">
      <!-- MAIN IMAGE -->
      <img src="{{ asset('images/slider/' . $revolutionSliders[0]->mainImage_img) }}" alt="Image" title="Image"
        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
        class="rev-slidebg" data-no-retina="">
      <!-- LAYER NR. 1 -->
      <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
        data-responsive_offset="on" data-fontsize="['80','50','40','30']" data-lineheight="['60','50','40','30']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 5; color: #fff; font-weight: 900;">
        {{ $revolutionSliders[0]->layer1_text }}</h1>
      <!-- LAYER NR. 2 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 6; color: #fff;">{{ $revolutionSliders[0]->layer2_text }}</div>
      <!-- LAYER NR. 3 -->
      <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset=""
        data-responsive_offset="on" data-whitespace="nowrap"
        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 11;">
        <a class="btn" href="{{ $revolutionSliders[0]->layer3_href }}">
          <i class="fa {{ $revolutionSliders[0]->layer3_i_class }}"></i>{{ $revolutionSliders[0]->layer3_text }}</a>
      </div>
      <!-- LAYER NR. 4 -->
      <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset=""
        data-responsive_offset="on" data-whitespace="nowrap"
        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 11;">
        <a class="btn" href="{{ $revolutionSliders[0]->layer4_href }}">
          <i class="fa {{ $revolutionSliders[0]->layer4_i_class }}" aria-hidden="true"></i>{{
          $revolutionSliders[0]->layer4_text }}</a>
      </div>
      <!-- LAYER NR. 5 -->
      <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200" data-voffset=""
        data-responsive_offset="on" data-fontsize="['18','18','16','16']" data-lineheight="['18','18','16','16']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="color: #fff">
        <i class="fa {{ $revolutionSliders[0]->layer5_i_class }}"></i>
        <i class="fa {{ $revolutionSliders[0]->layer5_i_class }}"></i>
        <i class="fa {{ $revolutionSliders[0]->layer5_i_class }}"></i>
        <i class="fa {{ $revolutionSliders[0]->layer5_i_class }}"></i>
        <i class="fa {{ $revolutionSliders[0]->layer5_i_class }}"></i>
      </div>
      <!-- LAYER NR. 6 -->
      <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240" data-voffset=""
        data-responsive_offset="on" data-fontsize="['25','25','18','18']" data-lineheight="['25','25','18','18']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="color: #fff">
        {{ $revolutionSliders[0]->layer6_text }}
      </div>
    </li>
    <!-- SLIDE NR. 2 -->
    <li data-transition="crossfade">
      <!-- MAIN IMAGE -->
      <img src="{{ asset('images/slider/' . $revolutionSliders[1]->mainImage_img) }}" alt="Image" title="Image"
        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
        class="rev-slidebg" data-no-retina="">
      <!-- LAYER NR. 1 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
        data-responsive_offset="on" data-fontsize="['70','50','40','25']" data-lineheight="['60','50','40','25']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 5; color: #fff; font-weight: 900;">{{ $revolutionSliders[1]->layer1_text }}
      </div>
      <!-- LAYER NR. 2 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 6; color: #fff;">{{ $revolutionSliders[1]->layer2_text }}
      </div>
    </li>
    <!-- SLIDE NR. 3 -->
    <li data-transition="crossfade">
      <!-- MAIN IMAGE -->
      <img src="{{ asset('images/slider/' . $revolutionSliders[2]->mainImage_img) }}" alt="Image" title="Image"
        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
        class="rev-slidebg" data-no-retina="">
      <!-- LAYER NR. 1 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="305" data-voffset=""
        data-responsive_offset="on" data-fontsize="['80','70','60','40']" data-lineheight="['80','70','60','40']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 5; color: #fff; font-weight: 900;">{{ $revolutionSliders[2]->layer1_text }}
      </div>
      <!-- LAYER NR. 2 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 6; color: #fff;">{{ $revolutionSliders[2]->layer2_text }}
      </div>
    </li>
    @foreach ($revolutionSliders as $revolutionSlider)
    @if ($loop->iteration > 3)
    <li data-transition="crossfade">
      <!-- MAIN IMAGE -->
      <img src="{{ asset('images/slider/' . $revolutionSlider->mainImage_img) }}" alt="Image" title="Image"
        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
        class="rev-slidebg" data-no-retina="">
      <!-- LAYER NR. 1 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="305" data-voffset=""
        data-responsive_offset="on" data-fontsize="['80','70','60','40']" data-lineheight="['80','70','60','40']"
        data-whitespace="nowrap"
        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 5; color: #fff; font-weight: 900;">{{ $revolutionSlider->layer1_text }}
      </div>
      <!-- LAYER NR. 2 -->
      <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
        style="z-index: 6; color: #fff;">{{ $revolutionSlider->layer2_text }}
      </div>
    </li>
    @endif
    @endforeach
  </ul>
</div>