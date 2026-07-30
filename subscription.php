<?php
// Core PHP & Database Setup
require_once __DIR__ . '/includes/db.php';

// Page SEO Meta Configuration
$page_title = "Claim 30-Day Free Candidate Access Pass ($80 Value) - Korean Test Papers";
$page_desc = "Claim 30-Day Free Candidate Pass ($80 USD Value) to unlock 156+ Solved EPS-TOPIK PDF papers, CBT mock tests, audio scripts, and workplace grammar dictionaries 100% free.";
$canonical_url = "https://koreantestpapers.in/subscription";

// Include Shared Header Template
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION FOR FREE CLAIM PASS PAGE -->
<section class="section-padding" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: white; text-align: center;">
    <div class="container">
        <span class="tag-badge green" style="font-size: 0.9rem; margin-bottom: 12px; display: inline-block;">🎁 100% FREE CANDIDATE ACCESS PASS</span>
        <h1 style="font-size: 2.4rem; margin-bottom: 12px; color: #ffffff;">Claim $80 Worth of EPS-TOPIK & TOPIK Preparation Tools 100% FREE</h1>
        <p style="max-width: 750px; margin: 0 auto 24px; font-size: 1.1rem; color: #cbd5e1; line-height: 1.6;">
            Create a free candidate account or log in to get instant 30-day unlocked access to all 156+ solved master PDF papers, CBT computer mock exams, audio listening scripts, and workplace vocabulary cheatsheets!
        </p>
    </div>
</section>

<!-- FREE PASS CLAIM CARD SECTION -->
<section class="section-padding">
    <div class="container">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2rem; color: #0f172a;">30-Day Full Candidate Pass ($80 Value — $0 Free)</h2>
            <p style="color: #64748b;">(Includes 30 Days Unlocked Access to 📝 Pro Study Notes, 📄 Master PDF Vault, Unlimited CBT Tests & Practice Games)</p>
        </div>

        <div style="max-width: 580px; margin: 0 auto;">
            <!-- 30-Day Free Pass Card (Featured) -->
            <div class="plan-pricing-card popular-card" style="background: white; border: 3px solid #059669; border-radius: 16px; padding: 36px 28px; text-align: center; position: relative; box-shadow: 0 15px 30px -5px rgba(5, 150, 105, 0.2);">
                <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); background: #059669; color: white; padding: 4px 22px; border-radius: 20px; font-size: 0.82rem; font-weight: 800; text-transform: uppercase;">🎁 100% FREE CANDIDATE ACCESS</div>
                <h3 style="font-size: 1.6rem; color: #0f172a; margin-bottom: 8px;">30-Day Candidate Access Pass</h3>
                <div style="font-size: 3rem; font-weight: 800; color: #059669; margin-bottom: 4px;">FREE <span style="font-size: 1.1rem; color: #64748b; font-weight: 400; text-decoration: line-through;">($80 USD Value)</span></div>
                <p style="font-size: 0.95rem; color: #64748b; margin-bottom: 24px;">Complete Exam Preparation Suite — 30 Days Unlocked</p>

                <ul style="text-align: left; font-size: 1rem; line-height: 2; color: #334155; margin-bottom: 28px; list-style: none; padding: 0;">
                    <li>✔ <strong>📄 156+ Solved EPS-TOPIK & TOPIK Master PDF Archive</strong> ($30 Value — FREE)</li>
                    <li>✔ <strong>🎧 Audio Challenge & Listening Transcripts</strong> ($20 Value — FREE)</li>
                    <li>✔ <strong>💻 Unlimited Dynamic CBT Mock Test Simulator</strong> ($15 Value — FREE)</li>
                    <li>✔ <strong>📝 60-Chapter Workplace Vocab & Grammar Dictionaries</strong> ($15 Value — FREE)</li>
                    <li>✔ <strong>🔓 100% Unlocked Level 2+ Hard Game Modes</strong></li>
                    <li>✔ <strong>⚡ Zero Hidden Fees — Instant Access Upon Free Signup</strong></li>
                </ul>

                <?php if (is_logged_in()): ?>
                    <a href="/pro-portal" class="btn-primary-action" style="display: block; text-decoration: none; width: 100%; border-radius: 8px; padding: 14px; background: #2563eb; color: white; font-size: 1.1rem; font-weight: 800;">
                        🎓 Enter Student Dashboard (All Unlocked) ▶
                    </a>
                <?php else: ?>
                    <button onclick="openAuthModal('register')" class="btn-primary-action" style="width: 100%; border-radius: 8px; padding: 14px; background: #059669; color: white; font-size: 1.1rem; font-weight: 800; cursor: pointer; border: none;">
                        🎁 Claim 30-Day Free Access (Create Account / Log In) ▶
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>
