<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Master Korean Test Papers Download Archive Korean Exam Paper";
$page_desc = "Download free Master Korean Test Papers Download Archive Korean exam paper PDF with 100+ solved TOPIK I, TOPIK II, EPS-TOPIK, KIIP integration, listening MP3 packs, and answer keys.";
$canonical_url = "https://koreantestpapers.in/master-korean-test-papers-download-archive-korean-exam-paper";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();

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
  "headline": "Master Korean Test Papers Download Archive Korean Exam Paper",
  "description": "Comprehensive master portal and downloadable Master Korean Test Papers Download Archive Korean exam paper PDF sets with complete TOPIK I, TOPIK II, EPS-TOPIK, and KIIP archives.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/master-korean-test-papers-download-archive-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Master Korean Test Papers Download Archive Korean Exam Paper</h1>
            <p class="hero-subtitle">
                The ultimate 100-page master repository for <strong>korean test papers</strong>, featuring downloadable TOPIK I & II papers, EPS-TOPIK UBT question banks, KIIP integration exams, MP3 listening audio packs, and complete <strong>korean exam paper</strong> answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Master Archive Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 Master Download Hub (100 Pages Archive)</h3>
                    <span class="tag-badge green">Master Vault</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Master Korean Test Papers Complete PDF Pack</h4>
                            <p>Ultimate 100-resource TOPIK & EPS-TOPIK master archive</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Full Exam Paper PDF</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Official 2000 Question Bank PDF</h4>
                            <p>Official HRD Korea 2000-question UBT compilation</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE MASTER CBT TEST SIMULATOR
                    </div>
                    <div style="font-weight: 700; font-size: 0.9rem; color: #475569;">
                        ⏱ Timer: <span id="liveTimerDisplay" style="color: #2563eb;">25:00</span>
                    </div>
                </div>

                <div class="quiz-card-box">
                    <div class="quiz-question-title" id="liveQuestionText">
                        <?php echo htmlspecialchars($live_questions[0]['question_text']); ?>
                    </div>
                    
                    <div class="quiz-options-list" id="liveOptionsContainer">
                        <button class="quiz-option-btn" data-option="A">
                            <span>A. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_a']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="B">
                            <span>B. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_b']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="C">
                            <span>C. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_c']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="D">
                            <span>D. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_d']); ?></span></span>
                        </button>
                    </div>

                    <div id="liveExplanationBox" style="display:none; margin-top: 14px; padding: 12px; background: #eff6ff; border-radius: 6px; font-size: 0.88rem; color: #1e3a8a;"></div>
                </div>

                <div class="quiz-action-bar">
                    <button class="btn-primary-action" id="btnSubmitAnswer" disabled>Submit Answer</button>
                    <button class="btn-primary-action" id="btnNextQuestion" style="display:none; background: #059669;">Next Question ▶</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS MASTER ARCHIVE GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: MASTER ARCHIVE OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Master Korean Test Papers Download Archive Korean Exam Papers</h2>
            <p>
                Welcome to the <strong>Master Download Archive</strong> of KoreanTestPapers.in—the internet's most exhaustive free repository of Korean language examination materials. This master hub consolidates all 100 specialized landing pages, model question papers, past session archives (TOPIK 91st, 83rd, 64th, EPS-TOPIK 2015-2025), industry-specific vocabulary guides (Manufacturing, Agriculture, Construction, Shipbuilding), listening MP3 packs, and KIIP Immigration Integration papers into a single high-authority portal.
            </p>
            <p>
                Whether you are preparing for TOPIK I (Beginner), TOPIK II (Intermediate/Advanced), EPS-TOPIK UBT employment tests, or KIIP residency exams, our Master Korean Test Papers Archive <strong>korean exam paper</strong> vault delivers instantly accessible PDF downloads with verified answer keys. Download the master archive pack below.
            </p>

            <div class="callout-box">
                <h4>🏆 Complete Master Archive Categories (100 Landing Pages)</h4>
                <ul>
                    <li><strong>TOPIK I & II Past Papers:</strong> 91st, 83rd, 64th, 60th, 52nd, 47th, 41st, 37th, 36th official sessions</li>
                    <li><strong>EPS-TOPIK Question Banks:</strong> 2000-Question Master Bank, 2025 Model Sets, 2015-2018 Historical Archives</li>
                    <li><strong>Industry Workbooks:</strong> Manufacturing, Agriculture, Construction, Fisheries, Shipbuilding safety manuals</li>
                    <li><strong>Skill-Specific Practice:</strong> Reading (Levels 1-6), Listening MP3 Packs, Writing Q51-Q54 Essay Guides</li>
                    <li><strong>Immigration & Culture:</strong> KIIP Integration Levels 1-5, Top 100 Idioms & Proverbs, Hanja Four-Character Expressions</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MASTER INDEX OF CORE DOWNLOAD RESOURCES -->
        <div class="seo-content-box">
            <h2>Master Korean Test Papers Category Directory</h2>
            <p>
                Browse all major testing categories available across our portal:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Resource Category</th>
                            <th>Target Examination</th>
                            <th>Included Components</th>
                            <th>Download Availability</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK I Archive (Levels 1-2)</strong></td>
                            <td>NIIED TOPIK I</td>
                            <td>Solved 30 Listening Qs + 40 Reading Qs + MP3 Audio</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK II Archive (Levels 3-6)</strong></td>
                            <td>NIIED TOPIK II</td>
                            <td>Solved 50 Listening Qs + Q51-54 Writing + 50 Reading Qs</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                        <tr>
                            <td><strong>EPS-TOPIK UBT Question Bank</strong></td>
                            <td>HRD Korea E-9 Visa</td>
                            <td>2000 Solved Questions + Picture Cards + MP3 Listening</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                        <tr>
                            <td><strong>Industry Workbooks</strong></td>
                            <td>EPS-TOPIK Sector Test</td>
                            <td>Manufacturing, Farming, Construction & Safety Manuals</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                        <tr>
                            <td><strong>KIIP Immigration Program</strong></td>
                            <td>Ministry of Justice KIIP</td>
                            <td>Level 1-5 Foundation & Social Integration Exam Papers</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                        <tr>
                            <td><strong>Vocabulary & Grammar Guides</strong></td>
                            <td>TOPIK & EPS-TOPIK</td>
                            <td>Grammar Roots, Antonyms, Proverbs, Four-Character Idioms</td>
                            <td><span class="tag-badge green">Free PDF</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE -->
        <div class="seo-content-box">
            <h2>Download Solved Master Korean Test Papers Download Archive Korean Exam Paper PDF</h2>
            <p>
                Download official master test paper packs below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Features</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Master Korean Test Papers Complete PDF Pack</strong></td>
                            <td><span class="tag-badge green">Master Archive</span></td>
                            <td>2025</td>
                            <td>✔ Solved 100-Resource Master Vault</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">TOPIK II Official</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Official 2000 Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">HRD Korea Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved 2000 Questions Key</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Korean Exam Mastery</h2>
            <p>
                Follow this 3-step master study blueprint:
            </p>
            <ul>
                <li><strong>Step 1 (Download Target Exam Sets):</strong> Select your target test (TOPIK I, TOPIK II, or EPS-TOPIK) and download matching past paper PDFs.</li>
                <li><strong>Step 2 (Practice Under Timed CBT Simulation):</strong> Use our online interactive CBT simulator to build speed and accuracy.</li>
                <li><strong>Step 3 (Cross-Check Official Answer Keys):</strong> Verify every answer using our official NIIED and HRD Korea scoring keys.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Master Korean Test Papers Archive</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are all test papers on koreantestpapers.in 100% free to download?</div>
                    <div class="faq-answer">
                        Yes! All 100 test paper pages and PDF downloads on koreantestpapers.in are completely free for Korean learners worldwide.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Master Archive PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! Every downloadable <strong>korean exam paper</strong> set includes official NIIED and HRD Korea answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How often is the Korean Test Papers archive updated?</div>
                    <div class="faq-answer">
                        We update our question banks continuously following each official NIIED TOPIK session and HRD Korea EPS-TOPIK examination release.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
