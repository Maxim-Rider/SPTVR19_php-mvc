<?php

class Cmodel {
    public function GetData(){
    //     $arrayResult[] = array(
    //         'TITLE' => 'Blog hosting site',
    //         'DATE' => '22.06.2020',
    //         'AUTHOR' => 'VolDeMort',
    //         'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
    //         'TEXT' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
    //     );
    //     $arrayResult[] = array(
    //         'TITLE' => 'Blog hosting site NEW',
    //         'DATE' => '21.10.2021',
    //         'AUTHOR' => 'Igor',
    //         'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
    //         'TEXT' => 'Curabitur in scelerisque nisl. Phasellus eget lacus in erat dictum gravida.'

    //     );
    $mysqli = new mysqli("localhost", "root", "", "sptvr19php");
    $result = $mysqli->query("SELECT * FROM blog");
    $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        return $arrayResult;
    }
}