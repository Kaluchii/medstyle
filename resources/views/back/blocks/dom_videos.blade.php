@extends('back.layout')
@section('content')
    <?php $title = 'Видео'?>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_videos"
                   class="input block_pre_field" value="{{$dom_videos->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Видео-файлы</label>
        <ul class="group_block group_container slider" data-block="dom_videos" data-group="videos" data-owner-id="0">
            @foreach($dom_videos->videos_group  as $item_videos)
                @include('back.blocks.groupitems.dom_videos.videos   ')
            @endforeach
        </ul>
        <button class="any_create" data-block="dom_videos" data-group="videos" data-descr="Эл. первой группы"
                data-owner-id="0">
            <span>Добавить элемент первой группы</span>
        </button>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_videos" data-entity="block"
                data-descr="">
            Сохранить
        </button>
    </div>
@endsection
