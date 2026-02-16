---
name: Lazy Load - Audio
layout: component
html: true
css: false
js: false
codepen: NPNveKa
baseline: ['audio']
---

# Preload attribute for audio assets
The HTML `preload` attribute for [audio](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio#preload) files creates no-JavaScript pre- or lazy-loading those assets.
- `auto` (default) tells the browser to start downloading the asset immediately.
- `none` tells the browser **NOT** to start downloading the asset immediately, but wait until the asset is nearly within the viewport.
- `metadata` tells the browser to download **ONLY** the asset's metadata (length, etc.), and wait until the asset is nearly within the viewport to download it. \
   Note that `metadata` is **NOT** implemented consistenly across browsers, so it may download more than just metadata.
