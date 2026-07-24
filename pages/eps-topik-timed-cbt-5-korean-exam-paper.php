<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Real-time EPS TOPIK CBT 5 Korean Exam Paper";
$page_desc = "Download free Real-time EPS TOPIK CBT 5 Korean exam paper PDF with official HRD Korea 50-minute timed touchscreen simulator, answer keys, and score calculation.";
$canonical_url = "https://koreantestpapers.in/eps-topik-timed-cbt-5-korean-exam-paper";

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
  "headline": "Real-time EPS TOPIK CBT 5 Korean Exam Paper",
  "description": "Comprehensive guide and downloadable Real-time EPS TOPIK CBT 5 Korean exam paper PDF sets with 50-minute real-time computer simulation questions and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-timed-cbt-5-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Real-time EPS TOPIK CBT 5 Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Finalize your computer test practice with official Real-time EPS TOPIK CBT 5 <strong>korean exam paper</strong> sets, complete with 50-minute timer simulation, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Timed CBT 5 Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⏱ Timed CBT Set 5 Archive</h3>
                    <span class="tag-badge blue">Timed CBT 5</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Real-time EPS TOPIK CBT 5 Exam Paper PDF</h4>
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
                        <span class="live-dot"></span> LIVE TIMED CBT 5 SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED TIMED CBT 5 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TIMED CBT 5 OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Real-time EPS TOPIK CBT 5 Korean Exam Papers</h2>
            <p>
                Real-time EPS TOPIK CBT 5 is the final master computer practice paper in our timed CBT simulation series. Formulated according to official HRD Korea UBT examination guidelines, Timed CBT 5 tests candidates across all 40 standard exam items under authentic test center time limits.
            </p>
            <p>
                Our Real-time EPS TOPIK CBT 5 <strong>korean exam paper</strong> collection provides verified question sets, complete answer keys, and listening dialogue transcripts. Practicing with dedicated timed CBT <strong>korean test papers</strong> ensures candidates reach top scores (165+ points) and pass the official EPS exam. Download the complete Timed CBT 5 paper PDF below.
            </p>

            <div class="callout-box">
                <h4>⏱ Key Exam Features of Timed CBT Set 5</h4>
                <ul>
                    <li><strong>Total Test Duration:</strong> 50 Minutes (25 Mins Reading + 25 Mins Listening)</li>
                    <li><strong>Question Structure:</strong> 20 Reading Qs (5 Pts each) + 20 Listening Qs (5 Pts each)</li>
                    <li><strong>Listening Audio Controls:</strong> Double audio playback per question with automatic progress</li>
                    <li><strong>Scoring Standard:</strong> 200 Total Points</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: FINAL TEST CENTER PREPARATION CHECKLIST -->
        <div class="seo-content-box">
            <h2>Final Test Center Checklist for EPS Candidates</h2>
            <p>
                Follow these critical rules on exam day at your national UBT test center:
            </p>

            <ul>
                <li><strong>Arrive 30 Minutes Early:</strong> Test center doors lock strictly 15 minutes before the exam session begins.</li>
                <li><strong>Bring Valid Photo ID:</strong> Bring your passport and printed EPS registration ticket.</li>
                <li><strong>Headphone Check:</strong> Test your headset volume during the system audio check phase before Q21 begins.</li>
                <li><strong>Screen Touch Accuracy:</strong> Ensure your touch selections register properly on the tablet monitor.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TIMED CBT 5 -->
        <div class="seo-content-box">
            <h2>Download Solved Real-time EPS TOPIK CBT 5 Korean Exam Paper PDF</h2>
            <p>
                Download official Timed CBT Set 5 <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>Real-time EPS TOPIK CBT 5 Paper PDF</strong></td>
                            <td><span class="tag-badge blue">Timed CBT 5</span></td>
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
            <h2>3-Step Blueprint for Final CBT Test Revision</h2>
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
            <h2>Frequently Asked Questions (FAQ) - Timed CBT 5 Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Does Timed CBT 5 include audio transcript files?</div>
                    <div class="faq-answer">
                        Yes! Timed CBT 5 includes full Hangul audio scripts for all 20 listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does Timed CBT 5 include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Timed CBT 5 <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: What happens if I finish reading questions early?</div>
                    <div class="faq-answer">
                        You can use remaining reading section time to double-check previous answers before listening starts.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
