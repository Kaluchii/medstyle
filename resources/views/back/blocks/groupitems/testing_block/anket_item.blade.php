<tr {{$item_anket_item->id_field}}>
    <td>{{$item_anket_item->question_name_field}}</td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/test/{{$item_anket_item->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="testing_block" data-group="anket_item" data-entity="groupitem"
                data-item-id="{{$item_anket_item->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>