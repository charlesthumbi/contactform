<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP Contact Form</title>
</head>
<body>
    <div class="container">
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-info muted">Learn More with PHPSTORM</h3>
                </div>
                <div class="card-body">
                    <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis consequatur dolor dolore eos est minus non officiis perferendis unde.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info" >Find More</button>
                </div>
            </div>
        </div>
    <div class="col-lg-6" m-auto>
    <div class="card mb-5">
        <div class="card-header">
            <h1 class="text-center">Contact Us!</h1>
            <hr>
            <?php
            $Msg ="";
            if (isset($_GET['error'])) {
                $Msg = "Please Fill in the blank fields";
                echo '<div class="alert alert-danger">'.$Msg.'</div>';
            }
            if (isset($_GET['success'])) {
                $Msg = "Your Message has been sent!";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
            }
            ?>
        </div>
        <div class="card-body">
            <form action="process.php" method="post">
                <input type="text" name="name" class="form-control" placeholder="Enter Name"> <hr>
                <input type="email" name="email" class="form-control" placeholder="sample@mail.com"> <hr>
                <input type="text" name="subject" class="form-control" placeholder="Subject"> <hr>
                <textarea name="message" class="form-control" placeholder="Leave a Message"></textarea>
                <div class="form-group">
                    
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary form-control" name="send">Submit</button>
        </div>
         </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>