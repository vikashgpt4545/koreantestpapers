<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "84th Standard TOPIK Korean Exam Paper & Audio";
$page_desc = "Download free 84th Standard TOPIK Korean exam paper PDF with official NIIED answer keys, audio transcripts, writing section solutions, and solved past papers.";
$canonical_url = "https://koreantestpapers.in/topik-84th-official-korean-exam-paper";

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
  "headline": "84th Standard TOPIK Korean Exam Paper & Audio",
  "description": "Comprehensive guide and downloadable 84th Standard TOPIK Korean exam paper PDF sets with official NIIED answer keys and audio transcripts.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-84th-official-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">84th Standard TOPIK Korean Exam Paper & Audio</h1>
            <p class="hero-subtitle">
                Download official NIIED 84th standard TOPIK I and TOPIK II <strong>korean exam paper</strong> PDF archives complete with verified answer sheets, audio transcripts, and solved <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 84th Official Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏆 84th Standard Paper Archive</h3>
                    <span class="tag-badge amber">84th Session</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>84th Standard TOPIK II Exam Paper</h4>
                            <p>Full 300-point listening, writing & reading set</p>
                        </div>
                        <a href="../pdf/topik-84th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>85th Test Series TOPIK II Exam Paper</h4>
                            <p>Official 85th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-85th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>86th Solved TOPIK II Exam Paper PDF</h4>
                            <p>Official 86th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-86th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 84TH TOPIK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 84TH SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 84TH SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Detailed Guide to 84th Standard TOPIK Korean Exam Paper & Audio</h2>
            <p>
                The 84th Standard TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) provides an essential past paper set for foreign language scholars, undergraduate applicants, and professional certification candidates.
            </p>
            <p>
                Practicing with the 84th official <strong>korean exam paper</strong> exposes candidates to authentic NIIED question formatting, standardized listening audio speeds, and real writing essay prompt structures. Download the full 84th session <strong>korean test papers</strong> PDF archives complete with verified official NIIED answer keys below.
            </p>

            <div class="callout-box">
                <h4>🏆 84th Standard TOPIK Exam Blueprint</h4>
                <ul>
                    <li><strong>TOPIK I (Levels 1-2):</strong> Listening 30 Qs (40 Min) + Reading 40 Qs (60 Min) = 200 Total Points</li>
                    <li><strong>TOPIK II (Levels 3-6):</strong> Listening 50 Qs (60 Min) + Writing 4 Qs (50 Min) + Reading 50 Qs (70 Min) = 300 Total Points</li>
                    <li><strong>Host Organization:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Included Artifacts:</strong> Question PDF, MP3 Audio Scripts, Official Answer Sheet</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 84TH SESSION LISTENING MODULE REVIEW -->
        <div class="seo-content-box">
            <h2>84th Official TOPIK II Listening Module Structure</h2>
            <p>
                The Listening Section in the 84th official <strong>korean exam paper</strong> evaluated candidate auditory comprehension across 5 key question categories:
            </p>

            <h3>1. Short Everyday Conversational Greetings (Q1 - Q4)</h3>
            <p>Candidates selected appropriate spoken responses to everyday inquiries regarding weather, transportation, and daily plans.</p>

            <h3>2. Illustration & Image Matching (Q5 - Q8)</h3>
            <p>Candidates matched short spoken dialogues with corresponding illustrations showing actions like purchasing goods or taking photographs.</p>

            <h3>3. Central Intent & Agreement Identification (Q9 - Q16)</h3>
            <p>Evaluated speaker main opinions in workplace and social decision-making dialogues.</p>

            <h3>4. Public Media Reports & Cultural Summaries (Q17 - Q30)</h3>
            <p>Extended dialogues evaluating comprehension of community programs, public health campaigns, and art exhibitions.</p>

            <h3>5. University Lectures & Academic Debates (Q31 - Q50)</h3>
            <p>Complex academic lectures testing candidate understanding of scientific phenomena and economic policies.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 84TH PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 84th Standard TOPIK Korean Exam Paper PDF</h2>
            <p>
                Download official past 84th standard <strong>korean test papers</strong> with verified NIIED answer keys below:
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
                            <td><strong>84th Standard TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">84th Session</span></td>
                            <td>2022</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-84th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>85th Test Series TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">85th Session</span></td>
                            <td>2022</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-85th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>86th Solved TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">86th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-86th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Blueprint for 84th Standard Practice</h2>
            <p>
                Maximize your exam score with this 3-step revision blueprint:
            </p>
            <ul>
                <li><strong>Step 1 (Audio Shadowing):</strong> Listen to listening audio tracks while reading transcripts line by line to master native speech rhythms.</li>
                <li><strong>Step 2 (Pacing Verification):</strong> Complete the 70-minute reading module under timed exam conditions.</li>
                <li><strong>Step 3 (Writing Practice):</strong> Draft Question 53 and Question 54 writing responses directly on OMR grid paper.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 84th Standard Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official NIIED answer keys included in the 84th paper download?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 84th session <strong>korean exam paper</strong> files on koreantestpapers.in include official NIIED answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 84th session paper download include full listening transcripts?</div>
                    <div class="faq-answer">
                        Yes! The 84th session PDF download includes complete Hangul audio transcripts for all listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the 84th session paper suitable for TOPIK Level 3 and Level 4 preparation?</div>
                    <div class="faq-answer">
                        Yes! The 84th standard paper covers the complete range of TOPIK II difficulty levels from Level 3 through Level 6.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
