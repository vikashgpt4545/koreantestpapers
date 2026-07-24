<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Basic Grammar & Verb Korean Test Papers";
$page_desc = "Download free Korean Basic Grammar & Verb Korean test papers PDF with particle usage (-이/가, -은/는, -을/를), verb conjugations, example drills, and answer keys.";
$canonical_url = "https://koreantestpapers.in/korean-basic-grammar-quiz-korean-test-papers";

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
  "headline": "Korean Basic Grammar & Verb Korean Test Papers",
  "description": "Comprehensive study guide and downloadable Korean Basic Grammar & Verb Korean test papers PDF sets with particle usage rules, verb conjugation charts, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-basic-grammar-quiz-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Korean Basic Grammar & Verb Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master essential Korean sentence structures, particles, and verb conjugations with official basic grammar <strong>korean test papers</strong>, complete with practice quizzes, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Basic Grammar Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📘 Basic Grammar & Verbs Archive</h3>
                    <span class="tag-badge green">Basic Grammar</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Korean Basic Grammar & Verb Test Paper PDF</h4>
                            <p>Full particle usage, tense conjugation & drill paper</p>
                        </div>
                        <a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Vocabulary & Verb Root Guide</h4>
                            <p>Essential 1000 verbs and adjectives with Hangul roots</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
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
                        <span class="live-dot"></span> LIVE GRAMMAR QUIZ SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED GRAMMAR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: BASIC GRAMMAR OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Korean Basic Grammar & Verb Korean Test Papers</h2>
            <p>
                Understanding basic Korean sentence construction is the fundamental stepping stone for passing both EPS-TOPIK and TOPIK I/II examinations. Unlike English (Subject-Verb-Object), Korean follows a strict Subject-Object-Verb (SOV) structure where grammar particles (조사) mark grammatical roles and verbs conjugate at the very end of sentences.
            </p>
            <p>
                Our Korean basic grammar <strong>korean test papers</strong> break down complex grammar patterns into easy-to-understand rules. Practicing with dedicated grammar <strong>korean exam paper</strong> sets enables candidates to identify correct particles, verb tenses (past, present, future), and honorific endings quickly. Download the complete basic grammar paper PDF below.
            </p>

            <div class="callout-box">
                <h4>📘 Core Elements of Korean Basic Grammar</h4>
                <ul>
                    <li><strong>SOV Word Order:</strong> Subject (주어) + Object (목적어) + Verb (동사)</li>
                    <li><strong>Subject Markers:</strong> -이 (after consonant) / -가 (after vowel) vs Topic Markers -은 / -는</li>
                    <li><strong>Object Markers:</strong> -을 (after consonant) / -를 (after vowel)</li>
                    <li><strong>Informal Polite Endings:</strong> -아/어/여요 (Present) | -았/었/였어요 (Past) | -(으)ㄹ 거예요 (Future)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW GRAMMAR PATTERNS -->
        <div class="seo-content-box">
            <h2>Top 5 High-Frequency Basic Grammar Patterns</h2>
            <p>
                Master these 5 essential grammar structures tested in EPS-TOPIK & TOPIK I:
            </p>

            <h3>1. Time & Place Particles (-에 / -에서)</h3>
            <p><strong>-에:</strong> Marks specific time (e.g., 9시에) or static location (e.g., 집에 있다).<br><strong>-에서:</strong> Marks action location (e.g., 공장에서 일하다).</p>

            <h3>2. Direction & Instrument Particle (-(으)로)</h3>
            <p>Marks direction (e.g., 서울로 가다) or tool used (e.g., 펜으로 쓰다).</p>

            <h3>3. Ability & Inability (-(으)ㄹ 수 있다 / 없다)</h3>
            <p>Expresses capability or impossibility (e.g., 한국어를 할 수 있습니다).</p>

            <h3>4. Sequential Action (-고 나서 / -(으)ㄴ 후에)</h3>
            <p>Expresses action sequence ("after doing X") (e.g., 일하고 나서 쉬어요).</p>

            <h3>5. Intent & Desire (-고 싶다 / -(으)려고 하다)</h3>
            <p>Expresses desire ("want to do") or plan (e.g., 한국에 가고 싶습니다).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR BASIC GRAMMAR PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved Korean Basic Grammar & Verb Korean Test Papers PDF</h2>
            <p>
                Download official basic grammar <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>Korean Basic Grammar & Verb Paper PDF</strong></td>
                            <td><span class="tag-badge green">Basic Grammar</span></td>
                            <td>2025</td>
                            <td>✔ Solved Particle & Verb Drills</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Vocabulary & Verb Root PDF</strong></td>
                            <td><span class="tag-badge green">Vocab & Verbs</span></td>
                            <td>2025</td>
                            <td>✔ 1000 Verbs & Adjectives</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
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
            <h2>3-Step Blueprint for Mastering Korean Grammar</h2>
            <p>
                Follow this 3-step blueprint to eliminate grammar errors:
            </p>
            <ul>
                <li><strong>Step 1 (Memorize Particle Pairs):</strong> Master contrastive particle pairs (-이/가 vs -은/는, -에 vs -에서).</li>
                <li><strong>Step 2 (Practice Conjugation Rules):</strong> Practice regular vs irregular verb conjugations (ㅂ, ㄷ, ㅡ, ㄹ irregulars).</li>
                <li><strong>Step 3 (Complete Sentence Drills):</strong> Fill in missing connectors in sample sentence questions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Basic Grammar Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the difference between -이/가 and -은/는?</div>
                    <div class="faq-answer">
                        -이/가 marks the subject of a specific action or state, while -은/는 marks the main topic, contrast, or general emphasis.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the basic grammar paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable basic grammar <strong>korean exam paper</strong> sets on koreantestpapers.in include complete answer keys and explanations.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many grammar questions appear in EPS TOPIK reading?</div>
                    <div class="faq-answer">
                        Approximately 5 to 7 questions in the reading section directly test particle insertion, verb connection, or sentence structure.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
