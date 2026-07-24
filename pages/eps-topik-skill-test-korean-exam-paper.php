<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Skill Test Interview Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Skill Test Interview Korean exam paper PDF with official HRD Korea interview questions, self-introduction script, physical test guides, and score rubrics.";
$canonical_url = "https://koreantestpapers.in/eps-topik-skill-test-korean-exam-paper";

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
  "headline": "EPS TOPIK Skill Test Interview Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Skill Test Interview Korean exam paper PDF sets with self-introduction scripts and practical workplace command guides.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-skill-test-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Skill Test Interview Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Master the HRD Korea Phase 2 Skill Test & Interview with official <strong>korean exam paper</strong> scripts, downloadable self-introduction templates, practical physical test guides, and <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Skill Test Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🛠 Skill Test & Interview Archive</h3>
                    <span class="tag-badge green">Phase 2 Official</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Skill Test & Interview Exam Paper</h4>
                            <p>Full self-introduction script & interviewer question set</p>
                        </div>
                        <a href="../pdf/eps-topik-special-cbt.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Special CBT & Skill Test Practice Paper</h4>
                            <p>Re-entry worker skill test & interview paper</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Essential Vocabulary Exam Paper</h4>
                            <p>Workplace commands & tool vocabulary PDF</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE INTERVIEW COMMAND QUIZ
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SKILL TEST GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SKILL TEST OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Skill Test & Oral Interview</h2>
            <p>
                Candidates who pass the Phase 1 CBT/UBT written examination must undergo the Phase 2 Skill Test (기능 시험) and Oral Interview (면접 시험) administered directly by HRD Korea evaluators. The Skill Test evaluates physical fitness, color vision, practical work speed, and basic spoken Korean comprehension.
            </p>
            <p>
                Our specialized skill test <strong>korean exam paper</strong> details exact evaluator score allocation rubrics, practical command responses, and a complete 1-minute self-introduction script. Reviewing authentic skill test <strong>korean test papers</strong> ensures candidates pass Phase 2 smoothly and enter the final E-9 job seeker roster (구직자 명부). Download the full skill test paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🛠 Phase 2 Skill Test Evaluation Components</h4>
                <ul>
                    <li><strong>Physical Fitness Test (체력 검정):</strong> Grip strength (악력 측정), back strength, and color vision test (색맹 검사)</li>
                    <li><strong>Basic Practical Work Test (기본 작업):</strong> Pin insertion speed, ring assembly, wood/metal joining, and measurement tools</li>
                    <li><strong>Oral Interview (면접 시험):</strong> 1-minute Korean self-introduction (자기소개) and workplace picture identification</li>
                    <li><strong>Work Command Comprehension:</strong> Executing spoken Korean commands (e.g., <em>"망치를 집어서 상자 위에 놓으세요"</em>)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 1-MINUTE KOREAN SELF-INTRODUCTION TEMPLATE -->
        <div class="seo-content-box">
            <h2>Official 1-Minute Korean Self-Introduction (자기소개) Template</h2>
            <p>
                Memorize and deliver this high-scoring 1-minute self-introduction script during your interview:
            </p>

            <div class="callout-box" style="background: #ffffff; border: 1px solid #cbd5e1;">
                <h4>🗣 Master Self-Introduction Script (자기소개 대본)</h4>
                <p><strong>[Hangul Text]:</strong></p>
                <p style="font-size: 1.05rem; line-height: 1.8; color: #1e293b;">
                    "안녕하십니까! 저는 [이름]입니다. 제 나이는 [나이]살입니다. 저는 인도에서 왔습니다. 제 가족은 모두 [인원수]명입니다. 저는 한국에서 성실하게 일하고 싶습니다. 무슨 일이든 최선을 다하겠습니다. 잘 부탁드립니다. 감사합니다!"
                </p>
                <p><strong>[English Translation]:</strong></p>
                <p style="font-size: 0.95rem; color: #475569;">
                    "Hello! My name is [Name]. I am [Age] years old. I came from India. My family consists of [Number] members. I want to work diligently in Korea. I will do my best in any job. Please guide me well. Thank you!"
                </p>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SKILL TEST PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Skill Test Interview Korean Exam Paper PDF</h2>
            <p>
                Download official skill test <strong>korean test papers</strong> with verified interview guides below:
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
                            <td><strong>EPS TOPIK Skill Test & Interview Paper PDF</strong></td>
                            <td><span class="tag-badge green">Skill Test</span></td>
                            <td>2025</td>
                            <td>✔ Solved Script + Evaluator Key</td>
                            <td><a href="../pdf/eps-topik-special-cbt.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Special CBT Re-entry Exam Paper PDF</strong></td>
                            <td><span class="tag-badge green">Special CBT</span></td>
                            <td>2025</td>
                            <td>✔ Re-entry Worker Guide</td>
                            <td><a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Essential Vocabulary Paper PDF</strong></td>
                            <td><span class="tag-badge green">Vocab Set</span></td>
                            <td>2025</td>
                            <td>✔ Workplace Commands & Tools</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: TOP 5 INTERVIEW COMMANDS DEMANDED BY EVALUATORS -->
        <div class="seo-content-box">
            <h2>Top 5 Spoken Commands Demanded by HRD Korea Evaluators</h2>
            <p>
                Practice reacting swiftly to these spoken Korean commands during your practical test:
            </p>

            <ul>
                <li><strong>Command 1:</strong> <em>"왼쪽에 있는 드라이버를 집으세요."</em> (Pick up the screwdriver on the left.)</li>
                <li><strong>Command 2:</strong> <em>"저울 위에 상자를 올리세요."</em> (Place the box on top of the scale.)</li>
                <li><strong>Command 3:</strong> <em>"안전모와 안전화를 착용하세요."</em> (Wear safety helmet and safety shoes.)</li>
                <li><strong>Command 4:</strong> <em>"이 물건의 개수가 몇 개입니까?"</em> (How many items are there?)</li>
                <li><strong>Command 5:</strong> <em>"오른쪽으로 돌아가세요."</em> (Turn around to the right.)</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Skill Test Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many total points is the Phase 2 Skill Test worth?</div>
                    <div class="faq-answer">
                        The Phase 2 Skill Test is worth 100 points, divided between Physical Fitness (30 Pts), Practical Work (40 Pts), and Oral Interview (30 Pts).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Can I fail the EPS exam during the color vision test?</div>
                    <div class="faq-answer">
                        Severe color blindness (색맹) results in immediate disqualification under HRD Korea safety standards for factory employment.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Does the PDF include self-introduction voice audio guides?</div>
                    <div class="faq-answer">
                        Yes! The PDF includes complete Hangul scripts and phonetic pronunciation guides for oral interviews.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
