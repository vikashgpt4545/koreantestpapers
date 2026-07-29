<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Agriculture Korean Exam Paper & Korean Test Papers with Keys";
$page_desc = "Download free EPS TOPIK Agriculture Korean exam paper PDF with farming equipment vocabulary, crop cultivation terms, answer keys, and solved HRD Korea test papers.";
$canonical_url = "https://koreantestpapers.in/eps-topik-agriculture-korean-exam-paper";

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
  "headline": "EPS TOPIK Agriculture Korean Exam Paper & Korean Test Papers with Keys",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Agriculture Korean exam paper PDF sets with farming tools vocabulary and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-agriculture-korean-exam-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED AGRICULTURE SECTOR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: AGRICULTURE SECTOR OVERVIEW & E-9 VISA -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Agriculture Korean Exam Paper</h2>
            <p>
                The Agriculture & Stockbreeding Sector (농축산업) is a high-demand employment category within South Korea's Employment Permit System (EPS). Administered by HRD Korea, foreign workers clearing the agriculture test paper earn E-9 non-professional employment visas to work on South Korean vegetable farms, greenhouse complexes (비닐하우스), fruit orchards, dairy farms, and poultry production facilities.
            </p>
            <p>
                Agriculture exams feature specialized questions regarding seasonal harvesting, fertilizer mixing, irrigation control, livestock feeding, and greenhouse temperature management. Solving authentic agricultural <strong>korean exam paper</strong> sets guarantees high scores on picture identification and farming action questions.
            </p>

            <div class="callout-box">
                <h4>🌾 Agriculture & Livestock Exam Facts</h4>
                <ul>
                    <li><strong>Key Job Sectors:</strong> Crop Cultivation (작물 재배), Greenhouse Farming, Stockbreeding (축산업)</li>
                    <li><strong>Exam Composition:</strong> Reading 20 Questions (25 Min) + Listening 20 Questions (25 Min)</li>
                    <li><strong>Average Passing Cutoff:</strong> 110 to 145 points out of 200 total points</li>
                    <li><strong>Core Advantage:</strong> Excellent job placement opportunities across rural South Korea</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 10 MUST-KNOW FARMING TOOLS & EQUIPMENT -->
        <div class="seo-content-box">
            <h2>10 Essential Farming Tools & Equipment Tested in Agriculture Papers</h2>
            <p>
                Picture identification questions in EPS TOPIK Agriculture <strong>korean test papers</strong> frequently present traditional hand tools and modern agricultural machinery:
            </p>

            <h3>1. 낫 (Nat)</h3>
            <p>Sickle / Harvesting Scythe (Used for cutting grass and harvesting crops).</p>

            <h3>2. 호미 (Ho-mi)</h3>
            <p>Traditional Korean Hand Hoe (Essential tool for weeding and planting seeds).</p>

            <h3>3. 괭이 (Gwaeng-i)</h3>
            <p>Large Hoe / Mattock (Used for breaking hard soil and digging trenches).</p>

            <h3>4. 삽 (Sap)</h3>
            <p>Shovel / Spade (Used for shoveling soil, compost, and fertilizer).</p>

            <h3>5. 경운기 (Gyeong-un-gi)</h3>
            <p>Cultivator / Power Tiller (Popular walking tractor used on Korean farms).</p>

            <h3>6. 트랙터 (Tractor)</h3>
            <p>Agricultural Tractor (Used for heavy field plowing and hauling).</p>

            <h3>7. 비닐하우스 (Bi-nil Ha-u-seu)</h3>
            <p>Greenhouse / Vinyl House (Controlled climate vegetable growing structure).</p>

            <h3>8. 물조리개 (Mul-jo-ri-gae)</h3>
            <p>Watering Can (Used for manual plant irrigation).</p>

            <h3>9. 분무기 (Bun-mu-gi)</h3>
            <p>Pesticide Sprayer / Chemical Sprayer.</p>

            <h3>10. 수레 (Su-re) / 손수레 (Son-su-re)</h3>
            <p>Wheelbarrow / Handcart (For hauling harvested produce).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR AGRICULTURE PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Agriculture Korean Exam Paper PDF</h2>
            <p>
                Download official agricultural sector <strong>korean exam paper</strong> archives complete with answer keys below:
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
                            <td><strong>EPS TOPIK Agriculture Solved Exam Paper</strong></td>
                            <td><span class="tag-badge amber">Agriculture</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Answer Key</td>
                            <td><a href="../pdf/eps-topik-agriculture.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2024 Solved EPS TOPIK General Past Set</strong></td>
                            <td><span class="tag-badge green">Past Set</span></td>
                            <td>2024</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2024-solved.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master 2000 Agriculture Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: CROP HARVESTING & CULTIVATION VERBS -->
        <div class="seo-content-box">
            <h2>Essential Farming Verbs (농사 관련 동사) Master Guide</h2>
            <p>
                Understanding action verbs is key to solving sentence fill-in-the-blank questions:
            </p>
            <ul>
                <li><strong>씨를 뿌리다 (Ssi-reul Ppu-ri-da):</strong> To sow seeds</li>
                <li><strong>모종을 심다 (Mo-jong-eul Sim-da):</strong> To plant seedlings</li>
                <li><strong>거름을 주다 (Geo-reum-eul Ju-da):</strong> To apply fertilizer / compost</li>
                <li><strong>잡초를 뽑다 (Jap-cho-reul Ppob-da):</strong> To pull weeds</li>
                <li><strong>수확하다 (Su-hwak-ha-da) / 거두다 (Geo-du-da):</strong> To harvest crops</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Agriculture Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the passing cutoff score for the EPS-TOPIK Agriculture exam?</div>
                    <div class="faq-answer">
                        Agriculture passing cutoffs typically range from 110 to 145 points out of 200 total points.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are questions about livestock farming included in the agriculture paper?</div>
                    <div class="faq-answer">
                        Yes! Questions on poultry farming, dairy cattle management, and feed mixing appear regularly.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable agriculture test papers include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable agriculture <strong>korean test papers</strong> on koreantestpapers.in include full 20-question answer keys.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
