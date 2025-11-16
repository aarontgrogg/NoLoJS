# Accordion

aka: Expanding Content Panel

- Using the HTML [`details`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/details) and [`summary`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/summary) elements creates no-JavaScript accordions.
- The panels are closed by default.
- Clicking the `summary` toggles the open/close state.

## [Basic](basic)
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Initially Open](initially-open)
- Add an `open` attribute to the `details` elements to set it to be initially open.
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Exclusive Open](exclusive-open)
- Add a `name` attribute with the same value to multiple `details` elements to restrict only one to be open at a time, similar to `radio` buttons.
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Adjust `::marker`](adjust-marker)
- Adjust the `::marker` appearance via CSS.
- JS: No
- Basline: [Limited Availability](https://webstatus.dev/features/marker)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Animate Open/Close](animate-open-close)
- Animate the open/close states via CSS.
- JS: No
- Basline: [Newly Availabile](https://webstatus.dev/?q=details-content+OR+content-visibility+OR+transition-behavior)
- Basline: [Limited Availability](https://webstatus.dev/features/interpolate-size)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX
