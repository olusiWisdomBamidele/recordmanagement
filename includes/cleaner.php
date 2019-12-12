<?php

    function cleans($data) {
            $data= stripslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }




?>
