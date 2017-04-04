@extends('back.layout')
@section('content')
    <div class="block">
        <label class="input-name">
            <input type="text" data-field-type="string" data-field-name="head_phone" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->head_phone_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">
            <input type="text" data-field-type="string" data-field-name="address" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->address_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">
            <input type="text" data-field-type="string" data-field-name="map_link" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->map_link_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">
            <input type="text" data-field-type="string" data-field-name="facebook" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->facebook_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_all_site" data-entity="block"
                data-descr="">
            Сохранить
        </button>
    </div>
@endsection
