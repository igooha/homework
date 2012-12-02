<?php

class db
{
	var $table = 'gladkih';
	var $base;

	function connect()
	{
		$this->base = mysql_connect ("localhost","root","");
	}

	function select()
	{
		mysql_select_db ($this->table, $this->base);
	}
}

?>