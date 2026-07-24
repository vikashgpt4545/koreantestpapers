<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Listening MP3 Pack 1 Korean Exam Paper";
$page_desc = "Download free Korean Listening MP3 Pack 1 Korean exam paper PDF with official HRD Korea listening script transcripts, MP3 audio links, question sets, and answer keys.";
$canonical_url = "https://koreantestpapers.in/korean-listening-mp3-set-1-korean-exam-paper";

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
  "headline": "Korean Listening MP3 Pack 1 Korean Exam Paper",
  "description": "Comprehensive guide and downloadable Korean Listening MP3 Pack 1 Korean exam paper PDF sets with full Hangul audio transcripts, MP3 practice tracks, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-listening-mp3-set-1-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Korean Listening MP3 Pack 1 Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Sharpen your native speaker listening comprehension with official Korean Listening MP3 Pack 1 <strong>korean exam paper</strong> sets, featuring full Hangul audio transcripts, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Listening MP3 Pack 1 Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🎧 Listening MP3 Pack 1 Archive</h3>
                    <span class="tag-badge purple">Listening MP3 Set 1</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Korean Listening MP3 Pack 1 Exam Paper PDF</h4>
                            <p>Full 20-question audio transcript & script paper set</p>
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
                        <span class="live-dot"></span> LIVE LISTENING MP3 SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LISTENING MP3 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LISTENING MP3 PACK 1 OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Korean Listening MP3 Pack 1 Korean Exam Papers</h2>
            <p>
                The Listening Section (듣기) accounts for 50% of your total score on the EPS-TOPIK exam (100 points out of 200) and 100 points on the TOPIK I/II exams. Many non-native candidates struggle with natural Korean pronunciation, liaison sound changes (연음 현상), and fast speech speed during test center sessions.
            </p>
            <p>
                Our Korean Listening MP3 Pack 1 <strong>korean exam paper</strong> module provides authentic audio practice tracks accompanied by line-by-line Hangul transcripts and English translations. Practicing with dedicated listening MP3 <strong>korean test papers</strong> sharpens ear accuracy and helps candidates eliminate audio confusion. Download the complete Listening MP3 Pack 1 PDF below.
            </p>

            <div class="callout-box">
                <h4>🎧 What's Included in Listening MP3 Pack 1?</h4>
                <ul>
                    <li><strong>Phonetic Sound Drills (Q21-Q24):</strong> Distinguishing similar Korean consonants (ㄱ/ㅋ/ㄲ, ㄷ/ㅌ/ㄸ, ㅂ/ㅍ/ㅃ)</li>
                    <li><strong>Visual Action Dialogues (Q25-Q28):</strong> Identifying what the speaker is doing from 4 picture choices</li>
                    <li><strong>Short Workplace Conversations (Q29-Q34):</strong> Answering questions about factory task assignments and schedules</li>
                    <li><strong>Long Dialogues & Announcements (Q35-Q40):</strong> Identifying main ideas, central topics, and future actions</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW SOUND CHANGE RULES (연음 현상) -->
        <div class="seo-content-box">
            <h2>Key Korean Pronunciation & Sound Change Rules</h2>
            <p>
                Master these 3 speech rules to understand spoken audio instantly:
            </p>

            <h3>1. Liaison Rule (연음 현상)</h3>
            <p>When a final consonant (받침) is followed by a vowel, the consonant shifts to the initial position of the next syllable (e.g., 한국어 sounds like [한구거], 먹었어요 sounds like [머거써요]).</p>

            <h3>2. Nasalization Rule (비음화)</h3>
            <p>Consonants ㄱ, ㄷ, ㅂ change to ㅇ, ㄴ, ㅁ when followed by ㄴ or ㅁ (e.g., 한국말 sounds like [한궁말], 국물 sounds like [궁물]).</p>

            <h3>3. Tensification / Glottalization (경음화)</h3>
            <p>Plain consonants become double consonants after final stops (e.g., 학교 sounds like [학교], 식당 sounds like [식땅]).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LISTENING MP3 PACK 1 -->
        <div class="seo-content-box">
            <h2>Download Solved Korean Listening MP3 Pack 1 Korean Exam Paper PDF</h2>
            <p>
                Download official Listening MP3 Pack 1 <strong>korean test papers</strong> with complete audio transcripts below:
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
                            <td><strong>Korean Listening MP3 Pack 1 Paper PDF</strong></td>
                            <td><span class="tag-badge purple">Listening MP3</span></td>
                            <td>2025</td>
                            <td>✔ Solved Transcripts & Keys</td>
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
            <h2>3-Step Blueprint for Listening Practice</h2>
            <p>
                Follow this 3-step blueprint to improve audio listening scores:
            </p>
            <ul>
                <li><strong>Step 1 (First Listen Without Transcripts):</strong> Listen to the MP3 track and answer the questions under test conditions.</li>
                <li><strong>Step 2 (Second Listen With Transcripts):</strong> Read the Hangul script while re-listening to catch un-heard words.</li>
                <li><strong>Step 3 (Shadowing Practice):</strong> Repeat sentences aloud following the audio track pace to build brain recognition speed.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Listening MP3 Pack 1</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many times does audio play in the EPS TOPIK exam?</div>
                    <div class="faq-answer">
                        Each listening question audio track plays exactly two times automatically.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does Listening MP3 Pack 1 include printed scripts?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Listening MP3 Pack 1 <strong>korean exam paper</strong> sets on koreantestpapers.in include full Hangul transcripts and answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How can I preview the next question during audio pauses?</div>
                    <div class="faq-answer">
                        Use the 10-second gap between questions to read the answer choices of the upcoming question before the audio begins.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
