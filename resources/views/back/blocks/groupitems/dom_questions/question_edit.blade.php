@extends('back.layout')
@section('content')
    <?php $title = 'Вопрос от ' . $item_question->question_name_field?>
    <div class="block">
        <div class="block">
            <label class="input-name">Описание страницы (максимум 160 символов)</label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_questions"
                   data-group="question" class="input group_field" value="{{$item_question->seo_description_field}}"
                   data-item-id="{{$item_question->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label class="input-name">Ключевые слова</label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_questions"
                   data-group="question" class="input group_field" value="{{$item_question->seo_keywords_field}}"
                   data-item-id="{{$item_question->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label class="input-name">Вопрос</label>
                <textarea data-field-type="text" data-field-name="question_text" data-block="dom_questions"
                          data-group="question" class="input group_field" data-item-id="{{$item_question->id_field}}"
                          placeholder="Текст">{{$item_question->question_text_field}}</textarea>
        </div>
        <div class="block">
            <label class="input-name">Имя</label>
            <input type="text" data-field-type="string" data-field-name="question_name" data-block="dom_questions"
                   data-group="question" class="input group_field" value="{{$item_question->question_name_field}}"
                   data-item-id="{{$item_question->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label class="input-name">Ответ</label>
                <textarea data-field-type="text" data-field-name="answer_text" data-block="dom_questions"
                          data-group="question" class="input group_field" data-item-id="{{$item_question->id_field}}"
                          placeholder="Текст">{{$item_question->answer_text_field}}</textarea>
        </div>
        <div class="block">
            <label class="input-name">Специалист</label>
            <select data-field-type="numb" data-field-name="spec_id" data-block="dom_questions"
                    data-group="question"
                    data-item-id="{{$item_question->id_field}}" class="input group_field">
                @foreach($spec as $item)
                    @if($item_question->spec_id_field == $item->id_field)
                        <option value="{{$item->id_field}}" selected="selected">{{$item->name_field}}</option>
                    @else
                        <option value="{{$item->id_field}}">{{$item->name_field}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="block">
            <label class="input-name">Проблема</label>
            <select data-field-type="numb" data-field-name="problem_id" data-block="dom_questions"
                    data-group="question"
                    data-item-id="{{$item_question->id_field}}" class="input group_field">
                @foreach($problem as $item)
                    @if($item_question->problem_id_field == $item->id_field)
                        <option value="{{$item->id_field}}" selected="selected">{{$item->name_field}}</option>
                    @else
                        <option value="{{$item->id_field}}">{{$item->name_field}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        </li>
    </div>
    <div class="block buttons">
        <button type="button" class="any_save big" data-block="dom_questions" data-group="question"
                data-entity="groupitem" data-item-id="{{$item_question->id_field}}"
                data-descr="Эл. первой группы"> Сохранить
        </button>
    </div>
@endsection