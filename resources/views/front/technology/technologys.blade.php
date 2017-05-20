@extends('front.layout')
@include('front.technology.menu')
@section('content')
@include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <section class="content-wrap" data-page="technologies">
        <div class="technologies">
            <h1 class="technologies__block-title">{{$static->title_field}}</h1>
            <div class="technologies__subtitle-text">{!! $static->descriptions_field !!}</div>
            <div class="technologies__list trowelling-block">
                <?php $i = 0 ?>
                @foreach($dom->technologys_group as $item)
                    @if( $i == 0 or $i == 2 or $i == 4 ) <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list"> @endif
                        <li class="vertical-list__item technologies-item @if( $i < 2 ) movable @endif">
                            <a href="/technology/{{$item->slug_field}}" class="technologies-item__link">
                                <div class="technologies-item__img-wrap">
                                    <img src="/images/{{$item->big_image_image->secondary_link}}" alt="" class="technologies-item__img">
                                </div>
                                <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->name_field}}</span></h3>
                            </a>
                            <div class="technologies-item__text">{!! $item->desrc_0_field !!}</div>
                        </li>
                        @if( $i == 1 or $i == 3 or $i == 4 ) </ul> @endif
                    <?php $i++ ?>
                        @if( $i+1 == 5 )
                            <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list">
                                <li class="vertical-list__item technologies-item technologies-item--center-align social-block">
                                    <div class="technologies-item__img-wrap">
                                        <img src="/img/stock-social.png" alt="" class="technologies-item__img">
                                    </div>
                                    <h3 class="technologies-item__title">Следите за обновлениями</h3>
                                    <p class="technologies-item__text">Мы регулярно обновляем наши аппаратные технологии и
                                        добавляем услуги. Следите за обновлениями в
                                        <a target="_blank" href="//facebook.com/medstyle.kz" class="technologies-item__link pink-link">Facebook</a> и Ваццапе по номеру
                                        <span class="no-br">+7 777 178-29-26</span>.</p>
                                </li>
                            </ul>
                        @endif
                @endforeach

                {{--<ul class="trowelling-block__list trowelling-block__list--technologies vertical-list">
                    <li class="vertical-list__item technologies-item movable">
                        <a href="#" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="/dev_images/lpg.jpg" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">LPG Cellu Endermolab (Франция)</span></h3>
                        </a>
                        <p class="technologies-item__text">Аппарат эффективен в точечной коррекции фигуры и устранении целлюлита. Процедуры повышают эластичность кожи, расщепляют локальные жировые отложения, запускают естественный лимфодренаж.</p>
                    </li>
                    <li class="vertical-list__item technologies-item movable">
                        <a href="#" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="/dev_images/trio.jpg" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">Trio XT</span></h3>
                        </a>
                        <p class="technologies-item__text">Радиочастотный аппарат TRIO за счёт гипертермии увеличивает кровоток, это не только стимулирует выработку нового коллагена, но и активизирует процессы липолиза.</p>
                    </li>
                </ul>
                <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list">
                    <li class="vertical-list__item technologies-item">
                        <a href="#" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="/dev_images/mcl.jpg" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">Лазер MCL-31 Dermablate</span></h3>
                        </a>
                        <p class="technologies-item__text">MCL-31 — самая последняя версия из семейства эрбиевых лазеров компании Asclepion Laser Technologies (Германия).</p>
                    </li>
                    <li class="vertical-list__item technologies-item">
                        <a href="#" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="/dev_images/mediostar.jpg" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">Лазер MeDioStar Next</span></h3>
                        </a>
                        <p class="technologies-item__text">Аппарат эффективен в точечной коррекции фигуры и устранении целлюлита. Процедуры повышают эластичность кожи, расщепляют локальные жировые отложения, запускают естественный лимфодренаж.</p>
                    </li>
                </ul>
                <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list">
                    <li class="vertical-list__item technologies-item">
                        <a href="#" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="/dev_images/ultraformer.jpg" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">UltraFormer</span></h3>
                        </a>
                        <p class="technologies-item__text">UltraFormer эффективно воздействует на мягкие ткани и SMAS применяя неинвазивную технологию HIFU (Highintensity Focused Ultrasound).</p>
                    </li>
                    <li class="vertical-list__item technologies-item technologies-item--center-align social-block">
                        <div class="technologies-item__img-wrap">
                            <img src="/img/stock-social.png" alt="" class="technologies-item__img">
                        </div>
                        <h3 class="technologies-item__title">Следите за обновлениями</h3>
                        <p class="technologies-item__text">Мы регулярно обновляем наши аппаратные технологии и
                            добавляем услуги. Следите за обновлениями в
                            <a target="_blank" href="//facebook.com/medstyle.kz" class="technologies-item__link pink-link">Facebook</a> и Ваццапе по номеру
                            <span class="no-br">+7 777 178-29-26</span>.</p>
                    </li>
                </ul>--}}
            </div>
        </div>
    </section>
@endsection