<?php
/* Template Name: Newleaf Landing */
get_header();
?>

<!-- Emergency banner -->
<div class="bg-brand-dark text-white text-sm md:text-base">
  <div class="max-w-7xl mx-auto px-4 py-2 flex flex-col md:flex-row gap-2 md:items-center md:justify-between">
    <p class="font-medium">If a child is in immediate danger, call <span class="underline">999</span> (UK) or your local emergency number.</p>
    <a href="#get-help" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 rounded-full px-3 py-1">
      Get Help Now
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
    </a>
  </div>
</div>

<!-- Header -->
<header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
        <!-- Replace with your media URL or keep a theme asset -->
        <img src="<?php echo esc_url( get_theme_file_uri('logo.png') ); ?>" alt="Newleaf Oasis Limited logo" class="w-9 h-9" />
        <span class="font-bold tracking-tight">Newleaf Oasis Limited</span>
      </a>
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="#about" class="hover:text-brand-dark">About</a>
        <a href="#services" class="hover:text-brand-dark">Services</a>
        <a href="#resources" class="hover:text-brand-dark">Resources</a>
        <a href="#support" class="hover:text-brand-dark">Support Us</a>
        <a href="#contact" class="hover:text-brand-dark">Contact</a>
      </nav>
      <a href="#get-help" class="hidden md:inline-flex bg-brand-mid hover:bg-brand-dark text-white px-4 py-2 rounded-xl shadow-soft">Get Help</a>
      <button id="mnav" class="md:hidden p-2" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
    <div id="mnavPanel" class="hidden md:hidden pb-4">
      <div class="flex flex-col gap-3">
        <a href="#about" class="py-1">About</a>
        <a href="#services" class="py-1">Services</a>
        <a href="#resources" class="py-1">Resources</a>
        <a href="#support" class="py-1">Support Us</a>
        <a href="#contact" class="py-1">Contact</a>
        <a href="#get-help" class="inline-flex bg-brand-mid hover:bg-brand-dark text-white px-4 py-2 rounded-xl w-max">Get Help</a>
      </div>
    </div>
  </div>
</header>

<!-- Hero -->
<section class="relative bg-white">
  <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-10 items-center">
    <div>
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight metallic">Protecting Children Together</h1>
      <p class="mt-5 text-lg text-slate-600">Early support, safe spaces, and trusted guidance for children and families.</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="#get-help" class="px-6 py-3 rounded-xl bg-brand-mid hover:bg-brand-dark text-white shadow-soft">Get Help Now</a>
        <a href="#refer" class="px-6 py-3 rounded-xl border border-brand-mid text-brand-mid hover:bg-mint">Refer a Child</a>
        <a href="#support" class="px-6 py-3 rounded-xl border border-slate-200 hover:bg-slate-50">Support Our Work</a>
      </div>
      <div class="mt-10 flex gap-6 items-center text-sm text-slate-500">
        <span class="uppercase tracking-wide">Trusted by partners</span>
        <div class="h-px flex-1 bg-slate-200"></div>
      </div>
    </div>
    <div class="relative">
      <div class="rounded-3xl p-1 bg-metal-green shadow-soft">
        <div class="rounded-3xl bg-white p-8">
          <img src="<?php echo esc_url( get_theme_file_uri('logo.png') ); ?>" alt="Newleaf Oasis Limited emblem" class="mx-auto w-40 h-40 object-contain" />
          <p class="text-center mt-4 font-semibold" style="color:#2EC158">Protecting Children Together</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-16 bg-brand-mint/50 bg-mint">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
    <div class="md:col-span-1">
      <h2 class="text-3xl font-bold metallic">Who We Are</h2>
      <p class="mt-3 text-slate-600">Newleaf Oasis Limited provides early intervention and safeguarding support, working hand-in-hand with families, schools, and community partners.</p>
    </div>
    <div class="md:col-span-2 grid sm:grid-cols-3 gap-6">
      <div class="rounded-2xl bg-white p-6 shadow-soft">
        <h3 class="font-semibold">Our Mission</h3>
        <p class="mt-2 text-sm text-slate-600">Create safe environments where children thrive and families feel supported.</p>
      </div>
      <div class="rounded-2xl bg-white p-6 shadow-soft">
        <h3 class="font-semibold">Values</h3>
        <p class="mt-2 text-sm text-slate-600">Compassion, integrity, collaboration, and evidence-based practice.</p>
      </div>
      <div class="rounded-2xl bg-white p-6 shadow-soft">
        <h3 class="font-semibold">Safeguarding</h3>
        <p class="mt-2 text-sm text-slate-600">Clear policies, trained staff, and transparent reporting processes.</p>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold metallic">How We Help</h2>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 p-6 hover:shadow-soft transition">
        <h3 class="font-semibold">Family Support</h3>
        <p class="mt-2 text-sm text-slate-600">Practical guidance, signposting, and advocacy.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 p-6 hover:shadow-soft transition">
        <h3 class="font-semibold">Mentoring</h3>
        <p class="mt-2 text-sm text-slate-600">1-to-1 and group mentoring for young people.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 p-6 hover:shadow-soft transition">
        <h3 class="font-semibold">Training & Workshops</h3>
        <p class="mt-2 text-sm text-slate-600">Safeguarding awareness and resilience building.</p>
      </div>
    </div>
  </div>
