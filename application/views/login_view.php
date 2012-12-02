   <?php
    for($i=0; $i<10 ;$i++):
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
            <div class="controls"><input class="input-large" name="password" type="password" id="password" placeholder="Пароль" required></div>
          </div>

        </form>
      <button name="login"  class="submit btn btn-inverse btn-large btn-block">Войти</button>
      <br>
      <p align="center"><a href="/recovery" style="color: #000000" >Забыли пароль?</a></p>

<script language="javascript" type="text/javascript">
    $('.submit').click( function() 
    {
      var login = $("#login").val();
      var password = $("#password").val();
      var dataToSend = { login: login, password: password };
      $('#myForm')[0].reset();
      $.ajax(
      {
        type: "POST",
        url: "/check_login",
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