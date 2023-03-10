<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/png" />
    <title>SpellSizzle | About</title>
</head>

<body>
    <?php require_once('./componets/navbar.php') ?>
    <main>
        <section class="head-section">
            <div class="text-container">
                <h1>
                    Get ready to <b>ignite</b> your<br />
                    spelling <br />
                    skills with
                    <b>SpellSizzle!</b>
                </h1>
                <p>
                    SpellSizzle is the ultimate platform for students to
                    ignite their English language skills! Developed by the
                    talented Ananda College ICT Society, this web app is a
                    fun and engaging way for students to improve their
                    vocabulary and spelling abilities. Whether you're a
                    master speller or just starting out, SpellSizzle has
                    something for everyone. So why wait? Let's start
                    sizzling and take your language skills to the next
                    level!
                </p>
            </div>
            <img src="./assets/images/fire.png" />
        </section>
        <section class="team-section">
            <h1>Our Team</h1>

            <ul class="team-container"></ul>
        </section>
    </main>
    <?php require_once('./componets/footer.php') ?>
</body>
<script>
    // Render the list of team mebers
    const teamMemberList = document.querySelector('.team-container');
    const teamMembers = [{
        name: 'Pasindu Dushan',
        designation: 'Team Leader',
        image: 'https://www.nicepng.com/png/detail/266-2666972_software-developer.png',
    }, {
        name: 'Shakya Peiris',
        designation: 'Front-end Developer',
        image: 'https://www.pngitem.com/pimgs/m/182-1822816_developer-clipart-hd-png-download.png',
    }, {
        name: 'Nuwantha Pasindhu',
        designation: 'Back-end Developer',
        image: 'https://cdn-icons-png.flaticon.com/512/6840/6840478.png',
    }, {
        name: 'Nisandu Athsara',
        designation: 'Front-end Developer',
        image: 'https://cdn-icons-png.flaticon.com/512/6478/6478099.png',
    }, {
        name: 'Minuka Gunasekara',
        designation: 'Front-end Developer',
        image: 'https://cdn-icons-png.flaticon.com/512/5072/5072860.png',
    }, ];
    for (let i = 0; i < 5; i++) {
        teamMemberList.innerHTML += `<li class='team-member'>
					<div class='profile-pic' style="background-image: url(${teamMembers[0].image});"></div>
					<div class='text-container'>
						<h3>${teamMembers[i].name}</h3>
						<p>${teamMembers[i].designation}</p>
					</div>
				</li>`;
    }
</script>

</html>