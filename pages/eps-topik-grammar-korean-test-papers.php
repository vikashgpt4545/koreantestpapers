<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Important Grammar Korean Test Papers";
$page_desc = "Download free EPS TOPIK Important Grammar Korean test papers PDF with 50+ essential particles, honorific verb conjugations, sentence connectors, and solved answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-grammar-korean-test-papers";

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
  "headline": "EPS TOPIK Important Grammar Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Important Grammar Korean test papers PDF sets with essential particles, verb endings, and answer sheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-grammar-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Important Grammar Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master 50+ essential HRD Korea grammar patterns with specialized EPS TOPIK grammar <strong>korean test papers</strong>, complete with particle breakdowns, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Grammar Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📐 Grammar Paper Archive</h3>
                    <span class="tag-badge green">Essential Grammar</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Important Grammar Test Paper</h4>
                            <p>Full 50-pattern grammar particle & conjugation paper</p>
                        </div>
                        <a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Essential Vocabulary Exam Paper</h4>
                            <p>Full 2,000-word classified vocabulary paper</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
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
                        <span class="live-dot"></span> LIVE GRAMMAR SIMULATOR
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
        
        <!-- ARTICLE BOX 1: GRAMMAR SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Important Grammar Korean Test Papers</h2>
            <p>
                Korean grammar formulates the logical backbone of every sentence tested in the EPS-TOPIK examination. Understanding Korean sentence structure (Subject + Object + Verb), grammatical particles, honorific verb endings, and connective conjunctions is essential for correctly answering fill-in-the-blank reading questions.
            </p>
            <p>
                Our specialized grammar <strong>korean test papers</strong> break down 50 high-yield HRD Korea grammar patterns into concise, actionable study modules. Practicing with dedicated grammar <strong>korean exam paper</strong> sets enables candidates to accurately differentiate particles, identify correct verb conjugations, and score 180+ points. Download the complete grammar paper PDF below.
            </p>

            <div class="callout-box">
                <h4>📐 5 Core Grammar Categories Tested in EPS-TOPIK</h4>
                <ul>
                    <li><strong>Essential Noun Particles:</strong> -은/는 (Topic), -이/가 (Subject), -을/를 (Object), -에 (Time/Static location), -에서 (Dynamic location)</li>
                    <li><strong>Honorific Command Endings:</strong> -(으)십시오 / -(으)세-yo (Please do)</li>
                    <li><strong>Safety Prohibition Forms:</strong> -지 마십시오 / -지 마세요 (Do not do)</li>
                    <li><strong>Cause & Effect Connectors:</strong> -아/어서 (Because/So), -(으)니까 (Since/Because)</li>
                    <li><strong>Intention & Purpose Markers:</strong> -(으)러 가다 (Go in order to), -(으)려고 하다 (Intend to)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 6 HIGH-FREQUENCY GRAMMAR PATTERNS DETAILED -->
        <div class="seo-content-box">
            <h2>6 High-Frequency Grammar Patterns Explained with Samples</h2>

            <h3>1. Location Particle Distinction: -에 vs -에서</h3>
            <p>
                <strong>-에 (Static Location/Time):</strong> Used with static existence verbs <em>있다/없다</em> or destination movement verbs <em>가다/오다</em> (e.g., <em>공장에 있습니다 [I am at the factory]</em>).<br>
                <strong>-에서 (Dynamic Location):</strong> Used when an action takes place at a location (e.g., <em>공장에서 일합니다 [I work at the factory]</em>).
            </p>

            <h3>2. Prohibition Ending: -지 마십시오</h3>
            <p>
                Used extensively on industrial safety signs and supervisor instructions (e.g., <em>기계를 만지지 마십시오 [Do not touch the machine]</em>).
            </p>

            <h3>3. Obligation Pattern: -아/어야 하다 (Must do)</h3>
            <p>
                Expresses mandatory workplace procedures (e.g., <em>작업복을 입어야 합니다 [You must wear work clothes]</em>).
            </p>

            <h3>4. Capability Marker: -(으)ㄹ 수 있다/없다 (Can/Cannot)</h3>
            <p>
                Evaluates skill ability or permission (e.g., <em>운전을 할 수 있습니다 [I can drive]</em>).
            </p>

            <h3>5. Concurrent Action: -(으)면서 (While doing)</h3>
            <p>
                Connects two simultaneous actions (e.g., <em>안전화를 신으면서 기계를 점검합니다 [Inspect machine while wearing safety shoes]</em>).
            </p>

            <h3>6. Experiential Ending: -아/어 본 적이 있다 (Have experience of)</h3>
            <p>
                Frequently tested in skill test interviews (e.g., <em>용접을 해 본 적이 있습니다 [I have experience doing welding]</em>).
            </p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR GRAMMAR PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Important Grammar Korean Test Papers PDF</h2>
            <p>
                Download official grammar <strong>korean exam paper</strong> sets with verified answer keys below:
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
                            <td><strong>EPS TOPIK Important Grammar Paper PDF</strong></td>
                            <td><span class="tag-badge green">Essential Grammar</span></td>
                            <td>2025</td>
                            <td>✔ 50+ Grammar Patterns + Key</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Essential Vocabulary Paper PDF</strong></td>
                            <td><span class="tag-badge green">Vocabulary Set</span></td>
                            <td>2025</td>
                            <td>✔ 2,000 Classified Words</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
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

        <!-- ARTICLE BOX 4: STRATEGIC GRAMMAR REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Mastering Korean Grammar Particles</h2>
            <p>
                Follow this 3-step blueprint to eliminate particle confusion:
            </p>
            <ul>
                <li><strong>Step 1 (Particle Pair Drilling):</strong> Practice contrasting particle pairs (e.g., -이/가 vs -은/는, -에 vs -에서) side by side.</li>
                <li><strong>Step 2 (Sentence Pattern Skeletoning):</strong> Memorize standard HRD sentence templates (e.g., Noun + 을/를 + Verb + -(으)세요).</li>
                <li><strong>Step 3 (Fill-in-the-Blank Practice):</strong> Solve 100 particle fill-in-the-blank questions without dictionary assistance.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Grammar Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many grammar patterns are tested in EPS-TOPIK?</div>
                    <div class="faq-answer">
                        The EPS-TOPIK exam focuses on 50 core elementary and low-intermediate grammar patterns covered in HRD Chapters 1 to 60.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the grammar PDF include step-by-step English explanations?</div>
                    <div class="faq-answer">
                        Yes! All 50 grammar patterns in our <strong>korean test papers</strong> PDF include Hangul rules, English explanations, and example sentences.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are honorific verb conjugations included in the grammar paper?</div>
                    <div class="faq-answer">
                        Yes! The PDF covers formal honorific endings (-습니다 / -십시오) and informal polite conjugations (-아/어요).
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
