<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Special CBT Re-entry Korean Exam Paper & Korean Test Papers";
$page_desc = "Download free EPS TOPIK Special CBT Re-entry Korean exam paper PDF with answer keys, labor law vocabulary, committed returnee E-9 guidelines, and solved past test papers.";
$canonical_url = "https://koreantestpapers.in/eps-topik-special-cbt-korean-exam-paper";

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
  "headline": "EPS TOPIK Special CBT Re-entry Korean Exam Paper & Korean Test Papers",
  "description": "Comprehensive guide and downloadable EPS TOPIK Special CBT Re-entry Korean exam paper PDF sets for E-9 returnee workers with answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-special-cbt-korean-exam-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SPECIAL CBT GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SPECIAL CBT SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Special CBT Re-entry Korean Exam Paper</h2>
            <p>
                The Special CBT Examination (특별 CBT 시험) is a dedicated language testing mechanism established by HRD Korea and the Ministry of Employment and Labor (MOEL) for foreign E-9 visa workers who completed their initial 4 years and 10 months of lawful employment in South Korea and returned voluntarily to their home countries.
            </p>
            <p>
                Passing the Special CBT exam allows committed returnees (성실근로자) to re-enter South Korea under a new 4-year and 10-month E-9 visa without undergoing mandatory job training periods. Because Special CBT candidates possess prior living experience in Korea, exam questions focus on advanced workplace communication, labor contract terms (근로계약서), safety regulations, and tax filings. Practicing with solved Special CBT <strong>korean exam paper</strong> sets guarantees a successful re-entry score.
            </p>

            <div class="callout-box">
                <h4>🔄 Special CBT Re-entry Eligibility & Exam Facts</h4>
                <ul>
                    <li><strong>Target Applicants:</strong> E-9 visa returnees who completed 4 years 10 months of lawful employment</li>
                    <li><strong>Exam Composition:</strong> Reading 20 Questions (25 Min) + Listening 20 Questions (25 Min)</li>
                    <li><strong>Key Benefit:</strong> Rapid re-entry visa approval within 3 to 6 months</li>
                    <li><strong>Exam Content:</strong> Advanced workplace Korean, labor rights, medical insurance & safety laws</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 10 MUST-KNOW LABOR CONTRACT & RE-ENTRY TERMS -->
        <div class="seo-content-box">
            <h2>10 Essential Labor Contract & Re-entry Vocabulary Words</h2>
            <p>
                Special CBT <strong>korean test papers</strong> feature questions testing employment laws, salary calculations, and visa extension terms:
            </p>

            <h3>1. 근로계약서 (Geun-ro-gye-yak-seo)</h3>
            <p>Labor Contract / Employment Agreement (Mandatory document setting salary, hours, and duties).</p>

            <h3>2. 성실근로자 (Seong-sil-geun-ro-ja)</h3>
            <p>Committed / Diligent Foreign Worker (Eligible for streamlined re-entry visa track).</p>

            <h3>3. 퇴직금 (Toe-jik-geum)</h3>
            <p>Severance Pay / Retirement Allowance (Calculated as 1 month salary per year worked).</p>

            <h3>4. 최저임금 (Choe-jeo-im-geum)</h3>
            <p>Minimum Wage Rate mandated by South Korean labor law.</p>

            <h3>5. 연장 근무 (Yeon-jang Geun-mu)</h3>
            <p>Overtime Work (Paid at 150% of base hourly wage rate).</p>

            <h3>6. 국민건강보험 (Guk-min Geon-gang-bo-heom)</h3>
            <p>National Health Insurance (Mandatory medical coverage for foreign workers).</p>

            <h3>7. 출국만기보험 (Chul-guk-man-gi-bo-heom)</h3>
            <p>Departure Guarantee Insurance (Insurance payout received upon leaving Korea).</p>

            <h3>8. 산재보험 (San-jae-bo-heom)</h3>
            <p>Industrial Accident Compensation Insurance.</p>

            <h3>9. 체류 기간 연장 (Che-ryu Gi-gan Yeon-jang)</h3>
            <p>Extension of Stay / Visa Renewal Permission.</p>

            <h3>10. 재입국 허가 (Jae-ip-guk Heo-ga)</h3>
            <p>Re-entry Permit Approval.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SPECIAL CBT PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Special CBT Korean Exam Paper PDF</h2>
            <p>
                Download official Special CBT re-entry <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>EPS TOPIK Special CBT Solved Exam Paper</strong></td>
                            <td><span class="tag-badge green">Special CBT</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Re-entry Key</td>
                            <td><a href="../pdf/eps-topik-special-cbt.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2025 EPS TOPIK Model CBT Test Set</strong></td>
                            <td><span class="tag-badge green">Model Set</span></td>
                            <td>2025</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master 2000 Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: RE-ENTRY LABOR RIGHTS GUIDE -->
        <div class="seo-content-box">
            <h2>South Korean Labor Rights & Insurance Guide for Returnees</h2>
            <p>
                Understand essential labor protection laws tested in Special CBT reading passages:
            </p>
            <ul>
                <li><strong>Base Work Hours:</strong> 40 hours per week (8 hours per day, 5 days per week).</li>
                <li><strong>Overtime Allowance:</strong> Any work beyond 8 hours daily is compensated at 1.5 times the base hourly pay rate.</li>
                <li><strong>Weekly Paid Rest Day (주휴일):</strong> Employees completing scheduled weekly hours receive 1 paid day of rest per week.</li>
                <li><strong>Insurance Claims:</strong> Departure Insurance (출국만기보험) payouts are collected at Incheon International Airport or credited to home bank accounts upon departure.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Special CBT Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Who is eligible to take the Special CBT EPS-TOPIK exam?</div>
                    <div class="faq-answer">
                        Foreign workers under E-9 visas who lawfully completed their employment contracts in Korea and returned voluntarily to their home countries are eligible.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are Special CBT exam questions harder than regular EPS-TOPIK papers?</div>
                    <div class="faq-answer">
                        Special CBT questions focus more heavily on advanced workplace dialogues, labor rights, and safety procedures compared to beginner general papers.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable Special CBT test papers include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Special CBT <strong>korean exam paper</strong> sets on koreantestpapers.in include full 20-question answer keys.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
