# CSS Carousel

aka: Slider, Swiper

- Using practically any parent element, a collection of children elements can become a carousel.
- In my examples I use a `ul` element as the parent, and thus `li` elements as the children, because I like the built-in semantics of "a container and children".
- The most basic example needs only two lines of CSS; the most advanced, a wee bit more...
- CSS-only carousels can **not** do everything you/marketing will want them to do, so some designs might require a little JS added. But the starting blocks, can *absolutely* be CSS-only.

## [Simple Swiper](simple-swiper)
As simple as it gets, with a collection of elements, the user can simply “swipe” (or drag the scrollbar handle) left and right to make the images “slide” around, all CSS, no JS required.

## [Snappy Swiper](snappy-swiper)
With one line of additional CSS, the slides “snap” into place as the user swipes (in the center, in this case). Note that even when dragging the scrollbar, the “snap to the center” still happens after releasing the scrollbar, all CSS, no JS required.

## [Navigation Buttons](navigation-buttons)
Adding the ubiqitous `<` and `>` buttons, including all functionality and the “disabled” state when you reach the end of either direction, is all CSS, automatically handled by the browser, no JS required.

## [Indicator Dots](indicator-dots)
The common “dot navigation indicators” below the carousel, including all functionality (click interactions, which dot is the `:target-current`), is all CSS, automatically handled by the browser, no JS required.

## [Swipe by Groups](swipe-by-groups)
If swiping “by groups”, or an implicit number of slides, is ever desired, all CSS, no JS required.

## [Animated Loop](animated-loop)
This automatically animated loop, likely for logos or testimonials, does require dupe HTML, but the animation and looping is all CSS, no JS required.

## [Hero](hero)
The traditional hero carousel, often at the top of the page, with navigation buttons and indicators, is all CSS, no JS required.

## [Animted Hero](animated-hero)
Similliar to the traditional Hero above, but with automated animation from slide-to-slide, all CSS, no JS required.

## Resources
- https://adactio.com/journal/tags/carousel
- https://developer.chrome.com/blog/carousels-with-css
- https://www.youtube.com/watch?v=g03Yldh9Nkw
- https://chrome.dev/carousel/
- https://www.sarasoueidan.com/blog/css-carousels-accessibility/
- https://www.youtube.com/watch?v=KD1Yo8a_Qis
- https://www.linkedin.com/posts/utsavmeena_how-to-create-an-image-carousel-in-pure-css-activity-7382816860511092736-CBaW/
