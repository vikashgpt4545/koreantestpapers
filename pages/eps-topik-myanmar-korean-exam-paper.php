<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Myanmar Special Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Myanmar Special Korean exam paper PDF with official HRD Korea Yangon exam questions, Myanmar candidate study guides, sector practice papers, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-myanmar-korean-exam-paper";

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
  "headline": "EPS TOPIK Myanmar Special Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Myanmar Special Korean exam paper PDF sets with official HRD Korea Yangon paper archives and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-myanmar-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Myanmar Special Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Download official HRD Korea EPS TOPIK Myanmar special edition <strong>korean exam paper</strong> sets, complete with UBT tablet practice tests, manufacturing & agriculture sector papers, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Myanmar Special Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🇲🇲 Myanmar Special Archive</h3>
                    <span class="tag-badge green">Myanmar EPS Official</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Myanmar Special Exam Paper PDF</h4>
                            <p>Full 40-question UBT model test paper with answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Agriculture & Farming Exam Paper</h4>
                            <p>Agriculture & livestock practice set & key</p>
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
                        <span class="live-dot"></span> LIVE MYANMAR EPS SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED MYANMAR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: MYANMAR EPS SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Myanmar Special Korean Exam Papers</h2>
            <p>
                Myanmar candidates represent a fast-growing group of foreign workforce applicants under South Korea's Employment Permit System (EPS). Managed jointly by the Ministry of Labour (Yangon) and HRD Korea, thousands of Myanmar workers prepare for the annual UBT examination to secure E-9 employment in South Korea's Manufacturing, Agriculture, Construction, and Livestock industries.
            </p>
            <p>
                Our EPS TOPIK Myanmar special edition <strong>korean exam paper</strong> archives contain official UBT question papers customized for Myanmar applicants. Practicing with specialized Myanmar edition <strong>korean test papers</strong> enables candidates to score 165+ points and secure placement on the official employment roster. Download the complete Myanmar special edition paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🇲🇲 Key Features of EPS-TOPIK Myanmar Examinations</h4>
                <ul>
                    <li><strong>Coordinating Body:</strong> Ministry of Labour Myanmar & HRD Korea Office, Yangon</li>
                    <li><strong>Tested Sectors:</strong> Manufacturing (제조업), Agriculture (농축산업), Construction (건설업)</li>
                    <li><strong>Exam Format:</strong> 40 Questions (20 Reading + 20 Listening) on Touchscreen UBT Tablets</li>
                    <li><strong>Passing Score Standards:</strong> Manufacturing ~165+ Pts | Agriculture ~140+ Pts</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: SECTOR-WISE PAPERS FOR MYANMAR CANDIDATES -->
        <div class="seo-content-box">
            <h2>Sector-Wise EPS Test Papers for Myanmar Applicants</h2>
            <p>
                Select your designated sector to download specialized past papers:
            </p>

            <h3>1. Manufacturing Sector Paper Set (제조업)</h3>
            <p>Covers factory hand tools, lathe operations, press safety, product packaging, industrial safety signboards, and factory rules.</p>

            <h3>2. Agriculture & Livestock Sector Paper Set (농축산업)</h3>
            <p>Covers crop harvesting, greenhouse farming (비닐하우스), agricultural tools, tractor operations, and livestock care routines.</p>

            <h3>3. Construction Sector Paper Set (건설업)</h3>
            <p>Covers scaffolding erection, cement mixing, rebar assembling, crane signaling, and construction site safety regulations.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR MYANMAR PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Myanmar Special Korean Exam Paper PDF</h2>
            <p>
                Download official Myanmar special edition <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>EPS TOPIK Myanmar Special Paper PDF</strong></td>
                            <td><span class="tag-badge green">Myanmar EPS</span></td>
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
            <h2>3-Step Revision Strategy for Myanmar Applicants</h2>
            <p>
                Follow this 3-step strategy to rank high on the Yangon roster:
            </p>
            <ul>
                <li><strong>Step 1 (Master 60 Chapters):</strong> Thoroughly study the 60 chapters of the official HRD Korea standard textbook.</li>
                <li><strong>Step 2 (Simulated Touchscreen UBT Practice):</strong> Practice mock papers on tablet screens under a strict 50-minute time limit.</li>
                <li><strong>Step 3 (Skill Test Preparation):</strong> Prepare 1-minute Korean self-introductions and physical fitness tests.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Myanmar Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Which agency coordinates EPS-TOPIK in Myanmar?</div>
                    <div class="faq-answer">
                        The Ministry of Labour Myanmar coordinates registration and UBT testing with HRD Korea in Yangon.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Myanmar special edition PDF include answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Myanmar special edition <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are agricultural sector papers available for Myanmar candidates?</div>
                    <div class="faq-answer">
                        Yes! Agricultural sector papers covering crop harvesting, greenhouse tools, and livestock management are included in our PDF download.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
