@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<ul class="group-block group_container" data-block="dom_all_images" data-group="images_set" data-owner-id="0">
@foreach($dom_all_images->images_set_group as $item_images_set )
@include('back.blocks.groupitems.dom_all_images.images_set')
@endforeach
</ul>
  <button class="any_create" data-block="dom_all_images" data-group="images_set"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="dom_all_images" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection