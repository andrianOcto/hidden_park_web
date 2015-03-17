@include("template/head")
<legend><a<h3>Add park</h3></legend>
&nbsp;
<form ng-app="updatePark" ng-controller="updateParkController" ng-submit="updateParkData()" ng-init="idpark='{{ $park->idpark }}';nama_park='{{ $park->nama_park }}';alamat='{{ $park->alamat }}';latitude='{{ $park->latitude }}';longitude='{{ $park->longitude }}';deskripsi='{{ $park->deskripsi }}';" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Nama Taman :</label>
        <div class="col-sm-9 col-md-9">
            <input type="hidden" ng-model='idpark'>
            <input ng-model="nama_park" type="text" class="form-control" id="nama-taman" required>
        </div>
    </div>
    <div class="form-group">
        <label for="alamat" class="col-sm-2 col-md-2 control-label">Alamat :</label>
        <div class="col-sm-9 col-md-9">
            <textarea ng-model="alamat" class="form-control" rows="3" id="alamat-taman" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="latitude" class="col-sm-2 col-md-2 control-label">Latitude:</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="latitude" type="text" class="form-control" id="latitude" required>
        </div>
    </div>
    <div class="form-group">
        <label for="longitude" class="col-sm-2 col-md-2 control-label">Longitude:</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="longitude" type="text" class="form-control" id="longitude" required>
        </div>
    </div>
    <div class="form-group">
        <label for="deskripsi" class="col-sm-2 col-md-2 control-label">Deskripsi :</label>
        <div class="col-sm-9 col-md-9">
            <textarea ng-model="deskripsi" class="form-control" rows="4" id="deskripsi-taman" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-md-10 control-label">
            <label class="checkbox-inline">
                <input type="checkbox" id="photo1" value="option1"><img class="img-thumbnail" src="images/sample.png" style="height:150px">
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="photo2" value="option1"><img class="img-thumbnail" src="images/sample.png" style="height:150px">
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="photo3" value="option1"><img class="img-thumbnail" src="images/logo-hiddenpark.png" style="height:150px">
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="photo4" value="option1"><img class="img-thumbnail" src="images/logo-hiddenpark.png" style="height:150px">
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 col-md-2 col-md-offset-2">
            <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete photo cheked</button>
        </div>
    </div>
    &nbsp;
    <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button ng-hide="loading" type="submit" class="btn btn-primary">Submit</button>
                        <img ng-hide="!loading" height="72" width="72" src="{{ URL::asset('images/loading.gif') }}" class="img-circle">
                        <br><br>
                        <!-- <a href="#">forgot password</a> -->
                        <p ng-hide="!isError" class="text-danger"  ng-init="message='sssss'">@{{message}}</p>
                </div>
</form>
@include("template/foot")