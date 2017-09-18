@extends('back.layout')
@section('content')
    <?php $title = 'Полезное'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_poleznoe"
                   class="input block_field" value="{{$static_poleznoe->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_poleznoe"
                   class="input block_field" value="{{$static_poleznoe->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_poleznoe"
                   class="input block_field" value="{{$static_poleznoe->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_poleznoe"
                   class="input block_pre_field" value="{{$static_poleznoe->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание
            <textarea data-field-type="text" data-field-name="descriptions" data-block="static_poleznoe"
                      class="input block_field" placeholder="Текст">{{$static_poleznoe->descriptions_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Список полезного</label>

        <table class="spec">
            <thead>
            <tr>
                <td>Полезное</td>
                <td></td>
                <td></td>
                <td>Редактировать</td>
                <td>Удалить</td>
            </tr>
            </thead>
            <tbody class="group-block group_container" data-block="dom_poleznoe" data-group="poleznoe"
                   data-owner-id="0">
            @foreach($dom_poleznoe->poleznoe_group as $item_poleznoe)
                @include('back.blocks.groupitems.dom_poleznoe.poleznoe')
            @endforeach
            </tbody>
            <tfoot>
            <tr class="bottom">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="any_create" data-block="dom_poleznoe" data-group="poleznoe"
                            data-descr="Эл. первой группы" data-owner-id="0">
                        Добавить полезное
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_poleznoe" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
