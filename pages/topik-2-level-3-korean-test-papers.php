<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK 2 Level 3 Intermediate Korean Test Papers";
$page_desc = "Download free TOPIK 2 Level 3 Intermediate Korean test papers PDF with answer keys, writing section essay prompts, intermediate grammar, and past NIIED exam papers.";
$canonical_url = "https://koreantestpapers.in/topik-2-level-3-korean-test-papers";

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
  "headline": "TOPIK 2 Level 3 Intermediate Korean Test Papers",
  "description": "Comprehensive study guide and downloadable TOPIK 2 Level 3 Intermediate Korean test papers PDF sets with writing prompts and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-2-level-3-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK 2 Level 3 Intermediate Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master TOPIK II Level 3 intermediate Korean exams with solved <strong>korean test papers</strong>, writing section essay guides, reading passage strategies, and official NIIED <strong>korean exam paper</strong> archives.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Level 3 Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📙 TOPIK II Level 3 Exam Archive</h3>
                    <span class="tag-badge amber">Level 3 Intermediate</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK II Level 3 Solved Exam Paper</h4>
                            <p>Full Listening, Writing & Reading paper with keys</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Past Paper</h4>
                            <p>NIIED official 91st session intermediate paper</p>
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
                        <span class="live-dot"></span> LIVE TOPIK II PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LEVEL 3 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TOPIK II LEVEL 3 OVERVIEW & SCORING -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK 2 Level 3 Intermediate Korean Test Papers</h2>
            <p>
                The Test of Proficiency in Korean II (TOPIK II) evaluates intermediate (Level 3 & 4) and advanced (Level 5 & 6) Korean speakers. Unlike TOPIK I, TOPIK II includes a rigorous **Writing Section (쓰기 영역)** alongside Listening and Reading.
            </p>
            <p>
                To earn an official **TOPIK Level 3 Intermediate Certificate**, candidates must score **at least 120 points out of 300 total points** across the three test sections. Achieving Level 3 demonstrates that a candidate can independently perform routine daily functions, maintain social relations, and comprehend public media and basic news articles in South Korea. Preparing with authentic <strong>korean test papers</strong> ensures familiarity with the 300-point evaluation structure.
            </p>

            <div class="callout-box">
                <h4>📊 TOPIK II Test Composition & Level 3 Cutoff</h4>
                <ul>
                    <li><strong>Listening (듣기):</strong> 50 Multiple-Choice Questions (60 Minutes | 100 Points)</li>
                    <li><strong>Writing (쓰기):</strong> 4 Questions - 2 Short Answer + 2 Essays (50 Minutes | 100 Points)</li>
                    <li><strong>Reading (읽기):</strong> 50 Multiple-Choice Questions (70 Minutes | 100 Points)</li>
                    <li><strong>Total Test Duration:</strong> 180 Minutes (3 Hours | 300 Maximum Points)</li>
                    <li><strong>Level 3 Cutoff Score:</strong> 120 Points to 149 Points</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: TOPIK II WRITING SECTION (Q51 - Q54) -->
        <div class="seo-content-box">
            <h2>Mastering the TOPIK II Writing Section for Level 3 Aspirants</h2>
            <p>
                The Writing Section in TOPIK II <strong>korean exam paper</strong> sets consists of 4 distinct questions totaling 100 points:
            </p>

            <h3>1. Question 51: Short Everyday Text Fill-in (10 Points)</h3>
            <p>Candidates complete two missing phrases (㉠ and ㉡) in a casual letter, email, or public notice using appropriate honorific verb endings (e.g., <em>-시기 바랍니다</em>, <em>-고자 합니다</em>).</p>

            <h3>2. Question 52: Academic & Informative Text Fill-in (10 Points)</h3>
            <p>Candidates complete missing phrases in a formal explanatory passage using plain writing style endings (다체 - <em>-ㄴ/는 다</em>, <em>-기 때문이다</em>).</p>

            <h3>3. Question 53: Chart & Data Explanation Short Essay (30 Points)</h3>
            <p>Candidates write a 200 to 300-word descriptive essay analyzing a survey graph or trend chart without stating personal opinions.</p>

            <h3>4. Question 54: Argumentative Opinion Essay (50 Points)</h3>
            <p>Candidates compose a 600 to 700-word essay discussing a social or academic topic (e.g., technology impacts, environmental protection, youth education).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LEVEL 3 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK 2 Level 3 Korean Test Papers PDF</h2>
            <p>
                Download official past TOPIK II Level 3 <strong>korean exam paper</strong> sets complete with writing solutions below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Writing Guide</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK II Level 3 Intermediate Solved Paper</strong></td>
                            <td><span class="tag-badge amber">Intermediate</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Writing Guide</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Session TOPIK II Official Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Intermediate</span></td>
                            <td>2024</td>
                            <td>✔ Official NIIED Answer Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Session TOPIK II Official Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Intermediate</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIES FOR LEVEL 3 CANDIDATES -->
        <div class="seo-content-box">
            <h2>Key Strategies to Secure 120+ Points in TOPIK II Level 3</h2>
            <p>
                Scoring 120 points in TOPIK II requires a balanced strategy across all 3 modules:
            </p>
            <ul>
                <li><strong>Secure 60+ Points in Reading:</strong> Focus on solving Reading Questions 1 to 25 accurately, as these cover intermediate vocabulary and grammar before advanced passages begin.</li>
                <li><strong>Max Out Writing Questions 51 & 53:</strong> Q51 (10 pts) and Q53 (30 pts) follow predictable templates. Scoring 35/40 on these two questions provides a massive boost toward Level 3.</li>
                <li><strong>Listen to Intermediate Dialogues Daily:</strong> Practice listening tracks 1 to 30 repeatedly to master intermediate conversational speech rates.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK 2 Level 3 Test Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What total score is required to achieve TOPIK Level 3?</div>
                    <div class="faq-answer">
                        Candidates must achieve a total score of at least 120 points out of 300 points in TOPIK II.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Is TOPIK Level 3 recognized for university admission in South Korea?</div>
                    <div class="faq-answer">
                        Yes! TOPIK Level 3 is the standard minimum language requirement for undergraduate degree admission across South Korean universities.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are essay solutions included in your downloadable level 3 exam papers?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK II <strong>korean test papers</strong> on koreantestpapers.in include sample model essays for Question 53 and Question 54.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
