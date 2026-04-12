<?php
$page_title   = 'Identité numérique de l\'organisation';
$base_path    = '../';
$current_page = 'identite';
$accent_color = '#74b9ff';
$accent_rgb   = '116,185,255';

require '../includes/header.php';
require '../includes/nav.php';
?>

<main class="main">

    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">◈ Compétence 2 · Bloc 3</div>
            <h1>Identité numérique de <em>l'organisation</em></h1>
            <p class="sub">
                Caractériser et protéger la présence digitale de l'organisation :
                réputation, menaces ciblées (hameçonnage, défacement, usurpation)
                et protections techniques (SPF, DKIM, DMARC, DNSSEC, DANE).
            </p>
        </div>
    </section>

    <div class="content">

        <div class="bc">
            <a href="../index.php">Accueil</a>
            <span class="sep">/</span>
            <span class="cur">Identité numérique</span>
        </div>

        <div class="page-intro">
            <p>
                La compétence B3.2 demande de savoir <strong>caractériser l'identité numérique</strong>
                d'une organisation, recenser ses sources de présence digitale, identifier les menaces
                qui y sont liées et mettre en œuvre les mesures de protection appropriées.
            </p>
        </div>

        <div class="kp-box">
            <span class="kp-title">Notions du Socle 2 à maîtriser</span>
            <ul>
                <li>Identité numérique d'une organisation</li>
                <li>Identités multiples de l'organisation</li>
                <li>Présence digitale</li>
                <li>Sources : mails, messageries, site web, apps, réseaux sociaux</li>
                <li>Traces numériques</li>
                <li>Réputation numérique</li>
                <li>Hameçonnage</li>
                <li>Ingénierie sociale</li>
                <li>Défacement</li>
                <li>Fausses applications</li>
                <li>Usurpation d'identité numérique</li>
                <li>Authentification forte</li>
                <li>Protection des comptes mail et réseaux sociaux</li>
                <li>SPF — DKIM — DMARC</li>
                <li>DNSSEC — DANE</li>
                <li>Preuve électronique</li>
                <li>Protection juridique de l'identité numérique</li>
            </ul>
        </div>

        <!-- Section A -->
        <div class="sh"><h2>Identité numérique &amp; présence digitale</h2><div class="sh-line"></div><span class="sh-cnt">Ce que l'organisation expose</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Qu'est-ce que l'identité numérique d'une organisation ?</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>identité numérique d'une organisation</strong> est l'ensemble des informations et des représentations qui lui sont associées en ligne : nom de domaine, adresses e-mail, comptes sur les réseaux sociaux, site web, certificats, signatures…</p>
                    <p>Une organisation dispose souvent d'<strong>identités multiples</strong> : identité officielle (site institutionnel, domaine principal), identités fonctionnelles (comptes services, adresses postmaster, no-reply…) et identités projets ou filiales.</p>
                    <p>Chaque identité constitue une <strong>surface d'exposition</strong> que des attaquants peuvent cibler ou usurper.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Sources de présence digitale</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>présence digitale</strong> d'une organisation se construit à travers toutes ses présences en ligne. Les principales sources à recenser sont :</p>
                    <ul>
                        <li><strong>Messagerie électronique</strong> : domaines d'envoi, adresses exposées publiquement.</li>
                        <li><strong>Messageries instantanées</strong> : comptes Teams, Slack, WhatsApp Business…</li>
                        <li><strong>Site web</strong> : domaine(s), sous-domaines, pages indexées.</li>
                        <li><strong>Applications web &amp; mobiles</strong> : apps publiées sous le nom de l'organisation.</li>
                        <li><strong>Réseaux sociaux</strong> : profils officiels LinkedIn, X, Facebook, Instagram…</li>
                    </ul>
                    <p>Ce recensement est la première étape d'une démarche de protection de l'identité numérique.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Traces numériques et réputation numérique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les <strong>traces numériques</strong> sont tous les enregistrements laissés par l'organisation lors de ses activités en ligne : en-têtes de serveurs, entrées DNS publiques, certificats TLS, métadonnées de documents, historiques WHOIS, archives web (Wayback Machine)…</p>
                    <p>La <strong>réputation numérique</strong> désigne la perception qu'ont les tiers de l'organisation sur Internet : avis, médias, classements de domaine dans les blacklists anti-spam, score de confiance des serveurs de messagerie…</p>
                    <p>Une réputation dégradée (domaine blacklisté, faux profil viral) peut avoir des conséquences commerciales et opérationnelles directes.</p>
                </div></div>
            </div>

        </div>

        <!-- Section B -->
        <div class="sh"><h2>Menaces sur l'identité numérique</h2><div class="sh-line"></div><span class="sh-cnt">Attaques ciblées</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Hameçonnage et ingénierie sociale</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>hameçonnage (phishing)</strong> consiste à envoyer des messages frauduleux se faisant passer pour une organisation de confiance (banque, administration, entreprise) afin de dérober des identifiants ou des données.</p>
                    <p>Dans le cas du <strong>spear-phishing</strong>, l'attaque est ciblée sur une organisation ou une personne précise, en réutilisant des informations issues de la présence digitale (nom, logo, signature…).</p>
                    <p>L'<strong>ingénierie sociale</strong> est la manipulation psychologique d'individus pour les pousser à divulguer des informations ou effectuer des actions à l'insu de leur organisation (faux prestataire, appel téléphonique frauduleux…).</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Défacement de site web</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Le <strong>défacement (defacement)</strong> est la modification non autorisée du contenu d'un site web, généralement pour y afficher un message politique ou revendicatif, ou simplement pour nuire à l'image de l'organisation.</p>
                    <p>Il résulte souvent de l'exploitation d'une vulnérabilité du CMS, d'un mot de passe faible ou d'un accès FTP/SSH non sécurisé.</p>
                    <p>Impact : atteinte directe à la <strong>réputation numérique</strong>, perte de confiance des visiteurs, pénalités SEO.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Fausses applications et usurpation d'identité numérique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Les <strong>fausses applications</strong> sont des applications mobiles ou web imitant celles d'une organisation légitime, publiées sur des stores tiers ou via des liens malveillants, dans le but de piéger les utilisateurs.</p>
                    <p>L'<strong>usurpation d'identité numérique</strong> recouvre toute action visant à se faire passer pour l'organisation : faux domaine (<em>typosquatting</em> : arnazon.fr, g00gle.com), faux profil sur les réseaux sociaux, faux compte e-mail.</p>
                    <p>Ces attaques exploitent la confiance des utilisateurs envers la marque et peuvent entraîner des violations de données ou des fraudes financières.</p>
                </div></div>
            </div>

        </div>

        <!-- Section C -->
        <div class="sh"><h2>Protections techniques de l'identité numérique</h2><div class="sh-line"></div><span class="sh-cnt">Authentification &amp; sécurisation du domaine</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Authentification forte — protection des comptes</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>L'<strong>authentification forte (MFA)</strong> combine au moins deux facteurs indépendants pour vérifier l'identité : quelque chose que l'on sait (mot de passe), que l'on possède (OTP, clé physique FIDO2) ou que l'on est (biométrie).</p>
                    <p>Pour les <strong>comptes de messagerie</strong> d'une organisation, la MFA est indispensable : une prise de contrôle d'un compte admin permet d'envoyer des e-mails légitimes en apparence, de modifier les enregistrements DNS, ou de lancer des campagnes de phishing crédibles.</p>
                    <p>Pour les <strong>réseaux sociaux</strong>, activer la MFA sur les comptes officiels empêche le détournement du profil et préserve la réputation numérique.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>SPF, DKIM et DMARC</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Ces trois mécanismes DNS protègent le domaine de messagerie contre l'usurpation :</p>
                    <ul>
                        <li><strong>SPF (Sender Policy Framework)</strong> : enregistrement DNS qui liste les serveurs autorisés à envoyer des e-mails au nom du domaine. Un serveur non listé est suspect.</li>
                        <li><strong>DKIM (DomainKeys Identified Mail)</strong> : appose une <strong>signature cryptographique</strong> sur chaque e-mail sortant. Le destinataire vérifie la signature via la clé publique publiée en DNS.</li>
                        <li><strong>DMARC (Domain-based Message Authentication, Reporting &amp; Conformance)</strong> : définit la politique à appliquer si SPF et/ou DKIM échouent (<code>none</code>, <code>quarantine</code>, <code>reject</code>) et génère des rapports d'incidents.</li>
                    </ul>
                    <p>L'alignement SPF + DKIM + DMARC constitue la protection minimale exigée pour tout domaine qui envoie des e-mails professionnels.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>DNSSEC et DANE</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p><strong>DNSSEC (DNS Security Extensions)</strong> ajoute des signatures cryptographiques aux enregistrements DNS afin de garantir leur <strong>authenticité et intégrité</strong>. Il protège contre les attaques de type <em>DNS poisoning</em> (empoisonnement du cache DNS) qui pourraient rediriger les utilisateurs vers de faux serveurs.</p>
                    <p><strong>DANE (DNS-based Authentication of Named Entities)</strong> s'appuie sur DNSSEC pour publier des informations de certificat TLS directement dans le DNS (enregistrement <code>TLSA</code>). Cela permet de vérifier l'authenticité du certificat d'un serveur sans dépendre des autorités de certification publiques — renforçant ainsi la protection contre les certificats frauduleux.</p>
                </div></div>
            </div>

        </div>

        <!-- Section D -->
        <div class="sh"><h2>Preuve électronique &amp; protection juridique</h2><div class="sh-line"></div><span class="sh-cnt">Aspects légaux</span></div>
        <div class="grid-topics">

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Preuve électronique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>La <strong>preuve électronique</strong> (ou preuve numérique) est tout élément sous forme électronique pouvant être produit en justice pour établir une usurpation d'identité numérique ou une atteinte à celle-ci.</p>
                    <p>Exemples : captures d'écran horodatées, journaux de serveur (logs), en-têtes d'e-mails, enregistrements DNS archivés, constats d'huissier sur écran.</p>
                    <p>Pour être recevable, une preuve électronique doit être <strong>intègre</strong> (non altérée), <strong>authentique</strong> (origine vérifiable) et <strong>horodatée</strong>. Le recours à un huissier ou à un tiers de confiance renforce sa valeur probante.</p>
                </div></div>
            </div>

            <div class="tc">
                <div class="tc-head"><span class="tc-dot"></span>
                    <h3>Protection juridique de l'identité numérique</h3>
                    <span class="tc-chev">▼</span>
                </div>
                <div class="tc-body"><div class="tc-body-inner">
                    <p>Plusieurs dispositifs juridiques protègent l'identité numérique d'une organisation :</p>
                    <ul>
                        <li><strong>Droit des marques</strong> : enregistrement auprès de l'INPI protège le nom, le logo et les noms de domaine associés.</li>
                        <li><strong>Usurpation d'identité numérique</strong> : sanctionnée par le Code pénal (art. 226-4-1) — jusqu'à 1 an d'emprisonnement et 15 000 € d'amende.</li>
                        <li><strong>Procédures UDRP / SYRELI</strong> : permettent de récupérer un nom de domaine enregistré de mauvaise foi (cybersquatting).</li>
                        <li><strong>Signalement</strong> : à la CNIL en cas de violation de données, à Pharos pour contenus illicites, à l'ANSSI pour incidents critiques.</li>
                    </ul>
                </div></div>
            </div>

        </div>

    </div>
</main>

<?php require '../includes/footer.php'; ?>
