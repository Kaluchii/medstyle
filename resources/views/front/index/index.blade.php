@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static_index_page->seo_description_field, 'meta_keywords' => $static_index_page->seo_keywords_field])
    <?php //$title = $static_index_page->page_title_field or 'MEDSTYLE Алматы | Клиника эстетической медецины'
    $title = $static_index_page->page_title_field; ?>
    <h1 class="index-title">Дайте нам месяц и мы&nbsp;вернем вам&nbsp;10&nbsp;лет</h1>
    <div class="head-slider">
        <div class="head-slider__list js-slick">
            <div class="head-slider__item tile-item" style="max-width: 370px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/UF.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">SMAS–лифтинг</a> лица со скидкой 20%</h3>
                <div class="tile-item__text">Лифтинг и эффективное уплотнение тканей без инъекций и операций</div>
            </div>
            <div class="head-slider__item tile-item" style="max-width: 520px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/TEOSYAL.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">Инъекционные методики</a> на препаратах Teosyal со&nbsp;скидкой&nbsp;20%</h3>
                <div class="tile-item__text">Устранение морщин и складок, коррекция формы губ и контура лица</div>
            </div>
            <div class="head-slider__item tile-item" style="max-width: 370px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/LE.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">Лазерная эпиляция</a><br> со скидкой 20%</h3>
                <div class="tile-item__text">Удаление и предотвращение роста нежелательных волос на лице и теле навсегда</div>
            </div>
            <div class="head-slider__item tile-item" style="max-width: 370px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/DNK.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">ДНК – анализ</a></h3>
                <div class="tile-item__text">Индивидуальные рекомендации исходя их потребностей вашего организма.</div>
            </div>
            <div class="head-slider__item tile-item" style="max-width: 520px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/DYS.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">Диспорт</a></h3>
                <div class="tile-item__text">Эффект выраженного лифтинга, Разглаживает мимические морщины. Лечение гипергидроза.</div>
            </div>
            <div class="head-slider__item tile-item" style="max-width: 370px;">
                <a href="/service/" class="tile-item__img-wrap">
                    <img src="/dev_images/GIA.png" alt="" class="tile-item__img">
                </a>
                <h3 class="tile-item__title"><a href="#" class="tile-item__link pink-link">Гиаплазма</a></h3>
                <div class="tile-item__text">Процедура сочетает в себе эффект плазмалифтинга и ревитализации.Сияние и увлажнение кожи лица.</div>
            </div>
        </div>
        {{--<div class="fotorama" data-auto="true" data-autoplay="7000"
             data-allowfullscreen="false"
             data-loop="true"
             data-transition="slide">
            @foreach($static_index_page->slider_group as $item)
                <div class="fotorama__link-wrap" >
                    <a href="{{$item->link_field}}" class="fotorama__page-link">
                        <img class="fotorama__desktop-img" src="/images/{{$item->desc_wrap_image->primary_link}}?{{$item->desc_wrap_image->cache_index}}" alt="">
                        <img class="fotorama__mobile-img" src="/images/{{$item->wrap_image->primary_link}}?{{$item->wrap_image->cache_index}}" alt="">
                    </a>
                </div>
            @endforeach
        </div>--}}
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
                <h2 class="video-block__title video-block__title--main-page">{{$video->title_field}}</h2>
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