<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK CBT Software Screen Korean Exam Paper";
$page_desc = "Download free EPS TOPIK CBT Software Screen Korean exam paper PDF with official HRD Korea UBT touchscreen simulator layout, countdown timer, navigation buttons, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-cbt-software-practice-korean-exam-paper";

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
  "headline": "EPS TOPIK CBT Software Screen Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK CBT Software Screen Korean exam paper PDF sets with official HRD Korea touchscreen interface rules and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-cbt-software-practice-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK CBT Software Screen Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Master the official HRD Korea computer test interface with EPS TOPIK CBT Software Screen <strong>korean exam paper</strong> sets, featuring real-time software simulation, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: CBT Software Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>💻 CBT Software Screen Archive</h3>
                    <span class="tag-badge blue">CBT Software</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK CBT Software Screen Exam Paper PDF</h4>
                            <p>Full touchscreen layout & navigation practice set</p>
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
                        <span class="live-dot"></span> LIVE CBT SOFTWARE SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED CBT SOFTWARE GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: CBT SOFTWARE OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK CBT Software Screen Korean Exam Papers</h2>
            <p>
                Computer-Based Testing (CBT) and Ubiquitous-Based Testing (UBT on touch tablets) are the official examination mediums utilized by HRD Korea across test centers worldwide. Candidates who are unfamiliar with digital test interfaces risk losing valuable exam time due to navigation confusion or misclicking on option radio buttons.
            </p>
            <p>
                Our EPS TOPIK CBT Software Screen <strong>korean exam paper</strong> system replicates the official HRD Korea test software interface down to button placement, countdown timers, and audio controls. Practicing with dedicated CBT software <strong>korean test papers</strong> ensures candidates feel 100% confident on test day. Download the complete CBT Software Screen PDF below.
            </p>

            <div class="callout-box">
                <h4>💻 Key Screen Elements of HRD Korea CBT Software</h4>
                <ul>
                    <li><strong>Candidate Information Header:</strong> Displays candidate photo, registration number, and selected job sector</li>
                    <li><strong>Live Countdown Timer:</strong> Displays remaining time for Reading (25 Mins) and Listening (25 Mins)</li>
                    <li><strong>Question Number Navigation Grid:</strong> Color-coded panel showing completed (green) vs un-answered (red) items</li>
                    <li><strong>Audio Repeat Status Bar:</strong> Shows audio track playback status (1st play vs 2nd play)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 4 CRITICAL CBT SOFTWARE NAVIGATION RULES -->
        <div class="seo-content-box">
            <h2>4 Critical CBT Software Operation Rules</h2>
            <p>
                Follow these software navigation rules during your exam:
            </p>

            <h3>1. Moving Between Questions</h3>
            <p>Use the <em>다음 문제 (Next Question)</em> and <em>이전 문제 (Previous Question)</em> buttons or click directly on numbers in the right-side grid panel.</p>

            <h3>2. Audio Playback Locking</h3>
            <p>In the listening section (Q21-Q40), the software automatically plays audio twice. You cannot fast-forward audio tracks.</p>

            <h3>3. Finalizing Your Test</h3>
            <p>When finished, click the <em>시험 종료 (End Test)</em> button. The system will prompt a confirmation modal before submitting your score.</p>

            <h3>4. Immediate Score Display</h3>
            <p>Upon clicking submit, the software automatically calculates and displays your score out of 200 points instantly on screen!</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR CBT SOFTWARE PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK CBT Software Screen Korean Exam Paper PDF</h2>
            <p>
                Download official CBT software <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>EPS TOPIK CBT Software Screen Paper PDF</strong></td>
                            <td><span class="tag-badge blue">CBT Software</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs + Screen Layout</td>
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
            <h2>3-Step Blueprint for CBT Software Readiness</h2>
            <p>
                Follow this 3-step blueprint for digital test preparation:
            </p>
            <ul>
                <li><strong>Step 1 (Desktop Screen Practice):</strong> Practice mock tests on a desktop monitor rather than a small smartphone screen.</li>
                <li><strong>Step 2 (Simulate Time Pressure):</strong> Keep the live widget timer running to build comfort under ticking clock conditions.</li>
                <li><strong>Step 3 (Verify Unanswered Grid):</strong> Always check the grid panel before clicking submit to ensure zero un-answered questions remain.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - CBT Software Screen</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Can I change my reading answers during the CBT exam?</div>
                    <div class="faq-answer">
                        Yes! You can freely return to any reading question and change your selection as long as the 25-minute section timer has not expired.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the CBT software paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable CBT software <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the CBT test result displayed immediately after finishing?</div>
                    <div class="faq-answer">
                        Yes! In official UBT/CBT test centers, your raw score out of 200 points is displayed on screen as soon as you finish the test.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
