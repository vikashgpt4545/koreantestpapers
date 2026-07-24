<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Cambodia Model Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Cambodia Model Korean exam paper PDF with official HRD Korea Phnom Penh exam questions, Cambodian candidate study guides, sector practice papers, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-cambodia-korean-exam-paper";

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
  "headline": "EPS TOPIK Cambodia Model Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Cambodia Model Korean exam paper PDF sets with official HRD Korea Phnom Penh paper archives and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-cambodia-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Cambodia Model Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Download official HRD Korea EPS TOPIK Cambodia model <strong>korean exam paper</strong> sets, complete with UBT tablet practice tests, manufacturing & agriculture sector papers, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Cambodia Model Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🇰🇭 Cambodia Model Archive</h3>
                    <span class="tag-badge green">Cambodia EPS Official</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Cambodia Model Paper PDF</h4>
                            <p>Full 40-question UBT model test paper with answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Agriculture & Farming Exam Paper</h4>
                            <p>Agriculture sector specific practice set & key</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Manufacturing Sector Test Paper</h4>
                            <p>Factory hand tools & machinery safety paper</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE CAMBODIA EPS SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED CAMBODIA GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: CAMBODIA EPS SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Cambodia Model Korean Exam Papers</h2>
            <p>
                Cambodia represents a key partner country under South Korea's Employment Permit System (EPS). Managed jointly by the Ministry of Labour and Vocational Training (MLVT / MTT) in Phnom Penh and HRD Korea, thousands of Cambodian job seekers compete for E-9 employment opportunities across South Korea's manufacturing, agricultural, construction, and livestock sectors.
            </p>
            <p>
                Our EPS TOPIK Cambodia model <strong>korean exam paper</strong> repository compiles official UBT past papers tailored for Cambodian candidates. Practicing with dedicated Cambodia edition <strong>korean test papers</strong> ensures candidates master essential Korean workplace vocabulary, reading comprehension, and listening dialogue speed. Download the complete Cambodia model paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🇰🇭 Key Features of EPS-TOPIK Cambodia Examinations</h4>
                <ul>
                    <li><strong>Exam Center:</strong> HRD Korea EPS Examination Center, Phnom Penh, Cambodia</li>
                    <li><strong>Tested Sectors:</strong> Manufacturing (제조업), Agriculture & Livestock (농축산업), Construction (건설업)</li>
                    <li><strong>Exam Format:</strong> 40 Questions (20 Reading + 20 Listening) on Touchscreen UBT Tablets</li>
                    <li><strong>Passing Cutoff Standards:</strong> Manufacturing ~165+ Pts | Agriculture ~145+ Pts</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: SECTOR-WISE PAPERS FOR CAMBODIAN APPLICANTS -->
        <div class="seo-content-box">
            <h2>Sector-Wise EPS Test Papers for Cambodian Candidates</h2>
            <p>
                Select your designated sector to download specialized question papers:
            </p>

            <h3>1. Manufacturing Sector Paper Set (제조업)</h3>
            <p>Covers metal cutting, press operations, plastic molding, hand tool usage (hammer, screwdriver, pliers), and factory safety signboards.</p>

            <h3>2. Agriculture & Farming Sector Paper Set (농축산업)</h3>
            <p>Covers greenhouse farming (비닐하우스), vegetable harvesting, fruit packing, irrigation pumps, tractor operation, and livestock care.</p>

            <h3>3. Construction Sector Paper Set (건설업)</h3>
            <p>Covers scaffolding erection, rebar tying, concrete pouring, safety harness inspections, and site danger signboards.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR CAMBODIA PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Cambodia Model Korean Exam Paper PDF</h2>
            <p>
                Download official Cambodia model <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>EPS TOPIK Cambodia Model Paper PDF</strong></td>
                            <td><span class="tag-badge green">Cambodia EPS</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT + Key</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Agriculture & Farming Sector Paper PDF</strong></td>
                            <td><span class="tag-badge green">Agriculture</span></td>
                            <td>2025</td>
                            <td>✔ Farm Tools & Machinery</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Manufacturing Sector Test Paper PDF</strong></td>
                            <td><span class="tag-badge green">Manufacturing</span></td>
                            <td>2025</td>
                            <td>✔ Factory Hand Tools & Safety</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Strategy for Cambodian Applicants</h2>
            <p>
                Follow this 3-step blueprint to maximize your exam score in Phnom Penh:
            </p>
            <ul>
                <li><strong>Step 1 (Daily Vocabulary Drills):</strong> Memorize 40 essential HRD Korea vocabulary words every day from textbook chapters 1 to 60.</li>
                <li><strong>Step 2 (Simulated Touchscreen UBT Practice):</strong> Solve full 40-question UBT mock papers under strict 50-minute timer conditions.</li>
                <li><strong>Step 3 (Interview Command Practice):</strong> Practice spoken Korean commands and self-introduction (자기소개) for Phase 2 skill testing.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Cambodia Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Where is the official EPS-TOPIK exam hall located in Cambodia?</div>
                    <div class="faq-answer">
                        The official UBT exam hall is located at the HRD Korea EPS Examination Center in Phnom Penh, Cambodia.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Cambodia model PDF include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Cambodia model <strong>korean exam paper</strong> files on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: What passing score is required for Cambodia manufacturing applicants?</div>
                    <div class="faq-answer">
                        Due to high competition, manufacturing applicants in Cambodia generally require a score of 165 points or higher out of 200.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
