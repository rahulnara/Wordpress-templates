!function(t){t.fn.unveil=function(i,e){var n,r=t(window),o=i||0,u=window.devicePixelRatio>1?"data-src-retina":"data-src",s=this;function l(){var i=s.filter(function(){var i=t(this);if(!i.is(":hidden")){var e=r.scrollTop(),n=e+r.height(),u=i.offset().top;return u+i.height()>=e-o&&u<=n+o}});n=i.trigger("unveil"),s=s.not(n)}return this.one("unveil",function(){var t=this.getAttribute(u);(t=t||this.getAttribute("data-src"))&&(this.setAttribute("src",t),"function"==typeof e&&e.call(this))}),r.on("scroll.unveil resize.unveil lookup.unveil",l),l(),this}}(window.jQuery||window.Zepto);