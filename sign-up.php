<?php
session_start();
if (!empty($_SESSION['id'])){
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
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="shortcut icon"
        href="./assets/images/logo.png"
        type="image/png"
    />
    <title>SpellSizzle | Play</title>
</head>
<body>
<?php require_once('./componets/navbar.php') ?>
<main>
    <section class="forms">
        <div class="form-wrapper">
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <form>
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    value=""
                    placeholder="example@email.com"
                    required
                />

                <label for="username">Username</label>
                <input
                    type="text"
                    name="username"
                    value=""
                    placeholder="Username"
                    required
                />

                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    value=""
                    required
                />

                <button type="submit" id="signUpBtn">Sign up</button>
                 <p class="register-link">Already have an account? <a href="./login.php">SignIn</a></p>
            </form>
        </div>
    </section>
</main>
<?php require_once('./componets/footer.php') ?>
<script>

    const signUpBtn = document.querySelector('#signUpBtn');
    signUpBtn.addEventListener('click',(e)=>{
        e.preventDefault();

        const email = document.getElementsByName('email')[0];
        const userName = document.getElementsByName('username')[0];
        const password = document.getElementsByName('password')[0];
        const formData = new FormData();

        formData.append('email',email.value);
        formData.append('userName',userName.value);
        formData.append('password',password.value);

        fetch('./controller/signup.php',{
            method:"post",
            body:formData
        }).then(response=>response.json()).then(data=>{
            alert(data?.message)
            if (data?.error){
                return;
            }else{
                window.location.replace('./login.php')
            }
        })


    })


</script>
</body>
</html>
