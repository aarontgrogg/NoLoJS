# Smooth Scrolling



- No special HTML required, just need one line of CSS: `scroll-behavior: smooth;`
- Adding the CSS [`scroll-behavior: smooth`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/scroll-behavior#smooth) to any HTML element creates no-JavaScript "smooth" scroll; meaning, instead of just "jumping" to the target link, it scrolls in an animated fashion.
- While this can be a more enjoyable, understandable experience for some users, as the animated scroll can help provide a context of where you are scrolling to, it can also be an uncomfortable experiece for others; see note below.

> [!IMPORTANT]
> Animation like this should always be placed within a `media` query that checks whether or not the user `prefers-reduced-motion`. \
> **Any** animation in a page should be placed within a similar check, as [motion can cause some people to have a very bad experience](https://web.dev/learn/accessibility/motion). \
> And other people just may not enjoy motion like that, so, we might as well just be nice. :-)

> [!TIP]
> After arriving at the "scrolled-to" location, you might find that the scrolled-to content is too close to the top of the browser window. \
> And if you have a fixed top menu, it might even appear *behind* that menu. Add a `scroll-margin-top` or `scroll-padding-top` to give the `:target` a little "room to breathe":
> ```css
> :target {
>   scroll-margin-top: 100px; /* Or whatever space you need */
> }
> ```

## [CSS](styles.css)
- JS: No
- Baseline: [Widely Available](https://webstatus.dev/features/scroll-behavior)
- CodePen: https://codepen.io/aarontgrogg/pen/OPNovZR
