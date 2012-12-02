    <div class="container">
   <?php
    for($i=0; $i<10 ;$i++):
    ?>
    <br>
    <?php endfor ?>
        <div class="row">
            <div class="span3 offset4">

            <form id="myForm">

            <div class="control-group ">
                <label for="login" class="control-label"></label>
                <div class="controls"><input class="input-large" name="login" type="text" id="login" placeholder="Логин" required></div>
            </div>

            <div class="control-group ">
                <label for="email" class="control-label"></label>
                <div class="controls"><input class="input-large" name="email" type="text" id="email" placeholder="E-mail" required></div>
            </div>

            </form>

            <button name="login"  class="submit btn btn-inverse btn-large btn-block">Отправить</button>

<script language="javascript" type="text/javascript">
    $('.submit').click( function() 
    {
      var login = $("#login").val();
      var email = $("#email").val();
      var dataToSend = { login: login, email: email };
      $('#myForm')[0].reset();
      $.ajax(
      {
        type: "POST",
        url: "/send_mail",
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
