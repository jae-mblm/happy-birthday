<?php
// Call the function to display sorted birthday wishes for Lucas
$birthdayWishes = [
    "Happy Birthday Lucas! Hope you have a great day. Tessa :) ",
    "Feliz aniversário, Fi! Tudebão procê!",
    "Happy Birthday Lucas!",
    "Happy Birthday, Lucas! Hope you have a great day 🎂🎉",
    "Lucaaas! Happy birthdaaay! All the best!",
    "Happy Birthday Lucas! Hoping you a happy year ahead with all achievements  and success.",
    "Happy Birthday Lucas!!!!! Z",
    "Happy birthday Lucas! Enjoy your day!",
    "LUCAS! Happy Birthday!! Wishing you a fantastic day filled with joy and celebration.",
    "It’s your bday, again. Happy Birthday!"
];
sort($birthdayWishes);

function displayBirthdayWishes($wishes) {
    echo "<h1>Happy Birthday!</h1>";
    echo "<p>Here are your sorted birthday wishes:</p>";
    echo "<ul>";
    foreach ($wishes as $wish) {
        echo "<li>$wish</li>";
    }
    echo "</ul>";
}
displayBirthdayWishes($birthdayWishes);
?>