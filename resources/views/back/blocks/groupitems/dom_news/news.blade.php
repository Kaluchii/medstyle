<tr {{$item_news->id_field}}>
    <td><a href="/news/">{{$item_news->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/news/{{$item_news->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_news" data-group="news" data-entity="groupitem"
                data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>