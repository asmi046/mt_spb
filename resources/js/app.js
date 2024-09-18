import './bootstrap';

import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";


gsap.registerPlugin(TextPlugin,ScrollTrigger,ScrollToPlugin);

let tl = gsap.timeline({delay:.5})

tl.fromTo('.bnr_text',
    {
        opacity:0,
        x:-300
    },
    {
        opacity:1,
        x:0,
        duration:.5
    }
).fromTo(
    '.bnr_img',
    {
        opacity:0,
    },
    {
        opacity:1,
        duration:1
    },
)
// const items = document.querySelectorAll(".c_blk .c span");

// gsap.from(items, {
//   textContent: 0,
//   duration: 1,
//   snap: { textContent: 1 },
//   stagger: 1,
// });
