<?php
    //connect to db connection
    $conn = mysqli_connect('localhost','root','','user_db') or die('connection failed');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM lession_db";
    $all_song = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel = "icon" href = 
    "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_excercises.css" />
    <title>Piano</title>
  </head>
<body>
<!--Navbar-->
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">  
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="./PlaySong/PlaySong.php" class="navbar-brand">PIANO</a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="excercises.php">Excercises</a></li>
                        <li id="profile"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li id="logOut"><a href="index.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Search bar-->
<div class="search">
    <!-- Create a form element to hold the search bar -->
    <form action="https://www.google.com/webhp?hl=vi&sa=X&ved=0ahUKEwj1zvLrqZn8AhXAslYBHczWBK0QPAgI">
        <!-- Use an input element with type "text" to create the search bar -->
        <input type="text" placeholder="Search lession here...">
        <button id="btn_search">Search</button>
    </form>
</div>
<!--Main-->
<main>
    <?php
        while($row = mysqli_fetch_assoc($all_song)){
    ?>
    <div class="music_card">
    <div class="image">
        <img src="<?php echo $row["lession_img"]; ?>" alt="">
    </div>
    <div class="caption">
        <p class="rate">Level: Beginner</p>
        <p class="song_name">Song name: <?php echo $row["lession_name"]?></p>
    </div>
    <button class="playSong">Play</button>
</div>
<?php
    }
?>
</main>    
</body>
</html>