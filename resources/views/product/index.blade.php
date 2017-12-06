<?php
/**
 * Created by PhpStorm.
 * User: id-by
 * Date: 11/26/2017
 * Time: 10:51 PM
 */
?>
<div class="grids_of_4">
    @if($product)
        @foreach($product as $item => $bebek)
            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{route('pilih-bebek',$bebek->slug)}}"><img src="{{URL::asset("images/{$bebek->gambar}")}}" title="Project1" alt=""/></a>
                <h3><a href="{{route('pilih-bebek',$bebek->slug)}}">{{$bebek->nama}}</a></h3>
                <h4><a href="{{route('pilih-bebek',$bebek->slug)}}">Beli</a></h4>
            </div>

        @endforeach
    @endif
    <div class="clear"></div>
</div>
