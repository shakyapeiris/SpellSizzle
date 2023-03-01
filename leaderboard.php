<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/leaderboard.css" />
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
    <title>SpellSizzle | Leaderboard</title>
</head>
<body>
<?php require_once('./componets/navbar.php') ?>
<main>
    <h1>Leaderboard</h1>
    <section>
        <div class="leader-chart">
            <div class="leader-section">
                <div class="placeholder"></div>
                <div class="profile">
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div class="graph"></div>
            </div>
            <div class="leader-section">
                <div class="placeholder"></div>
                <div class="profile">
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div class="graph"></div>
            </div>
            <div class="leader-section">
                <div class="placeholder"></div>
                <div class="profile">
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div class="graph"></div>
            </div>
        </div>
        <ol>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
            <li>
                <div class="number-wrapper">
                    4.
                    <div class="profile-pic"></div>
                    <span>Shakya Peiris</span>
                </div>
                <div>1800</div>
            </li>
        </ol>
    </section>
</main>
<?php require_once('./componets/footer.php') ?>
<script>
    window.addEventListener('load',()=>{
        fetch('./controller/leaderBoard.php').then(response=>response.json()).then(data=>{
            console.log(data)
        })
    })
</script>
</body>
</html>