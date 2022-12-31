<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">

    <title> Registration Form </title>
</head>
<body>

    <style>

        *{box-sizing: border-box}

        .container{
              padding: 16px;
        }

        input[type=text], input[type=radio], input[type=email], input[type=number]{
             width:100%;
             padding: 15px;
             margin: 5px 0 22px 0;
             display: inline-block;
             border:none;
             background:whitesmoke;
        }
        input[type=text]:focus, input[type=radio]:focus, input[type=email]:focus, input[type=number]:focus   {
             background-color: #ddd;
             outline: none;
        }  
        
        .registerbtn{
            background-color: #00c3ff;
            color:white;
            padding: 16px 20px;
            margin: 8px;
            border: none;
            width:100%;
            opacity: 0.9;
        
        }

        a{
            color:dodgerblue;
        }

        </style>

        <form action="register.php" method="POST" id="register_form">
            <div class="container">
                <h1>Registration Form</h1>
                <br>

        <label for="Name"><b>Name</b></label>
        <input type="text" placeholder="Enter your Name" name="name" id="name" required>

        <label for="Branch"><b>Branch</b></label>
        <br>
        Comps<input type="radio" name="branch">
        IT<input type="radio" name="branch">
        EXTC<input type="radio" name="branch">
        Elec<input type="radio" name="branch">
        Mech<input type="radio" name="branch">

        <label for="Sem"><b>Sem</b></label>
        <input type="text" placeholder="Enter your Sem" name="sem" id="sem" required >
        

        
        <label for="Roll Number"><b>Roll Number</b></label>
        <input type="number" placeholder="Enter your Roll Number" name="rollNumber" id="rollNumber" required>
        <br>
        
        <label for="Phone Number"><b>Phone Number</b></label>
        <input type="number" placeholder="Enter your Phone Number" name="phoneNumber" id="phoneNumber" required>
        <br>
        
        <label for="Email "><b>Email</b></label>
        <input type="email" placeholder="Enter your Email" name="email" id="email" required>
        <br>
        
        <button type="submit" class="registerbtn">Register</button>


        </div>
    </form>
</body>
</html>