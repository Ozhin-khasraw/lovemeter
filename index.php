

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="func.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid h-100 w-100">
        <div class="row h-25">
            <div class="col-lg d-flex justify-content-center h-100">
                <h1>Measure your love with your beloved ones</h1>
            </div>
        </div>
        <div class="row justify-content-md-center justify-content-sm-center justify-content-lg-center h-50">
            <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Your name:</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameguide" placeholder="Enter your name" required/>
                            
                                <div class="form-check form-check-inline" required>
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required/>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline" required>
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required/>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="name1">Your lover name:</label>
                            <input type="text" class="form-control" id="name1" name="name1" aria-describedby="nameguide1" placeholder="Enter your lover name" required/>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender1" id="inlineRadio3" value="Male" required/>
                                    <label class="form-check-label" for="inlineRadio3">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender1" id="inlineRadio4" value="Female" required/>
                                    <label class="form-check-label" for="inlineRadio4">Female</label>
                                </div>
                        </div>
                        <div class="col">
                            <button type="submit" name="dovahkiin" class="btn-primary btn-lg">GO!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="row cus h-25">
            <div class="col h-100">
                <div class="gradient-custom h-100" id="bar">
                </div>
            </div>
        </div> -->
        <div class="row h-25">
            <div class="text-center"id="cus">
            </div>
        </div>
        
    </div>
    
</body>
</html>

<?php

if(isset($_POST["dovahkiin"]))
{
    $gender = $_POST["gender"];
    $gender1 = $_POST["gender1"];

    if($gender == $gender1)
    {
        echo "<script> alert('whey r u ghey?'); window.location.href = \"index.php\";</script>";
    }
    else
    {
        // $name = $_POST["name"];
        // $name1 = $_POST["name1"];

        $rand=rand(0,100);
        
        // echo "<script>document.getElementById('div_register').setAttribute(\"style\",\"width:$rand\");</script>";

        echo "<style type=\"text/css\">
        #cus {
            width: $rand%;
            height:50%;
           background: linear-gradient(to right, rgba(255, 125, 125, 0.5), rgba(242, 0, 6, 0.5));
           content: '$rand';
        }
        </style>";
        //echo $rand;
    }
}
?>