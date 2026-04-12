<?php
$page_title   = 'Protection des données personnelles';
$base_path    = '../';
$current_page = 'donnees';
$accent_color = '#ff6b6b';
$accent_rgb   = '255,107,107';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">⊙ Compétence 1 · Bloc 3</div>
            <h1>Protection des <em>données personnelles</em></h1>
            <p class="sub">
                Cadre légal autour des données à caractère personnel :
                RGPD, droits des personnes, obligations des entreprises, DPO et rôle de la CNIL.
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Protection des données</span>
        </div>

        <div class="page-intro">
            <p>
                Cette compétence porte sur la maîtrise du cadre juridique et organisationnel
                lié à la protection des données personnelles, en particulier le RGPD.
                <em>Les descriptions détaillées seront ajoutées prochainement.</em>
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Notions du Socle 1 à maîtriser</span>
            <ul>
                <li>Donnée à caractère personnel</li>
                <li>Donnée sensible</li>
                <li>Traitement de données</li>
                <li>Collecte, stockage, diffusion, conservation</li>
                <li>Recensement / cartographie des traitements</li>
                <li>Risques liés aux données personnelles</li>
                <li>Rôle de la CNIL</li>
                <li>Réglementation RGPD</li>
                <li>Information des personnes</li>
                <li>Minimisation des données</li>
                <li>Durée de conservation</li>
                <li>Droits des personnes</li>
                <li>Protection de la confidentialité et de l'intégrité</li>
                <li>Sensibilisation des utilisateurs</li>
            </ul>
        </div>

        <!-- Section A -->
        <div class="sh"><h2>Le RGPD — Cadre général</h2><div class="sh-line"></div><span class="sh-cnt">Règlement UE 2016/679</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Présentation du RGPD et historique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>Règlement Général sur la Protection des Données</strong> (RGPD — UE 2016/679) est entré en application le <strong>25 mai 2018</strong>. Il remplace la directive 95/46/CE et harmonise la protection des données personnelles dans toute l'Union européenne.</p>
                    <p>Il s'applique à toute organisation (publique ou privée) traitant des données de résidents européens, qu'elle soit établie dans l'UE ou non (principe d'extraterritorialité).</p>
                    <p>En France, la <strong>loi Informatique et Libertés</strong> (1978, révisée en 2018) complète le RGPD, et la CNIL en est l'autorité de contrôle nationale.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Définition d'une donnée personnelle</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Une <strong>donnée à caractère personnel</strong> est toute information permettant d'identifier, directement ou indirectement, une personne physique en vie.</p>
                    <ul>
                        <li><strong>Identification directe</strong> : nom, prénom, photo, empreinte.</li>
                        <li><strong>Identification indirecte</strong> : adresse IP, numéro client, identifiant, plaque d'immatriculation, cookie…</li>
                    </ul>
                    <p>Les données relatives à des personnes morales (entreprises) ou à des personnes décédées ne sont pas couvertes par le RGPD.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Données sensibles : catégories particulières</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'article 9 du RGPD définit les <strong>données sensibles</strong> comme des données révélant :</p>
                    <ul>
                        <li>L'origine raciale ou ethnique</li>
                        <li>Les opinions politiques ou convictions religieuses / philosophiques</li>
                        <li>Les données génétiques ou biométriques à des fins d'identification</li>
                        <li>Les données de santé, la vie ou l'orientation sexuelle</li>
                        <li>L'appartenance syndicale</li>
                    </ul>
                    <p>Leur traitement est en principe <strong>interdit</strong>, sauf exceptions prévues (consentement explicite, intérêt public, etc.).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Principes fondamentaux du RGPD</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'article 5 du RGPD pose 7 principes que tout traitement doit respecter :</p>
                    <ul>
                        <li><strong>Licité, loyauté, transparence</strong> : base légale obligatoire, information des personnes.</li>
                        <li><strong>Limitation des finalités</strong> : données collectées pour un but précis et légitime.</li>
                        <li><strong>Minimisation</strong> : collecter uniquement les données strictement nécessaires.</li>
                        <li><strong>Exactitude</strong> : données à jour et correctes.</li>
                        <li><strong>Limitation de conservation</strong> : durée déterminée à l'avance.</li>
                        <li><strong>Intégrité et confidentialité</strong> : sécurisation des données contre accès non autorisés.</li>
                        <li><strong>Responsabilité (accountability)</strong> : l'organisation doit pouvoir prouver sa conformité.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- Section B -->
        <div class="sh"><h2>Droits des personnes concernées</h2><div class="sh-line"></div><span class="sh-cnt">Articles 15 à 22</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Droit d'accès et de rectification</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Droit d'accès (art. 15)</strong> : toute personne peut obtenir confirmation que ses données sont traitées, et en réclamer une copie gratuite ainsi que des informations sur la finalité, les destinataires et la durée de conservation.</p>
                    <p><strong>Droit de rectification (art. 16)</strong> : faire corriger des données inexactes ou incomplètes. Le responsable de traitement doit répondre dans un délai d'<strong>un mois</strong>.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Droit à l'effacement (droit à l'oubli)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Droit à l'effacement (art. 17)</strong> : obtenir la suppression de ses données lorsque :</p>
                    <ul>
                        <li>les données ne sont plus nécessaires à la finalité initiale,</li>
                        <li>le consentement est retiré,</li>
                        <li>la personne s'est opposée au traitement,</li>
                        <li>ou le traitement est illicite.</li>
                    </ul>
                    <p>Ce droit n'est pas absolu : il cède face à des obligations légales ou à l'intérêt public.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Droit à la portabilité des données</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Droit à la portabilité (art. 20)</strong> : récupérer ses données dans un <strong>format structuré, couramment utilisé et lisible par machine</strong> (CSV, JSON…), afin de les transférer librement à un autre service.</p>
                    <p>Ne s'applique qu'aux traitements fondés sur le <strong>consentement ou un contrat</strong>, et réalisés de façon automatisée.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Droit d'opposition et de limitation</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Droit d'opposition (art. 21)</strong> : s'opposer à tout moment au traitement de ses données dans le cadre d'intérêts légitimes ou à des fins de prospection commerciale.</p>
                    <p><strong>Droit à la limitation (art. 18)</strong> : demander la suspension temporaire du traitement, par exemple pendant la vérification de l'exactitude des données contestées.</p>
                    <p>Des délais de réponse stricts s'appliquent : <strong>1 mois</strong>, extensible à 3 mois pour les demandes complexes.</p>
                </div></div>
            </div>

        </div>

        <!-- Section C -->
        <div class="sh"><h2>Obligations des entreprises</h2><div class="sh-line"></div><span class="sh-cnt">Responsabilités organisationnelles</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Responsable de traitement vs sous-traitant</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>responsable de traitement (RT)</strong> est l'entité qui détermine les <em>finalités</em> et les <em>moyens</em> du traitement. C'est lui qui porte la responsabilité principale vis-à-vis du RGPD et de la CNIL.</p>
                    <p>Le <strong>sous-traitant (ST)</strong> traite les données pour le compte du RT (hébergeur, prestataire SaaS, agence web…). Un <strong>contrat encadreur (DPA — art. 28)</strong> est obligatoire entre les deux parties.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Registre des activités de traitement</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'article 30 du RGPD impose de tenir un <strong>registre des activités de traitement</strong> : véritable cartographie de tous les traitements réalisés par l'organisation.</p>
                    <p>Pour chaque traitement, il doit mentionner : finalité, catégories de données et de personnes concernées, destinataires, <strong>durée de conservation</strong>, mesures de sécurité.</p>
                    <p>C'est l'outil central de l'<strong>accountability</strong> : il est remis à la CNIL sur demande lors d'un contrôle.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Privacy by design &amp; by default</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>Privacy by design (art. 25)</strong> : intégrer la protection des données dès la <em>conception</em> d'un système ou d'un produit, et non a posteriori. C'est un principe fondamental du guide CNIL pour les équipes de développement.</p>
                    <p><strong>Privacy by default</strong> : par défaut, seules les données strictement nécessaires à la finalité sont collectées et traitées — aucune donnée superflue, aucun consentement implicite.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Notification des violations de données (72h)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>En cas de <strong>violation de données</strong> susceptible d'engendrer un risque pour les droits des personnes, le responsable de traitement doit :</p>
                    <ul>
                        <li>Notifier la <strong>CNIL dans les 72 heures</strong> (art. 33) suivant la découverte de l'incident.</li>
                        <li>Informer directement les personnes concernées si le risque est élevé (art. 34).</li>
                    </ul>
                    <p>Exemples : fuite de base de données, accès non autorisé, perte d'un support contenant des données personnelles.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Analyse d'impact (AIPD / PIA)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>Analyse d'Impact relative à la Protection des Données (AIPD ou PIA)</strong> est obligatoire (art. 35) pour tout traitement susceptible d'engendrer un risque élevé (profilage, données sensibles à grande échelle, surveillance systématique…).</p>
                    <p>Elle comprend : une description du traitement, une évaluation de la <strong>nécessité et proportionnalité</strong>, une analyse des risques, et les mesures de sécurité retenues. La CNIL publie une liste des cas où l'AIPD est obligatoire.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Transferts de données hors UE</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les transferts de données personnelles hors UE/EEE (art. 44–49) ne sont autorisés que si :</p>
                    <ul>
                        <li>la Commission européenne a reconnu le pays tiers comme offrant une <strong>protection adéquate</strong> (ex : Japon, Royaume-Uni, Canada partiellement),</li>
                        <li>ou si des <strong>clauses contractuelles types (CCT)</strong> validées par la Commission sont signées,</li>
                        <li>ou via des <strong>règles d'entreprise contraignantes (BCR)</strong> au sein d'un groupe.</li>
                    </ul>
                </div></div>
            </div>

        </div>

        <!-- Section D -->
        <div class="sh"><h2>DPO &amp; CNIL</h2><div class="sh-line"></div><span class="sh-cnt">Acteurs institutionnels</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Le Délégué à la Protection des Données (DPO)</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>DPO (Data Protection Officer)</strong> est le garant interne de la conformité RGPD (art. 37–39). Sa désignation est <strong>obligatoire</strong> pour les autorités publiques et pour les organismes qui traitent à grande échelle des données sensibles ou effectuent un suivi systématique de personnes.</p>
                    <p>Missions : informer, conseiller, contrôler la conformité, coopérer avec la CNIL, sensibiliser les collaborateurs. Le DPO est <strong>indépendant</strong> et protégé contre toute sanction pour l'exercice de sa mission.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>La CNIL : rôle, pouvoirs et sanctions</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>Commission Nationale de l'Informatique et des Libertés (CNIL)</strong> est l'autorité de contrôle française en matière de protection des données (art. 51 RGPD).</p>
                    <p>Missions : informer et conseiller, contrôler la conformité, instruire les plaintes, sanctionner les manquements.</p>
                    <p>Sanctions possibles :</p>
                    <ul>
                        <li>Jusqu'à <strong>10 M€ ou 2 % du CA mondial</strong> pour infractions mineures.</li>
                        <li>Jusqu'à <strong>20 M€ ou 4 % du CA mondial</strong> pour infractions graves (ex : violation des droits des personnes).</li>
                    </ul>
                    <p>Exemples réels : Amazon 746 M€ (2021), Meta 1,2 Md€ (2023).</p>
                </div></div>
            </div>

        </div>

    </div>
</main>

<?php require '../includes/footer.php'; ?>
