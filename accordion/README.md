# accordion

aka: Expanding Content Panel

- Using the HTML [`details`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/details) and [`summary`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/summary) elements creates no-JavaScript accordions.
- The panels are closed by default.
- Clicking the `summary` toggles the open/close state.

## [Basic](basic)
- No JS
- [Basline Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Initially Open](initially-open)
- No JS
- Add an `open` attribute to the `details` elements to set it to be initially open.
- [Basline Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Exclusive Open](exclusive-open)
- No JS
- Add a `name` attribute with the same value to multiple `details` elements to restrict only one to be open at a time, similar to `radio` buttons.
- [Basline Widely Available](https://webstatus.dev/features/details)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Adjust `::marker`](adjust-marker)
- No JS
- Adjust the `::marker` appearance via CSS.
- [Baseline Limited Availability](https://webstatus.dev/features/marker)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX

## [Animate Open/Close](animate-open-close)
- No JS
- Animate the open/close states via CSS.
- [Baseline Newly Availabile](https://webstatus.dev/?q=details-content+OR+content-visibility+OR+transition-behavior)
- [Baseline Limited Availability](https://webstatus.dev/features/interpolate-size)
- CodePen: https://codepen.io/aarontgrogg/pen/GgoOqVX
