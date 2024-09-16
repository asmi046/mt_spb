import './bootstrap';

import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";


gsap.registerPlugin(TextPlugin);


const items = document.querySelectorAll(".c_blk .c span");

gsap.from(items, {
  textContent: 0,
  duration: 1,
  snap: { textContent: 1 },
  stagger: 1,
  // onUpdate: textContent.replace(/\B(?=(\d{3})+(?!\d))/g, ","),
});
