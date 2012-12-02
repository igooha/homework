<div class="container">
    <br>
    <div align="left" class="row">
        <div class="span8 offset4">

    <?php for($i=0; $i<$rows; $i++): ?>
    <br>

    <audio id="<?php echo $idsong ?>" src="songs/<?php echo $fname ?>"></audio>
    <button class="btn btn-warning btn-small" id="play" onclick="audioplay(<?php echo $idsong ?>)">></button>  

    <?php echo $array['author'] ?>
    —
    <?php echo $array['name'] ?>.
    <?php echo $array['type'] ?>
    <br>
    <?php endfor ?>

        </div>
    </div>
</div>