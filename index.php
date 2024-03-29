<?php

$football_teams = array(
    array("название" => "Манчестер Юнайтед", "тренер" => "Оле Гуннар Сульшер", "игроки" => array(
        array("имя" => "Маркус", "фамилия" => "Рэшфорд", "возраст" => 24),
        array("имя" => "Мэйсон", "фамилия" => "Гринвуд", "возраст" => 20),
        array("имя" => "Аарон", "фамилия" => "Ван-Биссака", "возраст" => 23)
    )),
    array("название" => "Барселона", "тренер" => "Рональд Куман", "игроки" => array(
        array("имя" => "Ансу", "фамилия" => "Фати", "возраст" => 18),
        array("имя" => "Педри", "фамилия" => "Гонсалес", "возраст" => 19),
        array("имя" => "Оскар", "фамилия" => "Мингеса", "возраст" => 21)
    )),
    array("название" => "Ливерпуль", "тренер" => "Юрген Клопп", "игроки" => array(
        array("имя" => "Трент", "фамилия" => "Александр-Арнольд", "возраст" => 23),
        array("имя" => "Куртис", "фамилия" => "Джонс", "возраст" => 20),
        array("имя" => "Дивок", "фамилия" => "Ориги", "возраст" => 26)
    ))
);

$youngest_player_age = PHP_INT_MAX;
$youngest_player_team = null;

foreach ($football_teams as $team) {
    foreach ($team["игроки"] as $player) {
        if ($player["возраст"] < $youngest_player_age) {
            $youngest_player_age = $player["возраст"];
            $youngest_player_team = $team;
        }
    }
}

if ($youngest_player_team !== null) {
    echo "Команда с самым молодым игроком:\n";
    echo "Название: " . $youngest_player_team["название"] . "\n";
    echo "Тренер: " . $youngest_player_team["тренер"] . "\n";
    echo "Самый молодой игрок: " . $youngest_player_age . " лет\n";
} else {
    echo "Команды не найдены.";
}

?>