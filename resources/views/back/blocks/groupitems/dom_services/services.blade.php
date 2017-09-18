<tr {{$item_services->id_field}}>
    <td><a href="/services">{{$item_services->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/service/{{$item_services->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_services" data-group="services" data-entity="groupitem"
                data-item-id="{{$item_services->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>