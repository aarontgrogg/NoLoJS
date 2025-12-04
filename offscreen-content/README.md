# Offscreen Content

aka: Related Content

- Using the HTML [`popover`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/popover) attribute creates no-JavaScript offscreen content.
- There are three values for the `popover` attribute: `auto` (default, same as none and ""), `manual` and `hint`.\
(At this time, `hint` is implemented inconsistently, so recommend avoiding it.)
- The default CSS for any `popover` is: `position: fixed`, `margin: auto` and `display: none` (if not `open`).
- You can override any of this via CSS.
- You can also add a `::backdrop`, customize the location and animate the show/hide via CSS.

> [!TIP]
> If you want to prevent layout shift as the scrollbar disappears/reappears, add this to your `html` CSS: `scrollbar-gutter: stable;`

## [Related Content](related-content)
- JS: No
- Baseline: [Newly Available](https://webstatus.dev/features/popover)
- CodePen: https://codepen.io/aarontgrogg/pen/wBMPMVG

## [Add "close" button](add-close-button)
- Add a `::backdrop` via CSS.
- JS: No
- Baseline: [Widely Availability](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/button#popovertargetaction)
- CodePen: https://codepen.io/aarontgrogg/pen/wBMPMVG

## [Add `::backdrop`](add-backdrop)
- Add a `::backdrop` via CSS.
- JS: No
- Baseline: [Widely Availability](https://webstatus.dev/features/backdrop)
- CodePen: https://codepen.io/aarontgrogg/pen/wBMPMVG

## [Animate Open/Close](animate-open-close)
- Animate the open/close states via CSS.
- JS: No
- Baseline: [Widely Availability](https://webstatus.dev/features/animations-css)
- CodePen: https://codepen.io/aarontgrogg/pen/wBMPMVG
