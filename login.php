<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="Password" id="Password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Not yet signed up? <a href="#">Sign now</a></div>
        </section>
    </div>
    <script src="javaScript/pass-show-hide.js"></script>
</body>
</html>