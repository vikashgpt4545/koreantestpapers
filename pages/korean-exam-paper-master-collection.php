<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/media_catalog.php';

// Page SEO Meta Configuration
$page_title = "Master Download Korean Exam Paper and PDF Answer Keys - Complete Archive";
$page_desc = "Download free Master Download Korean Exam Paper and PDF Answer Keys archive covering EPS TOPIK, TOPIK I Level 1-2, TOPIK II Level 3-6, 10-year past year question papers, audio files, and CBT practice tests.";
$canonical_url = "https://koreantestpapers.in/korean-exam-paper-master-collection";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();
$master_catalog = get_master_pdf_catalog();

// Include Shared Header Template
require_once __DIR__ . '/../includes/header.php';
?>

<script>
    window.liveQuestions = <?php echo json_encode($live_questions); ?>;
</script>

<!-- Schema Markup: Article & FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Master Download Korean Exam Paper and PDF Answer Keys - Complete Archive",
  "description": "The ultimate master repository of free downloadable Korean exam paper PDFs, EPS TOPIK model papers, TOPIK I & II past papers, and official answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-exam-paper-master-collection"
}
</script>

<!-- UNIFIED 70%/30% HERO SECTION -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED MASTER COLLECTION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: MASTER ARCHIVE OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Master Download Korean Exam Paper and PDF Answer Keys</h2>
            <p>
                Welcome to the official master download portal of KoreanTestPapers.in. This centralized repository houses the most exhaustive digital collection of official Korean language test papers ever assembled online. Whether you are preparing for the HRD Korea Employment Permit System (EPS TOPIK) for industrial work visas or taking NIIED TOPIK I & II for Korean university admission and academic scholarships, this master collection provides instant access to verified PDF documents, listening MP3 scripts, and answer keys.
            </p>
            <p>
                Our Master Collection <strong>korean exam paper</strong> database is meticulously cataloged into structured categories: Beginner (TOPIK Level 1-2), Intermediate (TOPIK Level 3-4), Advanced (TOPIK Level 5-6), EPS TOPIK Industrial Sectors (Manufacturing, Agriculture, Construction, Fishery), and 10-Year Historical Past Archives (2015 to 2025). Download your required <strong>korean test papers</strong> PDFs below with a single click.
            </p>

            <div class="callout-box">
                <h4>📚 What Is Included in the Master Collection PDF Repository</h4>
                <ul>
                    <li><strong>Full 20-40 Question PDF Papers:</strong> Complete examination papers formatted according to official NIIED & HRD Korea layout guidelines.</li>
                    <li><strong>Official Verified Answer Keys:</strong> Step-by-step solutions, correct answer grids, and grade conversion matrices.</li>
                    <li><strong>Industrial Workplace Vocabularies:</strong> Machinery terms, safety signs, tool identification, and labor contract reading drills.</li>
                    <li><strong>Listening Audio Transcripts:</strong> Audio transcripts and phonetic pronunciation rules for high-score performance.</li>
                </ul>
            </div>
        </div>

        <!-- PROMOTIONAL CALLOUT BANNER 1 -->
        <div class="callout-box" style="background: linear-gradient(135deg, #1e3a8a, #0284c7); color: white; border: none; padding: 24px; text-align: center; margin-bottom: 28px;">
            <h3 style="color: white; margin-bottom: 8px;">Past papers alone won't tell you why you got an answer wrong!</h3>
            <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto 16px;">Try our level-based interactive Korean games, Hangul vocabulary drills, and dynamic CBT test simulator to boost your exam score fast.</p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <button onclick="switchHeroTab('gamesTab'); window.scrollTo({top: 0, behavior: 'smooth'});" class="btn-primary-action" style="background: #059669; max-width: 220px;">⚡ Start Free Practice</button>
                <a href="/subscription" class="btn-primary-action" style="background: #f59e0b; max-width: 220px; text-decoration: none;">🔓 View Premium Passes</a>
            </div>
        </div>

        <!-- MASTER SEARCH & DOWNLOAD TABLE FOR ALL EXAM PAPERS -->
        <div class="seo-content-box">
            <h2>Master Archive Search & Download Table (All 156 PDF/MP3 Files)</h2>
            <p>
                Use the search box below to instantly filter past test papers, official answer sheets, listening scripts, and MP3 audio files:
            </p>

            <div style="margin: 16px 0 20px 0;">
                <input type="text" id="searchExamPapersInput" placeholder="🔍 Search exam session (e.g. 102nd, 96th, 91st, 83rd, 64th, TOPIK I, EPS)..." style="width: 100%; padding: 12px 16px; font-size: 1rem; border: 2px solid #2563eb; border-radius: 8px; outline: none;">
            </div>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Session</th>
                            <th>Exam Level / Sector</th>
                            <th>Resource Type</th>
                            <th>Year</th>
                            <th>Download Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($master_catalog as $item): ?>
                        <tr>
                            <td><strong><?php echo htmlspecialchars($item['session']); ?></strong></td>
                            <td><span class="tag-badge blue"><?php echo htmlspecialchars($item['level']); ?></span></td>
                            <td><?php echo htmlspecialchars($item['type']); ?></td>
                            <td><?php echo htmlspecialchars($item['year']); ?></td>
                            <td>
                                <a href="/download-paper?title=<?php echo urlencode($item['session'] . ' (' . $item['level'] . ')'); ?>" class="btn-download-sm">
                                    📥 Download File
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- PROMOTIONAL CALLOUT BANNER 2 -->
        <div class="callout-box" style="background: #0f172a; color: white; border-left: 4px solid #059669; padding: 24px; margin-bottom: 28px;">
            <h3 style="color: white; margin-bottom: 8px;">Ready to go beyond past papers?</h3>
            <p style="color: #94a3b8; margin-bottom: 14px;">Unlock Level 2+ hard mode game challenges, dynamic no-repeat CBT questions, and high-yield study notes with our time-based student passes ($3 - $11 USD).</p>
            <a href="/subscription" class="btn-primary-action" style="background: #2563eb; display: inline-block; padding: 10px 20px; text-decoration: none;">View Subscription Passes ($3 - $11 USD) ▶</a>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC EXAM MASTER BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for Mastering the Korean Examination</h2>
            <p>
                Follow this 4-step strategic roadmap to maximize your score output across all Korean language proficiency exams:
            </p>
            <ul>
                <li><strong>Step 1 (Assessment & Target Setting):</strong> Take a diagnostic practice test from the master collection to establish your baseline score.</li>
                <li><strong>Step 2 (Grammar & Vocabulary Strengthening):</strong> Memorize core industrial terms and sentence structures relevant to your target level.</li>
                <li><strong>Step 3 (Past Paper Drills):</strong> Solve past papers chronologically from 2015 to 2025 to spot repeating question trends.</li>
                <li><strong>Step 4 (Simulated Mock Testing):</strong> Take full-length 25-minute timed CBT tests on our portal to perfect exam pace and eliminate errors.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Master Collection</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are all exam papers in the Master Collection free to download?</div>
                    <div class="faq-answer">
                        Yes! Every single downloadable <strong>korean test papers</strong> PDF file and answer key in our master repository is completely free to access and download directly from Google Drive.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Master Collection contain both EPS TOPIK and NIIED TOPIK papers?</div>
                    <div class="faq-answer">
                        Yes! Our master database includes both HRD Korea EPS TOPIK papers for work visas and NIIED TOPIK I & II papers for academic study.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How frequently is the Master Collection repository updated?</div>
                    <div class="faq-answer">
                        We update the master archive continuously after every official NIIED and HRD Korea examination session to provide the newest model sets and answer keys.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
