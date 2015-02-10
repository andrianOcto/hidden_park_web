@include("template/head")
<div class="row">
    <div class="col-sm-9 col-md-9">
        
        <form class="form-horizontal" role="form">
        <center>
            <img src="{{ URL::asset('images/sample.png') }}" class="img-thumbnail" style="height:200px"><br><br>
            <input type="file"/>
            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span> edit photo</button>
        </center>
        &nbsp;
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Nama Lengkap :</label>
                <div class="col-sm-9 col-md-9">
                    <input type="text" required class="form-control" id="nama">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 col-md-3 control-label">Username :</label>
                <div class="col-sm-9 col-md-9">
                    <input type="text" required class="form-control" id="username">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 col-md-3 control-label">Password :</label>
                <div class="col-sm-9 col-md-9">
                    <input type="password" required class="form-control" id="password">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 col-md-3 control-label">Email :</label>
                <div class="col-sm-9 col-md-9">
                    <input type="email" required class="form-control" id="email">
                </div>
            </div>
            <div class="form-group">
                <label for="kontak" class="col-sm-3 col-md-3 control-label">Contact :</label>
                <div class="col-sm-9 col-md-9">
                    <input type="text" required class="form-control" id="kontak">
                </div>
            </div>
            <div class="form-group">
                <label for="bio" class="col-sm-3 col-md-3 control-label">Bio :</label>
                <div class="col-sm-9 col-md-9">
                    <textarea rows="4" id="bio" class="form-control"></textarea>
                </div>
            </div>
            &nbsp;
            <div class="form-group">
                
                <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button type="button" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@include("template/foot")