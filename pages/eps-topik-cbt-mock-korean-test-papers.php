<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Computer Based CBT Korean Test Papers";
$page_desc = "Download free EPS TOPIK Computer Based CBT Korean test papers PDF with online exam simulation tips, mouse navigation rules, timer pacing, and solved practice sets.";
$canonical_url = "https://koreantestpapers.in/eps-topik-cbt-mock-korean-test-papers";

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
  "headline": "EPS TOPIK Computer Based CBT Korean Test Papers",
  "description": "Comprehensive guide and downloadable EPS TOPIK Computer Based CBT Korean test papers PDF sets with CBT software navigation and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-cbt-mock-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Computer Based CBT Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master official HRD Korea Computer-Based Test (CBT) interface rules with free solved <strong>korean test papers</strong>, interactive mock test widgets, software timer pacing guides, and downloadable <strong>korean exam paper</strong> archives.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: CBT Test Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>💻 CBT Mock Test Archive</h3>
                    <span class="tag-badge green">CBT Interactive</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK CBT Official Model Test Paper</h4>
                            <p>Full 40-question CBT mock set with answer sheet</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-practice.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>CBT Software Interface Navigation Guide</h4>
                            <p>Step-by-step tutorial on CBT screen controls & timer</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2025 EPS TOPIK Solved CBT Practice Set</h4>
                            <p>Solved 2025 CBT model reading & listening paper</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> REAL CBT SOFTWARE SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED CBT GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: CBT EXAMINATION SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Computer Based CBT Korean Test Papers</h2>
            <p>
                The Computer-Based Test (CBT) system is the official examination delivery method utilized by HRD Korea across international test centers in India, Nepal, Sri Lanka, Vietnam, Indonesia, and Bangladesh. Under the CBT system, paper question booklets are replaced entirely by secure computer terminals equipped with individual headphones.
            </p>
            <p>
                The CBT exam consists of **40 total questions** divided into two equal sections: Reading (Q1 - Q20 | 25 Minutes) and Listening (Q21 - Q40 | 25 Minutes). Candidates select choices on screen using a mouse or touch monitor. Practicing with online CBT <strong>korean test papers</strong> ensures candidates become fully comfortable with screen navigation, headphone volume adjustment, and countdown timers.
            </p>

            <div class="callout-box">
                <h4>💻 HRD Korea CBT Software Structure</h4>
                <ul>
                    <li><strong>Reading Module:</strong> 20 Questions (25-minute strict countdown timer)</li>
                    <li><strong>Listening Module:</strong> 20 Questions (25-minute audio track driven playback)</li>
                    <li><strong>Total Score:</strong> 200 Maximum Points (5 Points per question)</li>
                    <li><strong>Screen Controls:</strong> [Previous Question], [Next Question], [Question Navigation Grid], [Volume Controller]</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 5 ESSENTIAL CBT SOFTWARE SCREEN CONTROLS -->
        <div class="seo-content-box">
            <h2>5 Essential CBT Screen Controls Every Candidate Must Know</h2>
            <p>
                Understanding the official HRD Korea CBT testing software layout eliminates accidental mistakes on exam day:
            </p>

            <h3>1. Question Number Navigation Palette (문항 바로가기)</h3>
            <p>A right-hand grid displaying numbers 1 through 20. Answered questions turn blue, while unanswered items remain white. Click any number to jump directly to that question.</p>

            <h3>2. Audio Volume Calibration Bar (음량 조절)</h3>
            <p>Located in the top right header. Test headphones prior to starting and adjust volume sliders to suit your comfort level.</p>

            <h3>3. Real-Time Countdown Timer (남은 시간)</h3>
            <p>Displays remaining minutes and seconds. The timer turns red during the final 3 minutes of the reading section.</p>

            <h3>4. Next Question [다음] & Previous Question [이전] Buttons</h3>
            <p>Large buttons located at the bottom center of the software screen for sequential navigation.</p>

            <h3>5. Final Exam Submission Button (시험 제출)</h3>
            <p>Appears after answering Question 20 in reading and Question 40 in listening. Clicking this submits your answers permanently.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR CBT PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK CBT Mock Korean Test Papers PDF</h2>
            <p>
                Download authentic CBT mock <strong>korean exam paper</strong> sets complete with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Solutions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>EPS TOPIK CBT Official Practice Paper</strong></td>
                            <td><span class="tag-badge green">CBT Mock</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + CBT Key</td>
                            <td><a href="../pdf/eps-topik-cbt-practice.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2025 EPS TOPIK Model CBT Test Set</strong></td>
                            <td><span class="tag-badge green">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master 2000 CBT Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved CBT Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: CBT TIMING PACING STRATEGIES -->
        <div class="seo-content-box">
            <h2>Pro CBT Exam Pacing & Time Management Rules</h2>
            <p>
                Follow these 3 time management rules to ensure you complete all 40 CBT questions:
            </p>
            <ul>
                <li><strong>Rule 1 (1-Minute Limit):</strong> Spend no more than 1 minute per question on Questions 1 to 14 in the reading section.</li>
                <li><strong>Rule 2 (Review Unanswered Items):</strong> Use the navigation palette to verify that no question remains white (unanswered) before the timer expires.</li>
                <li><strong>Rule 3 (Listen to Track Playback 1):</strong> Focus 100% on the first audio playback to select your answer immediately, using the second playback to double-check.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK CBT Mock Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Can I change my answer after selecting an option in CBT software?</div>
                    <div class="faq-answer">
                        Yes! You can change your chosen option as many times as you like before clicking the final submission button or before the section timer expires.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are scores shown immediately after completing the CBT test?</div>
                    <div class="faq-answer">
                        In official HRD Korea CBT exams, raw score tallies are displayed on screen immediately upon completing the exam.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable CBT mock papers include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable CBT <strong>korean exam paper</strong> sets on koreantestpapers.in include full answer sheets.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
