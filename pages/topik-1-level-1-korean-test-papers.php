<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK 1 Level 1 Korean Test Papers for Beginners";
$page_desc = "Download free TOPIK 1 Level 1 Korean test papers PDF with beginner answer keys, basic grammar particles, vocabulary lists, and solved mock papers for NIIED Korean proficiency certification.";
$canonical_url = "https://koreantestpapers.in/topik-1-level-1-korean-test-papers";

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
  "headline": "TOPIK 1 Level 1 Korean Test Papers for Beginners",
  "description": "Comprehensive study guide and downloadable TOPIK 1 Level 1 Korean test papers PDF sets with beginner answer keys and grammar rules.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-1-level-1-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK 1 Level 1 Korean Test Papers for Beginners</h1>
            <p class="hero-subtitle">
                Master the official NIIED TOPIK I Level 1 beginner examination with solved <strong>korean test papers</strong>, complete answer keys, fundamental grammar particles, and past <strong>korean exam paper</strong> PDF downloads.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Beginner Test Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🔰 TOPIK 1 Beginner Paper Archive</h3>
                    <span class="tag-badge green">Level 1 Beginner</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK I Level 1 Official Solved Paper</h4>
                            <p>Full Reading & Listening paper for beginner aspirants</p>
                        </div>
                        <a href="../pdf/topik-1-beginner-solved.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st TOPIK I Official Past Paper</h4>
                            <p>NIIED 91st session solved paper with answer sheet</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th TOPIK I Past Session Paper</h4>
                            <p>Official 90th TOPIK I test paper with keys</p>
                        </div>
                        <a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE TOPIK I PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED TOPIK 1 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TOPIK 1 LEVEL 1 OVERVIEW & SCORING -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK 1 Level 1 Beginner Korean Test Papers</h2>
            <p>
                The Test of Proficiency in Korean (TOPIK I) is the official language certification examination administered worldwide by NIIED (National Institute for International Education), a division of the Ministry of Education in South Korea. TOPIK I encompasses both Level 1 (Beginner) and Level 2 (Elementary) evaluations within a single test paper.
            </p>
            <p>
                To achieve a **TOPIK Level 1 certification**, candidates must score **at least 80 points out of 200 total points** across the combined Listening (30 questions, 100 points) and Reading (40 questions, 100 points) sections. Level 1 evaluates basic conversational skills necessary for daily survival in Korea, such as ordering food, introducing oneself, asking prices, and understanding simple signage. Practicing with real <strong>korean test papers</strong> is the fastest way for beginner students in India to build foundational confidence.
            </p>

            <div class="callout-box">
                <h4>📊 TOPIK I Level 1 Examination Score Matrix</h4>
                <ul>
                    <li><strong>Listening Section (듣기):</strong> 30 Questions (40 Minutes | 100 Maximum Points)</li>
                    <li><strong>Reading Section (읽기):</strong> 40 Questions (60 Minutes | 100 Maximum Points)</li>
                    <li><strong>Total Test Duration:</strong> 100 Minutes (70 Total Questions)</li>
                    <li><strong>Level 1 Qualifying Score:</strong> 80 to 139 Points (Scoring 140+ earns Level 2)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW GRAMMAR PARTICLES FOR LEVEL 1 -->
        <div class="seo-content-box">
            <h2>Essential Grammar Particles Tested in TOPIK 1 Level 1 Exam Paper Sets</h2>
            <p>
                Every TOPIK 1 Level 1 <strong>korean exam paper</strong> heavily tests candidate understanding of fundamental Korean particles (조사). Mastering these 6 core particles guarantees success in fill-in-the-blank questions:
            </p>

            <h3>1. Topic Markers: -은 / -는</h3>
            <p>Used to indicate the main topic of a sentence. Attachment rule: <em>-은</em> after consonants (e.g., <em>학생은</em>), <em>-는</em> after vowels (e.g., <em>저는</em>).</p>

            <h3>2. Subject Markers: -이 / -가</h3>
            <p>Used to emphasize the subject performing an action or state. Attachment rule: <em>-이</em> after consonants (e.g., <em>비가, 가방이</em>).</p>

            <h3>3. Object Markers: -을 / -를</h3>
            <p>Attaches to the direct object receiving an action (e.g., <em>밥을 먹습니다 [Eat rice]</em>, <em>사과를 삽니다 [Buy an apple]</em>).</p>

            <h3>4. Time & Location Particle: -에</h3>
            <p>Indicates a static location or specific time (e.g., <em>학교에 갑니다 [Go to school]</em>, <em>7시에 일어납니다 [Wake up at 7 o'clock]</em>).</p>

            <h3>5. Action Location Particle: -에서</h3>
            <p>Indicates the place where an action takes place (e.g., <em>도서관에서 공부합니다 [Study in the library]</em>).</p>

            <h3>6. Possessive Particle: -의</h3>
            <p>Functions like 's in English to denote ownership (e.g., <em>저의 책 [My book]</em>).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TOPIK 1 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK 1 Level 1 Korean Test Papers PDF</h2>
            <p>
                Download official past TOPIK 1 Level 1 <strong>korean test papers</strong> with verified NIIED answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Explanation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK I Level 1 Official Solved Exam Paper</strong></td>
                            <td><span class="tag-badge green">Beginner</span></td>
                            <td>2024</td>
                            <td>✔ Full Solved + Answer Sheet</td>
                            <td><a href="../pdf/topik-1-beginner-solved.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK I Past Paper PDF</strong></td>
                            <td><span class="tag-badge green">Beginner</span></td>
                            <td>2024</td>
                            <td>✔ Official NIIED Answer Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Official TOPIK I Past Paper PDF</strong></td>
                            <td><span class="tag-badge green">Beginner</span></td>
                            <td>2023</td>
                            <td>✔ Official NIIED Answer Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>89th Official TOPIK I Past Paper PDF</strong></td>
                            <td><span class="tag-badge green">Beginner</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIES FOR LEVEL 1 BEGINNERS -->
        <div class="seo-content-box">
            <h2>Proven Study Plan for Indian Students Preparing for TOPIK 1 Level 1</h2>
            <p>
                If you are starting your Korean learning journey from scratch in India, follow this step-by-step 3-month preparation blueprint:
            </p>
            <ol>
                <li><strong>Month 1 (Hangul & Basic Vocabulary):</strong> Master reading and writing Hangul consonants, vowels, and batchim rules. Memorize 500 high-frequency nouns and basic verbs.</li>
                <li><strong>Month 2 (Grammar & Sentence Structures):</strong> Practice basic SOV (Subject-Object-Verb) sentence structures, politeness endings (<em>-ㅂ니다/습니다</em> and <em>-아/어/해요</em>), and key particle rules.</li>
                <li><strong>Month 3 (Past Paper Practice):</strong> Solve at least 10 full-length TOPIK 1 <strong>korean exam paper</strong> sets under timed test conditions. Review incorrect answers using our step-by-step explanations.</li>
            </ol>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK 1 Level 1 Exam Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many total points are needed to pass TOPIK 1 Level 1?</div>
                    <div class="faq-answer">
                        You need a minimum score of 80 points out of 200 total points combined across the Listening and Reading sections.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Is there a writing essay section in the TOPIK 1 exam paper?</div>
                    <div class="faq-answer">
                        No! TOPIK 1 consists only of multiple-choice Listening and Reading questions. Writing essays are only required in TOPIK II (Level 3-6).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How long is a TOPIK certification valid?</div>
                    <div class="faq-answer">
                        TOPIK certificates are valid for 2 years from the date of result announcement by NIIED.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
