<?php
session_start();
if (!empty($_SESSION['id'])) {
    header('Location:./play.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/png" />
    <title>SpellSizzle | Play</title>


</head>

<body>
    <?php require_once('./componets/navbar.php') ?>
    <main>
        <section class="forms">
            <form name="login" class="form-wrapper" style="height: 45vh;">
                <div class="header">
                    <h1>Login</h1>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" value="" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="" placeholder="Password" required />
                </div>
                <button type="submit" id="signInBtn">Login</button>
                <p class="register-link">Not registered yet? <a href="./sign-up.php">SignUp</a></p>
            </form>
        </section>
    </main>
    <?php require_once('./componets/footer.php') ?>

    <script>
        const signInBtn = document.querySelector('#signInBtn');
        signInBtn.addEventListener('click', (e) => {
            e.preventDefault();

            const userName = document.getElementsByName('username')[0];
            const password = document.getElementsByName('password')[0];
            const formData = new FormData();

            formData.append('userName', userName.value);
            formData.append('password', password.value);

            fetch('./controller/login.php', {
                method: "post",
                body: formData
            }).then(response => response.json()).then(data => {
                alert(data?.message)
                if (data?.error) {
                    return;
                } else {
                    window.location.replace('./play.php')
                }
            })


        })
    </script>


</body>

</html>