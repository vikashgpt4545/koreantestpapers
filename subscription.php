<?php
// Core PHP & Database Setup
require_once __DIR__ . '/includes/db.php';

// Page SEO Meta Configuration
$page_title = "Pro Student Subscription Plans - Korean Test Papers & Practice Games";
$page_desc = "Subscribe to Pro Student Passes ($3 for 10 Days, $5 for 20 Days, $7 for 30 Days, $11 for 60 Days) to unlock unlimited level-based Korean games, dynamic random CBT mock tests, study notes, and Razorpay checkout.";
$canonical_url = "https://koreantestpapers.in/subscription";

// Include Shared Header Template
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION FOR SUBSCRIPTION PAGE -->
<section class="section-padding" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: white; text-align: center;">
    <div class="container">
        <span class="tag-badge green" style="font-size: 0.9rem; margin-bottom: 12px; display: inline-block;">💎 PREMIUM PRO STUDENT PASSES</span>
        <h1 style="font-size: 2.4rem; margin-bottom: 12px; color: #ffffff;">Unlock Unlimited Korean Practice Games & CBT Mock Tests</h1>
        <p style="max-width: 750px; margin: 0 auto 24px; font-size: 1.1rem; color: #cbd5e1; line-height: 1.6;">
            Choose your time-based pass ($3 for 10 Days to $11 for 60 Days) for full access to Level 2+ hard game modes, dynamic no-repeat question engine, CBT error analytics, and high-yield study notes.
        </p>
    </div>
</section>

