# Pre- or lazy- loading audio, image or video assets

Images use a different attribute than video/audio files do, but the concept is the same: eagerly-load assets that the user might see/interact with, and lazy-load assets they might not.

- Use the `loading` attribute for [`img`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/img#loading) assets.
- Use the `preload` attribute for [`audio`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio#preload) or
[`video`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/video#preload) assets.

In both cases, this allows easy no-JavaScript pre- or lazy-loading those assets.
 
