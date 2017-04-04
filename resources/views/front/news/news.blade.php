@extends('front.layout')
@include('front.news.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <article class="content akcii" data-page="stock">
        {{--<div class="content-head">--}}
            {{--<h1 class="content-head-title spec">{{$static->title_field}}</h1>--}}
            {{--<div class="grid grid-pad head-grid">--}}
                {{--<div class="col-1-2 text-block">--}}
                    {{--{!! $static->descriptions_field !!}--}}
                {{--</div>--}}
                {{--<div class="col-1-2">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <h1 class="content-head-title stock-title">Акции и спецпредложения</h1>

        <div class="grid grid-pad akcii flex-grid">

            <?php $i= 0;
            function str_replace_once($search, $replace, $text)
            {
                $pos = strpos($text, $search);
                return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
            }
            function wrap_in_link( $str, $slug)
            {
                $astart = '<a href=\'' . $slug . '\' class=\'link\'>';
                $aend = '</a>';
                $str = str_replace_once('#', $astart, $str);
                $str = str_replace_once('#', $aend, $str);
                return $str;
            }
            ?>
            @foreach($dom->special_offers_group as $item)
                <?php $i++; ?>
                @if($i <= 1)

                    <div class="col_1-3">
                        <div class="stock-item">
                            <a href="/service/ul-trazvukovoj-smas-lifting" class="shares-link">
                                <img src="/images/special_offers_prev_664_primary.jpg" alt="">
                            </a>
                            <h2 class="shares-name">Скидка 20% на <a href="/service/ul-trazvukovoj-smas-lifting" class="link">процедуры SMAS-лифтинга</a>
                            </h2>
                            <p class="shares-description">Новогодние скидки 15% на коррекцию зон лица, декольте и шеи с применением препарата TEOSYAL от женевской лаборатории TEOXANE.</p>
                            <p class="shares-date">Каждую субботу и воскресенье</p>
                        </div>
                        <div class="stock-item stock-social">
                            <img src="/img/stock-social.png" alt="">
                            <p class="stock-social-descr">Получайте акции через WhatApp по номеру <span class="no-br">+7 777 178-29-26</span>
                                и в&nbsp;нашем <a href="//facebook.com" class="stock-social-link">Facebook</a></p>
                        </div>
                    </div>
                    <div class="col_1-3">
                        <div class="stock-item">
                            <a href="/news/skidka-8-procentov" class="shares-link">
                                <img src="/images/special_offers_prev_663_primary.jpg" alt="">
                            </a>
                            <h2 class="shares-name">8% скидка <a href="/news/skidka-8-procentov" class="link">в первый визит</a>
                            </h2>
                            <p class="shares-description">Вступите в нашу группу в Facebook, поставьте лайк под любой публикацией и получите скидку в 8% при вашем первом посещении клиники.</p>
                            <p class="shares-date">При первом посещении</p>
                        </div>
                        <div class="stock-item">
                            <a href="/service/massazh" class="shares-link">
                                <img src="/images/special_offers_prev_165_primary.jpg" alt="">
                            </a>
                            <h2 class="shares-name"><a href="/service/massazh" class="link">Антицеллюлитный массаж</a> со скидкой 20%
                            </h2>
                            <p class="shares-description">Антицеллюлитный массаж помогает справиться с нарушением структуры подкожно-жировой клетчатки, вследствие которого ухудшается эластичность тканей, меняется цвет и рельеф кожи.</p>
                            <p class="shares-date">До 30 мая</p>
                        </div>
                    </div>
                    <div class="col_1-3 distributed">
                        <div class="stock-item">
                            <a href="/service/massazh" class="shares-link">
                                <img src="/images/special_offers_prev_165_primary.jpg" alt="">
                            </a>
                            <h2 class="shares-name"><a href="/service/massazh" class="link">Антицеллюлитный массаж</a> со скидкой 20%
                            </h2>
                            <p class="shares-description">Антицеллюлитный массаж помогает справиться с нарушением структуры подкожно-жировой клетчатки, вследствие которого ухудшается эластичность тканей, меняется цвет и рельеф кожи.</p>
                            <p class="shares-date">До 30 мая</p>
                        </div>
                    </div>

                @endif
            @endforeach


        </div>

    </article>
@endsection
