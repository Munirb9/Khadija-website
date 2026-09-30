<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jia Henna Atelier — Bridal & Modern Mehndi Artistry</title>
<meta name="description" content="Jia Henna Atelier — hand-drawn bridal, Arabic, Indo-Arabic and modern minimal henna. 100% natural paste. Reach out on WhatsApp, Instagram, TikTok or Facebook.">
<meta name="theme-color" content="#0F0A08">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@200;300;400;500&display=swap" rel="stylesheet">
<style>
/* ============ TOKENS ============ */
:root{
  --ink:#1A1310;
  --espresso:#0F0A08;
  --espresso-2:#181110;
  --henna:#7B3F1D;
  --henna-lt:#A85C33;
  --gold:#C9A227;
  --gold-soft:#E3C77A;
  --cream:#FBF6EF;
  --cream-2:#F2E7D9;
  --muted:#8A7A6D;
  --line:rgba(26,19,16,.12);
  --wa:#25D366;
  --ig:#E1306C;
  --tt:#0F0F0F;
  --fb:#1877F2;
  --serif:'Cormorant Garamond',Georgia,serif;
  --sans:'Jost',system-ui,sans-serif;
}
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:96px;-webkit-text-size-adjust:100%}
body{
  margin:0;background:var(--cream);color:var(--ink);
  font-family:var(--sans);font-weight:300;font-size:1rem;line-height:1.75;
  overflow-x:hidden;-webkit-font-smoothing:antialiased;
}
img,svg{display:block;max-width:100%}
a{color:inherit}
::selection{background:var(--gold);color:var(--espresso)}

::-webkit-scrollbar{width:10px}
::-webkit-scrollbar-track{background:var(--cream-2)}
::-webkit-scrollbar-thumb{background:var(--henna);border-radius:99px}

/* ============ LAYOUT HELPERS ============ */
.wrap{width:min(1240px,92vw);margin-inline:auto}
.section{padding:clamp(5rem,10vw,9rem) 0;position:relative}
.section--dark{background:var(--espresso);color:var(--cream)}
.section--tint{background:linear-gradient(180deg,var(--cream) 0%,var(--cream-2) 100%)}

.eyebrow{
  font-size:.7rem;letter-spacing:.42em;text-transform:uppercase;
  color:var(--gold);font-weight:400;margin:0 0 1.1rem;
  display:flex;align-items:center;gap:.9rem;
}
.eyebrow::before{content:"";width:38px;height:1px;background:currentColor;opacity:.6}
.eyebrow--center{justify-content:center}
.eyebrow--center::after{content:"";width:38px;height:1px;background:currentColor;opacity:.6}

h2.title{
  font-family:var(--serif);font-weight:300;
  font-size:clamp(2.2rem,5.4vw,4rem);line-height:1.05;
  letter-spacing:-.015em;margin:0 0 1.2rem;
}
h2.title em{font-style:italic;color:var(--henna)}
.section--dark h2.title em{color:var(--gold)}
.lede{font-size:1.05rem;color:var(--muted);max-width:56ch;font-weight:300}
.section--dark .lede{color:rgba(251,246,239,.62)}
.center{text-align:center}
.center .lede{margin-inline:auto}

/* ============ BUTTONS ============ */
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:.65rem;
  padding:1.05rem 2.2rem;border-radius:999px;border:1px solid transparent;
  font-family:var(--sans);font-weight:400;font-size:.72rem;
  letter-spacing:.24em;text-transform:uppercase;text-decoration:none;
  cursor:pointer;transition:all .45s cubic-bezier(.2,.8,.2,1);position:relative;overflow:hidden;
}
.btn--gold{
  background:linear-gradient(135deg,#E0BE5C,var(--gold) 45%,#A8811B);
  color:#1A1310;box-shadow:0 12px 34px -14px rgba(201,162,39,.95);
}
.btn--gold:hover{transform:translateY(-3px);box-shadow:0 22px 46px -16px rgba(201,162,39,1)}
.btn--ghost{border-color:rgba(251,246,239,.28);color:var(--cream)}
.btn--ghost:hover{border-color:var(--gold);color:var(--gold);transform:translateY(-3px)}
.btn--sm{padding:.8rem 1.5rem;font-size:.66rem}

/* ============ NAV ============ */
.nav{
  position:fixed;inset:0 0 auto 0;z-index:900;
  transition:background .5s,backdrop-filter .5s,border-color .5s,padding .5s;
  border-bottom:1px solid transparent;padding:.5rem 0;
}
.nav.is-stuck{
  background:rgba(15,10,8,.86);backdrop-filter:blur(16px);
  border-bottom-color:rgba(201,162,39,.22);
}
.nav__inner{width:min(1240px,92vw);margin-inline:auto;display:flex;align-items:center;gap:2rem;padding:.7rem 0}
.brand{display:flex;align-items:center;gap:.8rem;text-decoration:none;color:var(--cream);margin-right:auto}
.brand__mark{
  width:48px;height:48px;flex:none;border-radius:50%;
  border:1px solid rgba(201,162,39,.55);
  overflow:hidden;position:relative;flex-shrink:0;
  background:var(--espresso);
  display:grid;place-items:center;
  transition:border-color .5s,box-shadow .5s,transform .5s;
  box-shadow:0 0 0 0 rgba(201,162,39,0);
}
.brand__mark img{
  width:100%;height:100%;object-fit:cover;display:block;
  transition:transform .7s cubic-bezier(.2,.8,.2,1);
}
.brand:hover .brand__mark{
  border-color:var(--gold);
  box-shadow:0 0 0 3px rgba(201,162,39,.18);
}
.brand:hover .brand__mark img{transform:scale(1.08)}
.brand__text{display:flex;flex-direction:column;line-height:1.05}
.brand__text strong{font-family:var(--serif);font-weight:500;font-size:1.28rem}
.brand__text em{font-style:normal;font-size:.55rem;letter-spacing:.36em;text-transform:uppercase;color:var(--gold);opacity:.9}
.nav__links{display:flex;gap:2.1rem}
.nav__links a{
  text-decoration:none;color:rgba(251,246,239,.78);font-size:.72rem;
  letter-spacing:.2em;text-transform:uppercase;position:relative;padding:.3rem 0;transition:color .35s;
}
.nav__links a::after{
  content:"";position:absolute;left:0;bottom:0;height:1px;width:0;
  background:var(--gold);transition:width .4s cubic-bezier(.2,.8,.2,1);
}
.nav__links a:hover{color:var(--gold)}
.nav__links a:hover::after{width:100%}
.burger{
  display:none;background:none;border:1px solid rgba(251,246,239,.28);
  border-radius:50%;width:44px;height:44px;cursor:pointer;
  flex-direction:column;align-items:center;justify-content:center;gap:5px;
}
.burger span{display:block;width:18px;height:1.5px;background:var(--cream);transition:.35s}
.burger.is-open span:nth-child(1){transform:translateY(6.5px) rotate(45deg)}
.burger.is-open span:nth-child(2){opacity:0}
.burger.is-open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg)}

.drawer{
  position:fixed;inset:0;z-index:880;background:var(--espresso);
  display:flex;flex-direction:column;align-items:center;justify-content:center;gap:1.6rem;
  clip-path:circle(0% at 92% 5%);transition:clip-path .8s cubic-bezier(.7,0,.3,1);
}
.drawer.is-open{clip-path:circle(150% at 92% 5%)}
.drawer a{
  font-family:var(--serif);font-size:2rem;color:var(--cream);
  text-decoration:none;transition:color .3s;
}
.drawer a:hover{color:var(--gold)}

