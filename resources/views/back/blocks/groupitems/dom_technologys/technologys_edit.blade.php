@extends('back.layout')
@section('content')
    <?php $title = 'Технологии — ' . $item_technologys->name_field?>
    <div class="block">
        <div class="block">
            <label class="input-name">Тайтл страницы
                <input type="text" data-field-type="string" data-field-name="page_title"
                       data-block="dom_technologys"
                       data-group="technologys" class="input group_field"
                       value="{{$item_technologys->page_title_field}}"
                       data-item-id="{{$item_technologys->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Описание страницы (максимум 160 символов)
                <input type="text" data-field-type="string" data-field-name="seo_description"
                       data-block="dom_technologys"
                       data-group="technologys" class="input group_field"
                       value="{{$item_technologys->seo_description_field}}"
                       data-item-id="{{$item_technologys->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Ключевые слова
                <input type="text" data-field-type="string" data-field-name="seo_keywords"
                       data-block="dom_technologys"
                       data-group="technologys" class="input group_field"
                       value="{{$item_technologys->seo_keywords_field}}"
                       data-item-id="{{$item_technologys->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Название технологии
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_technologys"
                       data-group="technologys" class="input group_field" value="{{$item_technologys->name_field}}"
                       data-item-id="{{$item_technologys->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Вид ссылки в адресной строке
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_technologys"
                       data-group="technologys" class="input group_pre_field"
                       value="{{$item_technologys->slug_field}}"
                       data-item-id="{{$item_technologys->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label><input type="checkbox" data-field-name="is_white" data-field-type="bool"
                          data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          @if($item_technologys->is_white_field) checked="checked" @endif >Белый заголовок</label>
        </div>
        <div class="block">
            <label class="input-name">Первый абзац
                <textarea data-field-type="text" data-field-name="desrc_0" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->desrc_0_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Второй абзац
                <textarea data-field-type="text" data-field-name="descr_1" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->descr_1_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Третий абзац
                <textarea data-field-type="text" data-field-name="descr_2" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->descr_2_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Четвертый абзац
                <textarea data-field-type="text" data-field-name="descr_3" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->descr_3_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 1
                <textarea data-field-type="text" data-field-name="right_side_1" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->right_side_1_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 2
                <textarea data-field-type="text" data-field-name="right_side_2" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->right_side_2_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Блок справа 3
                <textarea data-field-type="text" data-field-name="right_side_3" data-block="dom_technologys"
                          data-group="technologys" class="input group_field"
                          data-item-id="{{$item_technologys->id_field}}"
                          placeholder="Текст">{{$item_technologys->right_side_3_field}}</textarea>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Превью в списке
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="big_image" data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->big_image_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="big_image"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->big_image_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="big_image"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->big_image_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="big_image"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->big_image_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="big_image" data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->big_image_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_technologys->big_image_image->preview_link}}" class="preview"
                         data-field-name="big_image" data-block="dom_technologys" data-group="technologys"
                         data-item-id="{{$item_technologys->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_technologys->big_image_image->alt}}"
                               data-field-name="big_image"
                               data-block="dom_technologys"
                               data-item-id="{{$item_technologys->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="big_image"
                                   data-group="technologys"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_technologys->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_technologys"
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
                        <input type="hidden" class="prefix" data-field-name="background" data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->background_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background"
                               data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-group="technologys"
                               data-field-type="image" data-item-id="{{$item_technologys->id_field}}"
                               data-block="dom_technologys"
                               value="{{$item_technologys->background_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_technologys->background_image->preview_link}}" class="preview"
                         data-field-name="background" data-block="dom_technologys" data-group="technologys"
                         data-item-id="{{$item_technologys->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_technologys->background_image->alt}}"
                               data-field-name="background" data-block="dom_technologys"
                               data-item-id="{{$item_technologys->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="background"
                                   data-group="technologys"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_technologys->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_technologys"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>


        <div class="block">
            <label class="input-name">Показания</label>
            <ul class="group_container" data-block="dom_technologys" data-group="tech_pokazania"
                data-owner-id="{{$item_technologys->id_field}}">
                @foreach($item_technologys->tech_pokazania_group as $item_tech_pokazania)
                    @include('back.blocks.groupitems.dom_technologys.tech_pokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_technologys" data-group="tech_pokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_technologys->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">Противопоказания</label>
            <ul class="group_container" data-block="dom_technologys" data-group="tech_protivopokazania"
                data-owner-id="{{$item_technologys->id_field}}">
                @foreach($item_technologys->tech_protivopokazania_group as $item_tech_protivopokazania)
                    @include('back.blocks.groupitems.dom_technologys.tech_protivopokazania')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_technologys" data-group="tech_protivopokazania"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_technologys->id_field}}">
                <span>Добавить противопоказания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">После процедуры</label>
            <ul class="group_container" data-block="dom_technologys" data-group="tech_after_proc"
                data-owner-id="{{$item_technologys->id_field}}">
                @foreach($item_technologys->tech_after_proc_group as $item_tech_after_proc)
                    @include('back.blocks.groupitems.dom_technologys.tech_after_proc')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_technologys" data-group="tech_after_proc"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_technologys->id_field}}">
                <span>Добавить показания</span>
            </button>
        </div>
        <div class="block">
            <label class="input-name">Эффект усиливают</label>
            <ul class="group_container" data-block="dom_technologys" data-group="tech_effect_up"
                data-owner-id="{{$item_technologys->id_field}}">
                @foreach($item_technologys->tech_effect_up_group as $item_tech_effect_up)
                    @include('back.blocks.groupitems.dom_technologys.tech_effect_up')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_technologys" data-group="tech_effect_up"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_technologys->id_field}}">
                <span>Добавить процедуру</span>
            </button>
        </div>
        <div class="block buttons">
            <button type="button" class="any_save big" data-block="dom_technologys" data-group="technologys"
                    data-entity="groupitem"
                    data-item-id="{{$item_technologys->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
        </li>
    </div>
@endsection

