<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">momcoin</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">    
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-light" href="wallet.php" type="submit">Pending Transaction</button>
                &nbsp;
                <button class="btn btn-outline-light" type="submit"  >Create Transaction<?php //header('location: test.php');?></button>
                &nbsp;
                <button class="btn btn-outline-light" type="submit">Setting</button>
                &nbsp;
               <a href="wallet.php">
                    <button class="btn btn-outline-light active"  type="submit">Blocks</button>
               </a>
                
                       
            
                
            </form>
        </div>
    </nav>

    <h1>Blocks on chain</h1>
    <b></b>
    <h4>Each card represent a block on the chain.Click on the block to see the vote stored inside.</h4>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>