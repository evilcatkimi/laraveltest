<html>
    <head>
        <meta charset="utf-8">
        <title>add</title>
        <link rel="stylesheet" href="http:/getbootstrap.com/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="col-xs-8 col-xs-offset-2" style="...">
            <form class="form-horizontal form-row-separated" action="{{URL:action('UserController@store')}}" method="Post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="exampleInputEmail">UserName</label>
                    <input type="text" class="form-control" placeholder="User Name" name = "username">
                </div>
                <div class="form-group">
                    <label for="Sex">Sex</label>
                    <select name="sex" class="form-control">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-default"></button>
            </form>
        </div>
    </body>
</html>