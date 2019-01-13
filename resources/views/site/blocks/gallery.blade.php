@foreach ($block['medias'] as $galleryItem)
    <div>
        {{ $galleryItem['id'] }}
        <img style="width:200px" src="<?=Croppa::url($galleryItem['uuid'], 200)?>">
    </div>
@endforeach