(window.webpackJsonp=window.webpackJsonp||[]).push([[25],{363:function(t,e,n){var content=n(406);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,n(6).default)("7437672d",content,!0,{sourceMap:!1})},405:function(t,e,n){"use strict";n(363)},406:function(t,e,n){var c=n(5)(!1);c.push([t.i,'.wrapper[data-v-cff9c29c]{background:#000;overflow:hidden;color:#fff;padding-top:50px;width:100vw;position:relative;z-index:9}@media (min-width:1024px){.wrapper[data-v-cff9c29c]{padding-top:80px}}@media (min-width:1024px){.text-container[data-v-cff9c29c]{display:flex;justify-content:space-between}}.info[data-v-cff9c29c]{position:relative}@media (min-width:1024px){.info[data-v-cff9c29c]{width:50%;padding-right:50px}}.info-top[data-v-cff9c29c]{margin-bottom:2rem;will-change:height;transition:height .3s;transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;perspective:1000px}@media (min-width:1024px){.info-top[data-v-cff9c29c]{margin-bottom:2.7rem}}@media (min-width:1024px){.info-box[data-v-cff9c29c]{position:fixed;width:50%;max-width:630px;padding-right:20px}}.title[data-v-cff9c29c]{letter-spacing:-.02em;font-size:3rem;line-height:94%;margin-bottom:1rem}@media (min-width:1024px){.title[data-v-cff9c29c]{font-size:4.2rem}}@media (min-width:1240px){.title[data-v-cff9c29c]{font-size:6.1rem}}@media (min-width:1920px){.title[data-v-cff9c29c]{font-size:8rem}}.updated[data-v-cff9c29c]{color:#6f6f6f;font-size:1.5rem;font-family:"WhyteInktrap",sans-serif;text-transform:uppercase;line-height:100%;letter-spacing:-.01em}@media (min-width:1024px){.updated[data-v-cff9c29c]{font-size:3rem;line-height:95%}}@media (min-width:1240px){.updated[data-v-cff9c29c]{font-size:3.9rem}}.text-column[data-v-cff9c29c]{position:relative}.text-column[data-v-cff9c29c] p{line-height:120%;margin-bottom:1.8rem}.text-column strong[data-v-cff9c29c]{font-weight:500}@media (max-width:1023px){.text-column[data-v-cff9c29c]{font-size:1.4rem}}@media (min-width:1024px){.text-column[data-v-cff9c29c]{max-width:652px;width:50%}}.languages[data-v-cff9c29c]{display:flex;flex-wrap:wrap}@media (min-width:1024px){.languages[data-v-cff9c29c]{flex-direction:column;align-items:flex-start}}.language-btn[data-v-cff9c29c]{padding:0;background:none;border:0;font-family:"WhyteInktrap",sans-serif;font-weight:700;font-size:2rem;text-transform:uppercase;letter-spacing:-.02em;line-height:100%;margin:5px 16px 24px 0;color:#6f6f6f;transition:color .3s}.language-btn.active[data-v-cff9c29c],.language-btn[data-v-cff9c29c]:hover{color:#fff}@media (min-width:1024px){.language-btn[data-v-cff9c29c]{font-size:2.5rem;margin:5px 0}}.fade-text-enter-active[data-v-cff9c29c],.fade-text-leave-active[data-v-cff9c29c]{transition:opacity .7s}.fade-text-enter[data-v-cff9c29c],.fade-text-leave-to[data-v-cff9c29c]{opacity:0}.fade-text-leave-active[data-v-cff9c29c]{position:absolute}.slide-text-enter-active[data-v-cff9c29c],.slide-text-leave-active[data-v-cff9c29c]{transition:opacity .5s,transform .3s}.slide-text-enter[data-v-cff9c29c]{opacity:0;transform:translateY(-50px)}.slide-text-leave-to[data-v-cff9c29c]{opacity:0}.slide-text-leave-active[data-v-cff9c29c]{position:absolute}.slide-up-enter-active[data-v-cff9c29c],.slide-up-leave-active[data-v-cff9c29c]{transition:transform .5s,opacity .5s}.slide-up-enter-active[data-v-cff9c29c]{position:absolute;top:0;left:0;right:0;z-index:9}.slide-up-enter[data-v-cff9c29c],.slide-up-leave-to[data-v-cff9c29c]{transform:translateY(100%);opacity:0}',""]),t.exports=c},422:function(t,e,n){"use strict";n.r(e);var c=n(3),o=(n(11),n(30),{name:"office-text",transition:{name:"page-slide-from-down",mode:""},asyncData:function(t){return Object(c.a)(regeneratorRuntime.mark((function e(){var n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(n=13,!t.payload){e.next=5;break}return e.abrupt("return",{page:t.payload.content,favicon:t.payload.options.favicon.url});case 5:return t.store.state.regions.forEach((function(e){t.params.office===e.url&&(n=e.id)})),e.abrupt("return",t.$axios.$get("/wp-json/wp/v2/pages?slug=".concat(t.params.slug,"&parent=").concat(n)).then((function(e){return 0===e.length&&t.error({statusCode:404,values:t.store.state.options}),{page:e[0],favicon:t.store.state.options.favicon.url}})).catch((function(e){t.error({statusCode:404,values:t.store.state.options})})));case 7:case"end":return e.stop()}}),e)})))()},head:function(){return{title:this.metaTitle,meta:[{hid:"description",name:"description",content:this.content.meta.meta_description},{hid:"og:title",name:"og:title",content:this.metaTitle},{hid:"og:description",name:"og:description",content:this.content.meta.meta_description},{hid:"og:image",name:"og:image",content:this.metaImage},{hid:"og:site_name",name:"og:site_name",content:"Stink Films"},{hid:"twitter:card",name:"twitter:card",content:"summary_large_image"},{hid:"twitter:site",name:"twitter:site",content:"Stink Films"},{hid:"twitter:title",name:"twitter:title",content:this.metaTitle},{hid:"twitter:description",name:"twitter:description",content:this.content.meta.meta_description},{hid:"twitter:image",name:"twitter:image",content:this.metaImage}],link:[{rel:"icon",type:"image/x-icon",href:this.favicon}]}},data:function(){return{currentLanguage:0}},computed:{content:function(){return this.page.custom_fields},title:function(){return this.page.title.rendered},metaTitle:function(){return this.content.meta.meta_title?this.content.meta.meta_title+" | Stink Films":this.title+" | Stink Films"},metaImage:function(){return this.content.meta.meta_social_media_image?this.content.meta.meta_social_media_image.sizes.fullhd:null},countryName:function(){var t,e=this;return this.$store.state.regions.forEach((function(n){e.$route.params.office===n.url&&(t=n.name)})),t}},methods:{handleResize:function(){if(this.$store.state.windowWidth>1023)this.$refs.infoBox.getBoundingClientRect()},changeLanguage:function(t){var e=this;this.currentLanguage=t,setTimeout((function(){var rect=e.$refs.infoItems[0].getBoundingClientRect();e.$refs.infoTop.style.height=rect.height+"px"}),100)}},mounted:function(){this.$store.commit("setLogoColor","white");var rect=this.$refs.infoTop.getBoundingClientRect();this.$refs.infoTop.style.height=rect.height+"px",this.$store.commit("setShowHeader",!0),this.$store.commit("setShowFooter",!1),console.log(this.$router)},activated:function(){this.$gtag.pageview({page_path:this.$route.path,page_title:this.metaTitle})}}),r=(n(405),n(2)),component=Object(r.a)(o,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"wrapper"},[n("div",{staticClass:"container text-container"},[n("div",{staticClass:"info"},[n("div",{ref:"infoBox",staticClass:"info-box"},[n("div",{ref:"infoTop",staticClass:"info-top"},[n("transition-group",{attrs:{name:"slide-text"}},t._l(t.content.text,(function(e,c){return c===t.currentLanguage?n("div",{key:"info-"+c,ref:"infoItems",refInFor:!0},[n("h1",{staticClass:"title",domProps:{innerHTML:t._s(e.title)}}),t._v(" "),n("div",{staticClass:"updated",domProps:{innerHTML:t._s(e.updated)}})]):t._e()})),0)],1),t._v(" "),t.content.text.length>1?n("div",{staticClass:"change-lang"},[n("div",{staticClass:"change-lang__label"},[t._v("Read in")]),t._v(" "),n("div",{staticClass:"languages"},t._l(t.content.text,(function(e,c){return n("button",{key:"btn-"+c,staticClass:"language-btn",class:{active:c===t.currentLanguage},attrs:{type:"button"},on:{click:function(e){return e.preventDefault(),t.changeLanguage(c)}}},[t._v(t._s(e.language)+"\n            ")])})),0)]):t._e()])]),t._v(" "),n("div",{staticClass:"text-column"},[n("transition-group",{attrs:{name:"fade-text"}},t._l(t.content.text,(function(e,c){return c===t.currentLanguage?n("div",{key:"text-"+c,staticClass:"text",domProps:{innerHTML:t._s(e.text)}}):t._e()})),0)],1)]),t._v(" "),n("back-button",{attrs:{"link-text":"Go back","link-url":"/"+t.$route.params.office}})],1)}),[],!1,null,"cff9c29c",null);e.default=component.exports;installComponents(component,{BackButton:n(167).default})}}]);