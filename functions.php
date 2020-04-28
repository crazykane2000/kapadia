<?php
    function clean($data)
    {
        str_replace("'", "", $data);
        str_replace("`", "", $data);
        return $data;
    }
?>