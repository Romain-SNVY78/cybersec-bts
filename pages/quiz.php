<?php
/**
 * Quiz générique — Cybersécurité BTS SIO
 * URL : pages/quiz.php?theme=<slug>
 *
 * Thèmes disponibles : socle | donnees | identite | securisation | disponibilite | slam
 */
$base_path = '../';

/* ──────────────────────────────────────────────────────────────────
   BANQUES DE QUESTIONS  (format : question, options[4], answer index)
   ────────────────────────────────────────────────────────────────── */
$ALL_QUESTIONS = [

    /* ══════════ SOCLE ══════════ */
    'socle' => [
        ['q' => 'Que signifie l\'acronyme DIC en cybersécurité ?',
         'o' => ['Détection, Identification, Contrôle', 'Disponibilité, Intégrité, Confidentialité', 'Données, Infrastructure, Cloud', 'Défense, Intrusion, Chiffrement'],
         'a' => 1, 'exp' => 'DIC = Disponibilité, Intégrité, Confidentialité — les trois piliers fondamentaux de la sécurité de l\'information.'],
        ['q' => 'Quelle est la différence entre une vulnérabilité et une menace ?',
         'o' => ['Ce sont deux synonymes', 'La vulnérabilité est l\'attaquant ; la menace est la faille', 'La vulnérabilité est la faiblesse ; la menace est l\'événement susceptible de l\'exploiter', 'La vulnérabilité est uniquement logicielle ; la menace est uniquement humaine'],
         'a' => 2, 'exp' => 'Une vulnérabilité est une faiblesse (ex : faille logicielle). Une menace est un acteur ou événement qui pourrait l\'exploiter.'],
        ['q' => 'Qu\'est-ce qu\'un exploit ?',
         'o' => ['Un antivirus de nouvelle génération', 'Le code ou la technique qui tire parti d\'une vulnérabilité pour déclencher une attaque', 'Un rapport d\'audit de sécurité', 'Une mise à jour corrective'],
         'a' => 1, 'exp' => 'Un exploit transforme une menace potentielle en attaque réelle en exploitant concrètement une vulnérabilité.'],
        ['q' => 'Quel est le rôle principal de l\'ANSSI ?',
         'o' => ['Gérer les impôts numériques', 'Autorité nationale de cybersécurité : conseiller, protéger, détecter, réagir', 'Réglementer les télécommunications', 'Certifier les logiciels commerciaux'],
         'a' => 1, 'exp' => 'L\'ANSSI (Agence Nationale de la Sécurité des Systèmes d\'Information) est placée sous la tutelle du SGDSN.'],
        ['q' => 'Le risque en cybersécurité se calcule ainsi :',
         'o' => ['Risque = Menace − Vulnérabilité', 'Risque = Impact + Probabilité', 'Risque = Probabilité × Impact', 'Risque = Actif ÷ Menace'],
         'a' => 2, 'exp' => 'La formule de référence est : Risque = Probabilité × Impact.'],
        ['q' => 'La "sûreté" (safety) protège contre :',
         'o' => ['Les attaques informatiques intentionnelles', 'Les accidents non intentionnels (pannes, erreurs humaines)', 'Les vols de données par des hackers', 'Les logiciels malveillants'],
         'a' => 1, 'exp' => 'La sûreté couvre les risques accidentels. La sécurité (security) couvre les actes malveillants intentionnels.'],
        ['q' => 'Quel organisme reçoit les notifications de violations de données personnelles ?',
         'o' => ['L\'ANSSI', 'L\'ENISA', 'La CNIL', 'Le CERT-FR'],
         'a' => 2, 'exp' => 'La CNIL (Commission Nationale de l\'Informatique et des Libertés) contrôle la conformité RGPD et reçoit les notifications de violations.'],
        ['q' => 'Une preuve numérique peut être :',
         'o' => ['Uniquement des fichiers vidéo', 'Des logs système, métadonnées ou captures réseau', 'Uniquement la signature manuscrite scannée', 'Des enregistrements sur papier'],
         'a' => 1, 'exp' => 'Une preuve numérique est tout élément électronique servant à démontrer qu\'un événement a eu lieu : logs, métadonnées, captures réseau…'],
        ['q' => 'Lequel de ces éléments N\'EST PAS un actif à protéger dans un SI ?',
         'o' => ['Les données clients', 'Les serveurs', 'La réputation de l\'entreprise', 'Le café de la salle de pause'],
         'a' => 3, 'exp' => 'Les actifs (biens à protéger) incluent données, serveurs, applications, réseaux, locaux et réputation. Le café n\'en fait pas partie.'],
        ['q' => 'Que désigne le périmètre du terme "actifs" en sécurité ?',
         'o' => ['Uniquement les serveurs et matériels physiques', 'Tous les éléments ayant de la valeur pour l\'organisation', 'Uniquement les données numériques', 'Les employés uniquement'],
         'a' => 1, 'exp' => 'Les actifs englobent matériels, logiciels, données, personnes, processus et même la réputation.'],
        ['q' => 'Le CERT-FR est :',
         'o' => ['Un antivirus gouvernemental', 'Un centre de réponse aux incidents informatiques qui alerte les organisations', 'Une norme ISO de sécurité', 'Un organisme de formation en cybersécurité'],
         'a' => 1, 'exp' => 'Le CERT-FR est le Computer Emergency Response Team français, rattaché à l\'ANSSI.'],
        ['q' => 'Qu\'est-ce que la "non-répudiation" ?',
         'o' => ['Impossibilité de nier une action réalisée (ex : signature électronique)', 'Le fait de refuser une demande d\'accès', 'Un type de pare-feu', 'Une méthode de chiffrement'],
         'a' => 0, 'exp' => 'La non-répudiation garantit qu\'une personne ne peut pas nier avoir effectué une action — assurée notamment par la signature électronique.'],
        ['q' => 'Les KPI/KRI de sécurité servent à :',
         'o' => ['Rémunérer les équipes IT', 'Mesurer et piloter le niveau de protection du SI', 'Déclencher des cyberattaques automatiques', 'Chiffrer les communications'],
         'a' => 1, 'exp' => 'Les indicateurs de sécurité (Key Performance / Risk Indicators) permettent de mesurer : vuln. détectées, délai de correction, taux de disponibilité…'],
        ['q' => 'Quel est le rôle du DPO dans une organisation ?',
         'o' => ['Gérer le réseau informatique', 'Conseiller sur la conformité RGPD et faire le lien avec la CNIL', 'Superviser le développement logiciel', 'Coordonner les ventes'],
         'a' => 1, 'exp' => 'Le DPO (Délégué à la Protection des Données) est un rôle indépendant, souvent obligatoire (art. 37 RGPD).'],
        ['q' => 'L\'intégrité d\'une donnée garantit que :',
         'o' => ['Elle est chiffrée', 'Elle n\'a pas été altérée ou modifiée de façon non autorisée', 'Elle est accessible en permanence', 'Elle est uniquement lisible par l\'administrateur'],
         'a' => 1, 'exp' => 'L\'intégrité assure que les données n\'ont pas été modifiées sans autorisation — distincte de la confidentialité (qui qui peut lire) et de la disponibilité (accès).'],
    ],

    /* ══════════ DONNÉES PERSONNELLES ══════════ */
    'donnees' => [
        ['q' => 'Qu\'est-ce qu\'une donnée à caractère personnel ?',
         'o' => ['Uniquement le nom et prénom d\'une personne', 'Toute information permettant d\'identifier directement ou indirectement une personne physique', 'Les données financières d\'une entreprise', 'Les brevets et propriétés intellectuelles'],
         'a' => 1, 'exp' => 'Une donnée personnelle = toute information se rapportant à une personne physique identifiée ou identifiable (nom, IP, email, localisation…).'],
        ['q' => 'Parmi ces exemples, lequel est une donnée sensible selon le RGPD ?',
         'o' => ['L\'adresse email professionnelle', 'Le numéro de téléphone fixe', 'L\'origine ethnique d\'une personne', 'Le numéro de client'],
         'a' => 2, 'exp' => 'Les données sensibles incluent : origine raciale, opinions politiques, religion, santé, orientation sexuelle, données biométriques ou génétiques.'],
        ['q' => 'En cas de violation de données, dans quel délai doit-on notifier la CNIL ?',
         'o' => ['7 jours', '72 heures', '30 jours', '1 an'],
         'a' => 1, 'exp' => 'L\'article 33 du RGPD impose de notifier la CNIL dans les 72 heures suivant la découverte d\'une violation de données.'],
        ['q' => 'Quel principe du RGPD impose de ne collecter que les données strictement nécessaires ?',
         'o' => ['Le droit à l\'oubli', 'La minimisation des données', 'La portabilité', 'Le consentement'],
         'a' => 1, 'exp' => 'Le principe de minimisation (art. 5 RGPD) : les données doivent être "adéquates, pertinentes et limitées à ce qui est nécessaire".'],
        ['q' => 'Le RGPD s\'applique à :',
         'o' => ['Uniquement aux entreprises françaises', 'Uniquement aux grandes entreprises (>250 salariés)', 'Toute organisation traitant des données de résidents de l\'UE, où qu\'elle soit établie', 'Uniquement aux organismes publics'],
         'a' => 2, 'exp' => 'Le RGPD a une portée extraterritoriale : il s\'applique dès lors que des données de résidents européens sont traitées.'],
        ['q' => 'Le droit à l\'effacement (droit à l\'oubli) permet à une personne de :',
         'o' => ['Demander la correction de ses données', 'Demander la suppression de ses données personnelles sous certaines conditions', 'Recevoir une copie de ses données', 'S\'opposer au profilage'],
         'a' => 1, 'exp' => 'Le droit à l\'effacement (art. 17 RGPD) permet d\'obtenir la suppression des données lorsque leur conservation n\'est plus nécessaire ou légitime.'],
        ['q' => 'Qu\'est-ce qu\'un registre des traitements ?',
         'o' => ['Un antivirus pour bases de données', 'Un inventaire documenté de toutes les opérations de traitement de données personnelles', 'Un journal des accès informatiques', 'Un contrat entre responsable et sous-traitant'],
         'a' => 1, 'exp' => 'Le registre des traitements (art. 30 RGPD) recense : finalité, données traitées, durée de conservation, mesures de sécurité…'],
        ['q' => 'La "privacy by design" signifie :',
         'o' => ['Chiffrer les données après leur collecte', 'Intégrer la protection des données dès la conception du système', 'Masquer l\'interface utilisateur', 'Supprimer les données après utilisation'],
         'a' => 1, 'exp' => '"Privacy by design" (art. 25 RGPD) : la protection des données est intégrée dès la conception, pas rajoutée après coup.'],
        ['q' => 'Quelle organisation française contrôle l\'application du RGPD ?',
         'o' => ['L\'ANSSI', 'L\'ENISA', 'La CNIL', 'Le CERT-FR'],
         'a' => 2, 'exp' => 'La CNIL (Commission Nationale de l\'Informatique et des Libertés) est l\'autorité de contrôle française du RGPD.'],
        ['q' => 'Quel est le montant maximal de l\'amende RGPD pour les violations les plus graves ?',
         'o' => ['1 million d\'euros', '10 millions € ou 2 % du CA mondial', '20 millions € ou 4 % du CA mondial annuel', '100 000 € par infraction'],
         'a' => 2, 'exp' => 'Le RGPD prévoit des amendes allant jusqu\'à 20 M€ ou 4 % du chiffre d\'affaires mondial annuel pour les violations les plus graves.'],
        ['q' => 'Qu\'est-ce qu\'une analyse d\'impact (DPIA) ?',
         'o' => ['Un audit de sécurité réseau', 'Une évaluation des risques liés à un traitement de données à risque élevé pour les personnes', 'Un test de pénétration', 'Une procédure de sauvegarde'],
         'a' => 1, 'exp' => 'La DPIA (Data Protection Impact Assessment) est obligatoire pour les traitements susceptibles d\'engendrer un risque élevé pour les droits des personnes.'],
        ['q' => 'Quel droit permet à une personne de recevoir ses données dans un format réutilisable ?',
         'o' => ['Droit d\'accès', 'Droit à la portabilité', 'Droit de rectification', 'Droit à l\'oubli'],
         'a' => 1, 'exp' => 'Le droit à la portabilité (art. 20 RGPD) permet de recevoir ses données dans un format structuré et de les transmettre à un autre responsable.'],
        ['q' => 'Un responsable de traitement est :',
         'o' => ['L\'informaticien qui administre la base de données', 'L\'entité qui détermine les finalités et les moyens du traitement', 'Le prestataire qui héberge les données', 'L\'utilisateur final'],
         'a' => 1, 'exp' => 'Le responsable de traitement détermine "pourquoi" et "comment" les données sont traitées. Le sous-traitant exécute selon ses instructions.'],
        ['q' => 'Le consentement RGPD doit être :',
         'o' => ['Implicite et supposé si l\'utilisateur ne s\'oppose pas', 'Libre, spécifique, éclairé et univoque', 'Valable à vie sans possibilité de retrait', 'Recueilli uniquement par écrit'],
         'a' => 1, 'exp' => 'Le consentement doit être libre (sans contrainte), spécifique (pour une finalité précise), éclairé (informé) et univoque (geste positif clair).'],
    ],

    /* ══════════ IDENTITÉ NUMÉRIQUE ══════════ */
    'identite' => [
        ['q' => 'Qu\'est-ce que l\'identité numérique d\'une organisation ?',
         'o' => ['Uniquement le site web officiel', 'L\'ensemble des représentations et traces numériques de l\'organisation sur Internet', 'Le numéro SIRET de l\'entreprise', 'Les adresses IP de ses serveurs'],
         'a' => 1, 'exp' => 'L\'identité numérique englobe toutes les présences en ligne : site, réseaux sociaux, emails, applications, traces, réputation digitale…'],
        ['q' => 'Que protège l\'enregistrement SPF (Sender Policy Framework) ?',
         'o' => ['Le chiffrement des e-mails', 'L\'autorisation des serveurs autorisés à envoyer des emails au nom d\'un domaine', 'Les DNS contre les attaques DDoS', 'L\'accès aux serveurs web'],
         'a' => 1, 'exp' => 'SPF est un enregistrement DNS qui liste les serveurs autorisés à envoyer des emails pour un domaine, réduisant l\'usurpation (spoofing).'],
        ['q' => 'DKIM sert à :',
         'o' => ['Chiffrer le corps des emails de bout en bout', 'Signer numériquement les emails pour garantir leur authenticité et intégrité', 'Bloquer les spams à réception', 'Authentifier les accès HTTPS'],
         'a' => 1, 'exp' => 'DKIM (DomainKeys Identified Mail) ajoute une signature cryptographique à l\'email, permettant au destinataire de vérifier l\'authenticité.'],
        ['q' => 'DMARC permet de :',
         'o' => ['Chiffrer les connexions HTTPS', 'Définir une politique de traitement si SPF/DKIM échouent, et recevoir des rapports', 'Scanner les pièces jointes pour détecter les virus', 'Authentifier les connexions VPN'],
         'a' => 1, 'exp' => 'DMARC s\'appuie sur SPF et DKIM pour définir quoi faire (rejeter, mettre en quarantaine) si les contrôles échouent, et envoyer des rapports d\'analyse.'],
        ['q' => 'Le "défacement" (defacement) d\'un site web consiste à :',
         'o' => ['Voler la base de données du site', 'Modifier le contenu visible du site sans autorisation', 'Rendre le site indisponible par surcharge', 'Copier le code source du site'],
         'a' => 1, 'exp' => 'Le défacement est une attaque visant à modifier le contenu affiché du site (souvent la page d\'accueil) à des fins de propagande ou de démonstration.'],
        ['q' => 'Qu\'est-ce que l\'hameçonnage (phishing) ciblé vers une organisation spécifique ?',
         'o' => ['Une attaque DDoS volumétrique', 'Le spear phishing : emails frauduleux personnalisés visant des cibles précises', 'Une intrusion physique dans les locaux', 'Un scan de ports réseau'],
         'a' => 1, 'exp' => 'Le spear phishing est du phishing ciblé : l\'attaquant personnalise le message (nom, poste, contexte) pour tromper une cible spécifique.'],
        ['q' => 'DNSSEC protège contre :',
         'o' => ['Le chiffrement des requêtes DNS', 'La falsification des réponses DNS (empoisonnement de cache)', 'La surcharge des serveurs DNS', 'L\'usurpation des emails'],
         'a' => 1, 'exp' => 'DNSSEC ajoute une signature cryptographique aux enregistrements DNS pour garantir leur authenticité et empêcher l\'empoisonnement de cache.'],
        ['q' => 'La réputation numérique d\'une organisation peut être affectée par :',
         'o' => ['Uniquement les cyberattaques directes', 'Des avis négatifs, fuites de données, défacement, usurpation de compte ou désinformation', 'Uniquement des pannes techniques', 'Le changement de logo'],
         'a' => 1, 'exp' => 'La réputation numérique est multidimensionnelle : elle peut être atteinte par des attaques techniques mais aussi sociales (fake news, avis…).'],
        ['q' => 'Qu\'est-ce qu\'une usurpation d\'identité numérique ?',
         'o' => ['La création d\'un compte officiel sur les réseaux sociaux', 'Se faire passer pour une organisation ou une personne en utilisant ses identifiants ou son image', 'La mise à jour du nom de domaine', 'L\'utilisation d\'un VPN'],
         'a' => 1, 'exp' => 'L\'usurpation consiste à se faire passer pour une organisation (faux site, faux compte) pour tromper clients, partenaires ou employés.'],
        ['q' => 'DANE (DNS-based Authentication of Named Entities) sert à :',
         'o' => ['Remplacer les certificats SSL/TLS par des enregistrements DNS', 'Lier un certificat TLS à un enregistrement DNS pour prévenir les faux certificats', 'Bloquer les emails non chiffrés', 'Gérer les noms de domaine'],
         'a' => 1, 'exp' => 'DANE utilise DNSSEC pour associer un certificat TLS à un nom de domaine, réduisant la dépendance aux autorités de certification.'],
        ['q' => 'Une trace numérique laissée par une organisation peut inclure :',
         'o' => ['Uniquement les emails envoyés', 'Les métadonnées de fichiers, les cookies, les logs de connexion, les posts sur réseaux sociaux', 'Uniquement les transactions financières', 'Uniquement le code source des applications'],
         'a' => 1, 'exp' => 'Les traces numériques sont multiples : métadonnées, logs, cookies, publications, commentaires, images — souvent invisibles pour l\'organisation.'],
        ['q' => 'Pourquoi surveiller les sources OSINT liées à son organisation ?',
         'o' => ['Pour espionner les concurrents', 'Pour identifier les informations publiquement accessibles qui pourraient aider un attaquant', 'Pour améliorer le référencement naturel', 'Pour automatiser la comptabilité'],
         'a' => 1, 'exp' => 'L\'OSINT (Open Source Intelligence) : un attaquant peut collecter des infos publiques (LinkedIn, GitHub, DNS…) pour préparer une attaque. Il faut connaître son exposition.'],
    ],

    /* ══════════ SÉCURISATION DES USAGES ══════════ */
    'securisation' => [
        ['q' => 'Qu\'est-ce que le "principe du moindre privilège" ?',
         'o' => ['N\'accorder qu\'un accès minimal nécessaire à chaque utilisateur pour ses tâches', 'Supprimer tous les comptes administrateurs', 'Utiliser des mots de passe courts et simples', 'Bloquer tous les ports réseau'],
         'a' => 0, 'exp' => 'Le moindre privilège signifie que chaque utilisateur ou processus ne dispose que des droits strictement nécessaires à ses attributions.'],
        ['q' => 'Le chiffrement intégral du disque (FDE — Full Disk Encryption) protège :',
         'o' => ['Les données en transit sur le réseau', 'Les données contre l\'accès physique non autorisé si l\'appareil est volé ou perdu', 'Les accès logiques au système d\'exploitation', 'Les communications par email'],
         'a' => 1, 'exp' => 'FDE chiffre toutes les données sur le disque. Si l\'appareil est volé, les données restent illisibles sans la clé de déchiffrement.'],
        ['q' => 'Qu\'est-ce qu\'un pare-feu (firewall) de type "stateful" ?',
         'o' => ['Un pare-feu qui filtre uniquement par adresse IP source', 'Un pare-feu qui suit l\'état des connexions réseau pour valider les paquets', 'Un antivirus intégré au réseau', 'Un proxy web transparent'],
         'a' => 1, 'exp' => '"Stateful" signifie que le pare-feu mémorise l\'état des connexions TCP/UDP et n\'accepte que les paquets correspondant à une session légitime connue.'],
        ['q' => 'Un EDR (Endpoint Detection and Response) est :',
         'o' => ['Un simple antivirus classique basé sur signatures', 'Une solution de détection et réponse aux menaces sur les postes, avec analyse comportementale', 'Un gestionnaire de mises à jour', 'Un outil de chiffrement des emails'],
         'a' => 1, 'exp' => 'Un EDR surveille en continu les comportements sur les endpoints (postes, serveurs) et peut répondre automatiquement aux menaces évoluées.'],
        ['q' => 'La séquence de démarrage sécurisée (Secure Boot) sert à :',
         'o' => ['Accélérer le démarrage du PC', 'Vérifier l\'intégrité du chargeur de démarrage et du noyau OS pour empêcher les bootkits', 'Chiffrer le disque au démarrage', 'Bloquer l\'accès au BIOS'],
         'a' => 1, 'exp' => 'Secure Boot (UEFI) garantit que seuls des logiciels signés et approuvés sont exécutés pendant le démarrage, empêchant les rootkits de bas niveau.'],
        ['q' => 'Pourquoi les supports amovibles (clés USB) représentent-ils un risque ?',
         'o' => ['Ils ralentissent le réseau', 'Ils peuvent introduire des malwares, exfiltrer des données ou servir de vecteur d\'attaque physique', 'Ils consomment trop d\'énergie', 'Ils sont incompatibles avec les systèmes modernes'],
         'a' => 1, 'exp' => 'Les USB peuvent être laissés intentionnellement (attaque "USB drop"), infecter un poste hors réseau ou servir à voler des données.'],
        ['q' => 'Qu\'est-ce que l\'authentification multi-facteurs (MFA) ?',
         'o' => ['Utiliser plusieurs mots de passe différents', 'Combiner au moins deux facteurs (connaissance, possession, inhérence) pour s\'authentifier', 'Changer son mot de passe tous les mois', 'Se connecter depuis plusieurs appareils'],
         'a' => 1, 'exp' => 'MFA combine : quelque chose que vous savez (MDP), quelque chose que vous avez (token, téléphone), quelque chose que vous êtes (biométrie).'],
        ['q' => 'Un audit de sécurité vise principalement à :',
         'o' => ['Remplacer les équipements défaillants', 'Vérifier la conformité et l\'efficacité des mesures de sécurité en place', 'Former les utilisateurs', 'Acheter de nouveaux logiciels'],
         'a' => 1, 'exp' => 'Un audit évalue si les mesures de sécurité sont correctement mises en œuvre, efficaces et conformes aux politiques et réglementations.'],
        ['q' => 'Le "durcissement" (hardening) d\'un système consiste à :',
         'o' => ['Augmenter la puissance du matériel', 'Réduire la surface d\'attaque en désactivant services/ports inutiles et en appliquant les bonnes pratiques', 'Augmenter la résistance physique du matériel', 'Installer tous les logiciels disponibles'],
         'a' => 1, 'exp' => 'Le durcissement réduit la surface d\'attaque : on désactive les services inutiles, on applique des configurations sécurisées, on supprime les comptes par défaut.'],
        ['q' => 'La gestion des mises à jour (patch management) est cruciale car :',
         'o' => ['Elle améliore uniquement les performances', 'Elle corrige les vulnérabilités connues qui seraient autrement exploitables', 'Elle est uniquement obligatoire pour les grands groupes', 'Elle permet d\'ajouter de nouvelles fonctionnalités'],
         'a' => 1, 'exp' => 'La grande majorité des exploits ciblent des vulnérabilités connues avec un correctif disponible. Les mises à jour sont la première ligne de défense.'],
        ['q' => 'Un VPN (Virtual Private Network) assure principalement :',
         'o' => ['L\'anonymat total sur Internet', 'Le chiffrement du tunnel de communication et l\'authentification des extrémités', 'La suppression des traces de navigation', 'La protection contre les virus'],
         'a' => 1, 'exp' => 'Un VPN chiffre les communications entre le client et le serveur VPN, protégeant les données en transit — utile notamment sur les réseaux Wi-Fi publics.'],
        ['q' => 'Le principe de "défense en profondeur" consiste à :',
         'o' => ['N\'utiliser qu\'un seul outil de sécurité très puissant', 'Mettre en place plusieurs couches de sécurité complémentaires', 'Réserver la sécurité aux serveurs critiques', 'Se concentrer sur le seul périmètre réseau'],
         'a' => 1, 'exp' => 'La défense en profondeur empile plusieurs barrières (réseau, système, application, données, humain) — si une couche est franchie, les autres protègent.'],
        ['q' => 'Un SIEM (Security Information and Event Management) permet de :',
         'o' => ['Chiffrer les communications réseau', 'Centraliser et corréler les événements de sécurité pour détecter les incidents', 'Gérer les identités et les accès', 'Sauvegarder les données en temps réel'],
         'a' => 1, 'exp' => 'Un SIEM collecte les logs de multiples sources, les corrèle et génère des alertes — central dans un SOC (Security Operations Center).'],
    ],

    /* ══════════ DISPONIBILITÉ / INTÉGRITÉ / CONFIDENTIALITÉ ══════════ */
    'disponibilite' => [
        ['q' => 'Qu\'est-ce qu\'une attaque DDoS (Distributed Denial of Service) ?',
         'o' => ['Una intrusion dans une base de données', 'Une attaque qui submerge un service avec un trafic massif provenant de multiples sources pour le rendre indisponible', 'Un chiffrement malveillant des fichiers', 'Une usurpation d\'identité en ligne'],
         'a' => 1, 'exp' => 'Une DDoS utilise un botnet pour saturer un serveur / réseau de requêtes, causant une indisponibilité — atteinte directe à la disponibilité.'],
        ['q' => 'Un plan de continuité d\'activité (PCA) vise à :',
         'o' => ['Augmenter la productivité quotidienne', 'Maintenir les activités essentielles en cas d\'incident ou de sinistre majeur', 'Remplacer le système de sauvegarde', 'Former les employés aux nouvelles technologies'],
         'a' => 1, 'exp' => 'Le PCA définit comment l\'organisation continue à fonctionner (même en mode dégradé) face à un incident grave — il complète le PRA.'],
        ['q' => 'La différence entre RPO et RTO est :',
         'o' => ['RPO = temps de reprise ; RTO = perte de données acceptable', 'RPO = perte de données maximale acceptable ; RTO = délai maximal de reprise d\'activité', 'Ils sont synonymes', 'RPO concerne les réseaux ; RTO concerne les applications'],
         'a' => 1, 'exp' => 'RPO (Recovery Point Objective) = combien de données peut-on perdre ? RTO (Recovery Time Objective) = dans quel délai doit-on reprendre ?'],
        ['q' => 'Un ransomware (rançongiciel) affecte principalement quel pilier de la sécurité ?',
         'o' => ['Uniquement la confidentialité', 'La disponibilité (fichiers chiffrés inaccessibles) et potentiellement la confidentialité (exfiltration)', 'Uniquement l\'intégrité', 'Aucun des trois piliers DIC'],
         'a' => 1, 'exp' => 'Un ransomware chiffre les fichiers (atteinte à la disponibilité). Les variantes modernes exfiltrent aussi les données (atteinte à la confidentialité).'],
        ['q' => 'La journalisation (logging) contribue à quel besoin de sécurité ?',
         'o' => ['La disponibilité uniquement', 'La traçabilité et la preuve numérique (non-répudiation, forensic)', 'Le chiffrement des données', 'La gestion des mots de passe'],
         'a' => 1, 'exp' => 'Les journaux (logs) permettent de tracer les actions, détecter des anomalies, mener une investigation forensique et prouver ce qui s\'est passé.'],
        ['q' => 'Qu\'est-ce que la règle de sauvegarde 3-2-1 ?',
         'o' => ['3 sauvegardes par jour, 2 heurs d\'intervalle, 1 vérification mensuelle', '3 copies des données, sur 2 supports différents, dont 1 hors site', '3 disques en RAID, 2 serveurs en cluster, 1 cloud', '3 sauvegardes complètes, 2 incrémentales, 1 différentielle'],
         'a' => 1, 'exp' => 'La règle 3-2-1 : au moins 3 copies, sur au moins 2 médias différents, dont au moins 1 stocké hors du site principal.'],
        ['q' => 'Une attaque par injection SQL peut compromettre :',
         'o' => ['Uniquement la disponibilité du service', 'La confidentialité (fuite de données), l\'intégrité (modification) et la disponibilité (destruction)', 'Uniquement l\'intégrité des fichiers', 'Uniquement les images du site'],
         'a' => 1, 'exp' => 'Une injection SQL peut permettre de lire, modifier ou supprimer des données, et même d\'exécuter des commandes système — touchant les trois piliers DIC.'],
        ['q' => 'Le terme "forensique" (forensics) en informatique désigne :',
         'o' => ['La conception sécurisée de logiciels', 'La collecte, préservation et analyse de preuves numériques après un incident', 'La surveillance temps réel d\'un réseau', 'La gestion des vulnérabilités'],
         'a' => 1, 'exp' => 'L\'informatique forensique (criminalistique numérique) consiste à collecter et analyser les preuves numériques dans le respect de la chaîne de custody.'],
        ['q' => 'Quel est le but d\'une signature numérique sur un document ?',
         'o' => ['Chiffrer le contenu du document', 'Garantir l\'authenticité et l\'intégrité du document, et assurer la non-répudiation', 'Compresser le document', 'Contrôler l\'accès au document'],
         'a' => 1, 'exp' => 'Une signature numérique utilise la cryptographie asymétrique pour prouver l\'identité du signataire et que le document n\'a pas été modifié après signature.'],
        ['q' => 'La haute disponibilité (HA — High Availability) est assurée notamment par :',
         'o' => ['Une seule machine très puissante', 'La redondance matérielle, le clustering et les équilibreurs de charge', 'Des mots de passe complexes', 'Des sauvegardes hebdomadaires'],
         'a' => 1, 'exp' => 'La HA s\'appuie sur la redondance (serveurs en cluster, liens réseau dupliqués, load balancers) pour maintenir le service même en cas de défaillance partielle.'],
        ['q' => 'Les obligations légales d\'archivage en France couvrent notamment :',
         'o' => ['Uniquement les données médicales', 'Des durées variables selon le type de document (ex : 10 ans pour les pièces comptables)', 'Aucune obligation légale n\'existe en France', 'Uniquement les données RH'],
         'a' => 1, 'exp' => 'La loi impose des durées d\'archivage selon le type : 10 ans pour les pièces comptables, 5 ans pour les contrats commerciaux, etc.'],
        ['q' => 'Qu\'est-ce qu\'un hash cryptographique (empreinte numérique) ?',
         'o' => ['Un mot de passe chiffré réversible', 'Une empreinte de taille fixe calculée à partir de données, permettant de vérifier leur intégrité', 'Une clé de chiffrement asymétrique', 'Un certificat SSL'],
         'a' => 1, 'exp' => 'Un hash (SHA-256, MD5…) produit une empreinte de taille fixe. Le moindre changement dans les données change totalement le hash — idéal pour vérifier l\'intégrité.'],
        ['q' => 'La perte de confidentialité signifie que :',
         'o' => ['Les données sont effacées', 'Des personnes non autorisées ont accès à des informations sensibles', 'Le service est indisponible', 'Les données ont été altérées'],
         'a' => 1, 'exp' => 'La confidentialité garantit que seules les personnes autorisées accèdent aux données. Une brèche = fuite ou accès non autorisé à des informations sensibles.'],
    ],

    /* ══════════ SLAM ══════════ */
    'slam' => [
        ['q' => 'Qu\'est-ce que l\'injection SQL ?',
         'o' => ['Une technique de chiffrement des requêtes', 'Une attaque qui insère du code SQL malveillant dans une entrée utilisateur pour manipuler la base de données', 'Un ORM pour bases de données', 'Un protocole de réplication de base de données'],
         'a' => 1, 'exp' => 'L\'injection SQL exploite une absence de validation des entrées : on insère du SQL dans un champ pour lire, modifier ou supprimer des données, voire prendre le contrôle du serveur.'],
        ['q' => 'Le Top 10 OWASP recense :',
         'o' => ['Les 10 meilleurs frameworks web', 'Les 10 vulnérabilités applicatives les plus critiques', 'Les 10 meilleures pratiques de déploiement cloud', 'Les 10 langages de programmation les plus populaires'],
         'a' => 1, 'exp' => 'L\'OWASP Top 10 est la référence mondiale des risques de sécurité applicatifs les plus répandus (injection, XSS, IDOR, SSRF, mauvaise config…).'],
        ['q' => 'Une attaque XSS (Cross-Site Scripting) consiste à :',
         'o' => ['Intercepter des communications réseau chiffrées', 'Injecter du code JavaScript malveillant dans une page web vue par d\'autres utilisateurs', 'Falsifier des requêtes HTTP entre deux serveurs', 'Attaquer un serveur DNS'],
         'a' => 1, 'exp' => 'XSS injecte du script côté client (JS) dans le navigateur d\'autres utilisateurs, pouvant voler des cookies, rediriger ou afficher du faux contenu.'],
        ['q' => 'Qu\'est-ce que le CSRF (Cross-Site Request Forgery) ?',
         'o' => ['Une injection SQL sur une API REST', 'Une attaque qui force le navigateur d\'un utilisateur authentifié à envoyer une requête non voulue à un site tiers', 'Un déni de service distribué', 'Un empoisonnement de cache DNS'],
         'a' => 1, 'exp' => 'CSRF exploite la session active d\'un utilisateur : un site malveillant déclenche une action (virement, changement de MDP) sur un autre site où il est connecté.'],
        ['q' => 'DevSecOps signifie :',
         'o' => ['Développement sécurisé uniquement pour les grandes entreprises', 'Intégration de la sécurité à chaque étape du cycle DevOps (développement, intégration, déploiement)', 'Un outil d\'analyse statique du code', 'Un standard de chiffrement pour les APIs'],
         'a' => 1, 'exp' => 'DevSecOps : "shift security left" — intégrer les pratiques de sécurité dès le développement, dans les pipelines CI/CD, plutôt qu\'en fin de cycle.'],
        ['q' => 'Qu\'est-ce qu\'un token JWT (JSON Web Token) ?',
         'o' => ['Un protocole de chiffrement symétrique', 'Un format compact de jeton signé pour transmettre des informations d\'authentification entre parties', 'Un algorithme de hachage', 'Un protocole OAuth exclusivement'],
         'a' => 1, 'exp' => 'Un JWT contient un header, un payload (claims) et une signature. Il est utilisé pour l\'authentification stateless (API REST, SSO).'],
        ['q' => 'La validation des entrées côté serveur est nécessaire car :',
         'o' => ['Le navigateur la fait automatiquement de façon fiable', 'La validation côté client peut être contournée ; le serveur est le dernier rempart', 'Elle est uniquement requise pour les bases de données NoSQL', 'La validation côté serveur ralentit trop les performances'],
         'a' => 1, 'exp' => 'La validation côté client (HTML5, JS) est cosmétique. Un attaquant peut envoyer directement des requêtes au serveur — la validation serveur est indispensable.'],
        ['q' => 'Un test d\'intrusion (pentest) est :',
         'o' => ['Un audit de conformité réglementaire', 'Une simulation d\'attaque autorisée pour identifier les vulnérabilités avant un vrai attaquant', 'Un scan automatique de vulnérabilités uniquement', 'Un test de charge du serveur'],
         'a' => 1, 'exp' => 'Un pentest est une attaque simulée, consentie et encadrée, visant à découvrir des vulnérabilités réelles dans les systèmes avant qu\'un attaquant ne les exploite.'],
        ['q' => 'Qu\'est-ce qu\'un IDOR (Insecure Direct Object Reference) ?',
         'o' => ['Un type d\'injection SQL', 'Une référence directe à un objet (ID, fichier) sans vérification des droits d\'accès', 'Une faille dans les protocoles cryptographiques', 'Un problème de configuration du serveur web'],
         'a' => 1, 'exp' => 'IDOR (OWASP A01) : accès à des ressources en manipulant directement un identifiant (ex : changer id=123 en id=124 pour voir les données d\'un autre).'],
        ['q' => 'Pourquoi utiliser des requêtes préparées (prepared statements) ?',
         'o' => ['Pour accélérer les requêtes SQL complexes', 'Pour séparer le code SQL des données et empêcher les injections SQL', 'Pour compresser les données de la base', 'Pour chiffrer les champs de la base de données'],
         'a' => 1, 'exp' => 'Les requêtes préparées (parameterized queries) traitent les données utilisateur comme des valeurs, jamais comme du code SQL — protection principale contre l\'injection SQL.'],
        ['q' => 'Le principe "security by default" signifie :',
         'o' => ['Activer toutes les fonctionnalités par défaut', 'La configuration par défaut d\'un logiciel doit être la plus sécurisée possible', 'Laisser l\'utilisateur choisir son niveau de sécurité', 'La sécurité ne s\'active qu\'en production'],
         'a' => 1, 'exp' => '"Security by default" : sans configuration particulière, le produit est déjà sécurisé (pas de compte admin par défaut, HTTPS forcé, cookies sécurisés…).'],
        ['q' => 'Une API REST mal sécurisée peut exposer à :',
         'o' => ['Uniquement des problèmes de performance', 'Fuites de données (broken auth, IDOR), injections, exposition excessive de données', 'Uniquement des pannes du serveur', 'Uniquement des problèmes d\'encodage'],
         'a' => 1, 'exp' => 'L\'OWASP API Security Top 10 liste les risques spécifiques aux API : broken object level auth, authentification cassée, exposition excessive, injection…'],
        ['q' => 'Qu\'est-ce que l\'analyse statique de code (SAST) ?',
         'o' => ['L\'exécution du code dans un environnement isolé pour détecter les comportements malveillants', 'L\'analyse du code source sans l\'exécuter pour détecter les vulnérabilités', 'Un test de charge de l\'application', 'La vérification des dépendances de librairies'],
         'a' => 1, 'exp' => 'SAST (Static Application Security Testing) analyse le code source ou bytecode sans l\'exécuter — idéal à intégrer dans le pipeline CI/CD.'],
        ['q' => 'Lequel est un algorithme de hachage considéré comme sûr pour les mots de passe ?',
         'o' => ['MD5', 'SHA-1', 'bcrypt', 'Base64'],
         'a' => 2, 'exp' => 'MD5 et SHA-1 sont cassés (collisions). Base64 est un encodage, pas un hachage. bcrypt, scrypt et Argon2 sont conçus pour être lents et résistants au brute force.'],

        /* ── Nouvelles questions : SQL avancé ── */
        ['q' => 'Quelle est la différence entre WHERE et HAVING en SQL ?',
         'o' => ['WHERE et HAVING sont identiques', 'WHERE filtre les lignes avant regroupement ; HAVING filtre les groupes après agrégation', 'HAVING s\'utilise sans GROUP BY ; WHERE s\'utilise avec GROUP BY', 'WHERE est pour les chaînes ; HAVING est pour les nombres'],
         'a' => 1, 'exp' => 'WHERE est évalué avant le GROUP BY (filtre les lignes). HAVING est évalué après le GROUP BY (filtre les groupes issus de l\'agrégation).'],
        ['q' => 'Quelle requête SQL permet de détecter les IPs avec plus de 50 échecs de connexion ?',
         'o' => ['SELECT ip FROM connexions WHERE COUNT(*) > 50', 'SELECT ip_source, COUNT(*) AS t FROM connexions WHERE succes=0 GROUP BY ip_source HAVING t > 50', 'SELECT ip_source FROM connexions HAVING COUNT > 50', 'SELECT * FROM connexions GROUP BY ip_source WHERE tentatives > 50'],
         'a' => 1, 'exp' => 'Il faut GROUP BY pour regrouper par IP, COUNT(*) pour compter, et HAVING (pas WHERE) pour filtrer les groupes après agrégation.'],
        ['q' => 'En SQL, comment supprimer les tokens de réinitialisation créés il y a plus d\'1 heure ?',
         'o' => ['DELETE FROM reset_tokens WHERE created_at < DATE_SUB(NOW(), 1)', 'DELETE FROM reset_tokens WHERE created_at < NOW() - INTERVAL 1 HOUR', 'DELETE FROM reset_tokens WHERE DATEDIFF(created_at, NOW()) > 1', 'DELETE FROM reset_tokens WHERE created_at < CURRENT_DATE'],
         'a' => 1, 'exp' => 'La syntaxe MySQL correcte est : NOW() - INTERVAL 1 HOUR. Cela sélectionne toutes les lignes dont created_at est antérieur à "il y a 1 heure".'],
        ['q' => 'Un trigger SQL de type AFTER UPDATE sur une table "comptes" sert à :',
         'o' => ['Empêcher toute modification sur la table', 'Recopier automatiquement l\'ancienne valeur dans une table d\'historique après chaque modification', 'Mettre à jour la table avant que la requête ne s\'exécute', 'Générer automatiquement les clés primaires'],
         'a' => 1, 'exp' => 'Un trigger AFTER UPDATE s\'exécute après la modification. On utilise OLD.colonne pour accéder à l\'ancienne valeur — idéal pour historiser les changements (audit trail).'],
        ['q' => 'Dans un trigger UPDATE, OLD.colonne et NEW.colonne désignent respectivement :',
         'o' => ['La valeur dans l\'ancienne table et la nouvelle table', 'La valeur avant modification et la valeur après modification', 'La colonne d\'origine et la colonne de destination', 'Deux tables différentes liées par une clé étrangère'],
         'a' => 1, 'exp' => 'OLD.colonne = valeur avant la modification (avant UPDATE/DELETE). NEW.colonne = valeur après la modification (après INSERT/UPDATE).'],

        /* ── Nouvelles questions : Mot de passe oublié ── */
        ['q' => 'Pourquoi répondre "Si un compte existe, un email a été envoyé" même si l\'adresse est inconnue ?',
         'o' => ['Pour économiser les emails', 'Pour éviter l\'énumération de comptes (ne pas révéler si un email est inscrit)', 'C\'est une obligation légale RGPD', 'Pour améliorer les performances du serveur'],
         'a' => 1, 'exp' => 'Un message différent selon que l\'adresse existe ou non permettrait à un attaquant de tester des listes d\'emails et savoir qui est inscrit (account enumeration).'],
        ['q' => 'Un token de réinitialisation de mot de passe doit être :',
         'o' => ['L\'ID utilisateur encodé en base64', 'Cryptographiquement aléatoire, à usage unique et avec une durée de validité courte (15-60 min)', 'Le MD5 de l\'email et de la date', 'Un nombre aléatoire à 4 chiffres envoyé par SMS'],
         'a' => 1, 'exp' => 'Le token doit être imprévisible (random_bytes), non réutilisable (supprimé après usage) et expirant rapidement pour limiter la fenêtre d\'attaque.'],
        ['q' => 'Pourquoi hacher le token de réinitialisation avant de le stocker en base de données ?',
         'o' => ['Pour gagner de la place en base', 'Si la base est compromise, l\'attaquant ne peut pas utiliser les tokens stockés directement', 'Pour accélérer la vérification', 'Ce n\'est pas nécessaire, les tokens ne sont pas sensibles'],
         'a' => 1, 'exp' => 'En cas de fuite de la base, hacher le token empêche l\'attaquant de l\'utiliser pour réinitialiser des mots de passe. On compare le hash du token reçu avec le hash stocké.'],

        /* ── Nouvelles questions : DELETE/PUT ── */
        ['q' => 'Qu\'est-ce que le "mass assignment" dans une API REST ?',
         'o' => ['Une attaque DDoS sur l\'API', 'L\'injection de champs sensibles non prévus (ex : role, solde) via le body JSON quand l\'API ne filtre pas les entrées', 'L\'envoi de plusieurs requêtes en parallèle', 'Un problème de pagination sur les grandes collections'],
         'a' => 1, 'exp' => 'Le mass assignment survient quand l\'API lie directement tous les champs JSON à un modèle sans whitelist : un attaquant peut injecter des champs comme "role":"admin".'],
        ['q' => 'Qu\'est-ce qu\'un "soft delete" et pourquoi est-il préférable pour les données importantes ?',
         'o' => ['Supprimer sans transaction SQL', 'Marquer la ligne comme supprimée (colonne deleted_at) sans l\'effacer physiquement, permettant la restauration et la traçabilité', 'Supprimer uniquement les données en cache', 'Utiliser DELETE avec une clause WHERE très précise'],
         'a' => 1, 'exp' => 'Le soft delete conserve la ligne en base avec une date de suppression. La suppression est réversible, chaque action est traçable, et les relations ne sont pas cassées.'],
        ['q' => 'Quel code HTTP doit retourner un endpoint DELETE si l\'utilisateur n\'est pas autorisé ?',
         'o' => ['200 OK', '404 Not Found', '403 Forbidden', '500 Internal Server Error'],
         'a' => 2, 'exp' => '403 Forbidden = authentifié mais pas autorisé. 401 Unauthorized = non authentifié. Éviter 404 pour cacher l\'existence de la ressource peut être judicieux, mais 403 est le code sémantiquement correct.'],
        ['q' => 'Quelle différence fondamentale entre PUT et PATCH ?',
         'o' => ['PUT est sécurisé, PATCH ne l\'est pas', 'PUT remplace la ressource entière ; PATCH applique une modification partielle', 'PATCH est plus rapide que PUT', 'PUT est pour les créations, PATCH pour les suppressions'],
         'a' => 1, 'exp' => 'PUT remplace toute la ressource (omettre un champ = effacer ce champ). PATCH ne modifie que les champs envoyés dans la requête — préférable pour les mises à jour partielles.'],
    ],
];

