<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto Cancela</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="/assets/images/icons/aboutme.png">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<style>
    .font-times {
        font-family: "Times New Roman", Times, serif;
    }
    .blink {
        animation: blink 0.6s steps(2, start) infinite;
    }

    @keyframes blink {
        to { visibility: hidden; }
    }

    .animate-progress {
        width: 0%;
        animation: progress 1.6s ease-out forwards;
    }

    @keyframes progress {
        from { width: 0%; }
        to { width: 100%; }
    }

    /* Pixel feel */
    #retro-loader * {
        image-rendering: pixelated;
        font-smooth: never;
        -webkit-font-smoothing: none;
    }
    body {
    font-family: "VT323", monospace !important;
    font-weight: 700; /* fuerza bold */
}
</style>

<body class="bg-teal-700">
    <!-- <div id="retro-loader" class="fixed inset-0 bg-teal-800 flex items-center justify-center z-[9999]">
        <div class="loader-window bg-teal-900 border-4 border-teal-600 px-6 py-4 shadow-xl text-teal-100 font-mono">
            <p class="text-lg mb-4">
                Loading...<span class="blink">▌</span>
            </p>
            <div class="progress-outline border-2 border-teal-500 w-64 h-6 p-1">
                <div class="progress-bar bg-teal-300 h-full animate-progress"></div>
            </div>
        </div>
    </div> -->

    <main class="flex flex-col w-full min-h-screen">
        <?php include_once "src/components/mainscreen.php"?>
    </main>
    <script src="/src/js/windows.js"></script>
    <script src="/src/js/overWriteWords.js"></script>
    <script src="/src/js/techData.js"></script>
    <script src="/src/js/showView.js"></script>
    <script src="/src/js/currentDT.js"></script>
    <script src="/src/js/generateTechData.js" defer></script>
</body>
</html>