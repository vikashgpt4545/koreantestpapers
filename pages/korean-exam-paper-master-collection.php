<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Master Download Korean Exam Paper and PDF Answer Keys - Complete Archive";
$page_desc = "Download free Master Download Korean Exam Paper and PDF Answer Keys archive covering EPS TOPIK, TOPIK I Level 1-2, TOPIK II Level 3-6, 10-year past year question papers, audio files, and CBT practice tests.";
$canonical_url = "https://koreantestpapers.in/korean-exam-paper-master-collection";

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

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Master Download Korean Exam Paper and PDF Answer Keys - Complete Archive</h1>
            <p class="hero-subtitle">
                Access the definitive master collection of free <strong>korean exam paper</strong> PDFs, official NIIED & HRD Korea answer key bundles, 10-year historical archives, downloadable <strong>korean test papers</strong>, and interactive CBT simulators.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Master Collection Quick Download Menu -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 Master Collection Quick Downloads</h3>
                    <span class="tag-badge green">Master Archive</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Master Korean Exam Paper Collection PDF</h4>
                            <p>Complete multi-year archive compilation with keys & solutions</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Official Question Bank PDF</h4>
                            <p>Full 2000-question reading & listening compilation</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK II Advanced Model Test Paper PDF</h4>
                            <p>Reading, Listening & Essay writing test set</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE MASTER COLLECTION SIMULATOR
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

        <!-- ARTICLE BOX 2: CATEGORY ARCHIVE MATRIX TABLE -->
        <div class="seo-content-box">
            <h2>Master Korean Exam Paper Architecture & Category Index</h2>
            <p>
                Explore the complete organizational structure of our master examination archive:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Category Tier</th>
                            <th>Target Audience / Purpose</th>
                            <th>Total Papers</th>
                            <th>Format</th>
                            <th>Primary Keywords Included</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="tag-badge blue">EPS TOPIK Work Visa</span></td>
                            <td>HRD Korea E-9 Employment Seekers (16 Countries)</td>
                            <td>50+ Sets</td>
                            <td>PDF + Audio + CBT</td>
                            <td>korean test papers, eps topik, cbt exam paper</td>
                        </tr>
                        <tr>
                            <td><span class="tag-badge green">TOPIK I (Beginner)</span></td>
                            <td>Levels 1 & 2 (Language Schools, Basic Fluency)</td>
                            <td>20+ Sets</td>
                            <td>PDF + Answer Key</td>
                            <td>korean exam paper, topik 1 level 1, topik 1 level 2</td>
                        </tr>
                        <tr>
                            <td><span class="tag-badge amber">TOPIK II (Int / Adv)</span></td>
                            <td>Levels 3 to 6 (University BA/MA, GKS, Corporate)</td>
                            <td>20+ Sets</td>
                            <td>PDF + Essay Keys</td>
                            <td>korean test papers, topik 2 level 3-6, essay paper</td>
                        </tr>
                        <tr>
                            <td><span class="tag-badge red">Historical Archives</span></td>
                            <td>10-Year Past Paper Archives (2015 - 2025)</td>
                            <td>10+ Sets</td>
                            <td>PDF + Full Solutions</td>
                            <td>korean exam paper past papers, solved answers</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR ALL EXAM PAPERS -->
        <div class="seo-content-box">
            <h2>Master Download Table - All Korean Exam Papers PDF & Keys</h2>
            <p>
                Download official master test paper bundles and practice sets with complete answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Master Exam Title</th>
                            <th>Exam Category</th>
                            <th>Year</th>
                            <th>Answer Key Status</th>
                            <th>Download Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>91st Official TOPIK Master Exam Paper PDF</strong></td>
                            <td><span class="tag-badge green">Official NIIED</span></td>
                            <td>2025</td>
                            <td>✔ Solved Key + Explanations</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Master Question Bank 2000 PDF</strong></td>
                            <td><span class="tag-badge blue">EPS TOPIK Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved Answer Key</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK II Advanced Model Master Paper PDF</strong></td>
                            <td><span class="tag-badge amber">TOPIK II Advanced</span></td>
                            <td>2025</td>
                            <td>✔ Solved Answer Key</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Manufacturing Master Test Paper PDF</strong></td>
                            <td><span class="tag-badge red">Manufacturing</span></td>
                            <td>2024</td>
                            <td>✔ Solved Answer Key</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                        Yes! Every single downloadable <strong>korean test papers</strong> PDF file and answer key in our master repository is completely free to access and download.
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