</section>

<!-- Resources -->
<section id="resources" class="py-16 bg-mint">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold metallic">Resources</h2>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <a href="#" class="group rounded-2xl bg-white p-6 shadow-soft hover:shadow-lg transition block">
        <div class="flex items-center justify-between">
          <h3 class="font-semibold">Safeguarding Policy (PDF)</h3>
          <span class="text-sm text-brand-mid group-hover:underline">Download</span>
        </div>
        <p class="mt-2 text-sm text-slate-600">Our approach and reporting process.</p>
      </a>
      <a href="#" class="group rounded-2xl bg-white p-6 shadow-soft hover:shadow-lg transition block">
        <div class="flex items-center justify-between">
          <h3 class="font-semibold">Family Support Guide</h3>
          <span class="text-sm text-brand-mid group-hover:underline">Download</span>
        </div>
        <p class="mt-2 text-sm text-slate-600">Practical tips and local services.</p>
      </a>
      <a href="#" class="group rounded-2xl bg-white p-6 shadow-soft hover:shadow-lg transition block">
        <div class="flex items-center justify-between">
          <h3 class="font-semibold">Partner Pack</h3>
          <span class="text-sm text-brand-mid group-hover:underline">Download</span>
        </div>
        <p class="mt-2 text-sm text-slate-600">How to work with us & refer.</p>
      </a>
    </div>
  </div>
</section>

<!-- Get Help -->
<section id="get-help" class="py-16">
  <div class="max-w-3xl mx-auto px-4">
    <h2 class="text-3xl font-bold metallic">Get Help</h2>
    <p class="mt-3 text-slate-600">Tell us a safe way to reach you. We’ll respond promptly.</p>
    <form class="mt-6 grid gap-4 bg-white border border-slate-200 rounded-2xl p-6 shadow-soft" onsubmit="event.preventDefault(); alert('Thanks — we will be in touch shortly.');">
      <label class="block">
        <span class="text-sm font-medium">Your Name</span>
        <input required type="text" class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid" />
      </label>
      <label class="block">
        <span class="text-sm font-medium">Preferred contact (email or phone)</span>
        <input required type="text" class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid" />
      </label>
      <label class="block">
        <span class="text-sm font-medium">How can we help?</span>
        <textarea rows="4" class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid"></textarea>
      </label>
      <label class="inline-flex items-center gap-2">
        <input type="checkbox" required class="rounded border-slate-300 text-brand-mid focus:ring-brand-mid" />
        <span class="text-sm text-slate-600">I consent to you contacting me and handling my data per the <a href="#policies" class="underline">privacy policy</a>.</span>
      </label>
      <button class="mt-2 px-5 py-3 rounded-xl bg-brand-mid hover:bg-brand-dark text-white w-max">Send Securely</button>
    </form>
  </div>
</section>

