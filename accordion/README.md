# accordion

aka: Expanding Content Panel

No JS

## Intro
Using the HTML [`details`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/details) and [`summary`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/summary) elements creates no-JavaScript accordions.
The panels are closed by default.
Clicking the `summary` toggles the open/close state.

## Basic
[Basline Widely Available](https://webstatus.dev/features/details)

## Initially Open
Add an `open` attribute to the `details` elements to set it to be initially open.
[Basline Widely Available](https://webstatus.dev/features/details)

## Exclusive Open
Add a `name` attribute with the same value to multiple `details` elements to restrict only one to be open at a time, similar to `radio` buttons.
[Basline Widely Available](https://webstatus.dev/features/details)

## Adjust `::marker`
Adjust the `::marker` appearance via CSS.
[Baseline Limited Availability](https://webstatus.dev/features/marker)

## Animate Open/Close
Animate the open/close states via CSS.
[Baseline Newly Availabile](https://webstatus.dev/?q=details-content+OR+content-visibility+OR+transition-behavior)
[Baseline Limited Availability](https://webstatus.dev/features/interpolate-size)
