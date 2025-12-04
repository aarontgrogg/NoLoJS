# Sticky Content

aka: Sticky Headers, Floating Sidebar

- No special HTML required, just need one line of CSS: `position: sticky;`
- Adding the CSS [`position: sticky`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/position#sticky) to any HTML element creates no-JavaScript "sticky" component.
- Sticky elements can be scoped within a container, so that as you scroll, one element can "replace" another as the sticky element.

> [!WARNING]
> There are [some "oddities"](https://frontendmasters.com/blog/the-weird-parts-of-position-sticky/) that you should be aware of.
> 
> Also, `overflow: hidden` will prevent `position: sticky` from working; [use `overflow: clip` instead](https://gomakethings.com/the-overflow-hidden-property-and-sticky-headers/).

## [CSS](styles.css)
- JS: No
- Baseline: [Widely Available](https://webstatus.dev/features/sticky-positioning)
- CodePen: https://codepen.io/aarontgrogg/pen/RNaYByN
