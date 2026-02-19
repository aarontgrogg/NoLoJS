# Accordion

aka: Expanding Content Panel

- Using the HTML [`details`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/details) and [`summary`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/summary) elements creates no-JavaScript accordions.
- The panels are closed by default.
- Clicking the `summary` toggles the open/close state.

## [Basic](basic)
- Requiring no special CSS or JS, just plain HTML

## [Initially Open](initially-open)
- Add an `open` attribute to the `details` elements to set it to be initially open.

## [Exclusive Open](exclusive-open)
- Add a `name` attribute with the same value to multiple `details` elements to force only one can be open at a time, similar to `radio` buttons.

## [Adjust `::marker`](adjust-marker)
- Adjust the appearance of the `summary` `::marker` via CSS.

## [Animate Open/Close](animate-open-close)
- Animate the open/close states using only CSS.

## [Force Open](force-open)
- Force all details panels openusing only CSS.
