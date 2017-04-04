@extends('front.layout')
@include('front.services.menu')
@section('content')
@include('front.meta', ['meta_description' => $services->seo_description_field, 'meta_keywords' => $services->seo_keywords_field])
    <?php $title = $services->page_title_field ?>
    <div class="content-head" >
        <div class="head-img-wrap services-page">
            <img src="/images/{{$services->background_image->primary_link}}" alt="{{$services->background_image->alt}}" class="head-img">
        </div>
        <div class="wrapper-block">
            <h1 class="content-head-title">{{$services->title_field}}</h1>

        </div>

    </div>
    <article class="content" data-page="services">
        <div class="grid grid-pad services testing">
            {!! $services->descriptions_field !!} <p class="button"><a onClick="ga('send','event','Button','Click','Uslugi');" href="/age" class="go-to-test">Пройти тест</a></p>
        </div>
        <div class="grid grid-pad services">
            @include('front.services.category')
        </div>
        <div class="grid grid-pad">
            <div class="col-1-1 wr">
                <div class="worry">
                    <h3 class="worry-title">Что вас беспокоит?</h3>
                    <div class="worry-list">
                        <?php $j = 0?>
                        @foreach($problems as $item)
                                <div class="proc">
                                    <a href="/problems/{{$item->slug_field}}" class="proc">{{$item->name_field}}</a>
                                </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

@endsection