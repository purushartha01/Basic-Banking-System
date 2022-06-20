<?php
include 'db.php';
function findvals($connect,$acnu){
    $query="SELECT * FROM customerdetails WHERE AccountNo=$acnu";
    $exec=mysqli_query($connect, $query);
    $res=mysqli_fetch_array($exec);
    return $res;
}

if(isset($_POST['submit'])){
    $sendfrom=$_POST['selectfrom'];
    $sendto=$_POST['selectto'];
    $amnt=$_POST['amountsent'];
    if (!$sendfrom or !$sendto or !$amnt){
        include 'errorhandling.php';?>
        <script>
            alert("Please fill all the fields!");
            document.body.innerHTML='';
        </script>
        <h1 class="containerdiv">Redirecting...</h1>
        <?php
        die();
    }

    $data1=findvals($connect,$sendfrom);
    $data2=findvals($connect,$sendto);
    $sender=$data1['Name'];
    $receiver=$data2['Name'];
    $senderbalance=$data1['Balance'];
    $receiverbalance=$data2['Balance'];
    
    if($amnt>$senderbalance){
        include 'errorhandling.php';?>
        <h1 class='containerdiv'>Insufficient Balance. Redirecting...</h1>
        <?php
        die();
    }
    else if($amnt==0){
        include 'errorhandling.php';?>
        <h1 class='containerdiv'>Please enter amount more than 0. Redirecting...</h1>
        <?php
        die();
    }
    else{
        $newbalance=$senderbalance-$amnt;
        $query="UPDATE customerdetails set Balance=$newbalance WHERE AccountNo=$sendfrom";
        mysqli_query($connect,$query);

        $newbalance=$receiverbalance+$amnt;
        $query="UPDATE customerdetails set Balance=$newbalance WHERE AccountNo=$sendto";
        mysqli_query($connect,$query);

        $newquery="INSERT INTO transactions VALUES ('$sender','$receiver',$amnt)";
        mysqli_query($connect,$newquery);
        echo '<script> alert("Transaction Successful!!!")</script>';
    }
}
?>

<!-- ----------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <title>Processing Data</title>
</head>
<body class="mainpage">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">                         
                        <span class="navbar-toggler-icon"></span>
                    </Button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="customer_list.php">Customer List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="transfer.php">Transfer Money</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://internship.thesparksfoundation.info/">About TSF</a>
                        </li>
                        </ul>
                        <span class="navbar-brand h1">
                            CAPITAL BANK
                        </span>
                    </div>
                </div>
        </nav>
    </div>
    <div class="container div">
        <table class="table table-sm">
            <thead class="table-light">
                <H1 class="containerdiv">Transaction Details</H1>
            </thead>
            <tr>
                <td class="td">Sender</td>
                <td class="td"><?php echo $sender?></td>
            </tr>
            <tr>
                <td class="td">Recipient</td>
                <td class="td"><?php echo $receiver?></td>
            </tr>
            <tr>
                <td class="td">Transaction Amount</td>
                <td class="td"><?php echo $amnt?></td>
            </tr>
        </table>
        <div class="div buttonp">
           <a href="customer_list.php"><input type="button" name="button" value="View Customer List" class="btn btn-primary"></a>
        </div>
    </div>
</body>
</html>

