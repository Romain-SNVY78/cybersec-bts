<?php
$page_title   = 'Cybersécurité d\'une solution applicative — SLAM';
$base_path    = '../';
$current_page = 'slam';
$accent_color = '#fd79a8';
$accent_rgb   = '253,121,168';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">⬡ Compétence 5 · Bloc 3 · Option SLAM</div>
            <h1>Cybersécurité d'une <em>solution applicative</em></h1>
            <p class="sub">
                Spécifique à l'option SLAM : qualité du développement, architectures,
                bases de données, API, frameworks, robustesse du code —
                puis vulnérabilités OWASP et DevSecOps.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Cybersécurité applicative SLAM</span>
        </div>

        <div class="page-intro">
            <p>
                La compétence B3.5 est propre à l'option <strong>SLAM</strong>.
                Elle couvre d'abord les <strong>bases du développement sécurisé</strong>
                (qualité, architectures, SGBD, API, frameworks, tests),
                puis les vulnérabilités applicatives (OWASP) et l'intégration
                de la sécurité dans le cycle de développement (DevSecOps / SSDLC).
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Notions du Socle 5.1 — Bases du développement sécurisé</span>
            <ul>
                <li>Qualité d'un développement</li>
                <li>Méthodes, normes et standards de développement</li>
                <li>Architecture applicative</li>
                <li>Modélisation des données et des traitements</li>
                <li>SGBD — contraintes d'intégrité / confidentialité / sécurité</li>
                <li>Cohérence / disponibilité / distribution des données</li>
                <li>Couche d'accès aux données</li>
                <li>API</li>
                <li>Frameworks</li>
                <li>Gestion des exceptions</li>
                <li>Modularité du code</li>
                <li>Robustesse du code</li>
                <li>Tests</li>
                <li>Intégration de composants</li>
            </ul>
        </div>

        <!-- Section 5.1 A : Qualité et méthodes -->
        <div class="sh"><h2>Qualité du développement et méthodes</h2><div class="sh-line"></div><span class="sh-cnt">Normes &amp; standards</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Qualité d'un développement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>qualité d'un développement</strong> se mesure à travers plusieurs critères :</p>
                    <ul>
                        <li><strong>Fiabilité</strong> : le code fonctionne correctement dans tous les cas prévus, y compris les cas limites.</li>
                        <li><strong>Maintenabilité</strong> : le code est lisible, bien structuré et documenté — il peut être modifié par un autre développeur.</li>
                        <li><strong>Sécurité</strong> : absence de vulnérabilités connues, validation des entrées, gestion correcte des erreurs.</li>
                        <li><strong>Performance</strong> : temps de réponse acceptable, usage raisonnable des ressources.</li>
                        <li><strong>Testabilité</strong> : le code peut être facilement couvert par des tests automatisés.</li>
                    </ul>
                    <p>Des outils comme les <strong>linters</strong>, l'analyse statique (SonarQube) et les revues de code permettent d'évaluer et d'améliorer la qualité.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Méthodes, normes et standards de développement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le développement s'appuie sur des <strong>méthodes de gestion de projet</strong> (cycle en V, méthodes Agile — Scrum, Kanban) qui influencent quand et comment la sécurité est intégrée.</p>
                    <p>Des <strong>normes et standards</strong> encadrent le développement sécurisé :</p>
                    <ul>
                        <li><strong>ISO 25010</strong> : modèle de qualité logicielle (fiabilité, sécurité, maintenabilité…).</li>
                        <li><strong>OWASP ASVS</strong> (Application Security Verification Standard) : référentiel d'exigences de sécurité par niveaux.</li>
                        <li><strong>Common Weakness Enumeration (CWE)</strong> : catalogue des faiblesses logicielles.</li>
                        <li><strong>Guides ANSSI</strong> sur le développement sécurisé web.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- Section 5.1 B : Architecture et données -->
        <div class="sh"><h2>Architecture applicative et données</h2><div class="sh-line"></div><span class="sh-cnt">Modélisation &amp; SGBD</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Architecture applicative</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>architecture applicative</strong> définit la structure d'une application et la façon dont ses composants interagissent. Les architectures courantes :</p>
                    <ul>
                        <li><strong>Architecture n-tiers</strong> (présentation / logique métier / données) : séparation des responsabilités qui facilite aussi la sécurisation de chaque couche.</li>
                        <li><strong>Architecture MVC</strong> (Modèle-Vue-Contrôleur) : structure standard des frameworks web (Laravel, Symfony, Django…).</li>
                        <li><strong>Architecture microservices</strong> : application découpée en services indépendants communicant via API — chaque service peut être sécurisé et mis à jour indépendamment.</li>
                        <li><strong>Architecture client-serveur</strong> : base de la majorité des applications web et mobiles.</li>
                    </ul>
                    <p>Le choix de l'architecture impacte directement la <strong>surface d'attaque</strong> et la capacité à isoler les composants sensibles.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Modélisation des données et des traitements</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>modélisation des données</strong> (MCD → MLD → MPD) permet d'identifier en amont les données sensibles et leurs relations, afin de leur appliquer les protections adéquates.</p>
                    <p>La <strong>modélisation des traitements</strong> (diagrammes de flux, UML — cas d'utilisation, diagrammes de séquence) aide à repérer les points d'entrée utilisateur qui devront être validés et les flux qui devront être sécurisés.</p>
                    <p>Intégrer la sécurité dans la modélisation (principe <em>security by design</em>) est bien moins coûteux que de la rajouter après coup.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>SGBD : contraintes d'intégrité, confidentialité et sécurité des données</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>Système de Gestion de Bases de Données (SGBD)</strong> est une cible privilégiée des attaquants. Notions clés :</p>
                    <ul>
                        <li><strong>Contraintes d'intégrité</strong> : clés primaires, clés étrangères, contraintes <code>NOT NULL</code>, <code>UNIQUE</code>, <code>CHECK</code> — garantissent la cohérence des données.</li>
                        <li><strong>Confidentialité</strong> : chiffrement des colonnes sensibles (mots de passe hashés, numéros de CB chiffrés), contrôle des accès par utilisateur SGBD.</li>
                        <li><strong>Principe du moindre privilège dans le SGBD</strong> : l'utilisateur applicatif n'a que les droits <code>SELECT</code>/<code>INSERT</code>/<code>UPDATE</code> nécessaires — jamais <code>DROP</code> ni <code>ALTER</code> en production.</li>
                        <li><strong>Cohérence / disponibilité / distribution (CAP)</strong> : compromis à connaître pour les bases distribuées (NoSQL).</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Couche d'accès aux données et API</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>couche d'accès aux données (DAL)</strong> est la partie du code qui communique avec le SGBD. Pour être sécurisée, elle doit :</p>
                    <ul>
                        <li>Utiliser exclusivement des <strong>requêtes préparées (prepared statements)</strong> ou un ORM pour éviter les injections SQL.</li>
                        <li>Valider et typer les données avant tout appel SGBD.</li>
                        <li>Gérer les erreurs SGBD sans exposer de détails techniques à l'utilisateur.</li>
                    </ul>
                    <p>Une <strong>API (Application Programming Interface)</strong> expose des fonctionnalités à des clients tiers. Elle doit être sécurisée : authentification (clé API, OAuth 2.0, JWT), autorisation par ressource, limitation de débit (rate limiting), validation stricte des entrées, versionnement.</p>
                </div></div>
            </div>

        </div>

        <!-- Section 5.1 C : Frameworks, robustesse et tests -->
        <div class="sh"><h2>Frameworks, robustesse et tests</h2><div class="sh-line"></div><span class="sh-cnt">Code de qualité</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Frameworks et intégration de composants</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Un <strong>framework</strong> fournit une structure de départ et des composants réutilisables (gestion des routes, ORM, moteur de templates, sécurité CSRF intégrée…). Il réduit le code « maison » souvent source d'erreurs.</p>
                    <p>Exemples courants : <strong>Symfony / Laravel</strong> (PHP), <strong>Django / Flask</strong> (Python), <strong>Spring Boot</strong> (Java), <strong>Express / NestJS</strong> (Node.js).</p>
                    <p>La sécurité via les frameworks passe par :</p>
                    <ul>
                        <li>Utiliser les mécanismes intégrés (protection CSRF, échappement automatique des templates, ORM).</li>
                        <li><strong>Maintenir le framework à jour</strong> : les failles corrigées ne profitent qu'aux projets qui appliquent les mises à jour.</li>
                        <li>Vérifier les <strong>dépendances tierces</strong> (bibliothèques npm, Composer, pip) via des outils SCA (Software Composition Analysis : npm audit, Snyk, OWASP Dependency-Check).</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion des exceptions et robustesse du code</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>gestion des exceptions</strong> est un point de sécurité critique : un message d'erreur trop détaillé peut révéler la structure de la base de données, le chemin du serveur ou le type de SGBD à un attaquant (information disclosure).</p>
                    <p>Bonnes pratiques :</p>
                    <ul>
                        <li>Afficher à l'utilisateur un message d'erreur générique et neutre.</li>
                        <li>Journaliser les détails techniques de l'erreur <strong>côté serveur uniquement</strong> (logs applicatifs).</li>
                        <li>Ne jamais propager des exceptions non gérées jusqu'à l'interface.</li>
                        <li>Gérer les cas limites : entrée nulle, chaîne vide, type inattendu, dépassement de capacité.</li>
                    </ul>
                    <p>La <strong>robustesse</strong> désigne la capacité du code à se comporter correctement face à des entrées inattendues ou des situations d'erreur — elle est le résultat d'une validation rigoureuse et d'une gestion d'exceptions exhaustive.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Tests et modularité du code</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>modularité</strong> consiste à découper le code en modules/fonctions/classes à responsabilité unique (principe SRP — Single Responsibility Principle). Un code modulaire est plus facile à tester, à corriger et à auditer.</p>
                    <p>Types de <strong>tests</strong> importants en contexte de sécurité :</p>
                    <ul>
                        <li><strong>Tests unitaires</strong> : valident chaque fonction isolément, y compris les cas limites et les entrées malveillantes.</li>
                        <li><strong>Tests d'intégration</strong> : vérifient que les composants interagissent correctement (ex : couche DAL + SGBD).</li>
                        <li><strong>Tests fonctionnels / end-to-end</strong> : scénarios utilisateur complets.</li>
                        <li><strong>Tests de sécurité (SAST/DAST)</strong> : cf. section DevSecOps.</li>
                        <li><strong>Fuzzing</strong> : envoi de données aléatoires/malformées pour découvrir des comportements inattendus.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════
             SOCLE 5.2 — Sécurité intégrée dans la démarche projet
             ═══════════════════════════════════════════════════════ -->
        <div class="sh"><h2>Sécurité intégrée dans toute la démarche projet</h2><div class="sh-line"></div><span class="sh-cnt">Security by design</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sécurité dès la conception et sécurité par défaut</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le principe de <strong>sécurité dès la conception (security by design)</strong> impose d'intégrer les exigences de sécurité dès les premières étapes du projet — cahier des charges, choix d'architecture, modélisation — plutôt que de les rajouter après coup, ce qui est toujours plus coûteux et moins efficace.</p>
                    <p>La <strong>sécurité par défaut (secure by default)</strong> signifie que la configuration initiale d'un système ou d'une application est la plus sécurisée possible. L'utilisateur ou l'administrateur doit activement choisir d'ouvrir des fonctionnalités, pas de les fermer.</p>
                    <p>Exemples : sessions expirées par défaut après inactivité, cookies en <code>HttpOnly</code> et <code>Secure</code> par défaut, logs activés dès le déploiement, permissions minimales attribuées d'emblée.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Protection de la vie privée dès la conception (Privacy by Design)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>Privacy by Design</strong> (art. 25 RGPD) transpose le principe de security by design au domaine de la protection des données personnelles : les mécanismes de protection de la vie privée doivent être intégrés dans la conception même du système.</p>
                    <p>La <strong>protection des données par défaut (privacy by default)</strong> complète ce principe : seules les données strictement nécessaires à la finalité sont collectées, conservées le temps minimal requis, et accessibles par le moins de personnes possible.</p>
                    <p>En pratique côté développement : ne pas stocker de données superflues, anonymiser ou pseudonymiser dès que possible, ne pas journaliser de données personnelles en clair dans les logs, permettre l'exercice des droits RGPD via l'interface.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Modélisation des menaces (Threat Modeling)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>modélisation des menaces</strong> est une démarche structurée de réflexion sur les risques applicatifs, réalisée en phase de conception. Elle répond à quatre questions :</p>
                    <ul>
                        <li><strong>Que construisons-nous ?</strong> — Diagrammes d'architecture et de flux de données (DFD).</li>
                        <li><strong>Quelles peuvent être les menaces ?</strong> — Méthode <strong>STRIDE</strong> : Spoofing, Tampering, Repudiation, Information Disclosure, Denial of Service, Elevation of Privilege.</li>
                        <li><strong>Que faisons-nous contre ces menaces ?</strong> — Contre-mesures pour chaque menace identifiée.</li>
                        <li><strong>Avons-nous bien travaillé ?</strong> — Revue et validation des décisions.</li>
                    </ul>
                    <p>Réalisée tôt dans le projet, la threat modeling évite d'avoir à revoir des architectures entières une fois le code écrit.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sécurité à chaque phase du cycle de développement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La sécurité n'est pas une phase unique mais une préoccupation transversale à toutes les étapes :</p>
                    <ul>
                        <li><strong>Conception</strong> : exigences de sécurité, threat modeling, choix d'architecture sécurisée.</li>
                        <li><strong>Développement</strong> : respect des bonnes pratiques (requêtes préparées, validation des entrées, gestion des exceptions), revue de code, SAST (analyse statique).</li>
                        <li><strong>Déploiement</strong> : configuration sécurisée des serveurs, HTTPS, désactivation des fonctions de debug, gestion des secrets (variables d'environnement, coffre-fort de secrets).</li>
                        <li><strong>Maintenance</strong> : application des correctifs de sécurité (OS, frameworks, dépendances), DAST, audits périodiques, surveillance des CVE liées aux composants utilisés.</li>
                    </ul>
                    <p>Les <strong>vérifications périodiques de sécurité</strong> et la <strong>prise en compte des nouvelles menaces après livraison</strong> sont indispensables : une application sécurisée à sa sortie peut devenir vulnérable un an plus tard (nouvelles CVE, nouvelles techniques d'attaque).</p>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════════
             SOCLE 5.3 — Authentification, sessions, habilitations
             ═══════════════════════════════════════════════════ -->
        <div class="sh"><h2>Authentification, sessions, habilitations et accès</h2><div class="sh-line"></div><span class="sh-cnt">AAA &amp; contrôle d'accès</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Authentification et méthodes d'authentification</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>authentification</strong> est le processus de vérification de l'identité d'un utilisateur ou d'un système avant de lui accorder un accès. Elle repose sur un ou plusieurs facteurs :</p>
                    <ul>
                        <li><strong>Ce que l'on sait</strong> : mot de passe, code PIN, question secrète.</li>
                        <li><strong>Ce que l'on possède</strong> : OTP (TOTP/HOTP), clé FIDO2/WebAuthn, carte à puce.</li>
                        <li><strong>Ce que l'on est</strong> : empreinte digitale, reconnaissance faciale (biométrie).</li>
                    </ul>
                    <p>L'<strong>authentification forte (MFA)</strong> associe au moins deux de ces facteurs. Elle est exigée pour tout accès à des données sensibles ou des fonctions d'administration.</p>
                    <p>Un <strong>framework d'authentification</strong> (OAuth 2.0, OpenID Connect, SAML, Passport.js, Spring Security…) fournit des mécanismes éprouvés — il est préférable de les utiliser plutôt que d'implémenter l'authentification de zéro, source d'erreurs classiques.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion des sessions</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Une <strong>session</strong> est l'état de connexion maintenu côté serveur entre un utilisateur authentifié et l'application. Sa mauvaise gestion est l'une des vulnérabilités OWASP les plus fréquentes.</p>
                    <p>Bonnes pratiques :</p>
                    <ul>
                        <li><strong>Régénérer l'identifiant de session</strong> après chaque authentification réussie (anti session fixation).</li>
                        <li>Utiliser des identifiants de session <strong>longs, aléatoires et imprévisibles</strong>.</li>
                        <li>Configurer les cookies en <code>HttpOnly</code> (non accessible en JS), <code>Secure</code> (HTTPS uniquement) et <code>SameSite=Strict</code> (anti CSRF).</li>
                        <li>Implémenter une <strong>expiration automatique</strong> (timeout d'inactivité et durée maximale absolue).</li>
                        <li>Invalider la session côté serveur lors de la déconnexion.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Habilitations, privilèges et contrôle d'accès</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les <strong>habilitations</strong> définissent ce qu'un utilisateur authentifié a le droit de faire (autorisation). Le <strong>contrôle d'accès</strong> est le mécanisme qui vérifie ces droits à chaque action.</p>
                    <p>Modèles courants :</p>
                    <ul>
                        <li><strong>RBAC (Role-Based Access Control)</strong> : les droits sont attachés à des rôles (admin, éditeur, lecteur…) et les utilisateurs se voient attribuer des rôles.</li>
                        <li><strong>ABAC (Attribute-Based Access Control)</strong> : les droits dépendent d'attributs de l'utilisateur, de la ressource et du contexte.</li>
                    </ul>
                    <p>Principe fondamental : le <strong>moindre privilège</strong> — chaque utilisateur et chaque composant applicatif ne doit avoir que les accès strictement nécessaires à sa fonction. Toute vérification d'accès doit être effectuée <strong>côté serveur</strong> (jamais uniquement côté client).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>AAA : Authentication, Authorization, Accountability</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le modèle <strong>AAA</strong> est le cadre de référence pour la gestion des accès :</p>
                    <ul>
                        <li><strong>Authentication (Authentification)</strong> : vérifier que l'utilisateur est bien qui il prétend être.</li>
                        <li><strong>Authorization (Autorisation)</strong> : vérifier que l'utilisateur authentifié a le droit d'effectuer l'action demandée sur la ressource concernée.</li>
                        <li><strong>Accountability (Responsabilisation / Traçabilité)</strong> : enregistrer toutes les actions effectuées par les utilisateurs afin de pouvoir reconstituer les événements en cas d'incident et d'imputer les actions à leurs auteurs.</li>
                    </ul>
                    <p>La <strong>traçabilité des accès</strong> et la <strong>journalisation</strong> sont les piliers de l'Accountability : logs d'authentification (succès, échecs), logs d'accès aux ressources sensibles, logs d'administration, tous conservés de façon sécurisée et intègre.</p>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════════
             SOCLE 5.4 — Chiffrement, échanges sécurisés, intégrité
             ═══════════════════════════════════════════════════ -->
        <div class="sh"><h2>Chiffrement, échanges sécurisés et intégrité</h2><div class="sh-line"></div><span class="sh-cnt">Cryptographie applicative</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Flux sécurisés et protocoles de chiffrement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Tout échange de données sensibles entre un client et un serveur doit transiter sur un <strong>canal chiffré</strong> pour garantir la <strong>confidentialité</strong> (personne ne peut lire) et l'<strong>intégrité</strong> (personne ne peut modifier) des données en transit.</p>
                    <p>Protocoles essentiels :</p>
                    <ul>
                        <li><strong>TLS 1.2 / 1.3</strong> (Transport Layer Security) : standard pour HTTPS, SMTPS, IMAPS, FTPS… TLS 1.3 est recommandé (handshake simplifié, algorithmes modernes uniquement).</li>
                        <li><strong>HTTPS</strong> = HTTP + TLS : obligatoire pour toute application web traitant des données personnelles ou d'authentification.</li>
                        <li><strong>SSH</strong> : accès distant aux serveurs de façon chiffrée (remplace Telnet et FTP en clair).</li>
                        <li><strong>IPsec / WireGuard</strong> : chiffrement au niveau réseau (VPN).</li>
                    </ul>
                    <p>Configurer correctement TLS suppose de désactiver les versions obsolètes (SSL, TLS 1.0/1.1), choisir des cipher suites sûres et maintenir le certificat à jour.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Cryptographie : bases et usages applicatifs</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Un développeur n'a généralement pas besoin d'implémenter des algorithmes cryptographiques — mais il doit savoir <strong>choisir et utiliser les bons</strong> à travers les bibliothèques de son langage.</p>
                    <ul>
                        <li><strong>Chiffrement symétrique</strong> (AES-256-GCM) : rapide, pour chiffrer des données stockées ou des flux (clé partagée).</li>
                        <li><strong>Chiffrement asymétrique</strong> (RSA-2048+, courbes elliptiques) : échange de clés, signature numérique (clé publique / clé privée).</li>
                        <li><strong>Hachage</strong> (SHA-256, SHA-3) : empreinte à sens unique, pour vérifier l'intégrité ou stocker des mots de passe (avec sel).</li>
                        <li><strong>Hachage de mots de passe</strong> : utiliser <strong>bcrypt, Argon2 ou scrypt</strong> — jamais MD5, SHA-1 ni SHA-256 seul pour les mots de passe (trop rapides à brute-forcer).</li>
                    </ul>
                    <p>Règle d'or : ne jamais inventer ses propres algorithmes cryptographiques.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Intégrité des données et signature de code</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>intégrité des données</strong> garantit qu'une donnée n'a pas été altérée entre sa création et son utilisation. Mécanismes :</p>
                    <ul>
                        <li><strong>HMAC</strong> (Hash-based Message Authentication Code) : combine hachage et clé secrète pour authentifier et vérifier l'intégrité d'un message.</li>
                        <li><strong>Signature numérique</strong> : hachage du message chiffré avec la clé privée de l'émetteur — le destinataire vérifie avec la clé publique (authenticité + intégrité).</li>
                    </ul>
                    <p>La <strong>signature de code</strong> applique ce principe aux exécutables, scripts et artefacts de build : un artefact signé permet de vérifier qu'il provient bien de l'éditeur attendu et n'a pas été modifié. Dans un pipeline CI/CD, la <strong>vérification des signatures</strong> des images Docker, paquets npm/pip et releases GitHub est une bonne pratique de sécurité de la chaîne d'approvisionnement logicielle (supply chain security).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Stockage sécurisé des données sensibles et preuve numérique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les données sensibles au repos (at rest) doivent être protégées avec la même rigueur que les données en transit :</p>
                    <ul>
                        <li><strong>Mots de passe</strong> : toujours hachés avec un algorithme adapté (Argon2, bcrypt) et un sel unique par utilisateur — jamais stockés en clair ni en MD5 simple.</li>
                        <li><strong>Données personnelles / financières</strong> : chiffrement des colonnes sensibles en base de données ou chiffrement du volume entier.</li>
                        <li><strong>Secrets applicatifs</strong> (clés API, tokens, mots de passe de SGBD) : stockés dans des <strong>variables d'environnement</strong> ou un <strong>coffre-fort de secrets</strong> (HashiCorp Vault, Azure Key Vault, AWS Secrets Manager) — jamais codés en dur dans le source.</li>
                    </ul>
                    <p>La <strong>preuve numérique</strong> en contexte applicatif désigne les éléments (logs signés, hachages de fichiers, horodatages qualifiés) permettant de démontrer qu'une action a eu lieu et qu'une donnée est authentique — base de toute investigation ou procédure judiciaire.</p>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════════════════
             SOCLE 5.5 — Sécuriser les environnements dev et prod
             ═══════════════════════════════════════════════════════════ -->
        <div class="sh"><h2>Sécuriser les environnements de développement et de production</h2><div class="sh-line"></div><span class="sh-cnt">Dev · Staging · Prod</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sécurité de l'environnement de développement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'environnement de développement doit être traité comme une surface d'attaque potentielle : un dépôt de code compromis ou des secrets exposés peuvent mener directement à une intrusion en production.</p>
                    <ul>
                        <li><strong>Ne jamais utiliser de vraies données personnelles</strong> en développement : utiliser des données de test anonymisées ou synthétiques.</li>
                        <li><strong>Contrôler les accès aux dépôts</strong> (Git) : permissions minimales, branches protégées, revues obligatoires avant fusion.</li>
                        <li><strong>Jamais de secrets dans le code source</strong> (mots de passe, clés API, tokens) : utiliser des fichiers <code>.env</code> exclus du versionnement (<code>.gitignore</code>), des gestionnaires de secrets ou des variables CI/CD.</li>
                        <li><strong>Isolation des dépendances</strong> : environnements virtuels (venv Python, node_modules local), conteneurs Docker — évite les conflits et les contaminations entre projets.</li>
                        <li><strong>Scans réguliers</strong> : SAST et SCA intégrés dans l'IDE et la pipeline CI pour détecter les failles au plus tôt.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sécurité de l'environnement de production</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'environnement de production héberge les données réelles des utilisateurs : sa sécurisation est non négociable.</p>
                    <ul>
                        <li><strong>Désactiver le mode debug et les messages d'erreur détaillés</strong> : les stack traces et informations de version ne doivent jamais être affichées aux utilisateurs finaux.</li>
                        <li><strong>HTTPS obligatoire</strong> avec HSTS : rediriger systématiquement HTTP vers HTTPS, certificat valide et à jour.</li>
                        <li><strong>En-têtes HTTP de sécurité</strong> activés (CSP, X-Frame-Options, X-Content-Type-Options…).</li>
                        <li><strong>Protections offertes par le système d'exploitation</strong> : SELinux / AppArmor, ASLR (randomisation des adresses mémoire), DEP/NX (non-exécution des zones de données), pare-feu applicatif (WAF), pare-feu réseau.</li>
                        <li><strong>Accès restreint</strong> : seuls les ports nécessaires ouverts, SSH sans accès root direct, authentification par clé uniquement, pas d'interfacesadmin exposées publiquement.</li>
                        <li><strong>Surveillance et alertes</strong> : monitoring applicatif, alertes sur les erreurs 5xx et les echecs d'authentification, logs centralisés.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Techniques d'isolation et protections offertes par les protocoles</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>isolation</strong> limite la propagation d'une compromission : si un composant est compromis, les autres restent protégés.</p>
                    <ul>
                        <li><strong>Conteneurisation (Docker)</strong> : chaque service dans son propre conteneur avec ses droits minimaux — isolation des processus, du système de fichiers et du réseau.</li>
                        <li><strong>Virtualisation</strong> : machines virtuelles totalement isolées pour les environnements sensibles.</li>
                        <li><strong>Séparation dev / staging / production</strong> : trois environnements distincts, sans accès croisés — la prod ne doit jamais être accessible depuis le dev.</li>
                        <li><strong>mTLS (mutual TLS)</strong> : authentification mutuelle entre microservices — même à l'intérieur du réseau interne.</li>
                        <li><strong>Réseaux internes isolés</strong> : communication inter-services sur un réseau privé, non exposé à Internet.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion sécurisée des versions, livrables et maintenance</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Gestion des versions</strong> :</p>
                    <ul>
                        <li>Branches protégées sur le dépôt principal (main/master) : merge uniquement via Pull Request avec revue et CI verte.</li>
                        <li>Vérifier l'historique Git : ne jamais commettre de credentials — si c'est arrivé, invalider immédiatement le secret et le supprimer de l'historique (<code>git-filter-repo</code>).</li>
                    </ul>
                    <p><strong>Configuration des livrables</strong> :</p>
                    <ul>
                        <li>Les configurations sensibles (connexions SGBD, clés API) doivent être séparées du code (variables d'environnement, fichiers de config non versionnable).</li>
                        <li>Build reproductible : lockfiles (<code>package-lock.json</code>, <code>composer.lock</code>) versionné pour des builds identiques.</li>
                        <li>Artefacts signés numériquement avant déploiement.</li>
                    </ul>
                    <p><strong>Sécurisation de la maintenance et tests de sécurité</strong> : accès de maintenance tracés, fenêtres planifiées, tests de non-régression de sécurité (SAST + DAST) avant chaque mise en production significative.</p>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════
             SOCLE 5.6 — Vulnérabilités web et contre-mesures
             ═══════════════════════════════════════════════ -->
        <div class="sh"><h2>OWASP Top 10</h2><div class="sh-line"></div><span class="sh-cnt">Vulnérabilités les plus critiques</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A01 — Broken Access Control</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Premier rang OWASP 2021. Englobe tous les cas où un utilisateur peut accéder à des ressources ou effectuer des actions qu'il ne devrait pas.</p>
                    <p><strong>Mécanismes d'attaque</strong> : accès direct à l'URL d'une page admin sans vérification de rôle ; IDOR (changer l'ID dans l'URL pour voir les données d'un autre) ; élévation de privilèges horizontale (accéder aux données d'un pair) ou verticale (accéder aux fonctions admin).</p>
                    <p><strong>Contre-mesures</strong> : vérifications d'autorisation côté serveur à <em>chaque</em> requête ; refus par défaut (deny-all) ; RBAC ; journaliser tous les échecs de contrôle d'accès.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A02 — Cryptographic Failures (défauts de chiffrement)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanismes d'attaque</strong> : mots de passe stockés en MD5 ou SHA-1 non salé (brute-force facile) ; données personnelles en clair dans les cookies ou la base ; transmission en HTTP sans TLS ; clés cryptographiques codées en dur dans le source ; utilisation de TLS 1.0/1.1 obsolètes.</p>
                    <p><strong>Contre-mesures</strong> : TLS 1.2/1.3 obligatoire pour tous les flux ; bcrypt/Argon2 pour les mots de passe ; AES-256-GCM pour les données au repos ; ne jamais inventer ses propres algorithmes cryptographiques ; gestion des clés via coffre-fort de secrets ; HSTS.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A03 — Injection (SQL, LDAP, commandes…)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme d'attaque</strong> : des données non fiables sont envoyées à un interpréteur (SGBD, shell OS, LDAP…) qui les exécute. Exemple SQLi : saisir <code>' OR '1'='1' --</code> dans un formulaire de connexion peut contourner l'authentification si la requête est construite par concaténation.</p>
                    <p><strong>Contre-mesures</strong> : requêtes préparées (prepared statements) ou ORM — <em>obligatoire</em> ; validation et whitelist de toutes les entrées ; moindre privilège sur l'utilisateur SGBD (pas de DROP/ALTER en prod).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A04 — Insecure Design</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme d'attaque</strong> : failles de conception — absence de rate-limiting sur un endpoint d'authentification (brute-force sans fin) ; logique métier contournable (modification du prix d'un panier côté client acceptée côté serveur) ; aucune vérification d'identité pour des opérations sensibles.</p>
                    <p><strong>Contre-mesures</strong> : threat modeling dès la phase de conception ; patterns de sécurité éprouvés ; revue de la logique métier ; sécurité dès la conception (security by design).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A05 — Security Misconfiguration</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanismes d'attaque</strong> : pages d'erreur affichant la stack trace complète en production (révèle la version du framework, les chemins de fichiers) ; identifiants par défaut non changés (admin/admin) ; listage de répertoires activé ; fonctionnalités inutilisées actives (interface phpMyAdmin publique, endpoint debug…) ; en-têtes de sécurité HTTP absents.</p>
                    <p><strong>Contre-mesures</strong> : guides de durcissement (CIS Benchmarks) ; supprimer les fonctionnalités inutilisées ; désactiver le debug et les traces en prod ; audits de configuration réguliers.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A06 — Vulnerable &amp; Outdated Components</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme d'attaque</strong> : utilisation de bibliothèques, frameworks ou composants avec des CVE connues et non corrigées. Ex : Log4Shell (CVE-2021-44228) a compromis des millions de serveurs utilisant Log4j 2 non mis à jour.</p>
                    <p><strong>Contre-mesures</strong> : SCA (Software Composition Analysis) — <code>npm audit</code>, <code>composer audit</code>, Snyk, OWASP Dependency-Check ; SBOM (inventaire des dépendances) ; politique de mise à jour régulière ; abonnement aux alertes CVE ; Dependabot (GitHub) pour les PRs de mise à jour automatique.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A07 — Identification &amp; Authentication Failures</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanismes d'attaque</strong> : mots de passe faibles ou par défaut non changés ; credential stuffing (réutilisation de listes de couples login/mdp volés) ; absence de protection contre le brute-force ; session tokens prévisibles ou non renouvelés après connexion (session fixation) ; sessions non invalidées à la déconnexion.</p>
                    <p><strong>Contre-mesures</strong> : MFA obligatoire pour les accès sensibles ; bcrypt/Argon2 ; verrouillage/ralentissement après N tentatives ; régénérer l'identifiant de session après authentification ; expiration automatique des sessions.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A08 — Software &amp; Data Integrity Failures</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanismes d'attaque</strong> : pipeline CI/CD qui télécharge des dépendances sans vérification de signature ; mécanisme de mise à jour logicielle non sécurisé (sans vérification d'intégrité) ; désérialisation de données non fiables provenant de l'utilisateur.</p>
                    <p><strong>Contre-mesures</strong> : signer et vérifier les artefacts de build (supply chain security) ; lockfiles versionné pour des builds déterministes ; ne jamais désérialiser des données non fiables sans validation stricte ; sécuriser l'accès au pipeline CI/CD.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A09 — Security Logging &amp; Monitoring Failures</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanismes d'attaque</strong> : absence de logs sur les événements de sécurité (échecs de connexion, accès refusés) → l'attaquant opère sans être détecté pendant des mois ; logs supprimés ou falsifiés par l'attaquant pour effacer ses traces.</p>
                    <p><strong>Contre-mesures</strong> : journaliser tous les événements de sécurité ; centraliser dans un SIEM ; définir des alertes (pic de 401, tentatives de connexion en rafale, accès à des URLs suspectes) ; protéger les logs en écriture seule ; tester régulièrement la détection et la réponse.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>A10 — Server-Side Request Forgery (SSRF)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme d'attaque</strong> : l'application effectue une requête HTTP vers une URL fournie par l'utilisateur. L'attaquant peut ainsi accéder aux <strong>métadonnées cloud</strong> (URL <code>169.254.169.254</code> sur AWS/GCP/Azure), aux services internes non exposés (intranet, base de données sur le réseau interne) ou scanner le réseau interne.</p>
                    <p><strong>Contre-mesures</strong> : valider et filtrer toutes les URLs fournies par l'utilisateur ; liste blanche des domaines/IPs autorisés ; bloquer les plages IP privées (RFC 1918), loopback et métadonnées cloud ; désactiver les redirections HTTP côté serveur.</p>
                </div></div>
            </div>

        </div>

        <!-- Section B : Vulnérabilités clés -->
        <div class="sh"><h2>Vulnérabilités web en détail — mécanismes et contre-mesures</h2><div class="sh-line"></div><span class="sh-cnt">Attaque &amp; protection</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>SQL Injection (SQLi)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme</strong> : des données utilisateur non filtrées sont insérées directement dans une requête SQL. L'interpréteur SGBD les exécute comme du code.</p>
                    <p>Exemple de requête vulnérable :<br><code>SELECT * FROM users WHERE login='$l' AND pwd='$p'</code><br>Saisir <code>' OR '1'='1' --</code> comme login → la condition devient toujours vraie, l'authentification est contournée.</p>
                    <p>Impacts : lecture/modification/suppression de données, contournement d'authentification, exécution de commandes OS (via <code>xp_cmdshell</code> sur MSSQL).</p>
                    <p><strong>Contre-mesures</strong> :</p>
                    <ul>
                        <li>Requêtes préparées (PDO, MySQLi, JDBC, Doctrine…) — <em>obligatoire</em>.</li>
                        <li>ORM sécurisé : ne pas utiliser les méthodes "raw query" avec des entrées non validées.</li>
                        <li>Principe du moindre privilège sur l'utilisateur SGBD applicatif.</li>
                        <li>WAF en complément (jamais en remplacement).</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>XSS — Cross-Site Scripting (Stored, Reflected, DOM)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme</strong> : injection de code JavaScript malveillant dans une page web affichée à d'autres utilisateurs.</p>
                    <ul>
                        <li><strong>XSS stocké</strong> : le script est sauvegardé en base de données et rejoué à chaque affichage (le plus dangereux — commentaires, profils utilisateurs).</li>
                        <li><strong>XSS réfléchi</strong> : le script est dans l'URL et exécuté au chargement de la page (liens malveillants envoyés par mail/phishing).</li>
                        <li><strong>XSS DOM</strong> : manipulation du DOM côté client sans passer par le serveur.</li>
                    </ul>
                    <p>Impacts : vol de cookies de session, exécution d'actions à la place de la victime, redirection vers un site malveillant, keylogging.</p>
                    <p><strong>Contre-mesures</strong> : échapper toutes les sorties HTML (<code>htmlspecialchars()</code> en PHP, <code>escapeHTML</code>) ; Content Security Policy (CSP) strict ; cookies en <code>HttpOnly</code> (inaccessibles depuis JS).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>CSRF — Cross-Site Request Forgery</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme</strong> : forcer un utilisateur authentifié à exécuter une action non désirée sur une application tierce. L'attaquant crée une page avec un formulaire ou une image piège pointant vers la cible. Le navigateur de la victime envoie automatiquement ses cookies de session.</p>
                    <p>Exemple : un formulaire caché sur un site malveillant déclenche un virement bancaire ou un changement de mot de passe sans que la victime le sache.</p>
                    <p><strong>Contre-mesures</strong> :</p>
                    <ul>
                        <li><strong>Token CSRF</strong> : jeton aléatoire unique par formulaire, inclus dans la requête et vérifié côté serveur.</li>
                        <li>Cookie <code>SameSite=Strict</code> ou <code>Lax</code> : le cookie n'est pas envoyé dans les requêtes cross-site.</li>
                        <li>Vérification des en-têtes <code>Origin</code> et <code>Referer</code>.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>IDOR — Insecure Direct Object Reference</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Mécanisme</strong> : les identifiants d'objets (IDs, noms de fichiers, numéros de commande) sont directement accessibles dans l'URL ou le corps de la requête, sans vérification d'autorisation côté serveur.</p>
                    <p>Exemple : <code>GET /api/commandes/1042</code> → l'utilisateur change l'ID en <code>1041</code> et accède aux commandes d'un autre client.</p>
                    <p><strong>Contre-mesures</strong> : vérifier systématiquement côté serveur que l'utilisateur authentifié est bien propriétaire de la ressource ; utiliser des identifiants non devinables (UUID v4) ; ne jamais faire confiance à l'ID seul dans la requête.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>LFI / RFI — Inclusion de fichiers locaux et distants</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>LFI (Local File Inclusion)</strong> : le chemin d'un fichier local est contrôlé par l'utilisateur. L'attaquant peut lire des fichiers sensibles du serveur.</p>
                    <p>Exemple : <code>?page=../../../../etc/passwd</code> → lecture du fichier <code>/etc/passwd</code> via traversée de répertoires.</p>
                    <p><strong>RFI (Remote File Inclusion)</strong> : l'application inclut un fichier depuis une URL externe → exécution de code arbitraire sur le serveur (si <code>allow_url_include</code> est activé en PHP).</p>
                    <p><strong>Contre-mesures</strong> : ne jamais passer un chemin de fichier en paramètre utilisateur ; whitelist stricte des pages autorisées ; désactiver <code>allow_url_include</code> en PHP ; canonicaliser et valider les chemins (<code>realpath()</code>) ; chroot/jail pour isoler le serveur.</p>
                </div></div>
            </div>

        </div>

        <!-- Section C : Bonnes pratiques de développement -->
        <div class="sh"><h2>Développement sécurisé — contre-mesures</h2><div class="sh-line"></div><span class="sh-cnt">Secure coding</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Requêtes préparées et ORM sécurisé</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les <strong>requêtes préparées</strong> (prepared statements) séparent le code SQL des données : les paramètres sont liés après la compilation de la requête, rendant toute injection SQL impossible.</p>
                    <p>Exemple PHP PDO :</p>
                    <p><code>$stmt = $pdo-&gt;prepare('SELECT * FROM users WHERE email = ?');<br>$stmt-&gt;execute([$email]);</code></p>
                    <p>Un <strong>ORM</strong> (Eloquent, Doctrine, Hibernate…) génère automatiquement des requêtes préparées — à condition de ne pas utiliser les méthodes "raw query" avec des variables non filtrées (<code>DB::statement($sql)</code> en Laravel avec concaténation est aussi dangereux que du SQL brut).</p>
                    <p>Règle : toute valeur fournie par l'utilisateur doit passer par un paramètre lié, jamais par concaténation de chaîne.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Validation et assainissement des entrées</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Toute donnée provenant de l'extérieur (formulaires, paramètres URL, cookies, en-têtes, API) est potentiellement malveillante.</p>
                    <ul>
                        <li><strong>Validation</strong> : vérifier que la donnée respecte le format attendu (type, longueur, regex). Rejeter ce qui ne correspond pas.</li>
                        <li><strong>Whitelist</strong> : accepter uniquement les valeurs connues et attendues (meilleur que la blacklist, plus difficile à contourner).</li>
                        <li><strong>Assainissement (sanitization)</strong> : transformer une donnée potentiellement dangereuse en version sûre — <code>htmlspecialchars()</code> pour l'affichage HTML, <code>escapeshellarg()</code> pour les commandes shell.</li>
                    </ul>
                    <p>Valider côté client (JavaScript) = expérience utilisateur. Valider côté serveur = sécurité. Les deux sont nécessaires, mais seul le serveur compte pour la sécurité.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion sécurisée des sessions et des tokens JWT</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Sessions : cf. Socle 5.3. Pour les <strong>JWT (JSON Web Token)</strong> :</p>
                    <ul>
                        <li>Ne pas stocker le JWT dans le <code>localStorage</code> : accessible via XSS → préférer un cookie <code>HttpOnly</code>.</li>
                        <li>Toujours vérifier l'algorithme : rejeter explicitement <code>alg: none</code> et les changements RS256→HS256.</li>
                        <li>Durée de vie courte (15 min–1 h) avec un <strong>refresh token</strong> séparé et sécurisé.</li>
                        <li>Prévoir un mécanisme de révocation (blacklist des tokens révoqués ou utiliser des tokens à courte durée + rotation de clés).</li>
                    </ul>
                    <p>Recommandation : utiliser une bibliothèque reconnue (<code>firebase/php-jwt</code>, <code>jsonwebtoken</code> npm) plutôt qu'une implémentation maison.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sécurité des API REST</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Une API REST expose directement des fonctionnalités et des données — elle doit être sécurisée à chaque niveau :</p>
                    <ul>
                        <li><strong>Authentification</strong> : clé API (pour les appels machine-to-machine), OAuth 2.0 + JWT (pour les appels utilisateur).</li>
                        <li><strong>Autorisation</strong> : vérifier les droits pour chaque endpoint et chaque ressource (pas uniquement à la connexion).</li>
                        <li><strong>Rate limiting</strong> : limiter le nombre de requêtes par IP/utilisateur → protection contre le brute-force et les attaques DoS.</li>
                        <li><strong>Validation des entrées</strong> : chaque paramètre reçu doit être typé et validé.</li>
                        <li><strong>CORS</strong> : configurer les en-têtes Cross-Origin pour n'autoriser que les domaines légitimes.</li>
                        <li><strong>Versionnement</strong> : permet de corriger des failles sans casser la rétrocompatibilité.</li>
                    </ul>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Hachage des mots de passe : bcrypt, Argon2</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>MD5, SHA-1 et SHA-256 <strong>ne doivent pas</strong> être utilisés pour les mots de passe : ce sont des algorithmes rapides, donc facilement brute-forçables (GPU, rainbow tables).</p>
                    <p>Algorithmes adaptés :</p>
                    <ul>
                        <li><strong>bcrypt</strong> : intègre un sel automatique, coût configurable (work factor). Standard depuis des années, disponible dans tous les langages.</li>
                        <li><strong>Argon2id</strong> (recommandé OWASP) : résistant aux attaques par GPU/ASIC, vainqueur du Password Hashing Competition 2015.</li>
                        <li><strong>scrypt</strong> : alternative similaire à Argon2.</li>
                    </ul>
                    <p>En PHP : <code>password_hash($pass, PASSWORD_ARGON2ID)</code> et <code>password_verify($pass, $hash)</code>. Ne jamais implémenter son propre hachage de mots de passe.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>En-têtes HTTP de sécurité (CSP, HSTS, X-Frame-Options…)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les en-têtes HTTP de réponse permettent d'activer des protections côté navigateur :</p>
                    <ul>
                        <li><strong>Content-Security-Policy (CSP)</strong> : définit les sources autorisées pour scripts, styles, images… → première défense contre XSS.</li>
                        <li><strong>Strict-Transport-Security (HSTS)</strong> : force HTTPS pour toutes les futures requêtes, même si l'utilisateur tape HTTP (protection contre le downgrade attack).</li>
                        <li><strong>X-Frame-Options: DENY</strong> : interdit l'affichage dans une iframe → protection contre le clickjacking.</li>
                        <li><strong>X-Content-Type-Options: nosniff</strong> : empêche le navigateur de deviner le type MIME → réduit certains vecteurs XSS.</li>
                        <li><strong>Referrer-Policy</strong> : contrôle les informations envoyées dans l'en-tête <code>Referer</code>.</li>
                        <li><strong>Permissions-Policy</strong> : restreint l'accès aux API du navigateur (géolocalisation, caméra, microphone…).</li>
                    </ul>
                    <p>Tester ses en-têtes : <em>securityheaders.com</em>.</p>
                </div></div>
            </div>

        </div>

        <!-- Section D : DevSecOps & Tests -->
        <div class="sh"><h2>DevSecOps &amp; Tests de sécurité</h2><div class="sh-line"></div><span class="sh-cnt">Intégrer la sécurité dans le cycle de vie</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>SSDLC — Secure Software Development Life Cycle</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>SSDLC</strong> intègre la sécurité à chaque phase du cycle de développement logiciel (<em>shift-left security</em> : corriger tôt, quand c'est le moins coûteux) :</p>
                    <ul>
                        <li><strong>Exigences</strong> : définir les exigences de sécurité dès le cahier des charges (OWASP ASVS comme référentiel).</li>
                        <li><strong>Conception</strong> : threat modeling (STRIDE), architecture sécurisée, séparation des rôles.</li>
                        <li><strong>Développement</strong> : secure coding guidelines, revues de code, SAST intégré dans l'IDE/pipeline.</li>
                        <li><strong>Test</strong> : DAST, tests d'intrusion (pentest), fuzzing.</li>
                        <li><strong>Déploiement</strong> : configuration sécurisée, secrets management, HTTPS obligatoire.</li>
                        <li><strong>Exploitation</strong> : surveillance (SIEM), gestion des incidents, patching CVE, REX post-incident.</li>
                    </ul>
                    <p>En mode <strong>DevSecOps</strong>, ces contrôles sont automatisés dans la pipeline CI/CD : chaque commit déclenche SAST, SCA, tests de sécurité.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>SAST et DAST : analyse statique et dynamique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>SAST (Static Application Security Testing)</strong> : analyse du code source sans exécution. Intégrée dans l'IDE ou la pipeline CI.</p>
                    <ul>
                        <li>Outils : SonarQube, Semgrep, Bandit (Python), PHPStan avec règles sécurité.</li>
                        <li>Détecte : injections potentielles, mauvaise gestion des erreurs, mots de passe codés en dur, dépendances vulnérables.</li>
                    </ul>
                    <p><strong>DAST (Dynamic Application Security Testing)</strong> : teste l'application <em>en cours d'exécution</em> en envoyant des requêtes potentiellement malveillantes.</p>
                    <ul>
                        <li>Outils : OWASP ZAP (Zed Attack Proxy, open source), Burp Suite (référence pentest).</li>
                        <li>Simule un attaquant externe ; détecte des failles à l'exécution (XSS, injections, mauvaises configurations HTTP).</li>
                    </ul>
                    <p>Les deux approches sont <strong>complémentaires</strong> : SAST couvre le code, DAST couvre le comportement réel. IAST (hybride, instrumenté) combine les deux.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Audits de code et revue de sécurité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>revue de code sécurité</strong> consiste à faire examiner le code par un pair (ou un spécialiste) avant intégration, avec un regard orienté vulnérabilités.</p>
                    <ul>
                        <li><strong>Pull Request / Merge Request</strong> : systématiser la revue par les pairs ; aucun code ne part en production sans validation.</li>
                        <li><strong>Checklist de sécurité</strong> : liste de points à vérifier (validation des entrées, gestion des erreurs, authentification, logs, droits de fichiers…).</li>
                        <li><strong>Revue croisée</strong> : développeur SLAM + référent sécurité pour les modules sensibles (authentification, paiement, données personnelles).</li>
                        <li><strong>Audit externe / pentest</strong> : recommandé avant toute mise en production majeure et lors de changements d'architecture.</li>
                    </ul>
                    <p>L'audit produit un rapport de vulnérabilités avec criticité (CVSS), solutions recommandées et délais de correction.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Gestion des dépendances vulnérables (SCA, CVE, SBOM)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>SCA (Software Composition Analysis)</strong> analyse les bibliothèques et frameworks tiers (npm, Composer, pip, Maven…) pour détecter les composants présentant des <strong>CVE</strong> connues.</p>
                    <ul>
                        <li>Outils : <code>npm audit</code>, <code>composer audit</code>, <strong>Snyk</strong>, <strong>OWASP Dependency-Check</strong>, <strong>Dependabot</strong> (GitHub — alertes automatiques).</li>
                        <li><strong>SBOM (Software Bill of Materials)</strong> : inventaire complet de toutes les dépendances avec leurs versions. Permet d'identifier rapidement les composants touchés lors de la publication d'une CVE critique (ex : Log4Shell CVE-2021-44228).</li>
                    </ul>
                    <p><strong>CVE</strong> : Common Vulnerabilities and Exposures — identifiant standardisé d'une vulnérabilité (ex: CVE-2021-44228).<br>
                    <strong>CVSS</strong> : score de criticité 0–10 (Base, Temporal, Environmental). CVSS ≥ 9 = critique.</p>
                    <p>Bonne pratique : lockfiles (<code>package-lock.json</code>, <code>composer.lock</code>) pour fixer les versions + mise à jour régulière contrôlée.</p>
                </div></div>
            </div>

        </div>

        <!-- ═══════════════════════════════════════════════
             SOCLE 5.7 — Logs, incidents, conformité et responsabilité
             ═══════════════════════════════════════════════ -->
        <div class="sh"><h2>Logs, incidents, conformité et responsabilité</h2><div class="sh-line"></div><span class="sh-cnt">Socle 5.7</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Analyser des logs et des incidents de sécurité</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Savoir lire et interpréter les logs est une compétence fondamentale en sécurité applicative. Types de logs à analyser :</p>
                    <ul>
                        <li><strong>Logs applicatifs</strong> : erreurs, exceptions, tentatives de connexion échouées, accès aux ressources sensibles.</li>
                        <li><strong>Logs d'accès web</strong> (<code>access.log</code> Apache/Nginx) : requêtes HTTP, codes de réponse (401, 403, 500), IPs sources, User-Agents.</li>
                        <li><strong>Logs SGBD</strong> : erreurs de connexion, requêtes anormales, accès hors horaires habituels.</li>
                        <li><strong>Journaux d'événements système</strong> : Windows Event Viewer, syslog Linux.</li>
                    </ul>
                    <p><strong>Signes d'incident</strong> : nombre anormal de 401/403, tentatives en rafale (brute-force), URL contenant des payloads suspects (<code>' OR 1=1</code>, <code>&lt;script&gt;</code>), pics de trafic inhabituels, entrées de log manquantes ou modifiées.</p>
                    <p>En contexte SLAM : être capable d'identifier une tentative de SQLi, XSS ou credential stuffing dans des extraits de logs.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Proposer et mettre en œuvre des contre-mesures</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Face à un incident ou à une vulnérabilité identifiée, démarche type :</p>
                    <ol>
                        <li><strong>Identifier et qualifier</strong> : type de faille, surface d'exposition, données éventuellement compromises.</li>
                        <li><strong>Évaluer l'impact</strong> : confidentialité, intégrité, disponibilité ; impact métier et réglementaire.</li>
                        <li><strong>Proposer les contre-mesures</strong> : patch, modification de code, ajout de WAF, blocage IP, changement de configuration, MFA…</li>
                        <li><strong>Prioriser</strong> par niveau de risque (CVSS, probabilité d'exploitation, impact métier).</li>
                        <li><strong>Mettre en œuvre et tester</strong> l'efficacité de la contre-mesure (tests de non-régression, re-test du vecteur d'attaque initial).</li>
                        <li><strong>Documenter</strong> les actions prises (traçabilité, audit trail).</li>
                    </ol>
                    <p>Exemples SLAM : SQLi → requêtes préparées ; XSS → échapper les sorties + CSP ; CSRF → token anti-CSRF ; brute-force → rate limiting + lockout.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Conformité à un référentiel, norme ou standard</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Une application doit être conçue en conformité avec les standards en vigueur. Principaux référentiels :</p>
                    <ul>
                        <li><strong>OWASP ASVS</strong> : Application Security Verification Standard — exigences de sécurité à 3 niveaux (L1 minimum, L2 standard, L3 critique/haute-assurance).</li>
                        <li><strong>RGPD</strong> : protection des données personnelles intégrée dès la conception (privacy by design, cf. Socle 5.2) ; art. 32 impose des mesures techniques appropriées.</li>
                        <li><strong>PCI-DSS</strong> : obligatoire pour les applications traitant des paiements par carte bancaire.</li>
                        <li><strong>HDS</strong> : hébergement de données de santé (certification obligatoire en France).</li>
                        <li><strong>ISO/IEC 27001</strong> : management global de la sécurité de l'information.</li>
                        <li><strong>Guides ANSSI</strong> : référentiels nationaux (développement web sécurisé, durcissement, RGS…).</li>
                    </ul>
                    <p>La vérification de conformité se fait par auto-évaluation (checklist ASVS), audit interne ou audit externe (pentest, certification).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Responsabilité du concepteur et documentation des contre-mesures</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le développeur ou concepteur d'une application peut engager sa responsabilité civile et pénale si une faille évidente non corrigée cause un préjudice :</p>
                    <ul>
                        <li><strong>Art. 32 RGPD</strong> : obligation de mettre en œuvre des mesures de sécurité appropriées (obligation de moyens renforcée).</li>
                        <li><strong>Responsabilité contractuelle</strong> : vis-à-vis du client (obligation de moyen ou de résultat selon le contrat).</li>
                        <li>La <strong>CNIL</strong> peut sanctionner le responsable de traitement <em>et</em> le sous-traitant (agence web, développeur prestataire).</li>
                    </ul>
                    <p>La <strong>documentation des contre-mesures</strong> est indispensable pour se protéger et prouver sa diligence :</p>
                    <ul>
                        <li><strong>Registre des vulnérabilités</strong> : identifiant, description, criticité, statut de correction, date.</li>
                        <li><strong>Changelog de sécurité</strong> : quand, quoi et comment une faille a été corrigée.</li>
                        <li><strong>Plans de test de non-régression</strong> : s'assurer que la correction ne réintroduit pas la faille ou n'en crée pas de nouvelle.</li>
                    </ul>
                    <p>Cette documentation constitue une preuve en cas de contrôle réglementaire, d'audit ou de litige.</p>
                </div></div>
            </div>

        </div>

        <div class="quiz-cta">
            <div class="quiz-cta-inner">
                <span class="quiz-cta-icon">⬡</span>
                <div class="quiz-cta-text">
                    <strong>Prêt à te tester ?</strong>
                    <span>Lance le quiz sur <em>Cybersécurité SLAM</em> — 10 questions aléatoires.</span>
                </div>
                <a href="quiz.php?theme=slam" class="quiz-cta-btn">Démarrer le quiz →</a>
            </div>
        </div>

    </div>
</main>

<?php require '../includes/footer.php'; ?>
