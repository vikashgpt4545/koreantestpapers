<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "89th Past Official TOPIK Korean Test Papers";
$page_desc = "Download free 89th Past Official TOPIK Korean test papers PDF with official NIIED answer keys, writing section solutions, reading passages, and solved exam papers.";
$canonical_url = "https://koreantestpapers.in/topik-89th-official-korean-test-papers";

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
  "headline": "89th Past Official TOPIK Korean Test Papers",
  "description": "Comprehensive guide and downloadable 89th Past Official TOPIK Korean test papers PDF sets with official NIIED answer keys and writing essay models.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-89th-official-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">89th Past Official TOPIK Korean Test Papers</h1>
            <p class="hero-subtitle">
                Download official NIIED 89th session TOPIK I and TOPIK II <strong>korean test papers</strong> PDF archives complete with verified answer sheets, listening transcripts, and solved <strong>korean exam paper</strong> sets.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 89th Official Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 89th Official Paper Archive</h3>
                    <span class="tag-badge amber">89th Session</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>89th Past Official TOPIK II Exam Paper</h4>
                            <p>Full 300-point listening, writing & reading set</p>
                        </div>
                        <a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th Official TOPIK II Test Paper</h4>
                            <p>Official 90th NIIED session test paper & key</p>
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
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 89TH TOPIK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 89TH SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 89TH SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Detailed Analysis of 89th Past Official TOPIK Korean Test Papers</h2>
            <p>
                The 89th Official TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) provides a critical study benchmark for candidates preparing for TOPIK I and TOPIK II.
            </p>
            <p>
                Solving authentic past papers from the 89th session allows students to master exam timing, refine reading passage strategies, and practice writing responses for Question 51 through Question 54. Download the full 89th session <strong>korean test papers</strong> PDF complete with verified official NIIED answer keys below.
            </p>

            <div class="callout-box">
                <h4>🏆 89th Official TOPIK Examination Blueprint</h4>
                <ul>
                    <li><strong>TOPIK I (Levels 1-2):</strong> Listening 30 Qs (40 Min) + Reading 40 Qs (60 Min) = 200 Total Points</li>
                    <li><strong>TOPIK II (Levels 3-6):</strong> Listening 50 Qs (60 Min) + Writing 4 Qs (50 Min) + Reading 50 Qs (70 Min) = 300 Total Points</li>
                    <li><strong>Evaluation Host:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Key Included Materials:</strong> Test Booklet PDF, Audio Transcripts, Official Answer Sheets</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 89TH SESSION LISTENING MODULE BREAKDOWN -->
        <div class="seo-content-box">
            <h2>89th Official TOPIK II Listening Module Question Types</h2>
            <p>
                The Listening Section in the 89th official <strong>korean exam paper</strong> evaluated candidate auditory comprehension across 5 distinct dialogue formats:
            </p>

            <h3>1. Next Conversation Response Selection (Q1 - Q4)</h3>
            <p>Candidates selected the natural spoken response following a short 2-sentence everyday greeting or inquiry.</p>

            <h3>2. Visual Action Matching (Q5 - Q8)</h3>
            <p>Candidates matched spoken dialogues with corresponding illustrations showing actions like ordering food or purchasing transport tickets.</p>

            <h3>3. Main Idea Identification (Q9 - Q12)</h3>
            <p>Short conversations where candidates identified the speaker's main intent or agreement point.</p>

            <h3>4. News Report & Media Commentary (Q21 - Q30)</h3>
            <p>Extended dialogues evaluating comprehension of social trends, environmental initiatives, and public cultural events.</p>

            <h3>5. Academic Lectures & Panel Discussions (Q31 - Q50)</h3>
            <p>Complex university lectures and radio interviews testing candidate understanding of scientific and economic arguments.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 89TH PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 89th Past Official TOPIK Korean Test Papers PDF</h2>
            <p>
                Download official past 89th session <strong>korean exam paper</strong> sets with verified NIIED answer keys below:
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
                            <td><strong>89th Past Official TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">89th Session</span></td>
                            <td>2023</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Official TOPIK II Exam Paper PDF</strong></td>
                            <td><span class="tag-badge amber">90th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT FOR 89TH PAPER -->
        <div class="seo-content-box">
            <h2>3-Step Revision Strategy for the 89th Official Past Paper</h2>
            <p>
                Maximize your preparation using this 3-step past paper strategy:
            </p>
            <ul>
                <li><strong>Step 1 (First Un-timed Attempt):</strong> Solve reading questions without time limits to analyze sentence structure and vocabulary.</li>
                <li><strong>Step 2 (Listen to Audio Transcripts):</strong> Read listening transcripts line-by-line while playing audio files to catch fast conversational phrasing.</li>
                <li><strong>Step 3 (Timed Full Mock):</strong> Re-solve the full 89th paper under strict timed exam conditions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 89th Past Official TOPIK Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official answer keys included in the 89th paper PDF download?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 89th session <strong>korean test papers</strong> on koreantestpapers.in include official NIIED answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 89th session paper include full audio scripts?</div>
                    <div class="faq-answer">
                        Yes! The downloadable 89th paper PDF includes complete Hangul scripts for all 50 listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the 89th paper useful for both Level 3 and Level 4 candidates?</div>
                    <div class="faq-answer">
                        Yes! The 89th session paper covers the full range of TOPIK II difficulty levels from Level 3 through Level 6.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
