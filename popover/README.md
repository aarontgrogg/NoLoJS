# Popover

aka: Modal / Overlay

- Using the HTML [`popover`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/popover) attribute creates no-JavaScript popovers.
- There are three native "types", `auto` (default), `manual` and `hint`.\
(At this time, `hint` is implemented inconsistently, so recommend avoiding it.)
- The default CSS for any `popover` is: `position: fixed`, `margin: auto` and `display: none` (if not `open`).
- You can override any of this via CSS.
- You can also add a `::backdrop`, customize the location and animate the show/hide via CSS.

## [Auto](auto) (default)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/popover)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Manual](manual)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/popover)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Add `::backdrop`](add-backdrop)
- Add a `::backdrop` via CSS.
- JS: No
- Basline: [Widely Availability](https://webstatus.dev/features/backdrop)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW

## [Animate Open/Close](animate-open-close)
- Animate the open/close states via CSS.
- JS: No
- Basline: [Widely Availability](https://webstatus.dev/features/animations-css)
- CodePen: https://codepen.io/aarontgrogg/pen/QwyOKNW