<!-- SUBSCRIPTION PRICING CARDS SECTION -->
<section class="section-padding">
    <div class="container">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2rem; color: #0f172a;">Select Your Study Pass Duration</h2>
            <p style="color: #64748b;">(All PDF downloads on our site remain 100% FREE for all visitors! Passes apply to games & CBT tests.)</p>
        </div>

        <div class="subscription-pricing-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
            
            <!-- 10-Day Pass Card -->
            <div class="plan-pricing-card" style="background: white; border: 2px solid #e2e8f0; border-radius: 12px; padding: 28px 20px; text-align: center; position: relative;">
                <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 8px;">10-Day Cram Pass</h3>
                <div style="font-size: 2.4rem; font-weight: 800; color: #2563eb; margin-bottom: 4px;">$3 <span style="font-size: 1rem; color: #64748b; font-weight: 400;">USD</span></div>
                <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Short-Term Exam Refresher</p>
                <ul style="text-align: left; font-size: 0.9rem; line-height: 1.8; color: #334155; margin-bottom: 24px; list-style: none; padding: 0;">
                    <li>✔ 10 Days Unlimited Games</li>
                    <li>✔ Level 2 & Hard Mode Access</li>
                    <li>✔ Dynamic Random CBT Tests</li>
                    <li>✔ Detailed Test Score Analytics</li>
                    <li>✔ Pro Study Notes & Vocab</li>
                    <li>✔ 100% Free PDF Downloads</li>
                </ul>
                <button onclick="startRazorpayPayment('10-day', 3)" class="btn-primary-action" style="width: 100%; border-radius: 6px; padding: 12px;">Subscribe for $3 USD</button>
            </div>

            <!-- 20-Day Pass Card (Popular) -->
            <div class="plan-pricing-card popular-card" style="background: white; border: 2px solid #2563eb; border-radius: 12px; padding: 28px 20px; text-align: center; position: relative; box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.15);">
                <div style="position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: #2563eb; color: white; padding: 4px 14px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">MOST POPULAR</div>
                <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 8px;">20-Day Standard Pass</h3>
                <div style="font-size: 2.4rem; font-weight: 800; color: #2563eb; margin-bottom: 4px;">$5 <span style="font-size: 1rem; color: #64748b; font-weight: 400;">USD</span></div>
                <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Complete Exam Preparation</p>
                <ul style="text-align: left; font-size: 0.9rem; line-height: 1.8; color: #334155; margin-bottom: 24px; list-style: none; padding: 0;">
                    <li>✔ 20 Days Unlimited Games</li>
                    <li>✔ Level 2 & Hard Mode Access</li>
                    <li>✔ Dynamic Random CBT Tests</li>
                    <li>✔ Detailed Test Score Analytics</li>
                    <li>✔ Pro Study Notes & Vocab</li>
                    <li>✔ 100% Free PDF Downloads</li>
                </ul>
                <button onclick="startRazorpayPayment('20-day', 5)" class="btn-primary-action" style="width: 100%; border-radius: 6px; padding: 12px; background: #2563eb;">Subscribe for $5 USD</button>
            </div>

            <!-- 30-Day Pass Card -->
            <div class="plan-pricing-card" style="background: white; border: 2px solid #e2e8f0; border-radius: 12px; padding: 28px 20px; text-align: center;">
                <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 8px;">30-Day Monthly Pass</h3>
                <div style="font-size: 2.4rem; font-weight: 800; color: #059669; margin-bottom: 4px;">$7 <span style="font-size: 1rem; color: #64748b; font-weight: 400;">USD</span></div>
                <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Full Month Master Pass</p>
                <ul style="text-align: left; font-size: 0.9rem; line-height: 1.8; color: #334155; margin-bottom: 24px; list-style: none; padding: 0;">
                    <li>✔ 30 Days Unlimited Games</li>
                    <li>✔ Level 2 & Hard Mode Access</li>
                    <li>✔ Dynamic Random CBT Tests</li>
                    <li>✔ Detailed Test Score Analytics</li>
                    <li>✔ Pro Study Notes & Vocab</li>
                    <li>✔ 100% Free PDF Downloads</li>
                </ul>
                <button onclick="startRazorpayPayment('30-day', 7)" class="btn-primary-action" style="width: 100%; border-radius: 6px; padding: 12px; background: #059669;">Subscribe for $7 USD</button>
            </div>

            <!-- 60-Day Pass Card -->
            <div class="plan-pricing-card" style="background: white; border: 2px solid #e2e8f0; border-radius: 12px; padding: 28px 20px; text-align: center;">
                <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 8px;">60-Day Ultimate Pass</h3>
                <div style="font-size: 2.4rem; font-weight: 800; color: #7c3aed; margin-bottom: 4px;">$11 <span style="font-size: 1rem; color: #64748b; font-weight: 400;">USD</span></div>
                <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Maximum Preparation & Value</p>
                <ul style="text-align: left; font-size: 0.9rem; line-height: 1.8; color: #334155; margin-bottom: 24px; list-style: none; padding: 0;">
                    <li>✔ 60 Days Unlimited Games</li>
                    <li>✔ Level 2 & Hard Mode Access</li>
                    <li>✔ Dynamic Random CBT Tests</li>
                    <li>✔ Detailed Test Score Analytics</li>
                    <li>✔ Pro Study Notes & Vocab</li>
                    <li>✔ Priority Candidate Support</li>
                </ul>
                <button onclick="startRazorpayPayment('60-day', 11)" class="btn-primary-action" style="width: 100%; border-radius: 6px; padding: 12px; background: #7c3aed;">Subscribe for $11 USD</button>
            </div>

        </div>
    </div>
</section>

<!-- Razorpay Checkout Integration Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function startRazorpayPayment(planId, priceUSD) {
    // Conversion rate USD to INR equivalent for Razorpay checkout
    var priceINR = priceUSD * 83; // approx conversion rate
    var options = {
        "key": "rzp_test_samplekey", // Razorpay API Key Placeholder
        "amount": priceINR * 100, // Amount in paise
        "currency": "INR",
        "name": "KoreanTestPapers.in",
        "description": "Pro Pass Subscription - " + planId + " ($" + priceUSD + " USD)",
        "image": "https://koreantestpapers.in/images/logo.png",
        "handler": function (response){
            alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
            localStorage.setItem('koreantestpapers_pro', 'true');
            localStorage.setItem('koreantestpapers_pro_plan', planId);
            window.location.href = "/";
        },
        "prefill": {
            "name": "Candidate Name",
            "email": "candidate@example.com"
        },
        "theme": {
            "color": "#2563eb"
        }
    };
    var rzp = new Razorpay(options);
    rzp.open();
}
</script>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>
