<?php


session_start();

    $bus_id =$_SESSION['bus_id'] ;
    $from=$_SESSION['from'] ;
    $to = $_SESSION['to'] ;
    $date  =$_SESSION['date'] ;
    $useat  = $_SESSION['useats'] ;

    $name = $_SESSION['u_name'];
    $address = $_SESSION['u_address'];
    // $age = $_SESSION['u_age'];
     



    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf -> AddPage();

    $pdf -> SetFont("Arial","",16);

    $pdf -> Cell(0,10,"Ticket Booked Sucessfully !!",0,1,'C');
    $pdf->Ln();

    $pdf -> Cell(0,10,"Ticket Details",1,1,'C');

    $pdf -> Cell(20,10,"Bus Id",1,0,'C');
    $pdf -> Cell(40,10,"From",1,0,'C');
    $pdf -> Cell(40,10,"To",1,0,'C');
    $pdf -> Cell(40,10,"Date",1,0,'C');
    $pdf -> Cell(0,10,"seats",1,1,'C');


    $pdf -> Cell(20,10,$bus_id,1,0,'C');
    $pdf -> Cell(40,10,$from,1,0,'C');
    $pdf -> Cell(40,10,$to,1,0,'C');
    $pdf -> Cell(40,10,$date,1,0,'C');
    $pdf -> Cell(0,10,$useat,1,1,'C');
    $pdf->Ln();


    $pdf -> Cell(30,10," Name : ",0,0);
    $pdf -> Cell(40,10,$name,0,1);

    $pdf -> Cell(30,10,"Address : ",0,0);
    $pdf -> Cell(50,10,$address,0,1);

    // $pdf -> Cell(30,10,"Age : ",0,0,'C');
    // $pdf -> Cell(50,10,$age,0,1,'C');


    $file = time().'.pdf';




    $pdf -> output($file,'D');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets Booked.</title>
</head>
<body>
    
</body>
</html>