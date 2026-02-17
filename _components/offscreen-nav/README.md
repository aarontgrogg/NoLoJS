# Offscreen Nav

aka: Mobile Nav

- Using the HTML [`popover`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/popover) attribute creates no-JavaScript offscreen content.
- There are three values for the `popover` attribute: `auto` (default, same as none and ""), `manual` and `hint`.\
(At this time, `hint` is implemented inconsistently, so recommend avoiding it.)
- The default CSS for any `popover` is: `position: fixed`, `margin: auto` and `display: none` (if not `open`).
- You can override any of this via CSS.
- You can also add a `::backdrop`, customize the location and animate the show/hide via CSS.

> [!TIP]
> If you want to prevent layout shift as the scrollbar disappears/reappears, add this to your `html` CSS: `scrollbar-gutter: stable;`

## [Nav Menu](nav-menu)
Basic, native offscreen navigation menu, created just by adding the `popover` attribute to an HTML element.

## [Add "close" button](add-close-button)
Building on the above version, adding an explicit "close" button.

## [Add `::backdrop`](add-backdrop)
Building on the above versions, adding a native CSS "backdrop" to the popover element.

## [Animate Open/Close](animate-open-close)
Buliding on the above versions, adding some simple animation as the popover opens and closes.
