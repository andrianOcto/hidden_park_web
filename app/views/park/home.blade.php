@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black">Park list</li>
    </ol>
</legend>
&nbsp;
<a href="park/create"><button class="btn btn-success">Add park +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr class="success">
            <th>No.</th>
            <th>Taman</th>
            <th>Photo</th>
            <th>Alamat</th>
            <th></th>
        </tr>
        <?php $i=0; 
        ?>
        @foreach($park as $key => $value)
        <tr>
            <td>{{ $value->idpark }}</td>
            <td>{{ $value->nama_park }}</td>
            <td><img class="img-rounded" style="width:150px" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}"></td>
            <td>{{ $value->alamat }}</td>
            <td class="text-center">
                <a href="park/{{ $value->idpark }}"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="park/{{ $value->idpark }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <a href="park/{{ $value->idpark }}/destroy"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil"></span> delete</button></a>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
@include("template/foot")