/* ──────────────────────────────────────────────────────────────────
   VALIDATION ET SÉLECTION DU THÈME
   ────────────────────────────────────────────────────────────────── */
$valid_themes = ['socle', 'donnees', 'identite', 'securisation', 'disponibilite', 'slam'];
$theme = isset($_GET['theme']) && in_array($_GET['theme'], $valid_themes, true)
    ? $_GET['theme']
    : 'socle';

$theme_meta = [
    'socle'          => ['title' => 'Le Socle',                    'badge' => '⬡ Module 0',               'color' => '#00ff88', 'rgb' => '0,255,136',    'back' => 'socle.php'],
    'donnees'        => ['title' => 'Données personnelles',        'badge' => '⊙ Compétence 1',            'color' => '#ff6b6b', 'rgb' => '255,107,107',  'back' => 'donnees-personnelles.php'],
    'identite'       => ['title' => 'Identité numérique',          'badge' => '◈ Compétence 2',            'color' => '#74b9ff', 'rgb' => '116,185,255',  'back' => 'identite-numerique.php'],
    'securisation'   => ['title' => 'Sécurisation des usages',     'badge' => '◉ Compétence 3',            'color' => '#ffd93d', 'rgb' => '255,217,61',   'back' => 'securisation-usages.php'],
    'disponibilite'  => ['title' => 'Disponibilité · Intégrité · Confidentialité', 'badge' => '◆ Compétence 4', 'color' => '#a29bfe', 'rgb' => '162,155,254','back' => 'disponibilite.php'],
    'slam'           => ['title' => 'Cybersécurité applicative SLAM', 'badge' => '⬡ Compétence 5',         'color' => '#fd79a8', 'rgb' => '253,121,168',  'back' => 'slam.php'],
];

