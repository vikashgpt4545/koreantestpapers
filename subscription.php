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
<?php $pro_price = get_setting('pro_price_usd', '8'); ?>
<section class="section-padding">
    <div class="container">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2rem; color: #0f172a;">30-Day Full Pro Pass ($<?php echo htmlspecialchars($pro_price); ?> USD)</h2>
            <p style="color: #64748b;">(Includes 30 Days Full Access to 📝 Pro Study Notes, 📄 Master PDF Vault, Unlimited CBT Tests & Practice Games)</p>
        </div>

        <div style="max-width: 540px; margin: 0 auto;">
            <!-- 30-Day Pass Card (Featured) -->
            <div class="plan-pricing-card popular-card" style="background: white; border: 3px solid #2563eb; border-radius: 16px; padding: 36px 28px; text-align: center; position: relative; box-shadow: 0 15px 30px -5px rgba(37, 99, 235, 0.2);">
                <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); background: #059669; color: white; padding: 4px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 800; text-transform: uppercase;">💎 ALL-IN-ONE PRO STUDENT PASS</div>
                <h3 style="font-size: 1.6rem; color: #0f172a; margin-bottom: 8px;">30-Day Pro Membership</h3>
                <div style="font-size: 3rem; font-weight: 800; color: #2563eb; margin-bottom: 4px;">$<?php echo htmlspecialchars($pro_price); ?> <span style="font-size: 1.1rem; color: #64748b; font-weight: 400;">USD / 30 Days</span></div>
                <p style="font-size: 0.95rem; color: #64748b; margin-bottom: 24px;">Complete Exam Master Access Pass</p>

                <ul style="text-align: left; font-size: 1rem; line-height: 2; color: #334155; margin-bottom: 28px; list-style: none; padding: 0;">
                    <li>✔ <strong>🔓 Unlocked 📝 Pro Study Notes</strong> (60-Chapter Dict & Grammar)</li>
                    <li>✔ <strong>🔓 Unlocked 📄 Master PDF Vault</strong> (150+ Solved Papers)</li>
                    <li>✔ <strong>🔓 30 Days Unlimited Practice Games</strong> (Speed Match & Signboards)</li>
                    <li>✔ <strong>🔓 Dynamic Random CBT Test Simulator</strong></li>
                    <li>✔ <strong>🔓 Detailed Right/Wrong Answer Explanations</strong></li>
                    <li>✔ <strong>🔓 5-Day Free Trial Auto-Upgraded to Pro</strong></li>
                </ul>
                <button onclick="startRazorpayPayment('30-day', <?php echo htmlspecialchars($pro_price); ?>)" class="btn-primary-action" style="width: 100%; border-radius: 8px; padding: 14px; background: #059669; font-size: 1.1rem; font-weight: 800;">Subscribe for $<?php echo htmlspecialchars($pro_price); ?> USD</button>
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
