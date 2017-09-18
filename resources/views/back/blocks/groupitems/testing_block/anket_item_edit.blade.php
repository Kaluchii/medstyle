@extends('back.layout')
@section('content')
    <?php $title = 'Тестирование — Вопрос'?>
    <div class="block">
        <li class="group_item" data-item-id="{{$item_anket_item->id_field}}">

            <div class="block">
                <label>Название вопроса</label>
                <input type="text" data-field-type="string" data-field-name="question_name" data-block="testing_block"
                       data-group="anket_item" class="input group_field" value="{{$item_anket_item->question_name_field}}"
                       data-item-id="{{$item_anket_item->id_field}}" placeholder="Строка">
            </div>

            <div class="block">
                <label>Вопрос</label>
                <input type="text" data-field-type="string" data-field-name="question_text" data-block="testing_block"
                       data-group="anket_item" class="input group_field" value="{{$item_anket_item->question_text_field}}"
                       data-item-id="{{$item_anket_item->id_field}}" placeholder="Строка">
            </div>


            <div class="block">
                <label>Ответ</label>
                <textarea  data-field-type="text" data-field-name="question_answer_text" data-block="testing_block"
                       data-group="anket_item" class="input group_field"
                       data-item-id="{{$item_anket_item->id_field}}" placeholder="Строка">{{$item_anket_item->question_answer_text_field}}</textarea>
            </div>




            <label class="input-name">Услуга</label>
            <ul class="group_block group_container slider" data-block="testing_block" data-group="recommend"
                data-owner-id="{{$item_anket_item->id_field}}">
                @foreach($item_anket_item->recommend_group  as $item_recommend)
                    @include('back.blocks.groupitems.testing_block.recommend')
                @endforeach
            </ul>

            <button class="any_create" data-block="testing_block" data-group="recommend" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_anket_item->id_field}}">
                <span>Добавить услугу</span>
            </button>



            <div class="block buttons">
                <button type="button" class="any_save big" data-block="testing_block" data-group="anket_item"
                        data-entity="groupitem" data-item-id="{{$item_anket_item->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </li>
    </div>
@endsection