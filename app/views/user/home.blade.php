@include('template/head')
<legend>
    <ol class="breadcrumb">
        <li style="color:black">Users list</li>
    </ol>
</legend>
&nbsp;
<a href="user/create"><button class="btn btn-primary">Add user +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>User</th>
            <th>Photo</th>
            <th>email</th>
            <th></th>
        </tr>
        @foreach($admin as $key => $value)
        <tr>
            <td>{{ $value->iduser }}</td>
            <td>{{ $value->nama_lengkap }}</td>
            <td><img class="img-rounded" style="width:100px" src="{{ URL::asset('files/photos/user') }}/{{ $value->foto }}"></td>
            <td>{{ $value->email}}</td>
            <td class="text-center">
                <a href="user/{{ $value->iduser }}"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="user/{{ $value->iduser }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <a href="user/{{ $value->iduser }}/destroy"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil"></span> delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@include('template/foot')