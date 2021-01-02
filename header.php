<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stopifie</title>

        <!-- Bootstrap CSS -->
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
                rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
            <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
            <link rel="stylesheet" href="style.css" />
            <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
            />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        table, th, td {
          border: 1px solid black;
        }
    </style>
    <!--Script to prevent form resubmission when page is reloaded-->
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <body style="padding-top: 60px;">            
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Stopifie</strong></a>
                <?php
                    $href = "";

                    if( isset( $_SESSION['user_id'] ) ) { // if user is logged in
                    ?>
                        <a class="navbar-text">Hello, <?php echo $_SESSION['name']?>!</a>
                    <?php
                    } else {
                    ?>
                        <!-- <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Log in</a></li>
                        </ul> -->
                    <?php
                    }
                    ?>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <?php
                    $href = "";

                    if( isset( $_SESSION['user_id'] ) ) { // if user is logged in    

                        echo "<ul class='nav navbar-nav'>";
                            echo "<li><a href=".$href.">Back to home</a></li>
                        </ul>";
                    ?>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Log in</a></li>
                        </ul>
                    <?php
                    }
                    ?>

            </div>

        </div>

    </nav>
        
    <div class="container">
