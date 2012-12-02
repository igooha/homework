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
                <label for="login" class="control-label"></label>
                <div class="controls"><input class="input-large" name="login" type="text" id="login" placeholder="Введите новый логин" required></div>
            </div>

            <div class="control-group ">
                <label for="login_r" class="control-label"></label>
                <div class="controls"><input class="input-large" name="login_r" type="text" id="login_r" placeholder="Повторите новый логин" required></div>
            </div>

            </form>

            <button name="login"  class="submit btn btn-inverse btn-large btn-block">Сменить</button>

<script language="javascript" type="text/javascript">
    $('.submit').click( function() 
    {
      var login = $("#login").val();
      var login_r = $("#login_r").val();
      var dataToSend = { login_r: login_r, login: login };
      $('#myForm')[0].reset();
      $.ajax(
      {
        type: "POST",
        url: "/edit_login",
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