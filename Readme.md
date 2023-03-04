# SpellSizzle

Welcome to SpellSizzle, a web-based edutainment platform developed by the development team of ICT Society of Ananda College for the Web Development competition organized by the ICT Society of Musaeus College. The platform is designed to help students improve their vocabulary and spelling skills in a fun and engaging way.

SpellSizzle offers a range of features such as real-time leaderboards, practice quizzes, and audio pronunciation guides. Users can create an account and start playing immediately, and the platform offers unlimited word sets to practice.

## Technologies & Tools We Used

-   PHP
-   MySQL
-   HTML
-   CSS
-   JavaScript
-   AWS LightSail (Used to host the project)

Additionally, we have used the [matthewreagan/WebstersEnglishDictionary](https://github.com/matthewreagan/WebstersEnglishDictionary) to fetch words randomly in the JSON format.

## How to play the game?

Note: The web application is mobile responsive and works well in the mobile browsers too

-   First go to [http://43.205.223.158/SpellSizzle/](http://43.205.223.158/SpellSizzle/) where we hosted our application
-   Then go to the play page and create an account or login if you have already registered in the platform
-   Once you login, you will be redirected to the play page where you will be prompted enter the correct spelling of a word randomly selected from [matthewreagan/WebstersEnglishDictionary](https://github.com/matthewreagan/WebstersEnglishDictionary)
-   You can listen to the pronunciation of the word by clicking on the speak button
-   Also, you can listen to the meaning of the word by clicking on the dictionary button
-   If you want to skip the word, you can click on the skip button. If you are confident that you know the spelling of the word, enter the word in the input section and click on the submit button
-   If your submission was correct, 5 points will be added to your rating. Otherwise, 5 will be deducted from your rating.

## How to run the project locally?

Since this project fetches data from [matthewreagan/WebstersEnglishDictionary](https://github.com/matthewreagan/WebstersEnglishDictionary), you need to connect the device to an active internet connection.

<details>
<summary>For windows devices</summary>
<ol>
    <li>First install the <a href="https://www.apachefriends.org/" target="_blank">XAMPP</a> server in your machine</li>
    <li>Then head overto PHPMyAdmin in the localhost and create a Database named as 'spellsizzle'. Next import the <a href="./sql/users.sql">SpellSizzle/sql/users.sql</a> file in to the database</li>
    <li>Next clone the repository in to C:/xampp/htdocs
        <pre>cd C:/xampp/htdocs && git clone https://github.com/shakyapeiris/SpellSizzle.git</pre>
    </li>
    <li>Then go to the localhost/SpellSizzle and you should see the served web application</li>
</ol>
</details>

<details>
<summary>For linux devices</summary>
<ol>
    <li>First install the <a href="https://www.apachefriends.org/" target="_blank">XAMPP</a> server in your machine</li>
    <li>Next start the MySQL server</li>
    <li>Then head overto PHPMyAdmin in the localhost and create a Database named as 'spellsizzle'. Next import the <a href="./sql/users.sql">SpellSizzle/sql/users.sql</a> file in to the database</li>
    <li>
        Install Apache, PHP and PHP-MySQL
        <pre>sudo apt-get install apache2 php php-mysql</pre>
    </li>
    <li>Install git
        <pre>sudo apt-get install git</pre>
    </li>
    <li>Clone the project from github and navigate to the root directory of the project
    <pre>git clone https://github.com/shakyapeiris/SpellSizzle.git && cd SpellSizzle</pre></li>
    <li>Serve the PHP project
    <pre>php -S 0.0.0.0:3000</pre></li>
</ol>
</details>

## What we learned by building this project

-   Backend development using PHP and MySQL
-   How to host a PHP and MySQL server on an AWS lightsail instance
-   How to use Databse service on AWS LightSail

## Future Plans

-   Open the project for public contributions
-   Implement a level based gameplay depending on the length of the word
-   Give more control to the user over automated voices
