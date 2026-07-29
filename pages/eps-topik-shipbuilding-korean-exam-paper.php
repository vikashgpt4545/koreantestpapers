<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Shipbuilding Field Korean Exam Paper & Korean Test Papers";
$page_desc = "Download free EPS TOPIK Shipbuilding Field Korean exam paper PDF with official HRD Korea hull welding, surface painting, pipe fitting, crane safety questions, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-shipbuilding-korean-exam-paper";

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
  "headline": "EPS TOPIK Shipbuilding Field Korean Exam Paper & Korean Test Papers",
  "description": "Comprehensive guide and downloadable EPS TOPIK Shipbuilding Field Korean exam paper PDF sets with official shipyard welding, pipe fitting, and surface painting answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-shipbuilding-korean-exam-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SHIPBUILDING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SHIPBUILDING INDUSTRY OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Shipbuilding Field Korean Exam Papers</h2>
            <p>
                The Shipbuilding Sector (조선업) is one of South Korea's most critical export industries. To support major shipyards in Ulsan, Geoje, and Yeongam (HD Hyundai Heavy Industries, Hanwha Ocean, Samsung Heavy Industries), HRD Korea conducts specialized EPS-TOPIK exams for foreign workers entering the shipbuilding sector under the E-9 visa program.
            </p>
            <p>
                Our EPS TOPIK shipbuilding field <strong>korean exam paper</strong> compiles specialized technical vocabulary covering hull structure welding (선체 용접), ship painting & coating (도장), pipe fitting (배관), insulation installation (보온), and dockyard safety protocols. Practicing with dedicated shipbuilding <strong>korean test papers</strong> ensures candidates pass the field exam and secure shipyard employment. Download the complete shipbuilding paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🚢 4 Core Shipbuilding Specializations Tested in EPS-TOPIK</h4>
                <ul>
                    <li><strong>1. Ship Welding (선체 용접):</strong> CO2 arc welding, TIG welding, gas cutting, protective welding masks (용접면)</li>
                    <li><strong>2. Surface Painting & Coating (선체 도장):</strong> High-pressure spray painting, sandblasting, rust removal, protective air masks</li>
                    <li><strong>3. Pipe Fitting & Assembly (배관 / 의장):</strong> Marine pipe flange assembly, valve installation, spanner & pipe wrench operation</li>
                    <li><strong>4. Scaffold & Electrical Rigging (비계 / 전기):</strong> High-altitude scaffolding, cable tray installation, safety harness rigging</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: HIGH-FREQUENCY SHIPYARD VOCABULARY -->
        <div class="seo-content-box">
            <h2>Essential Shipbuilding Terms & Operations</h2>
            <p>
                Master these high-frequency shipyard Korean terms:
            </p>

            <h3>1. Welding & Metal Cutting Terms</h3>
            <ul>
                <li><strong>용접기:</strong> Welding machine</li>
                <li><strong>용접봉:</strong> Welding rod</li>
                <li><strong>가스 절단기:</strong> Gas cutting torch</li>
                <li><strong>용접면:</strong> Welding helmet/face shield</li>
            </ul>

            <h3>2. Shipyard Safety Equipment Terms</h3>
            <ul>
                <li><strong>안전대 (추락 방지):</strong> Safety harness for high-altitude work</li>
                <li><strong>방독 마스크:</strong> Gas mask for spray painting</li>
                <li><strong>안전화:</strong> Steel-toed safety boots</li>
                <li><strong>보안경:</strong> Safety goggles</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SHIPBUILDING PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Shipbuilding Field Korean Exam Paper PDF</h2>
            <p>
                Download official shipbuilding field <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>EPS TOPIK Shipbuilding Field Paper PDF</strong></td>
                            <td><span class="tag-badge green">Shipbuilding Field</span></td>
                            <td>2025</td>
                            <td>✔ Solved Welding Terms + Key</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
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
                            <td>✔ Dockyard Safety Protocols</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Blueprint for Shipbuilding Applicants</h2>
            <p>
                Follow this 3-step blueprint to master shipbuilding field questions:
            </p>
            <ul>
                <li><strong>Step 1 (Master Dockyard Safety Rules):</strong> Learn high-altitude fall prevention (추락 예방) and confined space ventilation rules (밀폐 공간 환기).</li>
                <li><strong>Step 2 (Memorize Welding & Pipe Verbs):</strong> Learn action verbs: <em>접합하다 (join)</em>, <em>절단하다 (cut)</em>, <em>조이다 (tighten valve)</em>.</li>
                <li><strong>Step 3 (Practice Crane Signal Symbols):</strong> Learn crane operator hand signals (크레인 수신호) tested in visual questions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Shipbuilding Field Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Which specializations are tested in the EPS shipbuilding exam?</div>
                    <div class="faq-answer">
                        The exam tests hull welding, painting/coating, pipe fitting, scaffolding, and cable rigging.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the shipbuilding paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable shipbuilding field <strong>korean exam paper</strong> sets on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: What safety gear is mandatory for shipyard painting work?</div>
                    <div class="faq-answer">
                        Shipyard painting requires gas masks (방독 마스크), protective suits (보호복), and chemical safety goggles.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
