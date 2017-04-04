@extends('front.layout')
@include('front.technology.menu')
@section('content')
@include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <article class="content">
        <div class="content-head">
            <h1 class="content-head-title spec">{{$static->title_field}}</h1>
            <div class="grid grid-pad head-grid">
                <div class="col-1-2 text-block">
                        {!! $static->descriptions_field !!}
                </div>
                <div class="col-1-2">
                    @if($tech->count() > 0)
                    <div class="from-life-block">
                        <a href="#technologyc-cert" class="techno">
                            <div class="from-life-photo"><img src="/images/{{$static->background_image->primary_link}}" alt="" class="techno"></div>
                            <p class="text-from"><span>Сертификаты оборудования</span></p>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="grid grid-pad technology">
            @foreach($dom->technologys_group as $item)
                <div class="col-1-2">
                    <a href="/technology/{{$item->slug_field}}" class="technology-link">
                        <div class="technology-block">
                            <div class="img">
                                <div class="technology-wrap">
                                    <p class="technology-title">{{$item->name_field}}</p>

                                    <p class="technology-text">{!!  $item->desrc_0_field !!}</p>
                                </div>
                                <img src="/images/{{$item->big_image_image->secondary_link}}" alt="" class="back">
                                <div class="img-hover"></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>

        <div class="overlay" id="techno">
            <div class="popup_table">
                <div class="popup_cell">
                    <div class="white-popup" id="technologyc-cert" data-popup="grid">
                        <h3 class="popup_title">Сертификаты</h3>
                        <div class="grid gallery-slider">
                            <?php $i = -1;?>
                            @foreach($tech as $item)
                                <div class="col-1-3">
                                    <a class="cert photo" data-id="{{$i++}}" href="/images/{{$item->cert_image->primary_link}}">
                                        <img src="/images/{{$item->cert_image->icon_link}}" alt="" class="cert">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection