<?php
// koreantestpapers.in Header Module
if (!isset($page_title)) {
    $page_title = "Download Korean Test Papers and Korean Exam Paper with Answer Keys";
}
if (!isset($page_desc)) {
    $page_desc = "Download free official Korean test papers and Korean exam paper with answer keys, audio transcripts, and reading solutions. Practice live EPS-TOPIK & TOPIK I/II CBT tests online.";
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
    <meta name="keywords" content="korean test papers, korean exam paper, EPS TOPIK test papers, TOPIK I exam paper, TOPIK II question paper with answer key, Korean language practice test PDF">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    
    <!-- Open Graph Metadata -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="KoreanTestPapers.in">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

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

    <!-- Notification Bar -->
    <div class="top-notification-bar">
        ⚡ Free 2025 EPS-TOPIK & TOPIK I & II Solved Question Papers & Live Online CBT Mock Tests Available!
    </div>

    <!-- Header Navigation -->
    <header class="header-main">
        <div class="container header-container">
            <a href="index.php" class="brand-logo">
                🌐 KoreanTestPapers.in
                <span class="brand-badge">Official Hub</span>
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#eps-topik-section">EPS TOPIK</a></li>
                    <li><a href="#topik-levels-section">TOPIK I & II</a></li>
                    <li><a href="#download-table-section">Past Papers PDF</a></li>
                    <li><a href="#faq-section">FAQ</a></li>
                    <li><a href="#live-test-box" class="btn-header-cta">▶ Live CBT Test</a></li>
                </ul>
            </nav>
        </div>
    </header>
