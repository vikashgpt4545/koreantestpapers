<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK 2 Level 5 Advanced Korean Test Papers & Korean Exam Paper";
$page_desc = "Download free TOPIK 2 Level 5 Advanced Korean test papers PDF with academic answer keys, Four-Character Sino-Korean idioms (사자성어), advanced reading passages, and official NIIED papers.";
$canonical_url = "https://koreantestpapers.in/topik-2-level-5-korean-test-papers";

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
  "headline": "TOPIK 2 Level 5 Advanced Korean Test Papers & Korean Exam Paper",
  "description": "Comprehensive study guide and downloadable TOPIK 2 Level 5 Advanced Korean test papers PDF sets with academic answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-2-level-5-korean-test-papers"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LEVEL 5 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LEVEL 5 SCORE MATRIX & ACADEMIC STANDARDS -->
        <div class="seo-content-box">
            <h2>Understanding TOPIK 2 Level 5 Advanced Qualification Standards</h2>
            <p>
                TOPIK II Level 5 (고급 5급) represents high-level professional and academic fluency in Korean. Candidates must achieve a cumulative score of **at least 190 points out of 300 total points** across Listening (100 Pts), Writing (100 Pts), and Reading (100 Pts).
            </p>
            <p>
                Level 5 certifies that an applicant can conduct professional research, comprehend specialized academic lectures, understand political economy editorials, and draft formal policy documents. Practicing with full advanced <strong>korean test papers</strong> exposes candidates to specialized Hanja-based vocabulary, complex passage structures, and rapid academic lectures.
            </p>

            <div class="callout-box">
                <h4>🏛 Level 5 Score Matrix Breakdown</h4>
                <ul>
                    <li><strong>Level 5 Cutoff Score:</strong> 190 Points to 229 Points out of 300 total points</li>
                    <li><strong>Reading Target:</strong> 65+ Points (Passages Q26 to Q45)</li>
                    <li><strong>Listening Target:</strong> 70+ Points (Lectures Q31 to Q50)</li>
                    <li><strong>Writing Target:</strong> 55+ Points (High scores on Q53 chart essay & Q54 700-word essay)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 5 ESSENTIAL SINO-KOREAN FOUR-CHARACTER IDIOMS (사자성어) -->
        <div class="seo-content-box">
            <h2>5 Must-Know Four-Character Sino-Korean Idioms (사자성어) for Level 5</h2>
            <p>
                Reading questions 28 through 31 in TOPIK II Level 5 <strong>korean exam paper</strong> sets evaluate candidate mastery of Four-Character Sino-Korean Idioms (사자성어). Study these 5 high-frequency idioms:
            </p>

            <h3>1. 고진감래 (苦盡甘來 - Go-jin-gam-rae)</h3>
            <p>Literal: Sweetness comes after bitterness ends. Meaning: Joy follows hardship / No pain, no gain.</p>

            <h3>2. 일석이조 (一石二鳥 - Il-seok-i-jo)</h3>
            <p>Literal: Killing two birds with one stone. Meaning: Achieving two goals with a single effort.</p>

            <h3>3. 동문서답 (東問西答 - Dong-mun-seo-dap)</h3>
            <p>Literal: Asked East, answered West. Meaning: Giving an irrelevant or off-topic answer.</p>

            <h3>4. 동병상련 (同病相憐 - Dong-byeong-sang-ryeon)</h3>
            <p>Literal: Those with the same illness sympathize with each other. Meaning: Misery loves company / Empathy among sufferers.</p>

            <h3>5. 유언비어 (流言蜚語 - Yu-eon-bi-eo)</h3>
            <p>Literal: Flowing words and flying rumors. Meaning: Groundless rumors or false gossip.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LEVEL 5 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK 2 Level 5 Korean Test Papers PDF</h2>
            <p>
                Download official advanced academic TOPIK II Level 5 <strong>korean test papers</strong> with full answer keys below:
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
                            <td><strong>TOPIK II Level 5 Academic Solved Paper</strong></td>
                            <td><span class="tag-badge red" style="background: #dc2626;">Level 5</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Academic Keys</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Session TOPIK II Level 5 Past Paper</strong></td>
                            <td><span class="tag-badge red" style="background: #dc2626;">Level 5</span></td>
                            <td>2024</td>
                            <td>✔ Official NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>90th Session TOPIK II Level 5 Past Paper</strong></td>
                            <td><span class="tag-badge red" style="background: #dc2626;">Level 5</span></td>
                            <td>2023</td>
                            <td>✔ Official NIIED Key</td>
                            <td><a href="../pdf/topik-90th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIES FOR ADVANCED READING PASSAGES -->
        <div class="seo-content-box">
            <h2>Advanced Reading Passage Tactics for Level 5 Candidates</h2>
            <p>
                To complete the 50 reading questions within 70 minutes, apply these 3 tactical reading techniques:
            </p>
            <ul>
                <li><strong>Skim Paragraph Topic Sentences:</strong> In academic research passages (Q35 to Q45), read the first and last sentence of each paragraph to identify the main thesis immediately.</li>
                <li><strong>Analyze Hanja Roots (한자어):</strong> Over 70% of Level 5 vocabulary consists of Sino-Korean words. Recognize roots like <em>-성 (Nature)</em>, <em>-화 (Become)</em>, and <em>-적 (Attribute)</em>.</li>
                <li><strong>Master Q54 Argumentative Flow:</strong> Write a clear 700-word essay with formal connectors (<em>-에 응당하여</em>, <em>-을/를 불문하고</em>) to secure 35+ essay points.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK 2 Level 5 Test Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What score is required to achieve TOPIK Level 5?</div>
                    <div class="faq-answer">
                        Candidates must achieve a total score of at least 190 points out of 300 total points in TOPIK II.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Is TOPIK Level 5 required for Korean Government Scholarships (KGSP / GKS)?</div>
                    <div class="faq-answer">
                        Having TOPIK Level 5 grants maximum bonus points for GKS scholarship selection and exempts candidates from mandatory preliminary language training in South Korea.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable level 5 papers include Sino-Korean idiom solutions?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Level 5 <strong>korean exam paper</strong> sets on koreantestpapers.in include full solutions for Four-Character Idioms (사자성어) and proverbs.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
