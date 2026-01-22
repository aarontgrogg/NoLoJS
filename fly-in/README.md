# Fly-In Content

aka: Animated Content, Slide-In Panels

- Using a combination of CSS [`view-timeline`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/view-timeline), 
  [`animation-timeline`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline), and a couple of 
  [`animation-range`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-range) properties creates a no-JavaScript content animation as the user scrolls the page.

> [!IMPORTANT]
> Animation like this should always be placed within a `media` query that checks whether or not the user `prefers-reduced-motion`. \
> **Any** animation in a page should be placed within a similar check, as [motion can cause some people to have a very bad experience](https://web.dev/learn/accessibility/motion). \
> And other people just may not enjoy motion like that, so, we might as well just be nice. :-)

## [Scroll Animation](scroll-animation)
- JS: No
- Baseline: [`scroll-driven-animations`](https://webstatus.dev/features/scroll-driven-animations)
- CodePen: https://codepen.io/aarontgrogg/pen/ZYOyjRY

## Resources
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/view-timeline
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-range
- https://scroll-driven-animations.style/
