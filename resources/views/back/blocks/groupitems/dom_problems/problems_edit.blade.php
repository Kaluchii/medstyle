@extends('back.layout')
@section('content')
    <?php $title = 'Причины обращения — ' . $item_problems->name_field?>
    <div class="block">
        <li class="group_item" data-item-id="{{$item_problems->id_field}}">
            <div class="block">
                <label>Тайтл страницы
                    <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_problems"
                           data-group="problems" class="input group_field" value="{{$item_problems->page_title_field}}"
                           data-item-id="{{$item_problems->id_field}}" placeholder="Строка">
                </label>
            </div>
            <div class="block">
                <label>Описание страницы (максимум 160 символов)
                    <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_problems"
                           data-group="problems" class="input group_field" value="{{$item_problems->seo_description_field}}"
                           data-item-id="{{$item_problems->id_field}}" placeholder="Строка">
                </label>
            </div>
            <div class="block">
                <label>Ключевые слова
                    <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_problems"
                           data-group="problems" class="input group_field" value="{{$item_problems->seo_keywords_field}}"
                           data-item-id="{{$item_problems->id_field}}" placeholder="Строка">
                </label>
            </div>
            <div class="block">
                <label>Название
                    <input type="text" data-field-type="string" data-field-name="name" data-block="dom_problems"
                           data-group="problems" class="input group_field" value="{{$item_problems->name_field}}"
                           data-item-id="{{$item_problems->id_field}}" placeholder="Строка">
                </label>
            </div>
            <div class="block">
                <label>Вид ссылки в адресной строке
                    <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_problems"
                           data-group="problems" class="input group_pre_field" value="{{$item_problems->slug_field}}"
                           data-item-id="{{$item_problems->id_field}}" placeholder="Строка">
                </label>
            </div>
            <div class="block">
                <label>Текст статьи
                <textarea data-field-type="text" data-field-name="text" data-block="dom_problems" data-group="problems"
                          class="input group_field" data-item-id="{{$item_problems->id_field}}"
                          placeholder="Текст">{{$item_problems->text_field}}</textarea>
                </label>
            </div>
            <div class="block buttons">
                <button type="button" class="any_save big" data-block="dom_problems" data-group="problems"
                        data-entity="groupitem" data-item-id="{{$item_problems->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </li>
    </div>
@endsection