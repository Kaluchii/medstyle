@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static_index_page->seo_description_field, 'meta_keywords' => $static_index_page->seo_keywords_field])
    <?php //$title = $static_index_page->page_title_field or 'MEDSTYLE Алматы | Клиника эстетической медецины'
    $title = $static_index_page->page_title_field; ?>
    <div class="head-slider">
        <div class="my-flipster">
            <ul class="flip-items">
                @foreach($static_index_page->slider_group as $item)
                <li class="slide-item" data-flip-title=" ">
                    <a href="{{$item->link_field}}">
                        <img src="/images/{{$item->desc_wrap_image->primary_link}}" alt="#" class="slide desktop">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
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
            <div class="video-block video-block--main-page">
                <h1 class="video-block__title">{{$video->title_field}}</h1>
                <ul class="video-block__list video-block__list--main-page">
                    <?php $count_video = 0;?>
                    @foreach($video->videos_group as $item)
                        <?php $count_video++?>
                        @if($count_video <= 3)
                            <li class="video-block__item video-block__item--main-page">
                                <div class="video-block__video-wrap">
                                    <div class="video-block__video video_player"
                                         data-link="{{$item->link_field}}"
                                         data-preview="{{$item->wrap_image->primary_link}}">
                                    </div>
                                </div>
                                <div class="video-block__name-wrap">
                                    <a href="{{$item->service_link_field}}" target="_blank" class="video-block__video-name pink-link">{{$item->name_field}}</a>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="block-shadow"><img src="/img/block_shadow.png" alt="Тень"></div>
        {{--<h3 class="block-name">{{$special->title_field}}</h3>
        @include('front.specials')
        @yield('special')--}}


    </article>
@endsection