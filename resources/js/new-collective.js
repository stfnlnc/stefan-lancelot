import './bootstrap';
import Lenis from 'lenis'
import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {Observer} from 'gsap/Observer';

const lenis = new Lenis({
    autoRaf: true,
});

const exploreBtn = document.getElementById('explore');
const exploreImg = document.querySelector('#explore > div > img');
let mouseY = 0;

document.addEventListener('mousemove', (e) => {
    mouseY = e.clientY;
});

gsap.registerPlugin(ScrollTrigger, Observer);

gsap.to(exploreBtn, {
    y: window.innerHeight / 2,
    duration: 0.5,
    ease: "power2.out"
});

const videos = document.querySelectorAll('video');

gsap.ticker.add(() => {
    gsap.to(exploreBtn, {
        y: mouseY - window.innerHeight / 2,
        duration: 1,
        ease: "power2.out"
    });
});

videos.forEach((video, key) => {
    video.addEventListener('mouseenter', (e) => {
        exploreImg.src = video.dataset.src
        video.play();
        videos.forEach((video, k) => {
            if (key !== k) {
                video.pause();
            }
        })
    })
});


videos.forEach(video => {
    ScrollTrigger.create({
        trigger: video,
        start: "top bottom",
        end: "bottom top",
        onUpdate: self => {
            const btnRect = exploreBtn.getBoundingClientRect();
            const videoRect = video.getBoundingClientRect();

            const isOverlapping = !(btnRect.bottom < videoRect.top || btnRect.top > videoRect.bottom);

            if (isOverlapping) {
                exploreImg.src = video.dataset.src
                video.play();
            } else {
                video.pause();
            }
        }
    });
});




