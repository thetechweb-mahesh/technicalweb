
/*<![CDATA[*/
var AnaglyphGlobal = {"headerFixedVartiation":"1","slider_on":"1","sliderParam":{"sliderParallaxOn":true,"slideshowSpeed":"8000","animationSpeed":"1000","directionNav":false,"controlNav":true,"animationeffectin":"flipInX","animationeffectout":"fadeOutUp"}};
// Hide zalter
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
$(window).scroll(function(event){
    didScroll = true;
});
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    if (st > lastScrollTop && st > navbarHeight){
        $('header').removeClass('show-nav').addClass('hide-nav');
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('hide-nav').addClass('show-nav');
        }
    }
    lastScrollTop = st;
}
/*]]>*/


!function(c,i,t){var f,o=/^data-(.+)/,u='IntersectionObserver',r=/p/.test(i.readyState),s=[],a=s.slice,d='lazied',n='load',e='pageshow',l='forEach',m='hasAttribute',h='shift';function p(e){i.head.appendChild(e)}function v(e,n){a.call(e.attributes)[l](n)}function y(e,n,t,o){return o=(o=n?i.getElementById(n):o)||i.createElement(e),n&&(o.id=n),t&&(o.onload=t),o}function b(e,n){return a.call((n||i).querySelectorAll(e))}function g(t,e){b('source',t)[l](g),v(t,function(e,n){(n=o.exec(e.name))&&(t[n[1]]=e.value)}),e&&(t.className+=' '+e),n in t&&t[n]()}function I(e){f(function(o){o=b(e||'[type=deferjs]'),function e(n,t){(n=o[h]())&&(n.parentNode.removeChild(n),(t=y(n.nodeName)).text=n.text,v(n,function(e){'type'!=e.name&&(t[e.name]=e.value)}),t.src&&!t[m]('async')?(t.onload=t.onerror=e,p(t)):(p(t),e()))}()})}(f=function(e,n){r?t(e,n):s.push(e,n)}).all=I,f.js=function(n,t,e,o){f(function(e){(e=y('SCRIPT',t,o)).src=n,p(e)},e)},f.css=function(n,t,e,o){f(function(e){(e=y('LINK',t,o)).rel='stylesheet',e.href=n,p(e)},e)},f.dom=function(e,n,t,o,i){function r(e){o&&!1===o(e)||g(e,t)}f(function(t){t=u in c&&new c[u](function(e){e[l](function(e,n){e.isIntersecting&&(n=e.target)&&(t.unobserve(n),r(n))})},i),b(e||'[data-src]')[l](function(e){e[m](d)||(e.setAttribute(d,''),t?t.observe(e):r(e))})},n)},f.reveal=g,c.Defer=f,c.addEventListener('on'+e in c?e:n,function(){for(I();s[0];t(s[h](),s[h]()))r=1})}(this,document,setTimeout),function(e,n){e.defer=n=e.Defer,e.deferscript=n.js,e.deferstyle=n.css,e.deferimg=e.deferiframe=n.dom}(this); /*]]>*/</script>
IntersectionObserver'in window||document.write()';




