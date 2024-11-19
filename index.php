<?php
    session_start();
    if(isset($_SESSION['unique_id'])){      // if user is logged in
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat App</header>
            <form action="#" enctype = "multipart/form-data" autocomplete="false">

            <!-- error -->
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="name">First Name</label>
                        <input type="text" name="fname"  placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="name">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email required">
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="Password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image" >
                        <label for="image">Select Image</label>
                        <input type="file" name="image"  required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/signup.js"></script>

</body>
</html>