$meta     = $theme_meta[$theme];
$all_qs   = $ALL_QUESTIONS[$theme];

// Randomize questions and pick up to 10
shuffle($all_qs);
$questions = array_slice($all_qs, 0, 10);

// Shuffle the options of each question and update the correct-answer index
foreach ($questions as &$q) {
    $indices = [0, 1, 2, 3];
    shuffle($indices);
    $shuffled_opts = [];
    foreach ($indices as $i) {
        $shuffled_opts[] = $q['o'][$i];
    }
    // Find the new position of the original correct answer
    $q['a'] = array_search($q['a'], $indices);
    $q['o'] = $shuffled_opts;
}
unset($q);

$page_title   = 'Quiz — ' . $meta['title'];
$accent_color = $meta['color'];
$accent_rgb   = $meta['rgb'];

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge"><?= htmlspecialchars($meta['badge']) ?> · Quiz</div>
            <h1>Quiz — <em><?= htmlspecialchars($meta['title']) ?></em></h1>
            <p class="sub">
                <?= count($questions) ?> questions aléatoires · Clique sur une réponse pour voir immédiatement si c'est correct.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <a href="<?= htmlspecialchars($meta['back']) ?>"><?= htmlspecialchars($meta['title']) ?></a>
            <span class="sep">/</span>
            <span class="cur">Quiz</span>
        </div>

        <div class="quiz-wrap">

            <div class="quiz-score-bar">
                <span class="quiz-score-label">Score</span>
                <span class="quiz-score-val" id="quiz-score">0 / <?= count($questions) ?></span>
                <span class="quiz-score-pct" id="quiz-pct"></span>
            </div>

            <?php foreach ($questions as $i => $q): ?>
            <div class="qcard" id="qcard-<?= $i ?>">
                <div class="qcard-num">Question <?= $i + 1 ?> / <?= count($questions) ?></div>
                <div class="qcard-q"><?= htmlspecialchars($q['q']) ?></div>
                <div class="qcard-opts" data-answer="<?= $q['a'] ?>" data-index="<?= $i ?>">
                    <?php foreach ($q['o'] as $oi => $opt): ?>
                    <button class="qopt" data-opt="<?= $oi ?>">
                        <span class="qopt-letter"><?= chr(65 + $oi) ?></span>
                        <span class="qopt-text"><?= htmlspecialchars($opt) ?></span>
                    </button>
                    <?php endforeach; ?>
                </div>
                <div class="qcard-feedback" id="feedback-<?= $i ?>" aria-live="polite"></div>
                <div class="qcard-exp" id="exp-<?= $i ?>"><?= htmlspecialchars($q['exp']) ?></div>
            </div>
            <?php endforeach; ?>

            <div class="quiz-result" id="quiz-result" style="display:none">
                <div class="quiz-result-inner">
                    <div class="quiz-result-title">Résultats</div>
                    <div class="quiz-result-score" id="quiz-result-score"></div>
                    <div class="quiz-result-msg"  id="quiz-result-msg"></div>
                    <div class="quiz-result-actions">
                        <a href="quiz.php?theme=<?= htmlspecialchars($theme) ?>" class="btn-quiz-action btn-quiz-retry">↺ Rejouer</a>
                        <a href="<?= htmlspecialchars($meta['back']) ?>" class="btn-quiz-action btn-quiz-back">← Retour au cours</a>
                    </div>
                </div>
            </div>

        </div><!-- /.quiz-wrap -->

    </div><!-- /.content -->
