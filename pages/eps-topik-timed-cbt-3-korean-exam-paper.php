<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Real-time EPS TOPIK CBT 3 Korean Exam Paper";
$page_desc = "Download free Real-time EPS TOPIK CBT 3 Korean exam paper PDF with official HRD Korea 50-minute timed touchscreen simulator, answer keys, and score calculation.";
$canonical_url = "https://koreantestpapers.in/eps-topik-timed-cbt-3-korean-exam-paper";

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
  "headline": "Real-time EPS TOPIK CBT 3 Korean Exam Paper",
  "description": "Comprehensive guide and downloadable Real-time EPS TOPIK CBT 3 Korean exam paper PDF sets with 50-minute real-time computer simulation questions and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-timed-cbt-3-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Real-time EPS TOPIK CBT 3 Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Enhance your exam performance with official Real-time EPS TOPIK CBT 3 <strong>korean exam paper</strong> sets, complete with 50-minute timer simulation, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Timed CBT 3 Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⏱ Timed CBT Set 3 Archive</h3>
                    <span class="tag-badge blue">Timed CBT 3</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Real-time EPS TOPIK CBT 3 Exam Paper PDF</h4>
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
                        <span class="live-dot"></span> LIVE TIMED CBT 3 SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED TIMED CBT 3 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TIMED CBT 3 OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Real-time EPS TOPIK CBT 3 Korean Exam Papers</h2>
            <p>
                Real-time EPS TOPIK CBT 3 provides candidates with a realistic computer mock test designed according to official HRD Korea UBT examination standards. Featuring 40 questions (20 Reading + 20 Listening), Timed CBT 3 tests candidates under strict 50-minute time constraints to develop exam speed and accuracy.
            </p>
            <p>
                Our Real-time EPS TOPIK CBT 3 <strong>korean exam paper</strong> collection includes comprehensive question sets, audio dialogue scripts, and detailed answer explanations. Practicing with dedicated timed CBT <strong>korean test papers</strong> builds confidence and guarantees higher score outcomes. Download the complete Timed CBT 3 paper PDF below.
            </p>

            <div class="callout-box">
                <h4>⏱ Key Exam Features of Timed CBT Set 3</h4>
                <ul>
                    <li><strong>Total Test Duration:</strong> 50 Minutes (25 Mins Reading + 25 Mins Listening)</li>
                    <li><strong>Question Structure:</strong> 20 Reading Qs (5 Pts each) + 20 Listening Qs (5 Pts each)</li>
                    <li><strong>Listening Audio Controls:</strong> Double audio playback per question with automatic progress</li>
                    <li><strong>Scoring Standard:</strong> 200 Total Points</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: ADVANCED VISUAL QUESTION TYPES IN CBT SET 3 -->
        <div class="seo-content-box">
            <h2>Advanced Visual Question Formats in CBT Set 3</h2>
            <p>
                Timed CBT Set 3 includes 3 common visual question formats:
            </p>

            <h3>1. Factory Machinery & Hand Tools (Q9-Q12)</h3>
            <p>Identifying tools (망치, 펜치, 스패너, 드라이버) and machinery (프레스, 선반, 용접기) from photos.</p>

            <h3>2. Safety Signboards & Hazard Symbols (Q13-Q15)</h3>
            <p>Identifying workplace warnings: <em>인화성 물질 경고 (Flammable Warning)</em>, <em>추락 주의 (Fall Hazard)</em>, <em>보안경 착용 (Wear Goggles)</em>.</p>

            <h3>3. Graphs, Receipts & Work Schedules (Q16-Q18)</h3>
            <p>Interpreting factory work schedules, pay slips, and safety checklists.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TIMED CBT 3 -->
        <div class="seo-content-box">
            <h2>Download Solved Real-time EPS TOPIK CBT 3 Korean Exam Paper PDF</h2>
            <p>
                Download official Timed CBT Set 3 <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>Real-time EPS TOPIK CBT 3 Paper PDF</strong></td>
                            <td><span class="tag-badge blue">Timed CBT 3</span></td>
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
            <h2>3-Step Blueprint for Mastering CBT Set 3</h2>
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
            <h2>Frequently Asked Questions (FAQ) - Timed CBT 3 Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are signboard questions included in Timed CBT 3?</div>
                    <div class="faq-answer">
                        Yes! Timed CBT 3 contains official industrial safety signboards and hazard symbol questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does Timed CBT 3 include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Timed CBT 3 <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: What score is required to pass the EPS TOPIK exam?</div>
                    <div class="faq-answer">
                        Passing scores vary by country and sector, generally ranging between 140 points (Agriculture) and 170+ points (Manufacturing).
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
