<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Tools & Machinery Korean Exam Paper & Korean Test Papers";
$page_desc = "Download free EPS TOPIK Tools & Machinery Korean exam paper PDF with factory hand tools, industrial machinery, operation verbs, maintenance safety, and solved answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-machinery-korean-exam-paper";

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
  "headline": "EPS TOPIK Tools & Machinery Korean Exam Paper & Korean Test Papers",
  "description": "Comprehensive guide and downloadable EPS TOPIK Tools & Machinery Korean exam paper PDF sets with factory hand tools, machine operation verbs, and answer sheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-machinery-korean-exam-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED MACHINERY GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: MACHINERY SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Tools & Machinery Korean Exam Papers</h2>
            <p>
                Industrial hand tools (수공구) and factory machinery (산업 기계) represent a core testing module in the EPS-TOPIK manufacturing exam. Foreign workers under South Korea's E-9 visa system must identify tool names, select correct operation verbs, understand equipment maintenance protocols, and follow safety operating procedures.
            </p>
            <p>
                Our specialized tools and machinery <strong>korean exam paper</strong> compiles comprehensive photo identification cards and action verb matching exercises. Practicing with dedicated machinery <strong>korean test papers</strong> ensures candidates master factory equipment terms and pass their CBT exam with confidence. Download the complete machinery paper PDF below.
            </p>

            <div class="callout-box">
                <h4>⚙️ Essential Industrial Machinery & Hand Tools List</h4>
                <ul>
                    <li><strong>Hand Tools (수공구):</strong> 망치 (Hammer), 니퍼 (Wire Cutters), 펜치 (Pliers), 스패너 (Spanner/Wrench), 톱 (Hand Saw), 드라이버 (Screwdriver)</li>
                    <li><strong>Electric & Power Tools:</strong> 전기 드릴 (Electric Drill), 사포 (Sandpaper), 글라인더 (Angle Grinder), 줄 (File tool)</li>
                    <li><strong>Heavy Industrial Machinery:</strong> 프레스 기계 (Press Machine), 절단기 (Cutting Machine), 용접기 (Welder), 에어 컴프레서 (Air Compressor)</li>
                    <li><strong>Transport & Lifting Equipment:</strong> 지게차 (Forklift), 크레인 (Crane), 대차 / 손수레 (Hand Cart / Trolley), 컨베이어 (Conveyor Belt)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MACHINERY OPERATION VERBS & COLLOCATIONS -->
        <div class="seo-content-box">
            <h2>Essential Machinery Operation Verbs & Collocations</h2>
            <p>
                Master these high-frequency tool and machine action verb pairs:
            </p>

            <h3>1. Hand Tool Operation Pairs</h3>
            <ul>
                <li><strong>못을 박다:</strong> Drive a nail using a hammer (망치)</li>
                <li><strong>볼트를 조이다 / 풀다:</strong> Tighten / Loosen a bolt using a spanner (스패너)</li>
                <li><strong>전선을 자르다:</strong> Cut an electric wire using nippers (니퍼)</li>
                <li><strong>철사를 구부리다:</strong> Bend a metal wire using pliers (펜치)</li>
            </ul>

            <h3>2. Heavy Machinery Operation Pairs</h3>
            <ul>
                <li><strong>스위치를 누르다 / 켜다:</strong> Press / Turn on a machine power switch</li>
                <li><strong>기계를 조작하다 / 가동하다:</strong> Operate / Start up heavy machinery</li>
                <li><strong>물건을 적재하다 / 운반하다:</strong> Load / Transport cargo using a forklift (지게차)</li>
                <li><strong>기계를 점검하다 / 수리하다:</strong> Inspect / Repair machinery during maintenance</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR MACHINERY PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Tools & Machinery Korean Exam Paper PDF</h2>
            <p>
                Download official factory machinery <strong>korean test papers</strong> with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Tools List</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Tools & Machinery Exam Paper PDF</strong></td>
                            <td><span class="tag-badge green">Factory Equipment</span></td>
                            <td>2025</td>
                            <td>✔ Solved Tools List + Key</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Picture & Image Paper PDF</strong></td>
                            <td><span class="tag-badge green">Visual Questions</span></td>
                            <td>2025</td>
                            <td>✔ 300+ Visual Image Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Rules</span></td>
                            <td>2025</td>
                            <td>✔ Machinery Safety Protocols</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3 Tactics for 100% Accuracy on Machinery Questions</h2>
            <p>
                Follow these 3 tactics when studying machinery paper sets:
            </p>
            <ul>
                <li><strong>Tactic 1 (Pair Tools with Verbs):</strong> Memorize each tool name alongside its mandatory action verb (e.g., <em>톱 ➔ 나무를 자르다 [Saw ➔ cut wood]</em>).</li>
                <li><strong>Tactic 2 (Study Maintenance Safety):</strong> Learn machine safety words: <em>안전 커버 (Safety cover)</em>, <em>전원 차단 (Power cutoff)</em>, <em>비상 정지 버튼 (Emergency stop button)</em>.</li>
                <li><strong>Tactic 3 (Review Chapter 41 to 45):</strong> Thoroughly review chapters 41 to 45 of the official textbook covering manufacturing hand tools and industrial machinery.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Machinery Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many tool and machinery questions appear in the exam?</div>
                    <div class="faq-answer">
                        Tool and machinery questions account for 4 to 6 questions in the Manufacturing field EPS-TOPIK examination.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the machinery paper PDF include picture matching questions?</div>
                    <div class="faq-answer">
                        Yes! All tool and machinery <strong>korean exam paper</strong> sets feature visual photo matching questions with answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Which tool is used to tighten nuts and bolts?</div>
                    <div class="faq-answer">
                        A spanner or wrench (스패너 / 렌치) is used to tighten (조이다) or loosen (풀다) nuts and bolts in Korean factories.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
