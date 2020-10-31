<?php
 declare(strict_types=1);

require __DIR__ . "/data.php";

function sortDate(array $sortByDate) : array{
    
    usort($sortByDate, function ($a, $b) {
        return $b["date"] <=> $a["date"];
    });
        return $sortByDate;
}

function formatDate(DateTime $dateFormat) : string{

    return (date_format($dateFormat, "Y-m-d"));

}









// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.