/* ============ HERO ============ */
.hero{
  position:relative;min-height:100svh;display:flex;align-items:center;
  background:radial-gradient(120% 90% at 50% 0%,#241713 0%,var(--espresso) 55%,#080605 100%);
  color:var(--cream);overflow:hidden;padding:8rem 0 5rem;
}
.hero__bg{position:absolute;inset:0;display:grid;place-items:center;pointer-events:none}
.hero__mandala{
  width:min(140vh,140vw);height:min(140vh,140vw);color:var(--gold);
  opacity:.16;animation:spin 140s linear infinite;
}
.hero__mandala--2{position:absolute;width:min(90vh,90vw);height:min(90vh,90vw);opacity:.09;animation-duration:90s;animation-direction:reverse}
@keyframes spin{to{transform:rotate(360deg)}}
.hero::after{
  content:"";position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(60% 50% at 50% 45%,transparent 20%,rgba(8,6,5,.72) 100%);
}
.hero__inner{position:relative;z-index:3;width:min(1240px,92vw);margin-inline:auto;text-align:center}
.hero .eyebrow{justify-content:center}
.hero .eyebrow::after{content:"";width:38px;height:1px;background:currentColor;opacity:.6}
.hero__title{
  font-family:var(--serif);font-weight:300;margin:0;
  font-size:clamp(3.4rem,12vw,9.5rem);line-height:.9;letter-spacing:-.03em;
}
.hero__title span{display:block;animation:rise 1.2s .1s cubic-bezier(.2,.8,.2,1) both}
.hero__title em{
  display:block;font-style:italic;color:var(--gold);
  font-size:.34em;letter-spacing:.12em;margin-top:.35em;
  animation:rise 1.2s .28s cubic-bezier(.2,.8,.2,1) both;
}
@keyframes rise{from{opacity:0;transform:translateY(46px)}to{opacity:1;transform:none}}
.hero__sub{
  max-width:60ch;margin:2rem auto 0;color:rgba(251,246,239,.66);
  font-size:clamp(.95rem,1.5vw,1.1rem);font-weight:200;
  animation:rise 1.2s .45s cubic-bezier(.2,.8,.2,1) both;
}
.hero__cta{
  display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.6rem;
  animation:rise 1.2s .6s cubic-bezier(.2,.8,.2,1) both;
}
.hero__meta{
  display:flex;gap:clamp(1.6rem,5vw,4.5rem);justify-content:center;flex-wrap:wrap;
  margin-top:4rem;padding-top:2.4rem;border-top:1px solid rgba(201,162,39,.2);
  animation:rise 1.2s .78s cubic-bezier(.2,.8,.2,1) both;
}
.hero__meta div{display:flex;flex-direction:column;align-items:center;gap:.15rem}
.hero__meta strong{font-family:var(--serif);font-size:clamp(1.6rem,3vw,2.3rem);color:var(--gold);font-weight:400;line-height:1}
.hero__meta span{font-size:.62rem;letter-spacing:.3em;text-transform:uppercase;color:rgba(251,246,239,.5)}
.hero__scroll{
  position:absolute;bottom:1.8rem;left:50%;transform:translateX(-50%);z-index:4;
  display:flex;flex-direction:column;align-items:center;gap:.6rem;
  font-size:.58rem;letter-spacing:.34em;text-transform:uppercase;
  color:rgba(251,246,239,.45);text-decoration:none;transition:color .4s;
}
.hero__scroll:hover{color:var(--gold)}
.hero__scroll span{
  width:1px;height:48px;background:linear-gradient(180deg,var(--gold),transparent);
  animation:pulse 2.4s ease-in-out infinite;
}
@keyframes pulse{0%,100%{opacity:.3;transform:scaleY(.6)}50%{opacity:1;transform:scaleY(1)}}

/* ============ MARQUEE ============ */
.marquee{
  background:var(--espresso-2);border-block:1px solid rgba(201,162,39,.18);
  padding:1.15rem 0;overflow:hidden;
}
.marquee__track{display:flex;gap:2.6rem;width:max-content;animation:marquee 34s linear infinite}
.marquee__track span{
  font-family:var(--serif);font-size:1.05rem;font-style:italic;
  color:rgba(251,246,239,.55);white-space:nowrap;
}
.marquee__track i{color:var(--gold);font-style:normal;font-size:.6rem;align-self:center}
@keyframes marquee{to{transform:translateX(-50%)}}

/* ============ ABOUT ============ */
.about__grid{display:grid;grid-template-columns:.85fr 1fr;gap:clamp(2.5rem,7vw,6rem);align-items:center}
.about__visual{position:relative;aspect-ratio:1;display:grid;place-items:center}
.about__ring{position:absolute;inset:0;border-radius:50%;border:1px solid rgba(201,162,39,.35)}
.about__ring::before{content:"";position:absolute;inset:14px;border-radius:50%;border:1px dashed rgba(201,162,39,.32)}
.about__ring--spin{animation:spin 60s linear infinite}
.about__motif{width:78%;color:var(--henna);--accent:var(--gold);opacity:.95}
.about__badge{
  position:absolute;background:var(--espresso);color:var(--cream);
  padding:.85rem 1.35rem;border-radius:999px;font-size:.6rem;
  letter-spacing:.26em;text-transform:uppercase;
  box-shadow:0 18px 40px -18px rgba(15,10,8,.9);white-space:nowrap;
  border:1px solid rgba(201,162,39,.3);
}
.about__badge b{color:var(--gold);font-weight:500}
.about__badge--1{top:6%;right:-4%;animation:float 6s ease-in-out infinite}
.about__badge--2{bottom:10%;left:-6%;animation:float 6s ease-in-out infinite 1.6s}
@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}

.about__sign{font-family:var(--serif);font-style:italic;font-size:2.1rem;color:var(--henna);margin-top:2rem;line-height:1}
.about__sign small{display:block;font-family:var(--sans);font-style:normal;font-size:.6rem;letter-spacing:.3em;text-transform:uppercase;color:var(--muted);margin-top:.6rem}
.pill-list{display:flex;flex-wrap:wrap;gap:.55rem;margin-top:1.8rem;padding:0;list-style:none}
.pill-list li{
  font-size:.66rem;letter-spacing:.16em;text-transform:uppercase;
  padding:.5rem 1rem;border:1px solid var(--line);border-radius:999px;color:var(--muted);
}

