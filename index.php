<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <title>Home</title>
</head>
<body class="mainpage">
<div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </Button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer_list.php">Customer List</a>
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
    </div>
    <div>
        <div class="imgdiv">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div class=" container maindiv">
            <h1 class="containerdiv">Welcome to CAPITAL BANK</h1>
            <h5 class="containerdiv">TSF GRIP Task No: 1 (Basic Banking System)</h5>
            <p class="pmain">
                The aim of this Banking System is to perform basic operations such as sending money from one user to another, transaction history details, all customer details.
                Click on the "Get Started" button to begin.
                Alternatively, you can navigate through the project using the menu options in navigation bar.
            </p>
            <div class="containerdiv">
                <a href="customer_list.php">
                    <input type="button" value="Get Started" class="btn btn-primary position-relative btn-lg">
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
