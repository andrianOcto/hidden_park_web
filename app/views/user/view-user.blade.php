@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black"><a href="../user">Users list</a></li>
        <li style="color:black">view user</li>
    </ol>
</legend>

<div class="row">
    <div class="col-sm-4 col-md-4">
        <p class="text-right"><img class="img-thumbnail" style="height:300px" src="{{ URL::asset('images/sample.png') }}"></p>
    </div>
    <style>
        .tab{
            padding-left: 20px;
            padding-bottom:20px;
        }
    </style>
    <div class="col-sm-8 col-md-8">
        <label>Nama :</label><br>
        <label class="tab">Deny Salvana Ervan</label><br>
        <label>Username :</label><br>
        <label class="tab">dse92</label><br>
        <label>Email :</label><br>
        <label class="tab">deny.nullpointer@gmail.com</label><br>
        <label>Contact :</label><br>
        <label class="tab">089089089</label><br>
        <label>Bio :</label><br>
        <label class="tab">aku adalah aku, karena aku adalah diriku sendiri</label><br><br>
        &nbsp;
        <a href="../user/edit"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> edit user</button></a>
    </div>
</div>
@include("template/foot")