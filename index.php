<?php
$page_title   = 'Accueil';
$base_path    = '';
$current_page = 'home';
$accent_color = '#00ff88';
$accent_rgb   = '0,255,136';

require 'includes/header.php';
require 'includes/nav.php';
?>

<main class="main">

    <!-- Hero -->
    <section class="hero">
        <canvas class="hero-canvas" id="matrix-canvas"></canvas>
        <div class="hero-inner">
            <div class="hero-badge">🛡 BTS SIO · Option SLAM · Bloc 3</div>
            <h1>Révision <em>Cybersécurité</em><br>BTS SIO — Bloc 3</h1>
            <p class="sub">
                Fiches de révision structurées autour des 5 compétences officielles du Bloc 3,
                précédées du socle fondamental. La partie SLAM est traitée en dernier,
                car elle est la plus spécifique à l'option.
            </p>
        </div>
    </section>

    <!-- Stats -->
    <div class="stat-row">
        <div class="stat-item">
            <span class="stat-num">6</span>
            <span class="stat-lbl">Modules de révision</span>
        </div>
        <div class="stat-item">
            <span class="stat-num">5</span>
            <span class="stat-lbl">Compétences officielles Bloc 3</span>
        </div>
        <div class="stat-item">
            <span class="stat-num" style="color:var(--c-slam)">SLAM</span>
            <span class="stat-lbl">Option spécifique</span>
        </div>
        <div class="stat-item">
            <span class="stat-num" style="color:var(--c-dic)">BTS</span>
            <span class="stat-lbl">Programme officiel</span>
        </div>
    </div>

    <!-- Content -->
    <div class="content">

        <div class="sh">
            <h2>Modules de révision</h2>
            <div class="sh-line"></div>
            <span class="sh-cnt">6 modules · cliquer pour accéder</span>
        </div>

        <div class="cards-grid">

            <!-- 0 — Le Socle -->
            <a href="pages/socle.php" class="sec-card" style="--cc:var(--c-socle)">
                <div class="sec-icon">⬡</div>
                <h3>Le Socle</h3>
                <p>Fondamentaux de la cybersécurité : vocabulaire, acteurs, normes (ISO 27001, ANSSI), référentiels et types de menaces.</p>
                <span class="sec-cta" style="color:var(--c-socle)">Réviser le socle</span>
            </a>

            <!-- 1 — Données personnelles -->
            <a href="pages/donnees-personnelles.php" class="sec-card" style="--cc:var(--c-donnees)">
                <div class="sec-icon">⊙</div>
                <h3>Protection des données personnelles</h3>
                <p>RGPD, droits des personnes concernées, obligations des entreprises, rôle du DPO et cadre de la CNIL.</p>
                <span class="sec-cta" style="color:var(--c-donnees)">Réviser cette partie</span>
            </a>

            <!-- 2 — Identité numérique -->
            <a href="pages/identite-numerique.php" class="sec-card" style="--cc:var(--c-identite)">
                <div class="sec-icon">◈</div>
                <h3>Identité numérique de l'organisation</h3>
                <p>Certificats numériques, PKI/IGC, gestion des identités (IAM), annuaires LDAP / Active Directory et SSO.</p>
                <span class="sec-cta" style="color:var(--c-identite)">Réviser cette partie</span>
            </a>

            <!-- 3 — Sécurisation des usages -->
            <a href="pages/securisation-usages.php" class="sec-card" style="--cc:var(--c-secure)">
                <div class="sec-icon">◉</div>
                <h3>Sécurisation des usages</h3>
                <p>Sécurité des postes de travail, messagerie, navigateurs, réseaux Wi-Fi, VPN et bonnes pratiques utilisateurs.</p>
                <span class="sec-cta" style="color:var(--c-secure)">Réviser cette partie</span>
            </a>

            <!-- 4 — DIC -->
            <a href="pages/disponibilite.php" class="sec-card" style="--cc:var(--c-dic)">
                <div class="sec-icon">◆</div>
                <h3>Disponibilité · Intégrité · Confidentialité</h3>
                <p>Trilogie CIA/DIC, chiffrement symétrique et asymétrique, hachage, PCA/PRA, sauvegardes et haute disponibilité.</p>
                <span class="sec-cta" style="color:var(--c-dic)">Réviser cette partie</span>
            </a>

            <!-- 5 — SLAM -->
            <a href="pages/slam.php" class="sec-card" style="--cc:var(--c-slam)">
                <div class="sec-icon">⬡</div>
                <h3>Cybersécurité applicative <span style="font-size:11px;font-family:var(--ff-mono);color:var(--c-slam);vertical-align:middle">SLAM</span></h3>
                <p>OWASP Top 10, injections SQL/XSS, authentification, sécurité API, DevSecOps et tests de sécurité (SAST/DAST).</p>
                <span class="sec-cta" style="color:var(--c-slam)">Réviser cette partie</span>
            </a>

        </div>
    </div>

</main>

<?php require 'includes/footer.php'; ?>
