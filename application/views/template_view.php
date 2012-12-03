<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <meta charset="utf-8">

    <script src=script.js></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-latest.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

</head>
<body>

    <div class="container"> 
        <div class="row">
            <?php 
                if(!isset($_SESSION['login']))
                {
                    ?>
            <div class="span1 offset9">                    
                <a href="/login" style="color: #000000" >Вход</a>
            </div>
            <div class="span1">
                <a href="/reg" style="color: #000000">Регистрация</a>
            </div> 
                <?php } 
                else
                {
                    ?>
            <div class="span4 offset8">                    
                <?php echo $_SESSION['login'] ?> ,врубай громкость на макcимум.
            </div>

            <?php } ?>

            <HR WIDTH="100%" SIZE="3" align="center" color="000000">          
        </div>

        <div class="row">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <a class="brand">МузЩит</a>

                        <div class="nav-collapse">
                            <ul class="nav">
                                <li><a href="/">Главная</a></li>
                                <?php 
                                if(isset($_SESSION['login']))
                                {
                                    ?>
                                <li><a href="/player">Плеер</a></li>
                                <li><a href="/upload_song">Загрузить песню</a></li>
                            </ul>                             
                            <ul class="nav pull-right">
                                <li class="divider-vertical"></li>
                                <li class="dropdown">
                                    <a href="/profile" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['login'] ?>
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/profile">Личная страница</a></li>
                                        <li class="divider"></li>

                                        <li class="nav-header">Настройки</li>
                                        <li><a href="/edit_profile">Редактировать профиль</a></li>
                                        <li><a href="/photo">Изменить изображение профиля</a></li>
                                        <li><a href="/change_login">Сменить логин</a></li>
                                        <li><a href="/change_password">Сменить пароль</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/exit">Выход</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php include 'application/views/'.$content_view; ?>
        </div>
    </div>

</body>
</html>