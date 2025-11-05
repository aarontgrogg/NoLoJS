# accordion

This folder contains a minimal accordion component placeholder for NoLoJS.

Files included:
- `index.js` — a small, dependency-free accordion implementation.

Usage example:

```html
<div id="my-accordion">
  <div class="accordion-item">
    <button class="accordion-header">Section 1</button>
    <div class="accordion-content">Content 1</div>
  </div>
  <div class="accordion-item">
    <button class="accordion-header">Section 2</button>
    <div class="accordion-content">Content 2</div>
  </div>
</div>
<script type="module">
  import { createAccordion } from './accordion/index.js';
  createAccordion(document.getElementById('my-accordion'));
</script>
```

Future work: add tests, styles, and documentation.
