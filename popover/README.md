# Popover

aka: Modal / Overlay

- Using the HTML [`popover`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/popover) attribute creates no-JavaScript popovers.
- There are three values for the `popover` attribute: `auto` (default, same as none and ""), `manual` and `hint`.\
(At this time, `hint` is implemented inconsistently, so recommend avoiding it.)
- The default CSS for any `popover` is: `position: fixed`, `margin: auto` and `display: none` (if not `open`).
- You can override any of this via CSS.
- You can also add a `::backdrop`, customize the location and animate the show/hide via CSS.

> [!TIP]
> If you want to prevent layout shift as the scrollbar disappears/reappears, add this to your `html` CSS: `scrollbar-gutter: stable;`

## [Auto](auto) (default)
- JS: No
- Baseline: [`popover`](https://webstatus.dev/features/popover)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Manual](manual)
- JS: No
- Baseline: [`popover`](https://webstatus.dev/features/popover)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Add "close" button](add-close-button)
- Add a "close" button to the popover.
- JS: No
- Baseline: [`popovertargetaction`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/button#popovertargetaction)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Add `::backdrop`](add-backdrop)
- Add a `::backdrop` via CSS.
- JS: No
- Baseline: [`::backdrop`](https://webstatus.dev/features/backdrop)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Animate Open/Close](animate-open-close)
- Animate the open/close states via CSS.
- JS: No
- Baseline: [`animations-css`](https://webstatus.dev/features/animations-css)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW
