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

    <!-- Open Graph & Social Metadata -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="KoreanTestPapers.in">
    <meta property="og:image" content="https://koreantestpapers.in/images/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="KoreanTestPapers.in Master Archive Hub">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="https://koreantestpapers.in/images/logo.png">

    <!-- CSS Stylesheet with Static Cache Versioning -->
    <link rel="stylesheet" href="/css/style.css?v=1.2">

    <!-- JSON-LD Structured Data Schemas (WebSite & BreadcrumbList) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "name": "KoreanTestPapers.in",
          "url": "https://koreantestpapers.in/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://koreantestpapers.in/?q={search_term_string}",
            "query-input": "required name=search_term_string"
          },
          "description": "Download free official Korean test papers and Korean exam paper with answer keys for EPS-TOPIK and TOPIK I & II."
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://koreantestpapers.in/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "<?php echo htmlspecialchars(str_replace(' | KoreanTestPapers.in', '', $page_title)); ?>",
              "item": "<?php echo htmlspecialchars($canonical_url); ?>"
            }
          ]
        }
      ]
    }
    </script>

    <!-- Dedicated FAQPage JSON-LD Schema for Google Rich Snippets & AI Search -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php if (!empty($page_faqs) && is_array($page_faqs)): ?>
          <?php 
          $faq_items = [];
          foreach ($page_faqs as $faq) {
              $faq_items[] = json_encode([
                  "@type" => "Question",
                  "name" => $faq['question'],
                  "acceptedAnswer" => [
                      "@type" => "Answer",
                      "text" => strip_tags($faq['answer'])
                  ]
              ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
          }
          echo implode(",\n", $faq_items);
          ?>
        <?php else: ?>
          {
            "@type": "Question",
            "name": "Where can I download official NIIED TOPIK and EPS-TOPIK past papers with answer keys?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You can download official 30th to 102nd TOPIK past papers, listening audio files, and EPS-TOPIK exam sets for free on KoreanTestPapers.in."
            }
          },
          {
            "@type": "Question",
            "name": "Are answer keys and listening transcripts included with the test paper downloads?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes! All test papers on KoreanTestPapers.in include official NIIED & HRD Korea answer sheets, reading solutions, and listening MP3 audio transcripts."
            }
          },
          {
            "@type": "Question",
            "name": "Is access to the Master PDF Archive completely free for candidates?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, candidates receive a 30-Day Free Pass ($80 Value) giving 100% free access to all question papers, listening MP3s, and CBT practice tests upon registering."
            }
          }
        <?php endif; ?>
      ]
    }
    </script>
    <script>
    window.userSession = {
        isLoggedIn: <?php echo is_logged_in() ? 'true' : 'false'; ?>,
        isPro: <?php echo is_user_pro() ? 'true' : 'false'; ?>,
        isTrial: <?php echo is_user_in_trial() ? 'true' : 'false'; ?>,
        status: '<?php echo $_SESSION['user_status'] ?? 'free'; ?>'
    };
    </script>
