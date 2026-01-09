# Shrinking Header

aka: Fixed Header, Shrink on Scroll Header

- No special HTML required, just need a header element that is `position: fixed;`
- Adding CSS [`animation-timeline: scroll()`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline/scroll) to an HTML element along with a CSS animation that should happen as the user scrolls, 
  creates a no-JavaScript "shrinking" header.

> [!IMPORTANT]
> Animation like this should always be placed within a `media` query that checks whether or not the user `prefers-reduced-motion`. \
> **Any** animation in a page should be placed within a similar check, as [motion can cause some people to have a very bad experience](https://web.dev/learn/accessibility/motion). \
> And other people just may not enjoy motion like that, so, we might as well just be nice. :-)

> [!TIP]
> Depending on what you are animating, it may be possible to have child elements respond to the parent container's size, meaning you would only need to animate the parent container's size!

## [CSS](styles.css)
- JS: No
- Baseline: [`animation-timeline`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline), [`scroll()`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline/scroll)
- CodePen: https://codepen.io/aarontgrogg/pen/emzzVGR

## Resources
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline
- https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline/scroll
- https://webstatus.dev/features/scroll-driven-animations
- https://scroll-driven-animations.style/demos/shrinking-header-shadow/css/
