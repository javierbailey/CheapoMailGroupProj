<!DOCTYPE html>
<html >
        <?php session_start();?>
        <head>
                <title> Cheapo Mail |
                <?php        echo $_SESSION['Name'];?> 
                </title>
                <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
                <script src= 'msg_box.js' type='text/javascript'></script>
                <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>
                 <link rel="stylesheet" type="text/css" href="msg_box.css" />

        </head>

        <body id="container">

                <div>

                        <div id="head">
                                <h1 >CheapoMail</h1>
                        </div>

                        <div id="menu">
                                <h4><a id='compose' href="#">Compose</a></h4>
                                <h4><a href="msg_box.php">Inbox</a></h4>

                        <?php        //Capability of registering should only be accessible by the admin user 
                                if($_SESSION['Username'] == 'admin')
                                {
                                        echo '<h4><a href="register.php">Register</a></h4>';
                                }
                        ?>
                                <h4><a href='act.php?a=logout'>Logout</a></h4><!-- Sends request for logout control sequence to be run -->
                                <span id='id'><?php echo $_SESSION['ID'];?></span>
                        </div>

                        <div id="content">
                        No New Messages 
                        </div>

                        <div id="copyright">
                        Copyright © JAVIER BAILEY</div>

                </div>
        </body>
</html>
