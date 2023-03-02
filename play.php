<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    session_start();
    if (empty($_SESSION['id'])) :
        header('Location:./login.php');
        die();
    endif;
    ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/play.css" />
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
                <h1 id="loading-text">Loading...</h1>
                <ul class="input-list"></ul>
            </div>
            <div class="bottombar">
                <div class="actions">
                    <button class="action-btn action-btn-chat" id="spell-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256" style="fill: #000000">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path d="M4.28125,2.00391c-0.094,-0.003 -0.18725,0.00586 -0.28125,0.00586v25.99023h4v-1.55859c0,-0.861 0.55019,-1.62448 1.36719,-1.89648l3.26562,-1.08789c0.816,-0.273 1.36719,-1.03744 1.36719,-1.89844v-3.81445l2.26758,-0.78125c0.43262,-0.12014 0.73213,-0.5139 0.73242,-0.96289c-0.00069,-0.23009 -0.08071,-0.4529 -0.22656,-0.63086l-0.02734,-0.0332c-0.00952,-0.01128 -0.01929,-0.02235 -0.0293,-0.0332l-2.75781,-3.30469c-0.40078,-5.51294 -4.09722,-9.85357 -9.67773,-9.99414zM22.56641,10.99219c-0.42468,0.00827 -0.79781,0.28389 -0.93055,0.68738c-0.13274,0.40349 0.00388,0.8468 0.3407,1.10559c1.84048,1.45194 3.02344,3.68577 3.02344,6.21484c0,2.52907 -1.18295,4.76291 -3.02344,6.21484c-0.28868,0.21848 -0.43674,0.57592 -0.38712,0.93454c0.04963,0.35862 0.28919,0.66242 0.62635,0.7943c0.33716,0.13188 0.71927,0.07125 0.99905,-0.15853c2.29952,-1.81406 3.78516,-4.63023 3.78516,-7.78516c0,-3.15493 -1.48564,-5.97109 -3.78516,-7.78516c-0.18316,-0.1483 -0.41281,-0.22716 -0.64844,-0.22266zM19.98047,14.99414c-0.46377,0.02584 -0.8487,0.36759 -0.92929,0.82503c-0.08059,0.45744 0.16438,0.91016 0.59139,1.09293c0.79952,0.36101 1.35742,1.1485 1.35742,2.08789c0,0.9381 -0.55834,1.72708 -1.35742,2.08789c-0.50374,0.2276 -0.7276,0.82047 -0.5,1.32422c0.2276,0.50374 0.82047,0.7276 1.32422,0.5c1.49092,-0.67319 2.5332,-2.17621 2.5332,-3.91211c0,-1.73661 -1.04272,-3.23912 -2.5332,-3.91211c-0.12133,-0.05684 -0.25283,-0.08872 -0.38672,-0.09375c-0.03318,-0.00165 -0.06643,-0.00165 -0.09961,0z"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button class="action-btn action-btn-learn" id="meaning-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style="fill: white">
                            <path d="M 12 2 C 8.699219 2 6 4.699219 6 8 L 6 42.417969 C 6 45.59375 8.832031 48 12 48 L 44 48 L 44 46 L 12 46 C 9.839844 46 8 44.378906 8 42.417969 C 8 40.457031 9.800781 39 12 39 L 44 39 L 44 2 Z M 12 4 L 42 4 L 42 37 L 12 37 C 10.507813 37 9.09375 37.539063 8 38.417969 L 8 8 C 8 5.78125 9.78125 4 12 4 Z M 19.285156 13 L 14 28.421875 L 14 29 L 16 29 L 16 28.75 L 16.941406 26 L 24.058594 26 L 25 28.75 L 25 29 L 27 29 L 27 28.421875 L 21.714844 13 Z M 20.5 15.625 L 23.371094 24 L 17.628906 24 Z M 32 17 C 31.097656 17 30.277344 17.324219 29.746094 17.90625 C 29.210938 18.492188 29 19.253906 29 20 L 31 20 C 31 19.628906 31.101563 19.390625 31.222656 19.253906 C 31.347656 19.117188 31.527344 19 32 19 C 32.414063 19 32.542969 19.097656 32.703125 19.320313 C 32.867188 19.542969 33 19.964844 33 20.5 L 33 21.1875 C 32.683594 21.074219 32.351563 21 32 21 L 31 21 C 29.355469 21 28 22.355469 28 24 L 28 26 C 28 27.644531 29.355469 29 31 29 L 32 29 C 32.769531 29 33.464844 28.695313 34 28.214844 C 34.535156 28.695313 35.230469 29 36 29 L 36 27 C 35.433594 27 35 26.566406 35 26 L 35 20.5 C 35 19.660156 34.820313 18.832031 34.328125 18.148438 C 33.832031 17.464844 32.960938 17 32 17 Z M 31 23 L 32 23 C 32.554688 23 33 23.445313 33 24 L 33 26 C 33 26.554688 32.554688 27 32 27 L 31 27 C 30.445313 27 30 26.554688 30 26 L 30 24 C 30 23.445313 30.445313 23 31 23 Z"></path>
                        </svg>
                    </button>
                </div>
                <div class="actions">
                    <button class="action-btn action-btn-skip" id="skip-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256" style="fill: #000000">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path d="M9,4c-2.74952,0 -5,2.25048 -5,5v32c0,2.74952 2.25048,5 5,5h32c2.74952,0 5,-2.25048 5,-5v-32c0,-2.74952 -2.25048,-5 -5,-5zM9,6h32c1.66848,0 3,1.33152 3,3v32c0,1.66848 -1.33152,3 -3,3h-32c-1.66848,0 -3,-1.33152 -3,-3v-32c0,-1.66848 1.33152,-3 3,-3zM15,14.16797v21.66406l14,-9v8.16797h6v-20h-6v1v7.16797zM31,17h2v16h-2v-6.16797v-3.66406zM17,17.83203l11.15039,7.16797l-11.15039,7.16797z"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button class="action-btn action-btn-done" id="submit-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256" style="fill: #000000">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path d="M26.98047,5.99023c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-15.29297,15.29297l-6.29297,-6.29297c-0.25082,-0.26124 -0.62327,-0.36647 -0.97371,-0.27511c-0.35044,0.09136 -0.62411,0.36503 -0.71547,0.71547c-0.09136,0.35044 0.01388,0.72289 0.27511,0.97371l7,7c0.39053,0.39037 1.02353,0.39037 1.41406,0l16,-16c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988z"></path>
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
        const spellBtn = document.getElementById("spell-btn");
        const meaningBtn = document.getElementById("meaning-btn");
        const skipBtn = document.getElementById("skip-btn");
        const submitBtn = document.getElementById("submit-btn");
        const inputList = document.querySelector(".input-list");
        const loadingTxt = document.getElementById('loading-text')
        let word;

        function getFemaleVoice() {
            const voiceIndex = 7;
            return speechSynthesis.getVoices()[voiceIndex];
        }

        function speak(text) {
            return new Promise((resolve, reject) => {
                console.log('[speak]: Data recieved...')
                speechSynthesis.cancel();
                const utterance = new SpeechSynthesisUtterance(text);
                utterance.rate = 0.8;
                utterance.voice = getFemaleVoice();

                utterance.addEventListener('start', () => {
                    console.log('Starting...')
                })
                utterance.addEventListener('end', () => {
                    console.log('ended...')
                    resolve();
                })

                utterance.addEventListener('error', (e) => {
                    console.log(e)
                    reject(e);
                })
                speechSynthesis.speak(utterance);
                console.log('[speak]: Spoken...')
            })

        }



        window.addEventListener("load", async () => {
            console.log("Loaded!");
            const url =
                "https://raw.githubusercontent.com/matthewreagan/WebstersEnglishDictionary/master/dictionary.json";
            const response = await fetch(url);
            const data = await response.json();
            const arr = [];
            Object.keys(data).forEach((key) => {
                arr.push({
                    word: key,
                    meaning: data[key],
                });
            });
            const index = Math.round(Math.random() * (arr.length - 1));
            word = arr[index];
            for (let i = 0; i < word.word.length; i++) {
                inputList.innerHTML += `<li><input minlength="1" maxlength="1" /></li>`;
            }

            loadingTxt.style.display = "none";
            inputList.style.display = "block";
            // await speak(word.word)

            inputList.childNodes.forEach((child, i) => {
                console.log(child)
                if (i != (inputList.childNodes.length - 1)) {
                    child.firstChild.addEventListener(('input'), () => {
                        console.log('Changed...')
                        if (child.firstChild.value.length == 1) {
                            child.firstChild.blur();
                            inputList.childNodes[i + 1].firstChild.focus();
                        }
                    })
                }
            })

            // Skip Button
            skipBtn.addEventListener("click", async () => {
                if (confirm("Are you sure you want to skip this word?"))
                    location.reload();
            });

            // Submit button
            submitBtn.addEventListener("click", () => {
                const formData = new FormData();
                formData.append('uid', <?php echo $_SESSION['id']; ?>)
                let submittedWord = "";
                inputList.childNodes.forEach((child) => {
                    if (child && child.firstChild)
                        submittedWord += child.firstChild.value;
                });

                if (submittedWord.toLowerCase() == word.word) {
                    fetch('./controller/incremint.php', {
                        method: "post",
                        body: formData
                    }).then(response => response.json()).then(data => {
                        if (!data?.error) {
                            window.location.replace('./success.php')
                        } else {
                            alert('Something went wrong')
                        }
                    })
                } else {
                    fetch('./controller/decriment.php', {
                        method: "post",
                        body: formData
                    }).then(response => response.json()).then(data => {
                        if (!data?.error) {
                            window.location.replace('./wrong.php')
                        } else {
                            alert('Something went wrong')
                        }
                    })
                }
            });

            // Spell Button
            spellBtn.addEventListener("click", async () => {
                await speak(word.word);
            });

            // Meaning Button
            meaningBtn.addEventListener("click", async () => {
                await speak(word.meaning);
            });
        });
    </script>
</body>

</html>