@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black"><a href="../park">Park list</a></li>
        <li style="color:black">view park</li>
    </ol>
</legend>
<h3>{{ $park->nama_park }}</h3>
&nbsp;<br>


@foreach($foto as $key => $value)
<img class="img-thumbnail" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:250px">
@endforeach

&nbsp;<br><br>
<p>{{ $park->alamat }}</p>
<p>{{ $park->longitude }}  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-search"></span> view on map</button></p>
<p>{{ $park->deskripsi }}</p>
<br><br>
<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> edit</button>
@include("template/foot")