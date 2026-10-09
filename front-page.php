<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#f6f8f3" />
  <meta name="description" content="Thoughtful places to stay, gather, and feel at home. Explore the Bale Damai property portfolio." />
  <title>Bale Damai — Places to feel at home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --blue: #147ba8;
      --blue-deep: #0b5e84;
      --blue-pale: #e9f3f6;
      --lime: #d9df40;
      --ink: #1c2b32;
      --muted: #6b777b;
      --paper: #fbfcf9;
      --line: #e7eae5;
      --white: #fff;
      --serif: "Playfair Display", Georgia, serif;
      --sans: "DM Sans", Arial, sans-serif;
    }
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; background: var(--paper); color: var(--ink); font-family: var(--sans); -webkit-font-smoothing: antialiased; }
    button, input { font: inherit; }
    button { cursor: pointer; }
    .topbar { height: 82px; padding: 0 clamp(22px, 5vw, 76px); display: flex; align-items: center; justify-content: space-between; background: rgba(251,252,249,.95); border-bottom: 1px solid rgba(28,43,50,.06); position: relative; z-index: 5; }
    .brand { display:flex; align-items:center; width: 212px; height: 66px; overflow:hidden; flex: 0 0 auto; }
    .brand img { display:block; width: 211px; max-width:none; height:auto; margin-left:-4px; }
    .nav { display:flex; align-items:center; gap: 38px; height:100%; }
    .nav a { color: #647177; text-decoration:none; font-size:14px; font-weight:600; height:100%; display:flex; align-items:center; position:relative; transition:color .2s; }
    .nav a:hover, .nav a.active { color:var(--blue-deep); }
    .nav a.active:after { content:""; height:2px; background:var(--lime); position:absolute; bottom:0; left:0; right:0; }
    .top-actions { display:flex; align-items:center; justify-content:flex-end; width:212px; }
    .host-link { color:var(--ink); font-size:13px; font-weight:600; text-decoration:none; padding:12px 15px; border-radius:24px; }
    .host-link:hover { background:var(--blue-pale); }
    .menu-button { display:none; background:transparent; border:0; color:var(--ink); font-size:23px; padding:8px; }
    .hero { padding: 54px clamp(22px, 6.2vw, 94px) 48px; background: radial-gradient(ellipse at 78% 6%, rgba(217,223,64,.14), transparent 31%), linear-gradient(180deg,#f4f8f5 0%,#fbfcf9 100%); }
    .hero-inner { max-width:1390px; margin:auto; display:grid; grid-template-columns: .91fr 1.09fr; gap:clamp(32px,6vw,90px); align-items:center; }
    .eyebrow { display:flex; align-items:center; gap:10px; text-transform:uppercase; letter-spacing:.16em; font-size:10px; font-weight:700; color:var(--blue-deep); }
    .eyebrow:before { content:""; width:25px; height:2px; background:var(--lime); }
    h1 { font-family:var(--serif); font-size:clamp(42px,5.5vw,72px); line-height:1.04; letter-spacing:-.04em; font-weight:500; margin:21px 0 19px; max-width:580px; }
    h1 em { font-weight:500; font-style:normal; color:var(--blue); }
    .hero-copy { font-size:16px; line-height:1.75; color:#627076; max-width:480px; margin:0; }
    .search-panel { margin-top:30px; background:var(--white); padding:8px; border-radius:18px; box-shadow:0 13px 36px rgba(22,58,71,.10); display:grid; grid-template-columns:1.22fr 1fr .8fr 52px; align-items:center; border:1px solid rgba(31,68,80,.07); max-width:660px; }
    .search-field { padding:7px 16px; border-right:1px solid var(--line); min-width:0; }
    .search-field label { display:block; text-transform:uppercase; font-size:9px; font-weight:700; letter-spacing:.1em; color:#66757a; margin-bottom:4px; }
    .search-field input { width:100%; border:0; outline:0; background:transparent; font-size:13px; color:var(--ink); padding:0; }
    .search-field input::placeholder { color:#939da0; }
    .search-submit { border:0; height:46px; width:46px; border-radius:14px; background:var(--blue); color:white; font-size:19px; transition:background .2s,transform .2s; }
    .search-submit:hover { background:var(--blue-deep); transform:scale(1.04); }
    .hero-note { color:#788488; font-size:11px; margin:13px 0 0 4px; }
    .hero-visual { position:relative; overflow:visible; }
    .hero-photo-stage { height:420px; position:relative; border-radius:5px 76px 5px 5px; overflow:hidden; background:#dfe7e3; }
    .hero-slides { position:absolute; inset:0; overflow:hidden; border-radius:5px 76px 5px 5px; background:#dfe7e3; }
    .hero-photo { position:absolute; inset:0; height:100%; width:100%; object-fit:cover; border-radius:inherit; display:block; opacity:0; transform:scale(1.025); transition:opacity 1.15s ease,transform 7s cubic-bezier(.2,.7,.2,1); }
    .hero-photo.is-active { opacity:1; transform:scale(1); }
    .visual-wash { position:absolute; inset:0; border-radius:5px 76px 5px 5px; background:linear-gradient(180deg,transparent 53%,rgba(9,35,45,.3)); pointer-events:none; }
    .rotating-phrase { display:inline-block; transition:opacity .35s ease,transform .35s ease; }
    .rotating-phrase.is-changing { opacity:0; transform:translateY(.16em); }
    .slide-controls { position:absolute; right:16px; bottom:20px; display:flex; align-items:center; gap:7px; z-index:2; }
    .slide-dot { width:7px; height:7px; padding:0; border:0; border-radius:10px; background:rgba(255,255,255,.7); box-shadow:0 1px 6px rgba(0,0,0,.18); transition:width .3s ease,background .3s ease; }
    .slide-dot.is-active { width:22px; background:#fff; }
    .slide-pause { width:28px; height:28px; border:1px solid rgba(255,255,255,.65); border-radius:50%; background:rgba(18,38,43,.26); color:#fff; font-size:11px; line-height:1; backdrop-filter:blur(5px); margin-left:3px; }
    .slide-pause:hover { background:rgba(18,38,43,.5); }
    .hero-rating { display:flex; align-items:center; gap:8px; min-height:46px; margin-top:12px; padding:10px 13px; color:var(--ink); text-decoration:none; background:#fff; border:1px solid var(--line); transition:border-color .2s,background .2s; }
    .hero-rating:hover { border-color:#b7d2dc; background:#fcfefd; }
    .hero-rating-stars { color:#c4972e; font-size:13px; letter-spacing:1px; white-space:nowrap; }
    .hero-rating strong { font-size:12px; }
    .hero-rating-count { color:var(--muted); font-size:10px; }
    .hero-rating-cta { margin-left:auto; color:var(--blue-deep); font-size:10px; font-weight:700; white-space:nowrap; }
    .accent-dot { position:absolute; z-index:-1; background:var(--lime); width:92px; height:92px; border-radius:50%; right:-28px; top:-28px; opacity:.72; }
    .section { padding:50px clamp(22px, 5vw, 76px); max-width:1600px; margin:0 auto; }
    .section-head { display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:23px; gap:20px; }
    .section-kicker { color:var(--blue); font-size:10px; letter-spacing:.16em; text-transform:uppercase; font-weight:700; margin:0 0 8px; }
    h2 { font-family:var(--serif); font-size:clamp(26px,3vw,36px); letter-spacing:-.025em; font-weight:500; margin:0; }
    .section-desc { font-size:13px; color:var(--muted); margin:8px 0 0; }
    .text-link { color:var(--blue-deep); text-decoration:none; font-size:12px; font-weight:700; white-space:nowrap; padding:9px 0; }
    .text-link span { display:inline-block; transition:transform .2s; margin-left:5px; }
    .text-link:hover span { transform:translateX(4px); }
    .filter-row { display:flex; gap:9px; overflow-x:auto; scrollbar-width:none; margin-bottom:21px; padding-bottom:3px; }
    .filter-row::-webkit-scrollbar { display:none; }
    .filter { background:transparent; border:1px solid #dfe5e2; border-radius:25px; padding:9px 15px; color:#657277; font-size:11px; white-space:nowrap; transition:all .2s; }
    .filter:hover { border-color:var(--blue); color:var(--blue-deep); }
    .filter.selected { color:white; background:var(--blue); border-color:var(--blue); }
    .listing-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:25px 18px; }
    .card { min-width:0; cursor:pointer; }
    .card-photo-wrap { position:relative; overflow:hidden; border-radius:4px 30px 4px 4px; aspect-ratio:1.24/1; background:#e5e9e5; }
    .card-photo { display:block; width:100%; height:100%; object-fit:cover; transition:transform .5s cubic-bezier(.2,.7,.2,1); }
    .card:hover .card-photo { transform:scale(1.045); }
    .card-tag { position:absolute; left:12px; top:12px; font-size:9px; letter-spacing:.08em; text-transform:uppercase; font-weight:700; background:rgba(255,255,255,.93); padding:7px 9px; border-radius:2px; color:#46606a; }
    .heart { position:absolute; right:11px; top:10px; color:white; background:rgba(20,35,42,.23); border:1px solid rgba(255,255,255,.55); width:32px; height:32px; border-radius:50%; font-size:17px; line-height:1; display:grid; place-items:center; backdrop-filter:blur(4px); transition:all .2s; }
    .heart:hover,.heart.saved { background:white; color:#d2645b; }
    .card-info { display:flex; justify-content:space-between; gap:10px; margin-top:11px; }
    .card-title { font-weight:600; font-size:13px; margin:0; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
    .listing-link { color:var(--blue-deep); text-decoration:none; font-size:10px; font-weight:600; flex:0 0 auto; }
    .listing-link:hover { text-decoration:underline; }
    .card-rating { display:flex; align-items:center; gap:6px; margin:8px 0 0; font-size:11px; color:#637176; }
    .card-rating .stars { color:#c4972e; font-size:14px; letter-spacing:1px; line-height:1; }
    .card-rating strong { color:var(--ink); font-size:12px; }
    .google-link { color:inherit; text-decoration:none; }
    .google-link:hover { text-decoration:underline; }
    .mini-gallery-controls { position:absolute; inset:auto 10px 10px; display:flex; justify-content:center; gap:5px; z-index:2; }
    .mini-gallery-dot { width:6px; height:6px; padding:0; border:0; border-radius:50%; background:rgba(255,255,255,.62); box-shadow:0 1px 4px rgba(0,0,0,.25); }
    .mini-gallery-dot.is-active { width:17px; border-radius:8px; background:#fff; }
    .card-location,.card-meta { font-size:11px; color:#758084; margin:5px 0 0; }
    .card-price { margin-top:9px; font-size:12px; font-weight:600; color:#34454b; }
    .card-price span { font-weight:400; color:#7a8588; }
    .feature-band { margin:22px clamp(22px, 5vw, 76px) 65px; background:#edf4f2; display:grid; grid-template-columns:1fr 1fr; min-height:315px; overflow:hidden; max-width:1448px; margin-left:auto; margin-right:auto; }
    .feature-image-wrap { position:relative; min-height:315px; }
    .feature-image { display:block; width:100%; height:100%; object-fit:cover; min-height:315px; }
    .feature-content { padding:clamp(28px,5vw,62px); align-self:center; }
    .feature-content h2 { max-width:450px; font-size:clamp(28px,3.2vw,42px); line-height:1.14; margin-bottom:15px; }
    .feature-content p:not(.section-kicker) { color:#647277; line-height:1.75; font-size:13px; max-width:430px; margin-bottom:23px; }
    .button-link { display:inline-block; background:var(--blue); color:white; text-decoration:none; padding:13px 19px; border-radius:3px; font-size:12px; font-weight:600; transition:background .2s; }
    .button-link:hover { background:var(--blue-deep); }
    footer { background:#fff; border-top:1px solid var(--line); min-height:96px; padding:28px clamp(22px, 5vw, 76px); display:flex; align-items:center; color:#18304f; font-size:12px; font-weight:600; }
    .empty-state { display:none; color:var(--muted); padding:30px; text-align:center; grid-column:1/-1; border:1px dashed var(--line); }
    .toast { position:fixed; bottom:25px; left:50%; transform:translate(-50%,20px); opacity:0; pointer-events:none; background:var(--ink); color:white; padding:12px 18px; border-radius:5px; font-size:12px; transition:all .25s; z-index:10; }
    .toast.show { opacity:1; transform:translate(-50%,0); }
    @media (prefers-reduced-motion:reduce) {
      *,*::before,*::after { scroll-behavior:auto !important; transition-duration:.01ms !important; animation-duration:.01ms !important; animation-iteration-count:1 !important; }
    }
    @media (min-width:1500px) { .hero-inner { max-width:1350px; } }
    @media (max-width:1000px) {
      .topbar { padding:0 28px; }.nav { gap:22px; }.brand,.top-actions { width:175px; }.brand img { width:190px; }
      .hero { padding-top:43px; }.hero-inner { grid-template-columns:.94fr 1.06fr; gap:36px; }.hero-photo-stage { height:355px; }
      .search-panel { grid-template-columns:1.1fr 1fr .78fr 48px; }.search-field { padding-left:10px; padding-right:10px; }
      .listing-grid { grid-template-columns:repeat(2,minmax(0,1fr)); }
    }
    @media (max-width:700px) {
      .topbar { height:70px; padding:0 18px; }.brand { width:168px; height:58px; }.brand img { width:177px; margin-left:-2px; }.top-actions { width:auto; }.host-link { display:none; }.menu-button { display:block; }
      .nav { display:none; position:absolute; top:69px; left:0; right:0; height:auto; background:var(--paper); padding:10px 21px 18px; border-bottom:1px solid var(--line); flex-direction:column; align-items:stretch; gap:0; box-shadow:0 12px 18px rgba(20,45,50,.07); }
      .nav.open { display:flex; }.nav a { height:auto; padding:13px 2px; border-bottom:1px solid var(--line); }.nav a.active:after { display:none; }
      .hero { padding:36px 20px 35px; }.hero-inner { display:flex; flex-direction:column; align-items:stretch; gap:28px; }.hero-copy { font-size:14px; }.hero-visual { margin:0 7px 0 12px; }.hero-photo-stage { height:280px; }.hero-rating { gap:6px; padding:9px 10px; }.hero-rating-stars { font-size:11px; letter-spacing:0; }.hero-rating-count { font-size:9px; }.hero-rating-cta { font-size:9px; }.accent-dot { width:62px; height:62px; right:-15px; top:-15px; }
      .search-panel { margin-top:23px; grid-template-columns:1fr 1fr 46px; gap:0; padding:7px; }.search-field { padding:7px 9px; }.search-field:first-child { grid-column:1 / -1; border-right:0; border-bottom:1px solid var(--line); padding-bottom:10px; margin-bottom:5px; }.search-field:nth-child(3) { border-right:0; }.search-submit { width:42px; height:42px; }
      .section { padding:38px 20px; }.section-head { align-items:flex-start; }.section-head .text-link { margin-top:14px; }.listing-grid { grid-template-columns:repeat(2,minmax(0,1fr)); gap:22px 12px; }.card-photo-wrap { border-radius:3px 21px 3px 3px; aspect-ratio:1/1; }.card-tag { left:8px; top:8px; font-size:8px; padding:6px 7px; }.heart { right:8px; top:8px; width:30px; height:30px; }.card-title { font-size:12px; }.card-location,.card-meta { font-size:10px; }.card-price { font-size:11px; }
      .feature-band { margin:12px 20px 42px; grid-template-columns:1fr; }.feature-image-wrap { min-height:220px; max-height:260px; }.feature-image { min-height:220px; max-height:260px; }.feature-content { padding:26px 23px 30px; }
      footer { padding:25px 20px; }
    }
    @media (max-width:390px) { .listing-grid { grid-template-columns:1fr; }.card-photo-wrap { aspect-ratio:1.28/1; }.section-head .text-link { font-size:11px; } }
  </style>
  <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
  <header class="topbar">
    <a class="brand" href="#home" aria-label="Bale Damai home"><img src="<?php echo esc_url( get_theme_file_uri( '/bale-damai-logo.png' ) ); ?>" alt="Bale Damai Community Centre" /></a>
    <nav class="nav" id="nav" aria-label="Main navigation">
      <a class="active" href="#stays">Places to stay</a>
      <a href="#spaces">Gathering spaces</a>
      <a href="#about">Our story</a>
    </nav>
    <div class="top-actions"><a class="host-link" href="#contact">List your property</a><button class="menu-button" id="menuButton" aria-label="Open menu" aria-expanded="false">☰</button></div>
  </header>
  <main id="home">
    <section class="hero">
      <div class="hero-inner">
        <div class="hero-copy-block">
          <div class="eyebrow">The Bale Damai collection</div>
          <h1>Find a place<br />to <em class="rotating-phrase" id="rotatingPhrase">feel at home.</em></h1>
          <p class="hero-copy">Thoughtful homes and gathering spaces, chosen for the moments that bring us closer. Discover a slower, more meaningful stay.</p>
          <form class="search-panel" id="searchForm">
            <div class="search-field"><label for="destination">Where</label><input id="destination" type="search" list="propertyDestinations" autocomplete="off" placeholder="Choose a Bale Damai home" /><datalist id="propertyDestinations"><option value="Jatiluwih Hillside Hideaway"></option><option value="Sentul Eirene Villa"></option><option value="Denpasar Family Size Villa"></option><option value="Trust Building Jakarta"></option></datalist></div>
            <div class="search-field"><label for="arrival">When</label><input id="arrival" type="text" placeholder="Add dates" onfocus="this.type='date'" onblur="if(!this.value)this.type='text'" /></div>
            <div class="search-field"><label for="guests">Who</label><input id="guests" type="text" inputmode="numeric" placeholder="Add guests" /></div>
            <button class="search-submit" type="submit" aria-label="Search properties">⌕</button>
          </form>
          <p class="hero-note">Choose from three Bale Damai homes.</p>
        </div>
        <div class="hero-visual">
          <div class="accent-dot"></div>
          <div class="hero-photo-stage">
            <div class="hero-slides" id="heroSlides" role="group" aria-label="Property photo slideshow">
              <img class="hero-photo is-active" src="<?php echo esc_url( get_theme_file_uri( '/assets/eirene-lakeside-ai-clean.jpg' ) ); ?>" alt="AI-enhanced visualization of Eirene's Lakeside Villa in Babakan Madang, West Java" />
              <img class="hero-photo" src="<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside-ai-no-fence.jpg' ) ); ?>" alt="AI-enhanced visualization of Jatiluwih Hillside Hideaway, a cabin among the green hills of Bali" />
              <img class="hero-photo" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-ai.jpg' ) ); ?>" alt="AI-enhanced visualization of the kitchen at Family Size Villa in Denpasar" />
              <img class="hero-photo" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-detail-ai.jpg' ) ); ?>" alt="AI-enhanced visualization of the living room at Family Size Villa in Denpasar" />
            </div>
            <div class="visual-wash"></div>
            <div class="slide-controls" aria-label="Slideshow controls">
              <button class="slide-dot is-active" type="button" aria-label="Show photo 1" aria-pressed="true"></button>
              <button class="slide-dot" type="button" aria-label="Show photo 2" aria-pressed="false"></button>
              <button class="slide-dot" type="button" aria-label="Show photo 3" aria-pressed="false"></button>
              <button class="slide-dot" type="button" aria-label="Show photo 4" aria-pressed="false"></button>
              <button class="slide-pause" id="slidePause" type="button" aria-label="Pause slideshow">Ⅱ</button>
            </div>
          </div>
          <a class="hero-rating" id="heroReviewLink" href="https://www.airbnb.com/rooms/1393993223925344101" target="_blank" rel="noopener" aria-label="Rated 4.67 out of 5, based on 3 Airbnb reviews. View listing on Airbnb">
            <span class="hero-rating-stars" aria-hidden="true">★★★★★</span><strong id="heroReviewScore">4.67</strong><span class="hero-rating-count" id="heroReviewCount">· 3 Airbnb reviews</span><span class="hero-rating-cta">View on Airbnb ↗</span>
          </a>
        </div>
      </div>
    </section>
    <section class="section" id="stays">
      <div class="section-head">
        <div><p class="section-kicker">Stay awhile</p><h2>Places to call your own</h2><p class="section-desc">Three distinctive homes, from Bali’s green highlands to the heart of Denpasar.</p></div>
        <a href="#contact" class="text-link">Explore all stays <span>→</span></a>
      </div>
      <div class="filter-row" role="group" aria-label="Filter properties">
        <button class="filter selected" data-filter="all">All homes</button><button class="filter" data-filter="villa">Villas</button><button class="filter" data-filter="retreat">Retreats</button><button class="filter" data-filter="family">Family stays</button><button class="filter" data-filter="gathering">Gathering spaces</button>
      </div>
      <div class="listing-grid" id="listingGrid">
        <article class="card" data-url="https://www.airbnb.com/rooms/958257224731528887" data-kind="retreat" data-location="jatiluwih hillside hideaway" tabindex="0" aria-label="Open listing: Jatiluwih Hillside Hideaway">
          <div class="card-photo-wrap"><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside-ai-no-fence.jpg' ) ); ?>" alt="AI-enhanced visualization of Jatiluwih Hillside Hideaway, a cabin in Penebel, Bali"/><span class="card-tag">Hillside cabin</span><button class="heart" aria-label="Save Jatiluwih Hillside Hideaway">♡</button></div>
          <div class="card-info"><p class="card-title">Jatiluwih Hillside Hideaway</p><a class="listing-link" href="https://www.airbnb.com/rooms/958257224731528887" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 5 out of 5, based on 2 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>5.0</strong><span>· 2 Airbnb reviews</span></p><p class="card-location">Jatiluwih Hillside</p><p class="card-meta">2 guests · 1 bedroom · 1 bed</p>
        </article>
        <article class="card" data-url="https://www.airbnb.com/rooms/1393993223925344101" data-kind="villa family gathering" data-location="sentul eirene villa eirene's lakeside villa" tabindex="0" aria-label="Open listing: Sentul Eirene Villa">
          <div class="card-photo-wrap"><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/eirene-lakeside-ai-clean.jpg' ) ); ?>" alt="AI-enhanced visualization of Eirene's Lakeside Villa, a group villa in Babakan Madang"/><span class="card-tag">Room for a group</span><button class="heart" aria-label="Save Eirene's Lakeside Villa">♡</button></div>
          <div class="card-info"><p class="card-title">Sentul Eirene Villa</p><a class="listing-link" href="https://www.airbnb.com/rooms/1393993223925344101" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 4.67 out of 5, based on 3 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>4.67</strong><span>· 3 Airbnb reviews</span></p><p class="card-location">Sentul Eirene Villa</p><p class="card-meta">14 guests · 7 bedrooms · 6 beds</p>
        </article>
        <article class="card" data-url="https://www.airbnb.com/rooms/637115227838594568" data-kind="villa family" data-location="denpasar family size villa family size villa in denpasar" tabindex="0" aria-label="Open listing: Denpasar Family Size Villa">
          <div class="card-photo-wrap"><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-ai.jpg' ) ); ?>" alt="AI-enhanced visualization of the Family Size Villa in Denpasar kitchen"/><span class="card-tag">Pool · 6 bedrooms</span><button class="heart" aria-label="Save Family Size Villa in Denpasar">♡</button></div>
          <div class="card-info"><p class="card-title">Denpasar Family Size Villa</p><a class="listing-link" href="https://www.airbnb.com/rooms/637115227838594568" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 5 out of 5, based on 7 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>5.0</strong><span>· 7 Airbnb reviews</span></p><p class="card-location">Denpasar Family Size Villa</p><p class="card-meta">14 guests · 6 bedrooms · 10 beds</p>
        </article>
        <article class="card trust-card" data-url="https://www.trustbuildingjakarta.com/" data-kind="gathering workspace" data-location="trust building jakarta central jakarta coworking office" tabindex="0" aria-label="Open listing: Trust Building Jakarta">
          <div class="card-photo-wrap trust-photo-wrap" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-drone-finished.png' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-corridor.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-meeting-room.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-event-space.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-lounge.avif' ) ); ?>"]'>
            <img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-drone-finished.png' ) ); ?>" alt="Trust Building Jakarta's exterior in Central Jakarta" />
            <span class="card-tag">Coworking · Offices</span>
            <button class="heart" aria-label="Save Trust Building Jakarta">♡</button>
            <div class="mini-gallery-controls" aria-label="Trust Building photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show Trust Building photo 1"></button><button class="mini-gallery-dot" type="button" aria-label="Show Trust Building photo 2"></button><button class="mini-gallery-dot" type="button" aria-label="Show Trust Building photo 3"></button><button class="mini-gallery-dot" type="button" aria-label="Show Trust Building photo 4"></button><button class="mini-gallery-dot" type="button" aria-label="Show Trust Building photo 5"></button></div>
          </div>
          <div class="card-info"><p class="card-title">Trust Building Jakarta</p><a class="listing-link" href="https://www.trustbuildingjakarta.com/" target="_blank" rel="noopener">Visit website ↗</a></div>
          <a class="card-rating google-link" href="https://www.google.com/maps/place/TRUST+BUILDING/@-6.1830692,106.8387372,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f4365871b667:0x7e14ef3d5746c66c!8m2!3d-6.1830692!4d106.8387372!16s%2Fg%2F11c31v37m_" target="_blank" rel="noopener" aria-label="Rated 4.7 out of 5, based on 49 Google reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>4.7</strong><span>· 49 Google reviews</span></a>
          <p class="card-location">Central Jakarta</p><p class="card-meta">Co-working · Co-learning · Co-living</p>
        </article>
      </div>
      <div class="empty-state" id="emptyState">No homes match that search yet. Try another place or browse all homes.</div>
    </section>
    <section class="feature-band" id="spaces">
      <div class="feature-image-wrap"><img class="feature-image" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-detail-ai.jpg' ) ); ?>" alt="AI-enhanced visualization of the Family Size Villa in Denpasar living room" /></div>
      <div class="feature-content" id="about"><p class="section-kicker">More than a stay</p><h2>Room to gather.<br />Space to belong.</h2><p>Bale means home. Damai means peace. We bring the two together through places that invite connection, care, and a sense of belonging.</p><a href="#contact" class="button-link">Discover Bale Damai</a></div>
    </section>
  </main>
  <footer id="contact"><div>Copyright © 2026 Budijaja Corporation. All Rights reserved.</div></footer>
  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script>
    const filters = [...document.querySelectorAll('.filter')];
    const cards = [...document.querySelectorAll('.card')];
    const destination = document.querySelector('#destination');
    const emptyState = document.querySelector('#emptyState');
    const toast = document.querySelector('#toast');
    let toastTimer;
    function showToast(message) {
      toast.textContent = message; toast.classList.add('show');
      clearTimeout(toastTimer); toastTimer = setTimeout(() => toast.classList.remove('show'), 2400);
    }
    function filterCards(kind = 'all', query = '') {
      const needle = query.trim().toLowerCase(); let visible = 0;
      cards.forEach(card => {
        const categoryMatch = kind === 'all' || card.dataset.kind.includes(kind);
        const placeMatch = !needle || card.dataset.location.includes(needle) || card.querySelector('.card-title').textContent.toLowerCase().includes(needle);
        card.hidden = !(categoryMatch && placeMatch); if (!card.hidden) visible++;
      });
      emptyState.style.display = visible ? 'none' : 'block';
    }
    filters.forEach(button => button.addEventListener('click', () => {
      filters.forEach(item => item.classList.toggle('selected', item === button));
      filterCards(button.dataset.filter, destination.value);
    }));
    const airbnbDestinations = [
      { url:'https://www.airbnb.com/rooms/958257224731528887', matches:['jatiluwih hillside hideaway','jatiluwih hillside'] },
      { url:'https://www.airbnb.com/rooms/1393993223925344101', matches:['sentul eirene villa'] },
      { url:'https://www.airbnb.com/rooms/637115227838594568', matches:['denpasar family size villa'] },
      { url:'https://www.trustbuildingjakarta.com/', matches:['trust building jakarta'] }
    ];
    document.querySelector('#searchForm').addEventListener('submit', event => {
      event.preventDefault();
      const query = destination.value.trim().toLowerCase();
      const match = airbnbDestinations.find(property => property.matches.some(place => query.includes(place)));
      if (!match) {
        showToast('Choose Jatiluwih Hillside, Sentul Eirene Villa, Denpasar Family Size Villa, or Trust Building Jakarta.');
        destination.focus();
        return;
      }
      window.location.assign(match.url);
    });
    document.querySelectorAll('.heart').forEach(button => button.addEventListener('click', event => {
      event.stopPropagation(); const saved = button.classList.toggle('saved'); button.textContent = saved ? '♥' : '♡';
      showToast(saved ? 'Added to your saved homes' : 'Removed from your saved homes');
    }));
    document.querySelectorAll('[data-gallery]').forEach(gallery => {
      const photos = JSON.parse(gallery.dataset.gallery);
      const image = gallery.querySelector('.card-photo');
      const dots = [...gallery.querySelectorAll('.mini-gallery-dot')];
      dots.forEach((dot, index) => dot.addEventListener('click', event => {
        event.stopPropagation();
        image.src = photos[index];
        image.alt = `Trust Building Jakarta workspace photo ${index + 1}`;
        dots.forEach((item, itemIndex) => item.classList.toggle('is-active', itemIndex === index));
      }));
    });
    cards.forEach(card => {
      const open = () => window.open(card.dataset.url, '_blank', 'noopener');
      card.addEventListener('click', event => { if (!event.target.closest('a,button,.card-rating')) open(); });
      card.addEventListener('keydown', event => { if (event.target === card && (event.key === 'Enter' || event.key === ' ')) { event.preventDefault(); open(); } });
    });
    const menuButton = document.querySelector('#menuButton');
    menuButton.addEventListener('click', () => { const open = document.querySelector('#nav').classList.toggle('open'); menuButton.setAttribute('aria-expanded', String(open)); menuButton.textContent = open ? '×' : '☰'; });
    document.querySelectorAll('.nav a').forEach(link => link.addEventListener('click', () => { document.querySelector('#nav').classList.remove('open'); menuButton.setAttribute('aria-expanded','false'); menuButton.textContent='☰'; }));
    document.querySelectorAll('a[href="#contact"]').forEach(link => link.addEventListener('click', event => { event.preventDefault(); showToast('We’d love to hear from you — hello@baledamai.com'); }));

    const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');
    const heroImages = [...document.querySelectorAll('.hero-photo')];
    const slideDots = [...document.querySelectorAll('.slide-dot')];
    const slidePause = document.querySelector('#slidePause');
    const rotatingPhrase = document.querySelector('#rotatingPhrase');
    const phrases = ['feel at home.', 'slow down.', 'find your calm.', 'stay awhile.'];
    const heroRatings = [
      { score:'4.67', count:'· 3 Airbnb reviews', url:'https://www.airbnb.com/rooms/1393993223925344101', property:'Sentul Eirene Villa' },
      { score:'5.0', count:'· 2 Airbnb reviews', url:'https://www.airbnb.com/rooms/958257224731528887', property:'Jatiluwih Hillside' },
      { score:'5.0', count:'· 7 Airbnb reviews', url:'https://www.airbnb.com/rooms/637115227838594568', property:'Denpasar Family Size Villa' },
      { score:'5.0', count:'· 7 Airbnb reviews', url:'https://www.airbnb.com/rooms/637115227838594568', property:'Denpasar Family Size Villa' }
    ];
    let currentSlide = 0;
    let currentPhrase = 0;
    let slideTimer;
    let phraseTimer;
    let slideshowPaused = false;
    function showSlide(index) {
      currentSlide = (index + heroImages.length) % heroImages.length;
      heroImages.forEach((photo, i) => photo.classList.toggle('is-active', i === currentSlide));
      slideDots.forEach((dot, i) => { dot.classList.toggle('is-active', i === currentSlide); dot.setAttribute('aria-pressed', String(i === currentSlide)); });
      const rating = heroRatings[currentSlide];
      document.querySelector('#heroReviewScore').textContent = rating.score;
      document.querySelector('#heroReviewCount').textContent = rating.count;
      document.querySelector('#heroReviewLink').href = rating.url;
      document.querySelector('#heroReviewLink').setAttribute('aria-label', `Rated ${rating.score} out of 5 for ${rating.property}, based on ${rating.count.replace('· ', '')}. View listing on Airbnb`);
    }
    function startSlideTimer() {
      clearInterval(slideTimer);
      if (!slideshowPaused && !motionPreference.matches) slideTimer = setInterval(() => showSlide(currentSlide + 1), 6500);
    }
    slideDots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); startSlideTimer(); }));
    slidePause.addEventListener('click', () => {
      slideshowPaused = !slideshowPaused;
      slidePause.textContent = slideshowPaused ? '▶' : 'Ⅱ';
      slidePause.setAttribute('aria-label', slideshowPaused ? 'Play slideshow' : 'Pause slideshow');
      startSlideTimer();
    });
    function rotatePhrase() {
      rotatingPhrase.classList.add('is-changing');
      setTimeout(() => {
        currentPhrase = (currentPhrase + 1) % phrases.length;
        rotatingPhrase.textContent = phrases[currentPhrase];
        rotatingPhrase.classList.remove('is-changing');
      }, 360);
    }
    function startPhraseTimer() {
      clearInterval(phraseTimer);
      if (!motionPreference.matches) phraseTimer = setInterval(rotatePhrase, 4200);
    }
    motionPreference.addEventListener('change', () => { startSlideTimer(); startPhraseTimer(); });
    startSlideTimer();
    startPhraseTimer();
  </script>
<?php wp_footer(); ?>
</body>
</html>
