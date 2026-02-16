# Pre- or lazy- loading audio, image or video assets

Without doing anything special, images, audio and video assets sstart downloading as soon as the browser sees them. Meaning, their native state is to download "eager".

This is okay for above-the-fold (initially visible onscreen) assets, but ideally assets that are _not_ above-the-fold would be "lazy loaded". Meaning, they would only download if the user shows some intent or desire to see them, like scrolling the page far enough to see them.

Images use a different attribute than video/audio files do, but the idea is the same: eagerly-load assets that the user might see/interact with, and lazy-load assets they might not.

- [image](image) assets use the `loading` attribute.
- [audio](audio) or [video](video) assets use the `preload` attribute.

In all cases, this allows easy native, no-JavaScript pre- or lazy-loading those assets.
 
