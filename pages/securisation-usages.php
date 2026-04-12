<?php
$page_title   = 'Sécurisation des usages';
$base_path    = '../';
$current_page = 'securisation';
$accent_color = '#ffd93d';
$accent_rgb   = '255,217,61';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">◉ Compétence 3 · Bloc 3</div>
            <h1>Sécurisation des <em>usages</em></h1>
            <p class="sub">
                Identifier les menaces sur les postes utilisateurs et mettre en œuvre
                les protections physiques et logiques : chiffrement, pare-feu, antivirus,
                durcissement, gestion des privilèges et audit de sécurité.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Sécurisation des usages</span>
        </div>

        <div class="page-intro">
            <p>
                La compétence B3.3 couvre la <strong>sécurisation des équipements et des usages des utilisateurs</strong> :
                identifier les menaces sur les postes, gérer les accès et les privilèges,
                puis vérifier l'efficacité de la protection par un audit de sécurité.
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Notions du Socle 3 à maîtriser</span>
            <ul>
                <li>Risques et menaces liés aux postes utilisateurs</li>
                <li>Comportements à risque / bons usages</li>
                <li>Sécurité physique du poste</li>
                <li>Séquence de démarrage</li>
                <li>Chiffrement du disque</li>
                <li>Supports amovibles</li>
                <li>Verrouillage de session</li>
                <li>Contrôle des connexions réseau — Wi-Fi / Bluetooth</li>
                <li>Sécurité logique du poste</li>
                <li>Ouverture de session / mot de passe</li>
                <li>Pare-feu</li>
                <li>Antivirus</li>
                <li>Mises à jour automatiques</li>
                <li>Durcissement du poste</li>
                <li>Limitation des logiciels installés</li>
                <li>Gestion des utilisateurs locaux</li>
                <li>Privilèges / habilitations</li>
                <li>Connexions nomades sécurisées</li>
                <li>Audit de sécurité d'un poste de travail</li>
            </ul>
        </div>

        <!-- Section A -->
        <div class="sh"><h2>Risques, menaces et comportements</h2><div class="sh-line"></div><span class="sh-cnt">Comprendre les enjeux</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Risques et menaces liés aux postes utilisateurs</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le poste de travail est la première porte d'entrée des attaquants dans le SI. Les principales menaces qui le ciblent sont :</p>
                    <ul>
                        <li><strong>Malwares</strong> (virus, ransomware, trojan, spyware, keylogger) introduits via pièces jointes, sites web ou supports amovibles.</li>
                        <li><strong>Vol ou perte physique</strong> du poste ou du disque dur.</li>
                        <li><strong>Accès non autorisé</strong> à une session laissée ouverte ou à un compte sans verrouillage.</li>
                        <li><strong>Élévation de privilèges</strong> : exploitation d'une vulnérabilité pour obtenir des droits administrateur.</li>
                        <li><strong>Exfiltration de données</strong> par un employé malveillant ou via un logiciel espion.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Comportements à risque et bons usages</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Comportements à risque</strong> fréquemment observés :</p>
                    <ul>
                        <li>Cliquer sur un lien ou ouvrir une pièce jointe sans vérification.</li>
                        <li>Utiliser un mot de passe trivial ou réutilisé sur plusieurs services.</li>
                        <li>Brancher une clé USB trouvée ou non inventoriée.</li>
                        <li>Laisser sa session ouverte en quittant son poste.</li>
                        <li>Installer des logiciels non approuvés (Shadow IT).</li>
                        <li>Se connecter à un Wi-Fi public sans VPN.</li>
                    </ul>
                    <p><strong>Bons usages</strong> à promouvoir : verrouillage automatique de session, mise à jour régulière, signalement des incidents, usage exclusif des outils approuvés, séparation des usages pro/perso.</p>
                </div></div>
            </div>

        </div>

        <!-- Section B -->
        <div class="sh"><h2>Sécurité physique du poste</h2><div class="sh-line"></div><span class="sh-cnt">Protection matérielle</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Séquence de démarrage (BIOS/UEFI)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>séquence de démarrage</strong> (boot) définit l'ordre dans lequel le firmware (BIOS/UEFI) tente d'amorcer le système. Un attaquant ayant un accès physique peut démarrer sur un support externe (clé USB, DVD) pour contourner les protections du système d'exploitation.</p>
                    <p>Mesures de protection :</p>
                    <ul>
                        <li>Définir le disque interne comme <strong>seul périphérique de démarrage</strong>.</li>
                        <li>Protéger l'accès au BIOS/UEFI par un <strong>mot de passe</strong>.</li>
                        <li>Activer le <strong>Secure Boot</strong> (UEFI) pour n'autoriser que les systèmes d'exploitation signés.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Chiffrement du disque et supports amovibles</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>chiffrement du disque</strong> rend les données inaccessibles sans la clé de déchiffrement, même en cas de vol du disque ou du poste. Solutions courantes :</p>
                    <ul>
                        <li><strong>BitLocker</strong> (Windows) : chiffrement AES, déverrouillage via puce TPM + PIN ou clé USB.</li>
                        <li><strong>VeraCrypt</strong> (multiplateforme) : solution open-source pour volumes chiffrés.</li>
                        <li><strong>LUKS</strong> (Linux) : chiffrement natif des partitions.</li>
                    </ul>
                    <p>Les <strong>supports amovibles</strong> (clés USB, disques externes) représentent un vecteur d'infection (autorun malveillant) et d'exfiltration. Mesures : désactivation de l'autorun, chiffrement obligatoire des supports, politique de liste blanche des périphériques USB.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Verrouillage de session, Wi-Fi &amp; Bluetooth</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>verrouillage automatique de session</strong> protège contre l'accès non autorisé lors d'une absence de l'utilisateur. Bonne pratique : verrouillage après 5 minutes d'inactivité minimum, déverrouillage par mot de passe ou MFA.</p>
                    <p><strong>Wi-Fi</strong> : éviter les réseaux ouverts ou non chiffrés. Sur poste professionnel, désactiver le Wi-Fi lorsqu'il n'est pas nécessaire et n'autoriser que les réseaux approuvés (via GPO ou profils MDM).</p>
                    <p><strong>Bluetooth</strong> : vecteur d'attaques (Bluejacking, Bluesnarfing, BlueBorne). Désactiver quand inutilisé, refuser les appairages non sollicités, maintenir le firmware à jour.</p>
                </div></div>
            </div>

        </div>

        <!-- Section C -->
        <div class="sh"><h2>Sécurité logique du poste</h2><div class="sh-line"></div><span class="sh-cnt">Protections système</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Ouverture de session et politique de mots de passe</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>ouverture de session</strong> est le point d'entrée du système : elle doit être protégée par des identifiants robustes et uniques par utilisateur (pas de session partagée).</p>
                    <p>Une <strong>politique de mots de passe</strong> efficace fixe : longueur minimale (≥ 12 caractères recommandés par l'ANSSI), complexité (majuscules, chiffres, caractères spéciaux), durée de validité, historique (pas de réutilisation), verrouillage après tentatives échouées.</p>
                    <p>L'usage d'un <strong>gestionnaire de mots de passe</strong> (KeePass, Bitwarden…) est recommandé pour éviter la réutilisation et faciliter l'adoption de mots de passe longs et uniques.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Pare-feu et antivirus</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>pare-feu personnel</strong> (Windows Defender Firewall, iptables sous Linux) filtre les connexions réseau entrantes et sortantes du poste. Il bloque les communications non autorisées et isole le poste d'un réseau compromis.</p>
                    <p>L'<strong>antivirus / anti-malware</strong> détecte et neutralise les codes malveillants connus (signatures) et parfois inconnus (heuristique, comportement). Les solutions <strong>EDR (Endpoint Detection and Response)</strong> vont plus loin : détection de comportements anormaux, corrélation d'événements, réponse automatisée.</p>
                    <p>Ces deux outils doivent être <strong>actifs en permanence</strong> et mis à jour quotidiennement.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Mises à jour automatiques</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La majorité des attaques exploitent des <strong>vulnérabilités connues et corrigées</strong> que les victimes n'ont pas encore appliquées. Maintenir le système et les logiciels à jour est donc l'une des mesures les plus efficaces.</p>
                    <p>En entreprise, les mises à jour sont centralisées via des solutions comme <strong>WSUS</strong> (Windows Server Update Services), <strong>SCCM/Intune</strong> ou des outils de gestion des correctifs (patch management), permettant de tester les mises à jour avant déploiement massif.</p>
                    <p>Principe clé : le délai entre la publication d'un correctif et son déploiement doit être le plus court possible — surtout pour les vulnérabilités critiques (CVSS ≥ 9).</p>
                </div></div>
            </div>

        </div>

        <!-- Section D -->
        <div class="sh"><h2>Durcissement, accès &amp; audit</h2><div class="sh-line"></div><span class="sh-cnt">Minimiser la surface d'attaque</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Durcissement du poste et limitation des logiciels</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>durcissement (hardening)</strong> consiste à réduire la surface d'attaque d'un poste en supprimant tout ce qui n'est pas strictement nécessaire :</p>
                    <ul>
                        <li>Désactiver les services inutilisés (Telnet, FTP, RDP si non nécessaire…).</li>
                        <li>Supprimer les logiciels non utilisés.</li>
                        <li>Appliquer une <strong>liste blanche d'applications</strong> (AppLocker sous Windows) : seuls les logiciels approuvés peuvent s'exécuter.</li>
                        <li>Fermer les ports réseau inutilisés.</li>
                        <li>Désactiver les fonctionnalités non nécessaires (macros Office, lecture automatique USB…).</li>
                    </ul>
                    <p>Des guides de durcissement existent pour chaque OS : guides CIS Benchmarks, recommandations ANSSI.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion des utilisateurs locaux, privilèges et habilitations</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le principe du <strong>moindre privilège</strong> est fondamental : chaque utilisateur ne doit disposer que des droits strictement nécessaires à ses missions, ni plus.</p>
                    <ul>
                        <li><strong>Comptes utilisateurs locaux</strong> : les comptes administrateur local par défaut doivent être renommés ou désactivés. Les utilisateurs travaillent en compte standard.</li>
                        <li><strong>Séparation des droits</strong> : un compte dédié à l'administration (compte admin) distinct du compte de travail quotidien.</li>
                        <li><strong>Habilitations</strong> : attribution formelle des droits d'accès aux ressources selon le rôle (RBAC — Role-Based Access Control).</li>
                        <li><strong>Révision périodique</strong> des comptes et des droits, suppression des comptes obsolètes (départs, changements de poste).</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Connexions nomades sécurisées</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Lorsqu'un collaborateur se connecte au SI de l'organisation depuis l'extérieur (télétravail, déplacement), le canal de communication doit être sécurisé :</p>
                    <ul>
                        <li><strong>VPN (Virtual Private Network)</strong> : crée un tunnel chiffré entre le poste et le réseau de l'entreprise. Protocoles courants : IPsec/IKEv2, SSL/TLS (OpenVPN), WireGuard.</li>
                        <li><strong>Éviter les Wi-Fi publics</strong> sans VPN (aéroports, hôtels, cafés) : risque d'interception (Man-in-the-Middle).</li>
                        <li><strong>MFA obligatoire</strong> sur l'accès VPN ou portail distant.</li>
                        <li><strong>NAC (Network Access Control)</strong> : vérification de la conformité du poste (antivirus à jour, OS patché…) avant d'autoriser la connexion.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Audit de sécurité d'un poste de travail</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>audit de sécurité d'un poste</strong> vise à vérifier que les mesures de protection sont correctement appliquées. Il peut être réalisé manuellement ou à l'aide d'outils automatisés.</p>
                    <p>Points de contrôle typiques :</p>
                    <ul>
                        <li>Vérification des mises à jour OS et logiciels (niveaux de patches).</li>
                        <li>État du pare-feu et de l'antivirus (actif, base à jour).</li>
                        <li>Liste des comptes locaux et des droits (comptes admin non nécessaires ?).</li>
                        <li>Logiciels installés non autorisés.</li>
                        <li>Configurations de sécurité (Secure Boot, chiffrement disque actif, verrouillage de session…).</li>
                    </ul>
                    <p>Outils courants : <strong>Microsoft Baseline Security Analyzer</strong>, <strong>Lynis</strong> (Linux), scripts PowerShell, solutions CIS-CAT pour comparer à un benchmark de référence.</p>
                </div></div>
            </div>

        </div>

    </div>
</main>

<?php require '../includes/footer.php'; ?>
