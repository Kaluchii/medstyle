@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $services->seo_description_field, 'meta_keywords' => $services->seo_keywords_field])
    <?php $title = $services->page_title_field ?>
    <section class="content-wrap" data-page="services">
        <div class="services-page" style="background: url('/img/molecula.jpg') no-repeat right top;">
            <div class="services-page__content-wrap">
                <h1 class="services-page__block-title">{{$services->title_field}}</h1>
                <div class="test-block">
                    <p class="test-block__text">Чтобы помочь вам с выбором процедуры, мы разработали несложный тест</p>
                    <a href="/age" onClick="ga('send','event','Button','Click','Uslugi');" class="test-block__button">Пройти тест</a>
                </div>
                <div class="services-page__category-list trowelling-block">
                    <?php $i = 0 ?>
                    @foreach($category as $item_category)
                        @if( $i == 0 or $i == 1 or $i == 3 ) <ul class="trowelling-block__list trowelling-block__list--services vertical-list"> @endif
                            <li class="vertical-list__item category-item @if( $i > 2 ) movable @endif">
                                <h3 class="category-item__title" id="{{$item_category->category_title_field}}">{{$item_category->category_title_field}}</h3>
                                <ul class="category-item__services-list strings-list">
                                    @foreach($item_category->services_group as $item_service)
                                        @if($item_service->slug_field != 'диспорт')
                                            <li class="strings-list__item"><a href="/service/{{$item_service->slug_field}}" class="strings-list__link pink-link">{{$item_service->name_field}}</a><span class="strings-list__stock">{{$item_service->discount_field}}</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @if( $i == 0 or $i == 2 or $i == 5 ) </ul> @endif
                        <?php $i++ ?>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection