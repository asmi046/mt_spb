import './bootstrap';

import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";


gsap.registerPlugin(TextPlugin,ScrollTrigger,ScrollToPlugin);

let tl = gsap.timeline({delay:1})
    .from('.about', { opacity:0, scale:0})
    // .from('.location_section', { opacity:0, scale:0})

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
        duration:.5
    },
)
.to('.about',
    {
        opacity:1,
        scale: 1,
        duration:.5
    }
)
.to('.location_wrapper', {
        scrollTrigger:
         {
            // trigger: '.location_wrapper',
            markers:true,
            start:'top bottom',
            // pin: true,
            // end:'+=500',
            // // scrub:true
        },
        opacity:1,
        scale: 1,
        duration:2
    }

)

// gsap.to('.about .photo', {
//     scrollTrigger: {
//         trigger: '.about_section',
//         markers:true,
//         start:'top bottom',
//         end:'top center',
//         scrub:true
//     },
//     opacity:1,
// });

// const items = document.querySelectorAll(".c_blk .c span");

// gsap.from(items, {
//   textContent: 0,
//   duration: 1,
//   snap: { textContent: 1 },
//   stagger: 1,
// });
