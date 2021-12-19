<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname=$_POST["q28_typeA28"];
    $lastname=$_POST["q29_input29"];
    $email=$_POST["q4_email"];
    
    $telephoneNo=$_POST["q30_phoneNumber"];
    // $phone = $telephoneNo[full];
    
    $insta=$_POST["q6_typeA"];
    $startday=$_POST["q7_typeA7"];
    
    $date=$_POST["q8_startDate"];
    // $dy=$date[year];
    // $dm=$date[month];
    // $dd=$date[day];
    // $startdate = $dy .'-'. $dm .'-'. $dd;
    
    $weeks=$_POST["q9_typeA9"];
    $strmin=$_POST["q11_number11"];
    $strmax = $_POST["q12_maximumDays"];
    $carmin=$_POST["q14_minimumDays14"];
    $carmax=$_POST["q15_maximumDays15"];
    
    // $cardiotype=$_POST["q16_name16"];
    // foreach($cardiotype as $value){
    // $cardio .= $value . ' ';
    // }
    // $diettype=$_POST["q18_name18"];
    // foreach($diettype as $value){
    // $diet .= $value . ' ';
    // }
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
    echo $weeks;
    $cups = $water*128/$size;

}
    
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table id="myTable-1" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td id="tb-1" class="intro-row"><?php echo $firstname;?>'s Body & Mind Goals</td>
            </tr>
        </tbody>
    </table>


    <table id="myTable-1" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td id="tb-2">Row1 - Column 1</td>
                <td id="tb-2">Row1 - Column 2</td>
                <td id="tb-2">Row1 - Column 3</td>
                <td id="tb-2">Row1 - Column 4</td>
                <td id="tb-2">Row1 - Column 5</td>
                <td id="tb-2">Row1 - Column 6</td>
                <td id="tb-2">empty</td>
            </tr>

        </tbody>
    </table>

    <table id="myTable-1" cellspacing="0" width="100%">
        <tbody>
            <tr>
            <td id="tb-1">Strength Training</td>
                <td id="tb-1">Cardio</td>
                
                <td id="tb-1">One Gallon of Water</td>
                <td id="tb-1">Diet</td>
                <td id="tb-1">Read 10 Pages</td>
                <td id="tb-1">Teeth Whitening</td>
                <td id="tb-1">Study Spanish for 30 Minutes</td>
            </tr>

            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            <tr>
                <td id="tb-1">Row2 - Column 1</td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square<?php echo $cups;?>.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
                <td id="tb-1"><img src="square1.svg" alt=""></td>
            </tr>
            </tbody>
    </table>
    <div class ="tables">
            <?php
            while($weeks != 1){
                echo '
                <br>
                <table id="myTable-1" cellspacing="0" width="100%">
                <tbody>
                    
        
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square'. $cups.'.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    <tr>
                        <td id="tb-1">Row2 - Column 1</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1">Row2 - Column 3</td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                        <td id="tb-1"><img src="square1.svg" alt=""></td>
                    </tr>
                    </tbody>
            </table>
                <br>
                <br>';
            $weeks = $weeks-1;
            }
            ?>
</div>
            <!-- <tr>
                <td id="tb-1">Row3 - Column 1</td>
                <td id="tb-1">Row3 - Column 2</td>
                <td id="tb-1">Row3 - Column 3</td>
                <td id="tb-1">Row3 - Column 4</td>
                <td id="tb-1">Row3 - Column 5</td>
                <td id="tb-1">Row2 - Column 6</td>
                <td id="tb-1">Empty</td>
            </tr>

            <tr>
                <td id="tb-1">Row4 - Column 1</td>
                <td id="tb-1">Row4 - Column 2</td>
                <td id="tb-1">Row4 - Column 3</td>
                <td id="tb-1">Row4 - Column 4</td>
                <td id="tb-1">Row4 - Column 5</td>
                <td id="tb-1">Row2 - Column 6</td>
                <td id="tb-1">Empty</td>
            </tr>

            <tr>
                <td id="tb-1">Row5 - Column 1</td>
                <td id="tb-1">Row5 - Column 2</td>
                <td id="tb-1">Row5 - Column 3</td>
                <td id="tb-1">Row5 - Column 4</td>
                <td id="tb-1">Row5 - Column 5</td>
                <td id="tb-1">Row2 - Column 6</td>
                <td id="tb-1">Empty</td>
            </tr>

            <tr>
                <td id="tb-1">Row6 - Column 1</td>
                <td id="tb-1">Row6 - Column 2</td>
                <td id="tb-1">Row6 - Column 3</td>
                <td id="tb-1">Row6 - Column 4</td>
                <td id="tb-1">Row6 - Column 5</td>
                <td id="tb-1">Row2 - Column 6</td>
                <td id="tb-1">Empty</td>
            </tr>
            <tr height="100px">
                <td id="tb-1">Row6 - Column 1</td>
                <td id="tb-1">Row6 - Column 2</td>
                <td id="tb-1">Row6 - Column 3</td>
                <td id="tb-1">Row6 - Column 4</td>
                <td id="tb-1">Row6 - Column 5</td>
                <td id="tb-1">Row2 - Column 6</td>
                <td id="tb-1">Empty</td>
            </tr> -->

        
</body>

</html>

