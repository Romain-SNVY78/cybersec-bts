<?php
$page_title   = 'Le Socle';
$base_path    = '../';
$current_page = 'socle';
$accent_color = '#00ff88';
$accent_rgb   = '0,255,136';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">⬡ Module 0 — Fondamentaux</div>
            <h1>Le <em>Socle</em></h1>
            <p class="sub">
                Avant de plonger dans les 5 compétences officielles du Bloc 3,
                ce module couvre les bases incontournables : vocabulaire, acteurs,
                normes et types de menaces.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Le Socle</span>
        </div>

        <div class="page-intro">
            <p>
                Ce module couvre le vocabulaire fondamental sans lequel on bloque partout.
                C'est la condition préalable à toutes les compétences du Bloc 3 SIO.
                Chaque terme listé ci-dessous peut tomber à l'examen ou en situation professionnelle.
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Vocabulaire à maîtriser absolument</span>
            <ul>
                <li>Système d'information à protéger</li>
                <li>Actifs / biens à protéger</li>
                <li>Données personnelles / données sensibles</li>
                <li>Vulnérabilité</li>
                <li>Menace</li>
                <li>Exploit</li>
                <li>Attaque</li>
                <li>Risque</li>
                <li>Impact</li>
                <li>Sécurité vs sûreté</li>
                <li>Disponibilité</li>
                <li>Intégrité</li>
                <li>Confidentialité</li>
                <li>Preuve numérique</li>
                <li>Typologie des risques</li>
                <li>Indicateurs de sécurité / performance</li>
            </ul>
        </div>

        <!-- Section A : Définitions & Vocabulaire -->
        <div class="sh"><h2>Définitions &amp; Vocabulaire</h2><div class="sh-line"></div><span class="sh-cnt">Notions de base</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Système d'information et actifs à protéger</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Un <strong>système d'information (SI)</strong> regroupe l'ensemble des ressources — matériels, logiciels, données, personnes et processus — qui permettent de collecter, stocker, traiter et diffuser l'information au sein d'une organisation.</p>
                        <p>Les <strong>actifs</strong> (ou biens à protéger) sont tous les éléments ayant de la valeur pour l'organisation : données, serveurs, applications, réseau, locaux, réputation…</p>
                        <p>Toute démarche de sécurité commence par identifier et recenser ces actifs, afin de prioriser les efforts de protection.</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Données personnelles, sensibles et preuve numérique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Une <strong>donnée personnelle</strong> est toute information permettant d'identifier directement ou indirectement une personne physique (nom, adresse IP, numéro de téléphone…).</p>
                        <p>Les <strong>données sensibles</strong> forment une sous-catégorie dont la divulgation peut entraîner des discriminations : santé, origine ethnique, opinions politiques, biométrie… Leur traitement est en principe interdit sauf exceptions.</p>
                        <p>Une <strong>preuve numérique</strong> est un élément électronique servant à démontrer qu'un événement a eu lieu : journaux système (logs), métadonnées, captures réseau…</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Vulnérabilité, menace et exploit</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Une <strong>vulnérabilité</strong> est une faiblesse d'un composant (logiciel, matériel ou humain) susceptible d'être exploitée.</p>
                        <p>Une <strong>menace</strong> est un événement ou un acteur potentiel pouvant tirer parti d'une vulnérabilité pour causer un préjudice (ex : hacker, catastrophe naturelle, employé malveillant).</p>
                        <p>Un <strong>exploit</strong> est le code ou la technique concrète qui exploite une vulnérabilité précise pour déclencher une attaque. Un exploit transforme une menace potentielle en attaque réelle.</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Attaque, risque et impact</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Une <strong>attaque</strong> est l'action intentionnelle d'exploiter une vulnérabilité pour compromettre la sécurité d'un système (confidentialité, intégrité ou disponibilité).</p>
                        <p>Le <strong>risque</strong> représente la combinaison de la probabilité qu'une menace se réalise et de la gravité de ses conséquences : <em>Risque = Probabilité × Impact</em>.</p>
                        <p>L'<strong>impact</strong> désigne les conséquences concrètes d'un incident : pertes financières, indisponibilité du SI, atteinte à la réputation, sanctions légales (RGPD…).</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Disponibilité, Intégrité, Confidentialité (DIC)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Ces trois piliers — souvent appelés triptyque DIC ou triade CIA — forment les objectifs fondamentaux de la sécurité de l'information :</p>
                        <ul>
                            <li><strong>Disponibilité</strong> : les ressources sont accessibles quand les utilisateurs autorisés en ont besoin (ex : taux de disponibilité 99,9 %).</li>
                            <li><strong>Intégrité</strong> : les données n'ont pas été altérées ou modifiées de façon non autorisée.</li>
                            <li><strong>Confidentialité</strong> : les informations ne sont accessibles qu'aux personnes habilitées.</li>
                        </ul>
                        <p>On y ajoute parfois la <strong>non-répudiation</strong> : impossibilité de nier avoir effectué une action (ex : signature électronique).</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Sécurité vs sûreté — Risques et indicateurs</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>La <strong>sécurité</strong> (security) protège contre les actes malveillants intentionnels.</p>
                        <p>La <strong>sûreté</strong> (safety) protège contre les accidents non intentionnels : pannes matérielles, erreurs humaines, catastrophes naturelles.</p>
                        <p>La <strong>typologie des risques</strong> classe les menaces en grandes familles : accidentelles, humaines intentionnelles (internes ou externes), environnementales.</p>
                        <p>Les <strong>indicateurs de sécurité</strong> (KPI / KRI) permettent de mesurer et piloter le niveau de protection : nombre de vulnérabilités détectées, délai moyen de détection/correction, taux de disponibilité, nombre d'incidents…</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section B : Acteurs -->
        <div class="sh"><h2>Acteurs de la cybersécurité</h2><div class="sh-line"></div><span class="sh-cnt">Qui fait quoi</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>L'ANSSI et les organismes nationaux</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>L'<strong>ANSSI</strong> (Agence Nationale de la Sécurité des Systèmes d'Information) est l'autorité nationale en matière de cybersécurité, placée sous la tutelle du Premier Ministre (SGDSN).</p>
                        <p>Ses missions : conseiller, protéger, détecter, réagir et former. Elle publie des guides de bonnes pratiques et des référentiels (RGS, EBIOS, guides de durcissement).</p>
                        <ul>
                            <li><strong>CERT-FR</strong> : centre de réponse aux incidents, alerte les organisations en cas de cyberattaque.</li>
                            <li><strong>CNIL</strong> : Commision Nationale de l'Informatique et des Libertés — contrôle la conformité au RGPD, reçoit les notifications de violations de données.</li>
                            <li><strong>ENISA</strong> : agence de l'Union Européenne pour la cybersécurité (équivalent européen de l'ANSSI).</li>
                            <li><strong>Cybermalveillance.gouv.fr</strong> : plateforme d'assistance pour les particuliers, TPE/PME et collectivités victimes de cyberattaques.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Acteurs internes : RSSI, DSI, DPO</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <ul>
                            <li><strong>RSSI</strong> (Responsable de la Sécurité des SI) : définit et pilote la politique de sécurité, gère les risques, sensibilise les utilisateurs et coordonne la réponse aux incidents.</li>
                            <li><strong>DSI</strong> (Directeur des Systèmes d'Information) : responsable de l'infrastructure, des applications et de la continuité du service. La sécurité est intégrée à ses responsabilités opérationnelles.</li>
                            <li><strong>DPO</strong> (Délégué à la Protection des Données) : obligatoire pour certaines organisations (art. 37 RGPD). Indépendant, il conseille sur la conformité RGPD, surveille les traitements et fait le lien avec la CNIL. Il ne peut pas être sanctionné pour l'exercice de ses missions.</li>
                        </ul>
                        <p>Dans une PME, ces rôles peuvent être cumulés ou assurés par un prestataire externe.</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Hackers et profils d'attaquants</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <ul>
                            <li><strong>White hat</strong> : hacker éthique, agit avec autorisation (pentesters, chercheurs en sécurité, bug bounty).</li>
                            <li><strong>Black hat</strong> : cybercriminel, motivation financière ou malveillante, agit sans autorisation.</li>
                            <li><strong>Gray hat</strong> : entre les deux — peut tester sans autorisation mais sans intention de nuire.</li>
                            <li><strong>Script kiddie</strong> : utilise des outils et exploits existants sans réelle compétence technique.</li>
                            <li><strong>APT</strong> (Advanced Persistent Threat) : groupe d'attaquants organisés, souvent étatiques, menant des attaques ciblées et persistantes (ex : APT28/Fancy Bear, associé à la Russie).</li>
                            <li><strong>Insider threat</strong> : menace interne — employé malveillant ou négligent ayant accès légitime au SI.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section C : Menaces -->
        <div class="sh"><h2>Types de menaces &amp; attaques</h2><div class="sh-line"></div><span class="sh-cnt">Catalogue des attaques</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Malwares : virus, ransomware, spyware…</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>Un <strong>malware</strong> (malicious software) est tout programme conçu pour nuire à un système ou à ses données.</p>
                        <ul>
                            <li><strong>Virus</strong> : se propage en s'attachant à d'autres fichiers ; s'active à l'exécution.</li>
                            <li><strong>Ransomware</strong> : chiffre les fichiers et réclame une rançon pour la clé de déchiffrement (ex : WannaCry 2017, LockBit).</li>
                            <li><strong>Spyware</strong> : collecte des informations à l'insu de l'utilisateur (mots de passe, habitudes de navigation).</li>
                            <li><strong>Trojan</strong> (cheval de Troie) : programme en apparence légitime qui installe un accès distant ou un payload malveillant.</li>
                            <li><strong>Botnet</strong> : réseau de machines compromises (bots) contrôlé à distance pour lancer des DDoS ou envoyer du spam.</li>
                            <li><strong>Keylogger</strong> : enregistre toutes les frappes clavier.</li>
                            <li><strong>Rootkit</strong> : se dissimule dans le système pour masquer la présence d'autres malwares.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Ingénierie sociale et phishing</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>L'<strong>ingénierie sociale</strong> exploite la psychologie humaine (confiance, peur, urgence) plutôt que des failles techniques. Plus de 80 % des cyberattaques commencent par ce vecteur.</p>
                        <ul>
                            <li><strong>Phishing</strong> (hameçonnage) : faux e-mail ou faux site imitant un organisme de confiance (banque, CAF, impôts) pour voler des identifiants.</li>
                            <li><strong>Spear phishing</strong> : phishing ciblé sur une personne ou une organisation précise (email personnalisé, plus convaincant).</li>
                            <li><strong>Vishing</strong> : phishing par appel téléphonique (ex : faux conseiller bancaire).</li>
                            <li><strong>Smishing</strong> : phishing par SMS.</li>
                            <li><strong>Pretexting</strong> : création d'un scénario fictif pour obtenir des informations confidentielles.</li>
                            <li><strong>Baiting</strong> : clé USB infectée laissée dans un lieu public pour inciter à la brancher.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Attaques réseau (DoS, MitM, sniffing…)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <ul>
                            <li><strong>DoS / DDoS</strong> (Denial of Service / Distributed DoS) : saturation des ressources d'un serveur pour le rendre indisponible. Le DDoS utilise un botnet pour amplifier l'attaque.</li>
                            <li><strong>MitM</strong> (Man in the Middle) : l'attaquant s'interpose entre deux parties qui communiquent et peut lire, modifier ou injecter des messages.</li>
                            <li><strong>Sniffing</strong> : capture et analyse passive du trafic réseau (Wireshark). Dangereux sur les réseaux Wi-Fi non chiffrés.</li>
                            <li><strong>ARP poisoning</strong> : empoisonnement du cache ARP pour rediriger le trafic vers l'attaquant (prérequis fréquent au MitM).</li>
                            <li><strong>DNS spoofing</strong> : falsification des réponses DNS pour rediriger vers un site malveillant.</li>
                            <li><strong>Brute-force / credential stuffing</strong> : essai systématique de mots de passe ou de combinaisons login/mot de passe volées.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section D : Normes & Référentiels -->
        <div class="sh"><h2>Normes &amp; Référentiels</h2><div class="sh-line"></div><span class="sh-cnt">Cadres officiels</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>ISO 27001 — Système de management de la sécurité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>L'<strong>ISO/IEC 27001</strong> est la norme internationale de référence pour le management de la sécurité de l'information. Elle définit les exigences d'un <strong>SMSI</strong> (Système de Management de la Sécurité de l'Information).</p>
                        <ul>
                            <li>Basée sur le cycle <strong>PDCA</strong> (Plan-Do-Check-Act) : planifier → mettre en œuvre → contrôler → améliorer.</li>
                            <li><strong>Annexe A</strong> : 93 mesures de sécurité organisées en 4 thèmes (organisationnelles, humaines, physiques, technologiques). ISO 27002 en est le guide de mise en œuvre.</li>
                            <li>Une organisation peut obtenir une <strong>certification ISO 27001</strong> après audit par un organisme accrédité (AFNOR, Bureau Veritas…).</li>
                            <li>Compléments : ISO 27005 (gestion des risques), ISO 27701 (protection des données personnelles).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Référentiels ANSSI (EBIOS RM, guides, RGS)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <ul>
                            <li><strong>EBIOS Risk Manager</strong> (2018) : méthode française d'analyse et de traitement des risques cyber, développée par l'ANSSI. Basée sur 5 ateliers : cadrage → sources de risques → scénarios stratégiques → scénarios opérationnels → traitement du risque.</li>
                            <li><strong>RGS</strong> (Référentiel Général de Sécurité) : exigences de sécurité pour les systèmes d'information de l'État et les téléservices publics.</li>
                            <li><strong>Guides de bonnes pratiques</strong> : durcissement Windows/Linux, sécurité des applications web, mots de passe, messagerie, nomadisme… tous téléchargeables gratuitement sur le site ANSSI.</li>
                            <li><strong>PASSI</strong> (Prestataires d'Audit SSI qualifiés) : label pour les sociétés de pentest reconnues par l'ANSSI.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Politique de Sécurité du Système d'Information (PSSI)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>La <strong>PSSI</strong> est le document stratégique qui fixe les règles, objectifs et responsabilités en matière de sécurité au sein d'une organisation.</p>
                        <p>Elle contient :</p>
                        <ul>
                            <li>Le périmètre concerné (systèmes, données, acteurs).</li>
                            <li>Les enjeux et niveaux de risque acceptés.</li>
                            <li>Les règles de base : accès, mots de passe, équipements nomades, téléchargements, réseaux sociaux…</li>
                            <li>Les responsabilités de chaque acteur et les sanctions en cas de non-respect.</li>
                        </ul>
                        <p>La PSSI est <strong>approuvée par la direction</strong>, communiquée à tous les collaborateurs et doit être <strong>révisée périodiquement</strong> (au minimum après tout incident majeur ou changement d'organisation).</p>
                        <p>Elle forme la base de référence pour toutes les décisions de sécurité dans l'organisation.</p>
                    </div>
                </div>
            </div>

            <div class="tc">
                <div class="tc-head">
                    <span class="tc-dot"></span>
                    <h3>Analyse de risques</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body">
                    <div class="tc-body-inner">
                        <p>L'<strong>analyse de risques</strong> est le processus structuré d'identification, d'évaluation et de traitement des risques pesant sur le SI.</p>
                        <p>Démarche type :</p>
                        <ol>
                            <li>Identifier et valoriser les <strong>actifs</strong>.</li>
                            <li>Identifier les <strong>menaces</strong> et <strong>vulnérabilités</strong> associées.</li>
                            <li>Évaluer la <strong>probabilité</strong> de réalisation et l'<strong>impact</strong> potentiel.</li>
                            <li>Calculer le <strong>risque brut</strong> = Probabilité × Impact.</li>
                            <li>Définir et mettre en œuvre des <strong>mesures de traitement</strong>.</li>
                            <li>Calculer le <strong>risque résiduel</strong> (risque restant après mesures).</li>
                        </ol>
                        <p>Options de traitement : <strong>réduire</strong> (contre-mesures techniques), <strong>transférer</strong> (assurance cyber), <strong>accepter</strong> (risque résiduel faible), <strong>éviter</strong> (abandonner l'activité). Méthodes : EBIOS RM (ANSSI), ISO 27005.</p>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- /.content -->
</main>

<?php require '../includes/footer.php'; ?>
