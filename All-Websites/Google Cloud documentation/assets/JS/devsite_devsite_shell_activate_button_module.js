(function(_ds){var window=this;var Vpa=function(a){return e8(a.label,a.ft,a.iU)},e8=function(a,b,c){return(0,_ds.P)('<button class="gc-analytics-event'+(b?" cloudshell-dogfood":"")+' activate-cloudshell-button" data-category="Site-Wide Custom Events" data-label="'+_ds.X(a)+'" aria-label="'+_ds.X(a)+'"'+(c?' slot="anchor"':"")+' data-tooltip="'+_ds.X(a)+'" track-type="cloudShell" track-name="activateCloudShell"><svg width="22" height="18" viewBox="0 0 22 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M20 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16.01H2V1.99H20V16.01Z"/><path d="M6.87574 6H4.72426C4.45699 6 4.32314 6.32314 4.51213 6.51213L7.78787 9.78787C7.90503 9.90503 7.90503 10.095 7.78787 10.2121L4.51213 13.4879C4.32314 13.6769 4.45699 14 4.72426 14H6.87574C6.9553 14 7.03161 13.9684 7.08787 13.9121L10.7879 10.2121C10.905 10.095 10.905 9.90503 10.7879 9.78787L7.08787 6.08787C7.03161 6.03161 6.9553 6 6.87574 6Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.51213 6.51213C4.32314 6.32314 4.45699 6 4.72426 6H6.87574C6.9553 6 7.03161 6.03161 7.08787 6.08787L10.7879 9.78787C10.905 9.90503 10.905 10.095 10.7879 10.2121L7.08787 13.9121C7.03161 13.9684 6.9553 14 6.87574 14H4.72426C4.45699 14 4.32314 13.6769 4.51213 13.4879L7.78787 10.2121C7.90503 10.095 7.90503 9.90503 7.78787 9.78787L4.51213 6.51213ZM6.41421 7L8.49497 9.08076C9.00266 9.58844 9.00266 10.4116 8.49497 10.9192L6.41421 13H6.58579L9.58579 10L6.58579 7H6.41421Z"/><path d="M11 13.7V12.3C11 12.1343 11.1343 12 11.3 12H17.7C17.8657 12 18 12.1343 18 12.3V13.7C18 13.8657 17.8657 14 17.7 14H11.3C11.1343 14 11 13.8657 11 13.7Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M11 12.3V13.7C11 13.8657 11.1343 14 11.3 14H17.7C17.8657 14 18 13.8657 18 13.7V12.3C18 12.1343 17.8657 12 17.7 12H11.3C11.1343 12 11 12.1343 11 12.3Z"/></svg></button>')},
Wpa=function(a){const b=a.ft;a=a.label;return(0,_ds.P)('<cloud-mdc-rich-tooltip is-persistent class="hidden" soy-skip ssk=\''+_ds.X("6:C8iHNb")+"'>"+e8(a,b,!0)+(0,_ds.P)('<h2 slot="title" class="tooltip-title">Get started with Cloud Shell</h2><p slot="contents" class="tooltip-contents">Cloud Shell is a development environment that you can use in the browser:</p><ul slot="contents" class="tooltip-contents"><li>Activate Cloud Shell to explore Google Cloud with a terminal and an editor.</li><li>Start a free trial to get $300 in free credits.</li></ul>')+
(0,_ds.P)('<div slot="actions" class="tooltip-buttons"><a class="button button-primary activate-button">Activate Cloud Shell</a><a class="button button-white start-trial-button">Start a free trial</a></div>')+"</cloud-mdc-rich-tooltip>")};var Ypa=async function(a){a.o=await Xpa(a);a.eventHandler.listen(a.o,"devsite-shell-opened",()=>{a.m&&(a.m.disabled=!0)});a.eventHandler.listen(a.o,"devsite-shell-closed",()=>{a.m&&(a.m.disabled=!1)})},f8=async function(){return(await _ds.r()).hasMendelFlagAccess("Cloud","enable_cloud_shell_button_rich_tooltip")},Zpa=async function(a){const b=await f8();a.eventHandler.listen(a.querySelector(b?".activate-button":".activate-cloudshell-button"),"click",async()=>{if(a.o){b&&window.sessionStorage.setItem("hide_cloudshell_fte_banner",
"true");var c=a.o;c.h.isOpen||c.h.open()}});b&&a.h&&(a.eventHandler.listen(a.h,"visibility-changed",()=>{var c;if(null==(c=a.h))c=0;else{let d;c=null==(d=c.h)?void 0:d.j.o}c?a.setAttribute("tooltip--shown",""):a.removeAttribute("tooltip--shown")}),a.eventHandler.listen(a.querySelector(".start-trial-button"),"click",()=>{a.oa()}),a.h.o?a.h.classList.remove("hidden"):a.eventHandler.listen(a.h,"initialized",()=>{a.h.classList.remove("hidden")}));a.ea.h()},g8=function(a,b){a.cloudtrack.h({type:"cloudShell",
name:b.toString(),metadata:void 0})},Xpa=function(a){return new Promise(b=>{a.o&&b(a.o);document.querySelector("devsite-shell")&&b(document.querySelector("devsite-shell"));const c=new MutationObserver(()=>{document.querySelector("devsite-shell")&&(b(document.querySelector("devsite-shell")),c.disconnect())});c.observe(document.body,{childList:!0,subtree:!0})})},h8=class extends _ds.ji{constructor(){super();this.h=this.o=this.m=null;this.eventHandler=new _ds.x;this.ea=new _ds.qm;this.cloudtrack=new _ds.iz}async whenReady(){return this.ea.promise}async connectedCallback(){await Ypa(this);
var a=this.hasAttribute("cloudshell-dogfood");const b="true"===_ds.ek(window.location.href,"enable_shell");b&&this.setAttribute("force-visibility","");await f8()?(_ds.K(this,Wpa,{ft:a,label:"Activate Cloud Shell"}),this.h=this.querySelector("cloud-mdc-rich-tooltip")):_ds.K(this,Vpa,{ft:a,label:"Activate Cloud Shell"});this.m=this.querySelector(".activate-cloudshell-button");await Zpa(this);window.sessionStorage.getItem("cloudshell")&&this.m&&(this.m.disabled=!0);a=document.body.hasAttribute("free-trial")&&
this.hasAttribute("free-trial-hide");!b&&a||g8(this,"activate_button_seen")}disconnectedCallback(){_ds.B(this.eventHandler)}oa(){g8(this,"activate_button_tooltip_free_trial_click");const a=new URL("https://console.cloud.google.com/freetrial");a.searchParams.set("redirectPath",window.location.href);a.searchParams.set("utm_source","ext");a.searchParams.set("utm_medium","partner");a.searchParams.set("utm_campaign","CDR_cma_gcp_cloudshell_freetrial_020222");a.searchParams.set("utm_content","-");_ds.Id(window.location,
_ds.td(a.toString()))}};h8.prototype.connectedCallback=h8.prototype.connectedCallback;try{window.customElements.define("devsite-shell-activate-button",h8)}catch(a){console.warn("Unrecognized DevSite custom element - DevsiteShellActivateButton",a)};})(_ds_www);
