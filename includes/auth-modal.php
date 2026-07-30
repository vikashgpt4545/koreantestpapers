<!-- Auth Login / Register Modal Component for KoreanTestPapers.in -->
<div id="authModal" class="pro-modal-overlay" style="display: none;">
    <div class="pro-modal-box" style="max-width: 440px; padding: 28px;">
        <button class="pro-modal-close" onclick="closeAuthModal()">&times;</button>
        
        <!-- Auth Tabs Header -->
        <div style="display: flex; gap: 8px; border-bottom: 2px solid #e2e8f0; margin-bottom: 20px;">
            <button id="tabAuthLoginBtn" onclick="switchAuthTab('login')" style="flex: 1; padding: 10px; font-weight: 700; border: none; background: transparent; border-bottom: 3px solid #2563eb; color: #2563eb; cursor: pointer;">🔑 Log In</button>
            <button id="tabAuthRegisterBtn" onclick="switchAuthTab('register')" style="flex: 1; padding: 10px; font-weight: 700; border: none; background: transparent; border-bottom: 3px solid transparent; color: #64748b; cursor: pointer;">✨ Register (30-Day Free Pass)</button>
        </div>

        <!-- LOGIN FORM -->
        <form id="authLoginForm" action="/auth-handler.php" method="POST" style="display: block;">
            <input type="hidden" name="action" value="login">
            <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 4px;">Welcome Back!</h3>
            <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 16px;">Log in to access your practice account and CBT tests.</p>

            <div style="margin-bottom: 14px; text-align: left;">
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 4px;">Email Address:</label>
                <input type="email" name="email" required placeholder="yourname@example.com" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem;">
            </div>

            <div style="margin-bottom: 20px; text-align: left;">
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 4px;">Password:</label>
                <input type="password" name="password" required placeholder="••••••••" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem;">
            </div>

            <button type="submit" class="btn-primary-action" style="width: 100%; padding: 12px; font-weight: 700; background: #2563eb; border-radius: 6px; color: white;">Log In to Account ▶</button>
        </form>

        <!-- REGISTER FORM -->
        <form id="authRegisterForm" action="/auth-handler.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="register">
            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; padding: 10px; border-radius: 6px; font-size: 0.85rem; margin-bottom: 16px; text-align: center;">
                🎁 <strong>30-Day Free Pass Included ($80 Value)!</strong> Instant unlocked access to all PDF papers, CBT tests, and audio scripts upon registration.
            </div>

            <div style="margin-bottom: 12px; text-align: left;">
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 4px;">Full Name:</label>
                <input type="text" name="name" required placeholder="Candidate Name" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem;">
            </div>

            <div style="margin-bottom: 12px; text-align: left;">
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 4px;">Email Address:</label>
                <input type="email" name="email" required placeholder="candidate@example.com" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem;">
            </div>

            <div style="margin-bottom: 20px; text-align: left;">
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 4px;">Create Password:</label>
                <input type="password" name="password" required placeholder="••••••••" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem;">
            </div>

            <button type="submit" class="btn-primary-action" style="width: 100%; padding: 12px; font-weight: 700; background: #059669; border-radius: 6px; color: white;">Claim 30-Day Free Access Pass 🚀</button>
        </form>
    </div>
</div>

<script>
function openAuthModal(tab) {
    var modal = document.getElementById('authModal');
    if (modal) {
        modal.style.display = 'flex';
        switchAuthTab(tab || 'login');
    }
}
function closeAuthModal() {
    var modal = document.getElementById('authModal');
    if (modal) modal.style.display = 'none';
}
function switchAuthTab(tab) {
    var loginForm = document.getElementById('authLoginForm');
    var regForm = document.getElementById('authRegisterForm');
    var loginBtn = document.getElementById('tabAuthLoginBtn');
    var regBtn = document.getElementById('tabAuthRegisterBtn');

    if (tab === 'register') {
        loginForm.style.display = 'none';
        regForm.style.display = 'block';
        loginBtn.style.color = '#64748b';
        loginBtn.style.borderBottomColor = 'transparent';
        regBtn.style.color = '#2563eb';
        regBtn.style.borderBottomColor = '#2563eb';
    } else {
        loginForm.style.display = 'block';
        regForm.style.display = 'none';
        loginBtn.style.color = '#2563eb';
        loginBtn.style.borderBottomColor = '#2563eb';
        regBtn.style.color = '#64748b';
        regBtn.style.borderBottomColor = 'transparent';
    }
}
</script>