</main>

<script>
(function () {
    const TOTAL      = <?= count($questions) ?>;
    let answered     = 0;
    let correct      = 0;

    function updateScore() {
        document.getElementById('quiz-score').textContent = correct + ' / ' + TOTAL;
        if (answered > 0) {
            const pct = Math.round((correct / answered) * 100);
            document.getElementById('quiz-pct').textContent = '(' + pct + '% de bonnes réponses)';
        }
    }

    document.querySelectorAll('.qcard-opts').forEach(function (opts) {
        const correctIdx = parseInt(opts.dataset.answer, 10);
        const cardIdx    = parseInt(opts.dataset.index,  10);

        opts.querySelectorAll('.qopt').forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Prevent double-answer
                if (opts.dataset.done) return;
                opts.dataset.done = '1';

                const chosen = parseInt(btn.dataset.opt, 10);
                const isOk   = (chosen === correctIdx);

                // Style all buttons
                opts.querySelectorAll('.qopt').forEach(function (b) {
                    const bIdx = parseInt(b.dataset.opt, 10);
                    if (bIdx === correctIdx) {
                        b.classList.add('qopt--correct');
                    } else if (b === btn && !isOk) {
                        b.classList.add('qopt--wrong');
                    }
                    b.disabled = true;
                });

                // Feedback message
                const fb = document.getElementById('feedback-' + cardIdx);
                fb.textContent = isOk ? '✓ Bonne réponse !' : '✗ Mauvaise réponse.';
                fb.className   = 'qcard-feedback ' + (isOk ? 'qcard-feedback--ok' : 'qcard-feedback--ko');

                // Show explanation
                document.getElementById('exp-' + cardIdx).classList.add('qcard-exp--visible');

                answered++;
                if (isOk) correct++;
                updateScore();

                // Show final result panel when all answered
                if (answered === TOTAL) {
                    const pct = Math.round((correct / TOTAL) * 100);
                    const msg = pct === 100 ? 'Excellent ! Score parfait 🎯'
                              : pct >= 80  ? 'Très bien ! Continue comme ça.'
                              : pct >= 60  ? 'Pas mal ! Revois les points ratés.'
                              : pct >= 40  ? 'Insuffisant — relis le cours.'
                              : 'Difficile ! Reprends le cours depuis le début.';

                    const panel = document.getElementById('quiz-result');
                    document.getElementById('quiz-result-score').textContent = correct + ' / ' + TOTAL + ' (' + pct + '%)';
                    document.getElementById('quiz-result-msg').textContent   = msg;
                    panel.style.display = 'block';
                    panel.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });
}());
</script>

<?php require '../includes/footer.php'; ?>
