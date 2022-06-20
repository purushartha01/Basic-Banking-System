<?php
include 'db.php';
include 'dbquery.php';
$ac=$_GET['val'];
$query="SELECT * from customerdetails where AccountNo=$ac;";
$exe=mysqli_query($connect,$query);
if(!$exe){
    echo "ERROR: ".$query."<br>".mysqli_error($connect);
}
else{
    $data=mysqli_fetch_array($exe);
}
?>

<!-- ------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <title>Customer List</title>
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
                            <a class="nav-link active" href="customer_list.php">Customer List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transfer.php">Transaction History</a>
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
                <H1 class="containerdiv">Customer Details</H1>
            </thead>
            <tr>
                <td class="td">Account No</td>
                <td class="td"><?php echo $data['AccountNo']?></td>
            </tr>
            <tr>
                <td class="td">Name</td>
                <td class="td"><?php echo $data['Name']?></td>
            </tr>
            <tr>
                <td class="td">Email</td>
                <td class="td"><?php echo $data['Email']?></td>
            </tr>
            <tr>
                <td class="td">Account Balance</td>
                <td class="td"><?php echo $data['Balance']?></td>
            </tr>
        </table>
        <div class="div buttonp">
           <a href="transfer.php"><input type="button" name="button" value="Transfer Money" class="btn btn-primary"></a>
        </div>
    </div>
</body>
</html>