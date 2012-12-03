<?php
session_start();

class Model_Edit_Profile extends Model
{
    public function get_data()
    {
        include ("db.php");
        $id = $_SESSION['id'];

        $result = mysql_query("SELECT * FROM users WHERE id='$id'", $db->base);
        $array = mysql_fetch_array($result);

        $date = $array['bdate'];
        $city = $array['city'];
        $sex = $array['sex'];
        $self = $array['self'];

        $result = mysql_query("SELECT * FROM geo_cities",$db->base);
        $array_city = mysql_fetch_array($result);

        return array( 
            'date' => $date,
            'city' => $city,
            'sex' => $sex,
            'self' => $self,
            'array_city' => $array_city
        );       
    }
}