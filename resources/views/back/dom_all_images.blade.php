@section('text')
<div class="hidden_block">
<ul class="group_block group_container" data-block="dom_all_images" data-group="images_set" data-owner-id="0">
@foreach($dom_all_images->images_set_group  as $item_images_set)
    @include('back.blocks.groupitems.dom_all_images.images_set   ')
@endforeach
</ul>
</div>
@endsection
