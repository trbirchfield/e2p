!function(e,t,n){"use strict";t.module("ngMessages",[]).directive("ngMessages",["$compile","$animate","$templateRequest",function(e,n,r){return{restrict:"AE",controller:function(){this.$renderNgMessageClasses=t.noop;var e=[];this.registerMessage=function(t,n){for(var r=0;r<e.length;r++)if(e[r].type==n.type){if(t!=r){var a=e[t];e[t]=e[r],t<e.length?e[r]=a:e.splice(0,r)}return}e.splice(t,0,n)},this.renderMessages=function(n,r){n=n||{};var a;t.forEach(e,function(e){var t;(t=!a||r)&&(t=n[e.type],t=null!==t&&!1!==t&&t),t?(e.attach(),a=!0):e.detach()}),this.renderElementClasses(a)}},require:"ngMessages",link:function(a,i,s,o){o.renderElementClasses=function(e){e?n.setClass(i,"ng-active","ng-inactive"):n.setClass(i,"ng-inactive","ng-active")};var l,c=t.isString(s.ngMessagesMultiple)||t.isString(s.multiple);a.$watchCollection(s.ngMessages||s["for"],function(e){l=e,o.renderMessages(e,c)}),(s=s.ngMessagesInclude||s.include)&&r(s).then(function(n){var r;n=t.element("<div/>").html(n),t.forEach(n.children(),function(n){n=t.element(n),r?r.after(n):i.prepend(n),r=n,e(n)(a)}),o.renderMessages(l,c)})}}}]).directive("ngMessage",["$animate",function(e){return{require:"^ngMessages",transclude:"element",terminal:!0,restrict:"AE",link:function(t,n,r,a,i){for(var s,o,l=n[0],c=l.parentNode,u=0,d=0;u<c.childNodes.length;u++){var p=c.childNodes[u];if(8==p.nodeType&&0<=p.nodeValue.indexOf("ngMessage")){if(p===l){s=d;break}d++}}a.registerMessage(s,{type:r.ngMessage||r.when,attach:function(){o||i(t,function(t){e.enter(t,null,n),o=t})},detach:function(t){o&&(e.leave(o),o=null)}})}}}])}(window,window.angular),function(e,t,n){"use strict";function r(e){var n=[];return l(n,t.noop).chars(e),n.join("")}function a(e,n){var r,a={},i=e.split(",");for(r=0;r<i.length;r++)a[n?t.lowercase(i[r]):i[r]]=!0;return a}function i(e,n){function r(e,r,i,o){if(r=t.lowercase(r),k[r])for(;b.last()&&x[b.last()];)a("",b.last());$[r]&&b.last()==r&&a("",r),(o=y[r]||!!o)||b.push(r);var l={};i.replace(p,function(e,t,n,r,a){l[t]=s(n||r||a||"")}),n.start&&n.start(r,l,o)}function a(e,r){var a,i=0;if(r=t.lowercase(r))for(i=b.length-1;i>=0&&b[i]!=r;i--);if(i>=0){for(a=b.length-1;a>=i;a--)n.end&&n.end(b[a]);b.length=i}}"string"!=typeof e&&(e=null===e||"undefined"==typeof e?"":""+e);var i,o,l,b=[],w=e;for(b.last=function(){return b[b.length-1]};e;){if(l="",o=!0,b.last()&&D[b.last()]?(e=e.replace(new RegExp("([\\W\\w]*)<\\s*\\/\\s*"+b.last()+"[^>]*>","i"),function(e,t){return t=t.replace(m,"$1").replace(v,"$1"),n.chars&&n.chars(s(t)),""}),a("",b.last())):(0===e.indexOf("<!--")?(i=e.indexOf("--",4),i>=0&&e.lastIndexOf("-->",i)===i&&(n.comment&&n.comment(e.substring(4,i)),e=e.substring(i+3),o=!1)):h.test(e)?(i=e.match(h))&&(e=e.replace(i[0],""),o=!1):g.test(e)?(i=e.match(d))&&(e=e.substring(i[0].length),i[0].replace(d,a),o=!1):f.test(e)&&((i=e.match(u))?(i[4]&&(e=e.substring(i[0].length),i[0].replace(u,r)),o=!1):(l+="<",e=e.substring(1))),o&&(i=e.indexOf("<"),l+=0>i?e:e.substring(0,i),e=0>i?"":e.substring(i),n.chars&&n.chars(s(l)))),e==w)throw c("badparse",e);w=e}a()}function s(e){return e?(P.innerHTML=e.replace(/</g,"&lt;"),P.textContent):""}function o(e){return e.replace(/&/g,"&amp;").replace(b,function(e){var t=e.charCodeAt(0);return e=e.charCodeAt(1),"&#"+(1024*(t-55296)+(e-56320)+65536)+";"}).replace(w,function(e){return"&#"+e.charCodeAt(0)+";"}).replace(/</g,"&lt;").replace(/>/g,"&gt;")}function l(e,n){var r=!1,a=t.bind(e,e.push);return{start:function(e,i,s){e=t.lowercase(e),!r&&D[e]&&(r=e),r||!0!==q[e]||(a("<"),a(e),t.forEach(i,function(r,i){var s=t.lowercase(i),l="img"===e&&"src"===s||"background"===s;!0!==C[s]||!0===A[s]&&!n(r,l)||(a(" "),a(i),a('="'),a(o(r)),a('"'))}),a(s?"/>":">"))},end:function(e){e=t.lowercase(e),r||!0!==q[e]||(a("</"),a(e),a(">")),e==r&&(r=!1)},chars:function(e){r||a(o(e))}}}var c=t.$$minErr("$sanitize"),u=/^<((?:[a-zA-Z])[\w:-]*)((?:\s+[\w:-]+(?:\s*=\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)\s*(>?)/,d=/^<\/\s*([\w:-]+)[^>]*>/,p=/([\w:-]+)(?:\s*=\s*(?:(?:"((?:[^"])*)")|(?:'((?:[^'])*)')|([^>\s]+)))?/g,f=/^</,g=/^<\//,m=/\x3c!--(.*?)--\x3e/g,h=/<!DOCTYPE([^>]*?)>/i,v=/<!\[CDATA\[(.*?)]]\x3e/g,b=/[\uD800-\uDBFF][\uDC00-\uDFFF]/g,w=/([^\#-~| |!])/g,y=a("area,br,col,hr,img,wbr");e=a("colgroup,dd,dt,li,p,tbody,td,tfoot,th,thead,tr"),n=a("rp,rt");var $=t.extend({},n,e),k=t.extend({},e,a("address,article,aside,blockquote,caption,center,del,dir,div,dl,figure,figcaption,footer,h1,h2,h3,h4,h5,h6,header,hgroup,hr,ins,map,menu,nav,ol,pre,script,section,table,ul")),x=t.extend({},n,a("a,abbr,acronym,b,bdi,bdo,big,br,cite,code,del,dfn,em,font,i,img,ins,kbd,label,map,mark,q,ruby,rp,rt,s,samp,small,span,strike,strong,sub,sup,time,tt,u,var"));e=a("circle,defs,desc,ellipse,font-face,font-face-name,font-face-src,g,glyph,hkern,image,linearGradient,line,marker,metadata,missing-glyph,mpath,path,polygon,polyline,radialGradient,rect,stop,svg,switch,text,title,tspan,use");var D=a("script,style"),q=t.extend({},y,k,x,$,e),A=a("background,cite,href,longdesc,src,usemap,xlink:href");e=a("abbr,align,alt,axis,bgcolor,border,cellpadding,cellspacing,class,clear,color,cols,colspan,compact,coords,dir,face,headers,height,hreflang,hspace,ismap,lang,language,nohref,nowrap,rel,rev,rows,rowspan,rules,scope,scrolling,shape,size,span,start,summary,tabindex,target,title,type,valign,value,vspace,width"),n=a("accent-height,accumulate,additive,alphabetic,arabic-form,ascent,baseProfile,bbox,begin,by,calcMode,cap-height,class,color,color-rendering,content,cx,cy,d,dx,dy,descent,display,dur,end,fill,fill-rule,font-family,font-size,font-stretch,font-style,font-variant,font-weight,from,fx,fy,g1,g2,glyph-name,gradientUnits,hanging,height,horiz-adv-x,horiz-origin-x,ideographic,k,keyPoints,keySplines,keyTimes,lang,marker-end,marker-mid,marker-start,markerHeight,markerUnits,markerWidth,mathematical,max,min,offset,opacity,orient,origin,overline-position,overline-thickness,panose-1,path,pathLength,points,preserveAspectRatio,r,refX,refY,repeatCount,repeatDur,requiredExtensions,requiredFeatures,restart,rotate,rx,ry,slope,stemh,stemv,stop-color,stop-opacity,strikethrough-position,strikethrough-thickness,stroke,stroke-dasharray,stroke-dashoffset,stroke-linecap,stroke-linejoin,stroke-miterlimit,stroke-opacity,stroke-width,systemLanguage,target,text-anchor,to,transform,type,u1,u2,underline-position,underline-thickness,unicode,unicode-range,units-per-em,values,version,viewBox,visibility,width,widths,x,x-height,x1,x2,xlink:actuate,xlink:arcrole,xlink:role,xlink:show,xlink:title,xlink:type,xml:base,xml:lang,xml:space,xmlns,xmlns:xlink,y,y1,y2,zoomAndPan",!0);var C=t.extend({},A,n,e),P=document.createElement("pre");t.module("ngSanitize",[]).provider("$sanitize",function(){this.$get=["$$sanitizeUri",function(e){return function(t){var n=[];return i(t,l(n,function(t,n){return!/^unsafe/.test(e(t,n))})),n.join("")}}]}),t.module("ngSanitize").filter("linky",["$sanitize",function(e){var n=/((ftp|https?):\/\/|(www\.)|(mailto:)?[A-Za-z0-9._%+-]+@)\S*[^\s.;,(){}<>"\u201d\u2019]/i,a=/^mailto:/i;return function(i,s){function o(e){e&&f.push(r(e))}function l(e,n){f.push("<a "),t.isDefined(s)&&f.push('target="',s,'" '),f.push('href="',e.replace(/"/g,"&quot;"),'">'),o(n),f.push("</a>")}if(!i)return i;for(var c,u,d,p=i,f=[];c=p.match(n);)u=c[0],c[2]||c[4]||(u=(c[3]?"http://":"mailto:")+u),d=c.index,o(p.substr(0,d)),l(u,c[0].replace(a,"")),p=p.substring(d+c[0].length);return o(p),e(f.join(""))}}])}(window,window.angular),angular.module("app",["ngMessages","ngSanitize"]).config(["$interpolateProvider","$locationProvider",function(e,t){e.startSymbol("<%").endSymbol("%>"),t.html5Mode(!1).hashPrefix("!")}]),angular.module("app").controller("BaseController",["$scope","$timeout",function(e,t){}]),angular.module("app").controller("BasicFormController",["$scope",function(e){e.formData={},e.submit=function(e,t){return t.$invalid?(e.preventDefault(),void t.$setSubmitted()):void 0}}]),angular.module("app").controller("ContactFormController",["$scope",function(e){e.formData={},e.submit=function(e,t){return t.$invalid?(e.preventDefault(),void t.$setSubmitted()):void 0}}]),angular.module("app").controller("FaqController",["$scope","$timeout","$http","growl",function(e,t,n,r){e.formData={},e.activeCategory=1,e.categories=[],e.questions=[],e.formProcessing=!1,n.get("/api/faqcategories/categories").success(function(t){e.categories=t,e.activeCategory=e.categories[0].id}).error(function(e){var t="Failed to get FAQs",n="There was a server error when trying to get the FAQs. Please refresh your page to try again.",a="error";r.add(t,n,a,7e3)}),e.changeCategory=function(t,n){e.activeCategory=n},e.submitQuestion=function(t,i){return t.preventDefault(),i.$invalid?(t.preventDefault(),void i.$setSubmitted()):(e.formProcessing=!0,void n.post("/api/faqs/ask-question",a(e.formData)).success(function(t){var n="Your question has been sent.",a="We will review it and respond with an answer as soon as possible.",s="success";r.add(n,a,s,7e3),e.formData={},e.formProcessing=!1,i.$setPristine(),i.$setUntouched()}).error(function(t){var n="Your question failed to send.",a="Please try submitting it again.",i="error";r.add(n,a,i,5e3),e.formProcessing=!1}))};var a=function(e){return e._token=window.csrf,e}}]),angular.module("app").controller("NewsletterFormController",["$scope","$timeout","$http","growl",function(e,t,n,r){e.formData={},e.formProcessing=!1,e.submit=function(t,i){return t.preventDefault(),i.$invalid?(t.preventDefault(),void i.$setSubmitted()):(e.formProcessing=!0,void n.post("/api/subscribe",a(e.formData)).success(function(t){var n="Thank you!",a="You have signed up for our newsletter. You will receive a confirmation email shortly.",s="success";r.add(n,a,s,7e3),e.formData={},e.formProcessing=!1,i.$setPristine(),i.$setUntouched()}).error(function(t){var n="Newsletter sign up failed",a=t.message,i="error";r.add(n,a,i,5e3),e.formProcessing=!1}))};var a=function(e){return e._token=window.csrf,e}}]),angular.module("app").controller("ProgramsController",["$scope","$location","$timeout","$http","$sce","growl",function(e,t,n,r,a,i){e.program={},e.programs=[],e.modalVisible=!1,e.formData={},e.formProcessing=!1,e.getPrograms=function(t,a){r.get("/api/featuredprograms/programs").success(function(r){e.programs=r,t&&n(function(){e.showDetail(t,a)})}).error(function(e){var t="Failed to get programs",n="There was a server error when trying to get the list of programs. Please refresh your page to try again.",r="error";i.add(t,n,r,7e3)})},e.showDetail=function(r,i){if(r){if("undefined"!=typeof i&&i.preventDefault(),e.programs.length<1)return e.getPrograms(r);e.program=_.findWhere(e.programs,{id:r}),e.program.video_url="",e.program.video_url=a.trustAsResourceUrl("https://www.youtube.com/embed/"+e.program.video_id),e.formData.program_id=e.program.id,n(function(){t.path("/detail/"+e.program.id),e.modalVisible=!0,$("body").addClass("modal-open")})}},e.dismissDetail=function(r){"undefined"!=typeof r&&r.preventDefault(),e.modalVisible=!1,$(".modal-container").scrollTop(0),e.formData={},e.commentForm.$setPristine(),e.commentForm.$setUntouched(),n(function(){t.path("/"),e.program={},$("body").removeClass("modal-open")})},e.postComment=function(t,n){return n.preventDefault(),t.$invalid?(n.preventDefault(),void t.$setSubmitted()):void(e.formData.program_id&&(e.formProcessing=!0,r.post("/api/featuredprograms/comment",s(e.formData)).success(function(n){var r="Your comment has been submitted.",a="We will review it shortly.",s="success";i.add(r,a,s,5e3),e.formData={},e.formData.program_id=e.program.id,e.formProcessing=!1,t.$setPristine(),t.$setUntouched()}).error(function(t){var n="Your comment failed to submit.",r="Please try submitting it again.",a="error";i.add(n,r,a,5e3),e.formProcessing=!1})))},e.$on("$locationChangeSuccess",function(r){var a=t.path();if(a.match(/\/detail\//g)){var i=parseInt(a.substr(8,8));return void e.showDetail(i)}e.modalVisible=!1,n(function(){e.program={},$("body").removeClass("modal-open")})});var s=function(e){return e._token=window.csrf,e}}]),angular.module("app").controller("QuestionController",["$scope",function(e){}]),angular.module("app").directive("growls",["growl","$rootScope","$timeout",function(e,t,n){return{restrict:"AE",replace:!0,scope:!0,templateUrl:"templates/growls.html",link:function(r){r.growls=e.messages(),t.$on("growl",function(e,t){r.growls=t,n(function(){r.$apply()})}),r.dismiss=function(t){e.dismiss(t)}}}}]),angular.module("app").directive("ngUpdateHidden",function(){return{restrict:"AE",scope:{},replace:!0,require:"ngModel",link:function(e,t,n,r){e.$watch(r,function(e){t.val(e)}),t.change(function(){e.$apply(function(){r.$setViewValue(t.val())})})}}}),angular.module("app").directive("questions",["growl","$http","$timeout",function(e,t,n){return{restrict:"AE",replace:!0,scope:{questionId:"@"},templateUrl:"templates/questions.html",link:function(e,r){function a(t){e.question=_.where(e.questions,{id:parseInt(t)})[0],r.fadeIn(500)}function i(t){var n=e.question[t].action,i=e.question[t].params;switch(n){case"loadQuestion":r.find(".text-container").slideUp(0,function(){e.texts=[]}),r.fadeOut(0),a(i[0]);break;case"loadText":s(i)}}function s(t){var a=r.find(".text-container");a.slideUp(300,function(){e.texts=t,e.$apply(),n(function(){a.slideDown(300)})})}r.find(".tooltip").tooltipster({contentAsHTML:!0}),t.get("/public/packages/questions.json").then(function(t){e.questions=t.data.questions,a(e.questionId)}),e.doYes=function(e){e.preventDefault(),i("yes")},e.doNo=function(e){e.preventDefault(),i("no")}}}}]),angular.module("app").directive("validation",function(){return{restrict:"A",require:["^form","ngModel"],link:function(e,t,n,r){var a,i,s=r[0],o=r[1],l=n.validation.split("|"),c=!1,u=function(e,t){o.$validators[e]=function(n){var r,a=o.$isEmpty(n);return!c&&a?r=!0:c&&a?r="required"===e?!1:!0:(t=new RegExp(t),r=t.test(n)),r}};if(l)for(var d=0;d<l.length;d++){var p=l[d].split(":");switch(p.indexOf("required")>-1&&(c=!0),p[0]){case"alpha":a="alpha",i="^[a-zA-Z]*$",u(a,i);break;case"alphaDash":a="alphaDash",i="^[a-zA-Z-_]+$",u(a,i);break;case"alphaNum":a="alphaNum",i="^[a-zA-Z0-9]+$",u(a,i);break;case"alphaNumDash":a="alphaNumDash",i="^[a-zA-Z0-9-_]+$",u(a,i);break;case"email":a="email",i='^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|(\\".+\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$',u(a,i);break;case"phone":a="phone",i="^\\(\\d{3}\\)[\\s]\\d{3}[-]\\d{4}$",u(a,i);break;case"integer":a="integer",i="^-?[\\d]+$",u(a,i);break;case"ipAddress":a="ipAddress",i="^(?:(?:2[0-4]\\d|25[0-5]|1\\d{2}|[1-9]?\\d)\\.){3}(?:2[0-4]\\d|25[0-5]|1\\d{2}|[1-9]?\\d)(?:\\:(?:\\d|[1-9]\\d{1,3}|[1-5]\\d{4}|6[0-4]\\d{3}|65[0-4]\\d{2}|655[0-2]\\d|6553[0-5]))?$",u(a,i);break;case"noWhitespace":a="noWhitespace",i="^[\\S]+$",u(a,i);break;case"number":a="number",i="^-?(?:\\d+|\\d{1,3}(?:,\\d{3})+)?(?:\\.\\d+)?$",u(a,i);break;case"url":a="url",i="^(http(?:s)?\\:\\/\\/[a-zA-Z0-9\\-]+(?:\\.[a-zA-Z0-9\\-]+)*\\.[a-zA-Z]{2,6}(?:\\/?|(?:\\/[\\w\\-]+)*)(?:\\/?|\\/\\w+\\.[a-zA-Z]{2,4}(?:\\?[\\w]+\\=[\\w\\-]+)?)?(?:\\&[\\w]+\\=[\\w\\-]+)*)$",u(a,i);break;case"videoUrl":a="videoUrl",i="^(http(?:s)?:\\/\\/(?:www\\.)?(((vimeo.com\\/)((channels\\/[A-z]+\\/)|(groups\\/[A-z]+\\/videos\\/))?([0-9]+))|(((youtube.com\\/)?(watch\\?v=[0-9A-Za-z]+))|(youtu.be\\/[0-9A-Za-z]+)|(youtube.com\\/embed\\/[0-9A-Za-z]+))?))$",u(a,i);break;case"min":a="min",i="^.{"+p[1]+",}$",u(a,i);break;case"max":a="max",i="^.{0,"+p[1]+"}$",u(a,i);break;case"password":a="password",i="^(?=.*\\d)(?=.*[a-z])(?=.*\\W).{8,}$",u(a,i);break;case"match":e.$watch(function(){var e=s[p[1]].$viewValue;a="match",i="^"+e+"$",u(a,i)});break;case"required":a="required",i="\\S",u(a,i)}}}}}),angular.module("app").factory("growl",["$rootScope",function(e){var t=[],n=function(){e.$broadcast("growl",t)};return{messages:function(){return t},add:function(e,t,n,r){var a=this,i=r||5e3;switch(n){case"primary":a.primary(e,t,i);break;case"success":a.success(e,t,i);break;case"error":a.error(e,t,i);break;case"warning":a.warning(e,t,i);break;case"info":a.info(e,t,i);break;default:a["default"](e,t,i)}},"default":function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:""}),n(),i.expire(s,a)},primary:function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:"primary"}),n(),i.expire(s,a)},success:function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:"success"}),n(),i.expire(s,a)},error:function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:"error"}),n(),i.expire(s,a)},warning:function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:"warning"}),n(),i.expire(s,a)},info:function(e,r,a){var i=this,s=Math.random().toString(36).substring(7);t.unshift({key:s,title:e,message:r,type:"info"}),n(),i.expire(s,a)},dismiss:function(e){t.splice(e,1),n()},expire:function(e,r){var a=this;setTimeout(function(){var r=_.findIndex(t,function(t){return t.key===e});r>-1&&(a.dismiss(r),n())},r)}}}]),angular.module("app").factory("Util",["$q","$http","Upload",function(e,t,n){return{fileUpload:function(t,r,a,i){for(var s=[],o=function(e){return n.upload({url:t,method:"POST",file:e,fields:{_token:window.csrf}})},l=0;l<r.length;l++){var c=o(r[l]);s.push(c)}e.all(s).then(function(e){if(angular.isFunction(a)){for(var t=[],n=0;n<e.length;n++)t.push(e[n].data);return a(t)}},function(e){return angular.isFunction(i)?i(e):void 0})},fileDelete:function(e,n,r){t({method:"DELETE",url:"/api/upload",params:{file:e}}).success(function(e){return angular.isFunction(n)?n(e):void 0}).error(function(e){return angular.isFunction(r)?r(e):void 0})}}}]),angular.module("app").run(["$templateCache",function(e){e.put("templates/growls.html",'<li class="growl" ng-repeat="growl in growls" ng-class="growl.type" ng-click="dismiss($index)" ng-cloak>\n    <div class="growl-title" ng-bind="growl.title"></div>\n    <div class="growl-message" ng-bind="growl.message"></div>\n</li>\n'),e.put("templates/questions.html",'<aside class="question">\n	<h5 class="qa">\n		Readiness Question:\n		<img src="/public/img/tt.png" class="tooltip tt" title="Readiness questions help you estimate how ready your organization is to implement an EBP. <br />As you answer each question, you will be provided with suggested actions to advance your readiness.">\n	</h5>\n	<div class="flowchart">\n		<div class="row">\n			<div class="small-6 columns">\n				<p ng-bind="question.question"></p>\n			</div>\n			<div class="small-5 small-offset-1 columns">\n				<ul class="text-right">\n					<li><a href="#" class="button yes-button" ng-click="doYes($event)">yes</a></li>\n					<li><a href="#" class="button no-button" ng-click="doNo($event)">no</a></li>\n				</ul>\n			</div>\n		</div>\n		<div class="text-container" style="display: none;">\n			<ul class="options">\n				<li ng-repeat="text in texts">\n					<div ng-if="text.link">Review <a ng-href="<% text.link %>" title="<% text.text %>"><span ng-bind="text.text"></span></a></div>\n					<div ng-if="!text.link"><span ng-bind="text.text"></span></div>\n				</li>\n			</ul>\n		</div>\n	</div>\n</aside>\n')}]);