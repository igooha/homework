<body>
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="row">
            <div class="span3 offset4">

            <form id="myForm">

            <div class="control-group ">
                <label for="password" class="control-label"></label>
                <div class="controls"><input class="input-large" name="password" type="text" id="password" placeholder="Введите новый пароль" required></div>
            </div>

            <div class="control-group ">
                <label for="password_r" class="control-label"></label>
                <div class="controls"><input class="input-large" name="password_r" type="text" id="password_r" placeholder="Повторите новый пароль" required></div>
            </div>
            </form> 

            <button name="submit"  class="submit btn btn-inverse btn-large btn-block">Сменить</button>

<script language="javascript" type="text/javascript">
    $('.submit').click( function() 
    {
      var password = $("#password").val();
      var password_r = $("#password_r").val();
      var dataToSend = { password_r: password_r, password: password };
      $('#myForm')[0].reset();
      $.ajax(
      {
        type: "POST",
        url: "/edit_password",
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
</html>