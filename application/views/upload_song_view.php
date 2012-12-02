<div class="container">

    <div class="row">
        <div class="span12"> 
        <?php
        for($i=0; $i<9 ;$i++):
        ?>
        <br>
        <?php endfor ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="control-group" align="center">
                <label for="file" class="control-label"></label>
                <div class="controls"><input name="filename" type="file" id="file" required></div>
            </div>  
        </div>
    </div>

    <div class="row">
        <div align="center" class="span7 offset2">
            <sub>Аудиофайл не должен превышать 8 Мб и должен быть в формате MP3,WAV,OGG,AIFF или FLAC</sub>
        </div>
    </div>

    <br>  

    <div class="row">
        <div class="span3 offset4">
            <p align="center"><button type="submit" class="btn btn-inverse btn-large btn-block">Загрузить</button>
        </div>
    </div>

    </form>
</div>