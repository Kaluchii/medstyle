@extends('front.layout')
@include('front.index.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static_index_page->seo_description_field, 'meta_keywords' => $static_index_page->seo_keywords_field])
    <?php //$title = $static_index_page->page_title_field or 'MEDSTYLE Алматы | Клиника эстетической медецины'
    $title = $static_index_page->page_title_field; ?>
    <div class="head-slider">
        <ul class="slider">
            @foreach($static_index_page->slider_group as $item)
                @if($item->flag_field == 1)
                    <li class="slide-item left-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="#" class="slide mobile">
                            <img src="/images/{{$item->desc_wrap_image->primary_link}}" alt="#" class="slide desktop">
                        </a>
                    </li>
                @elseif($item->flag_field == 2)
                    <li class="slide-item right-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="#" class="slide mobile">
                            <img src="/images/{{$item->desc_wrap_image->primary_link}}" alt="#" class="slide desktop">
                        </a>
                    </li>
                @elseif($item->flag_field == 3)
                    <li class="slide-item center-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="#" class="slide mobile">
                            <img src="/images/{{$item->desc_wrap_image->primary_link}}" alt="#" class="slide desktop">
                        </a>
                    </li>
                @else
                    <li class="slide-item left-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="#" class="slide mobile">
                            <img src="/images/{{$item->desc_wrap_image->primary_link}}" alt="#" class="slide desktop">
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <article class="content test-1 test-2" data-page="index">
        <div class="service-proc">
            <h2 class="service-proc__title">Услуги и процедуры</h2>
            <div class="service-proc__services-category services-category">
                @foreach($serv as $item_cat)
                    <div class="services-category__services-category-item services-category-item">
                        <div class="services-category-item__wrap"><a href="/services#{{$item_cat->category_title_field}}" class="services-category-item__link-title pink-link">{{$item_cat->category_title_field}}</a>
                            <p class="services-category-item__text">{!! $item_cat->descr_on_main_field !!}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="block-shadow"><img src="/img/block_shadow.png" alt="Тень"></div>
        <div class="testing-wrap">
            <div class="grid grid-pad testing-index-block">
                <div class="col-1-1">
                    <p class="about-testing">Чтобы помочь вам с выбором процедуры, мы разработали несложный тест</p>
                    <p class="button-wrapper">
                        <a href="/age" class="go-to-test">Пройти тест</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="video-wrap">
            <h3 class="block-name">{{$video->title_field}}</h3>
            <div class="grid grid-pad video">
                <?php $count_video = 0;?>
                @foreach($video->videos_group as $item)
                    <?php $count_video++?>
                    @if($count_video <= 3)
                        <div class="col-1-3">
                            <a target="_blank" href="{{$item->link_field}}" class="video-wrapper">
                                <div class="video-hover">
                                    <img src="/images/{{$item->wrap_image->primary_link}}" alt="#"
                                         class="video-preview">
                                    <div class="play-video-button-wrap"><span class="play-video"></span></div>
                                    <div class="hover"></div>
                                </div>
                                <div class="text-a-wrap">
                                    <p class="video-text">{{$item->name_field}}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="block-shadow"><img src="/img/block_shadow.png" alt="Тень"></div>
        {{--<h3 class="block-name">{{$special->title_field}}</h3>
        @include('front.specials')
        @yield('special')--}}


    </article>
@endsection