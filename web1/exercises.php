<?php
    include './user.php';    
    $sql = "SELECT * FROM lesson_db";
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
    <link rel="stylesheet" href="style_exercises.css"/>
    <title>Piano</title>
    <style>
    main .music_card button a{
        width:50%;
        text-decoration: none;    
    }
    main .music_card .image img{
        border-radius: 15px 15px 0 0;
    }
    main .music_card{
        border-radius: 15px;
    }
    main .music_card button:hover{
    color: orange;
    }
    </style>
  </head>
<body>
<!--Navbar-->
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">  
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="./PlaySong.php" class="navbar-brand">PIANO</a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="exercises.php">Excercises</a></li>
                    <li id="search_data"><a href="./search.php">Search</a></li>
                        <li id="profile"><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Welcome, <?php echo $data['username'];?></a></li>
                        <li id="logOut"><a href="./user_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Main-->
<main>
    <?php
        while($row = mysqli_fetch_assoc($all_song)){
    ?>
    <div class="music_card">
        <div class="image">
            <img src="<?php echo $row["lesson_img"]; ?>" alt="">
        </div>
        <div class="caption">            
            <p class="song_name">Song name: <?php echo $row["lesson_name"]?></p>            
        </div>
        <button><a href="play-song.php?id=<?php echo $row['lesson_id'];?>" class="playSong">Play</a></button>     
    </div>
<?php
    }
?>
</main>    
</body>
</html>