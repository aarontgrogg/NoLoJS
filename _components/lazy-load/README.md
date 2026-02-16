# Pre- or lazy- loading audio, image or video assets

Without doing anything special, images, audio and video assets sstart downloading as soon as the browser sees them. Meaning, their native state is to download "eager".

This is okay for above-the-fold (initially visible onscreen) assets, but ideally assets that are _not_ above-the-fold would be "lazy loaded". Meaning, they would only download if the user shows some intent or desire to see them, like scrolling the page far enough to see them.

Images use a different attribute than video/audio files do, but the idea is the same: eagerly-load assets that the user might see/interact with, and lazy-load assets they might not.

## [image](image)
- Using the HTML [`loading`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/img#loading) attribute on an `img` asset creates no-JavaScript lazy-loading.
- Tells the browser to either load the asset immediately or delay it.
- A value of `eager` (default) tells the browser to start downloading the asset immediately.
- A value of `lazy` tells the browser **NOT** to start downloading the asset immediately, but wait until the asset is nearly within the viewport.
- Note this can also be used for `img` elements that are within `picture` elements.
- Note this can also be used for `iframe` elements, but is not coonsistently implement, so it currently unreliable.

## [audio](audio) / [video](video)
- Using the HTML `preload` attribute for [audio](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio#preload) files creates no-JavaScript pre- or lazy-loading those assets.
- `auto` (default) tells the browser to start downloading the asset immediately.
- `none` tells the browser **NOT** to start downloading the asset immediately, but wait until the asset is nearly within the viewport.
- `metadata` tells the browser to download **ONLY** the asset's metadata (length, etc.), and wait until the asset is nearly within the viewport to download it. \
   Note that `metadata` is **NOT** implemented consistenly across browsers, so it may download more than just metadata.

In all cases, this allows easy native, no-JavaScript pre- or lazy-loading those assets.
 
