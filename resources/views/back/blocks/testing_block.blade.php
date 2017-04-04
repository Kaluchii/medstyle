@extends('back.layout')
@section('content')
    <?php $title = 'Тестирование'?>
        <div class="block">
            <label class="input-name">Категории тестирования</label>
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
                <tbody class="group-block group_container" data-block="testing_block" data-group="age"
                       data-owner-id="0">
                @foreach($testing_block->age_group as $item_age)
                    @include('back.blocks.groupitems.testing_block.age')
                @endforeach
                </tbody>
                <tfoot>
                <tr class="bottom">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="testing_block" data-group="age"
                                data-descr="Эл. первой группы" data-owner-id="0">
                            Добавить категорию
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>

@endsection
