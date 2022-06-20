<?php
include 'db.php';
include 'dbquery.php';
?>

<!-- ------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <title>Transfer Money</title>
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
            <form action="process.php" method="post">
                <table class="table">
                    <thead class="table-light">
                        <h1 class="containerdiv">Transaction</h1>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="from">Send From</label>
                            </td>
                            <td>
                                <select class="form-select" name="selectfrom">
                                <option value="none" selected disabled hidden>---Select Sender---</option>
                                <?php
                                    if(count($fetchData)>0){
                                    $serialno=1;
                                    foreach($fetchData as $d){?>
                                <option value="<?php echo $d['AccountNo'];?>"><?php echo $d['Name']?></option><?php }}?></select></select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="to">Send To</label>
                            </td>
                            <td>
                                <select class="form-select" name="selectto" id="sentto">
                                <option value="none" selected disabled hidden>---Select Receiver---</option>
                                <?php
                                    if(count($fetchData)>0){
                                    $serialno=1;
                                    foreach($fetchData as $d){?>
                                <option value="<?php echo $d['AccountNo'];?>"><?php echo $d['Name']?></option><?php }}?></select></select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="amount">Amount:</label>
                            </td>
                            <td>
                                <input type="text" name="amountsent" id="sentamount">
                            <td>
                        </tr>
                    </tbody>
                </table>
                <div class="div buttonp">
                    <button type="submit" name="submit" class="btn btn-primary submitbtn">Transfer</button>
                </div>
            </form>
    </div>
</body>
</html>