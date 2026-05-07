import { gsap } from "gsap";
import { Draggable } from "gsap/Draggable";
import InertiaPlugin from "gsap/InertiaPlugin";
import { PowerGlitch } from "powerglitch";

window.addEventListener("pageshow", function (event) {
    if (event.persisted) {
        window.location.reload();
    }
});

gsap.registerPlugin(Draggable, InertiaPlugin);

let mm = gsap.matchMedia();

const draggables = document.querySelectorAll(".draggable");
const cursor = document.querySelector("#cursor");
const links = document.querySelectorAll(".link");
const resetBtn = document.getElementById("resetBtn");

document.addEventListener("mousemove", (e) => {
    cursor.style.left = `${e.clientX - 20}px`;
    cursor.style.top = `${e.clientY - 20}px`;
});

links.forEach((link) => {
    link.addEventListener("mouseover", () => {
        cursor.classList.remove("opacity-0");
        cursor.classList.add("rotate-45");
        cursor.classList.add("scale-120");
    });
    link.addEventListener("mouseout", () => {
        cursor.classList.add("opacity-0");
        cursor.classList.remove("rotate-45");
        cursor.classList.remove("scale-120");
    });
});

draggables.forEach((draggable, key) => {
    mm.add("(prefers-reduced-motion: no-preference)", (context) => {
        const drag = Draggable.create(draggable, {
            bounds: ".main-container",
            inertia: true,
            dragClickables: true,
            onPress: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
            onRelease: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
            onDrag: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
        });

        resetBtn.addEventListener("click", () => {
            gsap.to(draggable, {
                x: 0,
                y: 0,
                duration: 1.2,
                ease: "power4.inOut",
                onUpdate: () => {
                    drag[0].update();
                },
            });
        });
    });
    mm.add("(prefers-reduced-motion: reduce)", (context) => {
        const drag = Draggable.create(draggable, {
            bounds: ".main-container",
            inertia: false,
            dragClickables: true,
            onPress: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
            onRelease: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
            onDrag: function () {
                cursor.style.left = `${this.pointerX}px`;
                cursor.style.top = `${this.pointerY}px`;
            },
        });
        resetBtn.addEventListener("click", () => {
            gsap.to(draggable, {
                x: 0,
                y: 0,
                duration: 0,
                onUpdate: () => {
                    drag[0].update();
                },
            });
        });
    });

    document.addEventListener("mousemove", (e) => {
        cursor.style.left = `${e.clientX - 20}px`;
        cursor.style.top = `${e.clientY - 20}px`;
    });
    mm.add("(prefers-reduced-motion: no-preference)", (context) => {
        gsap.fromTo(
            draggable,
            {
                clipPath: "inset(0 0 100% 0)",
            },
            {
                clipPath: "inset(0 0 0% 0)",
                duration: 2,
                delay: 0.5 * key,
                ease: "power4.inOut",
            }
        );
    });
});

function updateClock() {
    const hourElements = document.querySelectorAll(".hours");
    const minuteElements = document.querySelectorAll(".minutes");

    if (hourElements.length === 0 && minuteElements.length === 0) {
        return;
    }

    const now = new Date();
    const h = now.getHours().toString().padStart(2, "0");
    const i = now.getMinutes().toString().padStart(2, "0");

    hourElements.forEach((element) => {
        element.innerText = h;
    });

    minuteElements.forEach((element) => {
        element.innerText = i;
    });
}

updateClock();

setInterval(updateClock, 10000);

if (window.innerWidth > 768) {
    mm.add("(prefers-reduced-motion: no-preference)", (context) => {
        PowerGlitch.glitch(".glitch", {
            playMode: "hover",
            hideOverflow: true,
            timing: {
                easing: "ease-out",
            },
            glitchTimeSpan: false,
            shake: false,
            slice: {
                count: 60,
                velocity: 6,
                minHeight: 0.14,
                maxHeight: 0.01,
                cssFilters: "grayscale(100%)",
            },
        });
    });
}

const main = document.getElementById("main");
const buttons = document.querySelectorAll("a.button");

window.onload = () => {
    mm.add("(prefers-reduced-motion: no-preference)", (context) => {
        gsap.fromTo(
            main,
            {
                clipPath: "inset(0% 100% 0% 0%)",
            },
            {
                clipPath: "inset(0% 0% 0% 0%)",
                duration: 0.8,
                delay: 0.5,
            }
        );
        gsap.fromTo(
            ".blur-effect",
            {
                filter: "blur(10px)",
            },
            {
                filter: "blur(0px)",
                duration: 0.8,
                delay: 0.5,
            }
        );
    });
};

if (main) {
    mm.add("(prefers-reduced-motion: no-preference)", (context) => {
        buttons.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                let src = button.href;
                gsap.fromTo(
                    main,
                    {
                        clipPath: "inset(0% 0% 0% 0%)",
                    },
                    {
                        clipPath: "inset(0% 100% 0% 0%)",
                        duration: 0.8,
                    }
                );
                gsap.fromTo(
                    ".blur-effect",
                    {
                        filter: "blur(0px)",
                    },
                    {
                        filter: "blur(10px)",
                        duration: 0.8,
                    }
                );
                setTimeout(() => {
                    location.href = src;
                }, 800);
            });
        });
    });
}

