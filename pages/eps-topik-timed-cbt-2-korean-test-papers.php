<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Real-time EPS TOPIK CBT 2 Korean Test Papers";
$page_desc = "Download free Real-time EPS TOPIK CBT 2 Korean test papers PDF with official HRD Korea 50-minute timed touchscreen simulator, answer keys, and score calculation.";
$canonical_url = "https://koreantestpapers.in/eps-topik-timed-cbt-2-korean-test-papers";

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
  "headline": "Real-time EPS TOPIK CBT 2 Korean Test Papers",
  "description": "Comprehensive study guide and downloadable Real-time EPS TOPIK CBT 2 Korean test papers PDF sets with 50-minute real-time computer simulation questions and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-timed-cbt-2-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Real-time EPS TOPIK CBT 2 Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master computer testing speed with official Real-time EPS TOPIK CBT 2 <strong>korean test papers</strong>, complete with 50-minute timer simulation, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Timed CBT 2 Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⏱ Timed CBT Set 2 Archive</h3>
                    <span class="tag-badge blue">Timed CBT 2</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Real-time EPS TOPIK CBT 2 Test Paper PDF</h4>
                            <p>Full 40-question timed UBT practice test set</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2025 Model Question Paper PDF</h4>
                            <p>Official 40-question UBT practice test set & answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>HRD Korea Official Question Bank PDF</h4>
                            <p>Complete 2000-question solved question bank</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE TIMED CBT 2 SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED TIMED CBT 2 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TIMED CBT 2 OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Real-time EPS TOPIK CBT 2 Korean Test Papers</h2>
            <p>
                Real-time EPS TOPIK CBT 2 provides candidates with an advanced computer simulation test designed to refine screen reading efficiency and audio response speed. Developed according to HRD Korea's 40-question UBT framework, Timed CBT 2 features 20 reading questions (Q1-Q20) and 20 listening questions (Q21-Q40).
            </p>
            <p>
                Our Real-time EPS TOPIK CBT 2 <strong>korean test papers</strong> repository includes detailed answer keys, audio dialog scripts, and score calculation formulas. Practicing with dedicated timed CBT <strong>korean exam paper</strong> sets prepares candidates to hit top scores (165+ points out of 200). Download the complete Timed CBT 2 paper PDF below.
            </p>

            <div class="callout-box">
                <h4>⏱ Key Exam Features of Timed CBT Set 2</h4>
                <ul>
                    <li><strong>Total Test Duration:</strong> 50 Minutes (25 Mins Reading + 25 Mins Listening)</li>
                    <li><strong>Question Structure:</strong> 20 Reading Qs (5 Pts each) + 20 Listening Qs (5 Pts each)</li>
                    <li><strong>Listening Audio Controls:</strong> Double audio playback per question with automatic progress</li>
                    <li><strong>Scoring Standard:</strong> 200 Total Points</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: READING VS LISTENING TIME MANAGEMENT STRATEGY -->
        <div class="seo-content-box">
            <h2>Time Management Rules for CBT Set 2</h2>
            <p>
                Follow these 3 time management guidelines:
            </p>

            <h3>1. Reading Section Budget (25 Mins for 20 Qs)</h3>
            <p>Spend 45 seconds on vocabulary & grammar items (Q1-Q8), 1 minute on signboard/chart items (Q9-Q14), and 1.5 minutes on long passages (Q15-Q20).</p>

            <h3>2. Listening Section Focus (25 Mins for 20 Qs)</h3>
            <p>Read answer options for the next question during the 10-second audio pause preceding each question.</p>

            <h3>3. Review Buffer</h3>
            <p>Reserve 2 minutes at the end of the reading section to verify un-answered flagged items on the question panel.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TIMED CBT 2 -->
        <div class="seo-content-box">
            <h2>Download Solved Real-time EPS TOPIK CBT 2 Korean Test Papers PDF</h2>
            <p>
                Download official Timed CBT Set 2 <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>Real-time EPS TOPIK CBT 2 Paper PDF</strong></td>
                            <td><span class="tag-badge blue">Timed CBT 2</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs + Timer Key</td>
                            <td><a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2025 Model Question Paper PDF</strong></td>
                            <td><span class="tag-badge blue">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT Model Set</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>HRD Korea Official Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ 2000 Solved Questions</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Mastering CBT Set 2</h2>
            <p>
                Follow this 3-step blueprint for test success:
            </p>
            <ul>
                <li><strong>Step 1 (Computer Simulation):</strong> Practice on a computer monitor to build eye stamina for digital text.</li>
                <li><strong>Step 2 (Self-Grading):</strong> Grade your answers using the official HRD Korea score key.</li>
                <li><strong>Step 3 (Error Log Analysis):</strong> Note whether reading or listening incurred more penalty points.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Timed CBT 2 Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Does Timed CBT 2 include audio transcript files?</div>
                    <div class="faq-answer">
                        Yes! Timed CBT 2 includes full Hangul audio scripts for all 20 listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does Timed CBT 2 include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Timed CBT 2 <strong>korean test papers</strong> on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many points is each question worth in EPS TOPIK CBT?</div>
                    <div class="faq-answer">
                        Each question is worth 5 points, totaling 200 points for the 40-question exam.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
