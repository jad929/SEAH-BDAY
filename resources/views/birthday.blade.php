<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#571827">
    <title>♡</title>
    <style>
        :root {
            color-scheme: light;
            --pink: #29121e;
            --rose: #f1b8c2;
            --ink: #fff7f3;
            --serif: "Iowan Old Style", "Palatino Linotype", "Book Antiqua", Georgia, serif;
            --sans: "Aptos", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            --champagne: #f6d7ad;
        }

        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            min-width: 320px;
            margin: 0;
            background: #1b0d16;
            color: var(--ink);
            font-family: var(--sans);
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        .birthday-page {
            position: relative;
            isolation: isolate;
            height: auto;
            min-height: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: clamp(21px, 4vh, 34px);
            padding: clamp(18px, 3vh, 30px) 20px clamp(28px, 5vh, 52px);
            background:
                radial-gradient(ellipse at 50% 18%, rgba(177, 63, 91, .3), transparent 34%),
                radial-gradient(ellipse at 8% 52%, rgba(120, 44, 79, .18), transparent 38%),
                radial-gradient(ellipse at 92% 78%, rgba(180, 104, 93, .12), transparent 34%),
                linear-gradient(180deg, #321421 0%, #24101c 48%, #1b0d16 100%);
        }
        .birthday-page::before {
            position: absolute;
            inset: 14px;
            z-index: -1;
            border: 1px solid rgba(246, 215, 173, .13);
            border-radius: 28px;
            content: "";
            pointer-events: none;
        }
        .corner-photo {
            position: absolute;
            top: clamp(18px, 3.5vh, 34px);
            z-index: 2;
            width: clamp(92px, 11vw, 148px);
            height: clamp(116px, 18vh, 180px);
            overflow: hidden;
            padding: 7px 7px 10px;
            border: 1px solid rgba(255, 248, 239, .9);
            border-radius: 16px;
            background: linear-gradient(145deg, #fffdf9, #f1e0dc);
            box-shadow: 0 18px 42px rgba(7, 2, 8, .36), 0 3px 0 rgba(246, 215, 173, .3), inset 0 1px #fff;
            cursor: pointer;
            transition: transform .22s ease, box-shadow .22s ease;
            -webkit-tap-highlight-color: transparent;
        }
        .memory-photos {
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
        }
        .corner-photo { pointer-events: auto; }
        .corner-photo--left { left: clamp(16px, 3.4vw, 46px); transform: rotate(-4deg); }
        .corner-photo--right { right: clamp(16px, 3.4vw, 46px); transform: rotate(4deg); }
        .corner-photo:hover { z-index: 3; box-shadow: 0 24px 50px rgba(7, 2, 8, .48), 0 3px 0 rgba(246, 215, 173, .3), inset 0 1px #fff; }
        .corner-photo--left:hover { transform: rotate(-1deg) translateY(-5px) scale(1.04); }
        .corner-photo--right:hover { transform: rotate(1deg) translateY(-5px) scale(1.04); }
        .corner-photo--left.is-collecting { z-index: 2; pointer-events: none; transform: translateY(-38px) rotate(-5deg) scale(.96); }
        .hoodie-reward {
            position: absolute;
            top: clamp(106px, 18vh, 180px);
            left: clamp(20px, 4vw, 56px);
            z-index: 1;
            width: clamp(88px, 10vw, 130px);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            padding: 0;
            border: 0;
            background: transparent;
            color: #fff8f2;
            font: italic 700 clamp(12px, 1.25vw, 15px)/1.2 Georgia, serif;
            text-shadow: 0 2px 5px rgba(21, 5, 11, .8);
            cursor: pointer;
            pointer-events: auto;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-18px) scale(.82) rotate(-8deg);
            -webkit-tap-highlight-color: transparent;
        }
        .hoodie-reward svg { width: 100%; display: block; filter: drop-shadow(0 8px 9px rgba(21, 5, 11, .36)); transition: filter .2s ease, transform .2s ease; }
        .hoodie-reward:hover svg { transform: translateY(-4px) scale(1.06); filter: drop-shadow(0 12px 12px rgba(21, 5, 11, .48)); }
        .hoodie-reward:focus-visible { outline: 3px solid #ffd7cb; outline-offset: 5px; border-radius: 12px; }
        .hoodie-reward:disabled { cursor: default; }
        .memory-photos.is-hoodie-revealed .hoodie-reward {
            z-index: 1;
            visibility: visible;
            animation: hoodie-reveal .38s cubic-bezier(.2, .8, .2, 1) both;
        }
        .memory-photos.is-taking-hoodie .hoodie-reward {
            z-index: 3;
            pointer-events: none;
            animation: hoodie-grab 1.35s cubic-bezier(.2, .72, .25, 1) .18s forwards;
        }
        .memory-photos.is-hoodie-collected .hoodie-reward { visibility: hidden; pointer-events: none; }
        .memory-photos.is-taking-hoodie .corner-photo--left { transform: translateY(-92px) rotate(-5deg) scale(.96); }
        @keyframes hoodie-reveal {
            to { opacity: 1; transform: translateY(0) scale(1) rotate(-5deg); }
        }
        @keyframes hoodie-grab {
            0% { opacity: 0; transform: translateY(-18px) scale(.82) rotate(-8deg); }
            18% { opacity: 1; transform: translateY(4px) scale(1) rotate(2deg); }
            48% { opacity: 1; transform: translate(12vw, 16vh) scale(1.45) rotate(-12deg); }
            100% { opacity: 0; transform: translate(36vw, 39vh) scale(2.4) rotate(22deg); }
        }
        .birthday-feature {
            order: -1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: clamp(18px, 3vh, 28px);
            width: min(100%, 1050px);
            position: relative;
            z-index: 1;
        }
        .birthday-feature::before {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 32px;
            padding: 0 15px;
            border: 1px solid rgba(246, 215, 173, .34);
            border-radius: 999px;
            background: rgba(255, 247, 243, .055);
            color: var(--champagne);
            font: 650 10px/1 var(--sans);
            letter-spacing: .19em;
            box-shadow: inset 0 1px rgba(255,255,255,.08);
            backdrop-filter: blur(10px);
        }
        .birthday-feature > h1 {
            width: min(92vw, 700px);
            margin: 0;
            color: #fff7f3;
            font-family: var(--serif);
            font-size: clamp(39px, 7vw, 76px);
            font-weight: 500;
            letter-spacing: -.055em;
            line-height: 1.02;
            text-align: center;
            text-wrap: balance;
            text-shadow: 0 8px 32px rgba(10, 2, 8, .35);
        }
        .birthday-feature > h1 span {
            display: block;
            margin-top: 10px;
            color: #f3bdc3;
            font-style: italic;
            font-size: .76em;
        }
        .corner-photo:focus-visible, .battle-close:focus-visible { outline: 3px solid #ffd7cb; outline-offset: 4px; }
        .corner-photo img { width: 100%; height: 100%; display: block; border: 1px solid rgba(122, 61, 63, .14); border-radius: 5px; object-fit: cover; }
        .portrait {
            width: min(74vw, 380px);
            height: min(57svh, 470px);
            min-height: 270px;
            flex: 0 0 auto;
            align-self: center;
            overflow: hidden;
            margin: 0 auto;
            border: 7px solid rgba(255, 247, 240, .96);
            border-radius: 190px 190px 24px 24px;
            background: #8e3e55;
            box-shadow: 0 0 0 1px rgba(246, 215, 173, .45), 0 28px 70px rgba(8, 2, 9, .48);
            position: relative;
            z-index: 1;
        }
        .portrait::after {
            position: absolute;
            inset: 0;
            z-index: 3;
            border-radius: inherit;
            background: linear-gradient(145deg, rgba(255,255,255,.14), transparent 42%, rgba(17,5,12,.12));
            content: "";
            pointer-events: none;
        }
        .portrait img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center 35%;
            border-radius: inherit;
            position: relative;
            z-index: 2;
        }
        .portrait-invitation {
            display: grid;
            gap: 8px;
            max-width: min(90vw, 640px);
            margin: 0;
            padding: 18px 24px;
            border: 1px solid rgba(246, 215, 173, .18);
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(255,247,243,.075), rgba(255,247,243,.025));
            color: #fff1e5;
            font-family: var(--sans);
            text-align: center;
            text-shadow: 0 2px 12px rgba(10, 2, 8, .3);
            box-shadow: 0 16px 36px rgba(9, 2, 9, .14), inset 0 1px rgba(255,255,255,.07);
            backdrop-filter: blur(14px);
        }
        .birthday-feature > .portrait-invitation {
            width: min(100%, 720px);
            margin-top: 6px;
        }
        .portrait-invitation strong {
            font-size: clamp(15px, 2vw, 19px);
            font-weight: 650;
            letter-spacing: .08em;
            line-height: 1.35;
        }
        .portrait-invitation strong::before,
        .portrait-invitation strong::after {
            display: inline-block;
            margin: 0 10px;
            color: #e797a3;
            font-size: .8em;
            content: "✦";
            vertical-align: .12em;
        }
        .portrait-invitation span {
            color: var(--champagne);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .16em;
            text-transform: uppercase;
        }
        .music-invitation {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 19px 8px 9px;
            border: 1px solid rgba(246, 215, 173, .28);
            border-radius: 999px;
            background: rgba(255, 247, 243, .07);
            color: #fff2e7;
            font-family: var(--sans);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .02em;
            box-shadow: 0 12px 28px rgba(9, 2, 9, .16), inset 0 1px rgba(255,255,255,.08);
            backdrop-filter: blur(12px);
            transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
            -webkit-tap-highlight-color: transparent;
            text-decoration: none;
        }
        .music-invitation:hover {
            transform: translateY(-2px);
            background: rgba(255, 247, 243, .13);
            box-shadow: 0 16px 36px rgba(9, 2, 9, .24), inset 0 1px rgba(255,255,255,.12);
        }
        .music-invitation:focus-visible {
            outline: 3px solid #ffd7cb;
            outline-offset: 4px;
        }
        .music-heart {
            width: 32px;
            height: 32px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255, 236, 225, .7);
            border-radius: 50%;
            background: linear-gradient(145deg, #e89aa3, #a83f5b);
            color: #fff4ed;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-style: normal;
            box-shadow: inset 0 1px 4px rgba(255, 235, 225, .3), 0 2px 8px rgba(30, 4, 12, .26);
        }
        .letter-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            width: min(100%, 720px);
            margin: 8px 0 0;
            padding: clamp(22px, 4vw, 36px);
            border: 1px solid rgba(246, 215, 173, .16);
            border-radius: 28px;
            background: linear-gradient(145deg, rgba(255, 247, 243, .075), rgba(255, 247, 243, .025));
            box-shadow: 0 24px 65px rgba(9, 2, 9, .2), inset 0 1px rgba(255,255,255,.08);
            backdrop-filter: blur(16px);
            text-align: center;
        }
        .letter-heading {
            margin: 0;
            color: #f6d7ad;
            font: italic 500 clamp(22px, 3.5vw, 31px)/1.2 var(--serif);
            text-wrap: balance;
        }
        .letter-card {
            width: min(100%, 510px);
            height: clamp(290px, 42vw, 350px);
            padding: 0;
            border: 0;
            border-radius: 22px;
            background: transparent;
            color: inherit;
            perspective: 1400px;
            cursor: pointer;
            text-align: left;
            -webkit-tap-highlight-color: transparent;
            transition: transform .28s ease, filter .28s ease;
        }
        .letter-card:hover { transform: translateY(-5px); filter: drop-shadow(0 18px 24px rgba(8, 2, 9, .2)); }
        .letter-card:focus-visible { outline: 3px solid #f6d7ad; outline-offset: 7px; }
        .letter-card-inner {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            border-radius: inherit;
            transform-style: preserve-3d;
            transition: transform .75s cubic-bezier(.2, .75, .22, 1);
        }
        .letter-card.is-flipped .letter-card-inner { transform: rotateY(180deg); }
        .letter-card-face {
            position: absolute;
            inset: 0;
            display: block;
            overflow: hidden;
            border: 5px solid #fff8f0;
            border-radius: inherit;
            box-shadow: 0 24px 55px rgba(12, 3, 7, .42), inset 0 1px rgba(255,255,255,.75);
            backface-visibility: hidden;
        }
        .letter-card-front img { width: 100%; height: 100%; display: block; object-fit: cover; }
        .letter-card-back {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 24px clamp(22px, 5vw, 38px);
            border-color: #fff8f0;
            background:
                radial-gradient(ellipse at 100% 0%, rgba(235, 178, 174, .45), transparent 52%),
                linear-gradient(145deg, #fffaf5, #f3dfd4);
            color: #51202c;
            transform: rotateY(180deg);
        }
        .letter-card-back::before {
            position: absolute;
            inset: 10px;
            border: 1px solid rgba(132, 50, 72, .2);
            border-radius: 10px;
            z-index: 0;
            content: "";
            pointer-events: none;
        }
        .letter-card-copy { position: relative; z-index: 1; display: block; }
        .letter-card-back-title {
            display: block;
            margin: 0 0 10px;
            color: #8d3449;
            font: italic 500 25px/1.1 var(--serif);
            text-align: center;
        }
        .letter-card-back-copy {
            display: block;
            margin: 0 0 10px;
            font: 15px/1.45 var(--serif);
        }
        .letter-signature {
            margin-top: 1px !important;
            color: #8d3449;
            font-style: italic !important;
            text-align: right;
        }
        .cat-playground {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 18px;
            width: min(96vw, 1320px);
            margin-top: clamp(100px, 25vh, 210px);
        }
        .cat-playground-stage {
            position: relative;
            width: 100%;
            height: clamp(420px, 72svh, 760px);
            overflow: hidden;
            border: 1px solid rgba(255, 247, 240, .85);
            border-radius: 32px;
            background:
                radial-gradient(ellipse at 50% 90%, rgba(216, 231, 189, .95), transparent 48%),
                radial-gradient(ellipse at 50% 5%, rgba(255, 255, 255, .9), transparent 42%),
                linear-gradient(180deg, #f4dfe1 0%, #faeee1 58%, #e4edcf 100%);
            box-shadow: 0 30px 80px rgba(9, 2, 9, .26), inset 0 1px #fff;
        }
        .playground-birthday-message {
            position: absolute;
            top: 7%;
            left: 50%;
            z-index: 1;
            width: min(92%, 900px);
            margin: 0;
            color: #762b45;
            font: italic 700 clamp(26px, 5.5vw, 62px)/1.08 var(--serif);
            letter-spacing: -.035em;
            text-align: center;
            text-shadow: 0 2px 0 rgba(255, 255, 255, .72), 0 8px 22px rgba(99, 40, 46, .16);
            transform: translateX(-50%);
            pointer-events: none;
        }
        .playground-cake {
            position: absolute;
            top: 28%;
            left: 50%;
            z-index: 1;
            width: clamp(112px, 19vw, 210px);
            height: 150px;
            transform: translateX(-50%);
        }
        .cake-candle {
            position: absolute;
            top: 0;
            left: 50%;
            width: 14px;
            height: 48px;
            display: grid;
            place-items: center;
            border: 2px solid #fff8ed;
            border-radius: 4px 4px 2px 2px;
            background: repeating-linear-gradient(135deg, #f6b6bf 0 6px, #fff7ed 6px 12px);
            color: #8f263e;
            font: 700 10px/1 Arial, sans-serif;
            transform: translateX(-50%);
            box-shadow: 0 2px 5px rgba(76, 36, 35, .2);
        }
        .cake-flame {
            position: absolute;
            top: -24px;
            left: 50%;
            width: 14px;
            height: 22px;
            border-radius: 55% 45% 55% 45%;
            background: radial-gradient(ellipse at 50% 70%, #fff9b0 0 22%, #ffbd55 48%, #f2734f 76%);
            filter: drop-shadow(0 0 8px rgba(255, 172, 71, .75));
            transform: translateX(-50%) rotate(8deg);
            animation: candle-flicker .8s ease-in-out infinite alternate;
        }
        .birthday-cake {
            position: absolute;
            top: 53px;
            left: 50%;
            width: 100%;
            height: 82px;
            border: 3px solid #fff8ed;
            border-radius: 14px 14px 22px 22px;
            background: linear-gradient(180deg, #f6b6bf 0 25%, #fff0df 25% 66%, #d95972 66%);
            box-shadow: 0 10px 0 #b9415a, 0 17px 18px rgba(69, 33, 37, .22);
            transform: translateX(-50%);
        }
        .birthday-cake::before {
            position: absolute;
            top: 10px;
            right: -3px;
            left: -3px;
            height: 15px;
            border-radius: 50%;
            background: #fff8ed;
            content: "";
        }
        .birthday-cake::after {
            position: absolute;
            top: 18px;
            right: 7px;
            left: 7px;
            height: 10px;
            border-radius: 50%;
            background: #f6b6bf;
            content: "";
        }
        @keyframes candle-flicker {
            from { transform: translateX(-50%) rotate(-7deg) scale(.94); }
            to { transform: translateX(-50%) rotate(8deg) scale(1.06); }
        }
        .playground-cloud {
            position: absolute;
            top: 12%;
            left: 17%;
            width: 112px;
            height: 34px;
            border-radius: 99px;
            background: rgba(255,255,255,.63);
            filter: drop-shadow(0 4px 8px rgba(124, 89, 78, .08));
        }
        .playground-cloud::before,
        .playground-cloud::after {
            position: absolute;
            bottom: 4px;
            border-radius: 50%;
            background: inherit;
            content: "";
        }
        .playground-cloud::before { left: 18px; width: 42px; height: 42px; }
        .playground-cloud::after { right: 16px; width: 52px; height: 52px; }
        .playground-hill {
            position: absolute;
            right: -8%;
            bottom: -75px;
            left: -8%;
            height: 190px;
            border-radius: 50% 50% 0 0 / 35% 35% 0 0;
            background: linear-gradient(180deg, #d3dfbb, #bacb9f);
        }
        .playground-cat {
            position: absolute;
            bottom: 4%;
            z-index: 2;
            width: clamp(220px, 28vw, 390px);
            height: auto;
            aspect-ratio: 160 / 130;
            animation: cat-pounce 2.5s ease-in-out infinite;
        }
        .playground-cat--buchi { left: 4%; --fur: #e99b4f; --fur-dark: #c46e37; --muzzle: #fff7ed; }
        .playground-cat--berries { left: 35%; --fur: #90949d; --fur-dark: #6f737d; --muzzle: #fffaf4; animation-delay: .55s; animation-duration: 3s; }
        .playground-cat--chico { right: 4%; --fur: #514a47; --fur-dark: #37343a; --muzzle: #f5eee4; animation-delay: .85s; animation-duration: 2.8s; }
        .playground-cat svg { width: 100%; height: 100%; overflow: visible; }
        .playground-cat .cat-body,
        .playground-cat .cat-head { fill: var(--fur); }
        .playground-cat .cat-leg,
        .playground-cat .cat-tail { fill: none; stroke: var(--fur-dark); stroke-linecap: round; stroke-width: 9px; }
        .playground-cat .cat-tail { stroke: var(--fur); stroke-width: 8px; transform-box: fill-box; transform-origin: 15% 85%; animation: cat-tail-wag 1.2s ease-in-out infinite alternate; }
        .playground-cat .cat-patch,
        .playground-cat .cat-muzzle { fill: var(--muzzle); }
        .playground-cat .cat-stripe { fill: none; stroke: #a78972; stroke-linecap: round; stroke-width: 3px; }
        .playground-cat .cat-blaze,
        .playground-cat .cat-chest { fill: #f5eee4; }
        .playground-cat .cat-eye-mask { fill: #8b7060; }
        .playground-cat .cat-ear-inner,
        .playground-cat .cat-nose { fill: #d98b91; }
        .playground-cat .cat-eye { fill: #211e26; }
        .playground-cat .cat-eye-shine { fill: #fff8ee; }
        .playground-cat .cat-whiskers { fill: none; stroke: #fff8ee; stroke-linecap: round; stroke-width: 1.7px; }
        .playground-cat--buchi .cat-stripe { stroke: #bd6b38; }
        .playground-cat--buchi .cat-leg { stroke: #fff7ed; }
        .playground-cat--buchi .cat-eye { fill: #78804f; }
        .playground-cat--berries .cat-tail { stroke-width: 15px; }
        .playground-cat--berries .cat-stripe { stroke: #d3d3d6; }
        .playground-cat--berries .cat-eye { fill: #65734c; }
        .playground-halo {
            position: absolute;
            top: 1%;
            left: 50%;
            z-index: 4;
            width: 68px;
            height: 24px;
            border: 3px solid #f5da94;
            border-radius: 50%;
            box-shadow: 0 0 9px rgba(255, 234, 177, .8), 0 0 22px rgba(255, 226, 151, .45), inset 0 0 7px rgba(255, 243, 203, .55);
            transform: translateX(-50%) rotate(-8deg);
            animation: halo-glow 2.4s ease-in-out infinite alternate;
        }
        .playground-cat-name {
            position: absolute;
            bottom: 0;
            left: 50%;
            padding: 5px 15px;
            border: 1px solid rgba(141, 52, 73, .22);
            border-radius: 999px;
            background: #fff8f0;
            color: #65293a;
            font: italic 600 15px/1.2 var(--serif);
            box-shadow: 0 3px 10px rgba(42, 21, 24, .18);
            transform: translateX(-50%);
        }
        .playground-yarn {
            position: absolute;
            bottom: 8%;
            left: 45%;
            z-index: 3;
            width: clamp(38px, 5vw, 60px);
            height: clamp(38px, 5vw, 60px);
            border-radius: 50%;
            background: radial-gradient(circle at 32% 26%, #ffb1a2, #d95870 58%, #a93249);
            box-shadow: 0 5px 8px rgba(93, 38, 47, .25);
            animation: yarn-roll 4.3s ease-in-out infinite alternate;
        }
        .playground-yarn::before,
        .playground-yarn::after {
            position: absolute;
            inset: 5px 2px;
            border: 2px solid rgba(255, 233, 220, .78);
            border-right-color: transparent;
            border-left-color: transparent;
            border-radius: 50%;
            content: "";
        }
        .playground-yarn::after { transform: rotate(62deg); }
        @keyframes cat-pounce {
            0%, 100% { transform: translateY(0) rotate(0); }
            42% { transform: translateY(-34px) rotate(-3deg); }
            62% { transform: translateY(-15px) rotate(3deg); }
        }
        @keyframes cat-tail-wag {
            from { transform: rotate(-13deg); }
            to { transform: rotate(17deg); }
        }
        @keyframes halo-glow {
            from { filter: brightness(.92); }
            to { filter: brightness(1.2); }
        }
        @keyframes yarn-roll {
            from { left: 39%; transform: rotate(0); }
            to { left: 57%; transform: rotate(540deg); }
        }
        .battle-impact {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            height: 100dvh;
            max-width: none;
            max-height: none;
            overflow: hidden;
            margin: 0;
            padding: 0;
            border: 0;
            background:
                radial-gradient(ellipse at center, rgba(255, 238, 207, .25), transparent 36%),
                repeating-linear-gradient(128deg, transparent 0 38px, rgba(255, 255, 255, .055) 39px 41px, transparent 42px 84px),
                linear-gradient(145deg, #190710, #762039 52%, #1e0812);
            color: #fff7ed;
            isolation: isolate;
        }
        .battle-impact[open] { display: grid; place-items: center; animation: battle-shake .55s ease-out both; }
        .battle-impact::backdrop { background: rgba(10, 2, 7, .94); }
        .battle-impact::before {
            position: absolute;
            inset: -30%;
            z-index: -1;
            background: repeating-conic-gradient(from 0deg at 50% 50%, rgba(255, 243, 221, .16) 0deg 2deg, transparent 2deg 13deg);
            content: "";
            animation: impact-rays 9s linear infinite;
        }
        .impact-head {
            position: absolute;
            top: 51%;
            left: 50%;
            z-index: 1;
            font: normal clamp(120px, 26vw, 250px)/1 Arial, sans-serif;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }
        .battle-impact[open] .impact-head { animation: head-bonk .58s ease-in-out .48s both; }
        .smash-bottle {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            width: clamp(90px, 16vw, 160px);
            height: auto;
            overflow: visible;
            opacity: 0;
            filter: drop-shadow(5px 10px 7px rgba(20, 5, 12, .42));
            pointer-events: none;
        }
        .battle-impact[open] .smash-bottle { animation: bottle-bonk .82s cubic-bezier(.2, .78, .28, 1) .12s both; }
        .impact-burst {
            position: absolute;
            top: 45%;
            left: 50%;
            z-index: 2;
            color: #ffe28e;
            font: 900 clamp(70px, 16vw, 145px)/1 Impact, sans-serif;
            opacity: 0;
            text-shadow: 0 0 22px #ffad55, 4px 5px 0 #9f2946;
            pointer-events: none;
        }
        .battle-impact[open] .impact-burst { animation: impact-burst .48s cubic-bezier(.15, .85, .25, 1) .55s both; }
        .battle-copy {
            position: relative;
            z-index: 3;
            width: min(92vw, 900px);
            text-align: center;
            transform: rotate(-5deg);
        }
        .battle-kicker {
            display: block;
            color: #ffd1aa;
            font: 700 clamp(15px, 3vw, 25px)/1.2 Arial, sans-serif;
            letter-spacing: .32em;
            animation: battle-pop .45s cubic-bezier(.16, 1.5, .4, 1) .14s both;
        }
        .battle-word {
            display: block;
            margin: 8px 0;
            color: #fff6e9;
            font: 1000 clamp(78px, 20vw, 210px)/.9 Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
            letter-spacing: -.065em;
            -webkit-text-stroke: 2px #3b101d;
            text-shadow: 5px 7px 0 #c43654, 10px 13px 0 #4a1224, 0 0 44px rgba(255, 204, 149, .62);
            animation: battle-pop .62s cubic-bezier(.16, 1.5, .4, 1) .28s both;
        }
        .battle-caption {
            display: block;
            color: #ffe6d0;
            font: italic 600 clamp(16px, 3vw, 26px)/1.4 Georgia, serif;
            animation: battle-pop .48s ease-out .48s both;
        }
        .battle-close {
            position: absolute;
            right: max(20px, env(safe-area-inset-right));
            bottom: max(20px, env(safe-area-inset-bottom));
            padding: 12px 20px;
            border: 1px solid rgba(255, 236, 225, .65);
            border-radius: 999px;
            background: rgba(28, 7, 15, .68);
            color: #fff4ef;
            font: 600 14px/1.2 Arial, sans-serif;
            cursor: pointer;
        }
        .battle-close:focus-visible { outline: 3px solid #ffd7cb; outline-offset: 4px; }
        @keyframes battle-shake {
            0% { transform: scale(1.16) translate(0, 0); }
            18% { transform: scale(1) translate(-12px, 7px); }
            38% { transform: translate(10px, -6px); }
            58% { transform: translate(-6px, 4px); }
            78% { transform: translate(4px, -2px); }
            100% { transform: none; }
        }
        @keyframes impact-rays { to { transform: rotate(360deg); } }
        @keyframes bottle-bonk {
            0% { opacity: 0; transform: translate(45vw, -55vh) rotate(40deg) scale(.35); }
            18% { opacity: 1; transform: translate(25vw, -32vh) rotate(22deg) scale(.7); }
            54% { opacity: 1; transform: translate(-15%, -48%) rotate(-28deg) scale(1.05); }
            64% { opacity: 1; transform: translate(-50%, -48%) rotate(-8deg) scale(1.12); }
            100% { opacity: 0; transform: translate(-85vw, -65vh) rotate(-95deg) scale(.65); }
        }
        @keyframes head-bonk {
            0%, 100% { transform: translate(-50%, -50%) rotate(0); }
            35% { transform: translate(-50%, -50%) rotate(-14deg) scale(1.08); }
            68% { transform: translate(-50%, -50%) rotate(11deg) scale(.96); }
        }
        @keyframes impact-burst {
            0% { opacity: 0; transform: translate(-50%, -50%) scale(.15) rotate(-25deg); }
            35% { opacity: 1; transform: translate(-50%, -50%) scale(1.2) rotate(8deg); }
            100% { opacity: 0; transform: translate(-50%, -50%) scale(1.7) rotate(24deg); }
        }
        @keyframes battle-pop {
            from { opacity: 0; transform: scale(.25) translateY(35px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        .absolut-viewer {
            width: min(92vw, 700px);
            height: fit-content;
            max-height: 88svh;
            overflow: visible;
            margin: auto;
            padding: 22px;
            border: 1px solid rgba(255, 236, 225, .75);
            border-radius: 13px;
            background: #fff6f0;
            box-shadow: 0 30px 100px rgba(0, 0, 0, .5);
            position: fixed;
            inset: 0;
        }
        .absolut-viewer::backdrop { background: rgba(25, 4, 11, .82); backdrop-filter: blur(5px); }
        .absolut-close {
            position: absolute;
            top: -16px;
            right: -16px;
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255, 236, 225, .9);
            border-radius: 50%;
            background: #742338;
            color: #fff4ef;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(0,0,0,.25);
        }
        .absolut-close svg { width: 18px; height: 18px; }
        .absolut-stage {
            position: relative;
            width: 100%;
            display: grid;
            place-items: center;
            min-height: min(70svh, 460px);
        }
        .absolut-bottle-img {
            width: min(60vw, 340px);
            height: auto;
            display: block;
            filter: drop-shadow(0 14px 30px rgba(0,0,0,.35));
            animation: absolut-float 6s ease-in-out infinite;
        }
        @keyframes absolut-float {
            0%, 100% { transform: translateY(0) rotate(-1deg); }
            50% { transform: translateY(-14px) rotate(1deg); }
        }
        @media (max-width: 480px) {
            .birthday-page { gap: 22px; padding: 24px 16px 34px; }
            .birthday-page::before { inset: 8px; border-radius: 20px; }
            .birthday-feature { gap: 17px; }
            .birthday-feature::before { min-height: 29px; font-size: 9px; letter-spacing: .15em; }
            .portrait { width: min(78vw, 340px); height: min(43svh, 360px); min-height: 235px; border-width: 7px; }
            .birthday-feature > h1 { font-size: clamp(34px, 9vw, 46px); }
            .portrait-invitation { padding: 15px 14px; border-radius: 15px; }
            .portrait-invitation strong { font-size: clamp(13px, 4vw, 16px); letter-spacing: .045em; }
            .portrait-invitation strong::before,
            .portrait-invitation strong::after { margin: 0 5px; }
            .birthday-feature > .portrait-invitation { width: 100%; }
            .music-invitation { min-height: 48px; }
            .letter-section { width: 100%; gap: 14px; padding: 20px 14px; border-radius: 22px; }
            .corner-photo {
                top: 15px;
                width: clamp(62px, 19vw, 82px);
                height: clamp(82px, 25vw, 104px);
                padding: 4px;
                border-radius: 7px;
            }
            .corner-photo--left { left: 12px; }
            .corner-photo--right { right: 12px; }
            .letter-card { width: 100%; height: 340px; }
            .letter-card-back { padding: 22px 19px; }
            .letter-card-back-copy { font-size: 14px; line-height: 1.4; }
            .cat-playground { width: 100%; margin-top: 120px; }
            .cat-playground-stage { height: clamp(380px, 68svh, 520px); border-radius: 24px; }
            .playground-birthday-message { top: 7%; width: 94%; font-size: clamp(27px, 8vw, 40px); }
            .playground-cat { bottom: 4%; width: clamp(96px, 30vw, 140px); }
            .playground-cat--buchi { left: 1%; }
            .playground-cat--berries { left: 35%; }
            .playground-cat--chico { right: 1%; }
            .playground-yarn { width: 40px; height: 40px; }
            .playground-cake { top: 34%; height: 120px; }
            .birthday-cake { top: 46px; height: 66px; }
            .cake-candle { height: 40px; }
        }
        @media (max-width: 800px) {
            .playground-cat { width: clamp(96px, 30vw, 220px); }
            .playground-cat--buchi { left: 2%; }
            .playground-cat--berries { left: 35%; }
            .playground-cat--chico { right: 2%; }
        }
        @media (max-height: 600px) and (min-width: 481px) {
            .letter-card { height: 290px; }
            .letter-card-back { padding-block: 18px; }
            .letter-card-back-copy { font-size: 14px; line-height: 1.35; }
        }
        @media (max-height: 600px) {
            .birthday-page { gap: 15px; padding-block: 16px; }
            .portrait { height: 43svh; min-height: 190px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
            .playground-cat, .playground-cat .cat-tail, .playground-yarn, .playground-halo { animation: none !important; }
        }
    </style>
</head>
<body>
<main class="birthday-page">
    <div class="memory-photos" aria-label="Birthday photos">
    <button class="hoodie-reward" id="hoodie-reward" type="button" aria-label="Get the hoodie" disabled>
        <svg viewBox="0 0 180 160" role="img" aria-label="A white hoodie">
            <path d="M60 24 39 32 10 75l25 17 16-20v62h78V72l16 20 25-17-29-43-21-8c-4 16-13 24-30 24S64 40 60 24Z" fill="#fffdf9" stroke="#d6c8c7" stroke-width="3" stroke-linejoin="round"/>
            <path d="M60 24c4 16 13 24 30 24s26-8 30-24l-15-9H75l-15 9Z" fill="#eee8e6" stroke="#d6c8c7" stroke-width="3" stroke-linejoin="round"/>
            <path d="m10 75 25 17m135-17-25 17" fill="none" stroke="#cfc2c1" stroke-width="2"/>
            <path d="M76 17c1 10 5 15 14 15s13-5 14-15M73 115h34c5 0 8 4 8 9v10H65v-10c0-5 3-9 8-9Z" fill="#f6f1ef" stroke="#d6c8c7" stroke-width="2.5"/>
            <path d="M76 51v49m28-49v49" stroke="#e4dcda" stroke-width="2"/>
        </svg>
        <span>Get the hoodie</span>
    </button>
    <button
        class="corner-photo corner-photo--left"
        type="button"
        id="hoodie-card"
        aria-label="Reveal the white hoodie"
    >
        <img src="{{ asset('images/memory-left.jpg') }}" alt="" fetchpriority="high">
    </button>
    <button
        class="corner-photo corner-photo--right"
        type="button"
        data-action="absolut"
        aria-label="Open animated Absolut bottle"
    >
        <img src="{{ asset('images/memory-right.jpg') }}" alt="" fetchpriority="high">
    </button>
    </div>
            <div class="gerbera" style="--color:#ff6b9d;--color-dark:#c85467;--stem-tilt:8deg;left:6%;top:20%;scale:0.85;animation-delay:0s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.72);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#c85467;--color-dark:#a34c5a;--stem-tilt:-10deg;left:20%;top:8%;scale:1;animation-delay:0.6s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.7);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#efb1b4;--color-dark:#c85467;--stem-tilt:12deg;left:36%;top:4%;scale:1.05;animation-delay:0.3s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.75);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#d45077;--color-dark:#a34c5a;--stem-tilt:-8deg;left:54%;top:10%;scale:0.9;animation-delay:0.9s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.7);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#8f263e;--color-dark:#5a1a26;--stem-tilt:10deg;left:70%;top:18%;scale:0.8;animation-delay:1.2s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.68);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#ff6b9d;--color-dark:#c85467;--stem-tilt:-6deg;left:84%;top:30%;scale:0.95;animation-delay:0.4s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.73);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#c85467;--color-dark:#a34c5a;--stem-tilt:9deg;left:12%;top:48%;scale:0.85;animation-delay:1s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.7);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#efb1b4;--color-dark:#c85467;--stem-tilt:-11deg;left:30%;top:58%;scale:0.95;animation-delay:0.7s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.74);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#d45077;--color-dark:#a34c5a;--stem-tilt:7deg;left:48%;top:62%;scale:1;animation-delay:1.1s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.76);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#8f263e;--color-dark:#5a1a26;--stem-tilt:-9deg;left:66%;top:52%;scale:0.9;animation-delay:0.5s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.71);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#ff6b9d;--color-dark:#c85467;--stem-tilt:11deg;left:82%;top:68%;scale:0.85;animation-delay:0.8s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.69);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#c85467;--color-dark:#a34c5a;--stem-tilt:-12deg;left:16%;top:76%;scale:0.9;animation-delay:1.3s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.72);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#efb1b4;--color-dark:#c85467;--stem-tilt:6deg;left:40%;top:80%;scale:0.8;animation-delay:0.2s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.66);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#d45077;--color-dark:#a34c5a;--stem-tilt:-7deg;left:58%;top:86%;scale:0.95;animation-delay:1s;animation-direction:reverse;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.75);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
            <div class="gerbera" style="--color:#8f263e;--color-dark:#5a1a26;--stem-tilt:9deg;left:76%;top:80%;scale:0.9;animation-delay:0.5s;animation-direction:normal;">
                <div class="gerbera-stem"></div>
                <div class="gerbera-leaf gerbera-leaf--left"></div>
                <div class="gerbera-leaf gerbera-leaf--right"></div>
                <div class="gerbera-head">
                    <div class="gerbera-center"></div>
                    <div class="gerbera-petal-layer">
                        <div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div><div class="gerbera-petal"></div>
                    </div>
                    <div class="gerbera-petal-layer" style="transform: scale(0.7);">
                        <div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div><div class="gerbera-petal gerbera-petal-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    <section class="birthday-feature" aria-label="Birthday greeting">
        <figure class="portrait">
            <img src="{{ $birthday['portrait'] }}" alt="Seah">
        </figure>
            <h1>Happiest Birthday,<span>My Dearest, Seah &lt;33</span></h1>
    <a
        class="music-invitation"
        id="play-birthday-song"
        href="https://open.spotify.com/playlist/4GfrPSoGmXNOzt4GlzaZXG?si=7kg9jPgbR721fFDhNGWuzA&utm_source=copy-link&pi=die7EDKiRCKpL"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Find LANY's you! on Spotify"
    >
        <span class="music-heart" aria-hidden="true">♥</span>
        <span>click please!!</span>
    </a>
<section class="letter-section" aria-labelledby="letter-heading">
    <h2 class="letter-heading" id="letter-heading">click the pic kikay</h2>
    <button class="letter-card" id="birthday-letter-card" type="button" aria-pressed="false" aria-label="Open your birthday letter">
        <span class="letter-card-inner">
            <span class="letter-card-face letter-card-front" aria-hidden="false">
                <img src="{{ asset('images/childhood-letter-card.jpg') }}" alt="A childhood photo of two children smiling together" loading="lazy">
            </span>
            <span class="letter-card-face letter-card-back" aria-hidden="true">
                <span class="letter-card-copy">
                    <span class="letter-card-back-title">Happiest birthday, baby!</span>
                    <span class="letter-card-back-copy">I want you to know that I will go beyond measure for you, baby! I’ll be your greatest fan ever, I’ll go against the world if the world is against you, my kikay!</span>
                    <span class="letter-card-back-copy">I wish you all good things in life, baby! Mwa!</span>
                </span>
            </span>
        </span>
    </button>
</section>
<p class="portrait-invitation">
    <strong>THERE’S SOME CUTIE PIES WHO WANTS TO GREET YOU</strong>
    <span>Scroll down ↓</span>
</p>
<section class="cat-playground" aria-label="Birthday cat playground">
    <div class="cat-playground-stage" role="group" aria-label="Birthday greetings from Buchi, Berries, and Chico">
        <h2 class="playground-birthday-message">HAPPY BIRTHDAY MOWM</h2>
        <span class="playground-cloud" aria-hidden="true"></span>
        <span class="playground-hill" aria-hidden="true"></span>
        <div class="playground-cake" role="img" aria-label="Birthday cake with a lit candle for the 20th birthday">
            <span class="cake-flame" aria-hidden="true"></span>
            <span class="cake-candle" aria-hidden="true">20</span>
            <span class="birthday-cake" aria-hidden="true"></span>
        </div>
        <div class="playground-cat playground-cat--buchi" aria-hidden="true">
            <span class="playground-halo"></span>
            <svg viewBox="0 0 160 130">
                <path class="cat-tail" d="M105 88 C139 88 149 70 137 48"/>
                <path class="cat-leg" d="M67 91v20m22-17v19m24-18v18"/>
                <ellipse class="cat-body" cx="91" cy="88" rx="37" ry="23"/>
                <path class="cat-chest" d="M56 75c13-5 23 4 26 17l-2 18c-11 4-23 0-31-9z"/>
                <path class="cat-stripe" d="m100 72 8 8m4-13 9 8m-4 15 12 2"/>
                <path class="cat-head" d="M36 53 34 25l23 16 22-16-1 31c10 8 15 19 12 30-4 15-20 23-38 20-18-3-30-17-27-33 1-8 5-15 11-20z"/>
                <path class="cat-ear-inner" d="m40 33 13 10-12 5zm26 10 14-10-2 17z"/>
                <path class="cat-stripe" d="m48 43 8 8m5-11 2 12m9-9-6 9"/>
                <path class="cat-blaze" d="M57 43c4 3 6 8 5 14l5 11c1 5-2 9-8 10l-7-10c-2-6-2-15 0-21z"/>
                <ellipse class="cat-muzzle" cx="58" cy="74" rx="19" ry="12"/>
                <circle class="cat-eye" cx="48" cy="60" r="3.5"/><circle class="cat-eye" cx="70" cy="60" r="3.5"/>
                <circle class="cat-eye-shine" cx="49" cy="59" r="1.2"/><circle class="cat-eye-shine" cx="71" cy="59" r="1.2"/>
                <path class="cat-nose" d="m55 70 6 0-3 5z"/>
                <path class="cat-whiskers" d="m44 74-16-4m16 8-17 1m47-5 16-4m-16 8 17 1"/>
            </svg>
            <span class="playground-cat-name">Buchi</span>
        </div>
        <div class="playground-cat playground-cat--berries" aria-hidden="true">
            <svg viewBox="0 0 160 130">
                <path class="cat-tail" d="M105 88 C139 88 149 70 137 48"/>
                <path class="cat-leg" d="M67 91v20m22-17v19m24-18v18"/>
                <ellipse class="cat-body" cx="91" cy="88" rx="37" ry="23"/>
                <path class="cat-chest" d="M56 73c13-7 25 4 28 19l-1 19c-11 6-25 0-34-10z"/>
                <path class="cat-stripe" d="m100 72 8 8m4-13 9 8m-4 15 12 2"/>
                <path class="cat-head" d="M36 53 34 25l23 16 22-16-1 31c10 8 15 19 12 30-4 15-20 23-38 20-18-3-30-17-27-33 1-8 5-15 11-20z"/>
                <path class="cat-ear-inner" d="m40 33 13 10-12 5zm26 10 14-10-2 17z"/>
                <path class="cat-stripe" d="m48 43 8 8m5-11 2 12m9-9-6 9"/>
                <path class="cat-blaze" d="M57 43c4 3 6 8 5 14l5 11c1 5-2 9-8 10l-7-10c-2-6-2-15 0-21z"/>
                <ellipse class="cat-muzzle" cx="58" cy="74" rx="19" ry="12"/>
                <circle class="cat-eye" cx="48" cy="60" r="4.7"/><circle class="cat-eye" cx="70" cy="60" r="4.7"/>
                <circle class="cat-eye-shine" cx="49.5" cy="58.5" r="1.5"/><circle class="cat-eye-shine" cx="71.5" cy="58.5" r="1.5"/>
                <path class="cat-nose" d="m55 70 6 0-3 5z"/>
                <path class="cat-whiskers" d="m44 74-16-4m16 8-17 1m47-5 16-4m-16 8 17 1"/>
            </svg>
            <span class="playground-cat-name">Berries</span>
        </div>
        <div class="playground-cat playground-cat--chico" aria-hidden="true">
            <svg viewBox="0 0 160 130">
                <path class="cat-tail" d="M105 88 C139 88 149 70 137 48"/>
                <path class="cat-leg" d="M67 91v20m22-17v19m24-18v18"/>
                <ellipse class="cat-body" cx="91" cy="88" rx="37" ry="23"/>
                <path class="cat-chest" d="M56 75c13-5 23 4 26 17l-2 18c-11 4-23 0-31-9z"/>
                <path class="cat-stripe" d="m100 72 8 8m4-13 9 8m-4 15 12 2m-26 2 8 6"/>
                <path class="cat-head" d="M36 53 34 25l23 16 22-16-1 31c10 8 15 19 12 30-4 15-20 23-38 20-18-3-30-17-27-33 1-8 5-15 11-20z"/>
                <path class="cat-ear-inner" d="m40 33 13 10-12 5zm26 10 14-10-2 17z"/>
                <path class="cat-stripe" d="m48 43 8 8m5-11 2 12m9-9-6 9"/>
                <ellipse class="cat-eye-mask" cx="48" cy="60" rx="9" ry="7"/><ellipse class="cat-eye-mask" cx="70" cy="60" rx="9" ry="7"/>
                <path class="cat-blaze" d="M57 43c4 3 6 8 5 14l5 11c1 5-2 9-8 10l-7-10c-2-6-2-15 0-21z"/>
                <ellipse class="cat-muzzle" cx="58" cy="74" rx="19" ry="12"/>
                <circle class="cat-eye" cx="48" cy="60" r="4.7"/><circle class="cat-eye" cx="70" cy="60" r="4.7"/>
                <circle class="cat-eye-shine" cx="49.5" cy="58.5" r="1.5"/><circle class="cat-eye-shine" cx="71.5" cy="58.5" r="1.5"/>
                <path class="cat-nose" d="m55 70 6 0-3 5z"/>
                <path class="cat-whiskers" d="m44 74-16-4m16 8-17 1m47-5 16-4m-16 8 17 1"/>
            </svg>
            <span class="playground-cat-name">Chico</span>
        </div>
        <span class="playground-yarn" aria-hidden="true"></span>
    </div>
</section>
    </section>
</main>

<dialog class="battle-impact" id="battle-impact" aria-labelledby="battle-title">
    <span class="impact-head" aria-hidden="true">😵</span>
    <svg class="smash-bottle" viewBox="0 0 110 150" aria-hidden="true">
        <path d="M39 8h32v17H39z" fill="#4b514e" stroke="#26302e" stroke-width="3" stroke-linejoin="round"/>
        <path d="M42 25h26v20c0 8 5 14 15 22 8 7 12 17 12 29v41H15V96c0-12 4-22 12-29 10-8 15-14 15-22z" fill="#f8fffc" fill-opacity=".88" stroke="#b5d2ca" stroke-width="4" stroke-linejoin="round"/>
        <path d="M24 98c0-12 8-21 20-23h22c12 2 20 11 20 23v28H24z" fill="#fffdf6" stroke="#d6d4c6" stroke-width="2"/>
        <path d="M28 89h54v8H28z" fill="#214990"/>
        <text x="55" y="106" fill="#214990" font-family="Arial,sans-serif" font-size="8" font-weight="bold" text-anchor="middle">ABSOLUT</text>
        <text x="55" y="117" fill="#214990" font-family="Arial,sans-serif" font-size="7" font-weight="bold" text-anchor="middle">VODKA</text>
        <path d="M29 135h52" stroke="#9cb9b2" stroke-width="3"/>
    </svg>
    <span class="impact-burst" aria-hidden="true">POW!</span>
    <div class="battle-copy">
        <span class="battle-kicker">Hoodie acquired</span>
        <strong class="battle-word" id="battle-title">BONK!</strong>
        <span class="battle-caption">ah kulit ka? kukunin mo pa hoodie ko?</span>
    </div>
    <button class="battle-close" type="button">Back to the birthday</button>
</dialog>
<dialog class="absolut-viewer" id="absolut-viewer" aria-label="Animated Absolut vodka bottle">
    <button class="absolut-close" type="button" aria-label="Close bottle">
        <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
            <path d="m5 5 10 10M15 5 5 15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
    </button>
    <div class="absolut-stage">
        <img src="{{ asset('images/absolut.png') }}" alt="Absolut vodka bottle" class="absolut-bottle-img">
    </div>
</dialog>
<script>
    (() => {
        const hoodieCard = document.getElementById('hoodie-card');
        const memoryPhotos = hoodieCard.closest('.memory-photos');
        const hoodieReward = document.getElementById('hoodie-reward');
        const battleImpact = document.getElementById('battle-impact');
        const battleClose = battleImpact.querySelector('.battle-close');
        let battleStarted = false;
        let battleTimer = null;

        const startBattle = () => {
            if (battleTimer !== null) {
                window.clearTimeout(battleTimer);
                battleTimer = null;
            }
            memoryPhotos.classList.add('is-hoodie-collected');
            if (battleStarted) return;

            battleStarted = true;
            battleImpact.showModal();
        };

        hoodieReward.addEventListener('animationend', (event) => {
            if (event.animationName === 'hoodie-grab') startBattle();
        });

        hoodieCard.addEventListener('click', () => {
            if (memoryPhotos.classList.contains('is-hoodie-revealed')) return;

            memoryPhotos.classList.add('is-hoodie-revealed');
            hoodieCard.classList.add('is-collecting');
            hoodieCard.setAttribute('aria-label', 'Hoodie revealed');
            hoodieReward.disabled = false;
        });

        hoodieReward.addEventListener('click', () => {
            if (memoryPhotos.classList.contains('is-taking-hoodie')) return;

            memoryPhotos.classList.add('is-taking-hoodie');
            hoodieCard.setAttribute('aria-label', 'White hoodie collected');
            hoodieReward.disabled = true;
            hoodieReward.setAttribute('aria-label', 'White hoodie collected');
            const animationDelay = window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 220 : 1550;
            battleTimer = window.setTimeout(startBattle, animationDelay);
        });

        battleClose.addEventListener('click', () => battleImpact.close());
        battleImpact.addEventListener('click', (event) => {
            if (event.target === battleImpact) battleImpact.close();
        });

        const letterCard = document.getElementById('birthday-letter-card');
        const letterFront = letterCard.querySelector('.letter-card-front');
        const letterBack = letterCard.querySelector('.letter-card-back');

        letterCard.addEventListener('click', () => {
            const isFlipped = letterCard.classList.toggle('is-flipped');
            letterCard.setAttribute('aria-pressed', String(isFlipped));
            letterCard.setAttribute('aria-label', isFlipped ? 'Show the photo again' : 'Open your birthday letter');
            letterFront.setAttribute('aria-hidden', String(isFlipped));
            letterBack.setAttribute('aria-hidden', String(!isFlipped));
        });

        const absolutButton = document.querySelector('[data-action="absolut"]');
        const absolutViewer = document.getElementById('absolut-viewer');
        const absolutClose = absolutViewer.querySelector('.absolut-close');

        absolutButton.addEventListener('click', () => absolutViewer.showModal());

        absolutClose.addEventListener('click', () => absolutViewer.close());
        absolutViewer.addEventListener('click', (event) => {
            if (event.target === absolutViewer) absolutViewer.close();
        });
        absolutViewer.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') absolutViewer.close();
        });

    })();
</script>
</body>
</html>
