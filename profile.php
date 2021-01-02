<?php
session_start();

// if user is not logged in
if( !$_SESSION['user_id'] ) {
    
    // send them to the login page
    header("Location: index.php");
}

// connect to database
include('connection.php');
include('functions.php');

// close the mysql connection
mysqli_close($conn);

include('header.php');
//include('functions.php');
?>

<div class = "container-fluid">
            <div>
                    <h3 class="homeTitle">The Random Music Player</h3>
                </div>
              <div class = "row">
                  <div class = "col-md-4 col-sm-4 col-xs-12"></div>
                  <div class="music-container" class = "col-md-4 col-sm-4 col-xs-12" id="music-container">
                      <div class="music-info">
                        <h4 id="title"></h4>
                        <div class="progress-container" id="progress-container">
                          <div class="progress" id="progress"></div>
                        </div>
                      </div>

                      <audio src="music/ukulele.mp3" id="audio"></audio>

                      <div class="img-container">
                        <img src="images/ukulele.jpg" alt="music-cover" id="cover" />
                      </div>
                      <div class="navigation">
                        <button id="prev" class="action-btn">
                          <i class="fas fa-backward"></i>
                        </button>
                        <button id="play" class="action-btn action-btn-big">
                          <i class="fas fa-play"></i>
                        </button>
                        <button id="next" class="action-btn">
                          <i class="fas fa-forward"></i>
                        </button>
                      </div>
                    </div>
                  <div class = "col-md-4 col-sm-4 col-xs-12"></div>
              </div>
          </div> <!--Form end-->
          <script src="script.js"></script>

<?php 
if( isset( $alertMessage ) ) {
    echo $alertMessage;
}
?>
    
    

<?php
include('footer.php');
?>