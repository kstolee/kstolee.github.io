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

Journal Articles and Full-Length Conference Publications 
-----------------------------------
{% bibliography --query @*[pubtype<=1] %}


Short or Workshop Publications
-----------------------------------
{% bibliography --query @*[pubtype=2] %}

Other Publications
-----------------------------------
{% bibliography --query @*[pubtype=3] %}


