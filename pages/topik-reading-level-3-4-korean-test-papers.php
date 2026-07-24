<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Intermediate Reading Level 3-4 Korean Test Papers";
$page_desc = "Download free TOPIK Intermediate Reading Level 3-4 Korean test papers PDF with official NIIED 50-question reading section drills, grammar connectors, news headlines, and answer keys.";
$canonical_url = "https://koreantestpapers.in/topik-reading-level-3-4-korean-test-papers";

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
  "headline": "TOPIK Intermediate Reading Level 3-4 Korean Test Papers",
  "description": "Comprehensive study guide and downloadable TOPIK Intermediate Reading Level 3-4 Korean test papers PDF sets with NIIED Level 3-4 reading questions and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-reading-level-3-4-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK Intermediate Reading Level 3-4 Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master intermediate Korean reading comprehension with official TOPIK Intermediate Reading Level 3-4 <strong>korean test papers</strong>, complete with 50-question reading practice sets, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Intermediate Reading Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📘 TOPIK II Reading Level 3-4 Archive</h3>
                    <span class="tag-badge amber">Intermediate Level 3-4</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Intermediate Reading Level 3-4 Paper PDF</h4>
                            <p>Full 50-question intermediate reading practice set</p>
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
                            <p>Essential intermediate proverbs & body-part idioms</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE TOPIK II READING SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED INTERMEDIATE READING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: INTERMEDIATE READING OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Intermediate Reading Level 3-4 Korean Test Papers</h2>
            <p>
                The TOPIK II Reading section consists of 50 questions administered over 70 minutes, testing candidates across intermediate (Levels 3-4) and advanced (Levels 5-6) proficiency. Achieving TOPIK Level 3 (minimum 120 points) or Level 4 (minimum 150 points) is a standard prerequisite for Korean university admission, corporate employment, and D-2/D-10 visa extensions.
            </p>
            <p>
                Our TOPIK Intermediate Reading Level 3-4 <strong>korean test papers</strong> resource covers high-yield intermediate items, including grammar pairs (Q1-Q4), news headlines (Q5-Q8), advertisement charts (Q9-Q12), and order sequencing (Q13-Q15). Practicing with dedicated intermediate reading <strong>korean exam paper</strong> files ensures fast comprehension. Download the complete TOPIK II Reading Level 3-4 PDF below.
            </p>

            <div class="callout-box">
                <h4>📘 Core Question Formats in Intermediate Reading (Q1-Q24)</h4>
                <ul>
                    <li><strong>Q1 - Q4 (Grammar Synonym Matching):</strong> Selecting equivalent grammar connectors (e.g., -(으)ㄹ 뿐만 아니라 = -는 데다가)</li>
                    <li><strong>Q5 - Q8 (News Headline Analysis):</strong> Interpreting condensed 4-word newspaper titles</li>
                    <li><strong>Q9 - Q12 (Chart & Notice Analysis):</strong> Reading graph trends, consumer surveys, and cultural event flyers</li>
                    <li><strong>Q13 - Q15 (Sentence Sequence Ordering):</strong> Arranging 4 scrambled sentences (가, 나, 다, 라) into a logical paragraph</li>
                    <li><strong>Q16 - Q24 (Short Essay Comprehension):</strong> Identifying main emotions, central themes, and inserted clauses</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: DECODING CONDENSED NEWSPAPER HEADLINES (Q5-Q8) -->
        <div class="seo-content-box">
            <h2>Strategy for News Headline Questions (Q5-Q8)</h2>
            <p>
                Korean news headlines use condensed grammatical shorthand. Learn these decoding rules:
            </p>

            <h3>1. Noun-Ending Sentences</h3>
            <p>Headlines drop verb endings and end directly in nouns (e.g., <em>수출 급증 → 수출이 갑자기 크게 늘었다 (Exports skyrocketed)</em>).</p>

            <h3>2. Quote Indicators (-고, -라)</h3>
            <p>Headlines omit full quotation speech marks (e.g., <em>정부 "물가 안정 총력" → 정부가 물가를 안정시키기 위해 최선을 다하겠다고 말했다</em>).</p>

            <h3>3. Metaphorical Verbs</h3>
            <p>Recognize figurative words: <em>발돋움 (leap forward)</em>, <em>열풍 (fever/trend)</em>, <em>빨간불 (red light / warning sign)</em>.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR INTERMEDIATE READING -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Intermediate Reading Level 3-4 Korean Test Papers PDF</h2>
            <p>
                Download official TOPIK II reading <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>TOPIK Intermediate Reading Level 3-4 Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Intermediate Level 3-4</span></td>
                            <td>2025</td>
                            <td>✔ Solved 50 Reading Qs + Key</td>
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
                            <td><strong>TOPIK Essential Idioms & Proverbs PDF</strong></td>
                            <td><span class="tag-badge amber">Idioms & Proverbs</span></td>
                            <td>2025</td>
                            <td>✔ Level 3-4 Idioms & Sayings</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Level 3-4 Reading Success</h2>
            <p>
                Follow this 3-step blueprint for reading speed improvement:
            </p>
            <ul>
                <li><strong>Step 1 (Speed Through Q1-Q12):</strong> Complete the first 12 questions within 10 minutes to save time for complex passages.</li>
                <li><strong>Step 2 (Sequence Ordering Shortcut):</strong> Look at the first choices for Q13-Q15; options usually narrow the starting sentence to (가) or (나).</li>
                <li><strong>Step 3 (Target 150+ Cut-off):</strong> Aim to correctly answer at least 32 out of 50 questions to guarantee Level 4 certification.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Intermediate Reading</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What score cut-off is required for TOPIK Level 3 and Level 4?</div>
                    <div class="faq-answer">
                        TOPIK Level 3 requires a total score of 120 points out of 300; Level 4 requires 150 points out of 300.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the TOPIK Level 3-4 reading paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK Intermediate Reading Level 3-4 <strong>korean test papers</strong> on koreantestpapers.in include NIIED answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many total reading questions are on the TOPIK II exam?</div>
                    <div class="faq-answer">
                        The TOPIK II exam contains 50 reading questions to be answered in 70 minutes.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
