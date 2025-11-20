# Loading attribute

aka: Eager- or Lazy-load images and videos

- Using the HTML [`loading`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/img#loading) and [`preload`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/video#preload) attributes creates no-JavaScript lazy-loading.
- `img` elements use the `loading` attriute.
- `video` elements use the `preload` attriute.
- Tells the browser to either load the asset immediately or delay it.

## [Eager](eager)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/loading-lazy) \
  Firefox since 2023-12-19 (121), Safari since 2023-03-27 (16.4) \
  Neither Firefox nor Safari support `loading` for `iframe`.
- CodePen: https://codepen.io/aarontgrogg/pen/raezQJv

## [Lazy](lazy)
- JS: No
- Basline: [Newly Available](https://webstatus.dev/features/loading-lazy) \
  Firefox since 2023-12-19 (121), Safari since 2023-03-27 (16.4) \
  Neither Firefox nor Safari support `loading` for `iframe`.
- CodePen: https://codepen.io/aarontgrogg/pen/raezQJv
