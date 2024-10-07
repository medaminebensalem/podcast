<?php
// Liste des épisodes de podcast. Vous pouvez charger ces informations depuis une base de données ou un fichier.
$episodes = [
    [
        'title' => 'Episode 1: Introduction',
        'description' => 'Introduction au podcast.',
        'audio_url' => 'path/to/episode1.mp3'
    ],
    [
        'title' => 'Episode 2: Le Sujet du Jour',
        'description' => 'Discussion approfondie sur le sujet du jour.',
        'audio_url' => 'path/to/episode2.mp3'
    ]
    // Ajoutez d'autres épisodes ici
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Podcast</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .episode {
            margin-bottom: 20px;
        }
        .episode h2 {
            margin: 0;
            font-size: 1.5em;
        }
        .episode p {
            margin: 0;
        }
        audio {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mon Podcast</h1>
        <?php foreach ($episodes as $episode): ?>
            <div class="episode">
                <h2><?php echo htmlspecialchars($episode['title']); ?></h2>
                <p><?php echo htmlspecialchars($episode['description']); ?></p>
                <audio controls>
                    <source src="<?php echo htmlspecialchars($episode['audio_url']); ?>" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'élément audio.
                </audio>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
