<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Construction Field Korean Test Papers";
$page_desc = "Download free EPS TOPIK Construction Field Korean test papers PDF with site safety gear, scaffolding vocabulary, answer keys, and solved HRD Korea exam papers.";
$canonical_url = "https://koreantestpapers.in/eps-topik-construction-korean-test-papers";

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
  "headline": "EPS TOPIK Construction Field Korean Test Papers",
  "description": "Comprehensive guide and downloadable EPS TOPIK Construction Field Korean test papers PDF sets with building site safety terms and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-construction-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Construction Field Korean Test Papers</h1>
            <p class="hero-subtitle">
                Prepare for the HRD Korea Construction Sector (건설업) E-9 visa exam with solved <strong>korean test papers</strong>, building site safety signs, scaffolding terminology guides, and official <strong>korean exam paper</strong> archives.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Construction Sector Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🏗 Construction Paper Archive</h3>
                    <span class="tag-badge amber">Construction E-9</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Construction Field Solved Paper</h4>
                            <p>Official 20-question construction paper & key</p>
                        </div>
                        <a href="../pdf/eps-topik-construction.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Building Site Safety & Scaffolding Guide</h4>
                            <p>200 Illustrated questions of site tools & hazards</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2025 EPS TOPIK Model Reading & Listening</h4>
                            <p>Updated 2025 model construction test set</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE CONSTRUCTION CBT
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED CONSTRUCTION SECTOR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: CONSTRUCTION SECTOR OVERVIEW & E-9 VISA -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Construction Field Korean Test Papers</h2>
            <p>
                The Construction Field Sector (건설업) is a major foreign employment category under South Korea's Employment Permit System (EPS). Foreign candidates passing the HRD Korea construction examination secure E-9 non-professional work visas to work on South Korean high-rise building projects, civil engineering works, road paving, rebar installation, and concrete formwork.
            </p>
            <p>
                Construction exam papers focus heavily on building site safety protocol, scaffolding assembly, fall prevention harness usage (안전대), heavy machinery operation (굴착기, 크레인), and supervisor hazard warnings. Solving real <strong>korean test papers</strong> designed for the construction field guarantees familiarity with high-frequency site vocabulary.
            </p>

            <div class="callout-box">
                <h4>🏗 Construction Field Exam Facts</h4>
                <ul>
                    <li><strong>Key Job Categories:</strong> Rebar Placement (철근), Formwork (거푸집), Concrete Pouring, Scaffolding (비계)</li>
                    <li><strong>Exam Composition:</strong> Reading 20 Questions (25 Min) + Listening 20 Questions (25 Min)</li>
                    <li><strong>Passing Cutoff:</strong> Typically 120 to 150 points out of 200 total points</li>
                    <li><strong>Core Focus:</strong> Heavy emphasis on fall prevention (추락 주의) and protective harness usage</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 10 MUST-KNOW CONSTRUCTION SITE VOCABULARY WORDS -->
        <div class="seo-content-box">
            <h2>10 High-Frequency Construction Site Words Tested in Exam Papers</h2>
            <p>
                Questions in EPS TOPIK Construction <strong>korean exam paper</strong> sets evaluate candidate recognition of safety gear, materials, and heavy equipment:
            </p>

            <h3>1. 비계 (Bi-gye)</h3>
            <p>Scaffolding / Staging (Crucial safety context: <em>비계 점검 [Scaffolding inspection]</em>).</p>

            <h3>2. 안전대 (An-jeon-dae)</h3>
            <p>Safety Harness / Fall Arrest Belt (Mandatory gear for high-altitude work).</p>

            <h3>3. 굴착기 (Gul-chak-gi) / 포크레인 (Poclain)</h3>
            <p>Excavator / Backhoe heavy machinery.</p>

            <h3>4. 기중기 (Gi-jung-gi) / 크레인 (Crane)</h3>
            <p>Crane / Hoist machine used for heavy material lifting.</p>

            <h3>5. 거푸집 (Geo-pu-jib)</h3>
            <p>Concrete Formwork / Mold shuttering for liquid concrete.</p>

            <h3>6. 철근 (Cheol-geun)</h3>
            <p>Steel Rebar / Reinforcing Bar.</p>

            <h3>7. 시멘트 (Cement) / 콘크리트 (Concrete)</h3>
            <p>Cement and Concrete building materials.</p>

            <h3>8. 낙하물 주의 (Nak-ha-mul Ju-ui)</h3>
            <p>Warning: Danger of Falling Objects signboard.</p>

            <h3>9. 추락 주의 (Chu-rak Ju-ui)</h3>
            <p>Warning: High Altitude Fall Hazard signboard.</p>

            <h3>10. 안전모 착용 (An-jeon-mo Cha-kyong)</h3>
            <p>Mandatory Sign: Hard Hat / Safety Helmet Required.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR CONSTRUCTION PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Construction Korean Test Papers PDF</h2>
            <p>
                Download official construction sector <strong>korean test papers</strong> with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Solutions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>EPS TOPIK Construction Field Solved Paper</strong></td>
                            <td><span class="tag-badge amber">Construction</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Site Safety Key</td>
                            <td><a href="../pdf/eps-topik-construction.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2024 Solved EPS TOPIK General Past Set</strong></td>
                            <td><span class="tag-badge green">Past Set</span></td>
                            <td>2024</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2024-solved.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master 2000 Construction Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: BUILDING SITE HAZARD PREVENTION TIPS -->
        <div class="seo-content-box">
            <h2>Construction Site Safety Signboards Master Guide</h2>
            <p>
                Understand essential warning signs tested in questions 10 to 14:
            </p>
            <ul>
                <li><strong>개구부 주의 (Gae-gu-bu Ju-ui):</strong> Caution: Open Shaft / Hole Hazard</li>
                <li><strong>붕괴 주의 (Bung-goe Ju-ui):</strong> Danger of Structure Collapse</li>
                <li><strong>보호구 착용 (Bo-ho-gu Cha-kyong):</strong> Personal Protective Gear Required</li>
                <li><strong>전기 위험 (Jeon-gi Wi-heom):</strong> Electrical Shock Hazard Warning</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Construction Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the passing score for the EPS-TOPIK Construction exam?</div>
                    <div class="faq-answer">
                        Construction passing cutoffs typically range from 120 to 150 points out of 200 total points.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are scaffolding and safety harness questions tested in the exam?</div>
                    <div class="faq-answer">
                        Yes! Questions regarding scaffolding assembly (비계) and fall protection harness usage (안전대) appear regularly.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable construction test papers include full answer sheets?</div>
                    <div class="faq-answer">
                        Yes! All downloadable construction <strong>korean exam paper</strong> sets on koreantestpapers.in include full 20-question answer keys.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
