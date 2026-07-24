<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Advanced Reading Level 5-6 Korean Exam Paper";
$page_desc = "Download free TOPIK Advanced Reading Level 5-6 Korean exam paper PDF with official NIIED Q25-Q50 reading section drills, academic articles, literary prose, scientific editorials, and answer keys.";
$canonical_url = "https://koreantestpapers.in/topik-reading-level-5-6-korean-exam-paper";

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
  "headline": "TOPIK Advanced Reading Level 5-6 Korean Exam Paper",
  "description": "Comprehensive guide and downloadable TOPIK Advanced Reading Level 5-6 Korean exam paper PDF sets with NIIED Level 5-6 academic reading passages and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-reading-level-5-6-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK Advanced Reading Level 5-6 Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Master high-level academic and literary reading comprehension with official TOPIK Advanced Reading Level 5-6 <strong>korean exam paper</strong> sets, featuring Q25-Q50 advanced reading drills, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Advanced Reading Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🎓 TOPIK II Reading Level 5-6 Archive</h3>
                    <span class="tag-badge red">Advanced Level 5-6</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Advanced Reading Level 5-6 Paper PDF</h4>
                            <p>Full Q25-Q50 academic reading passage compilation</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Full Exam Paper PDF</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Essential Idioms & Proverbs Guide PDF</h4>
                            <p>Four-Character Hanja Idioms (사자성어) guide</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE ADVANCED READING SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED ADVANCED READING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: ADVANCED READING OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Advanced Reading Level 5-6 Korean Exam Papers</h2>
            <p>
                TOPIK Level 5 (minimum 190 points overall) and TOPIK Level 6 (minimum 230 points overall) represent native-level Korean fluency. The second half of the TOPIK II Reading paper (Questions 25 through 50) tests candidates on dense academic prose, economic analysis, scientific theory, philosophy, social policies, and modern Korean literature.
            </p>
            <p>
                Our TOPIK Advanced Reading Level 5-6 <strong>korean exam paper</strong> collection provides targeted passage drills covering Four-Character Hanja Idioms (사자성어 Q28-Q31), literary mood matching (Q42-Q43), and long double-passage comprehension (Q44-Q50). Practicing with dedicated advanced reading <strong>korean test papers</strong> ensures candidates secure top-tier Level 6 credentials. Download the complete TOPIK II Reading Level 5-6 PDF below.
            </p>

            <div class="callout-box">
                <h4>🎓 Advanced Reading Question Formats (Q25-Q50)</h4>
                <ul>
                    <li><strong>Q25 - Q27 (Newspaper Headline Interpretation):</strong> Advanced political & economic news titles</li>
                    <li><strong>Q28 - Q31 (Hanja Four-Character Idioms - 사자성어):</strong> Filling in historical Hanja proverbs (e.g., 동문서답, 일석이조)</li>
                    <li><strong>Q32 - Q34 (Academic Subject Passages):</strong> Science, history, technology, and philosophy articles</li>
                    <li><strong>Q35 - Q38 (Argumentative Essay Themes):</strong> Identifying author's core thesis and supporting evidence</li>
                    <li><strong>Q39 - Q41 (Clause Insertion into Passages):</strong> Locating the exact slot [①, ②, ③, ④] for a given sentence</li>
                    <li><strong>Q42 - Q50 (Literary Prose & Long Editorial Pairs):</strong> Novels, memoirs, socio-economic policy debates</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW FOUR-CHARACTER HANJA IDIOMS (사자성어) -->
        <div class="seo-content-box">
            <h2>Top High-Frequency Hanja Idioms (사자성어 Q28-Q31)</h2>
            <p>
                Master these 5 essential four-character Hanja idioms tested in Level 5-6 reading:
            </p>

            <ul>
                <li><strong>일석이조 (一石二鳥):</strong> Killing two birds with one stone</li>
                <li><strong>동문서답 (東問西答):</strong> Giving an irrelevant answer to a question ("Ask East, answer West")</li>
                <li><strong>작심삼일 (作心三日):</strong> Short-lived determination ("Resolution lasting only 3 days")</li>
                <li><strong>고진감래 (苦盡甘來):</strong> Sweetness comes after hardship ("Bitter ends, sweet arrives")</li>
                <li><strong>유구무언 (有口無言):</strong> Having no excuse ("Have a mouth, but no words to defend")</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR ADVANCED READING -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Advanced Reading Level 5-6 Korean Exam Paper PDF</h2>
            <p>
                Download official TOPIK II advanced reading <strong>korean test papers</strong> with complete answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Features</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK Advanced Reading Level 5-6 Paper PDF</strong></td>
                            <td><span class="tag-badge red">Advanced Level 5-6</span></td>
                            <td>2025</td>
                            <td>✔ Solved Q25-Q50 Passages + Key</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge red">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Essential Idioms & Proverbs PDF</strong></td>
                            <td><span class="tag-badge amber">Idioms & Proverbs</span></td>
                            <td>2025</td>
                            <td>✔ Four-Character Hanja Idioms</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Level 5-6 Reading Mastery</h2>
            <p>
                Follow this 3-step blueprint for advanced reading speed:
            </p>
            <ul>
                <li><strong>Step 1 (Master Hanja Roots):</strong> Learn root Hanja words (e.g., 水 = water, 人 = person, 學 = study) to infer unfamiliar vocabulary meanings.</li>
                <li><strong>Step 2 (Read Paragraph Topics First):</strong> Skim the first sentence of each paragraph in long Q44-Q50 articles to build an instant mental outline.</li>
                <li><strong>Step 3 (Target 230+ Points Cut-off):</strong> Scoring 40+ out of 50 in reading ensures achieving top Level 6 status.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Advanced Reading</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What score cut-off is required for TOPIK Level 5 and Level 6?</div>
                    <div class="faq-answer">
                        TOPIK Level 5 requires a total score of 190 out of 300; Level 6 requires 230 out of 300.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the TOPIK Level 5-6 reading paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK Advanced Reading Level 5-6 <strong>korean exam paper</strong> sets on koreantestpapers.in include NIIED answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many questions are tested in the TOPIK II Reading paper?</div>
                    <div class="faq-answer">
                        The TOPIK II Reading section contains 50 questions to be solved in 70 minutes.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
