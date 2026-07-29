<!-- Pro Paywall Modal Component for KoreanTestPapers.in -->
<div id="proPaywallModal" class="pro-modal-overlay" style="display: none;">
    <div class="pro-modal-box">
        <button class="pro-modal-close" onclick="closeProModal()">&times;</button>
        <div class="pro-modal-badge">💎 PRO UNLOCK REQUIRED</div>
        <h3 class="pro-modal-title">Unlock Full Pro Access & Study Notes!</h3>
        <p class="pro-modal-subtitle">
            Upgrade to the <strong>30-Day Pro Pass ($8 USD)</strong> to unlock <strong>📝 Pro Study Notes</strong>, <strong>📄 Master PDF Vault</strong>, and Unlimited CBT Simulator Practice!
        </p>

        <div class="pro-features-grid">
            <div class="pro-feature-item">
                <span class="pro-icon">📝</span>
                <div>
                    <strong>📝 Exclusive Pro Study Notes</strong>
                    <p>60-Chapter vocabulary notes, safety signs & grammar cheatsheets</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">📄</span>
                <div>
                    <strong>📄 Master PDF Vault Access</strong>
                    <p>150+ Solved official past exam papers & audio transcripts</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">🎲</span>
                <div>
                    <strong>Dynamic Question Generator</strong>
                    <p>Randomized unseen question sampling on every practice session</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">📊</span>
                <div>
                    <strong>Full CBT Test Analytics</strong>
                    <p>Detailed right/wrong reports & question breakdown</p>
                </div>
            </div>
        </div>

        <!-- 30-Day Pass ($8 USD) Highlight Card -->
        <div style="background: linear-gradient(135deg, #1e3a8a, #2563eb); color: white; border-radius: 10px; padding: 20px; text-align: center; margin: 18px 0;">
            <div style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; background: #fbbf24; color: #0f172a; display: inline-block; padding: 3px 10px; border-radius: 12px; margin-bottom: 8px;">BEST VALUE MEMBER PASS</div>
            <div style="font-size: 1.4rem; font-weight: 800;">30-Day Monthly Pro Pass</div>
            <div style="font-size: 2.2rem; font-weight: 800; margin: 6px 0;">$<?php echo htmlspecialchars(get_setting('pro_price_usd', '8')); ?> <span style="font-size: 1rem; font-weight: 400;">USD / Month</span></div>
            <p style="font-size: 0.88rem; color: #e0f2fe; margin: 0;">Instant 1-Click Access to Study Notes & All Test Archives</p>
        </div>

        <div class="pro-modal-actions" style="display: flex; flex-direction: column; gap: 10px;">
            <a href="/subscription" class="btn-pro-primary" style="background: #059669; font-weight: 800; text-align: center;">🔓 Unlock 30-Day Pro Pass ($<?php echo htmlspecialchars(get_setting('pro_price_usd', '8')); ?> USD)</a>
            <a href="/auth-handler.php?action=extend_trial" style="background: #fbbf24; color: #0f172a; padding: 12px; border-radius: 8px; font-weight: 800; text-decoration: none; text-align: center; font-size: 0.95rem;">
                🎁 Need More Practice? Claim +10 Days Extra Free Trial ▶
            </a>
            <button class="btn-pro-secondary" onclick="closeProModal()">⚡ Continue Free Practice</button>
        </div>
    </div>
</div>

