@extends('back.layout')
@section('content')
    <?php $title = 'Услуги — ' . $item_services->name_field?>
    <div class="block">
        <div class="block">
            <label>Тайтл страницы</label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->page_title_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Описание страницы (максимум 160 символов)</label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->seo_description_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Ключевые слова</label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->seo_keywords_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Название услуги</label>
            <input type="text" data-field-type="string" data-field-name="name" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->name_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Вид ссылки в адресной строке</label>
            <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_services"
                   data-group="services" class="input group_pre_field" value="{{$item_services->slug_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Фон обложки (1980×370 пикселей)</label>
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->background_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->background_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->background_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->background_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->background_image->icon_link}}">
                </div>
                <img src="/images/{{$item_services->background_image->preview_link}}" class="preview"
                     data-field-name="background" data-block="dom_services" data-group="services"
                     data-item-id="{{$item_services->id_field}}">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           data-field-name="background" data-block="dom_services"
                           value="{{$item_services->background_image->alt}}"
                           data-item-id="{{$item_services->id_field}}">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="background"
                               data-group="services"
                               data-entity="groupitem"
                               data-item-id="{{$item_services->id_field}}"
                               data-field-type="image"
                               data-block="dom_services"
                        >
                    </label>
                </div>
            </div>
        </div>
        <div class="block">
            <label>Обложка (600x370 пикселей)</label>
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="over_background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->over_background_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="over_background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->over_background_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="over_background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->over_background_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="over_background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->over_background_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="over_background" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->over_background_image->icon_link}}">
                </div>
                <img src="/images/{{$item_services->over_background_image->preview_link}}" class="preview"
                     data-field-name="over_background" data-block="dom_services" data-group="services"
                     data-item-id="{{$item_services->id_field}}">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           data-field-name="over_background" data-block="dom_services"
                           value="{{$item_services->over_background_image->alt}}"
                           data-item-id="{{$item_services->id_field}}">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="over_background"
                               data-group="services"
                               data-entity="groupitem"
                               data-item-id="{{$item_services->id_field}}"
                               data-field-type="image"
                               data-block="dom_services"
                        >
                    </label>
                </div>
            </div>
        </div>
        <div class="block">
            <label>Описание акции на странице услуги</label>
            <input type="text" data-field-type="string" data-field-name="discount" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->discount_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Описание акции на общей странице услуг</label>
            <input type="text" data-field-type="string" data-field-name="discount_comment" data-block="dom_services"
                   data-group="services" class="input group_field" value="{{$item_services->discount_comment_field}}"
                   data-item-id="{{$item_services->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label class="checkbox-label">
                <input type="checkbox" data-field-name="is_white" data-field-type="bool" data-block="dom_services"
                       data-group="services" class="input group_field" data-item-id="{{$item_services->id_field}}"
                       @if($item_services->is_white_field) checked="checked" @endif >
                Белый заголовок</label>
        </div>
        <div class="block">
            <label>Первый абзац</label>
            <textarea data-field-type="text" data-field-name="descr_1" data-block="dom_services" data-group="services"
                      class="input group_field" data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->descr_1_field}}</textarea>
        </div>
        <div class="block">
            <label>Второй абзац</label>
            <textarea data-field-type="text" data-field-name="descr_2" data-block="dom_services" data-group="services"
                      class="input group_field" data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->descr_2_field}}</textarea>
        </div>
        <div class="block">
            <label>Большое фото</label>
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="big_pict" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->big_pict_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="big_pict" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->big_pict_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="big_pict" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->big_pict_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="big_pict" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->big_pict_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="big_pict" data-group="services"
                           data-field-type="image" data-item-id="{{$item_services->id_field}}" data-block="dom_services"
                           value="{{$item_services->big_pict_image->icon_link}}">
                </div>
                <img src="/images/{{$item_services->big_pict_image->preview_link}}" class="preview"
                     data-field-name="big_pict" data-block="dom_services" data-group="services"
                     data-item-id="{{$item_services->id_field}}">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           data-field-name="big_pict" data-block="dom_services"
                           value="{{$item_services->big_pict_image->alt}}" data-item-id="{{$item_services->id_field}}">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="big_pict"
                               data-group="services"
                               data-entity="groupitem"
                               data-item-id="{{$item_services->id_field}}"
                               data-field-type="image"
                               data-block="dom_services"
                        >
                    </label>
                </div>
            </div>
        </div>
        <div class="block">
            <label>Третий абзац</label>
            <textarea data-field-type="text" data-field-name="descr_3" data-block="dom_services" data-group="services"
                      class="input group_field " data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->descr_3_field}}</textarea>
        </div>
        <div class="block">
            <label>Блок справа 1(знаменитость + описание)</label>
            <textarea data-field-type="text" data-field-name="right_side_1" data-block="dom_services"
                      data-group="services" class="input group_field" data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->right_side_1_field}}</textarea>
        </div>
        <div class="block">
            <label>Блок справа 2</label>
            <textarea data-field-type="text" data-field-name="right_side_2" data-block="dom_services"
                      data-group="services" class="input group_field" data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->right_side_2_field}}</textarea>
        </div>
        <div class="block">
            <label>Блок справа 3 </label>
            <textarea data-field-type="text" data-field-name="right_side_3" data-block="dom_services"
                      data-group="services" class="input group_field" data-item-id="{{$item_services->id_field}}"
                      placeholder="Текст">{{$item_services->right_side_3_field}}</textarea>
        </div>
        <div class="block">
            <label class="input-name">Слайдер</label>
            <ul class="group_container slider" data-block="dom_services" data-group="serv_slider"
                data-owner-id="{{$item_services->id_field}}">
                @foreach($item_services->serv_slider_group as $item_serv_slider)
                    @include('back.blocks.groupitems.dom_services.serv_slider')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_services" data-group="serv_slider"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_services->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>

        <div class="block">
            <label class="input-name">Показания</label>
            <ul class="group_container" data-block="dom_services" data-group="serv_pokazania"
                data-owner-id="{{$item_services->id_field}}">
                @foreach($item_services->serv_pokazania_group as $item_serv_pokazania)
                    @include('back.blocks.groupitems.dom_services.serv_pokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_services" data-group="serv_pokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_services->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>

        <div class="block">
            <label class="input-name">Противопоказания</label>
            <ul class="group_container" data-block="dom_services" data-group="serv_protivopokazania"
                data-owner-id="{{$item_services->id_field}}">
                @foreach($item_services->serv_protivopokazania_group as $item_serv_protivopokazania)
                    @include('back.blocks.groupitems.dom_services.serv_protivopokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_services" data-group="serv_protivopokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_services->id_field}}">
                <span>Добавить противопоказания</span>
            </button>
        </div>

        <div class="block">
            <label class="input-name">После процедуры</label>
            <ul class="group_container" data-block="dom_services" data-group="serv_after_proc"
                data-owner-id="{{$item_services->id_field}}">
                @foreach($item_services->serv_after_proc_group as $item_serv_after_proc)
                    @include('back.blocks.groupitems.dom_services.serv_after_proc')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_services" data-group="serv_after_proc"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_services->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>

        <div class="block">
            <label class="input-name">Эффект усиливают</label>
            <ul class="group_container" data-block="dom_services" data-group="serv_effect_up"
                data-owner-id="{{$item_services->id_field}}">
                @foreach($item_services->serv_effect_up_group as $item_serv_effect_up)
                    @include('back.blocks.groupitems.dom_services.serv_effect_up')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_services" data-group="serv_effect_up"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_services->id_field}}">
                Добавить процедуру
            </button>
        </div>


        <div class="block buttons">
            <button type="button" class="any_save big" data-block="dom_services" data-group="services"
                    data-entity="groupitem" data-item-id="{{$item_services->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
        </li>
    </div>
@endsection