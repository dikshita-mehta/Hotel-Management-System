<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
    } );
    </script>
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
        
        <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        

      <div class="well">
            <h2>Book Now: 
                </h2>
            <hr>
            <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkin">

                </div>
               
               <div class="form-group">
                    <label for="checkout">Check Out:</label>&nbsp;
                    <input type="text" class="datepicker" name="checkout">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Jhon Wicky" required>
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="018XXXXXXX" required>
                </div>
                 
               
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Book Now</button>

               <br>
                <div id="click_here">
                    <a href="booking.php">Back to Home</a>
                </div>


            </form>
        </div>
        
        



    </div>
    
    
    
    
    






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        </div>
    </div>
    </div>
</body>
</html>
