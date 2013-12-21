<!DOCTYPE html>
<html>
        <head>
                <?php session_start() ?>
                <title>Cheapo Mail || <?php echo $_SESSION['Name'] ;?></title>
                <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
                <script src=register.js></script>
                 <link rel="stylesheet" type="text/css" href="msg_box.css" />

        </head>

        <body>

                <div>

                        <div id="head">
                                <h1 >CheapoMail</h1>
                        </div>

                        <div id="menu">
                                <h4><a href="#">Compose</a></h4>
                                <h4><a href="message_board.php">Inbox</a></h4>
                                <h4><a href="register.php">Register</a></h4>
                                <h4><a href='act.php?a=logout'>Logout</a></h4>
                        </div>

                        <div id="formContent">
                                <form action='act.php?a=register' method='post'> 
                                Register<br> 
                                <label>First Name</label> 
                                <input type='text' name='fname'><br /><br />
                                <label>Last Name</label>
                                <input type='text' name='lname'><br /><br />
                                <label>Password </label>
                                <input type='password' name='pword'><br /><br />
                                <label>Username</label>
                                <input type='text' name='username'><br />
                                <input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register sequence is executed-->
                                <input type=submit value='Register'></input>
                                </form>
                                <button id='cancel'>Cancel</button>

                        </div>

                        <div id="copyright">
                        Copyright © JAVIER BAILEY
                        </div>

                </div>
        </body>
</html>
