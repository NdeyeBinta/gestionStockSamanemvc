<?php
    if(!empty($_FILES)){
        $pic = $_FILES['pic'];
        move_uploaded_file($pic['tmp_name'],"pic/".$pic['name']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> image base</title>
    <link type="text/css" rel="stylesheet" href="{$url_base}public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="{$url_base}public/css/samane.css"/>
    <link type="text/css" rel="stylesheet" href="{$url_base}public/css/b.css"/>
    <link type="text/css" rel="stylesheet" href="{$url_base}public/css/style.css"/>

    <style>
h1{
    color: #40007d;
}
    </style>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
        <form method="post" action="picture.php" enctype="multipart/form-data">
            <input class="form-control" type="file" name="pic" id="pic"/>
            <input class="form-control" type="submit" name="Envoyer" />
        </form>

</body>
</html>
