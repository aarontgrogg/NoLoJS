# Pre- or lazy- loading audio, image or video assets

Images use a different attribute than video/audio files do, but the concept is the same: eagerly-load assets that the user might see/interact with, and lazy-load assets they might not.

- Use the `loading` attribute for [image](image) assets.
- Use the `preload` attribute for [audio](audio) or [video](video) assets.

In all cases, this allows easy native, no-JavaScript pre- or lazy-loading those assets.
 
