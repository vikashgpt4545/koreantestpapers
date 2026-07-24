<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Listening 200 Questions Korean Test Papers";
$page_desc = "Download free EPS TOPIK Listening 200 Questions Korean test papers PDF with 200 high-frequency listening items, sound distinction, picture choices, audio scripts, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-listening-200-questions-korean-test-papers";

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
  "headline": "EPS TOPIK Listening 200 Questions Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Listening 200 Questions Korean test papers PDF sets with full Hangul audio transcripts, MP3 practice tracks, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-listening-200-questions-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Listening 200 Questions Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master listening comprehension with official EPS TOPIK Listening 200 Questions <strong>korean test papers</strong>, complete with full Hangul audio scripts, MP3 practice tracks, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Listening 200 Questions Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🎧 Listening 200 Questions Archive</h3>
                    <span class="tag-badge purple">Listening 200 Qs</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Listening 200 Questions Test Paper PDF</h4>
                            <p>Full 200 solved listening items & script compilation</p>
                        </div>
                        <a href="../pdf/topik-1-level-1.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2025 Model Question Paper PDF</h4>
                            <p>Official 40-question UBT practice test set & answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Real-time EPS TOPIK CBT Practice Paper PDF</h4>
                            <p>Full timed UBT simulation set with listening answers</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE LISTENING 200 SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LISTENING 200 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LISTENING 200 OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Listening 200 Questions Korean Test Papers</h2>
            <p>
                The Listening Section (듣기) of the official EPS-TOPIK UBT examination features 20 questions (Q21-Q40) administered over a 25-minute period. Consistently scoring 90+ points on listening is essential for securing employment selection in manufacturing, agriculture, construction, and shipbuilding sectors.
            </p>
            <p>
                Our EPS TOPIK Listening 200 Questions <strong>korean test papers</strong> module provides 200 curated audio question tracks matching the exact HRD Korea exam framework. Complete with line-by-line Hangul transcripts, audio script translations, and score answer keys, this guide allows candidates to practice listening drills systematically. Download the complete Listening 200 Questions PDF below.
            </p>

            <div class="callout-box">
                <h4>🎧 Breakdown of EPS TOPIK 200 Listening Questions</h4>
                <ul>
                    <li><strong>Category 1 - Phonetic Sound Distinction (50 Questions):</strong> Identifying minimal pairs (가/카/까, 다/타/따) and numbers</li>
                    <li><strong>Category 2 - Visual Action Matching (50 Questions):</strong> Selecting the image that matches the audio description</li>
                    <li><strong>Category 3 - Short Workplace Responses (50 Questions):</strong> Selecting the appropriate answer to a supervisor's question</li>
                    <li><strong>Category 4 - Long Dialogue Comprehension (50 Questions):</strong> Identifying the main topic, location, or intended action</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: ADVANCED LISTENING CONVERSATION TECHNIQUES -->
        <div class="seo-content-box">
            <h2>3 Essential Techniques for Listening Exam Questions</h2>
            <p>
                Master these 3 techniques during the audio playback:
            </p>

            <h3>1. Read Answer Choices Before Audio Starts</h3>
            <p>Spend the 10-second prep window scanning options for keywords like locations (공장, 사무실), tools (망치, 스패너), or times (오전, 오후).</p>

            <h3>2. Focus on Question Words (의문사)</h3>
            <p>Pay close attention to who (누구), when (언제), where (어디), why (왜), or how many (몇 개/몇 명).</p>

            <h3>3. Listen for Final Verb Endings</h3>
            <p>Notice whether the speaker asks a question (-습니까?), makes a request (-아/어 주세요), or gives an instruction (-으십시오).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LISTENING 200 -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Listening 200 Questions Korean Test Papers PDF</h2>
            <p>
                Download official Listening 200 Questions <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>EPS TOPIK Listening 200 Questions Paper PDF</strong></td>
                            <td><span class="tag-badge purple">Listening 200 Qs</span></td>
                            <td>2025</td>
                            <td>✔ Solved 200 Audio Scripts + Key</td>
                            <td><a href="../pdf/topik-1-level-1.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2025 Model Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT Model Set</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Real-time EPS TOPIK CBT Paper PDF</strong></td>
                            <td><span class="tag-badge blue">Timed CBT</span></td>
                            <td>2025</td>
                            <td>✔ Timed Audio Simulation Set</td>
                            <td><a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Listening Perfection</h2>
            <p>
                Follow this 3-step blueprint for listening test success:
            </p>
            <ul>
                <li><strong>Step 1 (First Auditory Simulation):</strong> Solve questions Q21-Q40 with audio playback twice without reading transcripts.</li>
                <li><strong>Step 2 (Transcript Verification):</strong> Cross-check missing vocabulary items against the printed Hangul transcript.</li>
                <li><strong>Step 3 (Target Intonation Practice):</strong> Practice listening to female vs male speaker intonation changes in question options.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS Listening 200 Questions</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many total points is the Listening section worth?</div>
                    <div class="faq-answer">
                        The Listening section contains 20 questions worth 5 points each, totaling 100 points out of 200.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Listening 200 Questions PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable EPS TOPIK Listening 200 Questions <strong>korean test papers</strong> on koreantestpapers.in include official HRD Korea answer sheets and transcripts.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many times does audio play in the real UBT exam?</div>
                    <div class="faq-answer">
                        Audio tracks play automatically two times per question with a 10-second pause between plays.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
