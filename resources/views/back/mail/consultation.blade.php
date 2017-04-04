<?php $qAgent = \Illuminate\Support\Facades\App::make('Interpro\QuickStorage\Concept\QueryAgent');
$service = $qAgent->getGroupItem('dom_services', 'services', $item->service_id_field);
?>
<div>
    <p>{{$service->name_field}}</p>
    <p>{{$item->name_field}}</p>
    <p>{{$item->phone_field}}</p>
    <p>{{$item->comment_field}}</p>
</div>