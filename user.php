<html>
    <head>
        <title>User login</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <style>
            #h4{
                color: black; 
                t-family: 'Times New Roman';
                Times, serif; 
                font-weight: bold; 
                text-align: center;
            }
            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <h1 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h1>
        <form action="" method="POST">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputname" placeholder="Username" style="width:200px;">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" style="width:200px;">
            </div>
        </div>
        <input type="submit" placeholder="Login">
        </form>
    </body>
</html>
