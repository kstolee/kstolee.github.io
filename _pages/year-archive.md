---
layout: archive
permalink: /year-archive.html
title: "Posts and Resources"
author_profile: true
classes: wide
---

<p>At a high-level, 
resources/posts that are mostly likely useful for you are:</p>

<ul>
  <li><p><a href="/calendar.html">My calendar with free/busy info is available.</a></p></li>
  <li>
    <p><a href="https://csguides.github.io/grad-job-guide/">The CS Grad Job and Interview Guide</a>, which has lived and proven
useful for far longer than I ever expected it to! Includes additions and new
perspectives since my own search in 2013, including on the SLAC market and
industry research positions.</p>
  </li>
  <li>
    <p><a href="/posts/clg-writing-rules.html">CLG Paper Writing Guidelines</a> Are you a student
writing a paper with me? Read this, save us some time!</p>
  </li>
  <li>
    <p><a href="/posts/ssbse-anon-review.html">Anonymous Review at
SSBSE</a>: Back
in 2014 Shin Yoo and I experimented with anonymous review when we chaired
SSBSE, and wrote a blog post explaining why.  Some people have found it
useful, though it is now of course getting a bit old (aren’t we all!).
I’m pleased to note that anonymous review has since become the standard at Software
Engineering venues.</p>
</li>
</ul>

<p>Beyond that, there was a period of time where I blogged. Perhaps I will again, someday. In the meantime, I keep
whatever posts I have around primarily for archival purposes.</p>

{% for post in site.posts %}
  {% include archive-single.html %}
{% endfor %}
