---
layout: home
---

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

> Most components have variations within the parent folder (for example, opening `css-carousels` reveals 8 variations within).\
> And all components have a corresponding CodePen in the top-level `README` that demonstrates a working example.

<ul id="snippets" class="multicolumn">
{% for c in site.components %}
  <li class="{{ c.tags | join }}">
    <a href="/NoLoJS{{ c.url }}">{{ c.name }}</a>
  </li>
{% endfor %}
</ul>
