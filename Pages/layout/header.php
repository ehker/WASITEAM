<!doctype html>
<html lang="en">

<head>
    <title>WASIT TEAM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $static['bootstrapcss'];?>" >

    <!-- fonts -->
<!--     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=El Messiri">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri"> -->

    <!-- css -->
    <link rel="stylesheet" href="<?php echo $static['MyCss'];?>" >
    <link rel="stylesheet" href="<?php echo $static['ProfileCss'];?>">
</head>

<body>

<?php if ($path == "profile"){ ?>

    <nav class="navbar  navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="nav">
            <ul class="navbar-nav text-uppercase mr-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="MPage#team">الفريق</a>
                </li>
            </ul>
        </div> 
        <a class="navbar-brand ml-auto navbar-right js-scroll-trigger " href="MPage">الصفحة الرئسيه </a>
    </nav>

<?php } ?>
