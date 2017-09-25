@extends('back.layout')
@section('content')
    <?php $title = 'Новинки — ' . $item_news->name_field?>

        <div class="block">
            <label class="input-name">Титульное изображение для десктопов ( 1920х500 )
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="desktop_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="desktop_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="desktop_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="desktop_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="desktop_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_news->desktop_background_image->preview_link}}" class="preview"
                         data-field-name="desktop_background" data-block="dom_news" data-group="news"
                         data-item-id="{{$item_news->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="desktop_background" data-block="dom_news"
                               value="{{$item_news->desktop_background_image->alt}}"
                               data-item-id="{{$item_news->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="desktop_background"
                                   data-group="news"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_news->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_news"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>

        <div class="block">
            <label class="input-name">Титульное изображение для мобильный устройств ( 1000х500 )
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="mobile_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="mobile_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="mobile_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="mobile_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="mobile_background" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_news->mobile_background_image->preview_link}}" class="preview"
                         data-field-name="mobile_background" data-block="dom_news" data-group="news"
                         data-item-id="{{$item_news->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="mobile_background" data-block="dom_news"
                               value="{{$item_news->mobile_background_image->alt}}"
                               data-item-id="{{$item_news->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="mobile_background"
                                   data-group="news"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_news->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_news"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Картинка скидка справа ( 728x400 )
                <div class="image-load">
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="right_block" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->right_block_image->icon_link}}">
                        <input type="hidden" class="preview_link" data-field-name="right_block" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->right_block_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="right_block" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->right_block_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="right_block" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->right_block_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="right_block" data-group="news"
                               data-field-type="image" data-item-id="{{$item_news->id_field}}" data-block="dom_news"
                               value="{{$item_news->right_block_image->icon_link}}">
                    </div>
                    <img src="/images/{{$item_news->right_block_image->preview_link}}" class="preview"
                         data-field-name="right_block" data-block="dom_news" data-group="news"
                         data-item-id="{{$item_news->id_field}}">
                    <div class="image-block-wrap">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               data-field-name="right_block" data-block="dom_news"
                               value="{{$item_news->right_block_image->alt}}"
                               data-item-id="{{$item_news->id_field}}">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="right_block"
                                   data-group="news"
                                   data-entity="groupitem"
                                   data-item-id="{{$item_news->id_field}}"
                                   data-field-type="image"
                                   data-block="dom_news"
                            >
                        </label>
                    </div>
                </div>
            </label>
        </div>
        <div class="block">
            <label class="input-name">Тайтл страницы
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_news"
                       data-group="news" class="input group_field" value="{{$item_news->page_title_field}}"
                       data-item-id="{{$item_news->id_field}}" placeholder="Тайтл страницы">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Описание страницы (максимум 160 символов)
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_news"
                       data-group="news" class="input group_field" value="{{$item_news->seo_description_field}}"
                       data-item-id="{{$item_news->id_field}}" placeholder="Тайтл страницы">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Ключевые слова
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_news"
                       data-group="news" class="input group_field" value="{{$item_news->seo_keywords_field}}"
                       data-item-id="{{$item_news->id_field}}" placeholder="Тайтл страницы">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Название
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_news"
                       data-group="news" class="input group_field" value="{{$item_news->name_field}}"
                       data-item-id="{{$item_news->id_field}}" placeholder="Строка">
            </label>
        </div>
        <div class="block">
            <label class="input-name">Вид ссылки в адресной строке
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_news"
                       data-group="news" class="input group_pre_field" value="{{$item_news->slug_field}}"
                       data-item-id="{{$item_news->id_field}}" placeholder="Строка">
            </label>
        </div>

        <div class="block">
            <label class="checkbox-label"><input type="checkbox" data-field-name="is_white" data-field-type="bool"
                                                 data-block="dom_news" data-group="news" class="input group_field"
                                                 data-item-id="{{$item_news->id_field}}"
                                                 @if($item_news->is_white_field) checked="checked" @endif >Белый
                заголовок</label>
        </div>

        <div class="block">
            <label class="input-name">Описание акции
                <textarea data-field-type="text" data-field-name="content" data-block="dom_news" data-group="news"
                          class="input group_field" data-item-id="{{$item_news->id_field}}"
                          placeholder="Текст">{{$item_news->content_field}}</textarea>
            </label>
        </div>





        <div class="block">
            <label class="input-name">Скидка действует на процедуры:</label>
            <ul class="group_container" data-block="dom_news" data-group="service_sale"
                data-owner-id="{{$item_news->id_field}}">
                @foreach($item_news->service_sale_group as $item_service_sale)
                    @include('back.blocks.groupitems.dom_news.service_sale')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_news" data-group="service_sale"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_news->id_field}}">
                <span>Добавить процедуру</span>
            </button>
        </div>


        <div class="block buttons">
            <button type="button" class="any_save big" data-block="dom_news" data-group="news"
                    data-entity="groupitem"
                    data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>

@endsection
