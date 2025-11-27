# NoLoJS
Reduce the JS Workload with no- or lo-JS options.

> **I have nothing against JS**, but it has better things to do \
> than manage your accordions and nav menus...

For years, JavaScript has been the web's workhorse. If HTML and CSS couldn't do something, we used JavaScript.

And while that **has** helped push the user’s experience, and HTML and CSS themselves, forward, the web is choking on JS.

As HTML and CSS gain capabilities, we should transfer any JavaScript workload possible to them.

This is an organic collection of common JS patterns that can be replaced with just HTML, CSS, and no, or very low, JS.

As HTML and CSS continue to mature, this collection should expand.

Please feel free to copy these and suggest others; Issues and PRs welcome!

## References

There have been plenty of similar articles about this topic. Here are a few:

- [HTML and CSS techniques to reduce your JavaScript](https://calendar.perfplanet.com/2020/html-and-css-techniques-to-reduce-your-javascript/), by [Anthony Ricaud](https://ricaud.me/)
- [When HTML & CSS Replace Javascript: A Simple Element Cheatsheet](https://pagepro.co/blog/html-css-vs-javascript/) by [Joanna Chmiel](https://www.linkedin.com/in/joanna-chmiel-319756164/)
- [Replacing JS with HTML and CSS](https://www.youtube.com/watch?v=d_CVzwfIzHM) by [Chris Ferdinandi](https://gomakethings.com/)
- [Modern CSS Techniques That Replace JavaScript](https://medium.com/@muhammadhashir752/modern-css-techniques-that-replace-javascript-and-save-you-time-a9f6c595318a) by [Muhammad Hashir](https://www.linkedin.com/in/m-hashir)

There are surely many more, so please contribute!

## Contribute

And speaking of contributing, if you'd like to add your favorite no- or lo-JS pattern, please submit a PR, and please try to follow the pattern as much as possible...

- If creating a new top-level pattern, name after the _feature_, not the HTML or CSS; in theory, this shold make it easier for people to find.\
  Example: The use of `lazy-load` instead of something like `loading` or `preload`. Ideally someone looking to lazy-load something might find that more easily.
- Within the pattern, create a `README.md` that includes any other names by which this might be called, a brief description, and links to any variations of that pattern.\
  Example: Within the `accordion` pattern, the `README.md` states "aka: Expanding Content Panel", how it is implemented and why that is a benefit, then lists (and links to) five variations of that pattern.
- Each variation should have a brief description, list whether it is "No" or "Lo" JS, link to Baseline or CanIUse, and ideally provide a working example via CodePen or similar.
- Finally, within that variation, a simple index.html, styles.css and script.js, each as needed, with as little code as is required to make the pattern work. 
  Ideally code can be kept to a minimum, to reduce confusion.\
  Example: Try to eliminate unnecessary fonts, colors, margins, padding, etc., unless it is crucial to make the pattern work.

And if you find an error or would like to submit an alternate or improved method, please create an Issue, providing as much supporting information as possible, and ideally a contact method, should the be questions.
