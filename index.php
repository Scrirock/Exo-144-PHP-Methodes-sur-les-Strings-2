<?php

    $str = addslashes("Ajourd'hui il fait -1000 degrés");

    $str2 = "oula ceci est un petit message";
    echo strtoupper($str2)."<br>";
    echo ucfirst($str2)."<br>";
    echo ucwords($str2)."<br>";

    $str2 = "PAF MNT C'EST EN MAJUSCULE";
    echo strtolower($str2)."<br>";
    echo lcfirst($str2)."<br>";

    $str3 = "un deux trois quatre cinq je met des mots pour en avoir plein, six sept huit neuf dix je sais meme plus 
    combien j'en ai";
    echo str_word_count($str3)."<br>";

    $str4 = explode(" ","encore plein de phhrase aled");
    $count = count($str4);
    for ($i = 0; $i < $count; $i++) echo $str4[$i]."<br>";

    $array =  ["des", "mot", "dans", "un", "tableau"];
    echo implode(" ",$array)."<br>";

    $str5 = "c'est pas que j'ai plus d'idee mais quand meme un peu la";
    echo strrev($str5)."<br>";
    echo str_shuffle($str5)."<br>";

    $str6 = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
    echo $str6."<br>";
    echo strip_tags($str6)."<br>";

    $str7 = "il faut encore inventer une phrase alors c'est partit vive les mots et les phrases";
    echo str_pad( $str7 ,500 , $pad_string = "|" , $pad_type = STR_PAD_LEFT )."<br>";

    $str8 = "c'est toujours pas fini du coup je recreer une chaine de caractere wow quelle originalite";
    $count = strlen($str8);
    for ($i = 0; $i < $count; $i++) echo str_split($str8)[$i]."<br>";

    $str9 = "Hello patate";
    echo str_replace("patate", "World!", $str9)."<br>";

    $str10 = "voila maintenant il faut faire des test sur les chaine de caractere";
    if (strstr($str10, "test")) echo "mot \"test\" bien présent"."<br>";

    function test1ermot($chaine, $premierMot){
        $str11 = $chaine;
        $mot = explode(" ", $str11);
        if (strstr($mot[0], $premierMot)) echo "La chaine ".$str11." commence bien par ".$premierMot."<br>";
    }
    test1ermot("Salut je suis une phrase", "Salut");

    function testDernierMot($chaine, $dernierMot){
        $str11 = $chaine;
        $mot = explode(" ", $str11);
        if (strstr(end($mot), $dernierMot)) echo "La chaine ".$str11." fini bien par bien par ". $dernierMot."<br>";
    }
    testDernierMot("Salut je suis une phrase", "phrase");

?>