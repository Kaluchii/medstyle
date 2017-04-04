@extends('back.layout')
@section('content')
    <?php $title = 'Специальные предложения'?>
    <div class="block">
        <div class="block">
            <label class="input-name">Заголовок
                <input type="text" data-field-type="string" data-field-name="title" data-block="dom_specials"
                       class="input block_pre_field" value="{{$dom_specials->title_field}}" placeholder="Заголовок">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Специальные предложения (максимум 3)</label>
            <table class="spec">
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    <td></td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group_container" data-block="dom_specials" data-group="special_offers"
                       data-owner-id="0">
                @foreach($dom_specials->special_offers_group as $item_special_offers)
                    @include('back.blocks.groupitems.dom_specials.special_offers')
                @endforeach
                </tbody>
                <tfoot>
                <tr class="bottom">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_specials" data-group="special_offers"
                                data-descr="Эл. первой группы" data-owner-id="0">
                            Добавить специальное предложение
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="block buttons">
            <button class="btn btn-primary pull-right any_save big" data-block="dom_specials" data-entity="block"
                    data-descr="">
                Сохранить
            </button>
        </div>
    </div>
@endsection