</head>
<body>

    <!-- Top Notification Bar -->
    <div class="top-notification-bar" style="<?php echo !is_logged_in() ? 'justify-content: center; text-align: center;' : ''; ?>">
        <span class="top-notif-left" style="<?php echo !is_logged_in() ? 'text-align: center; width: 100%; font-weight: 700;' : ''; ?>">🎁 Claim 30-Day Free Candidate Pass ($80 Value — CBT Exams, Audio Scripts & PDF Papers)!</span>
        <?php if (is_logged_in()): 
            $user_data = get_current_user_data();
            $u_name = htmlspecialchars($user_data['name'] ?? $_SESSION['user_name'] ?? 'Candidate');
        ?>
            <span class="top-notif-right">
                <?php if (is_admin()): ?>
                    <a href="/admin/dashboard.php" style="color: #fbbf24; font-weight: 700; text-decoration: underline;">🛡️ Admin Dashboard</a>
                <?php else: ?>
                    <span style="background: #059669; color: white; padding: 3px 10px; border-radius: 12px; font-weight: 700; font-size: 0.78rem; white-space: nowrap;">🎁 30-Day Free Pass Active</span>
                    <a href="/pro-portal" style="background: #2563eb; color: white; padding: 3px 10px; border-radius: 12px; font-weight: 700; font-size: 0.78rem; text-decoration: none; white-space: nowrap;">🎓 Student Dashboard</a>
                <?php endif; ?>
                <span style="white-space: nowrap;">👋 Hi, <strong><?php echo $u_name; ?></strong></span>
                <a href="/auth-handler.php?action=logout" style="color: #cbd5e1; text-decoration: none; font-size: 0.8rem; border: 1px solid #475569; padding: 3px 8px; border-radius: 4px; white-space: nowrap;">Logout</a>
            </span>
        <?php endif; ?>
    </div>
    <style>
    @keyframes trialBlink {
        0% { transform: scale(0.97); opacity: 0.85; box-shadow: 0 0 4px rgba(251, 191, 36, 0.4); }
        100% { transform: scale(1.05); opacity: 1; box-shadow: 0 0 16px rgba(251, 191, 36, 0.95); }
    }
    </style>

    <!-- Session Notifications -->
    <?php if (isset($_SESSION['auth_error'])): ?>
        <div style="background: #fef2f2; border-bottom: 2px solid #ef4444; color: #991b1b; padding: 10px; text-align: center; font-weight: 700; font-size: 0.9rem;">
            ⚠️ <?php echo htmlspecialchars($_SESSION['auth_error']); unset($_SESSION['auth_error']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['auth_success'])): ?>
        <div style="background: #f0fdf4; border-bottom: 2px solid #22c55e; color: #166534; padding: 10px; text-align: center; font-weight: 700; font-size: 0.9rem;">
            🎉 <?php echo htmlspecialchars($_SESSION['auth_success']); unset($_SESSION['auth_success']); ?>
        </div>
    <?php endif; ?>

    <!-- Header Navigation -->
    <header class="header-main">
        <div class="container header-container">
            <!-- Image Logo -->
            <a href="/" class="brand-logo-img">
                <img src="/images/logo.png" alt="Korean Test Papers Logo" class="site-header-logo">
            </a>

            <!-- Mobile Only Header Actions -->
            <div class="mobile-header-actions">
                <?php if (is_logged_in()): ?>
                    <a href="/auth-handler.php?action=logout" class="btn-header-login-mobile">Logout</a>
                <?php else: ?>
                    <a href="javascript:void(0)" onclick="openAuthModal('login')" class="btn-header-login-mobile">🔑 Log In</a>
                <?php endif; ?>
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
                    <?php if (is_logged_in()): ?>
                        <?php if (is_admin()): ?>
                            <li><a href="/admin/dashboard.php" style="background: #d97706; color: #ffffff; padding: 6px 12px; border-radius: 6px; font-weight: 700; font-size: 0.85rem;">🛡️ Admin</a></li>
                        <?php else: ?>
                            <li><a href="/pro-portal" style="background: #059669; color: #ffffff; padding: 6px 12px; border-radius: 6px; font-weight: 700; font-size: 0.85rem;">🎓 Student Dashboard</a></li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li><a href="javascript:void(0)" onclick="openAuthModal('login')" style="background: #0f172a; color: #fbbf24; border: 1px solid #fbbf24; padding: 6px 14px; border-radius: 6px; font-weight: 700; font-size: 0.85rem; text-decoration: none;">🔑 Log In</a></li>
                        <li><a href="javascript:void(0)" onclick="openAuthModal('register')" style="background: linear-gradient(135deg, #059669, #10b981); color: #ffffff; padding: 6px 14px; border-radius: 6px; font-weight: 800; font-size: 0.85rem; text-decoration: none;">🎁 Claim $80 Free Pass</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Include Auth Modal Component -->
    <?php require_once __DIR__ . '/auth-modal.php'; ?>
