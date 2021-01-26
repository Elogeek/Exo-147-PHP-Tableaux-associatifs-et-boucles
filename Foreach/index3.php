<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
        "synospsis" => [""]
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
        "synospsis" => [""]
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
        "synospsis" => [""]
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
        "synospsis" => [""]
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $videos) {
    $acteurs = implode(", ", $videos['acteurs']);
    echo "Nom du film: " . $videos["nom"] . ", date:" . $videos['date'] . ", réalisateur: " .
        $videos['realisateur'] . ", acteurs: " . $acteurs . "<br>";
}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque[] = ['nom' => 'Demon Slayer', 'date' => '2020', 'realisateur' => 'Haruo Sotozaki',
    'acteurs' => ['Natsuki Hanae', 'Akari Kitō ', 'Daisuke Hirakawa']];
    'synopsis' => ["Un jeune garçon part en quête de vengeance après que sa famille ait été assassinée et sa petite soeur transformée en démon. 
    Commence alors un long périple dans l'espoir de trouver un remède. "];

    $videotheque [] = ["nom" =>"La Traversée du temps", "date"=> "2006", "realisateur"=> "Mamoru Hosoda",
        "acteurs" => ["Riisa Naka", "Takuya Ishida","Mitsutaka Itakura " ]];
            "synopsis" => [
                "Makoto est une jeune lycéenne ordinaire, un peu garçon manqué, accumulant les catastrophes et pas vraiment trop intéressée par l'école ! 
            Elle se réveille en retard, rate un examen surprise, manque de mettre le feu à l'établissement pendant le cours de cuisine, 
            se fait écrabouiller par des garçons lors d'une bagarre... 
            Mais sa vie bascule le jour où elle reçoit un don particulier : la capacité de voyager dans le temps. 
            Améliorer ses notes, aider les idylles naissantes, manger à répétition ses plats préférés, tout devient alors possible pour Makoto. 
            Mais influer sur le cours des choses est un don parfois bien dangereux, qui peut avoir de graves répercussions sur le présent... "
            ];

    $videotheque [] = ["nom" => "Qu'est-ce qu'on a fait au Bon Dieu ?", "date" => "2014", "realisateur" => "Phillipe de Chauveron",
           "acteurs" => ["Christian Clavier", "Elodie Fontan", "Frederique Bel"]];
            "synopsis" => [
                "Claude Verneuil, un notaire se disant de tradition gaulliste, et sa femme Marie, sont des bourgeois catholiques et parents de quatre filles : Isabelle, Odile, Ségolène et Laure.
                Les trois premières sont déjà mariées à des Français issus de l'immigration et de religions différentes: mulsuman, juif et chinois
                Les Verneuil font des sourires de façades à leurs gendres mais ont du mal à cacher leur racisme, surtout Claude.
                Les Verneuil, désespérés, mettent toute leur confiance en la dernière, Laure pour qu'elle ramène à la maison un catholique,...
                Mais ce qu'ils ignorent, c'est que Laure est déjà en couple... "
            ];
