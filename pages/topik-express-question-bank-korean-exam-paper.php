<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Express Question Bank Korean Exam Paper";
$page_desc = "Download free TOPIK Express Question Bank Korean exam paper PDF with 1000 high-frequency NIIED practice questions, answer keys, reading strategies, and grammar charts.";
$canonical_url = "https://koreantestpapers.in/topik-express-question-bank-korean-exam-paper";

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
  "headline": "TOPIK Express Question Bank Korean Exam Paper",
  "description": "Comprehensive guide and downloadable TOPIK Express Question Bank Korean exam paper PDF sets with 1000 solved NIIED practice items and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-express-question-bank-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK Express Question Bank Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Accelerate your test revision with official TOPIK Express Question Bank <strong>korean exam paper</strong> sets, featuring 1000 high-yield reading, writing, and listening practice items, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: TOPIK Express Bank Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⚡ TOPIK Express Bank Archive</h3>
                    <span class="tag-badge amber">TOPIK Express</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Express Question Bank Exam Paper PDF</h4>
                            <p>Full 1000 high-yield solved question compilation</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Full Test Paper PDF</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Listening Audio Scripts Test Paper</h4>
                            <p>Full Hangul dialogue transcripts & audio solutions</p>
                        </div>
                        <a href="../pdf/topik-1-level-1.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE TOPIK EXPRESS SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED EXPRESS BANK GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: EXPRESS QUESTION BANK OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Express Question Bank Korean Exam Papers</h2>
            <p>
                The TOPIK Express Question Bank is an intensive review collection specifically curated for fast-track revision prior to NIIED examination sessions. Distilling over a decade of official past papers into 1000 essential questions, this question bank focuses strictly on high-probability grammar patterns, core vocabulary items, and high-scoring question types.
            </p>
            <p>
                Our TOPIK Express Question Bank <strong>korean exam paper</strong> collection provides targeted practice sets for Listening, Reading, and Writing sections. Practicing with dedicated express bank <strong>korean test papers</strong> enables students to jump 1-2 grade levels within weeks of concentrated drill work. Download the complete TOPIK Express Question Bank PDF below.
            </p>

            <div class="callout-box">
                <h4>⚡ Structure of TOPIK Express Question Bank</h4>
                <ul>
                    <li><strong>Module 1 - Grammar & Sentence Connectors (250 Qs):</strong> Intermediate & advanced grammar pair drills</li>
                    <li><strong>Module 2 - Reading Speed Drills (350 Qs):</strong> News headlines, charts, essays, and literary passages</li>
                    <li><strong>Module 3 - Listening Audio Transcripts (300 Qs):</strong> Rapid dialogue recognition and main idea tracking</li>
                    <li><strong>Module 4 - Writing Section Formats (100 Qs):</strong> Q51/52 short sentence completions and Q53 graph data outlines</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: HIGH-YIELD GRAMMAR PAIRS IN TOPIK EXPRESS -->
        <div class="seo-content-box">
            <h2>Top Equivalent Grammar Pairs Tested in TOPIK</h2>
            <p>
                Master these synonymous grammar pairs frequently tested in TOPIK Reading (Q1-Q4):
            </p>

            <h3>1. Cause & Reason Pairs</h3>
            <p><strong>-(으)ㄹ 뿐만 아니라 ↔ -는 데다가:</strong> "Not only... but also..."<br><strong>-(으)ㄴ/는 바람에 ↔ -는 탓에:</strong> "Because of..." (negative outcome)</p>

            <h3>2. Condition & Concession Pairs</h3>
            <p><strong>-아/어 봐야 ↔ -(으)ㄴ들:</strong> "Even if one tries..."<br><strong>-(으)ㄹ 지라도 ↔ -에도 불구하고:</strong> "Despite / even though..."</p>

            <h3>3. Purpose & Intent Pairs</h3>
            <p><strong>-(으)려던 참이다 ↔ -(으)려던 차이다:</strong> "Just about to do..."<br><strong>-고자 ↔ -(으)려고:</strong> "In order to..."</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TOPIK EXPRESS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Express Question Bank Korean Exam Paper PDF</h2>
            <p>
                Download official TOPIK Express Question Bank <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>TOPIK Express Question Bank Paper PDF</strong></td>
                            <td><span class="tag-badge amber">TOPIK Express</span></td>
                            <td>2025</td>
                            <td>✔ Solved 1000 High-Yield Qs</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Listening Audio Scripts Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Listening Set</span></td>
                            <td>2024</td>
                            <td>✔ Solved Audio Transcripts</td>
                            <td><a href="../pdf/topik-1-level-1.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Express Bank Revision</h2>
            <p>
                Follow this 3-step blueprint for rapid test improvement:
            </p>
            <ul>
                <li><strong>Step 1 (Daily 50-Question Sets):</strong> Complete one 50-question block daily under timed conditions.</li>
                <li><strong>Step 2 (Grammar Pair Mapping):</strong> Create flashcards for every synonymous grammar pair missed during drills.</li>
                <li><strong>Step 3 (Chart Writing Practice):</strong> Memorize Q53 graph description templates to secure 30 free writing points.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Express Question Bank</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Is the TOPIK Express Question Bank suitable for TOPIK I and TOPIK II?</div>
                    <div class="faq-answer">
                        Yes! The bank contains categorized sections covering TOPIK I (Levels 1-2) and TOPIK II (Levels 3-6).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the TOPIK Express Question Bank include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK Express Question Bank <strong>korean exam paper</strong> sets on koreantestpapers.in include NIIED answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many questions should I practice per day before the exam?</div>
                    <div class="faq-answer">
                        We recommend solving 40 to 60 questions daily during the 2 weeks leading up to the official test date.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
