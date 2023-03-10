<?php
session_start();
if (empty($_SESSION['id'])) :
    header('Location:./login.php');
    die();
endif
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/wrong.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/png" />
    <title>SpellSizzle | Play</title>
</head>

<body>
    <?php require_once('./componets/navbar.php') ?>
    <main>
        <section class="play">
            <div class="topbar">
                <div class="playerinfo">
                    <div class="avatar">
                        <img src=<?php echo $_SESSION['profilePic'] ?> />
                    </div>
                    <div class="user">
                        <h3><?php echo  $_SESSION['username'] ?></h3>
                        <p><?php echo $_SESSION['rate'] ?></p>
                    </div>
                </div>
                <a href="./logout.php" class="signout">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30">
                        <path d="M 15 3 C 8.3845336 3 3 8.3845336 3 15 C 3 21.615466 8.3845336 27 15 27 C 17.554923 27 19.9167 26.181425 21.853516 24.818359 A 1.0002806 1.0002806 0 0 0 20.703125 23.181641 C 19.081941 24.322575 17.129077 25 15 25 C 9.4654664 25 5 20.534534 5 15 C 5 9.4654664 9.4654664 5 15 5 C 17.129077 5 19.081941 5.6774247 20.703125 6.8183594 A 1.0002809 1.0002809 0 1 0 21.853516 5.1816406 C 19.9167 3.8185753 17.554923 3 15 3 z M 22.990234 9.9902344 A 1.0001 1.0001 0 0 0 22.292969 11.707031 L 24.585938 14 L 14 14 A 1.0001 1.0001 0 1 0 14 16 L 24.585938 16 L 22.292969 18.292969 A 1.0001 1.0001 0 1 0 23.707031 19.707031 L 27.619141 15.794922 A 1.0001 1.0001 0 0 0 27.617188 14.203125 L 23.707031 10.292969 A 1.0001 1.0001 0 0 0 22.990234 9.9902344 z"></path>
                    </svg>
                </a>
            </div>
            <div class="window">
                <div class="tick">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256" style="fill: #000000">
                        <g fill="#ff766f" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <g transform="scale(5.12,5.12)">
                                <path d="M31.202,25l13.63,-20.445c0.204,-0.307 0.224,-0.701 0.05,-1.026c-0.174,-0.325 -0.513,-0.529 -0.882,-0.529h-7.34c-0.327,0 -0.634,0.16 -0.821,0.429l-10.839,15.571l-10.84,-15.571c-0.187,-0.269 -0.493,-0.429 -0.82,-0.429h-7.34c-0.369,0 -0.708,0.203 -0.882,0.528c-0.174,0.325 -0.154,0.72 0.05,1.026l13.63,20.446l-13.63,20.445c-0.204,0.307 -0.224,0.701 -0.05,1.026c0.174,0.325 0.513,0.529 0.882,0.529h7.34c0.327,0 0.634,-0.16 0.821,-0.429l10.839,-15.571l10.84,15.571c0.187,0.269 0.493,0.429 0.82,0.429h7.34c0.369,0 0.708,-0.203 0.882,-0.528c0.174,-0.325 0.154,-0.72 -0.05,-1.026z"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="message">
                    <h1>Sorry, You're Wrong!</h1>
                    <p>Rating -5</p>
                </div>
            </div>
            <div class="bottombar">
                <div class="actions"></div>
                <div class="actions">
                    <button class="action-btn action-btn-skip">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256" style="fill: #000000">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path d="M9,4c-2.74952,0 -5,2.25048 -5,5v32c0,2.74952 2.25048,5 5,5h32c2.74952,0 5,-2.25048 5,-5v-32c0,-2.74952 -2.25048,-5 -5,-5zM9,6h32c1.66848,0 3,1.33152 3,3v32c0,1.66848 -1.33152,3 -3,3h-32c-1.66848,0 -3,-1.33152 -3,-3v-32c0,-1.66848 1.33152,-3 3,-3zM15,14.16797v21.66406l14,-9v8.16797h6v-20h-6v1v7.16797zM31,17h2v16h-2v-6.16797v-3.66406zM17,17.83203l11.15039,7.16797l-11.15039,7.16797z"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('./componets/footer.php') ?>
    <script>
        const skipBtn = document.querySelector('.action-btn-skip');
        skipBtn.addEventListener('click', () => {
            window.location.replace('./play.php')
        })
    </script>
</body>

</html>