# Expanding form field

aka: Auto-Growing Inputs

- No special HTML required, just need one line of CSS: `field-sizing: content;`
- Adding the CSS [`field-sizing: content`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/field-sizing) declaration for any `file`, `input`, `select`, `output` or `textarea` element creates no-JavaScript "expand or contract" as you type.
- The value `content` allows all of the above form elements to collapse to the minimum width required or expand as necessary, and allows `output` or `textarea` elements to expand their height as necessary.
- The value `fixed` (default) restricts all of the above behavior.

## [CSS](styles.css)
- JS: No
- Baseline: [Limited availability](https://webstatus.dev/features/field-sizing)
- CodePen: https://codepen.io/aarontgrogg/pen/myPGBWG
