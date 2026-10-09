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
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&family=Berkshire+Swash&display=swap" rel="stylesheet" />
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
    .topbar { height: 82px; padding: 0 clamp(22px, 5vw, 76px); display: flex; align-items: center; justify-content: space-between; background: rgba(251,252,249,.96); border-bottom: 1px solid rgba(28,43,50,.06); position: sticky; top: 0; z-index: 1000; box-shadow:0 4px 18px rgba(22,58,71,.04); backdrop-filter:blur(12px); } body.admin-bar .topbar { top:32px; }
    .brand { display:flex; align-items:center; width:212px; height:66px; overflow:hidden; flex:0 0 auto; }.brand img { display:block; width:211px; max-width:none; height:auto; margin-left:-4px; }.brand-wordmark,.footer-wordmark { display:inline-flex; flex-direction:column; align-items:flex-start; gap:3px; line-height:1; }.brand-name { font-family:var(--serif); font-size:28px; line-height:1.02; font-weight:600; letter-spacing:-.045em; color:var(--ink); }.brand-tagline { color:#718085; font-size:8px; line-height:1.2; font-weight:600; letter-spacing:.16em; text-transform:uppercase; }.brand-tagline:before { content:""; display:inline-block; width:13px; height:1px; margin:0 7px 3px 1px; background:var(--lime); }
    
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
    .search-field input::placeholder { color:#939da0; }.date-range-field { position:relative; z-index:5; }.date-range-trigger { display:flex; width:100%; align-items:center; justify-content:space-between; gap:8px; padding:0; border:0; background:transparent; color:#879397; text-align:left; font-size:13px; }.date-range-trigger.has-dates { color:var(--ink); }.date-range-trigger svg { flex:none; color:#63757b; }.date-range-popover { position:absolute; z-index:35; top:calc(100% + 14px); left:50%; transform:translateX(-50%); width:340px; padding:18px; border:1px solid rgba(31,68,80,.09); border-radius:16px; background:#fff; box-shadow:0 18px 44px rgba(22,58,71,.18); }.date-range-popover[hidden] { display:none; }.date-range-popover h3 { margin:0 0 5px; color:var(--ink); font-size:15px; font-weight:700; letter-spacing:0; text-transform:none; }.date-range-popover p { margin:0 0 15px; color:#788488; font-size:12px; line-height:1.5; }.date-range-inputs { display:grid; grid-template-columns:1fr 1fr; gap:10px; }.date-range-inputs label { display:block; margin:0 0 5px; color:#63757b; font-size:10px; font-weight:700; letter-spacing:.04em; text-transform:uppercase; }.date-range-inputs input { width:100%; min-height:42px; padding:8px 9px; border:1px solid #dfe6e5; border-radius:9px; background:#fff; color:var(--ink); font-size:12px; }.date-range-inputs input:focus { border-color:var(--blue); outline:2px solid rgba(20,123,168,.12); }.date-range-actions { display:flex; justify-content:flex-end; margin-top:14px; }.date-range-done { padding:9px 16px; border:0; border-radius:9px; background:var(--blue); color:#fff; font-size:12px; font-weight:700; }.date-range-done:hover { background:var(--blue-deep); }
    .search-panel { position:relative; z-index:10; }
    .destination-field { position:relative; z-index:4; }.destination-field:focus-within { z-index:40; }
    .destination-suggestions { position:absolute; z-index:30; top:calc(100% + 10px); left:-4px; width:min(350px, calc(100vw - 48px)); max-height:min(280px, 42vh); overflow-y:auto; padding:6px; border:1px solid rgba(31,68,80,.09); border-radius:14px; background:#fff; box-shadow:0 16px 38px rgba(22,58,71,.16); }
    .destination-suggestions[hidden] { display:none; }
    .destination-option { display:flex; width:100%; align-items:center; justify-content:space-between; gap:12px; padding:12px 13px; border:0; border-radius:9px; background:transparent; color:var(--ink); text-align:left; font-size:13px; line-height:1.35; }
    .destination-option:hover, .destination-option:focus-visible { outline:0; background:var(--blue-pale); color:var(--blue-deep); }
    .destination-option small { flex:none; color:#7c898d; font-size:10px; }
    .destination-empty { padding:13px; color:#778488; font-size:12px; }
    .search-submit { display:grid; place-items:center; justify-self:center; padding:0; border:0; height:46px; width:46px; border-radius:14px; background:var(--blue); color:white; font-size:19px; line-height:1; transition:background .2s,transform .2s; }
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
    .photo-gallery { touch-action:pan-y; user-select:none; -webkit-user-select:none; cursor:grab; }
    .photo-gallery.is-dragging { cursor:grabbing; }
    .photo-gallery .card-photo { pointer-events:none; }
    .card:hover .card-photo { transform:scale(1.045); }
    .card:hover .photo-gallery .card-photo { transform:none; }
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
    .mini-gallery-controls { position:absolute; inset:auto 7px 7px; display:flex; justify-content:center; gap:1px; z-index:2; }
    .mini-gallery-dot { width:25px; height:26px; padding:0; display:grid; place-items:center; border:0; border-radius:50%; background:transparent; }
    .mini-gallery-dot:before { content:""; width:6px; height:6px; border-radius:50%; background:rgba(255,255,255,.74); box-shadow:0 1px 4px rgba(0,0,0,.35); transition:all .18s; }
    .mini-gallery-dot.is-active:before { width:17px; border-radius:8px; background:#fff; }
    .mini-gallery-count { position:absolute; z-index:2; right:48px; top:12px; padding:5px 7px; border-radius:12px; background:rgba(18,31,35,.54); color:#fff; font-size:9px; font-weight:600; letter-spacing:.02em; }
    .card-location,.card-meta { font-size:11px; color:#758084; margin:5px 0 0; }
    .card-price { margin-top:9px; font-size:12px; font-weight:600; color:#34454b; }
    .card-price span { font-weight:400; color:#7a8588; }
    .explore-section { max-width:1448px; margin:6px auto 56px; padding:22px clamp(22px,5vw,76px) 0; scroll-margin-top:24px; }
    .explore-head { display:flex; align-items:flex-end; justify-content:space-between; gap:24px; margin-bottom:20px; }
    .explore-head h2 { font-size:clamp(27px,3vw,38px); margin:5px 0 7px; }
    .explore-head p:not(.section-kicker) { color:#647277; font-size:13px; margin:0; }
    .gallery-tools { display:flex; align-items:center; gap:8px; flex:0 0 auto; }
    .gallery-arrow { width:38px; height:38px; border:1px solid var(--line); border-radius:50%; background:#fff; color:var(--ink); font-size:20px; cursor:pointer; transition:all .2s; }
    .gallery-arrow:hover { color:var(--blue-deep); border-color:#b8d4dc; background:var(--blue-pale); }
    .place-tabs { display:flex; gap:9px; overflow-x:auto; scrollbar-width:none; padding:1px 0 17px; }
    .place-tabs::-webkit-scrollbar { display:none; }
    .place-tab { border:1px solid #dfe5e2; border-radius:25px; background:transparent; color:#657277; padding:9px 15px; font:500 11px var(--sans); white-space:nowrap; cursor:pointer; }
    .place-tab:hover,.place-tab.is-active { border-color:var(--blue); color:#fff; background:var(--blue); }
    .place-rail { display:grid; grid-auto-columns:minmax(190px,1fr); grid-auto-flow:column; gap:16px; overflow-x:auto; scroll-snap-type:x mandatory; scrollbar-width:none; padding-bottom:7px; }
    .place-rail::-webkit-scrollbar { display:none; }
    .place-card { min-width:0; scroll-snap-align:start; color:inherit; text-decoration:none; }
    .place-photo { height:154px; border-radius:8px; overflow:hidden; background:#e5e9e5; position:relative; }
    .place-photo img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .45s; }
    .place-card:hover .place-photo img { transform:scale(1.045); }
    .place-photo:after { content:""; position:absolute; inset:42% 0 0; background:linear-gradient(transparent,rgba(13,29,31,.42)); }
    .place-photo-label { position:absolute; z-index:1; left:12px; bottom:11px; color:#fff; font-size:10px; font-weight:600; }
    .place-title { margin:11px 0 3px; font-size:14px; font-weight:700; }
    .place-subtitle { margin:0; color:#758084; font-size:11px; }
    .collection-grid { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:42px; }
    .collection-card { min-width:0; border:1px solid var(--line); background:#fff; border-radius:9px; overflow:hidden; }
    .collection-collage { height:245px; display:grid; grid-template-columns:1.45fr 1fr; grid-template-rows:1fr 1fr; gap:4px; background:#fff; }
    .collection-collage img { display:block; width:100%; height:100%; min-height:0; object-fit:cover; }
    .collection-collage img:first-child { grid-row:1 / 3; } .collection-collage.two-photo-collage { grid-template-columns:1fr 1fr; grid-template-rows:1fr; }.collection-collage.two-photo-collage img:first-child { grid-row:1; }
    .collection-copy { padding:20px 21px 21px; }
    .collection-copy .section-kicker { margin-bottom:7px; }
    .collection-copy h3 { margin:0 0 7px; font-size:22px; }
    .collection-copy p:not(.section-kicker) { margin:0; color:#647277; font-size:12px; line-height:1.6; }
    .collection-link { display:inline-flex; gap:8px; margin-top:14px; color:var(--blue-deep); font-size:11px; font-weight:700; text-decoration:none; }
    .collection-link:hover { text-decoration:underline; }
    .contact-band { max-width:1448px; margin:0 auto 38px; padding:34px clamp(24px,5vw,62px); display:flex; align-items:center; justify-content:space-between; gap:30px; background:#f3f6f1; }
    .contact-copy h2 { margin:7px 0 8px; font-size:clamp(23px,2.5vw,32px); line-height:1.2; }
    .contact-copy p:last-child { margin:0; color:#647277; font-size:13px; line-height:1.6; }
    .contact-links { display:flex; flex-wrap:wrap; justify-content:flex-end; gap:8px; max-width:520px; }
    .contact-links a { display:inline-flex; align-items:center; gap:8px; padding:10px 12px; border:1px solid #d7e2df; border-radius:3px; color:var(--blue-deep); background:#fff; text-decoration:none; font-size:11px; font-weight:600; transition:background .2s,border-color .2s; }
    .contact-links a:hover { background:var(--blue-pale); border-color:#b8d4dc; }
    .site-footer { background:#172d34; color:#f6f8f3; padding:48px clamp(22px,5vw,76px) 0; }
    .footer-main { max-width:1296px; margin:0 auto; padding-bottom:35px; display:grid; grid-template-columns:1.35fr .7fr 1fr; gap:48px; }
    .footer-logo { display:inline-flex; text-decoration:none; filter:drop-shadow(0 3px 8px rgba(0,0,0,.16)); }.footer-brand-name { font-family:"Berkshire Swash", var(--serif); color:#f4f7f4; font-size:36px; line-height:1.1; font-weight:400; letter-spacing:0; }.footer-tagline { color:#b9c8ca; font-family:var(--sans); font-size:9px; font-weight:600; line-height:1.2; letter-spacing:.16em; text-transform:uppercase; }.footer-tagline:before { content:""; display:inline-block; width:14px; height:1px; margin:0 7px 3px 1px; background:var(--lime); }
    .footer-brand p { max-width:310px; margin:17px 0 19px; color:#c3d0d1; font-size:12px; line-height:1.7; }
    .footer-whatsapp { display:inline-flex; align-items:center; gap:9px; padding:10px 13px; border:1px solid rgba(255,255,255,.25); border-radius:4px; color:#fff; text-decoration:none; font-size:12px; font-weight:600; box-shadow:0 3px 12px rgba(0,0,0,.14); transition:background .2s,border-color .2s,box-shadow .2s; }
    .footer-whatsapp:hover { background:rgba(255,255,255,.1); border-color:rgba(255,255,255,.55); box-shadow:0 5px 16px rgba(0,0,0,.2); }
    .footer-whatsapp svg { width:18px; height:18px; flex:0 0 18px; }
    .footer-column h2 { margin:5px 0 17px; color:#fff; font:700 11px var(--sans); letter-spacing:.1em; text-transform:uppercase; }
    .footer-column a { display:block; width:max-content; max-width:100%; margin:0 0 11px; color:#c3d0d1; font-size:12px; text-decoration:none; }
    .footer-column a:hover { color:#fff; text-decoration:underline; }
    .footer-bottom { max-width:1296px; margin:0 auto; padding:17px 0 19px; border-top:1px solid rgba(255,255,255,.16); display:flex; justify-content:space-between; gap:15px; color:#b8c5c6; font-size:10px; }
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
      .topbar { height:70px; padding:0 14px; } body.admin-bar .topbar { top:46px; }.brand { width:136px; height:58px; }.brand img { width:145px; margin-left:-3px; }.top-actions { width:auto; gap:2px; }.host-link { display:inline-flex; padding:8px 8px; font-size:10px; white-space:nowrap; }.menu-button { display:block; padding:6px; font-size:20px; }
      .nav { display:none; position:absolute; top:69px; left:0; right:0; height:auto; background:var(--paper); padding:10px 21px 18px; border-bottom:1px solid var(--line); flex-direction:column; align-items:stretch; gap:0; box-shadow:0 12px 18px rgba(20,45,50,.07); }
      .nav.open { display:flex; }.nav a { height:auto; padding:13px 2px; border-bottom:1px solid var(--line); }.nav a.active:after { display:none; }
      .hero { padding:36px 20px 35px; }.hero-inner { display:flex; flex-direction:column; align-items:stretch; gap:28px; }.hero-copy { font-size:14px; }.hero-visual { margin:0 7px 0 12px; }.hero-photo-stage { height:280px; }.hero-rating { gap:6px; padding:9px 10px; }.hero-rating-stars { font-size:11px; letter-spacing:0; }.hero-rating-count { font-size:9px; }.hero-rating-cta { font-size:9px; }.accent-dot { width:62px; height:62px; right:-15px; top:-15px; }
      .search-panel { margin-top:23px; grid-template-columns:minmax(0,1fr) minmax(0,1fr) 52px; gap:0; padding:7px; }.search-field { padding:7px 9px; }.search-field:first-child { grid-column:1 / -1; border-right:0; border-bottom:1px solid var(--line); padding-bottom:10px; margin-bottom:5px; }.search-field:nth-child(3) { border-right:0; }.date-range-popover { left:0; transform:none; width:min(340px, calc(100vw - 48px)); }.date-range-inputs { grid-template-columns:1fr; gap:10px; }.search-submit { width:42px; height:42px; }
      .section { padding:38px 20px; }.section-head { align-items:flex-start; }.section-head .text-link { margin-top:14px; }.listing-grid { grid-template-columns:repeat(2,minmax(0,1fr)); gap:22px 12px; }.card-photo-wrap { border-radius:3px 21px 3px 3px; aspect-ratio:1/1; }.card-tag { left:8px; top:8px; font-size:8px; padding:6px 7px; }.heart { right:8px; top:8px; width:30px; height:30px; }.card-title { font-size:12px; }.card-location,.card-meta { font-size:10px; }.card-price { font-size:11px; }
      .explore-section { margin:0 0 34px; padding:22px 20px 0; }.explore-head { align-items:flex-start; }.gallery-tools { display:none; }.place-rail { grid-auto-columns:minmax(190px,68vw); gap:12px; }.place-photo { height:145px; }.collection-grid { grid-template-columns:1fr; gap:14px; margin-top:30px; }.collection-collage { height:220px; }.collection-copy { padding:17px; }.contact-band { margin:0 20px 28px; padding:25px 22px; flex-direction:column; align-items:flex-start; gap:19px; }.contact-links { justify-content:flex-start; }
      .site-footer { padding:34px 22px 0; }.footer-main { grid-template-columns:1fr 1fr; gap:30px 20px; padding-bottom:27px; }.footer-brand { grid-column:1 / -1; }.footer-brand-name { font-size:29px; }.footer-bottom { flex-direction:column; gap:6px; padding:15px 0 18px; }
    }
    @media (max-width:390px) { .listing-grid { grid-template-columns:1fr; }.card-photo-wrap { aspect-ratio:1.28/1; }.section-head .text-link { font-size:11px; } }
  </style>
  <?php wp_head(); ?>
  <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_theme_file_uri( '/assets/favicon.svg' ) ); ?>" />
</head>
<body>
<?php wp_body_open(); ?>
  <header class="topbar">
    <a class="brand" href="#home" aria-label="Bale Damai Community Centre home"><img src="<?php echo esc_url( get_theme_file_uri( '/bale-damai-logo.png' ) ); ?>" alt="Bale Damai Community Centre" /></a>
    <nav class="nav" id="nav" aria-label="Main navigation">
      <a class="active" href="#stays">Places to stay</a>
      <a href="#stays">Our properties</a>
      <a href="#explore">Explore by place</a>
    </nav>
    <div class="top-actions"><a class="host-link" href="https://wa.me/628131831832?text=Hello%20Bale%20Damai%2C%20I%20would%20like%20to%20ask%20about%20your%20properties%20and%20get%20help%20choosing%20the%20right%20one.%20Can%20you%20assist%20me%3F%0A%0A(Halo%20Bale%20Damai%2C%20saya%20ingin%20bertanya%20tentang%20properti%20yang%20tersedia%20dan%20dibantu%20memilih%20yang%20sesuai.%20Apakah%20bisa%20dibantu%3F)" target="_blank" rel="noopener noreferrer">Contact Bale Damai</a><button class="menu-button" id="menuButton" aria-label="Open menu" aria-expanded="false">☰</button></div>
  </header>
  <main id="home">
    <section class="hero">
      <div class="hero-inner">
        <div class="hero-copy-block">
          <div class="eyebrow">The Bale Damai collection</div>
          <h1>Find a place<br />to <em class="rotating-phrase" id="rotatingPhrase">feel at home.</em></h1>
          <p class="hero-copy">Thoughtful homes and gathering spaces, chosen for the moments that bring us closer. Discover a slower, more meaningful stay.</p>
          <form class="search-panel" id="searchForm">
            <div class="search-field destination-field"><label for="destination">Where</label><input id="destination" type="text" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" aria-autocomplete="list" aria-controls="propertySuggestions" aria-expanded="false" placeholder="Choose a Bale Damai property" /><div class="destination-suggestions" id="propertySuggestions" role="listbox" aria-label="Available properties" hidden></div></div>
            <div class="search-field date-range-field"><label>When</label><button class="date-range-trigger" id="dateRangeTrigger" type="button" aria-expanded="false" aria-controls="dateRangePopover"><span id="dateRangeSummary">Add dates</span><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3.5" y="5" width="17" height="15.5" rx="2" stroke="currentColor" stroke-width="1.7"/><path d="M7.5 3.5v3M16.5 3.5v3M4 9h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></button><div class="date-range-popover" id="dateRangePopover" hidden><h3>Plan your stay</h3><p>Choose your check-in and check-out dates.</p><div class="date-range-inputs"><div><label for="arrival">Check-in</label><input id="arrival" type="date" aria-label="Check-in date" /></div><div><label for="departure">Check-out</label><input id="departure" type="date" aria-label="Check-out date" /></div></div><div class="date-range-actions"><button class="date-range-done" id="dateRangeDone" type="button">Done</button></div></div></div>
            <div class="search-field"><label for="guests">Who</label><input id="guests" type="text" inputmode="numeric" placeholder="Add guests" /></div>
            <button class="search-submit" type="submit" aria-label="Search properties">⌕</button>
          </form>
          <p class="hero-note">Choose from our available properties.</p>
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
        <div><p class="section-kicker">Stay awhile</p><h2>Places to call your own</h2><p class="section-desc">A growing collection of stays and gathering spaces across Java and Bali.</p></div>
        <a href="#contact" class="text-link">Explore all stays <span>→</span></a>
      </div>
      <div class="filter-row" role="group" aria-label="Filter properties">
        <button class="filter selected" data-filter="all">All homes</button><button class="filter" data-filter="villa">Villas</button><button class="filter" data-filter="retreat">Retreats</button><button class="filter" data-filter="family">Family stays</button><button class="filter" data-filter="gathering">Gathering spaces</button>
      </div>
      <div class="listing-grid" id="listingGrid">
        <article class="card" data-url="https://www.airbnb.com/rooms/958257224731528887" data-kind="retreat" data-location="jatiluwih hillside hideaway" tabindex="0" aria-label="Open listing: Jatiluwih Hillside Hideaway">
          <div class="card-photo-wrap photo-gallery" role="group" aria-label="Swipe through Jatiluwih Hillside Hideaway photos" data-gallery-name="Jatiluwih Hillside Hideaway" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/01.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/02.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/03.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/04.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/05.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/06.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/08.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/09.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/10.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/11.avif' ) ); ?>"]'><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside/01.avif' ) ); ?>" alt="Jatiluwih Hillside Hideaway Airbnb gallery photo"/><span class="mini-gallery-count">1 / 10</span><span class="card-tag">Hillside cabin</span><button class="heart" aria-label="Save Jatiluwih Hillside Hideaway">♡</button><div class="mini-gallery-controls" aria-label="Jatiluwih Hillside Hideaway photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show photo 1 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 2 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 3 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 4 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 5 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 6 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 7 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 8 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 9 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 10 of 10"></button></div></div>
          <div class="card-info"><p class="card-title">Jatiluwih Hillside Hideaway</p><a class="listing-link" href="https://www.airbnb.com/rooms/958257224731528887" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 5 out of 5, based on 2 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>5.0</strong><span>· 2 Airbnb reviews</span></p><p class="card-location">Jatiluwih Hillside</p><p class="card-meta">2 guests · 1 bedroom · 1 bed</p>
        </article>
        <article class="card" data-url="https://www.airbnb.com/rooms/1393993223925344101" data-kind="villa family gathering" data-location="sentul eirene villa eirene's lakeside villa" tabindex="0" aria-label="Open listing: Sentul Eirene Villa">
          <div class="card-photo-wrap photo-gallery" role="group" aria-label="Swipe through Sentul Eirene Villa photos" data-gallery-name="Sentul Eirene Villa" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/01.webp' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/02.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/03.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/04.webp' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/05.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/06.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/07.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/08.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/09.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/10.avif' ) ); ?>"]'><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/sentul-eirene-villa/01.webp' ) ); ?>" alt="Sentul Eirene Villa Airbnb gallery photo"/><span class="mini-gallery-count">1 / 10</span><span class="card-tag">Room for a group</span><button class="heart" aria-label="Save Eirene's Lakeside Villa">♡</button><div class="mini-gallery-controls" aria-label="Sentul Eirene Villa photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show photo 1 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 2 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 3 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 4 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 5 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 6 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 7 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 8 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 9 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 10 of 10"></button></div></div>
          <div class="card-info"><p class="card-title">Sentul Eirene Villa</p><a class="listing-link" href="https://www.airbnb.com/rooms/1393993223925344101" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 4.67 out of 5, based on 3 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>4.67</strong><span>· 3 Airbnb reviews</span></p><p class="card-location">Sentul Eirene Villa</p><p class="card-meta">14 guests · 7 bedrooms · 6 beds</p>
        </article>
        <article class="card" data-url="https://www.airbnb.com/rooms/637115227838594568" data-kind="villa family" data-location="denpasar family size villa family size villa in denpasar" tabindex="0" aria-label="Open listing: Denpasar Family Size Villa">
          <div class="card-photo-wrap photo-gallery" role="group" aria-label="Swipe through Denpasar Family Size Villa photos" data-gallery-name="Denpasar Family Size Villa" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/01-pool.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/02-living-room.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/03-kitchen.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/04-bedroom-1.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/05-bedroom-2.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/06-bedroom-3.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/07-bedroom-4.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/08-workspace.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/09-patio.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/10-exterior.avif' ) ); ?>"]'><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/01-pool.avif' ) ); ?>" alt="Denpasar Family Size Villa Airbnb photo: pool"/><span class="mini-gallery-count">1 / 10</span><span class="card-tag">Pool · 6 bedrooms</span><button class="heart" aria-label="Save Family Size Villa in Denpasar">♡</button><div class="mini-gallery-controls" aria-label="Denpasar Family Size Villa photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show photo 1 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 2 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 3 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 4 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 5 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 6 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 7 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 8 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 9 of 10"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 10 of 10"></button></div></div>
          <div class="card-info"><p class="card-title">Denpasar Family Size Villa</p><a class="listing-link" href="https://www.airbnb.com/rooms/637115227838594568" target="_blank" rel="noopener">View on Airbnb ↗</a></div><p class="card-rating" aria-label="Rated 5 out of 5, based on 7 Airbnb reviews"><span class="stars" aria-hidden="true">★★★★★</span><strong>5.0</strong><span>· 7 Airbnb reviews</span></p><p class="card-location">Denpasar Family Size Villa</p><p class="card-meta">14 guests · 6 bedrooms · 10 beds</p>
        </article>
        <article class="card" data-url="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" data-kind="retreat" data-location="gunung salak forest glamping selemadeg tabanan bali" tabindex="0" aria-label="Ask about Gunung Salak Forest Glamping">
          <div class="card-photo-wrap photo-gallery" role="group" aria-label="Swipe through Gunung Salak property and location photos" data-gallery-name="Gunung Salak Forest Glamping" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/01-gunung-salak-aerial.png' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/02-gunung-salak-site.png' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/03-gunung-salak-location.png' ) ); ?>"]'><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/01-gunung-salak-aerial.png' ) ); ?>" alt="Aerial view of Bale Damai Gunung Salak cabins among dense greenery"/><span class="mini-gallery-count">1 / 3</span><span class="card-tag">Property & location</span><button class="heart" aria-label="Save Gunung Salak Forest Glamping">♡</button><div class="mini-gallery-controls" aria-label="Gunung Salak property and location photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show photo 1 of 3"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 2 of 3"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 3 of 3"></button></div></div>
          <div class="card-info"><p class="card-title">Gunung Salak Forest Glamping</p><a class="listing-link" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Ask on WhatsApp ↗</a></div><p class="card-location">Selemadeg, Tabanan, Bali</p><p class="card-meta">Rainforest setting · Waterfall views · Ask about availability</p>
        </article>        <article class="card" data-url="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" data-kind="retreat" data-location="kerambitan recovery home wellness home tabanan bali" tabindex="0" aria-label="Ask about Kerambitan Recovery Home">
          <div class="card-photo-wrap photo-gallery" role="group" aria-label="Swipe through Kerambitan property photos" data-gallery-name="Kerambitan Recovery Home" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/01-kerambitan-exterior.png' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/02-kerambitan-home.png' ) ); ?>"]'><img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/01-kerambitan-exterior.png' ) ); ?>" alt="Bale Damai Kerambitan exterior and property information"/><span class="mini-gallery-count">1 / 2</span><span class="card-tag">Recovery home</span><button class="heart" aria-label="Save Kerambitan Recovery Home">♡</button><div class="mini-gallery-controls" aria-label="Kerambitan property photos"><button class="mini-gallery-dot is-active" type="button" aria-label="Show photo 1 of 2"></button><button class="mini-gallery-dot" type="button" aria-label="Show photo 2 of 2"></button></div></div>
          <div class="card-info"><p class="card-title">Kerambitan Recovery Home</p><a class="listing-link" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Ask on WhatsApp ↗</a></div><p class="card-location">Kerambitan, Tabanan, Bali</p><p class="card-meta">A calm, homelike setting · Contact for details</p>
        </article>        <article class="card trust-card" data-url="https://www.trustbuildingjakarta.com/" data-kind="gathering workspace" data-location="trust building jakarta central jakarta coworking office" tabindex="0" aria-label="Open listing: Trust Building Jakarta">
          <div class="card-photo-wrap trust-photo-wrap photo-gallery" role="group" aria-label="Swipe through Trust Building Jakarta photos" data-gallery-name="Trust Building Jakarta" data-gallery='["<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-jakarta/01-exterior.png' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-jakarta/02-corridor.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-jakarta/03-meeting-room.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-jakarta/04-event-space.avif' ) ); ?>","<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-jakarta/05-lounge.avif' ) ); ?>"]'>
            <img class="card-photo" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-drone-finished.png' ) ); ?>" alt="Trust Building Jakarta's exterior in Central Jakarta" />
            <span class="mini-gallery-count">1 / 5</span>
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
    <section class="explore-section" id="explore" aria-labelledby="exploreHeading">
      <div class="explore-head"><div><p class="section-kicker">Pick your place</p><h2 id="exploreHeading">A stay for every kind of day</h2><p>Browse city comforts, Bali escapes, and spaces to come together.</p></div><div class="gallery-tools" aria-label="Gallery navigation"><button class="gallery-arrow" type="button" data-gallery-scroll="-1" aria-label="Previous properties">‹</button><button class="gallery-arrow" type="button" data-gallery-scroll="1" aria-label="Next properties">›</button></div></div>
      <div class="place-tabs" role="group" aria-label="Filter places"><button class="place-tab is-active" type="button" data-place-filter="all">All places</button><button class="place-tab" type="button" data-place-filter="jakarta">Central Jakarta</button><button class="place-tab" type="button" data-place-filter="denpasar">Denpasar, Bali</button><button class="place-tab" type="button" data-place-filter="bali">Bali retreats</button></div>
      <div class="place-rail" id="placeRail">
        <a class="place-card" data-place="jakarta" href="https://www.trustbuildingjakarta.com/" target="_blank" rel="noopener"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-drone-finished.png' ) ); ?>" alt="Trust Building in Central Jakarta"><span class="place-photo-label">Work, meet, stay</span></div><p class="place-title">Trust Building Jakarta</p><p class="place-subtitle">Central Jakarta · Co-working and co-living</p></a>
        <a class="place-card" data-place="denpasar" href="https://www.airbnb.com/rooms/637115227838594568" target="_blank" rel="noopener"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-family-villa/10-exterior.avif' ) ); ?>" alt="Denpasar family villa exterior"><span class="place-photo-label">Room for everyone</span></div><p class="place-title">Denpasar Family Size Villa</p><p class="place-subtitle">Denpasar, Bali · Six bedrooms</p></a>
        <a class="place-card" data-place="bali" href="https://www.airbnb.com/rooms/958257224731528887" target="_blank" rel="noopener"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/jatiluwih-hillside-ai-no-fence.jpg' ) ); ?>" alt="Hillside hideaway among the green Jatiluwih landscape"><span class="place-photo-label">A slower Bali escape</span></div><p class="place-title">Jatiluwih Hillside Hideaway</p><p class="place-subtitle">Jatiluwih, Bali · Hillside retreat</p></a>
        <a class="place-card" data-place="sentul" href="https://www.airbnb.com/rooms/1393993223925344101" target="_blank" rel="noopener"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/eirene-lakeside-ai-clean.jpg' ) ); ?>" alt="Eirene's Lakeside Villa, a spacious group retreat"><span class="place-photo-label">Gather with your people</span></div><p class="place-title">Sentul Eirene Villa</p><p class="place-subtitle">Sentul, West Java · A group retreat</p></a>
        <a class="place-card" data-place="bali" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/01-gunung-salak-aerial.png' ) ); ?>" alt="Aerial view of Bale Damai Gunung Salak cabins among dense greenery"><span class="place-photo-label">Forest setting</span></div><p class="place-title">Gunung Salak Forest Glamping</p><p class="place-subtitle">Gunung Salak, Tabanan, Bali · Rainforest glamping</p></a>
        <a class="place-card" data-place="bali" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer"><div class="place-photo"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/01-kerambitan-exterior.png' ) ); ?>" alt="Bale Damai Kerambitan exterior and property information"><span class="place-photo-label">Wellness & recovery</span></div><p class="place-title">Kerambitan Recovery Home</p><p class="place-subtitle">Kerambitan, Tabanan, Bali · Recovery home</p></a>
      </div>
      <div class="collection-grid" aria-label="Featured destination photo collections">
        <article class="collection-card" data-place="jakarta"><div class="collection-collage"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-drone-finished.png' ) ); ?>" alt="Aerial view of the completed Trust Building"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-meeting-room.avif' ) ); ?>" alt="Meeting room inside Trust Building"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/trust-building-lounge.avif' ) ); ?>" alt="Shared lounge inside Trust Building"></div><div class="collection-copy"><p class="section-kicker">Central Jakarta</p><h3>Make room to work and connect</h3><p>A practical city base for focused work, shared ideas, and a comfortable stay in the heart of Jakarta.</p><a class="collection-link" href="https://www.trustbuildingjakarta.com/" target="_blank" rel="noopener">Explore Trust Building <span>↗</span></a></div></article>
        <article class="collection-card" data-place="denpasar"><div class="collection-collage"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-ai.jpg' ) ); ?>" alt="Open kitchen at the Denpasar family villa"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-detail-ai.jpg' ) ); ?>" alt="Relaxing living room at the Denpasar villa"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/denpasar-villa-detail.jpg' ) ); ?>" alt="A welcoming detail in the family villa"></div><div class="collection-copy"><p class="section-kicker">Denpasar, Bali</p><h3>Bring everyone under one roof</h3><p>Find generous shared spaces, a welcoming kitchen, and room for family and friends to settle in together.</p><a class="collection-link" href="https://www.airbnb.com/rooms/637115227838594568" target="_blank" rel="noopener">Explore the family villa <span>↗</span></a></div></article>
        <article class="collection-card" data-place="bali"><div class="collection-collage"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/01-gunung-salak-aerial.png' ) ); ?>" alt="Aerial view of Bale Damai Gunung Salak cabins among dense greenery"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/02-gunung-salak-site.png' ) ); ?>" alt="Aerial site view of Bale Damai Gunung Salak grounds and paths"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/gunung-salak/03-gunung-salak-location.png' ) ); ?>" alt="Map showing Bale Damai Gunung Salak and nearby waterfalls"></div><div class="collection-copy"><p class="section-kicker">Selemadeg, Tabanan, Bali</p><h3>A forest stay in Gunung Salak</h3><p>Set among rainforest hills near a waterfall, this glamping retreat is a chance to slow down in nature. See the forest grounds, nearby waterfalls, and location. Contact us for current details and availability.</p><a class="collection-link" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Ask about Gunung Salak on WhatsApp <span>↗</span></a></div></article>
        <article class="collection-card" data-place="bali"><div class="collection-collage two-photo-collage"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/01-kerambitan-exterior.png' ) ); ?>" alt="Bale Damai Kerambitan exterior and property information"><img loading="lazy" src="<?php echo esc_url( get_theme_file_uri( '/assets/kerambitan-recovery-home/02-kerambitan-home.png' ) ); ?>" alt="Bale Damai Rumah Pemulihan house and room information"></div><div class="collection-copy"><p class="section-kicker">Kerambitan, Tabanan, Bali</p><h3>A gentler place to reset</h3><p>A warm, shaded, homelike recovery residence in Kerambitan. Contact us for current facilities and support details.</p><a class="collection-link" href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Ask about Kerambitan on WhatsApp <span>↗</span></a></div></article>
      </div>
    </section>
    <section class="contact-band" id="contact" aria-labelledby="contactHeading">
      <div class="contact-copy"><p class="section-kicker">Find your fit</p><h2 id="contactHeading">Where would you like to feel at home?</h2><p>Tell us what you need, and we’ll help connect you with the right Bale Damai property.</p></div>
      <div class="contact-links" aria-label="Contact us about a property"><a href="mailto:hello@baledamai.com?subject=Ask%20about%20Jatiluwih%20Hillside%20Hideaway">Jatiluwih retreat <span>↗</span></a><a href="mailto:hello@baledamai.com?subject=Ask%20about%20Sentul%20Eirene%20Villa">Sentul villa <span>↗</span></a><a href="mailto:hello@baledamai.com?subject=Ask%20about%20Denpasar%20Family%20Size%20Villa">Denpasar family villa <span>↗</span></a><a href="mailto:hello@baledamai.com?subject=Ask%20about%20Trust%20Building%20Jakarta">Jakarta workspace <span>↗</span></a><a href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">gunung salak <span>↗</span></a><a href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">kerambitan recovery home <span>↗</span></a></div>
    </section>
  </main>
  <footer class="site-footer" aria-label="Bale Damai footer">
    <div class="footer-main">
      <div class="footer-brand"><a class="footer-logo" href="#home" aria-label="Bale Damai Community Centre home"><span class="footer-wordmark"><span class="footer-brand-name">Bale Damai</span><span class="footer-tagline">Community Centre</span></span></a><p>Thoughtful places to stay, gather, and feel at home across Jakarta and Bali.</p><a class="footer-whatsapp" href="https://wa.me/628131831832?text=Halo%20saya%20booking%20properti%20di%20Bale%20Damai%2C%20apakah%20bisa%20di%20bantu%3F" target="_blank" rel="noopener noreferrer" aria-label="Contact Bale Damai on WhatsApp"><svg viewBox="0 0 32 32" aria-hidden="true" focusable="false"><path fill="#25D366" d="M16 3.2A12.7 12.7 0 0 0 5.1 22.4L3.3 29l6.8-1.8A12.8 12.8 0 1 0 16 3.2Z"/><path fill="#172d34" d="M23 19.1c-.4-.2-2.1-1-2.5-1.1-.3-.1-.6-.2-.8.2-.3.4-.9 1.1-1.1 1.3-.2.3-.4.3-.8.1-.4-.2-1.5-.6-2.9-1.9-1.1-1-1.9-2.2-2.1-2.6-.2-.4 0-.6.2-.8l.6-.7c.2-.2.3-.4.4-.6.1-.3 0-.5 0-.7l-1.1-2.7c-.3-.7-.6-.6-.8-.6h-.7c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1s1.3 3.5 1.5 3.8c.2.2 2.6 4 6.3 5.6.9.4 1.6.6 2.1.7.9.3 1.8.2 2.4.1.7-.1 2.1-.9 2.4-1.7.3-.8.3-1.5.2-1.7-.1-.2-.4-.3-.8-.5Z"/></svg><span>Contact us on WhatsApp</span><span aria-hidden="true">↗</span></a></div>
      <div class="footer-column"><h2>Explore</h2><a href="#stays">All properties</a><a href="#explore">Explore by place</a><a href="#contact">Contact us</a></div>
      <div class="footer-column"><h2>Places to stay</h2><a href="https://www.trustbuildingjakarta.com/" target="_blank" rel="noopener noreferrer">Trust Building · Jakarta ↗</a><a href="https://www.airbnb.com/rooms/637115227838594568" target="_blank" rel="noopener noreferrer">Family villa · Denpasar ↗</a><a href="https://www.airbnb.com/rooms/958257224731528887" target="_blank" rel="noopener noreferrer">Hillside hideaway · Bali ↗</a><a href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Gunung Salak Forest Glamping ↗</a><a href="https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F" target="_blank" rel="noopener noreferrer">Kerambitan Recovery Home ↗</a></div>
    </div>
    <div class="footer-bottom"><span>Copyright © 2026 Budijaja Corporation. All rights reserved.</span><span>Bale Damai · Indonesia</span></div>
  </footer>
  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script>
    const filters = [...document.querySelectorAll('.filter')];
    const cards = [...document.querySelectorAll('.card')];
    const destination = document.querySelector('#destination');
    const emptyState = document.querySelector('#emptyState');
    const toast = document.querySelector('#toast');
    const placeTabs = [...document.querySelectorAll('.place-tab')];
    const placeItems = [...document.querySelectorAll('.place-card, .collection-card')];
    const placeRail = document.querySelector('#placeRail');
    let toastTimer;
    function showToast(message) {
      toast.textContent = message; toast.classList.add('show');
      clearTimeout(toastTimer); toastTimer = setTimeout(() => toast.classList.remove('show'), 2400);
    }
    placeTabs.forEach(button => button.addEventListener('click', () => {
      placeTabs.forEach(tab => tab.classList.toggle('is-active', tab === button));
      const filter = button.dataset.placeFilter;
      placeItems.forEach(item => { item.hidden = filter !== 'all' && item.dataset.place !== filter && !(filter === 'bali' && item.dataset.place === 'denpasar'); });
      placeRail.scrollTo({ left: 0, behavior: 'smooth' });
    }));
    document.querySelectorAll('[data-gallery-scroll]').forEach(button => button.addEventListener('click', () => {
      placeRail.scrollBy({ left: Number(button.dataset.galleryScroll) * placeRail.clientWidth * .8, behavior: 'smooth' });
    }));
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
    const arrivalInput = document.querySelector('#arrival');
    const departureInput = document.querySelector('#departure');
    const dateRangeTrigger = document.querySelector('#dateRangeTrigger');
    const dateRangePopover = document.querySelector('#dateRangePopover');
    const dateRangeSummary = document.querySelector('#dateRangeSummary');
    const formatShortDate = value => value
      ? new Intl.DateTimeFormat('en', { day:'numeric', month:'short', timeZone:'UTC' }).format(new Date(`${value}T00:00:00Z`))
      : '';
    function closeDateRangePopover() {
      dateRangePopover.hidden = true;
      dateRangeTrigger.setAttribute('aria-expanded', 'false');
    }
    function updateDateRangeSummary() {
      const checkIn = arrivalInput.value;
      const checkOut = departureInput.value;
      if (checkIn && checkOut) dateRangeSummary.textContent = `${formatShortDate(checkIn)} – ${formatShortDate(checkOut)}`;
      else if (checkIn) dateRangeSummary.textContent = `${formatShortDate(checkIn)} – Add check-out`;
      else dateRangeSummary.textContent = 'Add dates';
      dateRangeTrigger.classList.toggle('has-dates', Boolean(checkIn || checkOut));
    }
    dateRangeTrigger.addEventListener('click', () => {
      dateRangePopover.hidden = !dateRangePopover.hidden;
      dateRangeTrigger.setAttribute('aria-expanded', String(!dateRangePopover.hidden));
    });
    arrivalInput.addEventListener('change', () => {
      departureInput.min = arrivalInput.value;
      if (departureInput.value && departureInput.value < arrivalInput.value) departureInput.value = '';
      updateDateRangeSummary();
    });
    departureInput.addEventListener('change', updateDateRangeSummary);
    document.querySelector('#dateRangeDone').addEventListener('click', closeDateRangePopover);
    document.addEventListener('pointerdown', event => {
      if (!event.target.closest('.date-range-field')) closeDateRangePopover();
    });
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && !dateRangePopover.hidden) {
        closeDateRangePopover();
        dateRangeTrigger.focus();
      }
    });    const propertyDestinations = [
      { name:'Jatiluwih Hillside Hideaway', area:'Jatiluwih, Bali', url:'https://www.airbnb.com/rooms/958257224731528887', matches:['jatiluwih hillside hideaway','jatiluwih hillside'] },
      { name:'Sentul Eirene Villa', area:'Sentul, West Java', url:'https://www.airbnb.com/rooms/1393993223925344101', matches:['sentul eirene villa'] },
      { name:'Denpasar Family Size Villa', area:'Denpasar, Bali', url:'https://www.airbnb.com/rooms/637115227838594568', matches:['denpasar family size villa'] },
      { name:'Trust Building Jakarta', area:'Central Jakarta', url:'https://www.trustbuildingjakarta.com/', matches:['trust building jakarta'] },
      { name:'Gunung Salak Forest Glamping', area:'Selemadeg, Tabanan, Bali', url:'https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Gunung%20Salak%2C%20boleh%20minta%20informasi%3F', matches:['gunung salak','forest glamping','selemadeg','tabanan'] },
      { name:'Kerambitan Recovery Home', area:'Kerambitan, Tabanan, Bali', url:'https://wa.me/628131831832?text=Halo%20saya%20tertarik%20dengan%20Bale%20Damai%20Kerambitan%2C%20boleh%20minta%20informasi%3F', matches:['kerambitan','recovery home','tabanan'] }
    ];
    const destinationField = document.querySelector('.destination-field');
    const destinationSuggestions = document.querySelector('#propertySuggestions');
    function closeDestinationSuggestions() {
      destinationSuggestions.hidden = true;
      destination.setAttribute('aria-expanded', 'false');
    }
    function renderDestinationSuggestions() {
      const query = destination.value.trim().toLowerCase();
      const properties = query
        ? propertyDestinations.filter(property => property.name.toLowerCase().includes(query) || property.matches.some(name => name.includes(query)))
        : propertyDestinations;
      destinationSuggestions.replaceChildren();
      if (!properties.length) {
        const empty = document.createElement('div');
        empty.className = 'destination-empty';
        empty.textContent = 'No matching properties';
        destinationSuggestions.append(empty);
      } else {
        properties.forEach(property => {
          const option = document.createElement('button');
          const name = document.createElement('span');
          const area = document.createElement('small');
          option.className = 'destination-option';
          option.type = 'button';
          option.setAttribute('role', 'option');
          name.textContent = property.name;
          area.textContent = property.area;
          option.append(name, area);
          option.addEventListener('pointerdown', event => event.preventDefault());
          option.addEventListener('click', () => {
            destination.value = property.name;
            closeDestinationSuggestions();
            destination.blur();
          });
          destinationSuggestions.append(option);
        });
      }
      destinationSuggestions.hidden = false;
      destination.setAttribute('aria-expanded', 'true');
    }
    destination.addEventListener('focus', renderDestinationSuggestions);
    destination.addEventListener('input', renderDestinationSuggestions);
    destination.addEventListener('keydown', event => {
      if (event.key === 'Escape') closeDestinationSuggestions();
      if (event.key === 'ArrowDown' && !destinationSuggestions.hidden) {
        event.preventDefault();
        destinationSuggestions.querySelector('.destination-option')?.focus();
      }
    });
    destinationSuggestions.addEventListener('keydown', event => {
      const options = [...destinationSuggestions.querySelectorAll('.destination-option')];
      const index = options.indexOf(document.activeElement);
      if (event.key === 'ArrowDown' || event.key === 'ArrowUp') {
        event.preventDefault();
        const next = event.key === 'ArrowDown' ? (index + 1) % options.length : (index - 1 + options.length) % options.length;
        options[next]?.focus();
      } else if (event.key === 'Escape') {
        closeDestinationSuggestions();
        destination.focus();
      }
    });
    document.addEventListener('pointerdown', event => {
      if (!destinationField.contains(event.target)) closeDestinationSuggestions();
    });
    document.querySelector('#searchForm').addEventListener('submit', event => {
      event.preventDefault();
      const query = destination.value.trim().toLowerCase();
      const matchingProperties = propertyDestinations.filter(property => property.name.toLowerCase().includes(query) || property.matches.some(place => query.includes(place)));
      const match = matchingProperties.length === 1 ? matchingProperties[0] : null;
      if (!match) {
        showToast('Choose one of the Bale Damai properties shown in the suggestions.');
        destination.focus();
        return;
      }

      const arrivalValue = document.querySelector('#arrival').value;
      const departureValue = document.querySelector('#departure').value;
      const guestValue = document.querySelector('#guests').value.trim();
      const formatDate = (value, locale) => value
        ? new Intl.DateTimeFormat(locale, { day:'numeric', month:'long', year:'numeric', timeZone:'UTC' }).format(new Date(`${value}T00:00:00Z`))
        : '';
      const englishDates = arrivalValue && departureValue
        ? `${formatDate(arrivalValue, 'en')} to ${formatDate(departureValue, 'en')}`
        : arrivalValue ? `${formatDate(arrivalValue, 'en')} (check-out date not selected)` : 'dates not selected';
      const indonesianDates = arrivalValue && departureValue
        ? `${formatDate(arrivalValue, 'id')} sampai ${formatDate(departureValue, 'id')}`
        : arrivalValue ? `${formatDate(arrivalValue, 'id')} (tanggal check-out belum dipilih)` : 'tanggal belum dipilih';
      const guests = guestValue ? `${guestValue} ${Number(guestValue) === 1 ? 'guest' : 'guests'}` : 'guest count not specified';
      const guestsId = guestValue ? `${guestValue} tamu` : 'jumlah tamu belum disebutkan';
      const message = `Hello Bale Damai, I would like to stay at ${match.name} from ${englishDates} with ${guests}. Is this available?\n\n(Halo Bale Damai, saya ingin menginap di ${match.name} pada ${indonesianDates} untuk ${guestsId}. Apakah tersedia?)`;
      window.location.assign(`https://wa.me/628131831832?text=${encodeURIComponent(message)}`);
    });
    document.querySelectorAll('.heart').forEach(button => button.addEventListener('click', event => {
      event.stopPropagation(); const saved = button.classList.toggle('saved'); button.textContent = saved ? '♥' : '♡';
      showToast(saved ? 'Added to your saved homes' : 'Removed from your saved homes');
    }));
    document.querySelectorAll('[data-gallery]').forEach(gallery => {
      const photos = JSON.parse(gallery.dataset.gallery);
      const image = gallery.querySelector('.card-photo');
      const dots = [...gallery.querySelectorAll('.mini-gallery-dot')];
      const counter = gallery.querySelector('.mini-gallery-count');
      const name = gallery.dataset.galleryName || 'Property';
      let currentIndex = 0;
      let startPoint = null;
      gallery.tabIndex = 0;
      const showPhoto = index => {
        currentIndex = (index + photos.length) % photos.length;
        image.src = photos[currentIndex];
        image.alt = `${name} Airbnb photo ${currentIndex + 1} of ${photos.length}`;
        if (counter) counter.textContent = `${currentIndex + 1} / ${photos.length}`;
        dots.forEach((dot, dotIndex) => {
          dot.classList.toggle('is-active', dotIndex === currentIndex);
          dot.setAttribute('aria-pressed', String(dotIndex === currentIndex));
        });
      };
      showPhoto(0);
      dots.forEach((dot, index) => dot.addEventListener('click', event => {
        event.stopPropagation();
        showPhoto(index);
      }));
      gallery.addEventListener('pointerdown', event => {
        if (event.target.closest('button') || (event.pointerType === 'mouse' && event.button !== 0)) return;
        startPoint = { x:event.clientX, y:event.clientY };
        gallery.setPointerCapture?.(event.pointerId);
        gallery.classList.add('is-dragging');
      });
      gallery.addEventListener('pointerup', event => {
        gallery.classList.remove('is-dragging');
        if (!startPoint) return;
        const dx = event.clientX - startPoint.x;
        const dy = event.clientY - startPoint.y;
        startPoint = null;
        if (Math.abs(dx) > 38 && Math.abs(dx) > Math.abs(dy) * 1.2) {
          event.preventDefault();
          event.stopPropagation();
          gallery.dataset.swipedAt = String(Date.now());
          showPhoto(currentIndex + (dx < 0 ? 1 : -1));
        }
      });
      gallery.addEventListener('pointercancel', () => { startPoint = null; gallery.classList.remove('is-dragging'); });
      gallery.addEventListener('keydown', event => {
        if (event.key === 'ArrowRight' || event.key === 'ArrowLeft') {
          event.preventDefault();
          showPhoto(currentIndex + (event.key === 'ArrowRight' ? 1 : -1));
        }
      });
    });
    cards.forEach(card => {
      const open = () => window.open(card.dataset.url, '_blank', 'noopener');
      card.addEventListener('click', event => {
        const gallery = event.target.closest('.photo-gallery');
        if (gallery && Date.now() - Number(gallery.dataset.swipedAt || 0) < 500) { event.preventDefault(); return; }
        if (!event.target.closest('a,button,.card-rating')) open();
      });
      card.addEventListener('keydown', event => { if (event.target === card && (event.key === 'Enter' || event.key === ' ')) { event.preventDefault(); open(); } });
    });
    const menuButton = document.querySelector('#menuButton');
    menuButton.addEventListener('click', () => { const open = document.querySelector('#nav').classList.toggle('open'); menuButton.setAttribute('aria-expanded', String(open)); menuButton.textContent = open ? '×' : '☰'; });
    document.querySelectorAll('.nav a').forEach(link => link.addEventListener('click', () => { document.querySelector('#nav').classList.remove('open'); menuButton.setAttribute('aria-expanded','false'); menuButton.textContent='☰'; }));

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
