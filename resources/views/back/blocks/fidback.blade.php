@extends('back.layout')
@section('content')
    <?php $title = 'Обратная связь'?>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">Email получателя
            </label>
            <input type="text" data-field-type="string" data-field-name="mail_rec" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_rec_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">Email отправителя (скорей всего убрать)
            </label>
            <input type="text" data-field-type="string" data-field-name="mail_username" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_username_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">Название сайта
            </label>
            <input type="text" data-field-type="string" data-field-name="site_name" data-block="fidback"
                   class="input block_field" value="{{$fidback->site_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">Вопрос
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="questions" data-owner-id="0">
                @foreach($fidback->questions_group as $item_questions )
                    @include('back.blocks.groupitems.fidback.questions')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="questions" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap ">
            <label class="input-file">Ответ
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="consultation" data-owner-id="0">
                @foreach($fidback->consultation_group as $item_consultation )
                    @include('back.blocks.groupitems.fidback.consultation')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="consultation" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection