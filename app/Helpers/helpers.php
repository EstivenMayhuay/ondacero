<?php

function formatHumanPassedTime($datetime = "2023-05-12 15:25:56") {
    $curr_date = Carbon\Carbon::now();
    $days = $curr_date->diffInDays($datetime);
    $date = "";

    if($days < 7) {
        $time_days = $days > 1 ? 'días' : 'día';
        $date = "Hace {$days} {$time_days}";
    } else if ($days >= 7 && $days <= 30) {
        $weeks = $curr_date->diffInWeeks($datetime);
        $time_weeks = $weeks > 1 ? 'semanas' : 'semana';
        $date = "Hace {$weeks} {$time_weeks}";
    } else if ($days > 30 && $days < 365) {
        $months = $curr_date->diffInMonths($datetime);
        $time_months = $months > 1 ? 'meses' : 'mes';
        $date = "Hace {$months} {$time_months}";
    } else if($days >= 365) {
        $years = $curr_date->diffInYears($datetime);
        $time_years = $years > 1 ? 'años' : 'año';
        $date = "Hace {$years} {$time_years}";
    }

    return $date;
}

function getNameByNumberDay ($numberDay = 3)  {
    $arrDays = (object)[
        (object)[
            'dayNumber' => 1,
            'dayName' => 'Lunes'
        ],
        (object)[
            'dayNumber' => 2,
            'dayName' => 'Martes'
        ],
        (object)[
            'dayNumber' => 3,
            'dayName' => 'Miércoles'
        ],
        (object)[
            'dayNumber' => 4,
            'dayName' => 'Jueves'
        ],
        (object)[
            'dayNumber' => 5,
            'dayName' => 'Viernes'
        ],
        (object)[
            'dayNumber' => 6,
            'dayName' => 'Sábado'
        ],
        (object)[
            'dayNumber' => 7,
            'dayName' => 'Domingo'
        ]
    ];

    $value = null;

    foreach ($arrDays as $objDay) {
        if($objDay->dayNumber == $numberDay) {
            $value = $objDay->dayName;
        }
    }

    return $value;
}
