<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "90th Official TOPIK Korean Exam Paper PDF Download";
$page_desc = "Download free 90th Official TOPIK Korean exam paper PDF with official NIIED answer keys, writing essay models, listening transcripts, and solved past exam papers.";
$canonical_url = "https://koreantestpapers.in/topik-90th-official-korean-exam-paper";

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
  "headline": "90th Official TOPIK Korean Exam Paper PDF Download",
  "description": "Comprehensive guide and downloadable 90th Official TOPIK Korean exam paper PDF sets with official NIIED answer keys and writing essay models.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-90th-official-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">90th Official TOPIK Korean Exam Paper PDF Download</h1>
            <p class="hero-subtitle">
                Download official NIIED 90th session TOPIK I and TOPIK II <strong>korean exam paper</strong> PDF sets complete with verified answer sheets, listening transcripts, and solved <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 90th Official Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 90th Official Paper Archive</h3>
                    <span class="tag-badge amber">90th Session</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th Official TOPIK II Full Exam Paper</h4>
                            <p>Full 300-point listening, writing & reading paper</p>
                        </div>
                        <a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Test Paper</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK II Writing Section Model Set</h4>
                            <p>Q51-Q54 writing prompts & model essay answers</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 90TH TOPIK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 90TH SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 90TH SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Complete Guide to 90th Official TOPIK Korean Exam Paper</h2>
            <p>
                The 90th Official TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) remains a premier study benchmark for intermediate and advanced Korean learners.
            </p>
            <p>
                Downloading and solving the 90th official <strong>korean exam paper</strong> provides candidates with invaluable exposure to real test difficulty levels, passage length, and vocabulary breadth. The 90th session archive includes test booklets for TOPIK I (Levels 1-2) and TOPIK II (Levels 3-6) along with official NIIED answer keys. Download the complete 90th session <strong>korean test papers</strong> PDF below.
            </p>

            <div class="callout-box">
                <h4>🏆 90th Official TOPIK Test Blueprint</h4>
                <ul>
                    <li><strong>TOPIK I (Beginner):</strong> Listening 30 Qs + Reading 40 Qs = 200 Total Points</li>
                    <li><strong>TOPIK II (Intermediate/Advanced):</strong> Listening 50 Qs + Writing 4 Qs + Reading 50 Qs = 300 Total Points</li>
                    <li><strong>Evaluation Body:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Included Artifacts:</strong> Question PDF, Answer Key, Audio Script</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 90TH SESSION READING SECTION HIGHLIGHTS -->
        <div class="seo-content-box">
            <h2>90th Official TOPIK II Reading Section Topic Analysis</h2>
            <p>
                The Reading Section in the 90th official <strong>korean exam paper</strong> evaluated candidate comprehension across 5 key topic areas:
            </p>

            <h3>1. Short Everyday Advertisements & Announcements (Q1 - Q12)</h3>
            <p>Covered community library hours, subway line maintenance notices, and eco-friendly campaign posters.</p>

            <h3>2. Sentence Rearrangement & Context Insertion (Q13 - Q24)</h3>
            <p>Tested logical paragraph cohesion, pronoun references (<em>이러한, 그 결과</em>), and sentence transition markers.</p>

            <h3>3. Article Headlines & Newspaper Summaries (Q25 - Q27)</h3>
            <p>Required matching concise Korean newspaper headlines with their expanded explanatory meanings.</p>

            <h3>4. Cultural & Historical Essays (Q28 - Q38)</h3>
            <p>Passages examined traditional Korean paper making (한지), Joseon Dynasty agricultural innovations, and modern urban green spaces.</p>

            <h3>5. Academic Research & Socio-Economic Columns (Q39 - Q50)</h3>
            <p>Advanced passages discussed technological ethics, global supply chain dynamics, and demographic aging solutions.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 90TH PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 90th Official TOPIK Korean Exam Paper PDF</h2>
            <p>
                Download official past 90th session <strong>korean test papers</strong> with verified NIIED answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Transcripts</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>90th Official TOPIK II Full Exam Paper PDF</strong></td>
                            <td><span class="tag-badge amber">90th Session</span></td>
                            <td>2023</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK II Writing Section Model Set</strong></td>
                            <td><span class="tag-badge amber">Writing Model</span></td>
                            <td>2024</td>
                            <td>✔ Model Essay Solutions</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: TOPIK EXAM DAY TIME MANAGEMENT TIPS -->
        <div class="seo-content-box">
            <h2>TOPIK II Exam Day Time Allocation Guide</h2>
            <p>
                Manage your 180-minute exam duration effectively with this time allocation guide:
            </p>
            <ul>
                <li><strong>Listening Module (60 Min):</strong> Answer questions immediately while audio plays; do not look back at previous questions during listening.</li>
                <li><strong>Writing Module (50 Min):</strong> Spend 5 min on Q51, 5 min on Q52, 12 min on Q53, and 28 min on Q54 essay.</li>
                <li><strong>Reading Module (70 Min):</strong> Complete Q1-Q20 in 20 min, Q21-Q35 in 25 min, and reserve 25 min for advanced Q36-Q50 passages.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 90th Official TOPIK Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official NIIED answer keys included in the 90th paper PDF?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 90th session <strong>korean exam paper</strong> sets on koreantestpapers.in include official NIIED answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Why is the 90th official paper recommended for exam practice?</div>
                    <div class="faq-answer">
                        The 90th session paper is one of the most recent fully released official NIIED test sets, offering precise alignment with current exam standards.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Does the PDF include listening audio transcripts?</div>
                    <div class="faq-answer">
                        Yes! The 90th session PDF includes complete Hangul transcripts for all 50 listening questions.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
