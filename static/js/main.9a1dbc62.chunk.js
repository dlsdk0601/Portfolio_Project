(this.webpackJsonpworkspace=this.webpackJsonpworkspace||[]).push([[0],{103:function(e,t,c){},104:function(e,t,c){},105:function(e,t,c){},106:function(e,t,c){"use strict";c.r(t);var s=c(2),n=c.n(s),i=c(24),a=c.n(i),l=(c(53),c(4)),r=(c(54),c(55),c(1)),o=function(e){var t=e.contentOn,c=e.modalData,n=e.tabRef,i=["</ project >","</ About >","</ skills >","</ Testimonials>","</ contact >"],a=Object(s.useState)(),o=Object(l.a)(a,2),j=(o[0],o[1]),d=function(e){n.current[e].scrollIntoView({behavior:"smooth"}),j(n.current[e])};return Object(r.jsxs)("nav",{children:[Object(r.jsx)("div",{className:"navbar__logo",children:Object(r.jsx)("figure",{children:Object(r.jsx)("a",{href:"#",children:c||t?Object(r.jsx)("img",{src:"./img/logo.png",alt:"logo"}):Object(r.jsx)("img",{src:"./img/logo_white.png",alt:"logo"})})})}),Object(r.jsx)("div",{className:"navbar__menu",children:Object(r.jsx)("ul",{children:c?Object(r.jsx)(r.Fragment,{}):t?i.map((function(e,t){return Object(r.jsx)("li",{onClick:function(){d(t)},className:"black",children:e},t)})):i.map((function(e,t){return Object(r.jsx)("li",{onClick:function(){d(t)},className:"white",children:e},t)}))})})]})},j=(c(57),c(48)),d=function(){var e=Object(s.useRef)(null),t=[" JUNG IN A"].map((function(e,t){return{content:e,config:{typeSpeed:80},id:t}})),c=Object(s.useState)(!1),n=Object(l.a)(c,2),i=n[0],a=n[1];return Object(s.useEffect)((function(){setTimeout((function(){a(!0)}),2500)}),[]),Object(r.jsx)("section",{ref:e,id:"inrtroduce",className:i?"con1 intro":"con1",children:Object(r.jsxs)("div",{className:"back",children:[Object(r.jsx)("figure",{children:Object(r.jsx)("img",{src:"./img/logo.png",alt:"\uc5c6\uc5c9"})}),Object(r.jsx)(j.a,{sequence:t,element:"p",typeSpeed:80})]})})},b=(c(62),function(e){var t=e.contentOn;return Object(r.jsx)("section",{className:"introduce",children:Object(r.jsxs)("div",{className:"introduce__content",children:[Object(r.jsx)("div",{className:t?"introduce__img on":"introduce__img",children:Object(r.jsx)("figure",{children:Object(r.jsx)("img",{src:"./img/introduce_img.jpg",alt:"\uc5c6\uc5c9"})})}),Object(r.jsxs)("div",{className:t?"introduce__description on":"introduce__description",children:[Object(r.jsx)("div",{className:"introduce__des_title",children:Object(r.jsx)("span",{children:"\ucf54\ub529\uacfc \ub180\ub2e4"})}),Object(r.jsxs)("p",{className:"description",children:["\uc548\ub155\ud558\uc138\uc694 ",Object(r.jsx)("br",{}),"\ucf54\ub529\uacfc \ub178\ub294 \uac1c\ubc1c\uc790 \uc815\uc778\uc544\uc785\ub2c8\ub2e4.",Object(r.jsx)("br",{}),"\uc720\ud559 \uc0dd\ud65c\uc744 \ud558\uba70 \ud0a4\uc6b4 \ubb38\uc81c \ud574\uacb0 \ub2a5\ub825\uc744 \ubc14\ud0d5\uc73c\ub85c ",Object(r.jsx)("br",{}),"\uc2a4\uc2a4\ub85c \ubc1c\uc804\ud574 \ub098\uac00\uba70 \uc9c4\uc815\uc73c\ub85c \ud504\ub85c\uadf8\ub798\ubc0d\uc744 \uc990\uae30\ub294 \uac1c\ubc1c\uc790\uac00 \ub418\uaca0\uc2b5\ub2c8\ub2e4.",Object(r.jsx)("br",{}),"\ud604\uc7ac \ub9ac\uc561\ud2b8js\uc758 \uc774\ud574\ub3c4\ub97c \ub113\ud788\ub294 \uc911\uc774\uba70, \ucc28\ud6c4 Node.js \ubc0f PHP\uae4c\uc9c0 \uc601\uc5ed\uc744 \ub113\ud600 \ud480\uc2a4\ud0dd \uac1c\ubc1c\uc790\ub85c \uc6b0\ub69d \uc11c\uace0 \uc2f6\uc2b5\ub2c8\ub2e4."]})]})]})})}),u=(c(63),c(47)),O=c(15),m=c(28),h=c.n(m),x=function(e){var t=e.contentOn,c=Object(s.useRef)([]),n=Object(s.useRef)([]),i=Object(s.useRef)(null),a=Object(s.useRef)(null),o=Object(s.useState)(!0),j=Object(l.a)(o,2),d=j[0],b=j[1],m=Object(u.a)(),x=Object(l.a)(m,2),f=x[0],g=x[1].width,_=Object(O.useSpring)({width:d?.8*g:0}),p=[_,_,Object(O.useSpring)({width:d?.85*g:0}),Object(O.useSpring)({width:d?.75*g:0}),Object(O.useSpring)({width:d?.7*g:0}),Object(O.useSpring)({width:d?.65*g:0}),Object(O.useSpring)({width:d?.3*g:0}),Object(O.useSpring)({width:d?.4*g:0})],v=[80,80,85,75,70,65,30,40],N=["Mark up, Semantic Tag, Input, validation","Styling, Animation, Media Query","Library, Canvas, Event, Json, API, DOM, Fetch","Ajax, Tab, Accordion, Library","Styling, Animation, Mixin function","Library controll, Hooks, Functional Component","Create, Read, Update, Delete","Login, SQL Controll"],w=["HTML","CSS","JS","jQuery","Sass","React","MySQL","PHP"],k=function(e){var t=e.target.dataset.num,s=i.current,l=c.current,r=n.current,o=a.current;o.classList.remove("on");for(var j=0;j<l.length;j++)l[j].classList.remove("active"),r[j].classList.remove("on");b(!1),l[t].classList.add("active"),s.classList.remove("on"),setTimeout((function(){s.classList.add("on"),s.innerText=N[t],r[t].classList.add("on"),o.classList.add("on"),o.innerText=w[t],b(!0)}),300)};return Object(r.jsx)("section",{className:"skill",children:Object(r.jsxs)("div",{className:"skill__container",children:[Object(r.jsxs)("div",{className:"skill__etc",children:[Object(r.jsxs)("div",{className:t?"etc":"etc on",children:[Object(r.jsx)("h1",{children:"Etc"}),Object(r.jsxs)("ul",{className:"license",children:[Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/document.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"\ube45\ub370\uc774\ud130 \uc804\ubb38\uac00"})]}),Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/document.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"\uc6b4\uc804\uba74\ud5c8 1\uc885\ubcf4\ud1b5"})]}),Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/document.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"TestDaf B2"})]}),Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/document.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"\uc6f9\ub514 \uae30\ub2a5\uc0ac \ud544\uae30 \ud569\uaca9"})]})]})]}),Object(r.jsxs)("div",{className:t?"career":"career on",children:[Object(r.jsx)("h1",{children:"career"}),Object(r.jsxs)("ul",{children:[Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/work.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"2012.04-2014.09  \u321c \ud0dc\ud765\ud14c\ud06c "})]}),Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/school.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"2011.03-2015.12 \uacbd\uc131\ub300\ud559\uad50 \uc7ac\ud559"})]}),Object(r.jsxs)("li",{children:[Object(r.jsx)("img",{src:"./img/skill_logo/school.svg",alt:"\uc5c6\uc5c9"}),Object(r.jsx)("span",{children:"2019.10~2021.03 Hochschule Bochum \uc7ac\ud559"})]})]})]}),Object(r.jsxs)("div",{className:t?"tools":"tools on",children:[Object(r.jsx)("h1",{children:"Tools"}),Object(r.jsxs)("div",{className:"tool_box",children:[Object(r.jsxs)("span",{className:"tool",children:[Object(r.jsx)("img",{src:"./img/skill_logo/git.svg",alt:"\uc5c6\uc5c9"}),"Git"]}),Object(r.jsxs)("span",{className:"tool",children:[" ",Object(r.jsx)("img",{src:"./img/skill_logo/code.svg",alt:"\uc5c6\uc5c9"})," VS Code"]})]})]})]}),Object(r.jsxs)("div",{className:t?"skill__frontend":"skill__frontend on",children:[Object(r.jsx)("ul",{className:"skill__icon",children:["./img/skill_logo/html.svg","./img/skill_logo/css.svg","./img/skill_logo/js.svg","./img/skill_logo/jquery.svg","./img/skill_logo/sass.svg","./img/skill_logo/react.svg","./img/skill_logo/mysql.svg","./img/skill_logo/php.svg"].map((function(e,t){return Object(r.jsx)("li",{"data-num":t,ref:function(e){c.current[t]=e},className:0==t?"active":"",onClick:k,children:Object(r.jsx)("img",{"data-num":t,src:e,alt:"noImage"})},t)}))}),Object(r.jsxs)("div",{className:"skill__description",children:[Object(r.jsx)("h1",{ref:a,className:"description__title on",children:"HTML"}),Object(r.jsxs)("div",{className:"des_right",children:[Object(r.jsx)("p",{ref:i,className:"description on",children:"Mark up, Hyper Link"}),Object(r.jsx)("ul",{className:"progress",children:p.map((function(e,t){return Object(r.jsxs)("li",{ref:function(e){n.current[t]=e},className:0==t?"progress__detail on":"progress__detail",children:[Object(r.jsx)("div",{className:h.a.container,children:Object(r.jsx)("div",{ref:f,className:h.a.main,children:Object(r.jsx)(O.animated.div,{className:h.a.fill,style:e})})},t),Object(r.jsx)("span",{children:v[t]+"%"})]})}))})]})]})]})]})})},f=(c(65),c(10)),g=(c(66),c(27)),_=c.n(g),p=(c(82),c(83),c(11)),v=c.n(p),N=c(16),w=c(33),k=c.n(w),S=function(){var e=Object(N.a)(v.a.mark((function e(){var t;return v.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,k.a.get("/data/work.json",{method:"GET",headers:{"Access-Control-Allow-Origin":"*","Content-Type":"application/json"}});case 2:return t=e.sent,e.abrupt("return",t);case 4:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}(),C=function(){var e=Object(N.a)(v.a.mark((function e(){var t;return v.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,k.a.get("/data/testimonial.json",{method:"GET",headers:{"Access-Control-Allow-Origin":"*","Content-Type":"application/json"}});case 2:return t=e.sent,e.abrupt("return",t);case 4:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}(),L=function(e){var t=Object(s.useState)(),c=Object(l.a)(t,2),n=c[0],i=c[1];return Object(s.useEffect)((function(){"portfolio"==e?S().then((function(e){i(e.data)})):"testimonial"==e&&C().then((function(e){i(e.data)}))}),[]),n},T=function(e){var t=e.modalfunc,c=e.modalData,i=e.indexChange,a=e.tabRef,o=L("portfolio"),j=o&&o.length-1,d=Object(s.useRef)(null),b=Object(s.useState)(!0),u=Object(l.a)(b,2),O=u[0],m=u[1],h=Object(s.useState)(!1),x=Object(l.a)(h,2),g=x[0],p=x[1],v=Object(s.useState)(!1),N=Object(l.a)(v,2),w=N[0],k=N[1],S=n.a.useState(0),C=Object(l.a)(S,2),T=C[0],y=C[1],E=Object(s.useState)(1),Y=Object(l.a)(E,2),A=Y[0],M=Y[1];function B(e){var t=e.className,c=e.onClick;return Object(r.jsx)("button",{className:t,onMouseOver:function(){p(!0)},onMouseLeave:function(){p(!1)},onClick:c})}function R(e){var t=e.className,c=e.onClick;return Object(r.jsx)("button",{className:t,onMouseOver:function(){k(!0)},onMouseLeave:function(){k(!1)},onClick:c})}n.a.useEffect((function(){y(j)}),[o]);var I={dots:!1,infinite:!0,speed:500,draggable:!0,slidesToShow:1,slidesToScroll:1,afterChange:function(e){i(e),m(!0),y((function(){return 0==e?j:e-1})),M((function(){return e==j?0:e+1}))},beforeChange:function(){m(!1)},nextArrow:Object(r.jsx)(R,{}),prevArrow:Object(r.jsx)(B,{})},F=function(){var e=d.current;t(),e.classList.toggle("on"),a.current[0].scrollIntoView()};return Object(r.jsxs)(r.Fragment,{children:[Object(r.jsx)(_.a,Object(f.a)(Object(f.a)({},I),{},{children:o&&o.map((function(e,t){return Object(r.jsx)("div",{children:Object(r.jsx)("h3",{children:Object(r.jsxs)("figure",{children:[Object(r.jsx)("img",{src:"../admin/files/slide".concat(t,".png"),alt:"no"}),Object(r.jsxs)("figcaption",{children:[Object(r.jsx)("h1",{className:O?"sitename on":"sitename",children:e.sitename}),Object(r.jsx)("p",{className:O?"subs on":"subs",children:e.subs})]})]})})},e.num)}))})),Object(r.jsxs)("div",{onClick:F,className:c?"modal__control":"modal__control hidden",children:[Object(r.jsx)("span",{className:"top",children:"top"}),Object(r.jsx)("span",{className:"bottom",children:"bottom"})]}),Object(r.jsxs)("div",{className:"slide_deco",children:[Object(r.jsxs)("div",{className:"nextprev",children:[Object(r.jsx)("span",{className:c?"prev_txt hidden":"prev_txt ",children:"PREV"}),Object(r.jsx)("img",{className:g?"prev_txt thumnail prev on":"prev_txt thumnail prev",src:"../admin/files/slide".concat(T,".png"),alt:"no"}),Object(r.jsx)("img",{className:w?"prev_txt thumnail next on":"prev_txt thumnail next",src:"../admin/files/slide".concat(A,".png"),alt:"no"}),Object(r.jsx)("span",{className:c?"next_txt hidden":"next_txt ",children:"NEXT"})]}),Object(r.jsx)("p",{className:"line",children:Object(r.jsx)("span",{ref:d})}),Object(r.jsxs)("div",{className:"btn",onClick:F,children:[Object(r.jsx)("div",{className:"spot"}),Object(r.jsx)("p",{className:"click",children:"Click me to look at this Project"})]})]})]})},y=(c(103),function(e){var t=e.index,c=L("portfolio");return Object(r.jsx)(r.Fragment,{children:c&&c.map((function(e,c){if(c==t)return Object(r.jsxs)("div",{className:"modal",children:[Object(r.jsx)("figure",{className:"thum",children:Object(r.jsx)("img",{src:"../admin/files/thumnail".concat(t,".png"),alt:"no"})}),Object(r.jsxs)("div",{className:"info",children:[Object(r.jsx)("h1",{className:"title",children:e.name}),Object(r.jsxs)("div",{className:"info__text",children:[Object(r.jsxs)("div",{className:"info__left",children:[Object(r.jsxs)("div",{className:"infoBox part",children:[Object(r.jsx)("h2",{children:"\ucc38\uc5ec\ub3c4"}),Object(r.jsx)("p",{className:"part__ans infoBox__ans",children:e.part})]}),Object(r.jsxs)("div",{className:"infoBox info__skill",children:[Object(r.jsx)("h2",{children:"SKILL"}),Object(r.jsx)("p",{className:"skill__ans infoBox__ans",children:e.skill})]})]}),Object(r.jsxs)("div",{className:"info__center",children:[Object(r.jsxs)("div",{className:"infoBox howlong",children:[Object(r.jsx)("h2",{children:"\uc81c\uc791 \uae30\uac04"}),Object(r.jsx)("p",{className:"howlong__ans infoBox__ans",children:e.howlong})]}),Object(r.jsxs)("div",{className:"infoBox func",children:[Object(r.jsx)("h2",{children:"\uae30\ub2a5"}),Object(r.jsxs)("p",{className:"func__ans infoBox__ans",children:[" ",e.func]})]})]}),Object(r.jsx)("div",{className:"info__right",children:Object(r.jsxs)("div",{className:"infoBox sitepage",children:[Object(r.jsx)("h2",{children:"SITE URL"}),Object(r.jsx)("p",{className:"sitepage__ans infoBox__ans",children:Object(r.jsxs)("a",{href:e.sitepage,target:"_blank",children:["\ubc14\ub85c\uac00\uae30 ",Object(r.jsx)("img",{src:"./img/url.svg",alt:"no"})]})})]})})]}),Object(r.jsxs)("div",{className:"overview",children:[Object(r.jsx)("h2",{className:"overview__title",children:"Overview"}),Object(r.jsx)("p",{className:"overview__exp",dangerouslySetInnerHTML:{__html:e.mission}})]}),Object(r.jsxs)("div",{className:"focus",children:[Object(r.jsx)("h2",{className:"focus__title",children:"Focus"}),Object(r.jsxs)("p",{className:"focus__exp",children:[e.exp,Object(r.jsx)("span",{children:Object(r.jsxs)("a",{href:e.git,target:"_blank",children:["\ub9ac\ub4dc\ubbf8 \ud30c\uc77c \ubcf4\ub7ec\uac00\uae30",Object(r.jsx)("img",{src:"./img/url.svg",alt:"no"})]})})]})]})]}),Object(r.jsxs)("div",{className:"responsive",children:[Object(r.jsx)("h2",{children:"Responsive"}),Object(r.jsx)("div",{className:"responsive__photo",children:Object(r.jsxs)("figure",{children:[Object(r.jsx)("img",{className:"mac",src:"../admin/files/mac".concat(t,".png"),alt:"no"}),"on"==e.responsive?Object(r.jsx)("img",{className:"iphone",src:"../admin/files/iphone".concat(t,".png"),alt:"no"}):Object(r.jsx)(r.Fragment,{})]})})]}),Object(r.jsxs)("div",{className:"modal__photo",style:{backgroundColor:e.color},children:[Object(r.jsx)("h2",{children:"Pages"}),Object(r.jsx)("figure",{children:Object(r.jsx)("img",{src:"../admin/files/pages".concat(t,".png"),alt:"no"})})]})]})}))})}),E=(c(104),function(){var e=L("testimonial");return Object(r.jsx)("section",{className:"testimonials",children:Object(r.jsx)(_.a,Object(f.a)(Object(f.a)({},{dots:!1,arrows:!1,infinite:!0,slidesToShow:3,slidesToScroll:1,autoplay:!0,speed:4e3,pauseOnHover:!0,autoplaySpeed:3e3,cssEase:"linear"}),{},{children:e&&e.map((function(e,t){return Object(r.jsx)("div",{children:Object(r.jsx)("h3",{children:Object(r.jsxs)("div",{className:"testimonials__box",children:[Object(r.jsx)("figure",{children:Object(r.jsx)("img",{className:"test__photo",src:"../admin/files/".concat(e.photo),alte:"no"})}),Object(r.jsxs)("div",{className:"testimonials__text",children:[Object(r.jsxs)("p",{children:[e.tes_name," ",Object(r.jsxs)("span",{children:["/ ",e.tex_real]})]}),Object(r.jsx)("h3",{children:e.tes_oneline}),Object(r.jsx)("p",{className:"testimonials__exp",children:e.tes_text})]})]})})})}))}))})}),Y=(c(105),function(e){var t=e.contentOn;return Object(r.jsx)("section",{className:"contact",children:Object(r.jsxs)("div",{className:"contact__box",children:[Object(r.jsxs)("div",{className:"contact__font",children:[Object(r.jsx)("h2",{className:t?"font__stroke":"font__stroke on",children:"CONTACT"}),Object(r.jsx)("h2",{className:t?"font__fill":"font__fill on",children:"CONTACT"})]}),Object(r.jsxs)("div",{className:"contact__info",children:[Object(r.jsxs)("article",{className:"conatact__email",children:[Object(r.jsx)("h2",{children:"EMAIL"}),Object(r.jsx)("a",{className:"info_a",href:"mailto:dlsdk0601@gmail.com",children:"dlsdk0601@gmail.com"})]}),Object(r.jsxs)("article",{className:"conatact__github",children:[Object(r.jsx)("h2",{children:"GITHUB"}),Object(r.jsx)("a",{className:"info_a",href:"https://github.com/dlsdk0601",target:"_blank",children:"https://github.com/dlsdk0601"})]}),Object(r.jsxs)("article",{className:"conatact__mobile",children:[Object(r.jsx)("h2",{children:"MOBILE"}),Object(r.jsx)("a",{className:"info_a",children:"010.6567.5303"})]}),Object(r.jsxs)("article",{className:"conatact__kakao",children:[Object(r.jsx)("h2",{children:"KAKAO"}),Object(r.jsx)("a",{className:"info_a",children:"dyddhks1227"})]})]})]})})});function A(){var e=window;return{width:e.innerWidth,height:e.innerHeight}}var M=function(){var e=function(e){var t=Object(s.useState)(!1),c=Object(l.a)(t,2),n=c[0],i=c[1],a=Object(s.useState)(!1),r=Object(l.a)(a,2),o=r[0],j=r[1],d=Object(s.useState)(0),b=Object(l.a)(d,2),u=b[0],O=b[1],m=function(){window.scrollY<.5*e?i(!1):window.scrollY>=.5*e&&window.scrollY<1.5*e?i(!0):window.scrollY>=1.5*e&&window.scrollY<2.5*e?i(!1):window.scrollY>=2.5*e&&window.scrollY<3.5*e?i(!0):window.scrollY>=3.5*e&&i(!1),window.scrollY<1*e?j(!1):window.scrollY>=1*e&&window.scrollY<2*e?j(!0):window.scrollY>=2*e&&window.scrollY<3*e?j(!1):window.scrollY>=3*e&&window.scrollY<4*e?j(!0):window.scrollY>=4*e&&j(!1)},h=function(){O(window.scrollY)};return Object(s.useEffect)((function(){return window.addEventListener("scroll",m),function(){window.removeEventListener("scroll",m)}}),[n]),Object(s.useEffect)((function(){return window.addEventListener("scroll",h),function(){return window.removeEventListener("scroll",h)}}),[]),{isNavon:n,scrollY:u,menuColor:o}}(function(){var e=Object(s.useState)(A()),t=Object(l.a)(e,2),c=t[0],n=t[1];return Object(s.useEffect)((function(){function e(){n(A())}return window.addEventListener("resize",e),function(){return window.removeEventListener("resize",e)}}),[]),c}().height),t=e.isNavon,c=(e.scrollY,e.menuColor),n=Object(s.useState)(!1),i=Object(l.a)(n,2),a=i[0],j=i[1],u=Object(s.useRef)([]),O=Object(s.useState)(0),m=Object(l.a)(O,2),h=m[0],f=m[1],g=function(){1!=a?setTimeout((function(){j((function(e){return!e}))}),1500):j((function(e){return!e}))};return Object(r.jsxs)(r.Fragment,{children:[Object(r.jsx)(o,{tabRef:u,contentOn:c,modalfunc:g,modalData:a}),Object(r.jsxs)("main",{children:[Object(r.jsx)(d,{}),Object(r.jsx)("div",{className:a?"modal__open on":"modal__open",children:Object(r.jsx)(y,{index:h})}),Object(r.jsx)("div",{ref:function(e){return u.current[0]=e},children:Object(r.jsx)(T,{indexChange:function(e){f(e)},modalfunc:g,modalData:a,tabRef:u})}),Object(r.jsx)("div",{ref:function(e){return u.current[1]=e},children:Object(r.jsx)(b,{contentOn:t})}),Object(r.jsx)("div",{ref:function(e){return u.current[2]=e},children:Object(r.jsx)(x,{contentOn:t})}),Object(r.jsx)("div",{ref:function(e){return u.current[3]=e},children:Object(r.jsx)(E,{contentOn:t})}),Object(r.jsx)("div",{ref:function(e){return u.current[4]=e},children:Object(r.jsx)(Y,{contentOn:t})})]})]})},B=function(e){e&&e instanceof Function&&c.e(3).then(c.bind(null,107)).then((function(t){var c=t.getCLS,s=t.getFID,n=t.getFCP,i=t.getLCP,a=t.getTTFB;c(e),s(e),n(e),i(e),a(e)}))};a.a.render(Object(r.jsx)(n.a.StrictMode,{children:Object(r.jsx)(M,{})}),document.getElementById("root")),B()},28:function(e,t,c){e.exports={main:"animation_main__1J0l-",fill:"animation_fill__2f0bM",content:"animation_content__3OQ0q",container:"animation_container__1V_2G"}},53:function(e,t,c){},54:function(e,t,c){},55:function(e,t,c){},57:function(e,t,c){},62:function(e,t,c){},63:function(e,t,c){},65:function(e,t,c){},66:function(e,t,c){}},[[106,1,2]]]);
//# sourceMappingURL=main.9a1dbc62.chunk.js.map