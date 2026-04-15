<?php
$page_title   = 'Disponibilité · Intégrité · Confidentialité';
$base_path    = '../';
$current_page = 'dic';
$accent_color = '#a29bfe';
$accent_rgb   = '162,155,254';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">◆ Compétence 4 · Bloc 3</div>
            <h1>Disponibilité · Intégrité · <em>Confidentialité</em></h1>
            <p class="sub">
                Caractériser les risques d'usage malveillant, recenser les conséquences
                d'une perte de D/I/C, maîtriser les obligations d'archivage,
                et organiser la traçabilité, les preuves numériques et les plans de secours.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Disponibilité · Intégrité · Confidentialité</span>
        </div>

        <div class="page-intro">
            <p>
                La compétence B3.4 demande de <strong>caractériser les risques d'usage malveillant</strong>
                d'un service informatique, d'en recenser les conséquences métier,
                d'identifier les obligations légales d'archivage et de protection des données,
                puis d'organiser la collecte des preuves, la traçabilité et les plans de secours.
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Notions du Socle 4 à maîtriser</span>
            <ul>
                <li>Perte de disponibilité</li>
                <li>Perte d'intégrité</li>
                <li>Perte de confidentialité</li>
                <li>Risques liés à l'usage malveillant d'un service</li>
                <li>Conséquences métier d'une attaque</li>
                <li>Protection et archivage des données</li>
                <li>Obligations légales d'archivage</li>
                <li>Obligations légales de protection des données</li>
                <li>Collecte des preuves numériques</li>
                <li>Conservation des preuves numériques</li>
                <li>Traçabilité</li>
                <li>Journalisation</li>
                <li>Audit technique</li>
                <li>Plans de secours / continuité</li>
                <li>Contre-mesures face à un incident</li>
            </ul>
        </div>

        <!-- Section A : Risques et conséquences -->
        <div class="sh"><h2>Risques et conséquences d'une atteinte à la DIC</h2><div class="sh-line"></div><span class="sh-cnt">Impact métier</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Perte de disponibilité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>perte de disponibilité</strong> est l'impossibilité pour les utilisateurs autorisés d'accéder à un service ou à des données au moment où ils en ont besoin.</p>
                    <p>Causes principales : attaque par déni de service (DoS / DDoS), ransomware chiffrant les données, panne matérielle ou réseau, erreur humaine (suppression accidentelle).</p>
                    <p>Conséquences métier : interruption de la production ou des ventes, perte de revenus, pénalités contractuelles (SLA non respectés), atteinte à la continuité de service critique (hôpital, transport, banque…).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Perte d'intégrité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>perte d'intégrité</strong> survient lorsque des données ont été modifiées de façon non autorisée ou non détectée : falsification de factures, altération d'un journal de logs, modification d'un code source en production.</p>
                    <p>Causes : injection SQL, accès non autorisé à une base de données, malware modifiant des fichiers, attaque Man-in-the-Middle sur un flux non chiffré.</p>
                    <p>Conséquences : décisions basées sur des données fausses, fraude financière, responsabilité juridique, perte de confiance des parties prenantes.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Perte de confidentialité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>perte de confidentialité</strong> est la divulgation de données à des personnes non autorisées : fuite d'une base clients, vol d'un secret industriel, exposition de données personnelles (RGPD).</p>
                    <p>Causes : exfiltration par un attaquant externe, négligence interne (envoi d'un fichier au mauvais destinataire), accès tiers non sécurisé, stockage sans chiffrement.</p>
                    <p>Conséquences : sanctions RGPD (jusqu'à 4 % du CA mondial), atteinte à la réputation, perte d'avantage concurrentiel, perte de confiance des clients, recours juridiques.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Risques liés à l'usage malveillant d'un service</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Un service informatique peut être détourné de son usage légitime pour nuire à l'organisation ou à des tiers :</p>
                    <ul>
                        <li><strong>Serveur mail compromis</strong> utilisé comme relais de spam ou de phishing.</li>
                        <li><strong>Comptes utilisateurs volés</strong> servant à des fraudes (virement frauduleux, commandes fictives).</li>
                        <li><strong>Infrastructure compromise</strong> intégrée dans un botnet pour des attaques DDoS.</li>
                        <li><strong>Accès VPN légitime</strong> exploité par un attaquant pour pivoter dans le SI.</li>
                    </ul>
                    <p>Conséquences additionnelles : blacklistage du domaine, poursuites pour complicité involontaire, surcoût de bande passante.</p>
                </div></div>
            </div>

        </div>

        <!-- Section B : Archivage et obligations légales -->
        <div class="sh"><h2>Archivage, obligations légales et protection des données</h2><div class="sh-line"></div><span class="sh-cnt">Conformité</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Obligations légales d'archivage</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La loi impose des <strong>durées minimales de conservation</strong> pour de nombreux types de documents et données :</p>
                    <ul>
                        <li><strong>Données comptables</strong> : 10 ans (Code de commerce).</li>
                        <li><strong>Logs de connexion / traces d'accès</strong> : 1 an minimum (Loi pour la Confiance dans l'Économie Numérique — LCEN).</li>
                        <li><strong>Données RH</strong> : durée variable selon le type (5 ans pour les fiches de paie).</li>
                        <li><strong>Données de santé</strong> : 20 ans minimum après la dernière prise en charge.</li>
                    </ul>
                    <p>L'archivage doit garantir l'<strong>intégrité</strong> (non-altération), la <strong>lisibilité dans le temps</strong> (formats pérennes) et la <strong>confidentialité</strong> (accès restreint).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Obligations légales de protection des données</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Au-delà du RGPD, plusieurs textes encadrent la protection des données dans des contextes spécifiques :</p>
                    <ul>
                        <li><strong>Loi Informatique et Libertés (1978 / 2018)</strong> : cadre général en France.</li>
                        <li><strong>Directive NIS 2</strong> (transposée en 2024) : obligations de sécurité renforcées pour les opérateurs essentiels et importants.</li>
                        <li><strong>Hébergement de données de santé (HDS)</strong> : certification obligatoire pour tout prestataire hébergeant des données de santé à caractère personnel.</li>
                        <li><strong>Secret professionnel et secret des affaires</strong> : obligations de confidentialité renforcées dans certains secteurs.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- Section C : Preuves numériques et traçabilité -->
        <div class="sh"><h2>Preuves numériques, traçabilité et journalisation</h2><div class="sh-line"></div><span class="sh-cnt">Forensique &amp; audit</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Collecte et conservation des preuves numériques</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>collecte de preuves numériques</strong> (forensique) doit suivre une procédure rigoureuse pour que les preuves soient recevables en justice :</p>
                    <ul>
                        <li><strong>Identification</strong> : repérer les sources (disques, mémoire RAM, logs réseau, journaux applicatifs).</li>
                        <li><strong>Préservation</strong> : créer une <em>image forensique</em> (copie bit à bit) pour ne jamais travailler sur l'original.</li>
                        <li><strong>Hachage des preuves</strong> (SHA-256) pour attester l'intégrité de la copie.</li>
                        <li><strong>Chaîne de custody (chaîne de traçabilité)</strong> : documenter chaque manipulation de la preuve.</li>
                    </ul>
                    <p>La <strong>conservation</strong> doit garantir l'intégrité dans le temps (stockage sécurisé, horodatage qualifié, coffre numérique).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Traçabilité et journalisation</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>traçabilité</strong> consiste à enregistrer systématiquement toutes les actions significatives sur le SI : connexions, accès aux données, modifications, erreurs, actions administrateur.</p>
                    <p>La <strong>journalisation (logging)</strong> est le mécanisme technique qui produit ces enregistrements (fichiers de logs, journaux d'événements Windows, syslog…).</p>
                    <p>Bonnes pratiques :</p>
                    <ul>
                        <li>Centraliser les logs dans un <strong>SIEM</strong> (Security Information and Event Management).</li>
                        <li>Synchroniser les horloges (NTP) pour la cohérence temporelle des logs.</li>
                        <li>Protéger les logs contre la falsification (stockage en écriture seule, signature).</li>
                        <li>Définir une durée de rétention conforme aux obligations légales (minimum 1 an pour LCEN).</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Audit technique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>audit technique de sécurité</strong> est une vérification approfondie du niveau de sécurité d'un système, réalisée à intervalles réguliers ou après un incident.</p>
                    <p>Types d'audits :</p>
                    <ul>
                        <li><strong>Audit de configuration</strong> : vérification des réglages des équipements (OS, pare-feu, SGBD) par rapport à un référentiel (CIS Benchmarks, ANSSI).</li>
                        <li><strong>Audit de code</strong> : revue manuelle ou automatisée du code source.</li>
                        <li><strong>Test d'intrusion (pentest)</strong> : simulation d'attaque pour identifier les vulnérabilités exploitables.</li>
                        <li><strong>Audit de journaux</strong> : analyse des logs pour détecter des comportements anormaux ou des incidents passés.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- Section D : Plans de secours et contre-mesures -->
        <div class="sh"><h2>Plans de secours, continuité et contre-mesures</h2><div class="sh-line"></div><span class="sh-cnt">Résilience</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Plans de secours et de continuité (PCA / PRA)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>Plan de Continuité d'Activité (PCA)</strong> définit les mesures organisationnelles et techniques permettant de maintenir ou reprendre l'activité au plus vite en cas d'incident majeur.</p>
                    <p>Le <strong>Plan de Reprise d'Activité (PRA)</strong> se concentre sur la restauration du SI : quelles sauvegardes, dans quel ordre, quel délai.</p>
                    <p>Indicateurs clés :</p>
                    <ul>
                        <li><strong>RPO (Recovery Point Objective)</strong> : perte de données maximale acceptable — détermine la fréquence des sauvegardes.</li>
                        <li><strong>RTO (Recovery Time Objective)</strong> : durée maximale de reprise tolérable — détermine les moyens de secours nécessaires.</li>
                    </ul>
                    <p>Un PCA/PRA doit être régulièrement <strong>testé</strong> (exercice de crise, restauration test) pour valider son efficacité.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Contre-mesures face à un incident</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Face à un incident de sécurité, la réponse suit généralement les étapes suivantes :</p>
                    <ul>
                        <li><strong>Détection et qualification</strong> : identifier la nature et la gravité de l'incident (via SIEM, alertes antivirus, signalement utilisateur).</li>
                        <li><strong>Confinement</strong> : isoler les systèmes compromis pour stopper la propagation (déconnexion réseau, blocage de compte).</li>
                        <li><strong>Éradication</strong> : supprimer la cause racine (malware, accès backdoor, compte compromis).</li>
                        <li><strong>Restauration</strong> : remettre en service depuis des sauvegardes saines, vérifier l'intégrité.</li>
                        <li><strong>Retour d'expérience (REX)</strong> : analyser l'incident, mettre à jour les procédures et renforcer les protections.</li>
                    </ul>
                    <p>Obligations de déclaration : CNIL sous 72h si données personnelles concernées, ANSSI pour les OIV/OSE.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Protection et archivage des données — stratégie globale</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Une stratégie cohérente associe :</p>
                    <ul>
                        <li><strong>Sauvegardes régulières</strong> selon la règle <strong>3-2-1</strong> : 3 copies, sur 2 supports différents, dont 1 hors site (ou hors ligne).</li>
                        <li><strong>Chiffrement des sauvegardes</strong> pour garantir la confidentialité même en cas de vol du support.</li>
                        <li><strong>Tests de restauration</strong> réguliers pour valider la récupérabilité des données.</li>
                        <li><strong>Archivage à long terme</strong> dans des formats pérennes (PDF/A, CSV…) avec signature et horodatage qualifiés.</li>
                        <li><strong>Politique de rétention</strong> documentée, alignée sur les obligations légales et les besoins métier.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <div class="quiz-cta">
            <div class="quiz-cta-inner">
                <span class="quiz-cta-icon">◆</span>
                <div class="quiz-cta-text">
                    <strong>Prêt à te tester ?</strong>
                    <span>Lance le quiz sur <em>Disponibilité · Intégrité · Confidentialité</em> — 10 questions aléatoires.</span>
                </div>
                <a href="quiz.php?theme=disponibilite" class="quiz-cta-btn">Démarrer le quiz →</a>
            </div>
        </div>

    </div>
</main>

<?php require '../includes/footer.php'; ?>
