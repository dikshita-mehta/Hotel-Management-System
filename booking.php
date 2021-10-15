<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <h1 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h1>
    <div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Customer details</a></li>
        <li><a data-toggle="tab" href="#menu1">Guest details</a></li>
        <li><a data-toggle="tab" href="#menu2">Travel Booking</a></li>
        
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
        <h3>Guest details</h3>
        <form>
            Name: <input type="text" placeholder="Name" name="name" value=""><br></br>
            Age: <input type="number" placeholder="Age" name="age" value=""><br></br>
            Phone number: <input type="number" placeholder="Phonenumber" name="phno" value=""><br></br>
            Aadhar Number: <input type="number" placeholder="Aadhar Number" name="adno" value=""><br></br>
        </form>
        </div>
        <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p></p>
        </div>
        <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p></p>
        </div>
    </div>
    </div>
</body>
</html>
