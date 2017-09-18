@extends('back.layout')
@section('content')
    <?php $title = 'Услуги — ' . $item_serv_category->category_title_field?>
    <div class="block">
        <li class="group_item" data-item-id="{{$item_serv_category->id_field}}">
            <div class="block">
                <label>Название категории</label>
                <input type="text" data-field-type="string" data-field-name="category_title" data-block="dom_services"
                       data-group="serv_category" class="input group_field"
                       value="{{$item_serv_category->category_title_field}}"
                       data-item-id="{{$item_serv_category->id_field}}"
                       placeholder="Строка">
            </div>
            {{--<div class="block">
                <label>Картинка категории</label>
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="category_pict" data-group="serv_category"
                               data-field-type="image" data-item-id="{{$item_serv_category->id_field}}"
                               data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="category_pict"
                               data-group="serv_category"
                               data-field-type="image" data-item-id="{{$item_serv_category->id_field}}"
                               data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="category_pict"
                               data-group="serv_category"
                               data-field-type="image" data-item-id="{{$item_serv_category->id_field}}"
                               data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="category_pict"
                               data-group="serv_category"
                               data-field-type="image" data-item-id="{{$item_serv_category->id_field}}"
                               data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="category_pict"
                               data-group="serv_category"
                               data-field-type="image" data-item-id="{{$item_serv_category->id_field}}"
                               data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_serv_category->category_pict_image->preview_link}}" class="preview"
                         data-field-name="category_pict" data-block="dom_services" data-group="serv_category"
                         data-item-id="{{$item_serv_category->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="category_pict" data-block="dom_services"
                               value="{{$item_serv_category->category_pict_image->alt}}"
                               data-item-id="{{$item_serv_category->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="category_pict"
                                   data-group="serv_category"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_serv_category->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_services"
                            >
                        </label>
                    </div>
                </div>
            </div>--}}
            <div class="block">
                <label>Краткое описание на главной странице</label>
                <textarea data-field-type="text" data-field-name="descr_on_main" data-block="dom_services" data-group="serv_category"
                          class="input group_field" data-item-id="{{$item_serv_category->id_field}}"
                          placeholder="Текст">{{$item_serv_category->descr_on_main_field}}</textarea>
            </div>
        </li>

        <div class="block">
            <label class="input-name">Услуги</label>

            <table class="spec">
                <thead>
                <tr>
                    <td>Название услуги</td>
                    <td></td>
                    <td></td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_services" data-group="services"
                       data-owner-id="{{$item_serv_category->id_field}}">
                @foreach($item_serv_category->services_group as $item_services)
                    @include('back.blocks.groupitems.dom_services.services')
                @endforeach
                </tbody>
                <tfoot>
                <tr class="bottom">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_services" data-group="services"
                                data-descr="Эл. первой группы" data-owner-id="{{$item_serv_category->id_field}}">
                            <span>Добавить услугу</span>
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="block buttons">
        <button type="button" class="any_save big" data-block="dom_services" data-group="serv_category"
                data-entity="groupitem" data-item-id="{{$item_serv_category->id_field}}"
                data-descr="Эл. первой группы"> Сохранить
        </button>
    </div>
@endsection