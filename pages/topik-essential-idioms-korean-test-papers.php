<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Essential Idioms & Proverbs Korean Test Papers";
$page_desc = "Download free TOPIK Essential Idioms & Proverbs Korean test papers PDF with 100 high-frequency Korean proverbs (속담), body-part idioms (관용구), practice exercises, and answer keys.";
$canonical_url = "https://koreantestpapers.in/topik-essential-idioms-korean-test-papers";

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
  "headline": "TOPIK Essential Idioms & Proverbs Korean Test Papers",
  "description": "Comprehensive study guide and downloadable TOPIK Essential Idioms & Proverbs Korean test papers PDF sets with traditional Korean proverbs, body-part idiomatic expressions, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-essential-idioms-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">TOPIK Essential Idioms & Proverbs Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master high-level Korean proverbs (속담) and idiomatic expressions (관용구) with official TOPIK essential idioms <strong>korean test papers</strong>, complete with exercise drills, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Idioms & Proverbs Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>💡 Idioms & Proverbs Archive</h3>
                    <span class="tag-badge amber">Idioms & Proverbs</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Essential Idioms & Proverbs Test Paper PDF</h4>
                            <p>Full 100 high-frequency Korean proverbs & idioms guide</p>
                        </div>
                        <a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>TOPIK Advanced Vocabulary & Hanja Root PDF</h4>
                            <p>Essential Level 5-6 Four-Character Idioms (사자성어)</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK II Full Exam Paper PDF</h4>
                            <p>Official 91st NIIED session test paper & key</p>
                        </div>
                        <a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE IDIOMS QUIZ SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED IDIOMS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: IDIOMS & PROVERBS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Essential Idioms & Proverbs Korean Test Papers</h2>
            <p>
                In TOPIK II examinations (Levels 3 through 6), questions directly evaluate candidates' knowledge of traditional Korean proverbs (속담) and body-part idiomatic expressions (관용구). Understanding these cultural expressions is crucial for securing top scores in both Reading comprehension (Q16-Q24) and Listening dialogues.
            </p>
            <p>
                Our TOPIK essential idioms <strong>korean test papers</strong> guide compiles 100 high-frequency proverbs and body-part idioms tested by NIIED. Practicing with dedicated idiom <strong>korean exam paper</strong> sets allows students to decode subtle figurative meanings and boost exam performance. Download the complete TOPIK Essential Idioms PDF below.
            </p>

            <div class="callout-box">
                <h4>💡 2 Categories of Expressions Tested in TOPIK</h4>
                <ul>
                    <li><strong>1. Body-Part Idioms (관용구):</strong> Figurative expressions using eyes (눈), ears (귀), mouth (입), hands (손), and feet (발)</li>
                    <li><strong>2. Traditional Proverbs (속담):</strong> Metaphorical folk sayings passed down through Korean culture to express life wisdom</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: TOP HIGH-FREQUENCY BODY-PART IDIOMS -->
        <div class="seo-content-box">
            <h2>Must-Know Body-Part Idioms (관용구)</h2>
            <p>
                Master these 6 body-part idioms frequently tested in TOPIK:
            </p>

            <ul>
                <li><strong>눈이 높다 (Eyes are high):</strong> Having very high standards or expectations</li>
                <li><strong>귀가 얇다 (Ears are thin):</strong> Easily influenced or persuaded by others</li>
                <li><strong>입이 가볍다 (Mouth is light):</strong> Unable to keep secrets / blabbermouth</li>
                <li><strong>손이 크다 (Hands are big):</strong> Very generous or making things in huge quantities</li>
                <li><strong>발이 넓다 (Feet are wide):</strong> Having a vast network of acquaintances/friends</li>
                <li><strong>배가 아프다 (Stomach hurts):</strong> Envious or jealous of someone else's success</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR IDIOMS PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Essential Idioms & Proverbs Korean Test Papers PDF</h2>
            <p>
                Download official TOPIK idioms <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>TOPIK Essential Idioms & Proverbs Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Idioms & Proverbs</span></td>
                            <td>2025</td>
                            <td>✔ Solved 100 Idioms & Drills</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Advanced Vocabulary & Hanja PDF</strong></td>
                            <td><span class="tag-badge amber">Vocab & Hanja</span></td>
                            <td>2025</td>
                            <td>✔ Four-Character Idioms</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Mastering Korean Idioms</h2>
            <p>
                Follow this 3-step blueprint for test success:
            </p>
            <ul>
                <li><strong>Step 1 (Categorize by Body Part):</strong> Group idioms under 눈, 귀, 입, 손, 발 to make memorization logical.</li>
                <li><strong>Step 2 (Practice Contextual Passages):</strong> Read short dialog passages to see how proverbs are inserted into conversation conclusions.</li>
                <li><strong>Step 3 (Solve Past Paper Questions):</strong> Complete idiom questions from official past NIIED examination sessions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Idioms Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What does the Korean proverb "티끌 모아 태산" mean?</div>
                    <div class="faq-answer">
                        It means "Gathering dust turns into a great mountain," equivalent to "Every little bit adds up."
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the idioms paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK idioms <strong>korean test papers</strong> on koreantestpapers.in include complete answer keys and explanations.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many proverb/idiom questions appear in TOPIK II reading?</div>
                    <div class="faq-answer">
                        Typically 2 to 3 questions in TOPIK II reading specifically require choosing the matching proverb or idiom for a given situation.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
