@extends('front.layout')
@include('front.index.menu')
@include('front.index.full_s')
@section('content')
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
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="slide">
                        </a>
                    </li>
                @elseif($item->flag_field == 2)
                    <li class="slide-item right-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="slide">
                        </a>
                    </li>
                @elseif($item->flag_field == 3)
                    <li class="slide-item center-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="slide">
                        </a>
                    </li>
                @else
                    <li class="slide-item left-flag">
                        <a href="{{$item->link_field}}">
                            <div class="slide-text-wrap">
                                <p class="slide-title">{!! $item->slide_title_field !!}</p>
                                <p class="slide-text">{!! $item->descr_field !!}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="slide">
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="grid grid-pad testing-index-block">
        <div class="col-1-1">
            <h1 class="testing-title">Индивидуальный тест</h1>
            <p class="about-testing">Если вы не ориентируетесь в косметологии, тест поможет определить
                персональный курс актуальных процедур.</p>
            <p class="button-wrapper">
                <button class="go-to-test">Пройти тест</button>
            </p>
        </div>
    </div>
    <?php $title = $static_index_page->page_title_field ?>
    <article class="content" data-page="index">



        <h3 class="block-name">{{$video->title_field}}</h3>

        <div class="grid grid-pad video">
            @foreach($video->videos_group as $item)
                <div class="col-1-3">
                    <a href="{{$item->link_field}}" class="video-wrapper">
                        <div class="video-hover">
                            <div class="text-a-wrap">
                                <p class="video-text">{{$item->name_field}}</p>
                            </div>
                            <img src="/images/{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="video-preview">
                            <div class="play-video-button-wrap"><span class="play-video"></span></div>
                            <div class="hover"></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <h3 class="block-name">{{$special->title_field}}</h3>
        @include('front.specials_full')
        @yield('special')


    </article>
@endsection