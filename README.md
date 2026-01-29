# NoLoJS

Reduce the JS Workload with no- or lo-JS options.

> ***I have nothing against JS***, \
> but it has better things to do \
> than manage your accordions and nav menus...

For years, JavaScript has been the web's workhorse. If HTML or CSS couldn't do what we wanted, we grabbed JavaScript to do it.

While that **has** helped push the user’s experience forward, the web is choking on JS.

So as HTML and CSS continue to get stronger, we should transfer any JavaScript workload possible to them.

This is an organic collection of common JS patterns that can be replaced with just HTML, CSS, and no, or very low, JS.

As HTML and CSS continue to mature, this collection should expand.

Please feel free to copy these and suggest others; Issues and PRs welcome!


## Demo
Page using several of these NoLoJS patterns:\
https://aarontgrogg.com/nolojs/


## Resources

A lot of people have written articles on this topic, and for quite some time, here are just a few (some are a bit dated now, so buyer-beware):
- [You Don't Need JavaScript for That!](https://thoughtbot.com/blog/you-don-t-need-javascript-for-that) by [Cristina Silva](https://cristinasilva.co/) (2016-05)
- [Less JavaScript](https://adactio.medium.com/less-javascript-70735cb87495) by [Jeremy Keith](http://adactio.com/) (2016-11)
- [HTML and CSS techniques to reduce your JavaScript](https://calendar.perfplanet.com/2020/html-and-css-techniques-to-reduce-your-javascript/) by [Anthony Ricaud](https://ricaud.me/) (2020-12)
- [5 things you don't need Javascript for](https://lexoral.com/blog/you-dont-need-js/) by [Steven Waterman](https://lexoral.com/) (2022-02)
- [When HTML & CSS Replace Javascript: A Simple Element Cheatsheet](https://pagepro.co/blog/html-css-vs-javascript/) by [Joanna Chmiel](https://www.linkedin.com/in/joanna-chmiel-319756164/) (2022-05)
- [Replacing JS with HTML and CSS](https://www.youtube.com/watch?v=d_CVzwfIzHM) by [Chris Ferdinandi](https://gomakethings.com/) (2023-05)
- [You don't need JavaScript for that](https://www.htmhell.dev/adventcalendar/2023/2/) by [Kilian Valkhof](https://kilianvalkhof.com/) (2023-12)
- [You Don’t Need JavaScript for That](https://www.youtube.com/watch?v=0rZywO6jdU4) by [Kevin Powell](https://www.kevinpowell.co/) (2024-11)
- [Modern CSS Techniques That Replace JavaScript](https://medium.com/@muhammadhashir752/modern-css-techniques-that-replace-javascript-and-save-you-time-a9f6c595318a) by [Muhammad Hashir](https://www.linkedin.com/in/m-hashir) (2025-06)

And here are a couple of fantastic all-around NoLoJS resources:
- [Theo Soti](https://theosoti.com/) (Theo even wrote [a book](https://theosoti.com/you-dont-need-js/) about this topic!)
- [Utsav Meena](https://www.linkedin.com/in/utsavmeena/)

There are surely many more examples, so please contribute!

> [!NOTE]
> I was _well_ into this project when I finally stumbled across the _massive_ [You-Dont-Need-JavaScript repo](https://github.com/you-dont-need/You-Dont-Need-JavaScript)... And while it _does_ have lots of examples, I find the lack of descriptions and demos disappointing/discouraging. Also, as all the code examples are full page, it can be hard to discern what is needed for the feature, and what is just to make the rest of the page work or look good... Anyhow, going to continue pushing forward with this, as I think it is a useful endeavour.

## Contribute

If you'd like to add your favorite no- or lo-JS pattern, please submit a PR, and please try to follow this established pattern as much as possible...
- If creating a new top-level pattern, name it after the _feature_, not the HTML element or CSS property; in theory, this should make it easier for people to find.\
  Example: The use of `lazy-load` instead of something like `loading` or `preload`. Ideally someone looking to lazy-load something might find that more easily.
- Within the pattern, create a `README.md` that includes any other names by which this might be called, a brief description, and links to any variations of that pattern.\
  Each variation should have a brief description, list whether it is "No" or "Lo" JS, link to Baseline or CanIUse for that feature, and ideally provide a working example via CodePen or similar.
  Example: Within the `accordion` pattern, [the `README.md`](https://github.com/aarontgrogg/NoLoJS/tree/main/accordion) states "aka: Expanding Content Panel", how it is 
  implemented and why that is a benefit, then lists (and links to) five variations of that pattern, including links to a CodePen for each.
- Finally, within each variation, include a simple index.html, styles.css and script.js, each as needed, with _as little code as is required to make the pattern work_ (not an entire page). 
  Ideally code can be kept to a minimum, to help clarity / reduce confusion, but feel free to include comments if you think they will help the pattern to the user better understand. 
  Try to eliminate unnecessary fonts, colors, margins, padding, etc., unless it is crucial to making the pattern work.\
  Example: [The `accordion` > `adjust-marker` pattern](https://github.com/aarontgrogg/NoLoJS/tree/main/accordion/adjust-marker) contains an 
  [index.html](https://github.com/aarontgrogg/NoLoJS/blob/main/accordion/adjust-marker/index.html) and [styles.css](https://github.com/aarontgrogg/NoLoJS/blob/main/accordion/adjust-marker/styles.css) file, 
  each with the minimal code needed to make the pattern work. The HTML file includes a comment that the heavy-lifting is handled in the CSS file, and the CSS file includes comments 
  explaining each various "bit" to the pattern.

If you find an error, or would like to submit an alternate or improved method for some pattern, please create an Issue, providing as much supporting information as possible, 
and ideally a contact method, should there be questions.
