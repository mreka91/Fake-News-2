<?php
 declare(strict_types=1);

require __DIR__ . "/data.php";



function formatDate(DateTime $dateFormat) : string{

    return (date_format($dateFormat, "j/n-Y"));

}

function sortDate(array $sortByDate) : array{
    
    usort($sortByDate, function ($a, $b) {
        return $b["date"] <=> $a["date"];
    });
        return $sortByDate;
}

function latestItem(array $array) : array
{
    $sort = sortDate($array);
    return array(array_shift($sort));

}

function nonLatestItem(array $array) : array{

    $sort = sortDate($array);
    return array_slice($sort, 1);
}







// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.