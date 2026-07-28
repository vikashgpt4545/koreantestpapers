<?php
// koreantestpapers.in Header Module
if (!isset($page_title)) {
    $page_title = "Download Korean Test Papers and Korean Exam Paper with Answer Keys";
}
if (!isset($page_desc)) {
    $page_desc = "Download free official Korean test papers and Korean exam paper with answer keys, audio transcripts, and reading solutions for Indian aspirants. Practice live EPS-TOPIK & TOPIK I/II CBT tests online.";
}
$canonical_url = "https://koreantestpapers.in" . ($_SERVER['REQUEST_URI'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="korean test papers, korean exam paper, EPS TOPIK test papers India, TOPIK I exam paper, TOPIK II question paper with answer key, Korean language practice test PDF">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    
    <!-- Site Icon / Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="/images/favicon.png">

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="KoreanTestPapers.in">
    <meta property="og:image" content="/images/logo.png">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- JSON-LD Structured Data Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "KoreanTestPapers.in",
      "url": "https://koreantestpapers.in/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://koreantestpapers.in/?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "description": "Download free Korean test papers and Korean exam paper with answer keys for EPS-TOPIK and TOPIK I & II."
    }
    </script>
</head>
<body>

    <!-- Top Notification Bar -->
    <div class="top-notification-bar">
        ⚡ Free 2025 EPS-TOPIK & TOPIK I & II Solved Question Papers with English Explanations for Indian Candidates!
    </div>

    <!-- Header Navigation -->
    <header class="header-main">
        <div class="container header-container">
            <!-- Image Logo -->
            <a href="/" class="brand-logo-img">
                <img src="/images/logo.png" alt="Korean Test Papers Logo" class="site-header-logo">
            </a>

            <!-- Mobile Only Header Actions -->
            <div class="mobile-header-actions">
                <a href="/#cbtTab" onclick="if(window.switchHeroTab){ switchHeroTab('cbtTab', document.querySelectorAll('.tab-btn')[2]); }" class="btn-header-cta-mobile">▶ Live Test</a>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Navigation">
                    <span class="hamburger-icon">☰</span>
                </button>
            </div>
            
            <!-- Navigation Menu -->
            <nav id="siteNav" class="site-nav">
                <ul class="nav-links">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/eps-topik-reading-korean-test-papers">EPS TOPIK Reading</a></li>
                    <li><a href="/topik-1-level-1-korean-test-papers">TOPIK I & II</a></li>
                    <li><a href="/korean-exam-paper-master-collection">Past Papers PDF</a></li>
                    <li><a href="/eps-topik-passing-marks-guide-korean-exam-paper">FAQ</a></li>
                    <li><a href="/pro-portal" style="background: #0f172a; color: #fbbf24; border: 1px solid #fbbf24; padding: 6px 12px; border-radius: 6px; font-weight: 700; font-size: 0.85rem;">🔑 Pro Login</a></li>
                    <li class="desktop-only-cta"><a href="/#cbtTab" onclick="if(window.switchHeroTab){ switchHeroTab('cbtTab', document.querySelectorAll('.tab-btn')[2]); }" class="btn-header-cta">▶ Live CBT Test</a></li>
                </ul>
            </nav>
        </div>
    </header>
