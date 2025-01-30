<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $petition_choice = $_POST['petition_choice'];
    $comment = $_POST['comment'];
    $other_comment = isset($_POST['other_comment']) ? $_POST['other_comment'] : '';

    // Define email subject and body based on petition choice
    $subject = "Bedankt voor het ondertekenen van de Petitie!";
    $message = "Beste gebruiker,\n\n";
    $message .= "Hartelijk dank voor het ondertekenen van onze petitie! Jouw steun maakt een groot verschil.\n\n";

    switch ($petition_choice) {
        case 'save_money':
            $message .= "Je hebt aangegeven de petitie te ondertekenen om geld te besparen. \n";
            $message .= "Door deze actie steun je een beweging die gericht is op besparingen en efficiënter gebruik van middelen. We hopen dat meer mensen de voordelen van duurzaamheid inzien, zowel voor hun portemonnee als voor onze wereld. \n\n";
            $message .= "Je hebt de volgende opmerking achtergelaten:\n" . htmlspecialchars($comment) . "\n\n";
            break;
        case 'save_planet':
            $message .= "Je hebt aangegeven de petitie te ondertekenen om de planeet te redden. \n";
            $message .= "Dankzij jouw steun kunnen we een impact maken op de toekomst van onze planeet. Het behoud van de natuur en het verminderen van de ecologische voetafdruk zijn essentieel voor de generaties die na ons komen. \n\n";
            $message .= "Je hebt de volgende opmerking achtergelaten:\n" . htmlspecialchars($comment) . "\n\n";
            break;
        case 'guilt':
            $message .= "Je hebt aangegeven de petitie te ondertekenen uit schuldgevoel. \n";
            $message .= "Hoewel we je motivatie begrijpen, hopen we dat je ook begrijpt hoe belangrijk jouw bijdrage is voor een grotere zaak. Samen kunnen we echte veranderingen bewerkstelligen! \n\n";
            $message .= "Je hebt de volgende opmerking achtergelaten:\n" . htmlspecialchars($comment) . "\n\n";
            break;
        case 'other':
            $message .= "Je hebt aangegeven een andere reden te hebben voor het ondertekenen van de petitie. \n";
            $message .= "Jouw opmerking:\n" . htmlspecialchars($other_comment) . "\n\n";
            break;
        default:
            $message .= "Er lijkt een fout te zijn met je keuze. Neem gerust contact met ons op als je vragen hebt. \n\n";
            break;
    }

    $message .= "Nogmaals bedankt voor jouw steun!\n\n";
    $message .= "Met vriendelijke groet,\nHet Petitie Team\n[Bedrijfsnaam]\n[Website]\n\n";
    $message .= "P.S. Volg ons op sociale media voor de laatste updates!";

    // Send the email to the user
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= "From: info@jouwsite.nl" . "\r\n";  // Change to your actual email

    if (mail($email, $subject, $message, $headers)) {
        echo "Dank je wel voor het ondertekenen van de petitie! Een bevestigingsmail is naar je gestuurd.";
    } else {
        echo "Er is iets mis gegaan bij het verzenden van de e-mail.";
    }
}
?>
