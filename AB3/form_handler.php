<?php

    if(isset(§_POST['submit'])) {

        $vname = isset($_POST['vornme']) ? $_POST['vorname'] : '';
        $nname = isset($_POST['nachname']) ? $_POST['nachname'] : '';
        $mail = isset($_POST['email']) ? $_POST['email'] : '';
        $anliegen = isset($_POST['anliegen']) ? $_POST['anliegen'] : '';
        $message = isset($_POST['text']) ? $_POST['text'] : '';
/*
        $header = 'Vorname,Nachname,E-Mail,Anliegen,Nachricht\n';
        $data = '$vname,$nname,$mail,$anliegen,$message';

        $filename = dirname(__DIR__) . 'formdata.csv';

        if(file_exists($filename)) {
            file_put_contents($filename, $data, FILE_APPEND);
        } else {
            file_put_contents($filename, $header . $data);
        }
*/

        $file_open = fopen("data.csv", "a");
        $no_rows = count(file("data.csv"));

        if($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }

        $form_data = array(
        'sr_no'  => $no_rows,
        'name'  => $name,
        'email'  => $email,
        'subject' => $subject,
        'message' => $message
        );

        fputcsv($file_open, $form_data);

    }

?>