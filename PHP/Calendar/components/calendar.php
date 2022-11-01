<?php

function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {
        if (isset($semana[$i])) {
            if (array_search($semana[$i], $semana) == "0") {
                echo "<td style='color: red'>{$semana[$i]}</td>";
            } elseif (array_search($semana[$i], $semana) == "6") {
                echo "<td><b>{$semana[$i]}</b></td>";
            } else {
                echo "<td>{$semana[$i]}</td>";
            }
        } else {
            echo "<td style='background-color: gray'></td>";
        }
    }
    echo "</tr>";
}
function cal_days_in_year($year){
    $days=0; 
    for($month=1;$month<=12;$month++){ 
        $days = $days + cal_days_in_month(CAL_GREGORIAN,$month,$year);
     }
 return $days;
}

function calendario($month)
{
    $dia = 1;
    $current_year = date("y");
    $semana = array();
    $leapYear = cal_days_in_year($current_year);;
    
    switch ($month) {
        case "Janeiro":
            $days = 31;
            $initPoint = 5;
            break;
        case "Fevereiro":
            $days = 28;
            $initPoint = 1;
            break;
        case "Março":
            $days = 31;
            $initPoint = 1;
            break;
        case "Abril":
            $days = 30;
            $initPoint = 4;
            break;
        case "Maio":
            $days = 31;
            $initPoint = 6;
            break;
        case "Junho":
            $days = 30;
            $initPoint = 2;
            break;
        case "Julho":
            $days = 31;
            $initPoint = 4;
            break;
        case "Agosto":
            $days = 31;
            $initPoint = 0;
            break;
        case "Setembro":
            $days = 30;
            $initPoint = 3;
            break;
        case "Outubro":
            $days = 31;
            $initPoint = 5;
            break;
        case "Novembro":
            $days = 30;
            $initPoint = 1;
            break;
        case "Dezembro":
            $days = 31;
            $initPoint = 3;
            break;
    }
    for ($i = 0; $i < $initPoint; $i++) {
        array_push($semana, "");
    }
    while ($dia <= $days) {
        array_push($semana, $dia);
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
    linha($semana);
}

function allCalendario()
{
    for ($m = 1; $m <= 12; $m++) {
        switch ($m) {
            case 1:
                $month = "Janeiro";
                break;
            case 2:
                $month = "Fevereiro";
                break;
            case 3:
                $month = "Março";
                break;
            case 4:
                $month = "Abril";
                break;
            case 5:
                $month = "Maio";
                break;
            case 6:
                $month = "Junho";
                break;
            case 7:
                $month = "Julho";
                break;
            case 8:
                $month = "Agosto";
                break;
            case 9:
                $month = "Setembro";
                break;
            case 10:
                $month = "Outubro";
                break;
            case 11:
                $month = "Novembro";
                break;
            case 12:
                $month = "Dezembro";
                break;
        }
        echo "<table style='background-color: white;text-align: center; width: 25%;margin: 0.5%;padding: 0.5%' border='1'>
            <tr><th >{$month}</th></tr>
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>";
        calendario($month);
        echo "</table>";
    }
}
