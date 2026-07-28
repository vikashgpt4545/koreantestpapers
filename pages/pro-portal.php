<?php
// Core PHP Setup
require_once __DIR__ . '/../includes/db.php';

$page_title = "Pro Vault & Subscriber Member Portal - KoreanTestPapers.in";
$page_desc = "Exclusive Pro Member Portal for unlocked access to 156+ Korean Test Papers, grammar cheatsheets, workplace vocabulary lists, and unlimited CBT mock test practice.";
$canonical_url = "https://koreantestpapers.in/pro-portal";

require_once __DIR__ . '/../includes/header.php';
?>

<section class="section-padding" style="background: #0f172a; min-height: 80vh;">
    <div class="container">
        
        <!-- PRO LOGIN FORM CONTAINER (Shown when unauthenticated) -->
        <div id="proLoginBox" style="max-width: 480px; margin: 0 auto; background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 36px 28px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); text-align: center;">
            <div style="font-size: 2.5rem; margin-bottom: 12px;">🔑</div>
            <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 8px;">Pro Member Login</h2>
            <p style="color: #94a3b8; font-size: 0.88rem; margin-bottom: 24px;">
                Enter your registered Pro Account credentials to unlock the subscriber portal.
            </p>

            <form onsubmit="handleProMemberLogin(event)">
                <div style="margin-bottom: 16px; text-align: left;">
                    <label style="color: #cbd5e1; font-size: 0.84rem; font-weight: 600; display: block; margin-bottom: 6px;">Pro Account Email</label>
                    <input type="email" id="proEmailInput" placeholder="name@example.com" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; outline: none; font-size: 0.95rem;">
                </div>
                
                <div style="margin-bottom: 20px; text-align: left;">
                    <label style="color: #cbd5e1; font-size: 0.84rem; font-weight: 600; display: block; margin-bottom: 6px;">Password / Passkey</label>
                    <input type="password" id="proPasswordInput" placeholder="••••••••" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; outline: none; font-size: 0.95rem;">
                </div>

                <button type="submit" class="btn-primary-action" style="width: 100%; padding: 12px; font-size: 0.95rem; font-weight: 800; background: #2563eb; color: #ffffff; border-radius: 6px;">
                    Sign In to Pro Vault ▶
                </button>
            </form>

            <div style="margin-top: 24px; padding-top: 18px; border-top: 1px solid #334155; font-size: 0.82rem; color: #94a3b8;">
                ⚠️ <strong>Need a Pro Account ID?</strong><br>
                Account creation is granted automatically <em>after</em> purchasing a Pro pass on our <a href="/subscription" style="color: #60a5fa; text-decoration: underline;">Subscription Page</a>.
            </div>
        </div>

        <!-- UNLOCKED PRO DASHBOARD (Shown after login or for active subscribers) -->
        <div id="proUnlockedDashboard" style="display: none;">
            
            <!-- HEADER PORTAL BANNER -->
            <div style="background: linear-gradient(135deg, #1e293b, #0f172a); border: 1px solid #334155; border-radius: 12px; padding: 28px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <span class="tag-badge amber" style="font-size: 0.85rem; padding: 4px 10px; margin-bottom: 8px; display: inline-block;">👑 VIP Pro Subscriber Vault</span>
                    <h1 style="font-size: 1.8rem; color: #ffffff; font-weight: 800; margin-bottom: 6px;">
                        Welcome to Pro Study Portal
                    </h1>
                    <p style="color: #94a3b8; font-size: 0.92rem; margin: 0;">
                        Your subscription gives you 100% unlocked access to all 156 PDF master archives, cheatsheets, and audio CBT tests.
                    </p>
                </div>
                
                <div>
                    <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="background: #059669; font-size: 0.92rem; padding: 12px 20px; font-weight: 800; border-radius: 8px;">
                        📂 Open Master Google Drive Folder ▶
                    </a>
                </div>
            </div>

            <!-- 3-COLUMN PRO DASHBOARD GRID -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
                
                <!-- CARD 1: MASTER PDF EXAM ARCHIVE -->
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin: 0;">📄 156+ Solved PDF Papers</h3>
                        <span class="tag-badge green">Unlocked</span>
                    </div>
                    <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.5; margin-bottom: 18px;">
                        Download complete PDF question papers, answer keys, and audio listening tracks from 2015 to 2025.
                    </p>
                    <ul style="color: #cbd5e1; font-size: 0.85rem; padding-left: 18px; line-height: 1.8; margin-bottom: 20px;">
                        <li>EPS TOPIK Reading (2015 – 2025)</li>
                        <li>EPS TOPIK Listening + Audio MP3</li>
                        <li>TOPIK I & II Full Model Practice Bundles</li>
                    </ul>
                    <a href="/download-paper?title=Pro%20Master%20Collection%20Bundle" class="btn-primary-action" style="display: block; text-align: center; width: 100%; font-size: 0.88rem; padding: 10px; background: #2563eb;">
                        Download Full 156 Paper Bundle 📥
                    </a>
                </div>

                <!-- CARD 2: EXCLUSIVE STUDY NOTES & CHEATSHEETS -->
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin: 0;">📝 Pro Cheatsheets & Vocab</h3>
                        <span class="tag-badge amber">Pro Vault</span>
                    </div>
                    <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.5; margin-bottom: 18px;">
                        High-yield study guides created specifically for Indian candidates taking HRD Korea exams.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px;">
                        <div style="background: #0f172a; padding: 10px 12px; border-radius: 6px; font-size: 0.84rem; color: #ffffff; border: 1px solid #334155;">
                            📖 <strong>1000 Workplace Nouns Dictionary (Hindi + Eng)</strong>
                        </div>
                        <div style="background: #0f172a; padding: 10px 12px; border-radius: 6px; font-size: 0.84rem; color: #ffffff; border: 1px solid #334155;">
                            ⚡ <strong>Grammar Particles Mastery (-은/는, -이/가, -을/를)</strong>
                        </div>
                        <div style="background: #0f172a; padding: 10px 12px; border-radius: 6px; font-size: 0.84rem; color: #ffffff; border: 1px solid #334155;">
                            ⚠️ <strong>50 HRD Korea Workplace Safety Signboards</strong>
                        </div>
                    </div>
                    <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="display: block; text-align: center; width: 100%; font-size: 0.88rem; padding: 10px; background: #d97706;">
                        Access All Cheatsheets PDF 📖
                    </a>
                </div>

                <!-- CARD 3: UNLIMITED CBT MOCK TEST ENGINE -->
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin: 0;">💻 Interactive CBT Simulator</h3>
                        <span class="tag-badge green">Unlimited</span>
                    </div>
                    <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.5; margin-bottom: 18px;">
                        Practice real-time CBT mock tests with automated scoring, timer countdown, and detailed step-by-step explanations.
                    </p>
                    <ul style="color: #cbd5e1; font-size: 0.85rem; padding-left: 18px; line-height: 1.8; margin-bottom: 20px;">
                        <li>Bilingual English & Hindi Option Translations</li>
                        <li>Automated Score Analytics</li>
                        <li>Audio Listening & Signboard Modes Unlocked</li>
                    </ul>
                    <a href="/#cbtTab" class="btn-primary-action" style="display: block; text-align: center; width: 100%; font-size: 0.88rem; padding: 10px; background: #059669;">
                        Launch CBT Simulator Engine ▶
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    checkProLoginStatus();
});

function checkProLoginStatus() {
    const isPro = localStorage.getItem("koreanTestProAccess");
    if (isPro === "true") {
        document.getElementById("proLoginBox").style.display = "none";
        document.getElementById("proUnlockedDashboard").style.display = "block";
    }
}

function handleProMemberLogin(e) {
    e.preventDefault();
    const email = document.getElementById("proEmailInput").value;
    if (email) {
        localStorage.setItem("koreanTestProAccess", "true");
        localStorage.setItem("proUserEmail", email);
        document.getElementById("proLoginBox").style.display = "none";
        document.getElementById("proUnlockedDashboard").style.display = "block";
    }
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
