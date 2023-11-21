<?php

function getToday(): string
{
    return date('d/m/Y');
}

function getTimeLeft(string $date): string
{
    $target = new DateTimeImmutable($date);
    // $today = new DateTimeImmutable('2020-01-30');
    $today = new DateTimeImmutable();

    $timeLeft = "";

    if ($target < $today) {
        $timeLeft = "Évènement passé";
    } elseif ($target == $today) {
        $timeLeft = "Aujourd'hui";
    } else {
        $interval = $target->diff($today);

        $timeLeft = 'Dans ';

        $nbAnnees = $interval->format('%y');
        $nbMois = $interval->format('%m');
        $nbJours = $interval->format('%d');

        if ($nbAnnees > 0) {
            if ($nbAnnees == 1) {
                $timeLeft .= $interval->format('%y an');
            } else {
                $timeLeft .= $interval->format('%y ans');
            }
        } else {
            if ($nbMois > 0) {
                $timeLeft .= $interval->format('%m mois');
            }
        }

        if ($nbAnnees > 0 && $nbMois > 0 || $nbMois > 0 && $nbJours || $nbAnnees > 0 && $nbJours > 0) {
            $timeLeft .= ' et ';
        }

        if ($nbAnnees == 0) {
            if ($nbJours > 0) {
                if ($nbJours == 1) {
                    $timeLeft .= $interval->format('%d jour');
                } else {
                    $timeLeft .= $interval->format('%d jours');
                }
            }
        } else {
            if ($nbMois > 0) {
                if ($nbJours >= 15) {
                    $timeLeft .= ($nbMois + 1) . " mois";
                } else {
                    $timeLeft .= $interval->format('%m mois');
                }
            } else {
                if($nbJours == 1){
                    $timeLeft .= $interval->format('%d jour');
                } else {
                    if($nbJours >= 15){
                        $timeLeft .= ' 1 mois';
                    } else {
                        $timeLeft .= $interval->format('%d jours');
                    }                    
                }                
            }
        }        
    }

    return $timeLeft;
}

// echo getTimeLeft("2019-09-17") . "<br>";
// echo getTimeLeft("2020-01-30") . "<br>";
// echo getTimeLeft("2020-02-15") . "<br>";
// echo getTimeLeft("2020-05-16") . "<br>";
// echo getTimeLeft("2021-05-30") . "<br>";
// echo getTimeLeft("2022-10-17") . "<br>";
// echo getTimeLeft("2021-02-25") . "<br>";

echo getTimeLeft("2023-09-17") . "<br>";
echo getTimeLeft("2024-01-30") . "<br>";
echo getTimeLeft("2024-02-15") . "<br>";
echo getTimeLeft("2024-05-16") . "<br>";
echo getTimeLeft("2024-05-30") . "<br>";
echo getTimeLeft("2024-10-17") . "<br>";
