<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "87th Full Model TOPIK Korean Test Papers";
$page_desc = "Download free 87th Full Model TOPIK Korean test papers PDF with official NIIED answer keys, listening transcripts, writing section solutions, and solved past papers.";
$canonical_url = "https://koreantestpapers.in/topik-87th-official-korean-test-papers";

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
  "headline": "87th Full Model TOPIK Korean Test Papers",
  "description": "Comprehensive study guide and downloadable 87th Full Model TOPIK Korean test papers PDF sets with official NIIED answer keys and writing essay models.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-87th-official-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">87th Full Model TOPIK Korean Test Papers</h1>
            <p class="hero-subtitle">
                Download official NIIED 87th full model TOPIK I and TOPIK II <strong>korean test papers</strong> PDF archives complete with verified answer sheets, listening transcripts, and solved <strong>korean exam paper</strong> sets.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 87th Official Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 87th Full Model Archive</h3>
                    <span class="tag-badge amber">87th Session</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>87th Full Model TOPIK II Exam Paper</h4>
                            <p>Full 300-point listening, writing & reading set</p>
                        </div>
                        <a href="../pdf/topik-87th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>88th Question Set TOPIK II Exam Paper</h4>
                            <p>Official 88th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-88th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>89th Past Official TOPIK II Paper PDF</h4>
                            <p>Official 89th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 87TH TOPIK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 87TH SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 87TH SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Detailed Guide to 87th Full Model TOPIK Korean Test Papers</h2>
            <p>
                The 87th Full Model TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) provides a foundational past paper archive for foreign language scholars, undergraduate applicants, and professional certification candidates.
            </p>
            <p>
                Practicing with the 87th official <strong>korean test papers</strong> exposes candidates to authentic NIIED question formatting, standardized listening dialogue speeds, and real writing essay prompt structures. Download the full 87th session <strong>korean exam paper</strong> PDF archives complete with verified official NIIED answer keys below.
            </p>

            <div class="callout-box">
                <h4>🏆 87th Full Model TOPIK Exam Blueprint</h4>
                <ul>
                    <li><strong>TOPIK I (Levels 1-2):</strong> Listening 30 Qs (40 Min) + Reading 40 Qs (60 Min) = 200 Total Points</li>
                    <li><strong>TOPIK II (Levels 3-6):</strong> Listening 50 Qs (60 Min) + Writing 4 Qs (50 Min) + Reading 50 Qs (70 Min) = 300 Total Points</li>
                    <li><strong>Host Organization:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Included Artifacts:</strong> Question PDF, Audio Script Transcripts, Official Answer Sheet</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 87TH SESSION ESSAY WRITING PROMPT REVIEW -->
        <div class="seo-content-box">
            <h2>87th Official TOPIK II Writing Section Prompt Analysis</h2>
            <p>
                The Writing Section in the 87th official <strong>korean exam paper</strong> evaluated candidate writing fluency across 4 questions:
            </p>

            <h3>1. Question 51: Email Announcement Completion (10 Points)</h3>
            <p>Candidates completed missing sentence segments in an email confirming seminar registration details, requiring formal honorific verb endings (<em>-시기 바랍니다</em>).</p>

            <h3>2. Question 52: Informative Text Completion (10 Points)</h3>
            <p>Candidates completed missing phrases in a passage discussing sleep hygiene and memory consolidation using plain writing style (<em>-ㄴ/는 다</em>).</p>

            <h3>3. Question 53: Graph Trend Description Essay (30 Points)</h3>
            <p>Candidates composed a 200 to 300-word descriptive essay summarizing survey statistics on recycling habits in South Korean households.</p>

            <h3>4. Question 54: Argumentative Opinion Essay (50 Points)</h3>
            <p>Candidates composed a 600 to 700-word essay examining the importance of lifelong learning and adult vocational education in modern society.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 87TH PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 87th Full Model TOPIK Korean Test Papers PDF</h2>
            <p>
                Download official past 87th full model <strong>korean exam paper</strong> sets with verified NIIED answer keys below:
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
                            <td><strong>87th Full Model TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">87th Session</span></td>
                            <td>2023</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-87th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>88th Question Set TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">88th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-88th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>89th Past Official TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">89th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Blueprint for 87th Full Model Practice</h2>
            <p>
                Maximize your exam score with this 3-step revision blueprint:
            </p>
            <ul>
                <li><strong>Step 1 (Pacing Check):</strong> Complete the 50-minute writing module under strict timer conditions to ensure you finish Q54.</li>
                <li><strong>Step 2 (Sentence Structure Review):</strong> Study plain style verb endings (다체) in Question 52 and Question 54 solutions.</li>
                <li><strong>Step 3 (Auditory Shadowing):</strong> Shadow listening audio transcripts line by line to improve listening retention speed.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 87th Full Model Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official NIIED answer keys included in the 87th paper download?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 87th session <strong>korean test papers</strong> on koreantestpapers.in include official NIIED answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 87th session paper include full audio transcripts?</div>
                    <div class="faq-answer">
                        Yes! The 87th session PDF download includes complete Hangul audio transcripts for all listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the 87th session paper useful for TOPIK Level 3 and Level 4 preparation?</div>
                    <div class="faq-answer">
                        Yes! The 87th full model paper covers the complete range of TOPIK II difficulty levels from Level 3 through Level 6.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
