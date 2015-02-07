<?php readfile("head.php"); ?>
<legend>
    <ol class="breadcrumb">
        <li style="color:black">Park list</li>
    </ol>
</legend>
&nbsp;
<a href="add-park.php"><button class="btn btn-success">Add park +</button></a>
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
        <tr>
            <td>1</td>
            <td>Tugu muda</td>
            <td><img class="img-rounded" style="width:150px" src="images/sample.png"></td>
            <td>Pasuruhan Lor 294</td>
            <td class="text-center">
                <a href="view-park.php"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="add-park.php"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Tugu muda</td>
            <td><img class="img-rounded" style="width:150px" src="images/sample.png"></td>
            <td>Pasuruhan Lor 294</td>
            <td class="text-center">
                <a href="view-park.php"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="add-park.php"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
    </table>
</div>
<?php readfile("foot.php"); ?>