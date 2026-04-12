<?php
/**
 * includes/nav.php
 * Requires: $base_path, $current_page
 */

$current_page = $current_page ?? '';
$bp           = htmlspecialchars($base_path ?? '');

/* [key => [label, icon, href, color hex, color rgb]] */
$nav_items = [
    'home'         => ['Accueil',                                    '⌂', $bp . 'index.php',                            '#00ff88', '0,255,136'],
    'socle'        => ['Le Socle',                                   '⬡', $bp . 'pages/socle.php',                      '#00ff88', '0,255,136'],
    'donnees'      => ['Protection des données',                     '⊙', $bp . 'pages/donnees-personnelles.php',       '#ff6b6b', '255,107,107'],
    'identite'     => ['Identité numérique',                         '◈', $bp . 'pages/identite-numerique.php',         '#74b9ff', '116,185,255'],
    'securisation' => ['Sécurisation des usages',                    '◉', $bp . 'pages/securisation-usages.php',        '#ffd93d', '255,217,61'],
    'dic'          => ['Disponibilité · Intégrité · Confidentialité','◆', $bp . 'pages/disponibilite.php',              '#a29bfe', '162,155,254'],
    'slam'         => ['Cybersécurité applicative',                  '⬡', $bp . 'pages/slam.php',                       '#fd79a8', '253,121,168'],
];

function renderNav(string $key, array $data, string $current): string {
    [$label, $icon, $href, $color, $rgb] = $data;
    $active = ($current === $key) ? ' active' : '';
    $extra  = ($key === 'slam') ? '<span class="nav-slam-tag">SLAM</span>' : '';
    return sprintf(
        '<a href="%s" class="nav-link%s" style="--c:%s;--cr:%s">'
        . '<span class="nav-ic">%s</span>%s%s</a>' . "\n",
        htmlspecialchars($href), $active, $color, $rgb, $icon,
        htmlspecialchars($label), $extra
    );
}
?>

<nav class="sidebar" id="sidebar">
    <div class="sb-logo">
        <div class="sb-shield">🛡</div>
        <div class="sb-logo-txt">
            <span class="ttl">CyberRévision</span>
            <span class="sub">BTS SIO · Bloc 3</span>
        </div>
    </div>

    <div class="nav-body">
        <?= renderNav('home',  $nav_items['home'],  $current_page) ?>
        <?= renderNav('socle', $nav_items['socle'], $current_page) ?>

        <span class="nav-group-label">Bloc 3 — 5 Compétences</span>
        <?= renderNav('donnees',      $nav_items['donnees'],      $current_page) ?>
        <?= renderNav('identite',     $nav_items['identite'],     $current_page) ?>
        <?= renderNav('securisation', $nav_items['securisation'], $current_page) ?>
        <?= renderNav('dic',          $nav_items['dic'],          $current_page) ?>

        <span class="nav-group-label" style="color:rgba(253,121,168,0.5)">Option SLAM</span>
        <?= renderNav('slam', $nav_items['slam'], $current_page) ?>
    </div>

    <div class="sb-foot">BTS SIO · Option SLAM · Bloc 3</div>
</nav>

<div class="overlay" id="overlay"></div>
<button class="mob-tog" id="mob-tog">☰</button>
