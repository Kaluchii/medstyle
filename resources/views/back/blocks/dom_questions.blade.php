@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_questions" data-group="question" data-owner-id="0">
        @foreach($dom_questions->question_group  as $item_question)
            @include('back.blocks.groupitems.dom_questions.question   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_questions" data-group="question" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_questions" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