const nextWork = document.getElementById("next-work");
const prevWork = document.getElementById("prev-work");
const works = document.querySelectorAll(".work");
const worksContainer = document.querySelector(".works-container");

let t = 0;
if (prevWork && nextWork) {
    nextWork.addEventListener("click", () => {
        if (t < works.length - 1) {
            t++;
            works.forEach((work, key) => {
                work.classList.add("blur-xl");
                work.style.transform = `translate(-${t}00%, 0)`;
            });
            works[t].classList.remove("blur-xl");
            works[t].style.transform = `translate(-${t}00%, 0)`;
        } else {
            t = 0;
            works.forEach((work) => {
                work.classList.add("blur-xl");
                work.style.transform = `translate(-${t}00%, 0)`;
            });
            works[t].classList.remove("blur-xl");
            works[t].style.transform = `translate(-${t}00%, 0)`;
        }
    });

    prevWork.addEventListener("click", () => {
        if (t > 0) {
            t--;
            works.forEach((work) => {
                work.classList.add("blur-xl");
                work.style.transform = `translate(-${t}00%, 0)`;
            });
            works[t].classList.remove("blur-xl");
            works[t].style.transform = `translate(-${t}00%, 0)`;
        } else {
            t = works.length - 1;
            works.forEach((work) => {
                work.classList.add("blur-xl");
                work.style.transform = `translate(-${t}00%, 0)`;
            });
            works[t].classList.remove("blur-xl");
            works[t].style.transform = `translate(-${t}00%, 0)`;
        }
    });

    let maxTranslate = Math.floor(
        worksContainer.getBoundingClientRect().width /
            works[0].getBoundingClientRect().width
    );

    Draggable.create(".works-container", {
        type: "x",
        bounds: { minX: 0, maxX: 0 },
        inertia: true,
        dragClickables: true,
        onDragStart() {
            this.startClientX = this.pointerEvent.clientX;
        },
        onDragEnd() {
            const endClientX = this.pointerEvent.clientX;
            const diff = endClientX - this.startClientX;
            if (diff < 0) {
                if (t < works.length - maxTranslate) {
                    t++;
                    works.forEach((work) => {
                        work.style.transform = `translate(-${t}00%, 0)`;
                    });
                    works[t].classList.remove("blur-xl");
                } else {
                    t = 0;
                    works.forEach((work) => {
                        work.classList.add("blur-xl");
                        work.style.transform = "translate(0px, 0)";
                    });
                    works[t].classList.remove("blur-xl");
                }
            } else {
                if (t > 0) {
                    t--;
                    works.forEach((work) => {
                        work.classList.add("blur-xl");
                        work.style.transform = `translate(-${t}00%, 0)`;
                    });
                    works[t].classList.remove("blur-xl");
                } else {
                    t = works.length - 1;
                    works.forEach((work) => {
                        work.classList.add("blur-xl");
                        work.style.transform = `translate(-${t}00%, 0)`;
                    });
                    works[t].classList.remove("blur-xl");
                }
            }
        },
    });
}

const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

const pixelSize = 10;

function resizeCanvas() {
    // Met à jour la taille du canvas
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    // Efface le canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Redessine les pixels
    drawPixels();
}

function drawPixels() {
    for (let x = 0; x < canvas.width; x += pixelSize) {
        for (let y = 0; y < canvas.height; y += pixelSize) {
            const o = Math.floor(Math.random() * 100) / 100;
            const opacity = o > 0.4 ? 0 : o;
            ctx.fillStyle = `rgba(109, 255, 30, ${opacity})`; // rgba au lieu de rgb pour l'opacité
            ctx.fillRect(x, y, pixelSize, pixelSize);
        }
    }
}

// Initial draw
resizeCanvas();

// Redimensionne et redessine à chaque resize
window.addEventListener("resize", resizeCanvas);

canvas.addEventListener("mousemove", (e) => {
    const rect = canvas.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    const px = Math.floor(mouseX / pixelSize);
    const py = Math.floor(mouseY / pixelSize);

    // Liste des neighbors : centre + croix
    const neighbors = [
        [px, py], // centre
        [px + 1, py], // droite
        [px - 1, py], // gauche
        [px, py + 1], // bas
        [px, py - 1], // haut
    ];

    neighbors.forEach(([x, y], index) => {
        if (x < 0 || y < 0) return;

        // Le pixel central : opacité 1
        let opacityOn = index === 0 ? 1 : Math.random();

        ctx.clearRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
        ctx.fillStyle = `rgba(109, 255, 30, ${opacityOn})`;
        ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);

        // Retour aléatoire après délai
        setTimeout(() => {
            const o = Math.random();
            const opacityOff = o > 0.4 ? 0 : o;

            ctx.clearRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
            ctx.fillStyle = `rgba(109, 255, 30, ${opacityOff})`;
            ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
        }, 100);
    });
});
