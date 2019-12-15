<?php
    if(array_key_exists('mail', $_POST) && array_key_exists('anliegen', $_POST)) {
                        
        $file = fopen("D:\data.csv", "a");
                        
        foreach($_POST as $entry) {
            fputcsv($file, $entry);
        }

        fclose($file);

    }
?>