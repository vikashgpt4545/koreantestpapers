<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK II Writing Section Korean Exam Paper & Solutions";
$page_desc = "Download free TOPIK II Writing Section Korean exam paper PDF with official NIIED Question 51-54 solutions, graph essay templates, 600-word model essays, and OMR manuscript paper rules.";
$canonical_url = "https://koreantestpapers.in/topik-writing-essay-korean-exam-paper";

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
  "headline": "TOPIK II Writing Section Korean Exam Paper & Solutions",
  "description": "Comprehensive guide and downloadable TOPIK II Writing Section Korean exam paper PDF sets with Q51-Q54 model solutions, graph writing templates, and manuscript grid rules.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-writing-essay-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK II Writing Section Korean Exam Paper & Solutions</h1>
            <p class="hero-subtitle">
                Master TOPIK II Writing (쓰기) Questions 51 through 54 with official <strong>korean exam paper</strong> model solutions, downloadable graph writing templates, OMR manuscript grid guides, and <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: TOPIK Writing Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>✍️ TOPIK II Writing Paper Archive</h3>
                    <span class="tag-badge amber">Writing Section</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK II Writing Model Paper & Solutions</h4>
                            <p>Full Q51-Q54 writing prompts & model essay answers</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Exam Paper PDF</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>90th Official TOPIK II Test Paper PDF</h4>
                            <p>Official 90th NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE WRITING STRUCTURE QUIZ
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED WRITING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TOPIK WRITING SECTION OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK II Writing Section Korean Exam Papers</h2>
            <p>
                The Writing Section (쓰기 영역) in the TOPIK II examination is worth 100 points out of the 300 total points required for Level 3 through Level 6 certification. Unlike multiple-choice reading and listening sections, the writing module evaluates active sentence construction, graph data analysis, formal plain style verb conjugations (해라체 / 다체), and OMR manuscript paper spacing rules (원고지 작성법).
            </p>
            <p>
                Our specialized TOPIK writing <strong>korean exam paper</strong> repository details model solutions for Questions 51, 52, 53, and 54. Practicing with model essay templates ensures candidates manage the 50-minute writing window efficiently and secure high scores. Download the complete writing paper PDF below.
            </p>

            <div class="callout-box">
                <h4>✍️ TOPIK II Writing Module 4-Question Breakdown</h4>
                <ul>
                    <li><strong>Question 51 (Short Announcement Fill-In | 10 Pts):</strong> Fill 2 missing segments in a public notice using formal polite style (-습니다 / -시기 바랍니다)</li>
                    <li><strong>Question 52 (Explanatory Text Fill-In | 10 Pts):</strong> Fill 2 missing segments in an explanatory text using plain style (-ㄴ/는 다)</li>
                    <li><strong>Question 53 (Graph Trend Short Essay | 30 Pts):</strong> Compose a 200-300 word descriptive essay analyzing survey graphs or flowcharts</li>
                    <li><strong>Question 54 (Argumentative Opinion Essay | 50 Pts):</strong> Compose a 600-700 word structured opinion essay on a societal or cultural topic</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: QUESTION 53 GRAPH ESSAY MODEL TEMPLATE -->
        <div class="seo-content-box">
            <h2>Question 53 Graph Essay Model Writing Template (30 Points)</h2>
            <p>
                Question 53 evaluates your ability to describe survey statistics objectively without inserting personal opinions. Use this standard paragraph blueprint:
            </p>

            <div class="callout-box" style="background: #ffffff; border: 1px solid #cbd5e1;">
                <h4>📊 Master Graph Writing Blueprint (Q53)</h4>
                <p><strong>Paragraph 1 (Survey Topic & Increase Trend):</strong></p>
                <p><em>"[조사 기관]에서 [조사 대상]을 대상으로 [조사 주제]에 대해 조사를 실시하였다. 그 결과 [항목 A]은/는 [연도 1]년 [치수 1]에서 [연도 2]년 [치수 2]로 크게 증가한 것으로 나타났다."</em></p>
                <p><strong>Paragraph 2 (Reason Analysis & Future Outlook):</strong></p>
                <p><em>"이러한 증가 원인으로는 첫째, [원인 1] 때문이고, 둘째, [원인 2] 영향으로 분석된다. 이러한 추세가 계속된다면 향후 [전망 내용]을/를 할 것으로 기대된다."</em></p>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR WRITING PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK II Writing Section Korean Exam Paper PDF</h2>
            <p>
                Download official past TOPIK writing <strong>korean test papers</strong> with verified NIIED model answers below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Essay Models</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK II Writing Section Model Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Writing Model</span></td>
                            <td>2024</td>
                            <td>✔ Full Q51-Q54 Model Essays</td>
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
                            <td><strong>90th Official TOPIK II Exam Paper PDF</strong></td>
                            <td><span class="tag-badge amber">90th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: OMR MANUSCRIPT PAPER SPACING RULES -->
        <div class="seo-content-box">
            <h2>3 Essential OMR Manuscript Grid (원고지) Spacing Rules</h2>
            <p>
                Avoid automatic point deductions by following these 3 manuscript grid rules:
            </p>
            <ul>
                <li><strong>Rule 1 (Paragraph Indentation):</strong> Leave the first square of a new paragraph empty. Never leave an empty line between paragraphs.</li>
                <li><strong>Rule 2 (One Character Per Box):</strong> Write one Hangul letter, number, or punctuation mark per square grid box. Two numbers (e.g., 25) can share one square box.</li>
                <li><strong>Rule 3 (Plain Verb Style Only):</strong> Use plain writing style (다체: -ㄴ/는 다, -다, -었다, -을 것이다) throughout Q52, Q53, and Q54. Do not use honorific -습니다 endings.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Writing Section Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How much time should I spend on Question 54 in the writing exam?</div>
                    <div class="faq-answer">
                        Allocate at least 25 to 30 minutes of the 50-minute writing test window specifically to compose the Question 54 essay.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the writing paper PDF include model essays for Question 54?</div>
                    <div class="faq-answer">
                        Yes! Our downloadable writing <strong>korean exam paper</strong> PDF features complete 600-word model essay answers for Question 54.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Can I write personal opinions in Question 53 graph descriptions?</div>
                    <div class="faq-answer">
                        No! Question 53 requires 100% objective data reporting. Personal opinions belong exclusively in Question 54.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
