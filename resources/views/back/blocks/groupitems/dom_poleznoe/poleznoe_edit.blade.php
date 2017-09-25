@extends('back.layout')
@section('content')
    <?php $title = 'Полезное — ' . $item_poleznoe->name_field?>
    <div class="block">
        <div class="block">
            <label>Тайтл страницы</label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_poleznoe"
                   data-group="poleznoe" class="input group_field" value="{{$item_poleznoe->page_title_field}}"
                   data-item-id="{{$item_poleznoe->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Описание страницы (максимум 160 символов)</label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_poleznoe"
                   data-group="poleznoe" class="input group_field" value="{{$item_poleznoe->seo_description_field}}"
                   data-item-id="{{$item_poleznoe->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Ключевые слова</label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_poleznoe"
                   data-group="poleznoe" class="input group_field" value="{{$item_poleznoe->seo_keywords_field}}"
                   data-item-id="{{$item_poleznoe->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Название</label>
            <input type="text" data-field-type="string" data-field-name="name" data-block="dom_poleznoe"
                   data-group="poleznoe" class="input group_field" value="{{$item_poleznoe->name_field}}"
                   data-item-id="{{$item_poleznoe->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>Вид ссылки в адресной строке</label>
            <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_poleznoe"
                   data-group="poleznoe" class="input group_pre_field" value="{{$item_poleznoe->slug_field}}"
                   data-item-id="{{$item_poleznoe->id_field}}" placeholder="Строка">
        </div>
        <div class="block">
            <label>
                <input type="checkbox" data-field-name="is_white" data-field-type="bool" data-block="dom_poleznoe"
                       data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                       @if($item_poleznoe->is_white_field) checked="checked" @endif >
                Белый заголовок</label>
        </div>
        <div class="block">
            <label class="input-name">Первый абзац
                <textarea data-field-type="text" data-field-name="descr_0" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->descr_0_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Второй абзац
                <textarea data-field-type="text" data-field-name="descr_1" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->descr_1_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Третий абзац
                <textarea data-field-type="text" data-field-name="descr_2" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->descr_2_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Четвертый абзац
                <textarea data-field-type="text" data-field-name="descr_3" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->descr_3_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 1
                <textarea data-field-type="text" data-field-name="right_side_1" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->right_side_1_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 2
                <textarea data-field-type="text" data-field-name="right_side_2" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->right_side_2_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 3
                <textarea data-field-type="text" data-field-name="right_side_3" data-block="dom_poleznoe"
                          data-group="poleznoe" class="input group_field" data-item-id="{{$item_poleznoe->id_field}}"
                          placeholder="Текст">{{$item_poleznoe->right_side_3_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Превью в списке
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="big_pict" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="big_pict" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="big_pict" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="big_pict" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="big_pict" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_poleznoe->big_pict_image->preview_link}}" class="preview"
                         data-field-name="big_pict" data-block="dom_poleznoe" data-group="poleznoe"
                         data-item-id="{{$item_poleznoe->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="big_pict" data-block="dom_poleznoe"
                               value="{{$item_poleznoe->big_pict_image->alt}}"
                               data-item-id="{{$item_poleznoe->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="big_pict"
                                   data-group="poleznoe"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_poleznoe->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_poleznoe"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Задний фон
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background"
                               data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-group="poleznoe"
                               data-field-type="image" data-item-id="{{$item_poleznoe->id_field}}"
                               data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_poleznoe->background_image->preview_link}}" class="preview"
                         data-field-name="background" data-block="dom_poleznoe" data-group="poleznoe"
                         data-item-id="{{$item_poleznoe->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="background" data-block="dom_poleznoe"
                               value="{{$item_poleznoe->background_image->alt}}"
                               data-item-id="{{$item_poleznoe->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="background"
                                   data-group="poleznoe"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_poleznoe->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_poleznoe"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Показания</label>
            <ul class="group_container" data-block="dom_poleznoe" data-group="polez_pokazania"
                data-owner-id="{{$item_poleznoe->id_field}}">
                @foreach($item_poleznoe->polez_pokazania_group as $item_polez_pokazania)
                    @include('back.blocks.groupitems.dom_poleznoe.polez_pokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_poleznoe" data-group="polez_pokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_poleznoe->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">Противопоказания</label>
            <ul class="group_container" data-block="dom_poleznoe" data-group="polez_protivopokazania"
                data-owner-id="{{$item_poleznoe->id_field}}">
                @foreach($item_poleznoe->polez_protivopokazania_group as $item_polez_protivopokazania)
                    @include('back.blocks.groupitems.dom_poleznoe.polez_protivopokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_poleznoe" data-group="polez_protivopokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_poleznoe->id_field}}">
                <span>Добавить противопоказания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">После процедуры</label>
            <ul class="group_container" data-block="dom_poleznoe" data-group="polez_after_proc"
                data-owner-id="{{$item_poleznoe->id_field}}">
                @foreach($item_poleznoe->polez_after_proc_group as $item_polez_after_proc)
                    @include('back.blocks.groupitems.dom_poleznoe.polez_after_proc')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_poleznoe" data-group="polez_after_proc"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_poleznoe->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">Эффект усиливают</label>
            <ul class="group_container" data-block="dom_poleznoe" data-group="polez_effect_up"
                data-owner-id="{{$item_poleznoe->id_field}}">
                @foreach($item_poleznoe->polez_effect_up_group as $item_polez_effect_up)
                    @include('back.blocks.groupitems.dom_poleznoe.polez_effect_up')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_poleznoe" data-group="polez_effect_up"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_poleznoe->id_field}}">
                <span>Добавить процедуру</span>
            </button>
        </div>
        <div class="block buttons">
            <button type="button" class="any_save big" data-block="dom_poleznoe" data-group="poleznoe"
                    data-entity="groupitem" data-item-id="{{$item_poleznoe->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
        </li>
    </div>
@endsection