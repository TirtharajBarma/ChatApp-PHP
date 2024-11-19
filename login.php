<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime chat App</header>
            <form action="#">
                <div class="error-text"></div>

                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="Password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Sign now</a></div>
        </section>
    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src = "javaScript/login.js"></script>
</body>
</html>