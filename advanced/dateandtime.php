<?php 
$d=date("Y");
$ex="Copyright 1999-2022 by Refsnes Data. All Rights Reserved.";
$company_name= "POKARPO";

echo "Copyright 1999-". date("Y")." by ". $company_name .". All Rights Reserved.<br>";



// checkdate(int $month, int $day, $year) 
// var_dump(checkdate(14,44,2055) );

/*-- to add the time interval as needed P=period Y year M months D day*/
// $d = new DateTime("2079-02-04");
// $d->add(new DateInterval("P2Y3M6D"));
// print_r($d);

/*-- to set the timezone as per need--*/ 
// date_default_timezone_set("Asia/Kathmandu");
// echo date("h:i:sa");


/*-- used to create date time randomly with given function and atmost 6 parameters.
$d = mktime(22,4,14,34,5,2021);
echo "created date is ". date("Y-m-d h:i:sa", $d);
*/

/*--string to time date, creates time date from words to number
$d = strtotime("10:00 May 20 2022");
$D=strtotime("yesterday");
echo date("Y-M-D h:i:sA",$D)."<br>";
echo "Created date is ".date("Y-m-d h:i:sa", $d);
*/
/*--outputs date for 4 months
$startdate = strtotime("10:21 May 18 2022");
$enddate = strtotime("+4 months", $startdate);
while($startdate < $enddate){
    echo date("Y-M-d-D h:i:sA", $startdate)."<br>";
    $startdate = strtotime("1 month", $startdate);
}
*/
/*--shows remaing days from start to end date
$startdate = strtotime("10:21 May 18 2022");
$enddate = strtotime("+3 months", $startdate);
$remainingdays = ceil(($enddate-time())/60/60/24);
    echo "There are ". $remainingdays ." days until 4th of July.<br>";
*/