<!-- Refer -->
<section id="refer" class="py-16 bg-mint">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold metallic">Partner & Referral</h2>
    <div class="mt-6 grid md:grid-cols-2 gap-6">
      <div class="rounded-2xl bg-white p-6 shadow-soft">
        <h3 class="font-semibold">Make a Referral</h3>
        <p class="mt-2 text-sm text-slate-600">Professionals can submit details via our secure form.</p>
        <a href="#" class="mt-4 inline-flex px-4 py-2 rounded-xl bg-brand-mid hover:bg-brand-dark text-white">Open Referral Form</a>
      </div>
      <div class="rounded-2xl bg-white p-6 shadow-soft">
        <h3 class="font-semibold">Work With Us</h3>
        <p class="mt-2 text-sm text-slate-600">We collaborate with schools, local authorities, and charities.</p>
        <a href="#contact" class="mt-4 inline-flex px-4 py-2 rounded-xl border border-brand-mid text-brand-mid hover:bg-mint">Contact Partnerships</a>
      </div>
    </div>
  </div>
</section>

<!-- Support -->
<section id="support" class="py-16">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
    <div>
      <h2 class="text-3xl font-bold metallic">Support Our Work</h2>
      <p class="mt-3 text-slate-600">Your donations and volunteering make a real difference for children and families.</p>
      <div class="mt-6 flex flex-wrap gap-3">
        <!-- Replace links with Stripe/PayPal or a WP donation plugin page -->
        <a href="#" class="px-5 py-3 rounded-xl bg-brand-mid hover:bg-brand-dark text-white">Donate</a>
        <a href="#" class="px-5 py-3 rounded-xl border border-brand-mid text-brand-mid hover:bg-mint">Volunteer</a>
      </div>
    </div>
    <div class="rounded-3xl p-1 bg-metal-green shadow-soft">
      <div class="rounded-3xl bg-white p-8 text-center">
        <p class="text-5xl font-extrabold metallic">100%</p>
        <p class="text-sm text-slate-600 mt-2">of donations go directly to program delivery and support.</p>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-mint">
  <div class="max-w-3xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold metallic">Stay in the loop</h2>
    <p class="mt-3 text-slate-600">Occasional updates — no spam. Unsubscribe anytime.</p>
    <form class="mt-6 flex flex-col sm:flex-row gap-3 justify-center" onsubmit="event.preventDefault(); alert('Thanks for subscribing!');">
      <input type="email" required placeholder="you@example.com" class="w-full sm:w-96 rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid" />
      <button class="px-6 py-3 rounded-xl bg-brand-mid hover:bg-brand-dark text-white">Subscribe</button>
    </form>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-16">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8">
    <div>
      <h2 class="text-3xl font-bold metallic">Contact</h2>
      <ul class="mt-4 space-y-2 text-slate-700">
        <li><strong>Email:</strong> <a class="text-brand-mid underline" href="mailto:info@example.org">info@example.org</a></li>
        <li><strong>Phone:</strong> <a class="text-brand-mid underline" href="tel:+441234567890">+44 1234 567 890</a></li>
        <li><strong>Hours:</strong> Mon–Fri, 9am–5pm</li>
        <li><strong>Address:</strong> Your address here</li>
      </ul>
    </div>
    <form class="bg-white border border-slate-200 rounded-2xl p-6 shadow-soft grid gap-4" onsubmit="event.preventDefault(); alert('Message sent!');">
      <label class="block">
        <span class="text-sm font-medium">Name</span>
        <input type="text" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid" />
      </label>
      <label class="block">
        <span class="text-sm font-medium">Email</span>
        <input type="email" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid" />
      </label>
      <label class="block">
        <span class="text-sm font-medium">Message</span>
        <textarea rows="4" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-brand-mid focus:ring-brand-mid"></textarea>
      </label>
      <button class="px-5 py-3 rounded-xl bg-brand-mid hover:bg-brand-dark text-white w-max">Send</button>
    </form>
  </div>
</section>

<!-- Policies -->
<section id="policies" class="py-10 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 text-sm text-slate-600">
    <p><strong>Safeguarding • Privacy • Cookies • Accessibility</strong> — add your policies and statements here.</p>
  </div>
</section>

<footer class="py-8 border-t">
  <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-slate-500">&copy; <?php echo date('Y'); ?> Newleaf Oasis Limited. All rights reserved.</p>
    <p class="text-sm" style="color:#2EC158">Protecting Children Together</p>
  </div>
</footer>

<script>
  // Mobile nav toggle
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('mnav');
    const panel = document.getElementById('mnavPanel');
    if (btn && panel) btn.addEventListener('click', () => panel.classList.toggle('hidden'));
  });
</script>

<?php get_footer(); ?>
