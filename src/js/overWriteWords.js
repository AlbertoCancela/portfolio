const words = ["website", "portfolio", "system", "place"];
const element = document.getElementById("status-msg");
let wordIndex = 0;
let charIndex = 0;
let deleting = false;

function typeEffect() {
    const currentWord = words[wordIndex];
    const prefix = "Welcome to my ";

    if (!deleting) {
        element.textContent = prefix + currentWord.substring(0, charIndex++);
        if (charIndex > currentWord.length) {
            setTimeout(() => deleting = true, 1000);
        }
    } else {
        element.textContent = prefix + currentWord.substring(0, charIndex--);
        if (charIndex < 0) {
            deleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }
    }
    setTimeout(typeEffect, deleting ? 60 : 80);
}

typeEffect();