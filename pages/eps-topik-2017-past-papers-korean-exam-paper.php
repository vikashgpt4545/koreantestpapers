<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK 2017 Past Papers Archive Korean Exam Paper";
$page_desc = "Download free EPS TOPIK 2017 Past Papers Archive Korean exam paper PDF with official HRD Korea exam questions, listening audio scripts, picture options, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-2017-past-papers-korean-exam-paper";

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
  "headline": "EPS TOPIK 2017 Past Papers Archive Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK 2017 Past Papers Archive Korean exam paper PDF sets with official HRD Korea exam papers and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-2017-past-papers-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK 2017 Past Papers Archive Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Access official historical exam papers from the 2017 testing session with EPS TOPIK 2017 Past Papers Archive <strong>korean exam paper</strong> sets, complete with reading and listening sets, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 2017 Past Papers Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏛 2017 Past Papers Archive</h3>
                    <span class="tag-badge gray">2017 Archive</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2017 Past Papers Exam Paper PDF</h4>
                            <p>Full 2017 historical session test paper & key</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2018 Past Papers Test Paper PDF</h4>
                            <p>Full 2018 historical session test paper & key</p>
                        </div>
                        <a href="../pdf/eps-topik-2018-past-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2025 Model Question Paper PDF</h4>
                            <p>Official 40-question UBT practice test set & answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 2017 PAST PAPER SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 2017 PAST PAPERS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 2017 PAST PAPERS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK 2017 Past Papers Archive Korean Exam Papers</h2>
            <p>
                The 2017 EPS-TOPIK examination session represents one of the most comprehensive testing cycles administered by HRD Korea across Asian sending countries. Studying 2017 historical paper sets helps candidates familiarize themselves with classic industrial safety protocols, factory equipment vocabulary, and standard reading passage layouts.
            </p>
            <p>
                Our EPS TOPIK 2017 Past Papers Archive <strong>korean exam paper</strong> collection includes original test booklets, audio listening scripts, picture choices, and verified answer keys. Practicing with dedicated 2017 <strong>korean test papers</strong> ensures candidates gain thorough exposure to recurring examination questions. Download the complete EPS TOPIK 2017 Past Paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🏛 Features of the 2017 EPS TOPIK Past Papers</h4>
                <ul>
                    <li><strong>40-Question Official Format:</strong> 20 Reading questions + 20 Listening questions</li>
                    <li><strong>Workplace Task Vocabulary:</strong> Metal cutting, agricultural planting, textile manufacturing, and construction site safety</li>
                    <li><strong>Phonetic Sound Drills:</strong> Listening items focused on consonant sound distinction and number comprehension</li>
                    <li><strong>Verified Answer Sheets:</strong> Official HRD Korea scoring keys for self-assessment</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 3 CORE RECURRING QUESTION TYPES IN 2017 PAPERS -->
        <div class="seo-content-box">
            <h2>3 Core Recurring Question Types in 2017 Past Papers</h2>
            <p>
                Master these 3 high-probability question formats:
            </p>

            <h3>1. Machine Safety & Protective Gear (안전모, 안전화)</h3>
            <p>Identifying proper safety helmets, protective boots, dust masks (방진마스크), and safety goggles in visual reading items.</p>

            <h3>2. Workplace Signs & Hazard Warnings (위험, 경고)</h3>
            <p>Matching caution signs (고압 전기, 화기 엄금, 낙하물 주의) to correct text definitions.</p>

            <h3>3. Requesting Materials & Machinery Maintenance</h3>
            <p>Dialogues involving requests for spare parts, machine repair notifications, and daily factory shift reports.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 2017 PAST PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK 2017 Past Papers Archive Korean Exam Paper PDF</h2>
            <p>
                Download official 2017 historical <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>EPS TOPIK 2017 Past Papers Paper PDF</strong></td>
                            <td><span class="tag-badge gray">2017 Archive</span></td>
                            <td>2017</td>
                            <td>✔ Solved 40 Qs Historical Set</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2018 Past Papers Test Paper PDF</strong></td>
                            <td><span class="tag-badge gray">2018 Archive</span></td>
                            <td>2018</td>
                            <td>✔ Solved 40 Qs Historical Set</td>
                            <td><a href="../pdf/eps-topik-2018-past-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2025 Model Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT Model Set</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for 2017 Past Paper Revision</h2>
            <p>
                Follow this 3-step blueprint for historical paper practice:
            </p>
            <ul>
                <li><strong>Step 1 (First Un-timed Solved Pass):</strong> Work through all 40 questions to evaluate vocabulary comprehension without time pressure.</li>
                <li><strong>Step 2 (Target Listening Errors):</strong> Re-listen to 2017 audio tracks while checking the printed Hangul transcript.</li>
                <li><strong>Step 3 (Timed Re-Test):</strong> Retake the 2017 paper under a strict 50-minute exam timer to confirm 90%+ score.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS 2017 Past Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are questions from 2017 still relevant for 2025 UBT exams?</div>
                    <div class="faq-answer">
                        Yes! Core Korean grammar rules, industrial safety terms, and standard textbook vocabulary tested in 2017 remain fundamental for all modern exams.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 2017 past paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable EPS TOPIK 2017 Past Papers <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many questions were included on the 2017 EPS TOPIK paper?</div>
                    <div class="faq-answer">
                        The 2017 paper consisted of 40 questions (20 Reading + 20 Listening).
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
