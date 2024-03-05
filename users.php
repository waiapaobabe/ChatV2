
<?php
    session_start();
    if(!isset( $_SESSION['unique_id'])){
        header("location: login.php");
    }
?>
<?php include_once "header.php";?>

<body>
    <style>
        .users-list a {
            color: #FFCCCC;
            
        }
    </style>
    <div class="frameuser">
      <section class="users">
        <header>
            <?php
            include_once "php/dbconnect.php";
            $sql = mysqli_query($conn, "SELECT * FROM chat_user WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="content">
                <img src="php/images/<?php echo $row['image']?>" alt="">
                <div class="details">
                    <span><?php echo $row['username'] ?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
        </header>
        <div class="search">
            <span style="color: #fff;"class="text">Select an user</span>
            <input type="text" placeholder="search...">
            <button><i class="bi bi-search"></i></button>
        </div>
        <div class="users-list">
            
        </div>
      </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>