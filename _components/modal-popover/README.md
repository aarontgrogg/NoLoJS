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
The `auto` attribute value is the default, and is the same as having no value at all and having a value of "", and allows for an implicit close.

## [Manual](manual)
The `manual` attribute value requires an explicit "close" action.

## [Add "close" button](add-close-button)
Add a "close" button to the popover; helpful for `manual` popovers.

## [Add `::backdrop`](add-backdrop)
Use `::backdrop` via CSS to create a native visual layer between your modal/popover element and the page, no JS required.

## [Animate Open/Close](animate-open-close)
Animate the open/close states via CSS, no JS required.
