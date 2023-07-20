{{--<!-- START homebanner -->--}}
{{--<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">--}}
{{--    <rs-module id="rev_slider_1_1" style="" data-version="6.1.3" class="rev_slider_1_1_height">--}}
{{--        <!-- rs-slides -->--}}
{{--        <rs-slides>--}}
{{--        @php $i=3 @endphp--}}
{{--            @foreach($banners as $banner)--}}

{{--                @if($i==3)--}}
{{--            <!-- rs-slide -->--}}
{{--                <rs-slide data-key="rs-1" data-title="Slide" data-thumb="{{$banner->image}}" data-anim="ei:d;eo:d;s:d;r:0;t:slidingoverlayhorizontal;sl:d;">--}}
{{--                    <img src="{{$banner->image}}" title="home-mainslider-bg001" width="1920" height="830" class="rev-slidebg" data-no-retina>>--}}
{{--                    <rs-layer--}}
{{--                        id="slider-2-slide-3-layer-2"--}}
{{--                        data-type="text"--}}
{{--                        data-rsp_ch="on"--}}
{{--                        data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m;yo:73px,73px,-20px,-4px;"--}}
{{--                        data-text="w:normal;s:60,60,47,33;l:90,90,56,34;"--}}
{{--                        data-frame_0="sX:0.8;sY:0.8;"--}}
{{--                        data-frame_1="e:Power4.easeOut;st:750;sp:1000;sR:750;"--}}
{{--                        data-frame_999="o:0;st:w;sR:7250;"--}}
{{--                        style="z-index:11;font-family:Nimbus Roman No9 L;"--}}
{{--                    ><span class="slider-heding-title-font">{{$banner->title}}</span>--}}
{{--                    </rs-layer>--}}
{{--                    <rs-layer--}}
{{--                        id="slider-2-slide-3-layer-4"--}}
{{--                        data-type="text"--}}
{{--                        data-rsp_ch="on"--}}
{{--                        data-xy="x:l,l,c,c;xo:50px,50px,0,430px;y:m;yo:132px,132px,25px,32px;"--}}
{{--                        data-text="w:normal;s:20,20,16,9;l:28,28,17,10;"--}}
{{--                        data-vbility="t,t,t,f"--}}
{{--                        data-frame_0="sX:0.8;sY:0.8;"--}}
{{--                        data-frame_1="e:Power4.easeOut;st:1020;sp:1000;sR:1020;"--}}
{{--                        data-frame_999="o:0;st:w;sR:6980;"--}}
{{--                        style="z-index:12;font-family:Poppins;"--}}
{{--                    ><span class="ttm-textcolor-skincolor">{{$banner->title}}</span>--}}
{{--                    </rs-layer>--}}
{{--                    <--}}

{{--                </rs-slide>--}}
{{--                    {{$i++}}--}}
{{--                    @else--}}
{{--                        <rs-slide data-key="rs-3" data-title="Slide" data-thumb="{{$banner->image}}"--}}
{{--                                  data-anim="ei:d;eo:d;s:d;r:0;t:slidingoverlayhorizontal;sl:d;">--}}

{{--                            <img src="{{$banner->image}}" title="home-mainslider-bg002" width="1920" height="850" class="rev-slidebg" data-no-retina>--}}

{{--                            <rs-layer--}}
{{--                                id="slider-2-slide-4-layer-4"--}}
{{--                                data-type="text"--}}
{{--                                data-rsp_ch="on"--}}
{{--                                data-xy="x:c;xo:0,0,0,430px;y:m;yo:157px,157px,52px,32px;"--}}
{{--                                data-text="w:normal;s:18,18,15,9;l:25,25,15,9;"--}}
{{--                                data-vbility="t,t,t,f"--}}
{{--                                data-frame_0="sX:0.8;sY:0.8;"--}}
{{--                                data-frame_1="e:Power4.easeOut;st:1020;sp:1000;sR:1020;"--}}
{{--                                data-frame_999="o:0;st:w;sR:6980;"--}}
{{--                                style="z-index:13;font-family:Poppins;font-style:italic;"--}}
{{--                            >{{$banner->short_details}}--}}
{{--                            </rs-layer>--}}

{{--                            <rs-layer--}}
{{--                                id="slider-2-slide-4-layer-2"--}}
{{--                                data-type="text"--}}
{{--                                data-rsp_ch="on"--}}
{{--                                data-xy="x:c;y:m;yo:98px,98px,10px,16px;"--}}
{{--                                data-text="w:normal;s:60,60,47,33;l:90,90,56,34;"--}}
{{--                                data-frame_0="sX:0.8;sY:0.8;"--}}
{{--                                data-frame_1="e:Power4.easeOut;st:750;sp:1000;sR:750;"--}}
{{--                                data-frame_999="o:0;st:w;sR:7250;"--}}
{{--                                style="z-index:11;font-family:Nimbus Roman No9 L;"--}}
{{--                            ><span class="slider-heding-title-font">{{$banner->title}} </span>--}}
{{--                            </rs-layer>--}}





{{--                        </rs-slide>--}}
{{--                        @php $i=3 @endphp--}}
{{--                    @endif--}}

{{--            <!-- rs-slide -->--}}
{{--                @endforeach--}}
{{--        </rs-slides>--}}
{{--    </rs-module><!-- rs-module -->--}}
{{--</rs-module-wrap>--}}
{{--<!-- END homebanner -->--}}

<!-- START homebanner -->
<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
    <rs-module id="rev_slider_1_1" style="" data-version="6.1.3" class="rev_slider_1_1_height">
        <!-- rs-slides -->
        <rs-slides>
            <!-- rs-slide -->
            @foreach($banners as $banner)
            <rs-slide data-key="rs-1" data-title="Slide" data-thumb="{{$banner->image}}" data-anim="ei:d;eo:d;s:d;r:0;t:slidingoverlayhorizontal;sl:d;">
                <img src="{{$banner->image}}" title="home-mainslider-bg001" width="1920" height="830" class="rev-slidebg" data-no-retina>

            </rs-slide>
            @endforeach
            <!-- rs-slide -->
        </rs-slides>

    </rs-module><!-- rs-module -->
</rs-module-wrap>
<!-- END homebanner -->
