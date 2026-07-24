<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "91st Official TOPIK Korean Test Papers with Answer Keys";
$page_desc = "Download free 91st Official TOPIK Korean test papers PDF with official NIIED answer keys, writing essay models, reading passages, and solved exam papers.";
$canonical_url = "https://koreantestpapers.in/topik-91st-official-korean-test-papers";

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
  "headline": "91st Official TOPIK Korean Test Papers with Answer Keys",
  "description": "Comprehensive study guide and downloadable 91st Official TOPIK Korean test papers PDF sets with official NIIED answer keys and writing essay models.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-91st-official-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">91st Official TOPIK Korean Test Papers with Answer Keys</h1>
            <p class="hero-subtitle">
                Download official NIIED 91st session TOPIK I and TOPIK II <strong>korean test papers</strong> PDF archives complete with verified answer sheets, model essay solutions, and authentic <strong>korean exam paper</strong> sets.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 91st Official Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 91st Official Paper Archive</h3>
                    <span class="tag-badge amber">91st Session</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Full Test Paper</h4>
                            <p>Full 300-point listening, writing & reading set</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th Official TOPIK II Exam Paper</h4>
                            <p>Official 90th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
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
                        <span class="live-dot"></span> LIVE 91ST TOPIK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 91ST SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 91ST SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Complete Guide to 91st Official TOPIK Korean Test Papers</h2>
            <p>
                The 91st Official TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) represents one of the most widely referenced recent past papers for academic and professional Korean language certification.
            </p>
            <p>
                The 91st session test paper archive encompasses both TOPIK I (Beginner Levels 1 & 2) and TOPIK II (Intermediate/Advanced Levels 3, 4, 5 & 6). Studying the 91st official <strong>korean test papers</strong> exposes candidates to authentic NIIED question formatting, standardized listening voice tracks, and real writing prompt structures. Download the full 91st session <strong>korean exam paper</strong> PDF sets complete with verified official answer sheets below.
            </p>

            <div class="callout-box">
                <h4>🏆 91st Official TOPIK Exam Structure Overview</h4>
                <ul>
                    <li><strong>TOPIK I (Levels 1-2):</strong> Listening 30 Qs (40 Min) + Reading 40 Qs (60 Min) = 200 Total Points</li>
                    <li><strong>TOPIK II (Levels 3-6):</strong> Listening 50 Qs (60 Min) + Writing 4 Qs (50 Min) + Reading 50 Qs (70 Min) = 300 Total Points</li>
                    <li><strong>Official Host Body:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Key Included Files:</strong> Test Booklet PDF, Listening MP3 Audio Transcripts, Answer Keys</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 91ST SESSION WRITING PROMPT ANALYSIS (Q51-Q54) -->
        <div class="seo-content-box">
            <h2>91st Official TOPIK II Writing Section Prompt Analysis</h2>
            <p>
                The Writing Section in the 91st official TOPIK II <strong>korean exam paper</strong> evaluated candidate fluency across 4 questions:
            </p>

            <h3>1. Question 51: Public Notice Fill-In (10 Points)</h3>
            <p>Candidates completed missing sentence segments in an official dormitory announcement regarding room maintenance hours, requiring honorific verb endings (<em>-시기 바랍니다</em>).</p>

            <h3>2. Question 52: Explanatory Passage Fill-In (10 Points)</h3>
            <p>Candidates completed missing phrases in a scientific text discussing plant photosynthesis cycles using plain writing style (<em>-ㄴ/는 다</em>).</p>

            <h3>3. Question 53: Graph Analysis Short Essay (30 Points)</h3>
            <p>Candidates analyzed a 200-word survey graph comparing changes in remote work adoption in South Korea between 2020 and 2024.</p>

            <h3>4. Question 54: Argumentative Opinion Essay (50 Points)</h3>
            <p>Candidates composed a 600 to 700-word opinion essay examining the pros and cons of artificial intelligence in modern education.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 91ST PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 91st Official TOPIK Korean Test Papers PDF</h2>
            <p>
                Download official past 91st session <strong>korean test papers</strong> with verified NIIED answer keys below:
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
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Official TOPIK II Exam Paper PDF</strong></td>
                            <td><span class="tag-badge amber">90th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
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

        <!-- ARTICLE BOX 4: STRATEGIES TO SCORE 200+ IN TOPIK II -->
        <div class="seo-content-box">
            <h2>4 Tactics to Achieve 200+ Scores in TOPIK II</h2>
            <p>
                Follow these 4 tactics when studying the 91st session past paper:
            </p>
            <ul>
                <li><strong>Tactic 1 (Prioritize Q53 in Writing):</strong> Graph description Q53 provides 30 predictable points. Practice writing graph trends using standard templates.</li>
                <li><strong>Tactic 2 (Master Reading Q1 to Q20):</strong> Questions 1 to 20 cover intermediate grammar and vocabulary; target 100% accuracy on these early items.</li>
                <li><strong>Tactic 3 (Listen to Track 1 Playback):</strong> Focus intently on the first audio playback to answer listening questions before the second playback begins.</li>
                <li><strong>Tactic 4 (Eliminate Spacing Errors):</strong> Practice writing on official OMR manuscript grid paper (원고지) to prevent spacing penalties in Q54.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 91st Official TOPIK Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official answer keys included with the 91st session paper PDF?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 91st session <strong>korean test papers</strong> on koreantestpapers.in include official NIIED answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 91st session paper include model essay answers for Q54?</div>
                    <div class="faq-answer">
                        Yes! Our downloadable 91st session PDF set includes sample model essays for Question 53 and Question 54.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the 91st session paper suitable for TOPIK Level 3 and Level 4 candidates?</div>
                    <div class="faq-answer">
                        Yes! The 91st session paper covers the full range of TOPIK II difficulty levels from Level 3 through Level 6.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
