<?php
declare(strict_types=1);

require __DIR__ . "data.php";

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


function formatDate(DateTime $time) : string{

    return (date_format($time, "j/n-Y"));

}







// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.