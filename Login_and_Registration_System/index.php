<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   
        <!--
        <section>
            <div>
                <div>
                    <form action="signup.php" method="post" id="SignUp">
                        <input type="text" name="username" placeholder="Username">
                        <input type="email" name="email" placeholder="Example@email.com">
                        <input type="password" name="password" id="password" placeholder="password">
                        <input type="submit" value="sign up">
                    </form>
                </div>
            </div>
            <div>
                <div>
                    <form action="login.php" method="post">
                        <input type="text" name="usernameandmail" placeholder="Username or mailadres">
                        <input type="password" name="password" id="password">
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </section>
            -->

        <!-- From Uiverse.io by andrew-demchenk0 --> 
<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="login.php" method="post">
                        <input class="flip-card__input" name="usernameandmail" placeholder="example@mail.com or username" type="text">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Let`s go!</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" action="signup.php" method="post" id="SignUp">
                        <input class="flip-card__input" name="username" placeholder="username" type="text">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Confirm!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>

   
</body>
</html>