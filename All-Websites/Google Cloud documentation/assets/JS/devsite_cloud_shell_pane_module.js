(function(_ds){var window=this;var Oba=async function(){const a=(await _ds.r()).getStaticPath(!0);return(0,_ds.O)`<img src="${a}/images/cloud-shell-cta-art.png">`};var XV=function(a,b,c){a.cloudtrack.h({type:"cloudShell",name:b.toString(),metadata:c})},YV=class extends _ds.gv{constructor(){super(...arguments);this.isDogfood=this.isResizing=!1;this.offset=0;this.o="";this.cloudtrack=new _ds.iz;this.h=a=>{this.isResizing&&this.m&&(a=Math.floor(this.m.bottom-a.clientY+this.offset).toString(),this.resizer.setAttribute("aria-valuenow",a),this.style.height=a+"px")};this.j=()=>{this.isResizing=!1;window.removeEventListener("pointermove",this.h);window.removeEventListener("pointerup",
this.j);this.style.pointerEvents="auto";XV(this,"pane_resize",{pU:!0})};this.Da=()=>{document.body.setAttribute("no-scroll","")};this.Ba=()=>{document.body.hasAttribute("no-scroll")&&document.body.removeAttribute("no-scroll")}}hb(){return this}render(){this.isDogfood||this.setAttribute("height-visual-offset","24");return(0,_ds.O)`
      <div class="resizer" role="separator" aria-valuemin="0" aria-valuemax="0"
        @pointerdown='${this.ea}'>
        ${this.isDogfood?(0,_ds.O)`
    <div class="dogfood-notice">
      <a href="http://goto.google.com/cgc-cloud-shell-known-issues">
        <span class="material-icons">pets</span>
        <span class="notice-text">Dogfood Version - Internal Only</span>
      </a>
    </div>`:""}
        <div class="grabber-focus">
          <div class="grabber"></div>
        </div>
      </div>
      <devsite-shell
        @pointerover='${this.Da}'
        @pointerout='${this.Ba}'
        @devsite-shell-opened='${this.Ha}'
        @devsite-shell-closed='${this.Ga}'
        @devsite-shell-resized='${this.Ma}'
        @devsite-shell-maximized='${this.Fa}'>
      </devsite-shell>
      ${(0,_ds.O)`
      <div class="free-trial-banner">
        <a @click='${this.ya}'
          class="close-btn button-white material-icons" aria-label="${"Close Cloud Shell"}">close</a>
        <div class="banner-text">
          <h3>${"Welcome to Cloud Shell"}</h3>
          <p>${"Cloud Shell is a development environment that you can use in the browser:"}</p>
          <ul>
            <li>${"Activate Cloud Shell to explore Google Cloud with a terminal and an editor"}</li>
            <li>${"Start a free trial to get $300 in free credits"}</li>
          </ul>
          <div class="row">
            <button @click='${this.xa}'
              class="button-blue">${"Activate Cloud Shell"}
            </button>
            <button @click='${this.oa}'>
              ${"Start a free trial"}</button>
          </div>
        </div>
        ${(0,_ds.IF)(Oba(),"")}
      </div>`}
      `}Ma(a){if(null==a?0:a.detail)a=(a.detail.eH+this.resizer.offsetHeight).toString(),this.resizer.setAttribute("aria-valuenow",a),this.style.height=a+"px",this.removeAttribute("devsite-size"),this.sp.isMaximized=!1,XV(this,"pane_resize",{isManual:!1})}get La(){return window.sessionStorage.getItem("hide_cloudshell_fte_banner")}Ha(){"true"===this.La&&this.removeAttribute("enable-fte-user-flow");this.classList.add("opened");XV(this,"pane_open")}Ga(){this.classList.remove("opened");XV(this,"pane_close");
this.hasAttribute("devsite-size")&&(this.removeAttribute("devsite-size"),this.sp.isMaximized=!1,this.style.height=this.o);document.body.hasAttribute("no-scroll")&&document.body.removeAttribute("no-scroll")}Fa(){_ds.fb()&&this.setAttribute("cr-os","");this.o=this.style.height;this.setAttribute("devsite-size","content-area");this.style.height="100%"}ea(a){this.isResizing=!0;this.m=this.getBoundingClientRect();window.addEventListener("pointermove",this.h);window.addEventListener("pointerup",this.j);
this.offset=a.offsetY;this.style.pointerEvents="none"}ya(){if(this.sp){var a=this.sp;a.h.isOpen&&a.h.close()}}xa(){this.Mw&&this.Mw.classList.add("hidden")}oa(){XV(this,"pane_free_trial_click");const a=new URL("https://console.cloud.google.com/freetrial");a.searchParams.set("redirectPath",window.location.href);a.searchParams.set("utm_source","ext");a.searchParams.set("utm_medium","partner");a.searchParams.set("utm_campaign","CDR_cma_gcp_cloudshell_freetrial_020222");a.searchParams.set("utm_content",
"-");_ds.Id(window.location,_ds.td(a.toString()))}};_ds.u([_ds.Ap(".free-trial-banner"),_ds.v("design:type",HTMLElement)],YV.prototype,"Mw",void 0);_ds.u([_ds.Ap(".resizer"),_ds.v("design:type",HTMLElement)],YV.prototype,"resizer",void 0);_ds.u([_ds.Ap("devsite-shell"),_ds.v("design:type",_ds.tF)],YV.prototype,"sp",void 0);_ds.u([_ds.E({Ea:"is-resizing",Na:!0,type:Boolean}),_ds.v("design:type",Object)],YV.prototype,"isResizing",void 0);
_ds.u([_ds.E({Ea:"cloudshell-dogfood",type:Boolean}),_ds.v("design:type",Object)],YV.prototype,"isDogfood",void 0);try{window.customElements.define("cloud-shell-pane",YV)}catch(a){console.warn("Unrecognized DevSite custom element - CloudShellPane",a)};})(_ds_www);
