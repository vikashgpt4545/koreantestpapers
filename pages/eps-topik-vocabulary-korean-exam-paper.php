<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Essential Vocabulary Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Essential Vocabulary Korean exam paper PDF with 2000+ HRD Korea factory words, antonyms, synonyms, tools, safety terms, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-vocabulary-korean-exam-paper";

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
  "headline": "EPS TOPIK Essential Vocabulary Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Essential Vocabulary Korean exam paper PDF sets with 2000+ workplace words and answer sheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-vocabulary-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Essential Vocabulary Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Master 2,000+ official HRD Korea workplace words with essential EPS TOPIK vocabulary <strong>korean exam paper</strong> sets, complete with flashcard drills, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Vocabulary Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📖 Vocabulary Paper Archive</h3>
                    <span class="tag-badge green">Essential Vocab</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Essential Vocabulary Exam Paper</h4>
                            <p>Full 2,000-word classified vocabulary test paper</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>HRD Korea Official 60-Chapter Book PDF</h4>
                            <p>Complete official textbook vocabulary list</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Important Grammar Paper PDF</h4>
                            <p>Essential grammar particles & sentence endings</p>
                        </div>
                        <a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE VOCABULARY DRILL
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED VOCABULARY GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: VOCABULARY MASTERY IMPORTANCE -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Essential Vocabulary Korean Exam Papers</h2>
            <p>
                Vocabulary mastery is the single most critical factor for achieving a high score on the EPS-TOPIK examination. Over 75% of reading and listening questions test direct comprehension of workplace terminology, tool names, safety procedures, and administrative Korean words.
            </p>
            <p>
                Our essential vocabulary <strong>korean exam paper</strong> compilation organizes over 2,000 official HRD Korea textbook terms into clear thematic categories. Practicing with specialized vocabulary <strong>korean test papers</strong> ensures candidate speed, accuracy, and confidence on test day. Download the complete vocabulary paper PDF below.
            </p>

            <div class="callout-box">
                <h4>📖 5 Core Vocabulary Categories Tested in EPS-TOPIK</h4>
                <ul>
                    <li><strong>Industrial Tools & Machinery:</strong> 망치 (Hammer), 드라이버 (Screwdriver), 프레스 (Press Machine), 절단기 (Cutter)</li>
                    <li><strong>Workplace Safety Gear:</strong> 안전모 (Safety Helmet), 보안경 (Safety Glasses), 마스크 (Dust Mask), 안전화 (Safety Shoes)</li>
                    <li><strong>Work Operations Verbs:</strong> 자르다 (Cut), 조립하다 (Assemble), 운반하다 (Transport), 포장하다 (Pack)</li>
                    <li><strong>Medical & Symptoms:</strong> 감기 (Cold), 두통 (Headache), 소화제 (Digestive Pill), 연고 (Ointment)</li>
                    <li><strong>Public & Administrative Terms:</strong> 신분증 (ID Card), 체류 기간 (Period of Stay), 외국인등록증 (Alien Registration Card)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: TOP HIGH-FREQUENCY ANTONYMS & SYNONYMS -->
        <div class="seo-content-box">
            <h2>High-Frequency Antonyms & Synonyms in EPS TOPIK Papers</h2>
            <p>
                Master these essential word pairs frequently tested in fill-in-the-blank questions:
            </p>

            <h3>Essential Antonym Pairs (반대말)</h3>
            <ul>
                <li><strong>켜다 (Turn on)</strong> ↔ <strong>끄다 (Turn off)</strong></li>
                <li><strong>올리다 (Raise)</strong> ↔ <strong>내리다 (Lower)</strong></li>
                <li><strong>열다 (Open)</strong> ↔ <strong>닫다 (Close)</strong></li>
                <li><strong>입사하다 (Join company)</strong> ↔ <strong>퇴사하다 (Resign from company)</strong></li>
                <li><strong>근무하다 (Work)</strong> ↔ <strong>쉬다 (Rest)</strong></li>
            </ul>

            <h3>Essential Synonym Pairs (비슷한 말)</h3>
            <ul>
                <li><strong>일하다 (Work)</strong> ≈ <strong>근무하다 (Work/Be on duty)</strong></li>
                <li><strong>고치다 (Repair)</strong> ≈ <strong>수리하다 (Repair/Fix)</strong></li>
                <li><strong>바꾸다 (Change)</strong> ≈ <strong>교환하다 (Exchange)</strong></li>
                <li><strong>만들다 (Make)</strong> ≈ <strong>제작하다 (Produce/Manufacture)</strong></li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR VOCABULARY PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Essential Vocabulary Korean Exam Paper PDF</h2>
            <p>
                Download official vocabulary <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>EPS TOPIK Essential Vocabulary Paper PDF</strong></td>
                            <td><span class="tag-badge green">Essential Vocab</span></td>
                            <td>2025</td>
                            <td>✔ 2,000 Classified Words + Key</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>HRD Korea Official Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ 2000 Solved Questions</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Important Grammar Paper PDF</strong></td>
                            <td><span class="tag-badge green">Grammar Set</span></td>
                            <td>2025</td>
                            <td>✔ Particles & Conjugations</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC VOCABULARY MEMORIZATION METHOD -->
        <div class="seo-content-box">
            <h2>3-Step Memorization Method for 2,000 EPS Words</h2>
            <p>
                Follow this 3-step system to retain 50 new Hangul words every day:
            </p>
            <ul>
                <li><strong>Step 1 (Thematic Grouping):</strong> Group words by chapter theme (e.g., tools together, medical terms together) rather than random alphabetical order.</li>
                <li><strong>Step 2 (Visual Image Linking):</strong> Link each tool or safety sign word directly to a picture image instead of translating to English.</li>
                <li><strong>Step 3 (Daily Quiz Drills):</strong> Re-test yesterday's vocabulary using flashcards before starting today's new word list.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Vocabulary Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many words should I memorize for the EPS-TOPIK exam?</div>
                    <div class="faq-answer">
                        Memorizing the core 2,000 words from the official HRD Korea 60-chapter textbook guarantees over 85% question familiarity.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the vocabulary PDF include English translations?</div>
                    <div class="faq-answer">
                        Yes! Our essential vocabulary <strong>korean exam paper</strong> PDF features Hangul terms alongside clear English translations.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are factory safety terms included in the vocabulary paper?</div>
                    <div class="faq-answer">
                        Yes! The PDF includes complete safety signboard lists, gear names, and factory emergency protocols.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
