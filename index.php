<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
        caractère passée en argument en majuscules et en rouge.</p><br>

    <!-- SOLUTION -->

    <?php

    function convertirMajRouge($texte)
    {
        $texte = strtoupper($texte); //lettre en majuscule
        $color = 'red';
        echo "<p style='color:$color'>" . $texte . "</p>";
    }
    $texte = "mon texte en parametre";
    convertirMajRouge($texte);
    ?>

    <h1>Exercice 2</h1>
    <p>Soit le tableau suivant :
        $capitales = array
        ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
        Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.</p><br>

    <!-- SOLUTION -->

    <?php
    $capitales = [
        "France"  => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    ];

    function afficherTableHTML($tab)
    {

        ksort($tab);
        foreach ($tab as $cle => $valeur) {
            echo
            "<table>
            <tr>
              <th>Pays</th>
              <th>Capitale</th>
            </tr>
            <tr>
              <td><p style= 'text-transform:uppercase'>" . $cle . "</p></td>
              <td>$valeur</td>
            </tr>
            </table>";
        }
    }
    afficherTableHTML($capitales);
    ?>

    <h1>Exercice 3</h1>
    <p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
        dans un nouvel onglet (_blank).</p><br>

    <!-- SOLUTION -->

    <a href="https://elan-formation.eu/index.php/accueil" target=_blank>Site Elan Formation</a>

    <h1>Exercice 4</h1>
    <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
        le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
        nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
        On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
        https://fr.wikipedia.org/wiki/
        Le tableau passé en argument sera le suivant :
        $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
        "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
    </p><br>

    <!-- SOLUTION -->

    <?php
    $capitales1 = [
        "France"  => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid"
    ];

    function afficherTableHTML1($tab1)
    {
        asort($tab1);
        foreach ($tab1 as $cle1 => $valeur1) {
            echo
            "<table>
            <tr>
              <th>Pays</th>
              <th>Capitale</th>
              <th>Lien</th>
            </tr>
            <tr>
              <td><p style= 'text-transform:uppercase'>" . $cle1 . "</p></td>
              <td>" . $valeur1 . "</td>
              <td><a href='https://fr.wikipedia.org/wiki/' target=_blank>Site Elan Formation</a></td>
            </tr>
            </table>";
        }
    }
    afficherTableHTML1($capitales1);
    ?>

    <h1>Exercice 5</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
        précisant le nom des champs associés.
        Exemple :
        $nomsInput = array("Nom","Prénom","Ville");
        afficherInput($nomsInput);
    </p><br>

    <!-- SOLUTION -->

    <?php
    $nomsInput = ["Nom", "Prenom", "Ville"];

    function afficherInput($formulaire)
    {
        foreach ($formulaire as $form) {
            echo
            "<form><input> $form </form><br>";
        }
    }

    afficherInput($nomsInput);
    ?>


    <h1>Exercice 6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
        de valeurs.
        Exemple :
        $elements = array("Monsieur","Madame","Mademoiselle");
        alimenterListeDeroulante($elements);

    </p><br>

    <!-- SOLUTION -->

    <?php
    $elements = ["Monsieur", "Madame", "Mademoiselle"];

    function alimenterListeDeroulante($liste)
    {
        echo
        "<select>";
        foreach ($liste as $value) {
            echo
            "<option value=$value> $value </option>";
        }
        echo "</select>";
    }

    alimenterListeDeroulante($elements);
    ?>

    <h1>Exercice 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
        dans le tableau associatif si la case est cochée ou non.
        Exemple :
        genererCheckbox($elements);
        //où $elements est un tableau associatif clé => valeur avec 3 entrées.


    </p><br>

    <!-- SOLUTION -->

    <?php

    $checkbox = [
        "Choix 1"  => "1",
        "Choix 2"  => "2",
        "Choix 3"  => "3"
    ];


    function genererCheckBox($check)
    {
        echo
        "<form>";
        foreach ($check as $box => $x) {
            echo
            "<input type='checkbox' value='$box'> $x <br>";
        }
    }
    genererCheckBox($checkbox);

    ?>

    <h1>Exercice 8</h1>
    <p>
        Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
        Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
        Exemple :
        repeterImage($url,4);
    </p><br>

    <!-- SOLUTION -->

    <?php


    function repeterImage()
    {
        $max = 4;
        $min = 0;

        $chien = 'http://my.mobirise.com/data/userpic/764.jpg';

        while ($min < $max) {
            echo "<img src=$chien>";
            $min++;
        }
    }

    repeterImage();
    ?>

    <h1>Exercice 9</h1>
    <p>
        Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
        valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
        Exemple :
        afficherRadio($nomsRadio);
    </p><br>

    <!-- SOLUTION -->

    <?php

    $elements = ["Monsieur", "Madame", "Mademoiselle"];

    function afficherRadio($nomsRadio)
    {
        foreach ($nomsRadio as $value) {
            echo
            "<input type='radio' value=$value> $value </option><br>";
        }
    }

    afficherRadio($elements);

    ?>

    <?php

    $a = ['Nom', 'Prenom', 'Adresse', 'Sexe', 'Ville'];
    $b = ['Dev Logiciel', 'Designer Web', 'Intégrateur', 'Chef de projet'];
    ?>

    <form>
        <?=
        afficherInput($a);
        alimenterListeDeroulante($b); ?>
        <button type=submit>Envoyer</button>
        <form>

</body>

</html>