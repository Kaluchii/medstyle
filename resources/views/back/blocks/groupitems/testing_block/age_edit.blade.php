@extends('back.layout')
@section('content')
    <?php $title = 'Тестирование — ' . $item_age->age_name_field?>
    <div class="block">
        <li class="group_item" data-item-id="{{$item_age->id_field}}">
            <div class="block">
                <label>Возраст</label>
                <input type="text" data-field-type="string" data-field-name="age_name" data-block="testing_block"
                       data-group="age" class="input group_field" value="{{$item_age->age_name_field}}"
                       data-item-id="{{$item_age->id_field}}" placeholder="Строка">
            </div>
            <div class="block">
                <label>Возраст</label>
                <input type="text" data-field-type="string" data-field-name="testing_title" data-block="testing_block"
                       data-group="age" class="input group_field" value="{{$item_age->testing_title_field}}"
                       data-item-id="{{$item_age->id_field}}" placeholder="Строка">
            </div>
            <div class="block">
                <label class="input-name">Вопросы и ответы</label>
                <table class="spec">
                    <thead>
                    <tr>
                        <td>Категория</td>
                        <td></td>
                        <td></td>
                        <td>Редактировать</td>
                        <td>Удалить</td>
                    </tr>
                    </thead>
                    <tbody class="group-block group_container" data-block="testing_block" data-group="anket_item"
                           data-owner-id="0">
                    @foreach($item_age->anket_item_group as $item_anket_item)
                        @include('back.blocks.groupitems.testing_block.anket_item')
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr class="bottom">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="any_create" data-block="testing_block" data-group="anket_item"
                                    data-descr="Эл. первой группы" data-owner-id="{{$item_age->id_field}}">
                                <span>Добавить вопрос</span>
                            </button>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="block buttons">
                <button type="button" class="any_save big" data-block="testing_block" data-group="age"
                        data-entity="groupitem" data-item-id="{{$item_age->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </li>
    </div>
@endsection