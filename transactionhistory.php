<?php
include 'db.php';
$newquery="SELECT * from transactions";
$execute=mysqli_query($connect,$newquery);
if(mysqli_num_rows($execute)>0){
    $data=mysqli_fetch_all($execute,MYSQLI_ASSOC);
}
else{
    $data=[];
}
?>

<!-- ------------------------------------------------------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <title>Transaction History</title>
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
                            <a class="nav-link" href="transfer.php">Transfer Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="transactionhistory.php">Transaction History</a>
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
        <h1 class="containerdiv">Transaction History</h1>
        <div>
            <table class="table table-hover">
                <thead class="table">
                    <tr >
                        <th>S. No</th>
                        <th>Sender</th>
                        <th>Recipient</th>
                        <th>Transaction Amount</th>
                    </tr>
                </thead>
                    <?php
                        if(count($data)>0){
                            $serialno=1;
                            foreach($data as $cusdata){
                    ?>
                <tbody>
                    <tr>
                        <td colspan><?php echo $serialno?></td>
                        <td><?php echo $cusdata['SentFrom']?></td>
                        <td><?php echo $cusdata['SentTo']?></td>
                        <td><?php echo $cusdata['TransactionAmount']?></td>
                    </tr>                        
                </tbody>
                    <?php
                        $serialno++;
                        }
                        }else{
                    ?>
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>