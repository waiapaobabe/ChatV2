<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>
<?php include_once "header.php";?>
<body>
    <div class="framelog">
      <section class="form login">
        <div class="wrapperlog">
            <header>Login</header>
            <form action="#" autocomplete="off">
                <div class="name-details">
                    <div class="field input">
                        <label style="padding-left: 10px;"for="username">Username</label>
                        <input type="text" name="username" placeholder="username"  required >
                    </div>
                    <div class="field input">
                        <label style="padding-left: 10px;"for="password">Password</label> 
                        <input type="password" name="password" placeholder="password" required>
                        <i class="bi bi-eye"></i>
                    </div><br>
                    <div class="field buttonlog"> 
                        <input type="submit" name="submit" value="Login" class="button">
                        
                    </div>
                    

                </div>
                    <div class="linklog"><a href="index.php"  > Register </a></div>
                    
            </form>
        </div>
      </section>
    </div>
    <script src ="javascript/pass-show-hide.js"></script>
    <script src ="javascript/login.js"></script>
</body>
</html>