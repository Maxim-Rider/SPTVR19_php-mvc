<?php

class Cmodel {
    public function GetData(){
        //1st
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

        //2nd
    // $mysqli = new mysqli("localhost", "root", "", "sptvr19php");
    // $result = $mysqli->query("SELECT * FROM blog");
    // $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        //3rd
    
        $host = '127.0.0.1';
        $db = 'sptvr19php';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        $result = $pdo->query('SELECT * FROM blog');
        $arrayResult = $result->fetchAll();


        return $arrayResult;
    }
}