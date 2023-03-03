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
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/png" />
    <title>SpellSizzle | Leaderboard</title>
</head>

<body>
    <?php require_once('./componets/navbar.php') ?>
    <main>
        <h1>Leaderboard</h1>
        <section>
            <div class="leader-chart">
            </div>
            <ol class="leader-list">
            </ol>
        </section>
    </main>
    <?php require_once('./componets/footer.php') ?>
    <script>
        window.addEventListener('load', () => {
            fetch('./controller/leaderBoard.php').then(response => response.json()).then(data => {
                console.log(data.players)
                const nextSeven = data.players.slice(3, data.players.length);
                const topThree = [data.players[2], data.players[0], data.players[1]];
                const leaderList = document.querySelector('.leader-list');
                const leaderChart = document.querySelector('.leader-chart');

                nextSeven.forEach((player, i) => {
                    leaderList.innerHTML += `<li>
                        <div class="number-wrapper">
                            ${i + 4}.
                            <div class="profile-pic" style="background-image: url(${player.image});"></div>
                            <span>${player.username}</span>
                        </div>
                        <div>${player.rate}</div>
                    </li>`;
                })

                topThree.forEach((player) => {
                    leaderChart.innerHTML += `<div class="leader-section">
                    <div class="placeholder"></div>
                    <div class="profile">
                        <div class="profile-pic" style="background-image: url(${player.image})"></div>
                        <span>${player.username}</span>
                    </div>
                    <div class="graph"></div>
                </div>`;
                })
            })
        })
    </script>
</body>

</html>