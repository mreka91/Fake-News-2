<?php
declare(strict_types=1);

require __DIR__ . "/data.php";

/* A function to sort the array-items based on date of publishing */

function sortDate(array $sortByDate) : array{
    
    usort($sortByDate, function ($a, $b) {
        return $b["date"] <=> $a["date"];
    });
        return $sortByDate;
}

/* A function that manipulates which format the date is returned in when called on in the index.php-file */

function formatDate(DateTime $dateFormat) : string{

    return (date_format($dateFormat, "Y-m-d"));

}









