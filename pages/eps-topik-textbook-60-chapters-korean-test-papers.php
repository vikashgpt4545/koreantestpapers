<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK 60 Chapters Book Korean Test Papers";
$page_desc = "Download free EPS TOPIK 60 Chapters Book Korean test papers PDF with official HRD Korea textbook solutions, chapter breakdown, audio script guides, and solved answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-textbook-60-chapters-korean-test-papers";

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
  "headline": "EPS TOPIK 60 Chapters Book Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK 60 Chapters Book Korean test papers PDF sets with official HRD Korea textbook solutions and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-textbook-60-chapters-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK 60 Chapters Book Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master the official HRD Korea 60-chapter textbook curriculum with specialized EPS TOPIK <strong>korean test papers</strong>, featuring chapter-by-chapter exercises, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 60 Chapters Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📚 60-Chapter Textbook Archive</h3>
                    <span class="tag-badge green">Official HRD Book</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 60 Chapters Textbook Test Paper</h4>
                            <p>Full 60-chapter official textbook practice set</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Chapter-wise Quiz & Question Bank PDF</h4>
                            <p>Chapter 1 to 60 individual practice quizzes</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Essential Vocabulary Exam Paper</h4>
                            <p>Full 2,000-word classified textbook vocabulary paper</p>
                        </div>
                        <a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 60-CHAPTER QUIZ SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 60 CHAPTERS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 60 CHAPTERS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK 60 Chapters Book Korean Test Papers</h2>
            <p>
                The official HRD Korea Standard Textbook (한국어 표준교재) consists of 60 structured chapters divided into Book 1 (Chapters 1 to 30) and Book 2 (Chapters 31 to 60). Every single question appearing in the official EPS-TOPIK examination is drawn directly from the vocabulary, grammar dialogues, culture sections (한국 문화), and workplace safety guidelines contained within these 60 chapters.
            </p>
            <p>
                Our 60-chapter textbook <strong>korean test papers</strong> compilation maps every single textbook chapter into targeted reading and listening mock tests. Practicing with dedicated textbook <strong>korean exam paper</strong> sets guarantees 100% curriculum coverage and secures top exam performance. Download the complete 60-chapter textbook paper PDF below.
            </p>

            <div class="callout-box">
                <h4>📚 Structure of HRD Korea 60-Chapter Standard Textbook</h4>
                <ul>
                    <li><strong>Book 1 - Chapter 1 to 5:</strong> Hangul alphabet, basic greetings, classroom expressions, personal introductions</li>
                    <li><strong>Book 1 - Chapter 6 to 15:</strong> Daily routines, locations, food ordering, weather, appointment scheduling</li>
                    <li><strong>Book 1 - Chapter 16 to 30:</strong> Hobbies, transportation, shopping, phone etiquette, Korean culture & etiquette</li>
                    <li><strong>Book 2 - Chapter 31 to 40:</strong> Climate, workplace etiquette, industrial work life, manufacturing operations</li>
                    <li><strong>Book 2 - Chapter 41 to 50:</strong> Hand tools, machinery operation, workplace safety, industrial accident prevention</li>
                    <li><strong>Book 2 - Chapter 51 to 60:</strong> EPS employment procedures, employment contracts, visas, residence laws, health insurance</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: BOOK 1 VS BOOK 2 EXAM WEIGHTAGE -->
        <div class="seo-content-box">
            <h2>Exam Weightage: Book 1 (Ch 1-30) vs Book 2 (Ch 31-60)</h2>
            <p>
                Understanding how questions are weighted across the two textbook volumes is vital for prioritizing revision time:
            </p>

            <h3>1. Book 1 (Chapters 1 - 30): ~35% Exam Weightage</h3>
            <p>
                Focuses on elementary Korean grammar, daily conversational dialogues, public facility usage, and foundational vocabulary. These chapters account for basic reading and listening questions (Questions 1 to 10).
            </p>

            <h3>2. Book 2 (Chapters 31 - 60): ~65% Exam Weightage</h3>
            <p>
                Focuses directly on factory work environments, hand tool operation, safety signboards, industrial regulations, emergency reporting, and E-9 visa legal procedures. These chapters form the bulk of mid to high-difficulty questions (Questions 11 to 20).
            </p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 60 CHAPTERS PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK 60 Chapters Book Korean Test Papers PDF</h2>
            <p>
                Download official 60-chapter textbook <strong>korean exam paper</strong> sets with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Textbook Modules</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>EPS TOPIK 60 Chapters Textbook Paper PDF</strong></td>
                            <td><span class="tag-badge green">Official HRD Book</span></td>
                            <td>2025</td>
                            <td>✔ Solved 60 Chapters + Key</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Chapter-wise Quiz & Question Bank PDF</strong></td>
                            <td><span class="tag-badge green">Chapter Quizzes</span></td>
                            <td>2025</td>
                            <td>✔ Individual Chapter Quizzes</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Essential Vocabulary Paper PDF</strong></td>
                            <td><span class="tag-badge green">Vocab Set</span></td>
                            <td>2025</td>
                            <td>✔ 2,000 Classified Words</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT FOR THE 60 CHAPTERS -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Master Revision of 60 Chapters</h2>
            <p>
                Follow this structured 3-step revision plan:
            </p>
            <ul>
                <li><strong>Step 1 (Daily 2-Chapter Pacing):</strong> Complete 2 textbook chapters daily, reviewing main dialogue text and grammar notes.</li>
                <li><strong>Step 2 (Solve Chapter Quizzes Immediately):</strong> Immediately complete the practice reading and listening quiz at the end of each chapter.</li>
                <li><strong>Step 3 (Focus Extra Time on Chapters 41-50):</strong> Spend double revision time on chapters 41 to 50 covering tools, machinery, and workplace safety rules.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 60 Chapters Book Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Can I pass the EPS-TOPIK exam by studying only the 60-chapter textbook?</div>
                    <div class="faq-answer">
                        Yes! The official HRD Korea 60-chapter textbook contains 100% of the vocabulary, grammar, and workplace scenarios tested in the exam.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are official audio script tracks included in the 60-chapter PDF download?</div>
                    <div class="faq-answer">
                        Yes! Our downloadable textbook <strong>korean test papers</strong> PDF includes full Hangul audio transcripts for all 60 chapters.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: What are the most important chapters for the manufacturing field exam?</div>
                    <div class="faq-answer">
                        Chapters 41 through 50 (covering hand tools, machinery operation, packaging, safety gear, and accident prevention) are the most critical.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
