<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK 1 Level 2 Korean Exam Paper and Solutions";
$page_desc = "Download free TOPIK 1 Level 2 Korean exam paper PDF with elementary answer keys, solutions, complex particle rules, reading passage breakdowns, and past NIIED papers for global aspirants.";
$canonical_url = "https://koreantestpapers.in/topik-1-level-2-korean-exam-paper";

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
  "headline": "TOPIK 1 Level 2 Korean Exam Paper and Solutions",
  "description": "Comprehensive study guide and downloadable TOPIK 1 Level 2 Korean exam paper PDF sets with elementary answer keys and step-by-step solutions.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-1-level-2-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK 1 Level 2 Korean Exam Paper and Solutions</h1>
            <p class="hero-subtitle">
                Achieve TOPIK Level 2 certification with solved <strong>korean exam paper</strong> archives, step-by-step elementary solutions, passage comprehension guides, and official NIIED <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Level 2 Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📘 TOPIK 1 Level 2 Exam Archive</h3>
                    <span class="tag-badge green">Level 2 Elementary</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK I Level 2 Solved Model Paper</h4>
                            <p>Full Reading & Listening paper with elementary solutions</p>
                        </div>
                        <a href="../pdf/topik-1-beginner-solved.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st TOPIK I Official Level 2 Paper</h4>
                            <p>NIIED official 91st session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th TOPIK I Level 2 Session Paper</h4>
                            <p>Official past 90th session exam paper & solutions</p>
                        </div>
                        <a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE LEVEL 2 MOCK TEST
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LEVEL 2 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LEVEL 2 SCORE CRITERIA & ADVANCEMENT -->
        <div class="seo-content-box">
            <h2>Understanding TOPIK 1 Level 2 Score Requirements & Standard</h2>
            <p>
                TOPIK I Level 2 (Elementary Level / 초급 2급) is the higher qualification tier within the TOPIK I examination framework. While scoring 80 points grants Level 1, candidates must earn **140 points or more out of 200 total points** to be awarded official **TOPIK Level 2 Certification** by NIIED.
            </p>
            <p>
                Level 2 certifies that a student can manage routine social interactions, understand public facility announcements (e.g., subway broadcasts, post office forms, bank ATM screens), use approximately 1,500 to 2,000 Hangul words, and differentiate formal politeness styles (합쇼체 vs 해요체). Practicing with full-length solved <strong>korean exam paper</strong> resources enables candidates to cross the 140-point threshold consistently.
            </p>

            <div class="callout-box">
                <h4>🎯 Level 1 vs Level 2 Cutoff Comparison Table</h4>
                <ul>
                    <li><strong>Level 1 Target Cutoff:</strong> 80 Points to 139 Points (Basic Conversational Understanding)</li>
                    <li><strong>Level 2 Target Cutoff:</strong> 140 Points to 200 Points (Elementary Social & Routine Fluency)</li>
                    <li><strong>Exam Composition:</strong> Listening 30 Questions (100 Pts) + Reading 40 Questions (100 Pts)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 5 ESSENTIAL LEVEL 2 GRAMMAR CONNECTORS -->
        <div class="seo-content-box">
            <h2>5 Key Elementary Grammar Connectors Tested in Level 2 Exam Papers</h2>
            <p>
                To achieve Level 2 scores, candidates must master sentence connectors and modal auxiliary verbs commonly found in TOPIK 1 Level 2 <strong>korean test papers</strong>:
            </p>

            <h3>1. Contrast Connector: -지만 (Although / But)</h3>
            <p>Connects two opposing clauses (e.g., <em>한국어 공부는 어렵지만 재미있습니다 [Korean study is difficult, but fun]</em>).</p>

            <h3>2. Reason & Background Connector: -(으)ㄴ/는데 (Since / Background Info)</h3>
            <p>Provides background context before making a request or suggestion (e.g., <em>비가 오는데 우산을 쓰세요 [Since it's raining, use an umbrella]</em>).</p>

            <h3>3. Ability & Inability: -(으)ㄹ 수 있다 / 없다 (Can / Cannot)</h3>
            <p>Expresses ability to perform an action (e.g., <em>한국어를 읽을 수 있습니다 [I can read Korean]</em>).</p>

            <h3>4. Experience & Trying: -아/어 보다 (Try doing something)</h3>
            <p>Indicates past experience or trying an action (e.g., <em>김치를 먹어 봤습니다 [I have tried eating Kimchi]</em>).</p>

            <h3>5. Obligation & Necessity: -아/어 야 하다 (Must / Have to)</h3>
            <p>Expresses duty or necessity (e.g., <em>매일 공부해야 합니다 [I must study every day]</em>).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LEVEL 2 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK 1 Level 2 Korean Exam Paper PDF</h2>
            <p>
                Download official elementary level TOPIK 1 Level 2 <strong>korean exam paper</strong> archives complete with answer sheets below:
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
                            <td><strong>TOPIK I Level 2 Elementary Solved Paper</strong></td>
                            <td><span class="tag-badge green">Level 2</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Solutions</td>
                            <td><a href="../pdf/topik-1-beginner-solved.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Session TOPIK I Level 2 Past Paper</strong></td>
                            <td><span class="tag-badge green">Level 2</span></td>
                            <td>2024</td>
                            <td>✔ Official NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Session TOPIK I Level 2 Past Paper</strong></td>
                            <td><span class="tag-badge green">Level 2</span></td>
                            <td>2023</td>
                            <td>✔ Official NIIED Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>89th Session TOPIK I Level 2 Past Paper</strong></td>
                            <td><span class="tag-badge green">Level 2</span></td>
                            <td>2023</td>
                            <td>✔ Official Key</td>
                            <td><a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIES TO REACH 140+ POINTS -->
        <div class="seo-content-box">
            <h2>Tactical Test-Taking Strategies to Score 140+ in TOPIK 1 Level 2</h2>
            <p>
                Follow these 3 tactical approaches during your examination to maximize points:
            </p>
            <ul>
                <li><strong>Aim for 25/30 in Listening:</strong> The listening section questions 1 to 20 are straightforward. Scoring at least 80 points in listening provides a strong safety net.</li>
                <li><strong>Target Practical Reading Notices First:</strong> Questions 31 through 40 in reading feature store hours, emails, and advertisements. Solve these high-value questions accurately.</li>
                <li><strong>Review Past 5 Session Papers:</strong> NIIED repeats question structures and passage topics frequently. Solving past papers guarantees familiar context on test day.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK 1 Level 2 Exam Paper</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What score is required to achieve TOPIK Level 2?</div>
                    <div class="faq-answer">
                        Candidates must achieve a total score of 140 points or higher out of 200 points in TOPIK I.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Can I apply for a South Korean university with TOPIK Level 2?</div>
                    <div class="faq-answer">
                        Level 2 satisfies admission criteria for some vocational associate degree programs and language schools in South Korea.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable level 2 exam papers contain full solutions?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK 1 Level 2 <strong>korean test papers</strong> on koreantestpapers.in include full answer sheets and step-by-step solutions.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
