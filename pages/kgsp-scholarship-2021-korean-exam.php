<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "KGSP Scholarship 2021 Korean Exam Requirements & TOPIK Guide";
$page_desc = "Download free KGSP scholarship 2021 Korean exam past paper PDF guides, GKS Korean language requirements, TOPIK score points, and NIIED application guidelines.";
$canonical_url = "https://koreantestpapers.in/kgsp-scholarship-2021-korean-exam";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();

// Include Shared Header Template
require_once __DIR__ . '/../includes/header.php';
?>

<script>
    window.liveQuestions = <?php echo json_encode($live_questions); ?>;
</script>

<!-- Schema Markup: Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "KGSP Scholarship 2021 Korean Exam Requirements & TOPIK Guide",
  "description": "Comprehensive resource providing Global Korea Scholarship (GKS/KGSP) language exam guidelines, TOPIK score requirements, and past exam paper downloads.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/kgsp-scholarship-2021-korean-exam"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED KGSP SCHOLARSHIP GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: KGSP SCHOLARSHIP OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to KGSP Scholarship 2021 Korean Exam Requirements</h2>
            <p>
                The Korean Government Scholarship Program (KGSP), now officially renamed the Global Korea Scholarship (GKS), is South Korea's premier fully funded scholarship for international undergraduate and postgraduate students. Understanding the <strong>kgsp scholarship 2021 korean exam</strong> rules is essential for prospective scholars aiming to fulfill NIIED language proficiency criteria and secure university placement.
            </p>

            <p>
                A key component of the GKS/KGSP award is the mandatory 1-year Preliminary Korean Language Program administered by designated university language institutes. Scholars who obtain TOPIK Level 3 or higher on their <strong>korean exam paper</strong> within 1 year proceed directly to degree studies, while applicants holding TOPIK Level 5 or 6 during application receive monthly bonus stipends and exemption from language training. Download GKS Korean language exam guides below.
            </p>

            <div class="callout-box">
                <h4>🎓 GKS/KGSP Language Proficiency & Exemption Rules</h4>
                <ul>
                    <li><strong>Mandatory Pass Threshold:</strong> Scholars must achieve at least TOPIK Level 3 to begin degree coursework.</li>
                    <li><strong>TOPIK Level 5/6 Exemption:</strong> Scholars holding TOPIK Level 5 or Level 6 are exempt from 1-year language training.</li>
                    <li><strong>Monthly Financial Allowance:</strong> Extra 100,000 KRW monthly language bonus awarded to TOPIK Level 5/6 holders.</li>
                    <li><strong>Degree Completion Benchmark:</strong> Graduate students must achieve TOPIK Level 4 before graduation.</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: KGSP TOPIK REQUIREMENT MATRIX TABLE -->
        <div class="seo-content-box">
            <h2>GKS / KGSP Scholarship Korean Language Level Matrix Table</h2>
            <p>
                Examine the language evaluation criteria across GKS degree categories:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Degree Track</th>
                            <th>Language Training Duration</th>
                            <th>Target TOPIK Level</th>
                            <th>Special Financial Incentive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>GKS Undergraduate Track</strong></td>
                            <td>1 Year (Language Institute)</td>
                            <td>TOPIK Level 3 Required</td>
                            <td>Full Tuition + Monthly Stipend</td>
                        </tr>
                        <tr>
                            <td><strong>GKS Master's Track</strong></td>
                            <td>1 Year (Language Institute)</td>
                            <td>TOPIK Level 3 Required</td>
                            <td>Full Tuition + Monthly Stipend</td>
                        </tr>
                        <tr>
                            <td><strong>GKS Doctoral Track</strong></td>
                            <td>1 Year (Language Institute)</td>
                            <td>TOPIK Level 3 Required</td>
                            <td>Full Tuition + Monthly Stipend</td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Level 5/6 Applicants</strong></td>
                            <td>Exempt (Direct Entry)</td>
                            <td>TOPIK Level 5 or 6</td>
                            <td>+100,000 KRW Monthly Bonus</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR KGSP PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved KGSP Scholarship Korean Exam Guides PDF</h2>
            <p>
                Select your required GKS language <strong>korean test papers</strong> guide below for instant PDF downloads:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>GKS Guide Title</th>
                            <th>Scholarship Level</th>
                            <th>Year</th>
                            <th>Included Assets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2021 GKS/KGSP Official Language Guidelines PDF</strong></td>
                            <td><span class="tag-badge green">GKS Guidelines</span></td>
                            <td>2021</td>
                            <td>✔ Full NIIED Language Rules</td>
                            <td><a href="/download-paper?session=91st&title=2021%20GKS%20Language%20Guidelines" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Level 3 Preparation Exam Pack for Scholars</strong></td>
                            <td><span class="tag-badge green">Level 3 Special</span></td>
                            <td>2024</td>
                            <td>✔ Solved TOPIK I & II Papers</td>
                            <td><a href="/download-paper?session=83rd&title=TOPIK%20Level%203%20Scholar%20Pack" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>NIIED Official TOPIK Past Papers (60th to 91st Session)</strong></td>
                            <td><span class="tag-badge green">Past Papers</span></td>
                            <td>2024</td>
                            <td>✔ Complete Solved Booklets</td>
                            <td><a href="/download-paper?session=96th&title=NIIED%20Official%20Past%20Papers" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master GKS/KGSP Drive Archive Vault</strong></td>
                            <td><span class="tag-badge amber">Drive Hub</span></td>
                            <td>Archive</td>
                            <td>✔ Full 156 PDF/MP3 Vault</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC KGSP PREPARATION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for GKS Scholarship Applicants</h2>
            <p>
                Maximize your GKS application score by following these 4 language preparation steps:
            </p>
            <ul>
                <li><strong>Step 1 (Take TOPIK Before Applying):</strong> Submitting an existing TOPIK Level 3, 4, 5, or 6 score card adds up to 10 extra evaluation points on your NIIED application.</li>
                <li><strong>Step 2 (Target TOPIK Level 3 Vocabulary):</strong> Study academic and intermediate Korean vocabulary required for university lecture comprehension.</li>
                <li><strong>Step 3 (Practice Won-gong-ji Essay Writing):</strong> Practice TOPIK II Questions 53 and 54 manuscript essay writing to ensure passing marks on writing modules.</li>
                <li><strong>Step 4 (Download Past Exam Booklets):</strong> Solve official NIIED past paper sets under timed conditions to gauge your readiness.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - KGSP Korean Exams</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Is TOPIK mandatory to apply for the KGSP/GKS scholarship?</div>
                    <div class="faq-answer">
                        No! Beginners without a TOPIK score can apply; successful candidates will undertake 1 year of mandatory Korean language training in South Korea.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: What happens if a scholar fails to achieve TOPIK Level 3 in 1 year?</div>
                    <div class="faq-answer">
                        Scholars who do not achieve TOPIK Level 3 after 1 year of language training may receive a 6-month extension, but failure to pass leads to scholarship revocation.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Where can I download official NIIED TOPIK past papers for GKS practice?</div>
                    <div class="faq-answer">
                        You can download free official NIIED TOPIK I and II past exam paper PDF files directly from the download vault of koreantestpapers.in.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
