<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>
<?php include_once "header.php";?>
<body>
    <div class="frame">
      <section class="form signup">
        <div class="wrapper">
            <header>Register</header>
            <form action="#" enctype="multipart/form-data">
                <div class="name-details">
                    <div class="field input">
                        <label style="padding-left: 10px;"for="username">User name</label>
                        <input type="text" name="username" placeholder="username"  required >
                    </div>
                    <div class="field input">
                        <label style="padding-left: 10px;"for="password">Password</label> 
                        <input type="password" name="password" placeholder="password" required>
                        <i class="bi bi-eye"></i>
                    </div>
                    <class class="field">
                        <label style="padding-left: 10px;"> Select Profile</label>
                        <input style="padding-left: 10px; " type="file" name="image">
                    </div>
                    <div class="field button"> 
                        <input type="submit" name="submit" value="Register" class="button">
                    </div>
                    <div class="link"><a href="login.php"  > Login </a></div>
                </div>      
            </form>
        </div>
      </section>
    </div>
    <script src ="javascript/pass-show-hide.js"></script>
    <script src ="javascript/signup.js"></script>
</body>
</html>