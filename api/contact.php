<?php

        // header("Content-Type: text/html; charset=UTF-8");


        // // 結果は必ずUTF-8で返すこと
        // $answer = mb_convert_encoding($answer,"UTF-8","auto");
        // //JSON形式にすることで複数の値を返すことも可能

        // $json = new Services_JSON;
        // $encode = $json->encode($arr); //JSONに変換
        // echo $json->encode(['hoge' => 'ok']);   //JSONを出力
        header('Content-Type: application/json');
        // echo json_encode(['data' => 'ok']);
        echo json_encode(['data' => 'ok']);
?>