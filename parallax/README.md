# Parallax



- Using a combination of CSS [`perspective`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective), 
  [`transform-style`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style), and a couple of 
  [`transform`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform) properties creates a no-JavaScript scrolling 3D animation as the user scrolls the page.

> [!IMPORTANT]
> Animation like this should always be placed within a `media` query that checks whether or not the user `prefers-reduced-motion`. \
> **Any** animation in a page should be placed within a similar check, as [motion can cause some people to have a very bad experience](https://web.dev/learn/accessibility/motion). \
> And other people just may not enjoy motion like that, so, we might as well just be nice. :-)

## [Basic](basic)
- JS: No
- Baseline: [`perspective`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective), [`transform-style`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style), 
  [`transform`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform)
- CodePen: https://codepen.io/aarontgrogg/pen/myEOzoQ

## Resources
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/perspective
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform-style
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/transform
