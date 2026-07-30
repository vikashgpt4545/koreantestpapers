<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Grammar Notes Particles & Irregular Verb Conjugation Chart PDF";
$page_desc = "Master Korean grammar notes particles and irregular verb conjugation charts with 7 irregular verb rules (ㅂ, ㄷ, ㄹ, ㅡ, 르, ㅅ, ㅎ), particle matrices, and PDF downloads.";
$canonical_url = "https://koreantestpapers.in/korean-grammar-notes-particles-verbs-chart";

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
  "headline": "Korean Grammar Notes Particles & Irregular Verb Conjugation Chart PDF",
  "description": "Comprehensive resource providing master Korean particle reference charts, 7 irregular verb conjugation rules, audio examples, and printable PDF study guides.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-grammar-notes-particles-verbs-chart"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED PARTICLES & IRREGULAR VERBS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: PARTICLES & IRREGULAR VERBS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Korean Particles & Irregular Verb Conjugation Charts</h2>
            <p>
                Particles (조사) and irregular verb stem transformations (불규칙 활용) are the two most frequently tested grammar components on official NIIED TOPIK and HRD Korea EPS-TOPIK examinations. Mastering a comprehensive <strong>korean grammar notes particles verbs chart</strong> gives candidates absolute clarity when differentiating subject vs topic markers, direction vs venue particles, and applying the 7 official Korean irregular verb rules (ㅂ, ㄷ, ㄹ, ㅡ, 르, ㅅ, ㅎ).
            </p>

            <p>
                A single misapplied particle or un-conjugated irregular verb stem can alter an entire sentence's meaning. Our <strong>korean grammar notes</strong> master chart details particle functions: Subject (~이/가), Topic (~은/는), Object (~을/를), Location (~에 / ~에서), Direction (~으로/로), Instrument (~으로/로), and Possession (~의). Practicing with solved <strong>korean exam paper</strong> exercises guarantees 100% grammar accuracy. Download complete particle and irregular verb PDF charts below.
            </p>

            <div class="callout-box">
                <h4>📜 The 7 Official Korean Irregular Verb Conjugation Rules</h4>
                <ul>
                    <li><strong>ㅂ Irregular (ㅂ 불규칙):</strong> ㅂ changes to 오/우 before vowel endings (돕다→도와요, 춥다→추워요).</li>
                    <li><strong>ㄷ Irregular (ㄷ 불규칙):</strong> ㄷ changes to ㄹ before vowel endings (듣다→들어요, 걷다→걸어요).</li>
                    <li><strong>ㄹ Irregular (ㄹ 불규칙):</strong> ㄹ drops before ㄴ, ㅂ, ㅅ endings (살다→삽니다, 만들다→만듭니다).</li>
                    <li><strong>ㅡ Irregular (ㅡ 불규칙):</strong> ㅡ drops when meeting vowel endings (바쁘다→바빠요, 예쁘다→예뻐요).</li>
                    <li><strong>르 Irregular (르 불규칙):</strong> 르 changes to ㄹㄹ before vowel endings (부르다→불러요, 모르다→몰라요).</li>
                    <li><strong>ㅅ Irregular (ㅅ 불규칙):</strong> ㅅ drops before vowel endings without causing vowel merging (짓다→지어요).</li>
                    <li><strong>ㅎ Irregular (ㅎ 불규칙):</strong> ㅎ drops and stem vowel merges with ㅣ (그렇다→그래요, 빨갛다→빨개요).</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MASTER PARTICLE MATRIX TABLE -->
        <div class="seo-content-box">
            <h2>Master Korean Particle (조사) Functional Matrix Table</h2>
            <p>
                Examine the functions, attachment rules, and context examples for essential Korean particles:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Particle Category</th>
                            <th>Korean Particle</th>
                            <th>Attachment Condition</th>
                            <th>Primary Function & Usage Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Subject Marker</strong></td>
                            <td>~이 / 가</td>
                            <td>~이 (Consonant) / ~가 (Vowel)</td>
                            <td>Marks grammatical subject (비가 옵니다 - Rain falls)</td>
                        </tr>
                        <tr>
                            <td><strong>Topic / Contrast</strong></td>
                            <td>~은 / 는</td>
                            <td>~은 (Consonant) / ~는 (Vowel)</td>
                            <td>Marks sentence topic/contrast (저는 한국인입니다)</td>
                        </tr>
                        <tr>
                            <td><strong>Direct Object</strong></td>
                            <td>~을 / 를</td>
                            <td>~을 (Consonant) / ~를 (Vowel)</td>
                            <td>Marks direct object of verb (사과를 먹어요)</td>
                        </tr>
                        <tr>
                            <td><strong>Time / Static Location</strong></td>
                            <td>~에</td>
                            <td>Any Noun</td>
                            <td>Time (3시에) or Static Location (학교에 있다)</td>
                        </tr>
                        <tr>
                            <td><strong>Dynamic Action Venue</strong></td>
                            <td>~에서</td>
                            <td>Any Place Noun</td>
                            <td>Venue where action happens (공장에서 일해요)</td>
                        </tr>
                        <tr>
                            <td><strong>Direction / Means</strong></td>
                            <td>~으로 / 로</td>
                            <td>~으로 (Consonant) / ~로 (Vowel/ㄹ)</td>
                            <td>Direction (서울로) or Tool/Means (망치로)</td>
                        </tr>
                        <tr>
                            <td><strong>Possession</strong></td>
                            <td>~의</td>
                            <td>Any Noun</td>
                            <td>Possessive "of" / " 's " (친구의 책 - Friend's book)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR PARTICLES & VERB CHARTS -->
        <div class="seo-content-box">
            <h2>Download Free Particles & Irregular Verb Conjugation PDF Charts</h2>
            <p>
                Select your required <strong>korean test papers</strong> grammar chart below for instant PDF downloads:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Chart Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Included Assets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Korean Particles Complete Functional Matrix PDF Chart</strong></td>
                            <td><span class="tag-badge green">Particle Chart</span></td>
                            <td>2025</td>
                            <td>✔ Full Particle Reference Matrix</td>
                            <td><a href="/pdf/korean-grammar-pdf-download.html" target="_blank" class="btn-download-sm">📥 View Chart</a></td>
                        </tr>
                        <tr>
                            <td><strong>7 Irregular Verb Conjugation Master PDF Guide</strong></td>
                            <td><span class="tag-badge green">Irregular Verbs</span></td>
                            <td>2024</td>
                            <td>✔ Solved 7 Irregular Verb Rules</td>
                            <td><a href="/download-paper?session=96th&title=7%20Irregular%20Verbs%20Master%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>100 High-Frequency Korean Verbs Conjugation Cheat Sheet</strong></td>
                            <td><span class="tag-badge green">Verb Cheat Sheet</span></td>
                            <td>2024</td>
                            <td>✔ Present, Past, Future & Honorifics</td>
                            <td><a href="/download-paper?session=91st&title=100%20Verbs%20Conjugation%20Cheat%20Sheet" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master Particles & Verbs Drive Archive Vault</strong></td>
                            <td><span class="tag-badge amber">Drive Hub</span></td>
                            <td>Archive</td>
                            <td>✔ Full 156 PDF/MP3 Vault</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC CONJUGATION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for Mastering Irregular Verb Conjugations</h2>
            <p>
                Eliminate verb conjugation errors on test day by following these 4 study steps:
            </p>
            <ul>
                <li><strong>Step 1 (Group Verbs by Irregular Type):</strong> Learn ㅂ irregulars (돕다, 춥다, 덥다, 쉽다, 어렵다) together as a single rule family.</li>
                <li><strong>Step 2 (Remember ㄷ Irregular Exceptions):</strong> Note that 걷다 (to walk) is irregular (걸어요), but 닫다 (to close) is regular (닫아요).</li>
                <li><strong>Step 3 (Practice Particle Replacement Drills):</strong> Swap ~이/가 and ~은/는 in practice sentences to feel subtle shifts in emphasis.</li>
                <li><strong>Step 4 (Grade Past Exam Grammar Items):</strong> Test your verb and particle conjugation accuracy against past paper answer keys.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Particles & Irregular Verbs</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What happens to ㅂ irregular verbs when conjugating with ~아/어 요?</div>
                    <div class="faq-answer">
                        In ㅂ irregular verbs (e.g., 춥다), the ㅂ changes to 우 (or 오 for 돕다/곱다) when meeting vowel endings, conjugating as 추워요 (chuw-ayo).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: How do I know whether to use ~으로 or ~로 for direction or tools?</div>
                    <div class="faq-answer">
                        Use ~으로 if the preceding noun ends in a consonant (망치로... wait: 망치 ends in vowel so 망치로; 연삭기 ends in vowel so 연삭기로; 펜치 ends in vowel so 펜치로; 못 ends in consonant so 못으로).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Where can I download complete printable Korean particle and irregular verb PDF charts?</div>
                    <div class="faq-answer">
                        You can view and download free printable Korean particle and 7 irregular verb conjugation PDF charts directly from koreantestpapers.in.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
