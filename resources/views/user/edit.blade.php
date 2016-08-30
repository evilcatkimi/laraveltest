<html>
<head>
    <meta charset="urf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="col-xs-8 col-xs-offset-2" style="margin-top:50px">
        <form class="form-horizontal form-row-seperated" action="{{URL::action('UserController@update')}}" method="Post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{old('id',$getUserById['id'])}}">
            <div class="form-group">
                <label for="exampleInputEmail">Name</label>
                <input type="text" class="form-control" value="{{old('Name',$getUserById['Name'])}}" name="Name">
            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input type="text" class="form-control" value="{{old('Address',$getUserById['Address'])}}" name="Address">
            </div>

            <div class="form-group">
                <label for="Age">Age</label>
                <select name="Age" class="form-control">
                    <?php for($i=20;$i<100;$i++)
                    {
                        if($i==$getUserById['Age'])
                        echo "<option value='$i' selected>$i</option>";
                        else
                            echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-default">Edit</button>
        </form>

    </div>
</body>
</html>