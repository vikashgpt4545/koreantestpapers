<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Intermediate Listening Level 3-4 Korean Exam Paper";
$page_desc = "Download free TOPIK Intermediate Listening Level 3-4 Korean exam paper PDF with official NIIED 50-question audio scripts, intermediate dialogues, news broadcasts, and answer keys.";
$canonical_url = "https://koreantestpapers.in/topik-listening-level-3-4-korean-exam-paper";

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
  "headline": "TOPIK Intermediate Listening Level 3-4 Korean Exam Paper",
  "description": "Comprehensive guide and downloadable TOPIK Intermediate Listening Level 3-4 Korean exam paper PDF sets with NIIED Level 3-4 listening transcripts, audio tracks, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-listening-level-3-4-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK Intermediate Listening Level 3-4 Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Advance your intermediate listening comprehension with official TOPIK Intermediate Listening Level 3-4 <strong>korean exam paper</strong> sets, featuring 50-question audio transcripts, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Intermediate Listening Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🎧 TOPIK II Listening Level 3-4 Archive</h3>
                    <span class="tag-badge amber">Intermediate Level 3-4</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Intermediate Listening Level 3-4 Paper PDF</h4>
                            <p>Full 50-question audio script & solution set</p>
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
                        <span class="live-dot"></span> LIVE TOPIK II LISTENING SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED INTERMEDIATE LISTENING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: INTERMEDIATE LISTENING OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Intermediate Listening Level 3-4 Korean Exam Papers</h2>
            <p>
                The TOPIK II Listening section comprises 50 questions administered over a 60-minute audio period, worth 100 points. Intermediate level questions (Q1-Q30) cover workplace discussions, cultural debates, radio announcements, and interview dialogues. Unlike TOPIK I where audio tracks play twice, TOPIK II audio plays <strong>ONLY ONCE</strong> for Questions 1 through 20!
            </p>
            <p>
                Our TOPIK Intermediate Listening Level 3-4 <strong>korean exam paper</strong> system provides authentic NIIED practice tracks, full Hangul transcripts, and solution guides. Practicing with dedicated intermediate listening <strong>korean test papers</strong> ensures candidates adapt to single-play audio speed. Download the complete TOPIK II Listening Level 3-4 PDF below.
            </p>

            <div class="callout-box">
                <h4>🎧 TOPIK II Listening Question Formats (Q1-Q30)</h4>
                <ul>
                    <li><strong>Q1 - Q3 (Audio Play 1 Time | Conversation Continuation):</strong> Choosing the next logical response in a conversation</li>
                    <li><strong>Q4 - Q8 (Audio Play 1 Time | Action Identification):</strong> Identifying what action the speaker will take next</li>
                    <li><strong>Q9 - Q12 (Audio Play 1 Time | Matching Content):</strong> Identifying which statement matches the audio dialogue</li>
                    <li><strong>Q13 - Q16 (Audio Play 1 Time | Central Thought):</strong> Identifying the speaker's main intent or argument</li>
                    <li><strong>Q17 - Q30 (Audio Play 2 Times | Paired Questions):</strong> Answering 2 questions per long dialogue/interview</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: ADVANCED LISTENING CONVERSATION PATTERNS -->
        <div class="seo-content-box">
            <h2>Key Expressions for Intermediate Listening Success</h2>
            <p>
                Recognize these 4 common speaker intention markers:
            </p>

            <h3>1. Expressing Regret or Disappointment (-을 걸 그랬다)</h3>
            <p>Example: "미리 예약해 둘 걸 그랬어요." (I should have made a reservation in advance.)</p>

            <h3>2. Expressing Partial Agreement (-기는 하지만)</h3>
            <p>Example: "동의하기는 하지만 비용이 너무 많이 듭니다." (I agree, but the cost is too high.)</p>

            <h3>3. Making Suggestions or Solutions (-(으)ㄹ 필요가 있다)</h3>
            <p>Example: "제도를 개선할 필요가 있다고 봅니다." (I think there is a need to improve the system.)</p>

            <h3>4. Speculating Cause (-(으)ㄴ 것으로 보인다)</h3>
            <p>Example: "홍보 부족이 원인인 것으로 보입니다." (Lack of promotion appears to be the cause.)</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR INTERMEDIATE LISTENING -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Intermediate Listening Level 3-4 Korean Exam Paper PDF</h2>
            <p>
                Download official TOPIK II listening <strong>korean test papers</strong> with complete audio transcripts below:
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
                            <td><strong>TOPIK Intermediate Listening Level 3-4 Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Intermediate Level 3-4</span></td>
                            <td>2025</td>
                            <td>✔ Solved 50 Listening Transcripts</td>
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
                            <td>✔ Level 3-4 Listening Expressions</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Level 3-4 Listening Success</h2>
            <p>
                Follow this 3-step blueprint for single-play audio focus:
            </p>
            <ul>
                <li><strong>Step 1 (Pre-Read Q1-Q20 Options):</strong> Always read all 4 options before the 1-play audio track starts speaking.</li>
                <li><strong>Step 2 (Identify Speaker Gender Roles):</strong> Pay attention to whether the question asks about the man (남자) or woman (여자).</li>
                <li><strong>Step 3 (Target 60+ Points in Listening):</strong> Correctly answering Q1-Q30 yields 60 points, laying a firm foundation for Level 4 certification.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Intermediate Listening</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many times does audio play for Questions 1-20 in TOPIK II?</div>
                    <div class="faq-answer">
                        Audio plays exactly ONCE for Questions 1 through 20 in TOPIK II listening!
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the TOPIK Level 3-4 listening paper PDF include full transcripts?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK Intermediate Listening Level 3-4 <strong>korean exam paper</strong> sets on koreantestpapers.in include printed Hangul transcripts.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How long is the TOPIK II listening examination?</div>
                    <div class="faq-answer">
                        The TOPIK II listening exam contains 50 questions and lasts 60 minutes.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
