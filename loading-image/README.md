# Loading attribute for images

aka: Eager- or Lazy-load images

- Using the HTML [`loading`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/img#loading) attribute on an `img` asset creates no-JavaScript lazy-loading.
- Tells the browser to either load the asset immediately or delay it.
- A value of `eager` (default) tells the browser to start downloading the asset immediately.
- A value of `lazy` tells the browser **NOT** to start downloading the asset immediately, but wait until the asset is nearly within the viewport.
- Note this can also be used for `img` elements that are within `picture` elements.
- Note this can also be used for `iframe` elements, but is not coonsistently implement, so it currently unreliable.

## [Eager](eager)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/loading-lazy) \
  In Firefox since 2023-12-19 (121), Safari since 2023-03-27 (16.4) \
  Neither Firefox nor Safari support `loading` for `iframe`.
- CodePen: https://codepen.io/aarontgrogg/pen/raezQJv

## [Lazy](lazy)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/loading-lazy) \
  In Firefox since 2023-12-19 (121), Safari since 2023-03-27 (16.4) \
  Neither Firefox nor Safari support `loading` for `iframe`.
- CodePen: https://codepen.io/aarontgrogg/pen/raezQJv
