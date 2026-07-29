<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/media_catalog.php';

// Page SEO Meta Configuration
$page_title = "Master Download Korean Exam Paper & Korean Test Papers Collection PDF Download";
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
  "headline": "Master Download Korean Exam Paper & Korean Test Papers Collection PDF Download",
  "description": "The ultimate master repository of free downloadable Korean exam paper PDFs, EPS TOPIK model papers, TOPIK I & II past papers, and official answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-exam-paper-master-collection"
}
</script>

<!-- MAIN CONTENT CONTAINER -->
<section class="section-padding" style="padding-top: 30px;">
    <div class="container">
        
        <!-- PAGE TOP TITLE HEADER -->
        <div style="text-align: center; margin-bottom: 28px;">
            <h1 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Master Download Korean Exam Paper & Test Papers Archive</h1>
            <p style="font-size: 1.1rem; color: #475569; max-width: 820px; margin: 0 auto; line-height: 1.6;">
                Access over 150+ official <strong>korean exam paper</strong> PDFs, EPS-TOPIK industrial model test sets, TOPIK I & II past papers, audio scripts, and verified answer keys.
            </p>
        </div>

        <!-- MASTER SEARCH & DOWNLOAD TABLE FOR ALL EXAM PAPERS -->
        <div class="seo-content-box" style="margin-bottom: 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px;">
                <h2 style="margin: 0;">Master Archive Search & Download Table (All 156 PDF/MP3 Files)</h2>
                <span class="tag-badge blue">Updated 2025 Repository</span>
            </div>
            <p>
                Use the live search filter below to instantly find past test papers, official answer sheets, listening transcripts, and MP3 audio files across all sessions:
            </p>

            <div style="margin: 16px 0 20px 0;">
                <input type="text" id="searchExamPapersInput" placeholder="🔍 Search exam session (e.g. 102nd, 96th, 91st, 83rd, 64th, TOPIK I, EPS)..." style="width: 100%; padding: 14px 18px; font-size: 1.05rem; border: 2px solid #2563eb; border-radius: 8px; outline: none; box-shadow: 0 2px 4px rgba(37,99,235,0.1);">
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

        <!-- PROMOTIONAL CALLOUT BANNER 1 (LINKED TO HOMEPAGE) -->
        <div class="callout-box" style="background: linear-gradient(135deg, #1e3a8a, #0284c7); color: white; border: none; padding: 28px; text-align: center; margin-bottom: 32px; border-radius: 12px; box-shadow: 0 4px 14px rgba(2,132,199,0.25);">
            <h3 style="color: white; margin-bottom: 10px; font-size: 1.5rem;">Past papers alone won't tell you why you got an answer wrong!</h3>
            <p style="color: #e0f2fe; max-width: 780px; margin: 0 auto 20px; font-size: 1.05rem; line-height: 1.6;">Try our level-based interactive Korean games, Hangul vocabulary drills, and dynamic CBT test simulator on the home page to boost your exam score fast.</p>
            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a href="/" class="btn-primary-action" style="background: #059669; min-width: 220px; text-decoration: none; text-align: center; font-weight: 700; padding: 12px 24px; border-radius: 8px; color: white;">⚡ Start Free Practice</a>
                <a href="/subscription" class="btn-primary-action" style="background: #f59e0b; min-width: 220px; text-decoration: none; text-align: center; font-weight: 700; padding: 12px 24px; border-radius: 8px; color: white;">🔓 View Premium Passes</a>
            </div>
        </div>

        <!-- STRUCTURED INFORMATIONAL CONTENT SECTION (AFTER PDF TABLE) -->
        <div class="seo-content-box" style="margin-bottom: 32px;">
            <h2>Complete Guide to Master Download Korean Exam Paper and PDF Answer Keys</h2>
            <p style="margin-bottom: 20px;">
                Welcome to the official master download portal of KoreanTestPapers.in. This centralized repository houses the most exhaustive digital collection of official Korean language test papers ever assembled online. Whether you are preparing for the HRD Korea Employment Permit System (EPS TOPIK) for industrial work visas or taking NIIED TOPIK I & II for Korean university admission and academic scholarships, this master collection provides instant access to verified PDF documents, listening MP3 scripts, and answer keys.
            </p>

            <!-- CATEGORY HIGHLIGHT CARDS (VISUAL GRID INSTEAD OF PLAIN TEXT) -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin: 24px 0;">
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                    <div style="font-size: 1.4rem; margin-bottom: 6px;">🌱</div>
                    <h4 style="margin-bottom: 6px; color: #1e293b;">Beginner Archive</h4>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">TOPIK Level 1 & 2 foundational grammar, reading, and basic listening comprehension sets.</p>
                </div>
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                    <div style="font-size: 1.4rem; margin-bottom: 6px;">📘</div>
                    <h4 style="margin-bottom: 6px; color: #1e293b;">Intermediate Archive</h4>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">TOPIK Level 3 & 4 intermediate reading passages, listening scripts, and Q53 graph writing drills.</p>
                </div>
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                    <div style="font-size: 1.4rem; margin-bottom: 6px;">🎓</div>
                    <h4 style="margin-bottom: 6px; color: #1e293b;">Advanced Archive</h4>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">TOPIK Level 5 & 6 academic prose, Four-Character Hanja idioms, and 600-word Q54 essay templates.</p>
                </div>
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                    <div style="font-size: 1.4rem; margin-bottom: 6px;">🏭</div>
                    <h4 style="margin-bottom: 6px; color: #1e293b;">EPS-TOPIK Sectors</h4>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">Manufacturing, Agriculture, Construction, Fishery, and Shipbuilding UBT/CBT model papers.</p>
                </div>
            </div>

            <!-- INCLUDED REPOSITORY FEATURES GRID -->
            <div class="callout-box" style="margin-top: 24px;">
                <h4 style="margin-bottom: 14px;">📚 What Is Included in the Master Collection PDF Repository</h4>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                    <div style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #cbd5e1;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;">📄 Full 20-40 Question PDF Papers</strong>
                        <span style="font-size: 0.92rem; color: #475569;">Complete examination papers formatted according to official NIIED & HRD Korea layout guidelines.</span>
                    </div>
                    <div style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #cbd5e1;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;">✅ Official Verified Answer Keys</strong>
                        <span style="font-size: 0.92rem; color: #475569;">Step-by-step solutions, correct answer grids, and grade conversion matrices for accuracy tracking.</span>
                    </div>
                    <div style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #cbd5e1;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;">⚙️ Industrial Workplace Vocabularies</strong>
                        <span style="font-size: 0.92rem; color: #475569;">Machinery terms, safety signs, tool identification, and labor contract reading drills.</span>
                    </div>
                    <div style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #cbd5e1;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;">🎧 Listening Audio Transcripts</strong>
                        <span style="font-size: 0.92rem; color: #475569;">Audio transcripts and phonetic pronunciation rules for high-score listening performance.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROMOTIONAL CALLOUT BANNER 2 -->
        <div class="callout-box" style="background: #0f172a; color: white; border-left: 4px solid #059669; padding: 24px; margin-bottom: 32px; border-radius: 8px;">
            <h3 style="color: white; margin-bottom: 8px;">Ready to go beyond past papers?</h3>
            <p style="color: #94a3b8; margin-bottom: 14px;">Unlock Level 2+ hard mode game challenges, dynamic no-repeat CBT questions, and high-yield study notes with our time-based student passes ($3 - $11 USD).</p>
            <a href="/subscription" class="btn-primary-action" style="background: #2563eb; display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 6px; color: white;">View Subscription Passes ($3 - $11 USD) ▶</a>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC EXAM MASTER BLUEPRINT -->
        <div class="seo-content-box" style="margin-bottom: 32px;">
            <h2>4-Step Blueprint for Mastering the Korean Examination</h2>
            <p style="margin-bottom: 20px;">
                Follow this 4-step strategic roadmap to maximize your score output across all Korean language proficiency exams:
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; padding: 16px; border-radius: 8px;">
                    <div style="font-weight: 800; color: #2563eb; font-size: 1.2rem; margin-bottom: 4px;">STEP 01</div>
                    <strong style="display: block; margin-bottom: 6px; color: #1e3a8a;">Diagnostic Assessment</strong>
                    <span style="font-size: 0.9rem; color: #334155;">Take a practice test from the master collection to establish your baseline score.</span>
                </div>
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; padding: 16px; border-radius: 8px;">
                    <div style="font-weight: 800; color: #2563eb; font-size: 1.2rem; margin-bottom: 4px;">STEP 02</div>
                    <strong style="display: block; margin-bottom: 6px; color: #1e3a8a;">Grammar & Vocabulary</strong>
                    <span style="font-size: 0.9rem; color: #334155;">Memorize core industrial terms and sentence structures relevant to your target level.</span>
                </div>
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; padding: 16px; border-radius: 8px;">
                    <div style="font-weight: 800; color: #2563eb; font-size: 1.2rem; margin-bottom: 4px;">STEP 03</div>
                    <strong style="display: block; margin-bottom: 6px; color: #1e3a8a;">Chronological Drills</strong>
                    <span style="font-size: 0.9rem; color: #334155;">Solve past papers from 2015 to 2025 to spot repeating question trends.</span>
                </div>
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; padding: 16px; border-radius: 8px;">
                    <div style="font-weight: 800; color: #2563eb; font-size: 1.2rem; margin-bottom: 4px;">STEP 04</div>
                    <strong style="display: block; margin-bottom: 6px; color: #1e3a8a;">Simulated CBT Tests</strong>
                    <span style="font-size: 0.9rem; color: #334155;">Take full-length timed CBT tests on our portal to perfect exam pace and eliminate errors.</span>
                </div>
            </div>
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
