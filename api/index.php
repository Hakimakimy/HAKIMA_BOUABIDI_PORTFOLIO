<?php
header('Content-Type: text/html; charset=utf-8');

$studentName = "Hakima Bouabidi";
$academicYear = "2025/2026";
$specialization = "Développement Digital - Option Web / Full-Stack";

$modules = [
    [
        'id' => 'M201',
        'code' => 'M201',
        'title' => "Préparation d'un projet web",
        'category' => 'management',
        'desc' => "Analyse des besoins, élaboration du cahier des charges, modélisation UML, wireframing et charte graphique.",
        'techs' => ['UML', 'Figma', 'Agile', 'Cahier des charges'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M201+Wireframe+Spec']
    ],
    [
        'id' => 'M202',
        'code' => 'M202',
        'title' => "Approche agile",
        'category' => 'management',
        'desc' => "Gestion de projet selon la méthodologie Scrum, planification des Sprints, backlog utilisateur et daily standups.",
        'techs' => ['Scrum', 'Trello', 'Jira', 'Kanban'],
        'defaultImgs' => [
            'https://placehold.co/600x400/4c1d95/f3e8ff?text=M202+Scrum+Board',
            'https://placehold.co/600x400/6d28d9/f3e8ff?text=Sprint+Planning',
            'https://placehold.co/600x400/5b21b6/f3e8ff?text=Backlog+User'
        ]
    ],
    [
        'id' => 'M203',
        'code' => 'M203',
        'title' => "Intégration web",
        'category' => 'frontend',
        'desc' => "Création d'interfaces web modernes, responsive design avec HTML5, CSS3, JavaScript ES6+ et frameworks CSS.",
        'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M203+Integration+CSS']
    ],
    [
        'id' => 'M204',
        'code' => 'M204',
        'title' => "Développement web dynamique",
        'category' => 'backend',
        'desc' => "Conception d'applications web serveur sécurisées avec PHP, Laravel, Node.js, Express, POO, architecture MVC et MySQL.",
        'techs' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PDO'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M204+Laravel+Backend']
    ],
    [
        'id' => 'M205',
        'code' => 'M205',
        'title' => "Développement front-end",
        'category' => 'frontend',
        'desc' => "Création de Single Page Applications (SPA) dynamiques avec React.js / Vue.js, gestion d'état (Redux/Context API) et API REST.",
        'techs' => ['React.js', 'Redux', 'REST API', 'Tailwind'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M205+React+App']
    ],
    [
        'id' => 'M206',
        'code' => 'M206',
        'title' => "Création d'une application mobile",
        'category' => 'mobile',
        'desc' => "Développement mobile multiplateforme avec React Native / Flutter, intégration des composants natifs et consommation d'APIs.",
        'techs' => ['React Native', 'Flutter', 'Mobile UI', 'Expo'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M206+Mobile+Screen']
    ],
    [
        'id' => 'M207',
        'code' => 'M207',
        'title' => "Sécurité d'un site web",
        'category' => 'management',
        'desc' => "Mise en œuvre des bonnes pratiques de cybersécurité, prévention OWASP (XSS, SQLi, CSRF), chiffrement et authentification JWT.",
        'techs' => ['OWASP', 'JWT', 'HTTPS', 'Encryption'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M207+Security+Audit']
    ],
    [
        'id' => 'M208',
        'code' => 'M208',
        'title' => "Cloud & DevOps",
        'category' => 'mobile',
        'desc' => "Conteneurisation d'applications avec Docker, hébergement cloud, intégration/déploiement continu (CI/CD) et administration serveur.",
        'techs' => ['Docker', 'CI/CD', 'Git', 'Vercel/AWS'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M208+Docker+DevOps']
    ],
    [
        'id' => 'M209',
        'code' => 'M209',
        'title' => "Projet de fin d'études (PFE)",
        'category' => 'backend',
        'desc' => "Projet de synthèse complet intégrant l'ensemble des compétences acquises durant la formation en Développement Digital.",
        'techs' => ['Full-Stack', 'Laravel/React', 'PFE', 'UML'],
        'defaultImgs' => ['https://placehold.co/600x400/4c1d95/f3e8ff?text=M209+PFE+Dashboard']
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT ISTA Portfolio | <?php echo htmlspecialchars($studentName); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-body: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --primary: #6366f1; /* Indigo فخم جداً */
            --primary-hover: #4f46e5;
            --accent: #ec4899; /* وردي عصري */
            --border: #e2e8f0;
            --shadow: 0 10px 30px -5px rgba(99, 102, 241, 0.08);
            --font-sans: 'Plus Jakarta Sans', sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
        }

        body.dark-mode {
            --bg-body: #0b0f19;
            --bg-card: #131b2e;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --primary: #818cf8;
            --primary-hover: #6366f1;
            --accent: #f472b6;
            --border: rgba(255, 255, 255, 0.08);
            --shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-body);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        header {
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            padding: 0 5%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .logo {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--primary);
            font-size: 1.25rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span.badge {
            font-size: 0.65rem;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            padding: 4px 10px;
            border-radius: 20px;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        nav a, .dropdown-btn {
            text-decoration: none;
            color: var(--text-main);
            padding: 8px 16px;
            font-weight: 600;
            font-size: 0.9rem;
            background: transparent;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        nav a:hover, .dropdown-btn:hover {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.08);
        }

        .theme-btn {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 700;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
            transition: 0.2s;
        }

        .theme-btn:hover {
            transform: translateY(-2px);
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 55px;
            right: 0;
            background: var(--bg-card);
            min-width: 290px;
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: var(--shadow);
            z-index: 1001;
            padding: 8px 0;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu a {
            padding: 10px 18px;
            font-family: var(--font-mono);
            font-size: 0.78rem;
            border-bottom: 1px solid var(--border);
            justify-content: space-between;
        }

        .dropdown-menu a:hover {
            background: rgba(99, 102, 241, 0.08);
            color: var(--primary);
        }

        .hero {
            padding: 80px 20px 60px;
            text-align: center;
            background: radial-gradient(circle at center, rgba(99, 102, 241, 0.06) 0%, transparent 70%);
            border-bottom: 1px solid var(--border);
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            padding: 6px 18px;
            border-radius: 30px;
            font-family: var(--font-mono);
            font-size: 0.8rem;
            margin-bottom: 20px;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            letter-spacing: -1px;
        }

        .hero h1 span {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-family: var(--font-mono);
            color: var(--text-muted);
            font-size: 1rem;
            max-width: 650px;
            margin: 0 auto 30px;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 12px 28px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
            transition: 0.2s;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: var(--bg-card);
            color: var(--text-main);
            border: 1px solid var(--border);
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.2s;
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .filter-section {
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            padding: 15px 5%;
            position: sticky;
            top: 80px;
            z-index: 900;
        }

        .filter-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-tabs {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
        }

        .filter-tab {
            background: var(--bg-body);
            border: 1px solid var(--border);
            color: var(--text-muted);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            font-family: var(--font-mono);
            white-space: nowrap;
            transition: 0.2s;
        }

        .filter-tab:hover, .filter-tab.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .modules-wrapper {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 5%;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2.2rem;
            margin: 0 0 8px;
        }

        .section-header p {
            color: var(--primary);
            font-family: var(--font-mono);
            font-size: 0.9rem;
            margin: 0;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        .module-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            transition: transform 0.25s ease, border-color 0.25s ease;
        }

        .module-card:hover {
            transform: translateY(-6px);
            border-color: var(--primary);
        }

        .card-top {
            padding: 24px;
            border-bottom: 1px solid var(--border);
        }

        .mod-code {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            padding: 4px 10px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 10px;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        .mod-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .mod-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin: 0;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 15px;
        }

        .tech-pill {
            font-size: 0.7rem;
            background: var(--bg-body);
            color: var(--text-main);
            padding: 3px 10px;
            border-radius: 6px;
            font-family: var(--font-mono);
            border: 1px solid var(--border);
        }

        .upload-section {
            padding: 20px 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .upload-title {
            font-size: 0.8rem;
            font-family: var(--font-mono);
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropzone {
            border: 2px dashed var(--border);
            border-radius: 12px;
            padding: 18px;
            text-align: center;
            background: var(--bg-body);
            cursor: pointer;
            transition: 0.2s;
            margin-bottom: 12px;
        }

        .dropzone:hover {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.04);
        }

        .dropzone i {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 4px;
        }

        .dropzone p {
            margin: 0;
            font-size: 0.78rem;
            color: var(--text-muted);
            font-family: var(--font-mono);
        }

        .dropzone span {
            color: var(--primary);
            font-weight: 600;
        }

        .hidden-file {
            display: none;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(65px, 1fr));
            gap: 8px;
        }

        .gallery-box {
            position: relative;
            aspect-ratio: 1;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--border);
            cursor: pointer;
        }

        .gallery-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.2s;
        }

        .gallery-box:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.75);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            opacity: 0;
            transition: 0.2s;
        }

        .gallery-box:hover .gallery-overlay {
            opacity: 1;
        }

        .action-icon {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 0.65rem;
        }

        .action-icon:hover {
            background: var(--primary);
        }

        .action-icon.del:hover {
            background: #ef4444;
        }

        .card-footer {
            padding: 15px 24px;
            border-top: 1px solid var(--border);
            background: var(--bg-body);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-detail {
            color: var(--primary);
            background: var(--bg-card);
            border: 1px solid var(--border);
            padding: 6px 14px;
            border-radius: 6px;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: 0.2s;
        }

        .btn-detail:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 3000;
            background: rgba(11, 15, 25, 0.9);
            backdrop-filter: blur(8px);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 85vh;
            border-radius: 12px;
            border: 2px solid var(--primary);
        }

        .lightbox-close {
            position: absolute;
            top: 25px;
            right: 35px;
            color: white;
            font-size: 2.5rem;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            border-top: 1px solid var(--border);
            background: var(--bg-card);
            font-family: var(--font-mono);
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        footer span {
            color: var(--primary);
        }
    </style>
</head>
<body>

<header>
    <a href="index.php" class="logo">
        <i class="fa-solid fa-code-branch"></i>
        <?php echo htmlspecialchars($studentName); ?>.DEV
        <span class="badge">OFPPT 2026</span>
    </a>
    <nav>
        <a href="#modules"><i class="fa-solid fa-cubes"></i> Modules</a>
        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleDropdown(event)">
                <i class="fa-solid fa-folder-tree"></i> Repositories ▼
            </button>
            <div id="repoDropdown" class="dropdown-menu">
                <?php foreach ($modules as $mod): ?>
                    <a href="https://github.com/Hakimakimy/Portfolio__DEV204HB" target="_blank">
                        <span><?php echo $mod['code']; ?> - <?php echo htmlspecialchars($mod['title']); ?></span>
                        <i class="fa-brands fa-github"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="theme-btn" onclick="toggleTheme()">
            <i class="fa-solid fa-circle-half-stroke"></i>
            <span id="themeText">DARK MODE</span>
        </button>
    </nav>
</header>

<section class="hero">
    <div class="hero-tag">
        <i class="fa-solid fa-graduation-cap"></i> OFPPT ISTA <?php echo $academicYear; ?> | <?php echo htmlspecialchars($specialization); ?>
    </div>
    <h1>Digital Portfolio & <span>Excellence</span></h1>
    <p>&gt; Plateforme professionnelle pour le suivi des projets, TP et captures d'exercices de développement.</p>
    <div class="hero-btns">
        <a href="#modules" class="btn-primary"><i class="fa-solid fa-rocket"></i> Voir les Modules</a>
        <a href="https://github.com/Hakimakimy/Portfolio__DEV204HB" target="_blank" class="btn-outline"><i class="fa-brands fa-github"></i> GitHub</a>
    </div>
</section>

<div class="filter-section">
    <div class="filter-container">
        <div class="filter-tabs">
            <button class="filter-tab active" onclick="filterMods('all', event)">Tous (<?php echo count($modules); ?>)</button>
            <button class="filter-tab" onclick="filterMods('frontend', event)">Front-End</button>
            <button class="filter-tab" onclick="filterMods('backend', event)">Backend & DB</button>
            <button class="filter-tab" onclick="filterMods('mobile', event)">Mobile & Cloud</button>
            <button class="filter-tab" onclick="filterMods('management', event)">Management & Sécurité</button>
        </div>
        <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted);">
            <i class="fa-solid fa-images" style="color:var(--primary);"></i> Fichiers enregistrés : <span id="totalCount" style="font-weight:bold; color:var(--primary);">0</span>
        </div>
    </div>
</div>

<div class="modules-wrapper" id="modules">
    <div class="section-header">
        <h2>Modules Pédagogiques</h2>
        <p>// Importez vos captures d'écran et documentez vos apprentissages</p>
    </div>

    <div class="modules-grid">
        <?php foreach ($modules as $mod): ?>
            <div class="module-card" data-cat="<?php echo $mod['category']; ?>">
                <div class="card-top">
                    <span class="mod-code"><i class="fa-solid fa-bookmark"></i> <?php echo $mod['code']; ?></span>
                    <h3 class="mod-title"><?php echo htmlspecialchars($mod['title']); ?></h3>
                    <p class="mod-desc"><?php echo htmlspecialchars($mod['desc']); ?></p>
                    <div class="tech-tags">
                        <?php foreach ($mod['techs'] as $tech): ?>
                            <span class="tech-pill"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="upload-section" data-mod-id="<?php echo $mod['id']; ?>">
                    <div class="upload-title">
                        <span><i class="fa-solid fa-camera"></i> Captures d'exercices</span>
                        <span class="mod-file-count" style="font-size: 0.75rem;">0 fichier</span>
                    </div>
                    <div class="dropzone" onclick="triggerFile('file-<?php echo $mod['id']; ?>')">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <p>Glissez l'image ici ou <span>Parcourir</span></p>
                    </div>
                    <input type="file" id="file-<?php echo $mod['id']; ?>" class="hidden-file" accept="image/*" multiple onchange="handleImages('<?php echo $mod['id']; ?>', this.files)">
                    
                    <div class="gallery-grid" id="gallery-<?php echo $mod['id']; ?>"></div>
                </div>

                <div class="card-footer">
                    <a href="#modules" class="btn-detail" onclick="alert('Module : <?php echo $mod['code']; ?> - Prêt')">
                        <i class="fa-solid fa-circle-check"></i> Actif
                    </a>
                    <span style="font-size:0.75rem; font-family:var(--font-mono); color:var(--text-muted);">OFPPT 2026</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="lightbox" id="lightboxModal" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <img id="lightboxImg" alt="Aperçu">
</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> <span><?php echo htmlspecialchars($studentName); ?></span> | Portfolio DEV204HB - OFPPT ISTA</p>
</footer>

<script>
    const defaultData = {
        <?php foreach ($modules as $mod): ?>
        "<?php echo $mod['id']; ?>": <?php echo json_encode($mod['defaultImgs']); ?>,
        <?php endforeach; ?>
    };

    let portfolioData = JSON.parse(localStorage.getItem('portfolio_data_v4')) || defaultData;

    document.addEventListener("DOMContentLoaded", () => {
        renderGalleries();
    });

    function toggleDropdown(e) {
        e.stopPropagation();
        document.getElementById("repoDropdown").classList.toggle("show");
    }

    window.onclick = function(e) {
        if (!e.target.closest('.dropdown')) {
            document.getElementById("repoDropdown").classList.remove("show");
        }
    }

    function toggleTheme() {
        document.body.classList.toggle('dark-mode');
        const txt = document.getElementById('themeText');
        if(document.body.classList.contains('dark-mode')) {
            txt.textContent = "LIGHT MODE";
            localStorage.setItem('portfolio_theme', 'dark');
        } else {
            txt.textContent = "DARK MODE";
            localStorage.setItem('portfolio_theme', 'light');
        }
    }

    if(localStorage.getItem('portfolio_theme') === 'dark') {
        document.body.classList.add('dark-mode');
        document.getElementById('themeText').textContent = "LIGHT MODE";
    }

    function filterMods(cat, e) {
        document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
        e.target.classList.add('active');

        document.querySelectorAll('.module-card').forEach(card => {
            if(cat === 'all' || card.getAttribute('data-cat') === cat) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        });
    }

    function triggerFile(id) {
        document.getElementById(id).click();
    }

    function handleImages(modId, files) {
        if(!portfolioData[modId]) portfolioData[modId] = [];

        Array.from(files).forEach(file => {
            if(file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    portfolioData[modId].push(e.target.result);
                    saveAndRender();
                }
                reader.readAsDataURL(file);
            }
        });
    }

    function deleteImg(modId, index, e) {
        e.stopPropagation();
        if(portfolioData[modId]) {
            portfolioData[modId].splice(index, 1);
            saveAndRender();
        }
    }

    function saveAndRender() {
        localStorage.setItem('portfolio_data_v4', JSON.stringify(portfolioData));
        renderGalleries();
    }

    function renderGalleries() {
        let globalTotal = 0;
        for (const modId in portfolioData) {
            const imgs = portfolioData[modId];
            const gallery = document.getElementById(`gallery-${modId}`);
            const section = gallery ? gallery.closest('.upload-section') : null;
            const counter = section ? section.querySelector('.mod-file-count') : null;

            if(gallery) {
                if(imgs && imgs.length > 0) {
                    globalTotal += imgs.length;
                    if(counter) counter.textContent = `${imgs.length} fichier(s)`;
                    let html = '';
                    imgs.forEach((src, idx) => {
                        html += `
                            <div class="gallery-box" onclick="openLightbox('${src}')">
                                <img src="${src}" alt="Exercise">
                                <div class="gallery-overlay">
                                    <button class="action-icon" title="Voir"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-icon del" title="Supprimer" onclick="deleteImg('${modId}', ${idx}, event)"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        `;
                    });
                    gallery.innerHTML = html;
                } else {
                    if(counter) counter.textContent = `0 fichier`;
                    gallery.innerHTML = '';
                }
            }
        }
        document.getElementById('totalCount').textContent = globalTotal;
    }

    function openLightbox(src) {
        document.getElementById('lightboxImg').src = src;
        document.getElementById('lightboxModal').style.display = "flex";
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').style.display = "none";
    }
</script>

</body>
</html>