/* ============ SERVICES ============ */
.services__grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(290px,1fr));gap:1px;background:rgba(201,162,39,.22);border:1px solid rgba(201,162,39,.22)}
.card{
  background:var(--espresso);padding:clamp(1.8rem,3vw,2.6rem);
  position:relative;overflow:hidden;transition:background .5s;
  display:flex;flex-direction:column;
}
.card::before{
  content:"";position:absolute;inset:auto auto 0 0;width:100%;height:2px;
  background:linear-gradient(90deg,var(--gold),transparent);
  transform:scaleX(0);transform-origin:left;transition:transform .6s cubic-bezier(.2,.8,.2,1);
}
.card:hover{background:#1c1411}
.card:hover::before{transform:scaleX(1)}
.card__num{font-family:var(--serif);font-size:.9rem;color:var(--gold);letter-spacing:.2em;opacity:.7;display:block;margin-bottom:1.4rem}
.card h3{font-family:var(--serif);font-weight:400;font-size:1.6rem;margin:0 0 .7rem;color:var(--cream)}
.card p{margin:0;color:rgba(251,246,239,.55);font-size:.9rem;line-height:1.75;flex:1}
.card__icon{width:34px;height:34px;color:var(--gold);opacity:.85;margin-bottom:1.5rem}

.card__cta{
  display:inline-flex;align-items:center;gap:.65rem;
  margin-top:1.8rem;padding-top:1.2rem;
  border-top:1px solid rgba(201,162,39,.2);width:100%;
  font-size:.66rem;letter-spacing:.24em;text-transform:uppercase;
  color:var(--gold);text-decoration:none;font-weight:400;
  transition:color .35s,gap .35s;
}
.card__cta:hover{color:#fff;gap:1rem}
.card__cta svg{width:15px;height:15px;flex:none}

/* ============ GALLERY ============ */
.gallery__grid{
  display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-top:3.5rem;
}
.g-item{
  position:relative;aspect-ratio:1;overflow:hidden;cursor:pointer;
  background:var(--tile-bg,#FBF6EF);color:var(--tile-ink,#7B3F1D);
  --accent:var(--tile-accent,#C9A227);
  border:1px solid var(--line);
  display:grid;place-items:center;margin:0;
}
.g-item img{
  width:100%;height:100%;object-fit:cover;display:block;
  transition:transform 1s cubic-bezier(.2,.8,.2,1);
}
.g-item:hover img{transform:scale(1.08)}

.g-item figcaption{
  position:absolute;inset:auto 0 0 0;padding:1.5rem 1.2rem 1.1rem;
  background:linear-gradient(0deg,rgba(15,10,8,.92) 10%,transparent);
  color:var(--cream);transform:translateY(102%);
  transition:transform .6s cubic-bezier(.2,.8,.2,1);
  display:flex;flex-direction:column;gap:.2rem;
}
.g-item:hover figcaption{transform:none}
.g-item figcaption span{font-family:var(--serif);font-size:1.15rem}
.g-item figcaption em{font-style:normal;font-size:.58rem;letter-spacing:.26em;text-transform:uppercase;color:var(--gold)}
.g-item::after{
  content:"";position:absolute;inset:10px;border:1px solid rgba(201,162,39,0);
  transition:border-color .6s;pointer-events:none;z-index:2;
}
.g-item:hover::after{border-color:rgba(201,162,39,.45)}

.g-item__wa{
  position:absolute;top:12px;right:12px;z-index:3;
  width:36px;height:36px;border-radius:50%;background:var(--wa);color:#fff;
  display:grid;place-items:center;text-decoration:none;
  opacity:0;transform:translateY(-6px);
  transition:opacity .4s,transform .4s,box-shadow .4s;
  box-shadow:0 8px 20px -6px rgba(0,0,0,.5);
}
.g-item:hover .g-item__wa{opacity:1;transform:none}
.g-item__wa:hover{transform:scale(1.08)}
.g-item__wa svg{width:18px;height:18px}

.t-cream{--tile-bg:#FBF6EF;--tile-ink:#7B3F1D;--tile-accent:#C9A227}
.t-dark{--tile-bg:#141010;--tile-ink:#D9B44A;--tile-accent:#8B4A2B}
.t-blush{--tile-bg:#F1E1D2;--tile-ink:#8B4A2B;--tile-accent:#7B3F1D}
.t-charcoal{--tile-bg:#211A16;--tile-ink:#E3C77A;--tile-accent:#A85C33}
.t-taupe{--tile-bg:#E9DFD2;--tile-ink:#5E3A22;--tile-accent:#C9A227}
.t-wine{--tile-bg:#2A1512;--tile-ink:#E3C77A;--tile-accent:#C9A227}

/* ============ PROCESS ============ */
.steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:2.5rem;margin-top:3.5rem;position:relative}
.step{position:relative;padding-top:2.2rem;border-top:1px solid var(--line)}
.step__n{font-family:var(--serif);font-size:3rem;color:var(--gold);line-height:1;display:block;margin-bottom:.6rem;opacity:.9}
.step h4{font-family:var(--serif);font-weight:500;font-size:1.35rem;margin:0 0 .5rem}
.step p{margin:0;font-size:.88rem;color:var(--muted);line-height:1.75}
.step::after{content:"";position:absolute;top:-4px;left:0;width:7px;height:7px;background:var(--gold);transform:rotate(45deg)}

/* ============ TESTIMONIALS ============ */
.quotes{position:relative;max-width:900px;margin:3.5rem auto 0;text-align:center;min-height:250px}
.quote{
  position:absolute;inset:0;opacity:0;transform:translateY(22px);
  transition:opacity .9s,transform .9s;pointer-events:none;
}
.quote.is-active{opacity:1;transform:none;pointer-events:auto;position:relative}
.quote__mark{font-family:var(--serif);font-size:5rem;line-height:.5;color:var(--gold);opacity:.45}
.quote p{font-family:var(--serif);font-size:clamp(1.2rem,2.6vw,1.75rem);font-style:italic;line-height:1.6;color:var(--cream);margin:1.5rem 0 2rem;font-weight:300}
.quote cite{font-style:normal;font-size:.66rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);display:block}
.quote cite small{display:block;color:rgba(251,246,239,.4);letter-spacing:.18em;margin-top:.45rem;font-size:.6rem}
.quote-dots{display:flex;gap:.7rem;justify-content:center;margin-top:2.5rem}
.quote-dots button{width:9px;height:9px;border-radius:50%;border:1px solid var(--gold);background:transparent;cursor:pointer;padding:0;transition:.4s}
.quote-dots button.is-active{background:var(--gold);transform:scale(1.25)}

/* ============ CONTACT / SOCIAL ============ */
.social-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:1.2rem;margin-top:3.5rem;
}
.social-card{
  display:flex;flex-direction:column;align-items:center;gap:.9rem;
  padding:2.4rem 1.5rem;border:1px solid var(--line);
  background:var(--cream);text-decoration:none;color:var(--ink);
  transition:transform .5s cubic-bezier(.2,.8,.2,1),border-color .5s,box-shadow .5s;
  position:relative;overflow:hidden;text-align:center;
}
.social-card::before{
  content:"";position:absolute;inset:auto 0 0 0;height:3px;
  background:var(--brand,var(--gold));
  transform:scaleX(0);transform-origin:left;
  transition:transform .6s cubic-bezier(.2,.8,.2,1);
}
.social-card:hover{transform:translateY(-6px);border-color:var(--brand,var(--gold));box-shadow:0 30px 60px -40px rgba(26,19,16,.5)}
.social-card:hover::before{transform:scaleX(1)}
.social-card__ic{
  width:60px;height:60px;border-radius:50%;
  display:grid;place-items:center;
  background:var(--brand,var(--gold));color:#fff;
  transition:transform .5s;flex:none;
}
.social-card:hover .social-card__ic{transform:rotate(-8deg) scale(1.06)}
.social-card__ic svg{width:28px;height:28px}
.social-card h4{font-family:var(--serif);font-size:1.4rem;font-weight:500;margin:0}
.social-card p{margin:0;font-size:.62rem;letter-spacing:.28em;text-transform:uppercase;color:var(--muted)}
.social-card__handle{font-size:.86rem;color:var(--henna);word-break:break-all}
.social-card--wa{--brand:var(--wa)}
.social-card--ig{--brand:var(--ig)}
.social-card--tt{--brand:var(--tt)}
.social-card--fb{--brand:var(--fb)}

/* Contact intro block */
.contact-note{
  max-width:64ch;margin:2.4rem auto 0;text-align:center;
  font-size:.95rem;color:var(--muted);
}
.contact-note strong{color:var(--ink);font-weight:400}

/* Availability strip below cards */
.avail{
  display:flex;flex-wrap:wrap;gap:1rem 3rem;justify-content:center;
  margin-top:3.5rem;padding-top:2.4rem;
  border-top:1px solid var(--line);
  font-size:.68rem;letter-spacing:.24em;text-transform:uppercase;color:var(--muted);
}
.avail span{display:flex;align-items:center;gap:.7rem}
.avail span::before{content:"";width:6px;height:6px;background:var(--gold);transform:rotate(45deg)}

/* ============ FOOTER ============ */
footer{background:var(--espresso);color:rgba(251,246,239,.6);padding:clamp(3.5rem,7vw,5.5rem) 0 2rem}
.foot__top{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:3rem;padding-bottom:3rem;border-bottom:1px solid rgba(201,162,39,.18)}
.foot__brand{font-family:var(--serif);font-size:2rem;color:var(--cream);margin:0 0 1rem;line-height:1.1}
.foot__brand em{font-style:italic;color:var(--gold);display:block;font-size:.42em;letter-spacing:.1em;margin-top:.3rem}
.foot h5{font-size:.62rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin:0 0 1.3rem;font-weight:400}
.foot ul{list-style:none;padding:0;margin:0;display:grid;gap:.7rem}
.foot a{text-decoration:none;color:rgba(251,246,239,.6);font-size:.9rem;transition:color .3s}
.foot a:hover{color:var(--gold)}
.foot__bottom{display:flex;justify-content:space-between;flex-wrap:wrap;gap:1rem;padding-top:1.8rem;font-size:.7rem;letter-spacing:.14em;color:rgba(251,246,239,.32)}

/* ============ LIGHTBOX ============ */
.lightbox{
  position:fixed;inset:0;z-index:1000;background:rgba(8,6,5,.94);
  backdrop-filter:blur(10px);display:grid;place-items:center;padding:5vw;
  opacity:0;pointer-events:none;transition:opacity .5s;
}
.lightbox.is-open{opacity:1;pointer-events:auto}
.lightbox__box{
  width:min(660px,92vw);aspect-ratio:1;background:#000;
  display:grid;place-items:center;
  transform:scale(.9);transition:transform .55s cubic-bezier(.2,.8,.2,1);
  position:relative;overflow:hidden;box-shadow:0 40px 100px -40px rgba(0,0,0,.9);
}
.lightbox.is-open .lightbox__box{transform:scale(1)}
.lightbox__box img{width:100%;height:100%;object-fit:cover;display:block}
.lightbox__cap{
  position:absolute;bottom:0;left:0;right:0;text-align:center;
  color:var(--cream);font-family:var(--serif);font-size:1.35rem;
  padding:4rem 1rem 1.6rem;
  background:linear-gradient(0deg,rgba(8,6,5,.96) 30%,transparent);
  display:flex;flex-direction:column;align-items:center;gap:1rem;
}
.lightbox__cap em{display:block;font-family:var(--sans);font-style:normal;font-size:.6rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin-top:.4rem}
.lightbox__cta{
  display:inline-flex;align-items:center;gap:.65rem;
  padding:.9rem 1.7rem;border-radius:999px;
  background:var(--wa);color:#fff;text-decoration:none;
  font-family:var(--sans);font-size:.66rem;letter-spacing:.22em;
  text-transform:uppercase;font-weight:400;
  box-shadow:0 14px 32px -12px rgba(37,211,102,.9);
  transition:transform .4s,box-shadow .4s;
}
.lightbox__cta:hover{transform:translateY(-3px);box-shadow:0 22px 44px -14px rgba(37,211,102,1)}
.lightbox__cta svg{width:16px;height:16px;flex:none}
.lightbox__close{
  position:absolute;top:1.5rem;right:1.5rem;width:48px;height:48px;border-radius:50%;
  border:1px solid rgba(201,162,39,.5);background:rgba(0,0,0,.35);color:var(--gold);
  font-size:1.4rem;cursor:pointer;transition:.35s;line-height:1;z-index:4;
}
.lightbox__close:hover{background:var(--gold);color:var(--espresso);transform:rotate(90deg)}

/* ============ REVEAL ============ */
.reveal{opacity:0;transform:translateY(38px);transition:opacity 1s cubic-bezier(.2,.8,.2,1),transform 1s cubic-bezier(.2,.8,.2,1)}
.reveal.in{opacity:1;transform:none}

/* ============ RESPONSIVE ============ */
@media(max-width:1080px){
  .nav__links{display:none}
  .burger{display:flex}
  .nav .btn--sm{display:none}
}
@media(max-width:900px){
  .about__grid{grid-template-columns:1fr;gap:4rem}
  .about__visual{max-width:420px;margin-inline:auto}
  .gallery__grid{grid-template-columns:repeat(2,1fr)}
  .foot__top{grid-template-columns:1fr 1fr;gap:2.5rem}
}
@media(max-width:560px){
  .gallery__grid{gap:9px}
  .hero__meta{gap:1.8rem}
  .foot__top{grid-template-columns:1fr}
  .about__badge--1{right:0}
  .about__badge--2{left:0}
  .social-grid{grid-template-columns:1fr}
}
@media(prefers-reduced-motion:reduce){
  *,*::before,*::after{animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}
  html{scroll-behavior:auto}
}
</style>
</head>
<body>

<!-- ================= SVG DEFS ================= -->
<svg width="0" height="0" style="position:absolute;overflow:hidden" aria-hidden="true" focusable="false">
  <defs>
    <!-- Brand icons -->
    <symbol id="i-whatsapp" viewBox="0 0 24 24">
      <path fill="currentColor" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38a9.87 9.87 0 0 0 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.7 8.23-8.24 8.23-1.48 0-2.93-.39-4.19-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.2 8.2 0 0 1-1.26-4.38c0-4.54 3.7-8.23 8.24-8.23m-3.8 3.66c-.2 0-.53.08-.81.38-.27.3-1.04 1.02-1.04 2.49s1.06 2.89 1.21 3.09c.15.2 2.09 3.2 5.07 4.48.71.31 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.29.18-1.42-.08-.13-.28-.2-.58-.35-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.48-.5-.67-.51-.17-.01-.37-.01-.57-.01Z"/>
    </symbol>
    <symbol id="i-instagram" viewBox="0 0 24 24">
      <path fill="currentColor" d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 0 1-1.38-.9 3.7 3.7 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16Zm0 1.8c-3.14 0-3.5.01-4.74.07-1.14.05-1.76.24-2.17.4-.55.21-.94.47-1.35.88-.41.41-.67.8-.88 1.35-.16.41-.35 1.03-.4 2.17-.06 1.24-.07 1.6-.07 4.74s.01 3.5.07 4.74c.05 1.14.24 1.76.4 2.17.21.55.47.94.88 1.35.41.41.8.67 1.35.88.41.16 1.03.35 2.17.4 1.24.06 1.6.07 4.74.07s3.5-.01 4.74-.07c1.14-.05 1.76-.24 2.17-.4.55-.21.94-.47 1.35-.88.41-.41.67-.8.88-1.35.16-.41.35-1.03.4-2.17.06-1.24.07-1.6.07-4.74s-.01-3.5-.07-4.74c-.05-1.14-.24-1.76-.4-2.17a3.6 3.6 0 0 0-.88-1.35 3.6 3.6 0 0 0-1.35-.88c-.41-.16-1.03-.35-2.17-.4-1.24-.06-1.6-.07-4.74-.07Zm0 3.06a5.14 5.14 0 1 1 0 10.28 5.14 5.14 0 0 1 0-10.28Zm0 1.8a3.34 3.34 0 1 0 0 6.68 3.34 3.34 0 0 0 0-6.68Zm5.34-3.2a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4Z"/>
    </symbol>
    <symbol id="i-tiktok" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.86a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.29Z"/>
    </symbol>
    <symbol id="i-facebook" viewBox="0 0 24 24">
      <path fill="currentColor" d="M24 12.07C24 5.44 18.63 0 12 0S0 5.44 0 12.07c0 6 4.39 10.97 10.13 11.87v-8.4H7.08v-3.47h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.95h-1.51c-1.49 0-1.96.93-1.96 1.87v2.25h3.33l-.53 3.47h-2.8v8.4C19.61 23.04 24 18.07 24 12.07Z"/>
    </symbol>

    <!-- Motifs -->
    <path id="d-petalA" d="M200 28 C218 48 218 66 200 74 C182 66 182 48 200 28 Z"/>
    <path id="d-petalB" d="M200 74 C214 88 214 102 200 114 C186 102 186 88 200 74 Z"/>
    <path id="d-petalC" d="M200 114 C210 130 210 148 200 162 C190 148 190 130 200 114 Z"/>
    <path id="d-petalBloom" d="M200 92 C236 128 236 172 200 198 C164 172 164 128 200 92 Z"/>
    <path id="d-leaf" d="M0 0 C22 -20 52 -14 62 0 C52 14 22 20 0 0 Z"/>

    <g id="d-mandala" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round">
      <circle cx="200" cy="200" r="196" opacity=".35"/>
      <circle cx="200" cy="200" r="188" stroke-width="3" stroke-linecap="round" stroke-dasharray="0.1 24.6" opacity=".85"/>
      <circle cx="200" cy="200" r="172"/>
      <circle cx="200" cy="200" r="164" stroke-width="2.4" stroke-dasharray="2 6"/>
      <g stroke-width="1.5">
        <use href="#d-petalA"/><use href="#d-petalA" transform="rotate(22.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(45 200 200)"/><use href="#d-petalA" transform="rotate(67.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(90 200 200)"/><use href="#d-petalA" transform="rotate(112.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(135 200 200)"/><use href="#d-petalA" transform="rotate(157.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(180 200 200)"/><use href="#d-petalA" transform="rotate(202.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(225 200 200)"/><use href="#d-petalA" transform="rotate(247.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(270 200 200)"/><use href="#d-petalA" transform="rotate(292.5 200 200)"/>
        <use href="#d-petalA" transform="rotate(315 200 200)"/><use href="#d-petalA" transform="rotate(337.5 200 200)"/>
      </g>
      <circle cx="200" cy="200" r="142" stroke="var(--accent,#C9A227)" stroke-width="5" stroke-linecap="round" stroke-dasharray="0.1 37.1"/>
      <circle cx="200" cy="200" r="126"/>
      <g stroke-width="1.3">
        <use href="#d-petalB"/><use href="#d-petalB" transform="rotate(45 200 200)"/>
        <use href="#d-petalB" transform="rotate(90 200 200)"/><use href="#d-petalB" transform="rotate(135 200 200)"/>
        <use href="#d-petalB" transform="rotate(180 200 200)"/><use href="#d-petalB" transform="rotate(225 200 200)"/>
        <use href="#d-petalB" transform="rotate(270 200 200)"/><use href="#d-petalB" transform="rotate(315 200 200)"/>
      </g>
      <circle cx="200" cy="200" r="86"/>
      <g stroke-width="1.2">
        <use href="#d-petalC"/><use href="#d-petalC" transform="rotate(30 200 200)"/>
        <use href="#d-petalC" transform="rotate(60 200 200)"/><use href="#d-petalC" transform="rotate(90 200 200)"/>
        <use href="#d-petalC" transform="rotate(120 200 200)"/><use href="#d-petalC" transform="rotate(150 200 200)"/>
        <use href="#d-petalC" transform="rotate(180 200 200)"/><use href="#d-petalC" transform="rotate(210 200 200)"/>
        <use href="#d-petalC" transform="rotate(240 200 200)"/><use href="#d-petalC" transform="rotate(270 200 200)"/>
        <use href="#d-petalC" transform="rotate(300 200 200)"/><use href="#d-petalC" transform="rotate(330 200 200)"/>
      </g>
      <circle cx="200" cy="200" r="52" stroke="var(--accent,#C9A227)" stroke-width="5" stroke-linecap="round" stroke-dasharray="0.1 20.3"/>
      <circle cx="200" cy="200" r="34"/>
      <circle cx="200" cy="200" r="9" fill="var(--accent,#C9A227)" stroke="none"/>
    </g>

    <g id="d-geo" fill="none" stroke="currentColor" stroke-width="1.4">
      <circle cx="200" cy="200" r="184" opacity=".4"/>
      <circle cx="200" cy="200" r="176" stroke="var(--accent,#C9A227)" stroke-width="5" stroke-linecap="round" stroke-dasharray="0.1 45.9"/>
      <rect x="72" y="72" width="256" height="256"/>
      <rect x="72" y="72" width="256" height="256" transform="rotate(45 200 200)"/>
      <circle cx="200" cy="200" r="150"/>
      <rect x="110" y="110" width="180" height="180" transform="rotate(22.5 200 200)"/>
      <rect x="110" y="110" width="180" height="180" transform="rotate(67.5 200 200)"/>
      <circle cx="200" cy="200" r="76"/>
      <circle cx="200" cy="200" r="52" stroke="var(--accent,#C9A227)" stroke-width="5" stroke-linecap="round" stroke-dasharray="0.1 20.3"/>
      <circle cx="200" cy="200" r="22"/>
      <circle cx="200" cy="200" r="7" fill="var(--accent,#C9A227)" stroke="none"/>
    </g>

    <g id="d-bloom" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round">
      <g stroke-width="1.7">
        <use href="#d-petalBloom"/><use href="#d-petalBloom" transform="rotate(45 200 200)"/>
        <use href="#d-petalBloom" transform="rotate(90 200 200)"/><use href="#d-petalBloom" transform="rotate(135 200 200)"/>
        <use href="#d-petalBloom" transform="rotate(180 200 200)"/><use href="#d-petalBloom" transform="rotate(225 200 200)"/>
        <use href="#d-petalBloom" transform="rotate(270 200 200)"/><use href="#d-petalBloom" transform="rotate(315 200 200)"/>
      </g>
      <circle cx="200" cy="200" r="70"/>
      <circle cx="200" cy="200" r="52" stroke="var(--accent,#C9A227)" stroke-width="6" stroke-linecap="round" stroke-dasharray="0.1 20.3"/>
      <circle cx="200" cy="200" r="30"/>
      <circle cx="200" cy="200" r="13" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="200" r="196" opacity=".35"/>
      <circle cx="200" cy="200" r="186" stroke-width="2.6" stroke-dasharray="2 7"/>
    </g>

    <g id="d-vine" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round">
      <path d="M200 22 C200 130 200 270 200 378"/>
      <circle cx="200" cy="26" r="10" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="374" r="10" fill="var(--accent,#C9A227)" stroke="none"/>
      <g>
        <use href="#d-leaf" transform="translate(200 96) rotate(-38)"/>
        <use href="#d-leaf" transform="translate(200 96) rotate(218)"/>
        <use href="#d-leaf" transform="translate(200 178) rotate(-38)"/>
        <use href="#d-leaf" transform="translate(200 178) rotate(218)"/>
        <use href="#d-leaf" transform="translate(200 260) rotate(-38)"/>
        <use href="#d-leaf" transform="translate(200 260) rotate(218)"/>
      </g>
      <circle cx="200" cy="60" r="26"/>
      <circle cx="200" cy="60" r="9" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="137" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="219" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="301" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="200" cy="340" r="24"/>
      <circle cx="200" cy="340" r="8" fill="var(--accent,#C9A227)" stroke="none"/>
    </g>

    <g id="d-arabic" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
      <path d="M40 340 C120 300 130 210 200 190 C270 170 300 110 360 60"/>
      <path d="M200 190 C210 150 180 120 150 96"/>
      <path d="M200 190 C250 210 300 200 340 230"/>
      <circle cx="360" cy="60" r="14"/>
      <circle cx="360" cy="60" r="5" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="150" cy="96" r="11"/>
      <circle cx="150" cy="96" r="4" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="340" cy="230" r="11"/>
      <circle cx="340" cy="230" r="4" fill="var(--accent,#C9A227)" stroke="none"/>
      <use href="#d-leaf" transform="translate(120 260) rotate(-70) scale(.7)"/>
      <use href="#d-leaf" transform="translate(96 300) rotate(160) scale(.6)"/>
      <use href="#d-leaf" transform="translate(268 178) rotate(-30) scale(.65)"/>
      <circle cx="60" cy="316" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="176" cy="196" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="288" cy="128" r="6" fill="var(--accent,#C9A227)" stroke="none"/>
      <circle cx="330" cy="88" r="5" fill="var(--accent,#C9A227)" stroke="none"/>
      <path d="M40 340 C60 360 90 366 120 358" stroke-width="1.4" opacity=".7"/>
    </g>
  </defs>
</svg>

<!-- ================= NAV ================= -->
<header class="nav" id="nav">
  <div class="nav__inner">
    <a class="brand" href="#top">
  <span class="brand__mark">
    <img src="{{ asset('img/logo.png') }}" alt="Jia Henna Atelier logo">
  </span>
  <span class="brand__text">
    <strong>Jia</strong>
    <em>Henna Atelier</em>
  </span>
</a>    
    <nav class="nav__links">
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#gallery">Gallery</a>
      {{-- <a href="#contact">Contact</a> --}}
    </nav>
    <a href="#contact" class="btn btn--gold btn--sm">Get in Touch</a>
    <button class="burger" id="burger" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<div class="drawer" id="drawer">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#gallery">Gallery</a>
  <a href="#contact">Contact</a>
</div>

<main id="top">

<!-- ================= HERO ================= -->
<section class="hero">
  <div class="hero__bg" aria-hidden="true">
    <svg class="hero__mandala" viewBox="0 0 400 400"><use href="#d-mandala"/></svg>
    <svg class="hero__mandala hero__mandala--2" viewBox="0 0 400 400"><use href="#d-mandala"/></svg>
  </div>

  <div class="hero__inner">
    <p class="eyebrow">Bridal · Arabic · Indo-Arabic · Minimal</p>
    <h1 class="hero__title">
      <span>Jia</span>
      <em>Henna Atelier</em>
    </h1>
    <p class="hero__sub">
      Ancient art, modern elegance. Every design is drawn freehand — no stencils, no shortcuts —
      turning skin into a keepsake for brides, celebrations, and everyday beauty.
    </p>
    <div class="hero__cta">
      <a href="#contact" class="btn btn--gold">Get in Touch</a>
      <a href="#gallery" class="btn btn--ghost">View Gallery</a>
    </div>
    <div class="hero__meta">
      <div><strong>8+</strong><span>Years of Artistry</span></div>
      <div><strong>1.2k+</strong><span>Happy Clients</span></div>
      <div><strong>100%</strong><span>Natural Henna</span></div>
    </div>
  </div>

  <a class="hero__scroll" href="#about"><span></span>Scroll</a>
</section>

<!-- ================= MARQUEE ================= -->
<div class="marquee" aria-hidden="true">
  <div class="marquee__track">
    <span>Bridal Mehndi</span><i>✦</i>
    <span>Arabic Florals</span><i>✦</i>
    <span>Indo-Arabic Fusion</span><i>✦</i>
    <span>Minimal Modern</span><i>✦</i>
    <span>Eid &amp; Celebrations</span><i>✦</i>
    <span>Private Workshops</span><i>✦</i>
    <span>Bridal Mehndi</span><i>✦</i>
    <span>Arabic Florals</span><i>✦</i>
    <span>Indo-Arabic Fusion</span><i>✦</i>
    <span>Minimal Modern</span><i>✦</i>
    <span>Eid &amp; Celebrations</span><i>✦</i>
    <span>Private Workshops</span><i>✦</i>
  </div>
</div>

<!-- ================= ABOUT ================= -->
<section class="section" id="about">
  <div class="wrap">
    <div class="about__grid">
      <div class="about__visual reveal">
        <div class="about__ring about__ring--spin" aria-hidden="true"></div>
        <div class="about__ring" aria-hidden="true"></div>
        <svg class="about__motif" viewBox="0 0 400 400" role="img" aria-label="Henna mandala artwork">
          <use href="#d-mandala"/>
        </svg>
        <span class="about__badge about__badge--1"><b>100%</b> Natural Paste</span>
        <span class="about__badge about__badge--2"><b>Freehand</b> Every Line</span>
      </div>

      <div class="reveal">
        <p class="eyebrow">The Artist</p>
        <h2 class="title">Where tradition<br>meets a <em>modern hand</em></h2>
        <p class="lede">
          I'm Jia — a henna artist with over eight years of practice, thousands of hands,
          and one belief: henna should feel personal.
        </p>
        <p class="lede" style="margin-top:1.1rem">
          Trained in classical Indo-Arabic technique and endlessly inspired by Moroccan geometry
          and contemporary minimalism, I mix my own organic paste fresh for every appointment —
          deep, rich, and safe for all skin types.
        </p>
        <ul class="pill-list">
          <li>Certified Natural Henna</li>
          <li>Vegan &amp; Chemical-Free</li>
          <li>Freehand Specialist</li>
          <li>Travels to You</li>
        </ul>
        <p class="about__sign">
          Jia
          <small>Founder &amp; Lead Artist</small>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="section section--dark" id="services">
  <div class="wrap">
    <div class="center reveal">
      <p class="eyebrow eyebrow--center">What I Offer</p>
      <h2 class="title">Signature <em>Services</em></h2>
      <p class="lede">From full bridal artistry to a quick minimalist accent — every booking is a private, unhurried session. Tap any service to start a conversation on WhatsApp.</p>
    </div>

    <div class="services__grid reveal" style="margin-top:3.5rem">
      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-bloom"/></svg>
        <span class="card__num">01</span>
        <h3>Bridal Mehndi</h3>
        <p>Full hands and feet with intricate detailing, portraits, and custom motifs woven around your love story.</p>
        <a class="card__cta" href="#" data-service="Bridal Mehndi" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-arabic"/></svg>
        <span class="card__num">02</span>
        <h3>Arabic &amp; Indo-Arabic</h3>
        <p>Flowing florals, bold trailing vines and negative space — the style that photographs beautifully.</p>
        <a class="card__cta" href="#" data-service="Arabic & Indo-Arabic" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-geo"/></svg>
        <span class="card__num">03</span>
        <h3>Parties &amp; Events</h3>
        <p>Weddings, Eid, henna nights, birthdays and corporate events. I bring the setup — you bring the guests.</p>
        <a class="card__cta" href="#" data-service="Party & Event Henna" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-vine"/></svg>
        <span class="card__num">04</span>
        <h3>Minimal &amp; Modern</h3>
        <p>Delicate wrist bands, finger florals and tiny motifs — subtle enough for the office on Monday.</p>
        <a class="card__cta" href="#" data-service="Minimal & Modern" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-mandala"/></svg>
        <span class="card__num">05</span>
        <h3>Private Workshops</h3>
        <p>Learn cone control, line work and pattern building in a session.</p>
        <a class="card__cta" href="#" data-service="Private Workshop" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-bloom"/></svg>
        <span class="card__num">06</span>
        <h3>Henna Cones &amp; Care</h3>
        <p>Handmade organic cones, aftercare balm and starter kits — delivered, with a full stain guide.</p>
        <a class="card__cta" href="#" data-service="Henna Cones & Care" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

            <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-mandala"/></svg>
        <span class="card__num">07</span>
        <h3>Custom Name &amp; Portrait Henna</h3>
        <p>Initials, wedding dates, the coordinates of your first home, or a hand-drawn portrait — woven freehand into your chosen pattern as a personal signature.</p>
        <a class="card__cta" href="#" data-service="Custom Name & Portrait Henna" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>

      <article class="card">
        <svg class="card__icon" viewBox="0 0 400 400" aria-hidden="true"><use href="#d-geo"/></svg>
        <span class="card__num">08</span>
        <h3>Home Visits &amp; Mobile Studio</h3>
        <p>Can't come to the studio? I bring the full setup to your home, hotel room or venue — fresh paste, lighting, cushions and the same unhurried session, wherever you are.</p>
        <a class="card__cta" href="#" data-service="Home Visit / Mobile Studio" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true"><use href="#i-whatsapp"/></svg>
          Interested — Consult on WhatsApp
        </a>
      </article>
      
    </div>
  </div>
</section>

<!-- ================= GALLERY ================= -->
<section class="section section--tint" id="gallery">
  <div class="wrap">
    <div class="center reveal">
      <p class="eyebrow eyebrow--center">Portfolio</p>
      <h2 class="title">A Gallery of <em>Hand-Drawn</em> Art</h2>
      <p class="lede">Tap any design to view it in full — then tap the WhatsApp button inside to ask about booking that exact look.</p>
    </div>

    <div class="gallery__grid reveal" id="gallery-grid">

      <figure class="g-item t-cream"
              data-img="{{ asset('img/1.jpeg') }}"
              data-title="Rosette Crown"
              data-sub="Back of hand · 2 hrs"
              data-tone="t-cream">
        <a class="g-item__wa" href="#" data-inquire="Rosette Crown" target="_blank" rel="noopener" aria-label="Ask about Rosette Crown on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/1.jpeg') }}" alt="Rosette Crown henna design on a full hand by Jia" loading="lazy">
        <figcaption><span>Rosette Crown</span><em>Back of hand · 2 hrs</em></figcaption>
      </figure>

      <figure class="g-item t-dark"
              data-img="{{ asset('img/2.jpeg') }}"
              data-title="Sunflower Trail"
              data-sub="Forearm · 2 hrs"
              data-tone="t-dark">
        <a class="g-item__wa" href="#" data-inquire="Sunflower Trail" target="_blank" rel="noopener" aria-label="Ask about Sunflower Trail on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/2.png') }}" alt="Trailing Arabic henna design with flowing vines" loading="lazy">
        <figcaption><span>Sunflower Trail</span><em>Forearm · 2 hrs</em></figcaption>
      </figure>

      <figure class="g-item t-blush"
              data-img="{{ asset('img/3.jpeg') }}"
              data-title="Ankle Bloom"
              data-sub="Foot to ankle · 2 hrs"
              data-tone="t-blush">
        <a class="g-item__wa" href="#" data-inquire="Ankle Bloom" target="_blank" rel="noopener" aria-label="Ask about Ankle Bloom on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/10.png') }}" alt="Ankle Bloom henna design in Indo-Arabic style" loading="lazy">
        <figcaption><span>Ankle Bloom</span><em>Foot to ankle · 2 hrs</em></figcaption>
      </figure>

      <figure class="g-item t-charcoal"
              data-img="{{ asset('img/4.png') }}"
              data-title="Meadow Pair"
              data-sub="Both legs · 3 hrs"
              data-tone="t-charcoal">
        <a class="g-item__wa" href="#" data-inquire="Meadow Pair" target="_blank" rel="noopener" aria-label="Ask about Meadow Pair on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/4.png') }}" alt="Geometric Meadow Pair henna design" loading="lazy">
        <figcaption><span>Meadow Pair</span><em>Both legs · 3 hrs</em></figcaption>
      </figure>

      <figure class="g-item t-taupe"
              data-img="{{ asset('img/5.jpeg') }}"
              data-title="Saffron Flame"
              data-sub="Forearm · 2 hrs"
              data-tone="t-taupe">
        <a class="g-item__wa" href="#" data-inquire="Saffron Flame" target="_blank" rel="noopener" aria-label="Ask about Saffron Flame on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/5.jpeg') }}" alt="Minimal Saffron Flame henna design on wrist" loading="lazy">
        <figcaption><span>Saffron Flame</span><em>Forearm · 2 hrs</em></figcaption>
      </figure>

      <figure class="g-item t-wine"
              data-img="{{ asset('img/6.jpeg') }}"
              data-title="Ebon Scroll"
              data-sub="Back of hand · 90 min"
              data-tone="t-wine">
        <a class="g-item__wa" href="#" data-inquire="Ebon Scroll" target="_blank" rel="noopener" aria-label="Ask about Ebon Scroll on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/6.jpeg') }}" alt="Ebon Scroll henna design on feet" loading="lazy">
        <figcaption><span>Ebon Scroll</span><em>Back of hand · 90 min</em></figcaption>
      </figure>

      <figure class="g-item t-cream"
              data-img="{{ asset('img/7.jpeg') }}"
              data-title="Coral Cascade"
              data-sub="Wrist & forearm · 1 hr"
              data-tone="t-cream">
        <a class="g-item__wa" href="#" data-inquire="Coral Cascade" target="_blank" rel="noopener" aria-label="Ask about Coral Cascade on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/7.jpeg') }}" alt="Modern Coral Cascade henna design" loading="lazy">
        <figcaption><span>Coral Cascade</span><em>Wrist & forearm · 1 hr</em></figcaption>
      </figure>

      <figure class="g-item t-dark"
              data-img="{{ asset('img/8.jpeg') }}"
              data-title="Whisper Vow"
              data-sub="Both hands · 45 min"
              data-tone="t-dark">
        <a class="g-item__wa" href="#" data-inquire="Whisper Vow" target="_blank" rel="noopener" aria-label="Ask about Whisper Vow on WhatsApp">
          <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        </a>
        <img src="{{ asset('img/8.jpeg') }}" alt="Whisper Vow Arabic henna design" loading="lazy">
        <figcaption><span>Whisper Vow</span><em>Both hands · 45 min</em></figcaption>
      </figure>

    </div>
  </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="section" id="process">
  <div class="wrap">
    <div class="center reveal">
      <p class="eyebrow eyebrow--center">How It Works</p>
      <h2 class="title">Four Calm <em>Steps</em></h2>
    </div>

    <div class="steps reveal">
      <div class="step">
        <span class="step__n">01</span>
        <h4>Consult</h4>
        <p>Message me on WhatsApp, Instagram or TikTok — tell me the occasion and share inspiration photos.</p>
      </div>
      <div class="step">
        <span class="step__n">02</span>
        <h4>Design</h4>
        <p>I sketch a custom pattern for your hands or feet — proportions, flow and motifs all mapped out.</p>
      </div>
      <div class="step">
        <span class="step__n">03</span>
        <h4>Application</h4>
        <p>Fresh organic paste, applied freehand in a relaxed, unhurried session. Bring a podcast, settle in.</p>
      </div>
      <div class="step">
        <span class="step__n">04</span>
        <h4>Aftercare</h4>
        <p>You leave with a full aftercare guide and my personal tips for the deepest, longest-lasting stain.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section class="section section--dark">
  <div class="wrap">
    <div class="center reveal">
      <p class="eyebrow eyebrow--center">Kind Words</p>
      <h2 class="title">Loved by <em>Brides &amp; Beyond</em></h2>
    </div>

    <div class="quotes reveal">
      <blockquote class="quote is-active">
        <div class="quote__mark">“</div>
        <p>Jia did my full bridal henna and I genuinely cried when I saw it. The detail was unreal and the stain came out darker than any henna I've ever had.</p>
        <cite>Amira S.<small>Bride · June 2024</small></cite>
      </blockquote>

      <blockquote class="quote">
        <div class="quote__mark">“</div>
        <p>We booked her for our Eid party and she handled 30 guests without ever looking rushed. Everyone kept asking who she was. Absolute professional.</p>
        <cite>Yasmin R.<small>Event Host · Eid 2024</small></cite>
      </blockquote>

      <blockquote class="quote">
        <div class="quote__mark">“</div>
        <p>I wanted something tiny and elegant for my wrist — she nailed it in fifteen minutes and it lasted three weeks. My go-to now.</p>
        <cite>Leila M.<small>Regular Client</small></cite>
      </blockquote>

      <blockquote class="quote">
        <div class="quote__mark">“</div>
        <p>The workshop was worth every penny. I went from zero cone control to drawing full florals in one afternoon. Jia is a wonderful teacher.</p>
        <cite>Nadia K.<small>Workshop Student</small></cite>
      </blockquote>
    </div>

    <div class="quote-dots" id="quote-dots" role="tablist" aria-label="Testimonials"></div>
  </div>
</section>

<!-- ================= CONTACT / SOCIAL ================= -->
<section class="section" id="contact">
  <div class="wrap">
    <div class="center reveal">
      <p class="eyebrow eyebrow--center">Contact Us</p>
      <h2 class="title">Reach Out <em>Your Way</em></h2>
      <p class="lede">Pick the channel you prefer — I reply fastest on WhatsApp, and I share all my latest work on Instagram &amp; TikTok.</p>
    </div>

    <p class="contact-note reveal">
      Have a date in mind? <strong>WhatsApp</strong> is the quickest way to check availability.
      For inspiration and behind-the-scenes, follow along on <strong>Instagram</strong> and <strong>TikTok</strong>.
    </p>

    <div class="social-grid reveal" id="social-grid">

      <!-- WhatsApp -->
      <a class="social-card social-card--wa" id="card-whatsapp" href="#" target="_blank" rel="noopener">
        <span class="social-card__ic"><svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg></span>
        <h4>WhatsApp</h4>
        <p>Fastest Reply</p>
        <span class="social-card__handle" id="handle-whatsapp">Chat now →</span>
      </a>

      <!-- Instagram -->
      <a class="social-card social-card--ig" id="card-instagram" href="#" target="_blank" rel="noopener">
        <span class="social-card__ic"><svg viewBox="0 0 24 24"><use href="#i-instagram"/></svg></span>
        <h4>Instagram</h4>
        <p>Daily Inspiration</p>
        <span class="social-card__handle" id="handle-instagram">@Jia.henna</span>
      </a>

      <!-- TikTok -->
      <a class="social-card social-card--tt" id="card-tiktok" href="#" target="_blank" rel="noopener">
        <span class="social-card__ic"><svg viewBox="0 0 24 24"><use href="#i-tiktok"/></svg></span>
        <h4>TikTok</h4>
        <p>Behind the Scenes</p>
        <span class="social-card__handle" id="handle-tiktok">@Jia.henna</span>
      </a>

      <!-- Facebook -->
      <a class="social-card social-card--fb" id="card-facebook" href="#" target="_blank" rel="noopener">
        <span class="social-card__ic"><svg viewBox="0 0 24 24"><use href="#i-facebook"/></svg></span>
        <h4>Facebook</h4>
        <p>Reviews &amp; Community</p>
        <span class="social-card__handle" id="handle-facebook">/Jia.henna</span>
      </a>

    </div>

    <div class="avail reveal">
      <span>Bridal bookings open 2–3 months ahead</span>
      <span>Studio sessions · Tue–Sat, 10am – 7pm</span>
      <span>Travels within 40 miles</span>
    </div>
  </div>
</section>

</main>

<!-- ================= FOOTER ================= -->
<footer>
  <div class="wrap">
    <div class="foot__top">
      <div>
        <p class="foot__brand">Jia<em>Henna Atelier</em></p>
        <p style="max-width:38ch;font-size:.9rem;margin:0">
          Hand-drawn henna artistry for brides, celebrations and everyday beauty.
        </p>
      </div>
      <div>
        <h5>Explore</h5>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div>
        <h5>Connect</h5>
        <ul>
          <li><a id="foot-instagram" href="#" target="_blank" rel="noopener">Instagram</a></li>
          <li><a id="foot-tiktok" href="#" target="_blank" rel="noopener">TikTok</a></li>
          <li><a id="foot-facebook" href="#" target="_blank" rel="noopener">Facebook</a></li>
          <li><a id="foot-whatsapp" href="#" target="_blank" rel="noopener">WhatsApp</a></li>
        </ul>
      </div>
    </div>
    <div class="foot__bottom">
      <span>© <span id="year"></span> Jia Henna Atelier. All rights reserved.</span>
      <span>Studio hours · Tue–Sat, 10am – 7pm</span>
    </div>
  </div>
</footer>

<!-- ================= LIGHTBOX ================= -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Artwork preview">
  <button class="lightbox__close" id="lb-close" aria-label="Close preview">✕</button>
  <div class="lightbox__box" id="lb-box">
    <img id="lb-img" src="" alt="">
    <div class="lightbox__cap" id="lb-cap">
      <div class="lightbox__cap-text" id="lb-cap-text">Title<em>Subtitle</em></div>
      <a class="lightbox__cta" id="lb-cta" href="#" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><use href="#i-whatsapp"/></svg>
        Interested — Consult on WhatsApp
      </a>
    </div>
  </div>
</div>

<script>
(function(){
  "use strict";

  /* ============================================================
     ✏️  EDIT THESE — Replace with Jia's real contact details
     ============================================================ */
  var CONTACT = {
    whatsappNumber:  '254793311124',                     // digits only, with country code
    whatsappDisplay: '+254 (7) 933-11124',
    instagram:       'Jia.henna',                   // without the @
    tiktok:          'Jia.henna',                      // without the @
    facebook:        'Jia.henna'                    // page slug
  };

  /* Build all URLs from the config above */
  var URLS = {
    whatsapp:  'https://wa.me/' + CONTACT.whatsappNumber,
    instagram: 'https://instagram.com/' + CONTACT.instagram,
    tiktok:    'https://tiktok.com/@' + CONTACT.tiktok,
    facebook:  'https://facebook.com/' + CONTACT.facebook
  };

  function waLink(message){
    return URLS.whatsapp + '?text=' + encodeURIComponent(message);
  }

  /* ---------- Wire up social cards ---------- */
  var waCard = document.getElementById('card-whatsapp');
  waCard.href = waLink('Hi Jia! I found your website and I would love to enquire about your henna services.');
  document.getElementById('handle-whatsapp').textContent = CONTACT.whatsappDisplay + ' →';

  document.getElementById('card-instagram').href = URLS.instagram;
  document.getElementById('handle-instagram').textContent = '@' + CONTACT.instagram;

  document.getElementById('card-tiktok').href = URLS.tiktok;
  document.getElementById('handle-tiktok').textContent = '@' + CONTACT.tiktok;

  document.getElementById('card-facebook').href = URLS.facebook;
  document.getElementById('handle-facebook').textContent = '/' + CONTACT.facebook;

  /* Footer social links */
  document.getElementById('foot-instagram').href = URLS.instagram;
  document.getElementById('foot-tiktok').href    = URLS.tiktok;
  document.getElementById('foot-facebook').href  = URLS.facebook;
  document.getElementById('foot-whatsapp').href  = waLink('Hi Jia! I would like to enquire about your henna services.');

  /* ---------- Wire up service card CTAs ---------- */
  document.querySelectorAll('.card__cta').forEach(function(link){
    var service = link.getAttribute('data-service') || 'your services';
    link.href = waLink('Hi Jia! I\'m interested in your "' + service + '" service. Could you share more details?');
  });

  /* ---------- Wire up small WhatsApp buttons on each gallery tile ---------- */
  document.querySelectorAll('.g-item__wa').forEach(function(btn){
    var name = btn.getAttribute('data-inquire') || 'this design';
    btn.href = waLink('Hi Jia! I\'m interested in the "' + name + '" design. Is this available to book?');
    btn.addEventListener('click', function(e){ e.stopPropagation(); });
  });

  /* ---------- Year ---------- */
  document.getElementById('year').textContent = new Date().getFullYear();

  /* ---------- Nav stuck state ---------- */
  var nav = document.getElementById('nav');
  function onScroll(){ nav.classList.toggle('is-stuck', window.scrollY > 40); }
  onScroll();
  window.addEventListener('scroll', onScroll, {passive:true});

  /* ---------- Mobile drawer ---------- */
  var burger = document.getElementById('burger');
  var drawer = document.getElementById('drawer');
  function toggleDrawer(force){
    var open = typeof force === 'boolean' ? force : !drawer.classList.contains('is-open');
    drawer.classList.toggle('is-open', open);
    burger.classList.toggle('is-open', open);
    burger.setAttribute('aria-expanded', String(open));
    document.body.style.overflow = open ? 'hidden' : '';
  }
  burger.addEventListener('click', function(){ toggleDrawer(); });
  drawer.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click', function(){ toggleDrawer(false); });
  });
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape'){ toggleDrawer(false); closeLightbox(); }
  });

  /* ---------- Scroll reveal ---------- */
  var io = null;
  if('IntersectionObserver' in window){
    io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, {threshold:0.12, rootMargin:'0px 0px -60px 0px'});
    document.querySelectorAll('.reveal').forEach(function(el){ io.observe(el); });
  } else {
    document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('in'); });
  }

  /* Stagger gallery tiles */
  document.querySelectorAll('#gallery-grid .g-item').forEach(function(el, i){
    el.classList.add('reveal');
    el.style.transitionDelay = (i % 4) * 0.08 + 's';
    if(io){ io.observe(el); } else { el.classList.add('in'); }
  });

  /* ---------- Lightbox ---------- */
  var lb       = document.getElementById('lightbox');
  var lbImg    = document.getElementById('lb-img');
  var lbCapTxt = document.getElementById('lb-cap-text');
  var lbCta    = document.getElementById('lb-cta');

  function openLightbox(fig){
    var img   = fig.getAttribute('data-img');
    var title = fig.getAttribute('data-title') || '';
    var sub   = fig.getAttribute('data-sub')   || '';

    if(img){
      lbImg.src = img;
      lbImg.alt = title;
    }

    lbCapTxt.innerHTML = title + '<em>' + sub + '</em>';
    lbCta.href = waLink('Hi Jia! I\'m interested in the "' + title + '" design. Is this available to book?');
    lb.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox(){
    lb.classList.remove('is-open');
    if(!drawer.classList.contains('is-open')) document.body.style.overflow = '';
  }

  document.querySelectorAll('.g-item').forEach(function(fig){
    fig.addEventListener('click', function(){ openLightbox(fig); });
  });
  document.getElementById('lb-close').addEventListener('click', closeLightbox);
  lb.addEventListener('click', function(e){ if(e.target === lb) closeLightbox(); });

  /* ---------- Testimonial slider ---------- */
  var quotes = Array.prototype.slice.call(document.querySelectorAll('.quote'));
  var dotsWrap = document.getElementById('quote-dots');
  var current = 0, timer = null;

  quotes.forEach(function(_, i){
    var b = document.createElement('button');
    b.type = 'button';
    b.setAttribute('aria-label', 'Testimonial ' + (i+1));
    if(i === 0) b.classList.add('is-active');
    b.addEventListener('click', function(){ goTo(i); restart(); });
    dotsWrap.appendChild(b);
  });
  var dots = Array.prototype.slice.call(dotsWrap.children);

  function goTo(i){
    quotes[current].classList.remove('is-active');
    dots[current].classList.remove('is-active');
    current = (i + quotes.length) % quotes.length;
    quotes[current].classList.add('is-active');
    dots[current].classList.add('is-active');
  }
  function restart(){
    clearInterval(timer);
    timer = setInterval(function(){ goTo(current + 1); }, 6500);
  }
  if(quotes.length > 1) restart();

  /* ---------- Smooth anchor fallback ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click', function(e){
      var id = a.getAttribute('href');
      if(id.length < 2) return;
      var target = document.querySelector(id);
      if(!target) return;
      e.preventDefault();
      target.scrollIntoView({behavior:'smooth', block:'start'});
      history.replaceState(null, '', id);
    });
  });

})();
</script>
</body>
</html>