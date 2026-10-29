<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f8e9ed">
    <meta name="description" content="A little birthday surprise.">
    <title>♡</title>
    <style>
        :root {
            color-scheme: dark;
            --pink: #40151f;
            --red: #a33249;
            --maroon: #672638;
            --maroon-dark: #301018;
            --maroon-light: #843248;
            --brass: #ddb982;
        }

        *, *::before, *::after { box-sizing: border-box; }
        body { min-width: 320px; min-height: 100vh; margin: 0; overflow: hidden; background: var(--pink); }
        .entry-page {
            position: relative;
            min-height: 100vh;
            min-height: 100svh;
            display: grid;
            place-items: center;
            overflow: hidden;
            isolation: isolate;
            background:
                radial-gradient(ellipse at 50% 47%, rgba(166, 51, 72, .3), transparent 39%),
                radial-gradient(ellipse at 50% 105%, rgba(185, 67, 83, .22), transparent 47%),
                linear-gradient(180deg, #471721 0%, #351119 70%, #260c13 100%);
        }
        .entry-page::before {
            position: absolute;
            inset: 0;
            z-index: -1;
            background-image: radial-gradient(rgba(236, 196, 153, .22) .65px, transparent .65px);
            background-size: 11px 11px;
            content: "";
            opacity: .1;
        }
        .floor {
            position: absolute;
            inset: auto 0 0;
            height: 20%;
            z-index: -1;
            background: linear-gradient(180deg, rgba(63, 20, 31, 0), rgba(18, 5, 10, .4));
        }
        .doorway {
            position: relative;
            width: min(39vw, 390px);
            height: min(78vh, 690px);
            height: min(78svh, 690px);
            min-height: 430px;
            padding: 13px;
            border: 1px solid rgba(226, 190, 150, .8);
            border-radius: 210px 210px 7px 7px;
            background: linear-gradient(120deg, #dfc19f, #52202d 54%, #d1ac89);
            box-shadow:
                0 0 0 7px rgba(226, 190, 150, .1),
                0 24px 85px rgba(12, 3, 7, .42),
                0 70px 100px rgba(176, 44, 65, .16);
            perspective: 1500px;
        }
        .doorway::before {
            position: absolute;
            inset: 13px;
            border-radius: 195px 195px 3px 3px;
            background:
                radial-gradient(ellipse at 52% 45%, rgba(255,238,221,.98), rgba(238,159,150,.74) 36%, transparent 73%),
                linear-gradient(145deg, #bd5a68, #81283c);
            box-shadow: inset 0 0 55px rgba(255,224,205,.7), 0 0 45px rgba(233,125,125,.65);
            content: "";
            opacity: 0;
            transition: opacity .5s ease .15s;
        }
        .doorway.is-opening::before { opacity: 1; }
        .door-link {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: block;
            overflow: visible;
            border: 1px solid rgba(53, 24, 37, .62);
            border-radius: 195px 195px 3px 3px;
            background:
                linear-gradient(90deg, rgba(41, 17, 29, .4), transparent 9%, transparent 89%, rgba(33, 14, 24, .35)),
                linear-gradient(145deg, var(--maroon-light), var(--red) 34%, var(--maroon-dark));
            box-shadow: inset 0 0 0 3px rgba(220, 178, 151, .4), inset 0 9px 25px rgba(255, 218, 195, .08);
            backface-visibility: hidden;
            cursor: pointer;
            transform-origin: left center;
            transition: transform .72s cubic-bezier(.2, .75, .22, 1);
            -webkit-tap-highlight-color: transparent;
        }
        .door-link::before {
            position: absolute;
            inset: 13px;
            border: 1px solid rgba(227, 187, 159, .32);
            border-radius: 185px 185px 2px 2px;
            box-shadow: inset 0 0 24px rgba(25, 10, 17, .2);
            content: "";
            pointer-events: none;
        }
        .door-link::after {
            position: absolute;
            top: 24%;
            right: 16%;
            left: 16%;
            height: 28%;
            border: 1px solid rgba(227, 187, 159, .37);
            border-radius: 145px 145px 3px 3px;
            background: linear-gradient(145deg, rgba(255, 219, 195, .065), transparent 52%, rgba(24, 9, 16, .1));
            box-shadow: 0 0 0 5px rgba(48, 19, 33, .11), inset 0 1px rgba(255, 235, 218, .1);
            content: "";
            pointer-events: none;
        }
        .door-link:hover { filter: brightness(1.08); }
        .door-link:focus-visible { outline: 3px solid #fff5ef; outline-offset: 8px; }
        .lower-panel {
            position: absolute;
            top: 57%;
            right: 16%;
            left: 16%;
            bottom: 8%;
            border: 1px solid rgba(227, 187, 159, .33);
            border-radius: 3px;
            background: linear-gradient(145deg, rgba(255, 219, 195, .045), transparent 48%, rgba(24, 9, 16, .12));
            box-shadow: 0 0 0 5px rgba(48, 19, 33, .1), inset 0 1px rgba(255, 235, 218, .08);
            pointer-events: none;
        }
        .door-inlay {
            position: absolute;
            top: 14%;
            left: 50%;
            width: 1px;
            height: 9%;
            background: linear-gradient(transparent, rgba(224, 184, 157, .72), transparent);
            transform: translateX(-50%);
            pointer-events: none;
        }
        .door-handle {
            position: absolute;
            top: 52%;
            right: 11%;
            width: 14px;
            height: 14px;
            border: 2px solid #f3d6a9;
            border-radius: 50%;
            background: radial-gradient(circle at 32% 27%, #fff1cd, var(--brass) 45%, #987044);
            box-shadow: 0 0 0 4px rgba(37, 13, 24, .25), 0 2px 7px rgba(15, 7, 10, .42);
            pointer-events: none;
        }
        .door-handle::before {
            position: absolute;
            top: 50%;
            right: 100%;
            width: 11px;
            height: 4px;
            background: linear-gradient(#f0d2a0, #a67b4e);
            content: "";
            transform: translateY(-50%);
        }
        .door-knocker {
            position: absolute;
            top: 43%;
            right: calc(11% - 1px);
            width: 12px;
            height: 15px;
            border: 1px solid rgba(236, 203, 156, .83);
            border-radius: 7px 7px 9px 9px;
            box-shadow: 0 1px 5px rgba(22, 9, 13, .25);
            pointer-events: none;
        }
        .threshold {
            position: absolute;
            z-index: 2;
            right: -28px;
            bottom: -17px;
            left: -28px;
            height: 17px;
            border: 1px solid rgba(226, 190, 150, .75);
            border-radius: 2px 2px 5px 5px;
            background: linear-gradient(180deg, #bb8d73, #592333);
            box-shadow: 0 10px 20px rgba(12, 3, 7, .3);
        }
        .doorway.is-opening .door-link {
            filter: brightness(1.16);
            transform: rotateY(-108deg);
        }
        .doorway.is-opening { perspective: 1000px; }

        @media (max-width: 700px) {
            .doorway { width: min(72vw, 350px); height: min(72vh, 620px); height: min(72svh, 620px); min-height: 390px; }
        }
        @media (max-width: 380px) {
            .doorway { width: 76vw; height: min(68vh, 530px); height: min(68svh, 530px); min-height: 360px; padding: 10px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
<main class="entry-page">
    <div class="floor" aria-hidden="true"></div>
    <div class="doorway" id="birthday-door">
        <a class="door-link" href="{{ url('/dashboard') }}" aria-label="Open the birthday door">
            <span class="door-inlay" aria-hidden="true"></span>
            <span class="lower-panel" aria-hidden="true"></span>
            <span class="door-knocker" aria-hidden="true"></span>
            <span class="door-handle" aria-hidden="true"></span>
        </a>
        <span class="threshold" aria-hidden="true"></span>
    </div>
</main>
<script>
    (() => {
        const doorway = document.getElementById('birthday-door');
        const door = doorway.querySelector('.door-link');
        let isOpening = false;

        door.addEventListener('click', (event) => {
            if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0) return;
            if (isOpening) {
                event.preventDefault();
                return;
            }

            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

            event.preventDefault();
            isOpening = true;
            doorway.classList.add('is-opening');
            window.setTimeout(() => window.location.assign(door.href), 720);
        });
    })();
</script>
</body>
</html>
