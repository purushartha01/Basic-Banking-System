<!--  -->
<?php
    include 'db.php';
    include 'dbquery.php';
?>

<!-- ---------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
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
                            <a class="nav-link" href="transfer.php">Transfer Money</a>
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
        <div class="container div">
            <h1 class="containerdiv">Customer List</h1>
            <div>
                <table class="table table-hover">
                    <thead class="table">
                        <tr >
                            <th>S.NO</th>
                            <th>Account No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>View Details</th>
                        </tr>
                    </thead>
                    <?php
                            if(count($fetchData)>0){
                                $serialno=1;
                                foreach($fetchData as $cusdata){?>
                    <tbody>
                        <tr>
                            <td colspan><?php echo $serialno?></td>
                            <td><?php echo $cusdata['AccountNo']; $ac=$cusdata['AccountNo']?></td>
                            <td><?php echo $cusdata['Name']?></td>
                            <td><?php echo $cusdata['Email']?></td>
                            <td><?php echo $cusdata['Balance']?></td>
                            <td><a href='viewcustomer.php?val=<?php echo $ac?>'><button type="button" class="btn btn-success">View</button></a></td>                        
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
    </div>
</body>
</html>

