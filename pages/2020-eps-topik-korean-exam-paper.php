<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "2020 Real Exam EPS TOPIK Korean Exam Paper";
$page_desc = "Download free 2020 Real Exam EPS TOPIK Korean exam paper PDF with verified HRD Korea answer keys, listening transcripts, reading solutions, and past paper archives.";
$canonical_url = "https://koreantestpapers.in/2020-eps-topik-korean-exam-paper";

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
  "headline": "2020 Real Exam EPS TOPIK Korean Exam Paper",
  "description": "Comprehensive study guide and downloadable 2020 Real Exam EPS TOPIK Korean exam paper PDF sets with answer sheets and audio transcripts.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/2020-eps-topik-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">2020 Real Exam EPS TOPIK Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Download solved 2020 real exam EPS TOPIK <strong>korean exam paper</strong> PDF sets complete with official HRD Korea answer keys, listening transcripts, and solved <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: 2020 Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>📜 2020 Real Exam Archive</h3>
                    <span class="tag-badge green">2020 Solved</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2020 Real Exam EPS TOPIK Exam Paper</h4>
                            <p>Official 40-question past paper with answer sheet</p>
                        </div>
                        <a href="../pdf/eps-topik-2020-past.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2021 Practice Set EPS TOPIK Test Paper</h4>
                            <p>Solved 2021 previous year exam paper & key</p>
                        </div>
                        <a href="../pdf/eps-topik-2021-past.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2022 Previous Year EPS TOPIK Paper PDF</h4>
                            <p>Official 2022 exam set with HRD answer sheet</p>
                        </div>
                        <a href="../pdf/eps-topik-2022-past.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE 2020 MOCK PRACTICE
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 2020 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 2020 EXAM HISTORY & CORE LESSONS -->
        <div class="seo-content-box">
            <h2>Comprehensive Analysis of 2020 Real Exam EPS TOPIK Papers</h2>
            <p>
                The 2020 EPS-TOPIK examination cycle represents a cornerstone archive in HRD Korea's standardized language testing history. Conducted during the transition to nationwide computer-based test centers, the 2020 test papers established core principles for picture matching questions, workplace conversation dialogues, and particle usage evaluations.
            </p>
            <p>
                Practicing with authentic 2020 real exam <strong>korean exam paper</strong> sets allows students to trace the evolution of HRD Korea question patterns over the past five years. Because core grammar rules and essential factory vocabulary remain unchanged, mastering 2020 <strong>korean test papers</strong> ensures a thorough understanding of foundational exam material.
            </p>

            <div class="callout-box">
                <h4>📜 2020 Real Exam Specification Blueprint</h4>
                <ul>
                    <li><strong>Reading Module:</strong> 20 Questions (25 Minutes | 100 Points)</li>
                    <li><strong>Listening Module:</strong> 20 Questions (25 Minutes | 100 Points)</li>
                    <li><strong>Total Points:</strong> 200 Maximum Points</li>
                    <li><strong>Primary Focus:</strong> Factory safety gear, basic action verbs, public signboards</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 5 ESSENTIAL LESSONS FROM 2020 PAPERS -->
        <div class="seo-content-box">
            <h2>5 Core Lessons Derived from 2020 Real Exam Papers</h2>
            <p>
                Solving 2020 paper sets highlights 5 fundamental exam strategies:
            </p>

            <h3>1. Accurate Action Verb Conjugation (동사 활용)</h3>
            <p>Understanding informal polite conjugations (e.g., <em>가다 ➔ 가요</em>, <em>먹다 ➔ 먹어요</em>, <em>하다 ➔ 해요</em>).</p>

            <h3>2. Directional Particles: -으/로 (Toward / By means of)</h3>
            <p>Distinguishing direction particle usages (e.g., <em>오른쪽으로 가세요 [Go to the right]</em>, <em>버스로 가요 [Go by bus]</em>).</p>

            <h3>3. Workplace Equipment Names (작업 도구 명칭)</h3>
            <p>Identification of basic tools: <em>망치 (Hammer)</em>, <em>드라이버 (Screwdriver)</em>, <em>니퍼 (Nippers)</em>, and <em>플라이어 (Pliers)</em>.</p>

            <h3>4. Simple Medical Symptom Expressions (증상 표현)</h3>
            <p>Comprehending doctor-patient dialogues: <em>감기에 걸렸어요 (Caught a cold)</em>, <em>열이 나요 (Have a fever)</em>.</p>

            <h3>5. Time & Date Reading Rules (날짜 및 시간 읽기)</h3>
            <p>Mastering Sino-Korean numbers for months/days (e.g., <em>5월 15일 - 오월 십오일</em>) and Native Korean numbers for hours (e.g., <em>3시 - 세 시</em>).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 2020 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 2020 Real Exam EPS TOPIK Korean Exam Paper PDF</h2>
            <p>
                Download official 2020 real exam <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>2020 Real Exam EPS TOPIK Paper PDF</strong></td>
                            <td><span class="tag-badge green">2020 Solved</span></td>
                            <td>2020</td>
                            <td>✔ Solved Paper + HRD Key</td>
                            <td><a href="../pdf/eps-topik-2020-past.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2021 Practice Set EPS TOPIK Paper PDF</strong></td>
                            <td><span class="tag-badge green">2021 Practice</span></td>
                            <td>2021</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2021-past.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2022 Previous Year EPS TOPIK Paper PDF</strong></td>
                            <td><span class="tag-badge green">2022 Past</span></td>
                            <td>2022</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2022-past.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>Multi-Year Past Paper Study Roadmap (2020 - 2025)</h2>
            <p>
                To secure a score of 160+ points in your upcoming EPS-TOPIK exam, follow this multi-year study sequence:
            </p>
            <ul>
                <li><strong>Phase 1 (2020 & 2021 Papers):</strong> Master baseline tool names, basic particles, and simple action verbs.</li>
                <li><strong>Phase 2 (2022 & 2023 Papers):</strong> Practice timed CBT mock tests, reading graphs, and longer dialogues.</li>
                <li><strong>Phase 3 (2024 & 2025 Papers):</strong> Polish speed and accuracy on complex industrial safety signboards and UBT tablet controls.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 2020 Real Exam Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official answer keys included in the 2020 exam paper PDF?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 2020 real exam <strong>korean exam paper</strong> sets on koreantestpapers.in include full HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Why should candidates study 2020 papers alongside newer 2024 sets?</div>
                    <div class="faq-answer">
                        Studying 2020 papers provides a solid foundation in core vocabulary and grammar that forms the bedrock of all recent exam sets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many questions are in the 2020 real exam paper?</div>
                    <div class="faq-answer">
                        The PDF contains the complete 20-question Reading section and 20-question Listening section script.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
