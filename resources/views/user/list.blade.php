<html>
<head>
    <meta charset="utf-8">
    <title>Show all</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="col-xs-10 col-xs-offset-1" style="margin-top:50px">
        <table class="table table-hover">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Address</td>
                <td>Age</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
            <?php foreach($allUsers as $user):?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['Name'];?></td>
                <td><?php echo $user['Address']?></td>
                <td><?php echo $user['Age']?></td>
                <td><img src="img/<?php if($user['Photo']!=''){echo $user['Photo'];} else{echo 'scuti.png';}?>" width="100" height="100"/></td>
                <td>
                <a href='user/<?php echo $user['id'];?>/edit'>Edit</a>
                    <a href='user/<?php echo $user['id'];?>/delete' onclick="return confirm('ARE YOU SURE?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>