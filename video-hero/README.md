# Video Hero



- Using the HTML [`picture`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/picture)
  and [`video`](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/video) elements 
  and CSS [`grid`](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Grid_layout) layout, 
  creates no-JavaScript responsive video hero component with content overlay.
- The `picture` serves as a responsive "poster" for each video aspect-ratio.
- CSS `grid` allows you to easily position the `video` *over* the `picture`, so it appears as if the image just "comes to life".
- CSS `grid` also allows you to easily position any content *over* the `video`/`picture` so users can reaed your content while waiting for the video to load.
- CSS `grid` also allows you to easily **remove** any of the `video`, `picture` or content containers, and the rest still just renders as it should.

## [Content over video/picture](content-over-video-picture)
- JS: No
- Baseline: `picture`: [Widely Available](https://webstatus.dev/features/picture), `video`: [Widely Available](https://webstatus.dev/features/video), `grid`: [Widely Available](https://webstatus.dev/features/grid)
- Explanation: https://aarontgrogg.com/blog/2026/01/06/improving-lcp-for-video-hero-components/
- Demo: https://aarontgrogg.com/lab/video-hero-components/
