<div class="container">
	<div class="row">
		<div class="span4 offset1">

			<h4>Дата рождения</h4>
            <div>
            	<form name="my" action="" method="post">
            		<p><input name="date" type="text" id="datepicker"></p>               
            </div>            

            <h4>Город</h4>
            <div>
            	<?php
            	for ($i=0; $i < 191640 ; $i++)
            	 	{
            	 		$cities[] = $array_city['name'];
            	    }
            	$citybase = implode('","', $cities);
                ?>

                <div>
                	<input type="text" name="city" data-provide="typeahead" data-items="4" data-source='["<?php echo $citybase ?>"]'>                    
                </div>
            </div>

            <h4>Пол</h4>
            <div>
            	<label class="radio">
            		<input type="radio" name="sex" id="sex1" value="1" <?php if($data['sex']) echo 'checked' ?>>
            		Мужской
                </label>

                <label class="radio">
                	<input type="radio" name="sex" id="sex2" value="0" <?php if(!$data['sex']) echo 'checked' ?>>
                	Женский
                </label>
            </div>

            <h4>О себе</h4>
            <div>
            	<div>
            		<textarea rows="10" class="input-xxlarge" name="oself"></textarea>
            	</div>            	
            	</form>            	
            </div>
        <button name="save" class="submit btn btn-primary">Сохранить</button>

        <script language="javascript" type="text/javascript">

        $('.submit').click( function()
        {
          var date = $("#date").val();
          var city = $("#city").val();
          var sex = $("#sex").val();
          var oself = $("#oself").val();
          var dataToSend = { data: date, city: city, sex: sex, self: oself };
          $.ajax(
          {
            type: "POST",
            url: "/save_profile",
            data: dataToSend,
            success: function(data)
            {
              $('.results').html(data);
            }
          })
        });

        $(".date").val("Задерищенко");
        //document.my.date.value = <?php echo $data['date'] ?>;
        //document.my.city.value = <?php echo $data['city'] ?>;
        //document.my.oself.value = <?php echo $data['self'] ?>;
        </script>

		</div>
	</div>
</div>