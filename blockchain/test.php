<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="./bkeygenerator.js"></script>
    <title>Document</title>
    
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home1.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Admin</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="donner.php">Donnetion</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Registor<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a 
                    class="nav-link" href="login.php">Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login1.php">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <form>
        
     
     
    
            <div class="form-group col-md-10">
                <label>private</label>
                <input type="text" class="form-control" id="pri" name="n_email" placeholder="private key">
            </div>
            
            <div class="form-group col-md-10">
                <label>Public</label>
                <input type="text" class="form-control" id="pub" name="n_pass2" placeholder="public key" value=$privateKey>
            </div>
        
        <button type="submit" name="sign_up" id="btn" class="btn btn-primary">Generat</button>
        <div class="form-row">
            
        </div>
    </form>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>