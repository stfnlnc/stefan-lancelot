import { gsap } from "gsap";
import { Draggable } from "gsap/Draggable";
import InertiaPlugin from "gsap/InertiaPlugin";
import { PowerGlitch } from "powerglitch";

gsap.registerPlugin(Draggable, InertiaPlugin);

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
    const drag = Draggable.create(draggable, {
        bounds: ".main-container",
        inertia: true,
        // cursor: "none",
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

    document.addEventListener("mousemove", (e) => {
        cursor.style.left = `${e.clientX - 20}px`;
        cursor.style.top = `${e.clientY - 20}px`;
    });

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
}

const main = document.getElementById("main");
const buttons = document.querySelectorAll("a.button");

window.onload = () => {
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
};

if (main) {
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
