<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h1>&ensp;&ensp;<font face="Bell MT" size="20"color=#FF3300>Time</font>&ensp;<font face="Bell MT" size="20"color=#FFFFFF>Magazine</font></h1>
<?php include 'menu.php' ?>

    <div class="container">

        <div style="padding-left: 10px; padding-right: 10px;">
         <?php 
         
            $result = FindData::findAllArticle();
            while(($row=$result->fetch_array())!=null){ ?>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h2><?php echo $row["name"]; ?></h2>
                                <!-- <img class="center" src="./image/pic1.jpg" alt="" srcset=""> -->
                                <img class="center" src="./image/<?php echo $row["head_img"] ?>" style="max-width:500px" alt="" srcset="">
                                <br>
                                <p class="center" style="text-indent:50px;">
                                    <?php echo nl2br(substr($row["descript"], 0, 500))."...." ?>
                                </p>
                                <p><a class="btn btn-default" href="blog.php?article_id=<?php echo $row["id"]; ?>" role="button">Read More &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>  
        <?php } ?>


        </div>
        <hr>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>

