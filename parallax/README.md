# Parallax



- Using a combination of CSS [`perspective`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective), 
  [`transform-style`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style), and a couple of 
  [`transform`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform) properties creates a no-JavaScript scrolling 3D animation as the user scrolls the page.

> [!IMPORTANT]
> Animation like this should always be placed within a `media` query that checks whether or not the user `prefers-reduced-motion`. \
> **Any** animation in a page should be placed within a similar check, as [motion can cause some people to have a very bad experience](https://web.dev/learn/accessibility/motion). \
> And other people just may not enjoy motion like that, so, we might as well just be nice. :-)

## [Perspective](perspective)
- JS: No
- Baseline: [`perspective`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective), [`transform-style`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style), 
  [`transform`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform)
- CodePen: https://codepen.io/aarontgrogg/pen/myEOzoQ

## [Scroll Animation](scroll-animation)
- JS: No
- Baseline: [`scroll-driven-animations`](https://webstatus.dev/features/scroll-driven-animations)
- CodePen: https://codepen.io/aarontgrogg/pen/WbxjVrv

## Resources
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/view-timeline
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-range
