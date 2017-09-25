@extends('back.layout')
@section('content')
    <?php $title = 'Причины обращения'?>
    <div class="block">
        <label class="input-name">Причины обращения</label>
        <table class="spec">
            <thead>
            <tr>
                <td>Причина</td>
                <td></td>
                <td></td>
                <td>Редактировать</td>
                <td>Удалить</td>
            </tr>
            </thead>
            <tbody class="group-block group_container" data-block="dom_problems" data-group="problems"
                   data-owner-id="0">
            @foreach($dom_problems->problems_group  as $item_problems)
                @include('back.blocks.groupitems.dom_problems.problems   ')
            @endforeach
            </tbody>
            <tfoot>
            <tr class="bottom">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="any_create" data-block="dom_problems" data-group="problems"
                            data-descr="Эл. первой группы" data-owner-id="0">
                        Добавить причину
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
