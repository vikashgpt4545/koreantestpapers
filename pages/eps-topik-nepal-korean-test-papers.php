<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Nepal Special Edition Korean Test Papers";
$page_desc = "Download free EPS TOPIK Nepal Special Edition Korean test papers PDF with official HRD Korea exam questions, Nepali candidate study guides, sector practice papers, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-nepal-korean-test-papers";

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
  "headline": "EPS TOPIK Nepal Special Edition Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Nepal Special Edition Korean test papers PDF sets with official HRD Korea paper archives and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-nepal-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Nepal Special Edition Korean Test Papers</h1>
            <p class="hero-subtitle">
                Download official HRD Korea EPS TOPIK Nepal special edition <strong>korean test papers</strong>, complete with UBT tablet practice tests, manufacturing & agriculture sector papers, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Nepal Edition Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🇳🇵 Nepal Special Edition Archive</h3>
                    <span class="tag-badge green">Nepal EPS Official</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Nepal Special Edition Paper PDF</h4>
                            <p>Full 40-question UBT model test paper with answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Agriculture & Livestock Exam Paper</h4>
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
                        <span class="live-dot"></span> LIVE NEPAL EPS SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED NEPAL GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: NEPAL EPS SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Nepal Special Edition Korean Test Papers</h2>
            <p>
                Nepal is one of the largest sending countries for foreign workers entering South Korea under the Employment Permit System (EPS). Managed jointly by the EPS Korea Section under Nepal's Ministry of Labour, Employment and Social Security and HRD Korea, thousands of Nepali candidates take the UBT (Ubiquitous-Based Testing) examination annually in Lalitpur (Gwarko).
            </p>
            <p>
                Our EPS TOPIK Nepal special edition <strong>korean test papers</strong> compile past exam papers customized for Nepali candidates across Manufacturing (제조업), Agriculture & Livestock (농축산업), and Construction (건설업). Practicing with specialized Nepal edition <strong>korean exam paper</strong> sets prepares candidates to score 180+ points and secure E-9 employment visas. Download the complete Nepal special edition paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🇳🇵 Key Features of EPS-TOPIK Nepal Examinations</h4>
                <ul>
                    <li><strong>Exam Location:</strong> UBT Exam Hall, EPS Korea Section Nepal, Gwarko, Lalitpur</li>
                    <li><strong>Tested Sectors:</strong> Manufacturing (제조업), Agriculture/Livestock (농축산업), Construction (건설업)</li>
                    <li><strong>Exam Format:</strong> 40 Questions (20 Reading + 20 Listening) on Touch Screen UBT Tablets</li>
                    <li><strong>Passing Score Standards:</strong> Manufacturing ~160+ Pts | Agriculture ~140+ Pts</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: SECTOR-WISE PAPERS AVAILABLE FOR NEPAL CANDIDATES -->
        <div class="seo-content-box">
            <h2>Sector-Wise EPS Test Papers for Nepali Candidates</h2>
            <p>
                Choose your specific job category to download tailored paper archives:
            </p>

            <h3>1. Manufacturing Sector Paper Set (제조업)</h3>
            <p>Focuses on factory tools, machinery safety, assembly line processes, hand tools (망치, 니퍼, 스패너), and industrial safety signboards.</p>

            <h3>2. Agriculture & Livestock Sector Paper Set (농축산업)</h3>
            <p>Focuses on crop harvesting, greenhouse farming (비닐하우스), agricultural machinery (경운기, 트랙터), animal feed management, and farm tools.</p>

            <h3>3. Construction Sector Paper Set (건설업)</h3>
            <p>Focuses on scaffolding (비계), cement mixing, rebar tying (철근 조립), heavy crane operations, and construction site safety regulations.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR NEPAL PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Nepal Special Edition Korean Test Papers PDF</h2>
            <p>
                Download official Nepal special edition <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>EPS TOPIK Nepal Special Edition Paper PDF</strong></td>
                            <td><span class="tag-badge green">Nepal EPS</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT + Key</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Agriculture & Livestock Sector Paper PDF</strong></td>
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
            <h2>3-Step Revision Strategy for Nepali Applicants</h2>
            <p>
                Follow this 3-step strategy to rank high on the EPS Nepal roster:
            </p>
            <ul>
                <li><strong>Step 1 (Master 60-Chapter Textbook):</strong> Study the official HRD Korea textbook chapters 1 to 60 thoroughly.</li>
                <li><strong>Step 2 (Practice Touchscreen UBT Tests):</strong> Solve mock tests on mobile touch screens to simulate the Gwarko UBT exam hall environment.</li>
                <li><strong>Step 3 (Skill Test Preparation):</strong> Practice basic Korean self-introduction (자기소개) and physical fitness tests for Phase 2.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Nepal Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Where is the official EPS-TOPIK exam hall located in Nepal?</div>
                    <div class="faq-answer">
                        The official UBT exam center is located at the EPS Korea Section Nepal Building in Gwarko, Lalitpur.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Nepal special edition PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Nepal special edition <strong>korean test papers</strong> on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are agricultural sector questions different from manufacturing questions?</div>
                    <div class="faq-answer">
                        Yes! While basic grammar is identical, sector-specific vocabulary questions differ between Manufacturing (tools/factory safety) and Agriculture (crops/farming tools).
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
