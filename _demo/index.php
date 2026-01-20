<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoLoJS - Reducing reliance on JS</title>
        <link rel="stylesheet" href="styles.css">
        <meta name="author" content="Aaron T. Grogg">
        <meta name="copyright" content="Aaron T. Grogg">
        <meta name="keywords" content="NoLoJS, No Low JavaScript, Reduce JavaScript, Web Performance, Web Development, Frontend Development, Web Design">
        <meta name="robots" content="index, follow">
        <meta name="description" content="NoLoJS is a project focused on reducing reliance on JavaScript in web development by utilizing the latest HTML and CSS features where possible.">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <!-- TODO: 
            - Add favicon
            - Create separate feature-detection JS file, add JS support as needed. 
            - Add CWV library, and ideally a script that tracks how much JS had to be added (# files, KBs), display in an offscreen panel. 
            - Do cross-browser tests, track numbers. 
            - Then add toggle that kills feature-detection JS and adds all-JS files, to implement all features via JS libraries. 
            - Now do tests and track again. 
            Features:
                x Sticky header
                x Smooth scroll
                x Burger menu
                x Hero carousel 
                x Modal
                Scroll animation
                x Logo carousel 
                x FAQs
                x Lazy load images
            Should also include?
                Preload links
                Spec Rules
                View Transitions 
                Comp Libraries 
                `defer`/`async` toggle for any js files
                Live Baseline data/ logos somehow?
        -->
    </head>
    <body>

        <!-- Header is "sticky" at the top of the screen -->
        <!-- On scroll, Header shrinks, as does logo -->
        <header class="header-sticky header-shrink">
            <!-- Nav is offscreen on mobile, but fully visible on deskstop -->
            <nav>
                <button popovertarget="menu-main">Menu</button>
                <!-- TODO: These deep-links smooth-scroll to the chosen section -->
                <ul popover id="menu-main">
                    <li><a href="">Menu Item 1</a></li>
                    <li><a href="">Menu Item 2</a></li>
                    <li><a href="">Menu Item 3</a></li>
                    <li><a href="">Menu Item 4</a></li>
                    <li><a href="">Menu Item 5</a></li>
                </ul>
            </nav>
            <img 
                src="NoLoJS.avif" 
                fetchpriority="high"
                width="700"
                height="330" />
            <!-- TODO: This menu contains toggles for contolling the page content/features -->
            <aside class="menu-utility">
                <!-- TODO: Toggle for exposing "explanations"? -->
            </aside>
        </header>

        <main>

            <h1>Reducing the JS load where we can...</h1>

            <hr>

            <!-- TODO: This hero carousel is CSS-only, and is swipable -->
            <section class="container--content__full-width carousel-hero ">
                <h2>Hero Carousel</h2>
                <!-- TODO: 3-slide, content-over-media, preload link for 1st image, all images loading="eager" -->
                 <ul class="css-carousel css-carousel__hero">
                    <li class="container--media-content">
                        <div class="container--media">
                            <img src="mohammad-rahmani-3Sx3hSQcQIA-unsplash.avif" alt="IT-related placeholder image" width="1200" height="500">
                        </div>
                        <div class="container--content">
                            <p>This carousel is CSS-only!</p>
                            <p>Swipe &larr; or click the nav<br>
                                to learn more about it...</p>
                        </div>
                    </li>
                    <li class="container--media-content">
                        <div class="container--media">
                            <img src="mohammad-rahmani-7aIP3q4wCfY-unsplash.avif" alt="IT-related placeholder image" width="1200" height="500">
                        </div>
                        <div class="container--content">
                            <p>The latest browsers should have<br>
                                nav arrows and indicator dots,<br>
                                and swiping should snap to the next/previous slide.</p>
                        </div>
                    </li>
                    <li class="container--media-content">
                        <div class="container--media">
                            <img src="mohammad-rahmani-CDBkMNZmd7o-unsplash.avif" alt="IT-related placeholder image" width="1200" height="500">
                        </div>
                        <div class="container--content">
                            <p>Older browsers still work,<br>
                                but as a simple slider.</p>
                            <p>If necessary, you could feature-detect<br>
                                and add that functionality via polyfill.</p>
                        </div>
                    </li>
                </ul>
                <!-- Images courtesy of <a href="https://unsplash.com/@afgprogrammer" target="_blank">Mohammad Rahmani</a> -->
            </section>

            <hr>

            <!-- This logo carousel will be full-width on all devices, and automatically scrolling -->
            <section class="container--content__full-width">
                <h2>Animated Looping Carousel</h2>
                <div class="container--content">
                    <p>The scrolling marquee below is also 100% CSS-only. It does require duplicate HTML (the slide UL), but uses the same images in both ULs, so the only penalty is a slightly increased document size.</p>
                </div>
                <div class="css-carousel__wrapper">
                    <ul class="css-carousel css-carousel__animated-loop">
                        <li><img src="https://placehold.co/150x150/red/white?text=Slide+1" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/blue/white?text=Slide+2" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/orange/white?text=Slide+3" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/green/white?text=Slide+4" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/purple/white?text=Slide+5" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/yellow/black?text=Slide+6" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/aqua/black?text=Slide+7" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/lime/black?text=Slide+8" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                    </ul>
                    <ul class="css-carousel css-carousel__animated-loop">
                        <li><img src="https://placehold.co/150x150/red/white?text=Slide+1" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/blue/white?text=Slide+2" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/orange/white?text=Slide+3" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/green/white?text=Slide+4" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/purple/white?text=Slide+5" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/yellow/black?text=Slide+6" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/aqua/black?text=Slide+7" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                        <li><img src="https://placehold.co/150x150/lime/black?text=Slide+8" alt="Placeholder Image" width="150" height="150" loading="lazy"></li>
                    </ul>
                </div>
            </section>

            <hr>

            <!-- This content section has a CSS-only parallax background image -->
            <section class="container--content__full-width content-parallax">
                <h2>Parallax</h2>
                <div class="container--media-content">
                    <div class="container--media">
                        <!--img src="shutter-speed-3LXPDYb83MY-unsplash.avif" alt="Mountains placeholder image" width="1200" height="800"-->
                    </div>
                    <div class="container--content">
                        <p>In the latest browsers</p>
                        <p>This section should have a CSS-only parallax background</p>
                        <p>In older browsers, it should just be a static background</p>
                    </div>
                </div>
            </section>

            <hr>

            <!-- This FAQ section uses detail/sumary elements -->
            <section class="container--accordion">
                <h2>Accordion</h2>
                <!-- TODO: Multiple detail/summary elements, check NoLoJS presentation for possible content -->
                <details>
                    <summary>How does this component work?</summary>
                    <p>This section uses the HTML <code>details</code> and <code>summary</code> elements, which are natively supported in modern browsers. When a user clicks on a <code>summary</code>, the corresponding <code>details</code> are revealed or hidden.</p>
                </details>
                <details>
                    <summary>Do I need JS for this functionality?</summary>
                    <p>No, this is pure HTML and CSS. The <code>details</code> and <code>summary</code> elements work without JS, making them a great choice for content that doesn't need to be initially visible.</p>
                </details>
                <details>
                    <summary>Are these elements accessible?</summary>
                    <p>Yes, the <code>details</code> and <code>summary</code> elements are inherently accessible, as they provide keyboard navigation and screen reader support out of the box. However, it's always a good idea to test your implementation to ensure it meets your accessibility standards.</p>
                </details>
                <details>
                    <summary>Can I force an option to be initially open?</summary>
                    <p>Yes, just add an <code>open</code> attribute to the <code>details</code> element you want to be expanded by default.</p>
                    <p>For example:</p>
                        <pre>&lt;details open&gt;</pre>
                </details>
                <details>
                    <summary>Can I force only one to be open at a time?</summary>
                    <p>Yes, by simply adding a same <code>name</code> attribute with the same value to multiple <code>details</code> elements, similarly to how you would a radio button group.</p>
                    <p>For example:</p>
                        <pre>&lt;details name="faq"&gt;
    &lt;summary&gt;FAQ 1&lt;/summary&gt;
&lt;/details&gt;
&lt;details name="faq"&gt;
    &lt;summary&gt;FAQ 2&lt;/summary&gt;
&lt;/details&gt;</pre>
                </details>
            </section>

            <hr>

            <!-- This content section has a CSS-only Modal -->
            <section class="container--content">
                <h2>Modal</h2>
                <p>Click the button below.</p>
                <p>You should get a modal overlay with a backdrop.</p>
                <p>Click the close button when you're done.</p>
                <p><button popovertarget="popover1">Open Modal</button></p>
                <dialog popover="manual" id="popover1">
                    <p>This is a modal dialog.</p>
                    <p>Native HTML and CSS, no JS required.</p>
                    <p>Initial CSS places it center in the screen, over all other content.</p>
                    <p>Click the "Close" button to close this.</p>
                    <button popovertarget="popover1">Close</button>
                </dialog>
            </section>

            <hr>
            
        </main>

        <footer>
            <p>
                &copy; <?php echo date('Y'); ?> NoLoJS<br>
                <a href="https://github.com/aarontgrogg/NoLoJS/" target="_blank">https://github.com/aarontgrogg/NoLoJS/</a>
            </p>
        </footer>

    </body>
</html>