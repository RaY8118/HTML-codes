<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
    <style>
            fieldset{
                background-color:lightgray;
                padding: 0 1rem;
                border-radius: 15px;
                border-width: 6px;
            }
            ::placeholder{
                color:black;
            }
        </style>       
            <center>
                <fieldset>
            <div id="headerSection">
            <h1 style="color:black;"><u>Online Voting System</u></h1>  
            </div>
            </fieldset>
            <hr>
            <fieldset>
            <div id="loginSection">
                <h2 style="color:#347807;">Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Candiate</option>
                    </select><br><br>                  
                    <button class="pushable">
                        <span class="span">Login</span>
                    </button>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <b style="color:black;">New user?</b> <a href="routes/register.php"><b style="color:darkblue">Register here</b></a>
                </form>
            </div>
            </fieldset>
            </center> 
    </body>
</html>