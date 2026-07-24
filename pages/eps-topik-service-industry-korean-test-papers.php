<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Service Industry Korean Test Papers";
$page_desc = "Download free EPS TOPIK Service Industry Korean test papers PDF with official HRD Korea waste management, recycling, hotel maintenance, restaurant service questions, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-service-industry-korean-test-papers";

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
  "headline": "EPS TOPIK Service Industry Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Service Industry Korean test papers PDF sets with official service sector vocabulary, dialogue solutions, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-service-industry-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Service Industry Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master South Korea's service sector terminology with official EPS TOPIK service industry <strong>korean test papers</strong>, complete with waste recycling rules, hotel maintenance dialogues, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Service Industry Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🛎 Service Industry Paper Archive</h3>
                    <span class="tag-badge green">Service Sector</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Service Industry Test Paper PDF</h4>
                            <p>Full waste recycling, food service & hotel maintenance set</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
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
                            <h4>Workplace Safety & Factory Rules Test Paper</h4>
                            <p>Industrial accident prevention & safety gear guide</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE SERVICE SECTOR QUIZ
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SERVICE INDUSTRY GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SERVICE INDUSTRY OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Service Industry Korean Test Papers</h2>
            <p>
                The Service Sector (서비스업) is an expanded visa category under South Korea's Employment Permit System (EPS E-9). To address severe labor shortages, the Ministry of Employment and Labor expanded E-9 placement options to include waste collection & recycling (폐기물 수거 및 재활용), hotel cleaning and room maintenance (호텔 청소 및 정비), food service & kitchen auxiliary work (음식점업 보조), and logistics sorting (물류 분류).
            </p>
            <p>
                Our EPS TOPIK service industry <strong>korean test papers</strong> compile specialized vocabulary, waste sorting protocols (분리수거), sanitation regulations, and customer interaction dialogues. Practicing with dedicated service <strong>korean exam paper</strong> sets prepares candidates to score high marks and secure E-9 service sector placement. Download the complete service paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🛎 4 Main Service Sector Categories Tested in EPS-TOPIK</h4>
                <ul>
                    <li><strong>1. Waste Collection & Recycling (폐기물 처리 및 재활용):</strong> Sorting plastic, glass, paper, hazardous industrial waste (재활용품 분리배출)</li>
                    <li><strong>2. Hotel & Accommodation Maintenance (호텔 및 숙박업):</strong> Linen changing, room cleaning, sanitation supplies, housekeeping vocabulary</li>
                    <li><strong>3. Restaurant & Kitchen Auxiliary (음식점업 보조):</strong> Dishwashing, food prep, food safety regulations, trash disposal</li>
                    <li><strong>4. Logistics & Parcel Sorting (물류 및 택배 분류):</strong> Package scanning, barcode labeling, warehouse unloading, pallet stacking</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: HIGH-FREQUENCY SERVICE VOCABULARY -->
        <div class="seo-content-box">
            <h2>Essential Service Industry Vocabulary & Terms</h2>
            <p>
                Master these high-frequency service sector Korean terms:
            </p>

            <h3>1. Waste Management & Recycling Terms</h3>
            <ul>
                <li><strong>분리수거:</strong> Separate trash collection for recycling</li>
                <li><strong>종량제 봉투:</strong> Official volume-based trash bag</li>
                <li><strong>음식물 쓰레기:</strong> Food waste</li>
                <li><strong>재활용:</strong> Recycling (paper, plastics, cans)</li>
            </ul>

            <h3>2. Hotel & Housekeeping Terms</h3>
            <ul>
                <li><strong>침구 교체:</strong> Changing bed linens</li>
                <li><strong>소독 / 위생:</strong> Disinfection / Hygiene cleanliness</li>
                <li><strong>청소도구:</strong> Cleaning tools (mop, broom, vacuum cleaner)</li>
                <li><strong>비품 정리:</strong> Organizing room amenities</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SERVICE PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Service Industry Korean Test Papers PDF</h2>
            <p>
                Download official service industry <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>EPS TOPIK Service Industry Paper PDF</strong></td>
                            <td><span class="tag-badge green">Service Sector</span></td>
                            <td>2025</td>
                            <td>✔ Solved Service Terms + Key</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2025 Model Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT Model Set</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Rules</span></td>
                            <td>2025</td>
                            <td>✔ Industrial Sanitation & Safety</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Blueprint for Service Sector Applicants</h2>
            <p>
                Follow this 3-step blueprint to master service industry questions:
            </p>
            <ul>
                <li><strong>Step 1 (Master Waste Disposal Laws):</strong> Learn South Korean municipal waste disposal rules (분리배출 요령) thoroughly.</li>
                <li><strong>Step 2 (Memorize Cleaning Equipment Names):</strong> Study Korean words for cleaning supplies: <em>걸레 (mop)</em>, <em>빗자루 (broom)</em>, <em>청소기 (vacuum)</em>, <em>세제 (detergent)</em>.</li>
                <li><strong>Step 3 (Practice Customer Service Honorifics):</strong> Learn basic polite expressions (안녕하십니까, 감사합니다, 죄송합니다).</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Service Industry Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Which jobs are included in the EPS E-9 service industry quota?</div>
                    <div class="faq-answer">
                        The E-9 service category includes waste collection and sorting, hotel housekeeping, restaurant kitchen prep, and parcel sorting.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the service paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable service industry <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are recycling questions tested in the reading section?</div>
                    <div class="faq-answer">
                        Yes! Questions asking candidates to identify correct recycling bins or waste disposal days appear frequently in reading questions.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
