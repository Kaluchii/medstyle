@extends('front.layout')
@include('front.services.menu')
@section('content')
@include('front.meta', ['meta_description' => $services->seo_description_field, 'meta_keywords' => $services->seo_keywords_field])
    <?php $title = $services->page_title_field ?>
    <section class="content-wrap" data-page="services">
        {{--<div class="grid grid-pad services testing">
            {!! $services->descriptions_field !!} <p class="button"><a onClick="ga('send','event','Button','Click','Uslugi');" href="/age" class="go-to-test">Пройти тест</a></p>
        </div>--}}
        <div class="services-page">
            <div class="services-page__content-wrap">
                <h1 class="services-page__block-title">УСЛУГИ</h1>
                <div class="test-block">
                    <p class="test-block__text">Чтобы помочь вам с выбором процедуры, мы разработали несложный тест</p>
                    <a href="/age" onClick="ga('send','event','Button','Click','Uslugi');" class="test-block__button">Пройти тест</a>
                </div>
                <div class="services-page__category-list trowelling-block">
                    <ul class="trowelling-block__list trowelling-block__list--services vertical-list">
                        <li class="vertical-list__item category-item">
                            <h3 class="category-item__title" id="Инъекционные методики" {{--id="{{$item_category->category_title_field}}"--}}>Инъекционные методики</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">3D-лифтинг</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоармирование</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Plasmolifting крем</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Биоревитализация</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="trowelling-block__list trowelling-block__list--services vertical-list">
                        <li class="vertical-list__item category-item">
                            <h3 class="category-item__title" id="Нитевые подтяжки">Нитевые подтяжки</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a><span class="strings-list__stock">Акция</span></li>
                            </ul>
                        </li>
                        <li class="vertical-list__item category-item">
                            <h3 class="category-item__title" id="Пилинги и уход за кожей">Пилинги и уход за кожей</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                            </ul>
                        </li>
                        <li class="vertical-list__item category-item">
                            <h3 class="category-item__title" id="Уход за телом">Уход за телом</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="trowelling-block__list trowelling-block__list--services vertical-list">
                        <li class="vertical-list__item category-item movable">
                            <h3 class="category-item__title" id="Аппаратные методики">Аппаратные методики</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a><span class="strings-list__stock">Акция</span></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                            </ul>
                        </li>
                        <li class="vertical-list__item category-item movable">
                            <h3 class="category-item__title" id="Дерматология">Дерматология</h3>
                            <ul class="category-item__services-list strings-list">
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                                <li class="strings-list__item"><a href="#" class="strings-list__link pink-link">Контурная пластика</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection