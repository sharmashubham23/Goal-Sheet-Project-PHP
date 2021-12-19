<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$firstname=$_POST["q28_typeA28"];
$lastname=$_POST["q29_input29"];
$email=$_POST["q4_email"];

$telephoneNo=$_POST["q30_phoneNumber"];
$phone = $telephoneNo[full];

$insta=$_POST["q6_typeA"];
$startday=$_POST["q7_typeA7"];

$date=$_POST["q8_startDate"];
$dy=$date[year];
$dm=$date[month];
$dd=$date[day];
$startdate = $dy .'-'. $dm .'-'. $dd;

$weeks=$_POST["q9_typeA9"];
$strmin=$_POST["q11_number11"];
$strmax = $_POST["q12_maximumDays"];
$carmin=$_POST["q14_minimumDays14"];
$carmax=$_POST["q15_maximumDays15"];

$cardiotype=$_POST["q16_name16"];
foreach($cardiotype as $value){
$cardio .= $value . ' ';
}
$diettype=$_POST["q18_name18"];
foreach($diettype as $value){
$diet .= $value . ' ';
}
$cheats=$_POST["q19_howMany"];
$water=$_POST["q20_typeA20"];
$size=$_POST["q21_typeA21"];
$goal1=$_POST["q23_typeA23"];
$goal1min=$_POST["q24_minimumDays"];
$goal1max=$_POST["q25_maximumDays25"];
$goal2=$_POST["q42_additionalGoal"];
$goal2min=$_POST["q43_minimumDays43"];
$goal2max=$_POST["q44_maximumDays44"];
$goal3=$_POST["q46_additionalGoal46"];
$goal3min=$_POST["q47_minimumDays47"];
$goal3max=$_POST["q48_maximumDays48"];

$fullname = $firstname .' '. $lastname;
$title = $firstname . "'s Body & Mind Goals";
$titleP = $firstname .' '. $lastname . "'s Fit Friends Club Pact";

// Define Weekly Variables
$week11 = date("M jS, Y", strtotime($startdate));
$week12 = date("Y-m-d", strtotime($startdate.'+ 1 days'));
$week13 = date("Y-m-d", strtotime($startdate.'+ 2 days'));
$week14 = date("Y-m-d", strtotime($startdate.'+ 3 days'));
$week15 = date("Y-m-d", strtotime($startdate.'+ 4 days'));
$week16 = date("Y-m-d", strtotime($startdate.'+ 5 days'));
$week17 = date("Y-m-d", strtotime($startdate.'+ 6 days'));

$week21 = date("Y-m-d", strtotime($startdate.'+ 7 days'));
$week22 = date("Y-m-d", strtotime($startdate.'+ 8 days'));
$week23 = date("Y-m-d", strtotime($startdate.'+ 9 days'));
$week24 = date("Y-m-d", strtotime($startdate.'+ 10 days'));
$week25 = date("Y-m-d", strtotime($startdate.'+ 11 days'));
$week26 = date("Y-m-d", strtotime($startdate.'+ 12 days'));
$week27 = date("Y-m-d", strtotime($startdate.'+ 13 days'));

$week31 = date("Y-m-d", strtotime($startdate.'+ 14 days'));
$week32 = date("Y-m-d", strtotime($startdate.'+ 15 days'));
$week33 = date("Y-m-d", strtotime($startdate.'+ 16 days'));
$week34 = date("Y-m-d", strtotime($startdate.'+ 17 days'));
$week35 = date("Y-m-d", strtotime($startdate.'+ 18 days'));
$week36 = date("Y-m-d", strtotime($startdate.'+ 19 days'));
$week37 = date("Y-m-d", strtotime($startdate.'+ 20 days'));

$week41 = date("Y-m-d", strtotime($startdate.'+ 21 days'));
$week42 = date("Y-m-d", strtotime($startdate.'+ 22 days'));
$week43 = date("Y-m-d", strtotime($startdate.'+ 23 days'));
$week44 = date("Y-m-d", strtotime($startdate.'+ 24 days'));
$week45 = date("Y-m-d", strtotime($startdate.'+ 25 days'));
$week46 = date("Y-m-d", strtotime($startdate.'+ 26 days'));
$week47 = date("Y-m-d", strtotime($startdate.'+ 27 days'));

//Pact PDF Creation used to fill in field data in form with variables
$fd = '%FDF-1.2
%����
1 0 obj 
<<
/FDF 
<<
/Fields [
<<
/V ('.$weeks.')
/T (weeks)
>> 
<<
/V ('.$fullname.')
/T (Name)
>> 
<<
/V ('.$carmax.')
/T (cardio)
>> 
<<
/V ('.$titleP.')
/T (Title)
>> 
<<
/V ('.$water.')
/T (gallon)
>> 
<<
/V ('.$week11.')
/T (start)
>> 
<<
/V ('.$strmax.')
/T (strength)
>>]
>>
>>
endobj 
trailer

<<
/Root 1 0 R
>>
%%EOF
';

$filef = 'pdfs/pact.fdf';
if($handle = fopen($filef, 'w')) {
	fwrite($handle, $fdf);
	fclose($handle);
}

$pname = "pdfs/pacttemp.pdf";
exec("pdftk pdfs/pact.pdf fill_form pdfs/pact.fdf output $pname flatten");

//Goal Sheet PDF Creation used to fill in field data in form with variables
$fdf = '%FDF-1.2
%����
1 0 obj 
<<
/FDF 
<<
/Fields [
<<
/V ('.$week31.')
/T (week31)
>> 
<<
/V ('.$week32.')
/T (week32)
>> 
<<
/V ('.$week33.')
/T (week33)
>> 
<<
/V ('.$week34.')
/T (week34)
>> 
<<
/V ('.$week35.')
/T (week35)
>> 
<<
/V ('.$week36.')
/T (week36)
>> 
<<
/V ('.$week37.')
/T (week37)
>> 
<<
/V ('.$title.')
/T (Title)
>> 
<<
/V ('.$week21.')
/T (week21)
>> 
<<
/V ('.$week22.')
/T (week22)
>> 
<<
/V ('.$week23.')
/T (week23)
>> 
<<
/V ('.$week24.')
/T (week24)
>> 
<<
/V ('.$week25.')
/T (week25)
>> 
<<
/V ('.$week26.')
/T (week26)
>> 
<<
/V ('.$week27.')
/T (week27)
>> 
<<
/V ('.$goal2.')
/T (Goal2)
>> 
<<
/V ('.$week41.')
/T (week41)
>> 
<<
/V ('.$week11.')
/T (week11)
>> 
<<
/V ('.$week42.')
/T (week42)
>> 
<<
/V ('.$goal1.')
/T (Goal1)
>> 
<<
/V ('.$week12.')
/T (week12)
>> 
<<
/V ('.$week43.')
/T (week43)
>> 
<<
/V ('.$week13.')
/T (week13)
>> 
<<
/V ('.$week44.')
/T (week44)
>> 
<<
/V ('.$week14.')
/T (week14)
>> 
<<
/V ('.$week45.')
/T (week45)
>> 
<<
/V ('.$week15.')
/T (week15)
>> 
<<
/V ('.$week46.')
/T (week46)
>> 
<<
/V ('.$week16.')
/T (week16)
>> 
<<
/V ('.$week47.')
/T (week47)
>> 
<<
/V ('.$week17.')
/T (week17)
>>]
>>
>>
endobj 
trailer

<<
/Root 1 0 R
>>
%%EOF
';

$filef = 'pdfs/goal.fdf';
if($handle = fopen($filef, 'w')) {
	fwrite($handle, $fdf);
	fclose($handle);
}

$pname2 = "pdfs/temp.pdf";
exec("pdftk pdfs/GoalSheet.pdf fill_form pdfs/goal.fdf output $pname2 flatten");

header('Location: google.com');
		exit();
}
header('Location: index.html');
		exit();
?>