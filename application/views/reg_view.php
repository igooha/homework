<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title> 

    <link href="newproject/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="newproject/js/jquery.min.js" type="text/javascript"></script>

</head>
<body>
   <?php
    for($i=0; $i<8 ;$i++):
    ?>
    <br>
    <?php endfor ?>
  <div class="container">
    <div class="row"> 
      <div class="span12"></div>
    </div>
    <div class="row-fluid">


      <div class="span3 offset4">

        <form id="myForm">

          <div class="control-group ">
            <div class="controls"><input class="input-large" name="login" type="text" id="login" placeholder="Логин" required></div>
          </div>

          <div class="control-group ">
            <div class="controls"><input class="input-large" name="email" type="text" id="email" placeholder="E-mail" required></div>
          </div>

          <div class="control-group ">
            <div class="controls"><input class="input-large" name="password" type="password" id="password" placeholder="Пароль" required></div>
          </div>

          <div class="control-group ">
            <div class="controls"><input class="input-large" name="password_r" type="password" id="password_r" placeholder="Повторите пароль" required></div>
          </div>

        </form>
      <button name="enter"  class="sumbit btn btn-inverse btn-large btn-block">Зарегистрироваться</button>

<script language="javascript" type="text/javascript">
    $('.sumbit').click( function() 
    {
      var login = $("#login").val();
      var password = $("#password").val();
      var password_r = $("#password_r").val();
      var email = $("#email").val();
      var dataToSend = { login: login, password: password, password_r: password_r, email: email };
      $('#myForm')[0].reset();
      $.ajax(
      {        
        type: "POST",
        url: "/check_reg",
        data: dataToSend,
        success: function(data)
        {
          $('.results').html(data);
        }
      })

    });

</script>

      <div class="results"></div>
                
            </div>
        </div>          
    </div>    
</body>

<script src="newproject/js/bootstrap.min.js" type="text/javascript"></script>
<script src="newproject/js/jquery-latest.js" type="text/javascript"></script>

</html>