<?php readfile("head.php"); ?>
<legend>
    <ol class="breadcrumb">
        <li style="color:black">Users list</li>
    </ol>
</legend>
&nbsp;
<a href="edit-user.php"><button class="btn btn-primary">Add user +</button></a>
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
        <tr>
            <td>1</td>
            <td>Deny Salvana</td>
            <td><img class="img-rounded" style="width:100px" src="images/sample.png"></td>
            <td>deny.nullpointer@gmail.com</td>
            <td class="text-center">
                <a href="view-user.php"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="edit-user.php"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Andrian Octo</td>
            <td><img class="img-rounded" style="width:100px" src="images/sample.png"></td>
            <td>andrian.nullpointer@gmail.com</td>
            <td class="text-center">
                <a href="view-user.php"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="edit-user.php"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
    </table>
</div>

<?php readfile("foot.php"); ?>