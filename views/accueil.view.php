<?php ob_start(); // start c'est comme une banane dans le pot d'échappement de PHP
?>
<h1>Index (accueil)</h1>
<section>
        <h2>Expérience professionnelle</h2>
        <h3>Ingénieur logiciel chez XYZ Company</h3>
        <p>Date de début - Date de fin</p>
        <ul>
            <li>Responsabilité 1</li>
            <li>Responsabilité 2</li>
        </ul>
    </section>

    <section>
        <h2>Éducation</h2>
        <h3>Master en Informatique à l'Université ABC</h3>
        <p>Date de début - Date de fin</p>
    </section>

    <section>
        <h2>Compétences techniques</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>PHP, MySQL</li>
            <li>Frameworks: Laravel, Symfony</li>
        </ul>
    </section>

    <section>
        <h2>Projets</h2>
        <h3>Projet 1</h3>
        <p>Description du projet 1.</p>
        <h3>Projet 2</h3>
        <p>Description du projet 2.</p>
    </section>

    <section>
        <h2>Langues</h2>
        <ul>
            <li>Français (Langue maternelle)</li>
            <li>Anglais (Courant)</li>
        </ul>
    </section>

    <section>
        <h2>Coordonnées</h2>
        <p>Email: john.doe@email.com</p>
        <p>Téléphone: +123 456 789</p>
        <p>Adresse: 123 Rue de l'Exemple, Ville</p>
    </section>



<?php
$title = 'Accueil - site de YY';
$content = ob_get_clean(); // clean c'est comme retirer la banane du pot d'échappement
require_once 'template.php';

