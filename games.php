<?php require_once ("templates/header.php");?>
<?php 
include 'data.php'; 

$id = $_GET['id'] ?? '';
$game = null;

// Recherche du jeu
foreach ($games as $g) {
    if ($g['id'] === $id) {
        $game = $g;
        break;
    }
}

// Si le jeu n'existe pas
if (!$game) {
    echo "<h1>Jeu introuvable</h1>";
    exit;
}
?>

<div id="acceuil main">
    <div class="inner">
        <h1><?= htmlspecialchars($game['title']) ?></h1>

        <span class="image main">
            <img src="<?= htmlspecialchars($game['image']) ?>" 
                 alt="<?= htmlspecialchars($game['title']) ?>" 
                 height="<?= htmlspecialchars($game['height']) ?>" />
        </span>

        <p><?= htmlspecialchars($game['description']) ?></p>
        <p><?= htmlspecialchars($game['rules']) ?></p>

        <ul class="actions">
            <li>
                <a href="<?= $game['link'] ?>" type="submit" class="button primary">commencer</a>
            </li>
        </ul>
    </div>
</div>
<div id="main games-parts">
    <div class="inner">
    </div>
</div>

<?php require_once ("templates/footer.php"); ?>