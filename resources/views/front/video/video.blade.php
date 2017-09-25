@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['meta_description' => $video->seo_description_field, 'meta_keywords' => $video->seo_keywords_field])
    <?php $title = $video->page_title_field ?>
    <section class="content-wrap">
        <div class="video-block">
            <h1 class="video-block__title">{{$video->title_field}}</h1>
            <p class="video-block__text">
                Наши видео помогут разобраться в тонкостях процедуры и понять, для кого они актуальны.
            </p>
            <ul class="video-block__list">
                @foreach($video->videos_group as $item)
                    <li class="video-block__item">
                        <div class="video-block__video-wrap">
                            <div class="video-block__video video_player"
                                 data-link="{{$item->link_field}}"
                                 data-preview="{{$item->wrap_image->primary_link}}">
                            </div>
                        </div>
                        <div class="video-block__name-wrap">
                            <p class="video-block__video-name">{{$item->name_field}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection