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

            <!-- DEMO PRO CREDENTIALS DISPLAY BOX -->
            <div style="background: #0f172a; border: 1px solid #2563eb; border-radius: 8px; padding: 12px 16px; margin-bottom: 20px; text-align: left;">
                <div style="font-size: 0.82rem; color: #60a5fa; font-weight: 700; margin-bottom: 6px;">🔑 Master Pro Access Credentials:</div>
                <div style="font-size: 0.84rem; color: #ffffff; margin-bottom: 2px;">Email ID: <strong style="color: #fbbf24; font-family: monospace;">pro@koreantestpapers.in</strong></div>
                <div style="font-size: 0.84rem; color: #ffffff;">Password: <strong style="color: #fbbf24; font-family: monospace;">KOREA2025</strong></div>
            </div>

            <form onsubmit="handleProMemberLogin(event)">
                <div style="margin-bottom: 16px; text-align: left;">
                    <label style="color: #cbd5e1; font-size: 0.84rem; font-weight: 600; display: block; margin-bottom: 6px;">Pro Account Email</label>
                    <input type="email" id="proEmailInput" value="pro@koreantestpapers.in" placeholder="name@example.com" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; outline: none; font-size: 0.95rem;">
                </div>
                
                <div style="margin-bottom: 20px; text-align: left;">
                    <label style="color: #cbd5e1; font-size: 0.84rem; font-weight: 600; display: block; margin-bottom: 6px;">Password / Passkey</label>
                    <input type="password" id="proPasswordInput" value="KOREA2025" placeholder="••••••••" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; outline: none; font-size: 0.95rem;">
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
            <div style="background: linear-gradient(135deg, #1e293b, #0f172a); border: 1px solid #334155; border-radius: 12px; padding: 24px; margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <span class="tag-badge amber" style="font-size: 0.85rem; padding: 4px 10px; margin-bottom: 8px; display: inline-block;">👑 VIP Pro Subscriber Vault</span>
                    <h1 style="font-size: 1.7rem; color: #ffffff; font-weight: 800; margin-bottom: 4px;">
                        Welcome to Pro Study Portal
                    </h1>
                    <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">
                        Logged in as: <strong id="loggedUserEmailDisplay" style="color: #60a5fa;">pro@koreantestpapers.in</strong>
                    </p>
                </div>
                
                <div style="display: flex; gap: 10px; align-items: center;">
                    <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="background: #059669; font-size: 0.88rem; padding: 10px 16px; font-weight: 800; border-radius: 6px;">
                        📂 Master Drive Folder ▶
                    </a>
                    <button onclick="handleProLogout()" style="background: #dc2626; color: #ffffff; border: none; padding: 10px 14px; border-radius: 6px; font-weight: 700; font-size: 0.85rem; cursor: pointer;">
                        🚪 Logout
                    </button>
                </div>
            </div>

            <!-- PRO PORTAL TAB NAVIGATION HEADER -->
            <div class="pro-tab-bar" style="display: flex; gap: 10px; margin-bottom: 24px; border-bottom: 2px solid #334155; padding-bottom: 12px; flex-wrap: wrap;">
                <button class="pro-tab-btn active" onclick="switchProTab('pdfVaultTab', this)">📄 Master PDF Vault (156 Papers)</button>
                <button class="pro-tab-btn" onclick="switchProTab('cheatsheetsTab', this)">📝 Cheatsheets & Vocab</button>
                <button class="pro-tab-btn" onclick="switchProTab('cbtSimTab', this)">💻 CBT Test Simulator</button>
                <button class="pro-tab-btn" onclick="switchProTab('accountTab', this)">👤 Account & Pass Info</button>
            </div>

            <!-- TAB 1: MASTER PDF EXAM ARCHIVE -->
            <div id="pdfVaultTab" class="pro-tab-panel active" style="display: block;">
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 800; margin-bottom: 4px;">📄 Complete 156 Solved Master PDF Papers</h3>
                            <p style="color: #94a3b8; font-size: 0.88rem; margin: 0;">Includes official question papers, answer sheets, listening transcripts, and audio files (2015 – 2025).</p>
                        </div>
                        <span class="tag-badge green" style="font-size: 0.85rem; padding: 6px 12px;">Unlimited Access</span>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin: 20px 0;">
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <h4 style="color: #60a5fa; font-size: 0.98rem; font-weight: 700; margin-bottom: 6px;">📘 EPS-TOPIK Reading & Listening</h4>
                            <p style="color: #94a3b8; font-size: 0.82rem; margin-bottom: 12px;">Specialized industry papers with English option explanations.</p>
                            <a href="/eps-topik-reading-korean-test-papers" class="btn-primary-action" style="font-size: 0.8rem; padding: 6px 12px; background: #2563eb;">View EPS Papers ▶</a>
                        </div>
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <h4 style="color: #60a5fa; font-size: 0.98rem; font-weight: 700; margin-bottom: 6px;">📙 TOPIK I & II Official Master Archive</h4>
                            <p style="color: #94a3b8; font-size: 0.82rem; margin-bottom: 12px;">30th to 102nd official examination question bundles.</p>
                            <a href="/topik-1-level-1-korean-test-papers" class="btn-primary-action" style="font-size: 0.8rem; padding: 6px 12px; background: #0284c7;">View TOPIK I & II ▶</a>
                        </div>
                    </div>

                    <a href="/download-paper?title=Pro%20Master%20Collection%20Bundle" class="btn-primary-action" style="display: block; text-align: center; width: 100%; font-size: 0.95rem; padding: 14px; background: #2563eb; font-weight: 800;">
                        Download Full 156 Master PDF Archive Bundle 📥
                    </a>
                </div>
            </div>

            <!-- TAB 2: EXCLUSIVE STUDY NOTES & CHEATSHEETS -->
            <div id="cheatsheetsTab" class="pro-tab-panel" style="display: none;">
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 800; margin-bottom: 4px;">📝 Pro Cheatsheets & Workplace Vocabulary</h3>
                            <p style="color: #94a3b8; font-size: 0.88rem; margin: 0;">High-yield study guides created specifically for Indian candidates taking HRD Korea exams.</p>
                        </div>
                        <span class="tag-badge amber" style="font-size: 0.85rem; padding: 6px 12px;">Pro Vault Exclusive</span>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin: 20px 0;">
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">📖</div>
                            <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin-bottom: 4px;">1000 Workplace Nouns Dictionary</h4>
                            <p style="color: #94a3b8; font-size: 0.82rem; margin-bottom: 12px;">Factory, agriculture & construction vocabulary with Hindi + English translations.</p>
                            <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="font-size: 0.8rem; padding: 6px 12px; background: #d97706;">Download PDF 📥</a>
                        </div>

                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">⚡</div>
                            <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin-bottom: 4px;">Grammar Particles Mastery</h4>
                            <p style="color: #94a3b8; font-size: 0.82rem; margin-bottom: 12px;">Complete breakdown of essential exam particles (-은/는, -이/가, -을/를, -에서).</p>
                            <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="font-size: 0.8rem; padding: 6px 12px; background: #d97706;">Download PDF 📥</a>
                        </div>

                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">⚠️</div>
                            <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin-bottom: 4px;">50 HRD Korea Safety Signboards</h4>
                            <p style="color: #94a3b8; font-size: 0.82rem; margin-bottom: 12px;">Official industrial safety symbols & warning signs appearing in reading exams.</p>
                            <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-primary-action" style="font-size: 0.8rem; padding: 6px 12px; background: #d97706;">Download PDF 📥</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: UNLIMITED CBT MOCK TEST SIMULATOR -->
            <div id="cbtSimTab" class="pro-tab-panel" style="display: none;">
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 800; margin-bottom: 4px;">💻 Interactive CBT Simulator Engine</h3>
                            <p style="color: #94a3b8; font-size: 0.88rem; margin: 0;">Unlimited randomized question sets, real-time timer countdown, and detailed answer explanations.</p>
                        </div>
                        <span class="tag-badge green" style="font-size: 0.85rem; padding: 6px 12px;">Unlimited CBT</span>
                    </div>

                    <div style="background: #0f172a; border: 1px solid #334155; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                        <h4 style="color: #ffffff; font-size: 1rem; font-weight: 700; margin-bottom: 10px;">✨ Features Included in Your Pass:</h4>
                        <ul style="color: #cbd5e1; font-size: 0.88rem; padding-left: 20px; line-height: 1.9; margin: 0;">
                            <li>Bilingual English & Hindi Option Translations for difficult vocabulary</li>
                            <li>Randomized question engine — never get the exact same test sequence twice</li>
                            <li>Automated Score Analytics & Instant Explanations</li>
                            <li>Audio Listening & Workplace Signboard Question Modes</li>
                        </ul>
                    </div>

                    <a href="/#cbtTab" class="btn-primary-action" style="display: block; text-align: center; width: 100%; font-size: 0.95rem; padding: 14px; background: #059669; font-weight: 800;">
                        Launch CBT Simulator Engine Now ▶
                    </a>
                </div>
            </div>

            <!-- TAB 4: ACCOUNT & SUBSCRIBER INFO -->
            <div id="accountTab" class="pro-tab-panel" style="display: none;">
                <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
                    <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 800; margin-bottom: 16px;">👤 Account & Subscription Pass Details</h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 20px;">
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <span style="color: #94a3b8; font-size: 0.8rem; display: block; margin-bottom: 4px;">Account Status</span>
                            <span style="color: #10b981; font-weight: 800; font-size: 1.05rem;">👑 VIP Pro Subscriber (Active)</span>
                        </div>
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <span style="color: #94a3b8; font-size: 0.8rem; display: block; margin-bottom: 4px;">Registered Email</span>
                            <span id="accountEmailVal" style="color: #ffffff; font-weight: 700; font-size: 1.05rem;">pro@koreantestpapers.in</span>
                        </div>
                        <div style="background: #0f172a; border: 1px solid #334155; padding: 16px; border-radius: 8px;">
                            <span style="color: #94a3b8; font-size: 0.8rem; display: block; margin-bottom: 4px;">Access Scope</span>
                            <span style="color: #fbbf24; font-weight: 700; font-size: 1.05rem;">All 156 PDFs + CBT + Cheatsheets</span>
                        </div>
                    </div>

                    <button onclick="handleProLogout()" class="btn-primary-action" style="background: #dc2626; font-size: 0.9rem; padding: 12px 20px; font-weight: 800;">
                        🚪 Log Out of Pro Portal
                    </button>
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
    const userEmail = localStorage.getItem("proUserEmail") || "pro@koreantestpapers.in";
    if (isPro === "true") {
        document.getElementById("proLoginBox").style.display = "none";
        document.getElementById("proUnlockedDashboard").style.display = "block";
        const emailDisp = document.getElementById("loggedUserEmailDisplay");
        if (emailDisp) emailDisp.textContent = userEmail;
        const accEmailVal = document.getElementById("accountEmailVal");
        if (accEmailVal) accEmailVal.textContent = userEmail;
    }
}

function handleProMemberLogin(e) {
    e.preventDefault();
    const email = document.getElementById("proEmailInput").value;
    if (email) {
        localStorage.setItem("koreanTestProAccess", "true");
        localStorage.setItem("proUserEmail", email);
        checkProLoginStatus();
    }
}

function handleProLogout() {
    localStorage.removeItem("koreanTestProAccess");
    localStorage.removeItem("proUserEmail");
    document.getElementById("proUnlockedDashboard").style.display = "none";
    document.getElementById("proLoginBox").style.display = "block";
}

function switchProTab(tabId, btnElement) {
    const panels = document.querySelectorAll('.pro-tab-panel');
    panels.forEach(panel => panel.style.display = 'none');

    const buttons = document.querySelectorAll('.pro-tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    const targetPanel = document.getElementById(tabId);
    if (targetPanel) targetPanel.style.display = 'block';

    if (btnElement) btnElement.classList.add('active');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
