<html>
    <head>
        <meta charset="utf-8">
        <title>add</title>
        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="col-xs-8 col-xs-offset-2" style="...">
            <form class="form-horizontal form-row-separated" action="{{URL::action('UserController@store')}}" method="Post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="exampleInputEmail">UserName</label>
                    <input type="text" class="form-control" placeholder="User Name" name = "name">
                </div>
                <div class="form-group">
                    <label for="exampleInputAdress">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name = "address">
                </div>
                <div class="form-group">
                    <label for="Age">Age</label>
                    <select name="age" class="form-control">
                        <?php for($i=20;$i<100;$i++)
                            {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Age">Photo</label>
                <label class="control-label">Select File</label>
                <input id="input-1" type="file" class="file" name="myFile">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>