<!-- Pro Paywall Modal Component for KoreanTestPapers.in -->
<div id="proPaywallModal" class="pro-modal-overlay" style="display: none;">
    <div class="pro-modal-box">
        <button class="pro-modal-close" onclick="closeProModal()">&times;</button>
        <div class="pro-modal-badge">💎 PRO UNLOCK REQUIRED</div>
        <h3 class="pro-modal-title">You've Completed Level 1 / Free Trial!</h3>
        <p class="pro-modal-subtitle">
            Upgrade to a <strong>Pro Student Pass</strong> to unlock Level 2+, Hard Mode Game Challenges, Dynamic No-Repeat Question Bank, and Full CBT Analytics!
        </p>

        <div class="pro-features-grid">
            <div class="pro-feature-item">
                <span class="pro-icon">🎲</span>
                <div>
                    <strong>Dynamic Question Generator</strong>
                    <p>Randomized unseen question sampling on every play session</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">🏆</span>
                <div>
                    <strong>Level 2+ & Pro Game Modes</strong>
                    <p>Speed Blitz, Signboard Puzzles & Hard Challenges</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">📊</span>
                <div>
                    <strong>Full CBT Test Analytics</strong>
                    <p>Detailed right/wrong reports & question breakdown</p>
                </div>
            </div>
            <div class="pro-feature-item">
                <span class="pro-icon">📝</span>
                <div>
                    <strong>Pro Study Notes & Cheatsheets</strong>
                    <p>60-Chapter vocabulary notes & grammar guides</p>
                </div>
            </div>
        </div>

        <!-- Time-Based USD Pricing Tiers -->
        <div class="pro-pricing-mini-grid">
            <div class="mini-price-card" onclick="selectPassPlan('10-day', 3)">
                <div class="mini-plan-badge">10 DAYS</div>
                <div class="mini-plan-price">$3 <span>USD</span></div>
                <div class="mini-plan-label">Cram Pass</div>
            </div>
            <div class="mini-price-card popular" onclick="selectPassPlan('20-day', 5)">
                <div class="popular-tag">MOST POPULAR</div>
                <div class="mini-plan-badge">20 DAYS</div>
                <div class="mini-plan-price">$5 <span>USD</span></div>
                <div class="mini-plan-label">Standard Pass</div>
            </div>
            <div class="mini-price-card" onclick="selectPassPlan('30-day', 7)">
                <div class="mini-plan-badge">30 DAYS</div>
                <div class="mini-plan-price">$7 <span>USD</span></div>
                <div class="mini-plan-label">Monthly Pass</div>
            </div>
            <div class="mini-price-card" onclick="selectPassPlan('60-day', 11)">
                <div class="mini-plan-badge">60 DAYS</div>
                <div class="mini-plan-price">$11 <span>USD</span></div>
                <div class="mini-plan-label">Ultimate Pass</div>
            </div>
        </div>

        <div class="pro-modal-actions">
            <a href="/subscription" class="btn-pro-primary">🔓 Unlock Pro Pass Now ($3 - $11)</a>
            <button class="btn-pro-secondary" onclick="closeProModal()">⚡ Continue Free Level 1</button>
        </div>
    </div>
</div>
