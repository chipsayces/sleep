<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AuroraCharm | Find Your Sparkle</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Inter:wght@400;700;900&display=swap" rel="stylesheet">

<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        poster: ['"Luckiest Guy"', 'cursive'],
      },
      colors: {
        primary: '#f48fb1',
        secondary: '#a7ffeb',
        accent: '#ffd740',
        hotpink: '#ff4081',
        'bg-soft': '#fce4ec',
        'text-dark': '#4a148c',
      }
    }
  }
}
</script>

<style>
body {
  background-image: url('https://w.wallhaven.cc/full/wq/wallhaven-wqxepm.png');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  font-family: 'Inter', sans-serif;
}

.hero-bg {
  background-image: url('images/bg2.jpg');
  background-size: cover;
  background-position: center;
  border-top: 8px solid #ffd740;
  border-bottom: 8px solid #ffd740;
}

.plaid-bg {
  background-color: #fce4ec;
  background-image:
    linear-gradient(0deg, transparent 49%, rgba(255,255,255,.4) 50%, transparent 51%),
    linear-gradient(90deg, transparent 49%, rgba(255,255,255,.4) 50%, transparent 51%);
  background-size: 20px 20px;
}

.stripe-bg {
  background: repeating-linear-gradient(
    -45deg,
    #a7ffeb,
    #a7ffeb 10px,
    #fce4ec 10px,
    #fce4ec 20px
  );
}

[data-aos] {
  transition-property: transform, opacity !important;
}
</style>
</head>

<body class="text-text-dark">

<!-- HEADER -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur shadow-xl">
  <div class="max-w-7xl mx-auto flex justify-between items-center h-20 px-4">
    <h1 class="text-5xl font-poster text-hotpink">✨ AuroraCharm</h1>

    <nav class="hidden md:flex space-x-8 text-lg font-medium">
      <a href="#" class="hover:text-hotpink">Home</a>
      <a href="#" class="hover:text-hotpink">Shop</a>
      <a href="#" class="hover:text-hotpink">Story</a>
      <a href="#" class="hover:text-hotpink">Contact</a>
    </nav>

    <div class="flex gap-4">
      <button class="bg-hotpink text-white px-6 py-3 rounded-full font-bold shadow">
        Cart (<span id="cartCount">0</span>) 🛒
      </button>
      <a href="logout.php" class="bg-gray-800 text-white px-6 py-3 rounded-full font-bold hover:bg-black">
        Logout
      </a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="hero-bg text-white py-20 px-4 shadow-2xl" data-aos="fade-in">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
    <div class="md:w-1/2" data-aos="fade-right">
      <p class="text-secondary text-3xl font-semibold mb-4">💖 SPARKLE SALE EVENT</p>
      <h2 class="text-7xl font-poster mb-6">Charm Your World!</h2>
      <p class="text-xl font-semibold mb-8">
        Unlock up to <b>40% off</b> on handcrafted charm bracelets!
      </p>
      <a href="#" class="bg-accent text-text-dark px-10 py-4 rounded-full text-xl font-poster shadow hover:scale-110 transition">
        GET YOUR CHARM ✨
      </a>
    </div>

    <div class="md:w-1/3 mt-10 md:mt-0" data-aos="zoom-in">
      <img src="images/raccoon.jpg" class="rounded-3xl shadow-2xl rotate-3">
    </div>
  </div>
</section>

<!-- CHAT ORDER -->
<section class="py-16 plaid-bg text-center" data-aos="fade-up">
  <h3 class="text-5xl font-poster mb-10">Quick Chat Orders!</h3>
  <div class="grid grid-cols-2 md:grid-cols-5 gap-6 max-w-6xl mx-auto">
    <div class="bg-green-500 text-white p-6 rounded-3xl shadow-xl hover:scale-110 transition">💬 LINE</div>
    <div class="bg-blue-600 text-white p-6 rounded-3xl shadow-xl hover:scale-110 transition">📬 Messenger</div>
    <div class="bg-pink-500 text-white p-6 rounded-3xl shadow-xl hover:scale-110 transition">📸 IG</div>
    <div class="bg-orange-500 text-white p-6 rounded-3xl shadow-xl hover:scale-110 transition">🛍️ Shopee</div>
    <div class="bg-black text-white p-6 rounded-3xl shadow-xl hover:scale-110 transition">🎵 TikTok</div>
  </div>
</section>

<!-- PRODUCTS -->
<section class="py-20 px-4" data-aos="fade-up">
  <div class="max-w-7xl mx-auto">
    <h3 class="text-5xl font-poster mb-12">Our Charm Showcase</h3>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="bg-white p-4 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="100">
        <div class="h-40 bg-pink-300 rounded-xl flex items-center justify-center text-6xl">⭐</div>
        <h4 class="font-poster text-xl text-hotpink mt-4">Celestial Dreamer</h4>
        <p>$29.99</p>
        <button class="add-to-cart-btn bg-hotpink text-white w-full py-2 mt-3 rounded-full">Add +</button>
      </div>

      <div class="bg-white p-4 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="200">
        <div class="h-40 bg-pink-200 rounded-xl flex items-center justify-center text-6xl">🍓</div>
        <h4 class="font-poster text-xl text-hotpink mt-4">Sweet Treat</h4>
        <p>$35.00</p>
        <button class="add-to-cart-btn bg-hotpink text-white w-full py-2 mt-3 rounded-full">Add +</button>
      </div>

      <div class="bg-white p-4 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="300">
        <div class="h-40 bg-yellow-200 rounded-xl flex items-center justify-center text-6xl">🐾</div>
        <h4 class="font-poster text-xl text-hotpink mt-4">Pet Lover</h4>
        <p>$24.50</p>
        <button class="add-to-cart-btn bg-hotpink text-white w-full py-2 mt-3 rounded-full">Add +</button>
      </div>

      <div class="bg-white p-4 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="400">
        <div class="h-40 bg-purple-200 rounded-xl flex items-center justify-center text-6xl">🦄</div>
        <h4 class="font-poster text-xl text-hotpink mt-4">Fantasy Land</h4>
        <p>$45.99</p>
        <button class="add-to-cart-btn bg-hotpink text-white w-full py-2 mt-3 rounded-full">Add +</button>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="py-20 stripe-bg px-4" data-aos="fade-up">
  <h3 class="text-5xl font-poster text-center mb-12">Happy Sparkly Customers ✨</h3>
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-3xl shadow-xl" data-aos="fade-up" data-aos-delay="100">👑 Jenna — OBSESSED</div>
    <div class="bg-white p-6 rounded-3xl shadow-xl" data-aos="fade-up" data-aos-delay="200">🎀 Kyle — PERFECT GIFT</div>
    <div class="bg-white p-6 rounded-3xl shadow-xl" data-aos="fade-up" data-aos-delay="300">🌸 Chloe — 5 STARS</div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white py-10 text-center">
  <h3 class="text-4xl font-poster text-accent">AuroraCharm</h3>
  <p class="text-gray-300 mt-2">&copy; 2025 — Stay sparkly ✨</p>
</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  AOS.init({
    duration: 1000,
    easing: 'ease-out-cubic',
    once: true,
    offset: 120,
  });

  window.addEventListener('load', () => {
    AOS.refreshHard();
  });

  let cart = 0;
  document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      cart++;
      document.getElementById('cartCount').textContent = cart;
    });
  });
});
</script>

</body>
</html>
