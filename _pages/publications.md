---
layout: archive
title: "Publications"
permalink: /publications/
author_profile: true
classes: wide
---

{% if site.author.googlescholar %}
  <div class="wordwrap">You can also find my articles on <a href="{{site.author.googlescholar}}">my Google Scholar profile</a>.</div>
{% endif %} 


<style>ol.bibliography li { list-style: none }</style>

Full-Length Conference and Journal Articles
-----------------------------------
{% bibliography --query @*[pubtype=0] %}

Short or Workshop Publications
-----------------------------------
{% bibliography --query @*[pubtype=1] %}

Other
-----------------------------------
{% bibliography --query @*[pubtype=2] %}

Theses
-----------------------------------
{% bibliography --query @*[pubtype=3] %}
