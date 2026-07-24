<?php
// Custom 404 Error Page for koreantestpapers.in
http_response_code(404);

$page_title = "404 Page Not Found - Download Korean Test Papers and Korean Exam Paper";
$page_desc = "The requested Korean test paper or page could not be found. Explore our complete archive of free EPS-TOPIK and TOPIK exam papers with answer keys.";

require_once __DIR__ . '/includes/header.php';
?>

<section class="section-padding">
    <div class="container" style="text-align: center; max-width: 800px; padding: 60px 20px;">
        <div class="seo-content-box" style="padding: 40px 30px;">
            <div style="font-size: 4rem; font-weight: 800; color: #2563eb; line-height: 1; margin-bottom: 10px;">404</div>
            <h1 style="font-size: 1.8rem; color: #0f172a; margin-bottom: 14px;">Korean Exam Paper Page Not Found</h1>
            <p style="font-size: 1.05rem; color: #475569; margin-bottom: 24px;">
                Sorry, the specific page or test set you are looking for may have been moved or updated. You can easily access all free official <strong>korean test papers</strong>, past <strong>korean exam paper</strong> archives (2015-2025), and live CBT practice tests below:
            </p>

            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-bottom: 30px;">
                <a href="/" class="btn-primary-action" style="padding: 12px 24px; text-decoration: none;">🏠 Go to Homepage</a>
                <a href="/eps-topik-reading-korean-test-papers" class="btn-download-sm" style="padding: 12px 24px; font-size: 0.95rem;">📄 EPS TOPIK Reading Papers</a>
                <a href="/#download-table-section" class="btn-download-sm" style="padding: 12px 24px; font-size: 0.95rem; background: #059669;">📥 Master PDF Archive</a>
            </div>

            <div class="callout-box" style="text-align: left; margin-top: 20px;">
                <h4>🔍 Looking for a Specific Exam Year or Category?</h4>
                <p>Use our site search or visit the <a href="/">Homepage Master Download Table</a> to filter 2015-2025 EPS-TOPIK Reading, Listening, Manufacturing, Agriculture, and TOPIK I & II papers with answer keys.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
