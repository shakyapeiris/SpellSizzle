<header>
    <nav>
        <a href="./">
            <h1>SpellSizzle</h1>
        </a>
        <ul>
            <li><a href="./play.php">Play</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./leaderboard.php">Leaderboard</a></li>
            <li><a href="./faq.php">FAQ</a></li>
        </ul>
        <div class="hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24">
                <path d="M23 0h-22c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h22c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zM23 9h-22c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h22c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zM23 18h-22c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h22c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1z"></path>
            </svg>
        </div>

    </nav>
    <div class="responsive-navbar">
        <nav>
            <a href="./">
                <h1>SpellSizzle</h1>
            </a>
            <div class="hamburger-close">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 26 26">
                    <path d="M 21.125 0 L 4.875 0 C 2.183594 0 0 2.183594 0 4.875 L 0 21.125 C 0 23.816406 2.183594 26 4.875 26 L 21.125 26 C 23.816406 26 26 23.816406 26 21.125 L 26 4.875 C 26 2.183594 23.816406 0 21.125 0 Z M 18.78125 17.394531 L 17.390625 18.78125 C 17.136719 19.035156 16.722656 19.035156 16.46875 18.78125 L 13 15.3125 L 9.53125 18.78125 C 9.277344 19.035156 8.863281 19.035156 8.609375 18.777344 L 7.21875 17.394531 C 6.96875 17.136719 6.96875 16.726563 7.21875 16.46875 L 10.6875 13 L 7.222656 9.535156 C 6.96875 9.277344 6.96875 8.863281 7.222656 8.609375 L 8.609375 7.222656 C 8.863281 6.964844 9.28125 6.964844 9.535156 7.222656 L 13 10.6875 L 16.46875 7.222656 C 16.722656 6.964844 17.140625 6.964844 17.390625 7.222656 L 18.78125 8.605469 C 19.035156 8.863281 19.035156 9.277344 18.78125 9.535156 L 15.3125 13 L 18.78125 16.46875 C 19.03125 16.726563 19.03125 17.136719 18.78125 17.394531 Z"></path>
                </svg>
            </div>
        </nav>
        <ul>
            <li><a href="./play.php">Play</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./leaderboard.php">Leaderboard</a></li>
            <li><a href="./faq.php">FAQ</a></li>
        </ul>
    </div>
    <script>
        const hamburgerBtn = document.querySelector('.hamburger');
        const hamburgerCloseBtn = document.querySelector('.hamburger-close');
        const respNavBar = document.querySelector('.responsive-navbar')

        hamburgerBtn.addEventListener('click', () => {
            respNavBar.classList.add('responsive-navbar-animate')
        })
        hamburgerCloseBtn.addEventListener('click', () => {
            respNavBar.classList.remove('responsive-navbar-animate')
        })
    </script>
</header>