# Preload attribute for audio and video assets

aka: Pre- or Lazy-load audio or video assets

- Using the HTML `preload` attribute for [audio](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio#preload) or [video](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/video#preload) files creates no-JavaScript pre- or lazy-loading those assets.
- `auto` (default) tells the browser to start downloading the asset immediately.
- `none` tells the browser **NOT** to start downloading the asset immediately, but wait until the asset is nearly within the viewport.
- `metadata` tells the browser to download **ONLY** the asset's metadata (length, etc.), and wait until the asset is nearly within the viewport to download it. \
   Note that `metadata` is **NOT** implemented consistenly across browsers, so it may download more than just metadata.

## [Auto](auto)
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/audio)
- CodePen: https://codepen.io/aarontgrogg/pen/NPNveKa

## [None](none)
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/audio)
- CodePen: https://codepen.io/aarontgrogg/pen/NPNveKa

## [Metadata](metadata)
- JS: No
- Basline: [Widely Available](https://webstatus.dev/features/audio)
- CodePen: https://codepen.io/aarontgrogg/pen/NPNveKa