window['__wavt'] = 'AOuZoY7s6Wbz_QxYwW0vDQpyFaSFg_gXSg:1708108772390';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d57835823096803010','//swebservices.blogspot.com/','57835823096803010');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '57835823096803010', 'title': 'Skylink WEB Services', 'url': 'https://swebservices.blogspot.com/', 'canonicalUrl': 'https://swebservices.blogspot.com/', 'homepageUrl': 'https://swebservices.blogspot.com/', 'searchUrl': 'https://swebservices.blogspot.com/search', 'canonicalHomepageUrl': 'https://swebservices.blogspot.com/', 'blogspotFaviconUrl': 'https://swebservices.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Skylink WEB Services - Atom\x22 href\x3d\x22https://swebservices.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Skylink WEB Services - RSS\x22 href\x3d\x22https://swebservices.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Skylink WEB Services - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/57835823096803010/posts/default\x22 /\x3e\n', 'meTag': '\x3clink rel\x3d\x22me\x22 href\x3d\x22https://www.blogger.com/profile/02468885867474179922\x22 /\x3e\n', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/360931b5b66b264f', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'interstitialAccepted': false, 'sharing': {'platforms': [{'name': 'Get link', 'key': 'link', 'shareMessage': 'Get link', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Share to Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Share to Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Share to Pinterest', 'target': 'pinterest'}, {'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': 'Read more', 'pageType': 'index', 'pageName': '', 'pageTitle': 'Skylink WEB Services'}}, {'name': 'features', 'data': {}}, {'name': 'messages', 'data': {'edit': 'Edit', 'linkCopiedToClipboard': 'Link copied to clipboard!', 'ok': 'Ok', 'postLink': 'Post Link'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'Custom', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Skylink WEB Services', 'description': '', 'url': 'https://swebservices.blogspot.com/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}, {'name': 'widgets', 'data': [{'title': 'Skylink WEB Services (Header)', 'type': 'Header', 'sectionId': 'header-title', 'id': 'Header1'}, {'title': 'Navigation Menu', 'type': 'HTML', 'sectionId': 'menu', 'id': 'HTML005'}, {'title': 'Header Icon', 'type': 'TextList', 'sectionId': 'header-icon', 'id': 'TextList000'}, {'title': 'Try \x27Technology\x27', 'type': 'BlogSearch', 'sectionId': 'search-widget', 'id': 'BlogSearch1'}, {'title': 'We are', 'type': 'HTML', 'sectionId': 'home-slider-description', 'id': 'HTML61'}, {'title': 'Slider Image', 'type': 'Image', 'sectionId': 'home-slider-image', 'id': 'Image5'}, {'title': 'Website designing', 'type': 'HTML', 'sectionId': 'feature-left-details', 'id': 'HTML21'}, {'title': 'Client Oriented', 'type': 'HTML', 'sectionId': 'feature-right-details', 'id': 'HTML29'}, {'title': 'Youtube Video', 'type': 'HTML', 'sectionId': 'lazyload-video', 'id': 'HTML41'}, {'title': 'Are You Ready To Take Your Business Online', 'type': 'HTML', 'sectionId': 'company-detail', 'id': 'HTML97'}, {'title': 'We Offer A Variety Of Industry Specific Marketing Solutions', 'type': 'HTML', 'sectionId': 'desc-feature', 'id': 'HTML57'}, {'title': 'Integration', 'type': 'HTML', 'sectionId': 'three-text-feature', 'id': 'HTML13'}, {'title': 'Blog Posts', 'type': 'Blog', 'sectionId': 'main-widget', 'id': 'Blog1', 'posts': [], 'headerByline': {'regionName': 'header1', 'items': [{'name': 'share', 'label': ''}, {'name': 'timestamp', 'label': 'On'}]}, 'footerBylines': [{'regionName': 'footer1', 'items': [{'name': 'comments', 'label': 'Comment'}, {'name': 'icons', 'label': ''}]}, {'regionName': 'footer2', 'items': [{'name': 'labels', 'label': 'in'}]}], 'allBylineItems': [{'name': 'share', 'label': ''}, {'name': 'timestamp', 'label': 'On'}, {'name': 'comments', 'label': 'Comment'}, {'name': 'icons', 'label': ''}, {'name': 'labels', 'label': 'in'}]}, {'title': 'Middle post ad 01', 'type': 'HTML', 'sectionId': 'main-widget', 'id': 'HTML01'}, {'title': 'Middle post ad 02', 'type': 'HTML', 'sectionId': 'main-widget', 'id': 'HTML02'}, {'type': 'Attribution', 'sectionId': 'main-widget', 'id': 'Attribution1'}, {'title': '', 'type': 'ReportAbuse', 'sectionId': 'main-widget', 'id': 'ReportAbuse1'}, {'title': '', 'type': 'PopularPosts', 'sectionId': 'main-widget', 'id': 'PopularPosts1', 'posts': []}, {'title': 'About Me', 'type': 'Profile', 'sectionId': 'main-widget', 'id': 'Profile1'}, {'title': 'Contact Form', 'type': 'ContactForm', 'sectionId': 'add-widget', 'id': 'ContactForm1'}, {'title': 'Popular Posts', 'type': 'PopularPosts', 'sectionId': 'side-widget', 'id': 'PopularPosts00', 'posts': []}, {'title': 'Sticky ad placement(desktop only)', 'type': 'HTML', 'sectionId': 'side-sticky', 'id': 'HTML95'}, {'title': 'Some Numbers that Matter to Us', 'type': 'HTML', 'sectionId': 'client-counter', 'id': 'HTML43'}, {'title': 'Unlimited', 'type': 'HTML', 'sectionId': 'Freq-accordion-1', 'id': 'HTML56'}, {'title': 'Unlimited', 'type': 'HTML', 'sectionId': 'Freq-accordion-2', 'id': 'HTML76'}, {'title': 'Let\x27s start a new project?', 'type': 'HTML', 'sectionId': 'start-new-project', 'id': 'HTML25'}, {'title': 'Send Whatsapp Query', 'type': 'HTML', 'sectionId': 'duo-app', 'id': 'HTML59'}, {'title': 'Footer Menu', 'type': 'LinkList', 'sectionId': 'footer-widget-2', 'id': 'LinkList2'}, {'title': 'Footer Description', 'type': 'HTML', 'sectionId': 'footer-widget-3', 'id': 'HTML1'}, {'title': 'Sponsor Images', 'type': 'HTML', 'sectionId': 'footer-widget-4', 'id': 'HTML2'}, {'title': 'Our Social Profile', 'type': 'LinkList', 'sectionId': 'footer-widget-5', 'id': 'LinkList1'}, {'title': 'Take me back', 'type': 'HTML', 'sectionId': 'error-404', 'id': 'HTML404'}]}]);
_WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header-title', document.getElementById('Header1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML005', 'menu', document.getElementById('HTML005'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_TextListView', new _WidgetInfo('TextList000', 'header-icon', document.getElementById('TextList000'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogSearchView', new _WidgetInfo('BlogSearch1', 'search-widget', document.getElementById('BlogSearch1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML61', 'home-slider-description', document.getElementById('HTML61'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_ImageView', new _WidgetInfo('Image5', 'home-slider-image', document.getElementById('Image5'), {'resize': false}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML21', 'feature-left-details', document.getElementById('HTML21'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML29', 'feature-right-details', document.getElementById('HTML29'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML41', 'lazyload-video', document.getElementById('HTML41'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML97', 'company-detail', document.getElementById('HTML97'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML57', 'desc-feature', document.getElementById('HTML57'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML13', 'three-text-feature', document.getElementById('HTML13'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main-widget', document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'navMessage': 'No posts.', 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/3784263896-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/3268905543-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML01', 'main-widget', document.getElementById('HTML01'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML02', 'main-widget', document.getElementById('HTML02'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_AttributionView', new _WidgetInfo('Attribution1', 'main-widget', document.getElementById('Attribution1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_ReportAbuseView', new _WidgetInfo('ReportAbuse1', 'main-widget', document.getElementById('ReportAbuse1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'main-widget', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_ProfileView', new _WidgetInfo('Profile1', 'main-widget', document.getElementById('Profile1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'add-widget', document.getElementById('ContactForm1'), {'contactFormMessageSendingMsg': 'Sending...', 'contactFormMessageSentMsg': 'Your message has been sent.', 'contactFormMessageNotSentMsg': 'Message could not be sent. Please try again later.', 'contactFormInvalidEmailMsg': 'A valid email address is required.', 'contactFormEmptyMessageMsg': 'Message field cannot be empty.', 'title': 'Contact Form', 'blogId': '57835823096803010', 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'contactFormToken': 'AOuZoY5TvTohXgOYGpSV302atayg8ntA2w:1708108772391', 'submitUrl': 'https://www.blogger.com/contact-form.do'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts00', 'side-widget', document.getElementById('PopularPosts00'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML95', 'side-sticky', document.getElementById('HTML95'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML43', 'client-counter', document.getElementById('HTML43'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML56', 'Freq-accordion-1', document.getElementById('HTML56'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML76', 'Freq-accordion-2', document.getElementById('HTML76'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML25', 'start-new-project', document.getElementById('HTML25'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML59', 'duo-app', document.getElementById('HTML59'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'footer-widget-2', document.getElementById('LinkList2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'footer-widget-3', document.getElementById('HTML1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'footer-widget-4', document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList1', 'footer-widget-5', document.getElementById('LinkList1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML404', 'error-404', document.getElementById('HTML404'), {}, 'displayModeFull'));

 var lazyadsense = false; window.addEventListener('scroll', function(){

 if ((document.documentElement.scrollTop != 0 && lazyadsense === false) || (document.body.scrollTop != 0 && lazyadsense === false)) { (function() { var ad = document.createElement('script'); ad.setAttribute('crossorigin','anonymous'); ad.async = true; ad.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXXXXXXXXXX'; var sc = document.getElementsByTagName('script')[0]; sc.parentNode.insertBefore(ad, sc); })(); lazyadsense = true; }}, true);


$(document).ready(function(){
$('.whts-btn').on('click', function(){
$('#'+$(this).data('modal')).css('display','block');
})
$('span.rose').on('click', function(){
$('.modal').css('display','none');
})
$(window).on('click', function(event){
if (jQuery.inArray( event.target, $('.modal') ) != "-1") {
$('.modal').css('display','none');
}
})
})