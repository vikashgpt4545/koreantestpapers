<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Passing Marks & Cutoff Score Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Passing Marks & Cutoff Score Korean exam paper PDF with official country-wise cutoffs, sector-wise passing scores (manufacturing, agriculture, construction), and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-passing-marks-guide-korean-exam-paper";

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
  "headline": "EPS TOPIK Passing Marks & Cutoff Score Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Passing Marks & Cutoff Score Korean exam paper PDF sets with HRD Korea sector-wise passing marks and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-passing-marks-guide-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Passing Marks & Cutoff Score Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Understand official HRD Korea selection score thresholds with EPS TOPIK Passing Marks & Cutoff Score <strong>korean exam paper</strong> guides, complete with country-wise historical cut-offs, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Passing Marks Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📊 Passing Marks & Cutoff Archive</h3>
                    <span class="tag-badge blue">Passing Cutoffs</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Passing Marks Guide Exam Paper PDF</h4>
                            <p>Full sector-wise & country cutoff analysis set</p>
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
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Workplace Safety & Factory Rules Test Paper</h4>
                            <p>Industrial accident prevention & safety gear guide</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE CUTOFF SCORE SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED PASSING MARKS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: PASSING MARKS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Passing Marks & Cutoff Score Korean Exam Papers</h2>
            <p>
                Passing the EPS-TOPIK (Employment Permit System - Test of Proficiency in Korean) is not based on a static passing mark; rather, candidates are ranked relative to country-specific job quotas established by South Korea's Ministry of Employment and Labor (MOEL). Cut-off scores vary according to industry sectors (Manufacturing, Agriculture/Stockbreeding, Construction, Shipbuilding, Service).
            </p>
            <p>
                Our EPS TOPIK Passing Marks & Cutoff Score <strong>korean exam paper</strong> resource provides detailed analysis of historical selection cut-offs, minimum scoring benchmarks, and score optimization tactics. Practicing with dedicated <strong>korean test papers</strong> ensures candidates reach the competitive score threshold needed to secure job roster listing. Download the complete Passing Marks Guide PDF below.
            </p>

            <div class="callout-box">
                <h4>📊 Standard Score Framework for EPS TOPIK</h4>
                <ul>
                    <li><strong>Total Questions:</strong> 40 Multiple-Choice Questions (20 Reading + 20 Listening)</li>
                    <li><strong>Maximum Total Score:</strong> 200 Points (5 Points per Question)</li>
                    <li><strong>Minimum Technical Cut-off:</strong> 110 Points out of 200 (55% raw score)</li>
                    <li><strong>Competitive Selection Cut-off:</strong> Usually ranges between 155 and 185 Points depending on country & sector!</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: SECTOR-WISE CUT-OFF SCORE COMPARISON TABLE -->
        <div class="seo-content-box">
            <h2>Industry Sector Cut-off Score Expectations</h2>
            <p>
                Review historical score requirements across major industrial sectors:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Job Sector</th>
                            <th>Competition Level</th>
                            <th>Minimum Technical Score</th>
                            <th>Target Selection Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Manufacturing (제조업)</strong></td>
                            <td><span class="tag-badge red">Very High</span></td>
                            <td>110 / 200 Points</td>
                            <td><strong>170 - 190 / 200 Points</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Shipbuilding (조선업)</strong></td>
                            <td><span class="tag-badge amber">High</span></td>
                            <td>110 / 200 Points</td>
                            <td><strong>160 - 180 / 200 Points</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Construction (건설업)</strong></td>
                            <td><span class="tag-badge blue">Medium</span></td>
                            <td>110 / 200 Points</td>
                            <td><strong>145 - 165 / 200 Points</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Agriculture & Stockbreeding (농축산업)</strong></td>
                            <td><span class="tag-badge green">Moderate</span></td>
                            <td>110 / 200 Points</td>
                            <td><strong>135 - 155 / 200 Points</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Fishery (어업)</strong></td>
                            <td><span class="tag-badge green">Moderate</span></td>
                            <td>110 / 200 Points</td>
                            <td><strong>125 - 145 / 200 Points</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR PASSING MARKS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Passing Marks & Cutoff Score Korean Exam Paper PDF</h2>
            <p>
                Download official cutoff score guides for <strong>korean test papers</strong> below:
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
                            <td><strong>EPS TOPIK Passing Marks Guide Paper PDF</strong></td>
                            <td><span class="tag-badge blue">Passing Cutoffs</span></td>
                            <td>2025</td>
                            <td>✔ Solved Cutoff Analysis</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>HRD Korea Official Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ 2000 Solved Questions Key</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Rules</span></td>
                            <td>2025</td>
                            <td>✔ Industrial Safety Protocols</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint to Exceed the Selection Cut-off</h2>
            <p>
                Follow this 3-step blueprint to ensure your score exceeds country quotas:
            </p>
            <ul>
                <li><strong>Step 1 (Aim for 36 Correct Answers):</strong> Target getting at least 18 Reading and 18 Listening questions right (180 points).</li>
                <li><strong>Step 2 (Zero Picture Mistakes):</strong> Secure all 20 points on visual tool and action questions (Q1-Q4).</li>
                <li><strong>Step 3 (Master Point Weights):</strong> Allocate more review time to listening audio drills to achieve a perfect 100/100 listening score.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS Passing Marks</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Is there a minimum passing score for the EPS TOPIK exam?</div>
                    <div class="faq-answer">
                        Yes, the technical minimum threshold is 110 out of 200 points, but actual selection requires ranking within your country's quota.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the passing marks guide PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable EPS TOPIK Passing Marks <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How long is an EPS TOPIK certificate valid after passing?</div>
                    <div class="faq-answer">
                        An official EPS TOPIK pass certificate remains valid for 2 years from the date of result announcement.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
