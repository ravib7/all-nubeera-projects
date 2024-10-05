function ready() {


    AOS.init({
      duration: 800,
    })

    // alert( 'DOM готов' );
    // Popup
    // popupClose.onclick = function(){
    //   popup.style.opacity = 0
    //   setTimeout(function(){
    //     popup.style.display = 'none'
    //   }, 400)
    // }

    // window.onscroll = function() {
    //   var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    //   if( scrolled > 10 ){
    //     siteHeaderJS.style.backgroundColor = 'rgba(255,255,255,1)';
    //     siteHeaderJS.style.height = '60px'
    //     siteHeaderLogoJS.style.width = '60px'
    //     siteHeaderLogoJS.style.height = '60px'
    //     siteHeaderLogoJS.style.lineHeight = '60px'
    //   }else{
    //     siteHeaderJS.style.backgroundColor = 'rgba(255,255,255,0)';
    //     siteHeaderJS.style.height = '80px'
    //     siteHeaderLogoJS.style.width = '80px'
    //     siteHeaderLogoJS.style.height = '80px'
    //     siteHeaderLogoJS.style.lineHeight = '80px'
    //   }
    // }


  }


function openPopup(){
  popup.style.display = 'flex'
  setTimeout(function(){
    popup.style.opacity = 1
  }, 100)
}


document.addEventListener("DOMContentLoaded", ready);






var element =  document.querySelector('.isolayer--deco1');
if (typeof(element) != 'undefined' && element != null)
{


 (function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			new IsoGrid(document.querySelector('.isolayer--deco1'), {
				transform : 'translateX(33vw) translateY(-340px) rotateX(45deg) rotateZ(45deg)',
				stackItemsAnimation : {
					properties : function(pos) {
						return {
							translateZ: (pos+1) * 30,
							rotateZ: getRandomInt(-4, 4)
						};
					},
					options : function(pos, itemstotal) {
						return {
							type: dynamics.bezier,
							duration: 500,
							points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
							delay: (itemstotal-pos-1)*40
						};
					}
				}
			});

			// new IsoGrid(document.querySelector('.isolayer--deco2'), {
			// 	perspective: 3000,
			// 	transform : 'translateY(-150px) rotateX(55deg) rotateZ(-45deg)',
			// 	stackItemsAnimation : {
			// 		properties : function(pos) {
			// 			return {
			// 				translateX: getRandomInt(-60, 60),
			// 				translateY: getRandomInt(-60, 60),
			// 				rotateZ: getRandomInt(-10, 10)
			// 			};
			// 		},
			// 		options : function(pos, itemstotal) {
			// 			return {
			// 				type: dynamics.bezier,
			// 				duration: 800,
			// 				points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
			// 				delay: (itemstotal-pos-1)*20
			// 			};
			// 		}
			// 	}
			// });

			// new IsoGrid(document.querySelector('.isolayer--deco3'), {
			// 	transform : 'translateX(40vw) translateY(100px) rotateX(15deg) rotateY(0) rotateZ(40deg)',
			// 	stackItemsAnimation : {
			// 		properties : function(pos) {
			// 			return {
			// 				rotateY: pos * -15
			// 			};
			// 		},
			// 		options : function(pos, itemstotal) {
			// 			return {
			// 				type: dynamics.bezier,
			// 				duration: 500,
			// 				points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
			// 				delay: (itemstotal-pos-1)*40
			// 			};
			// 		}
			// 	}
			// });

			// new IsoGrid(document.querySelector('.isolayer--deco4'), {
			// 	perspective: 3000,
			// 	transform : 'translate3d(-200px,-200px,0) scale3d(0.8,0.8,1) rotateY(45deg) rotateZ(-10deg)',
			// 	stackItemsAnimation : {
			// 		properties : function(pos) {
			// 			return {
			// 				rotateX: (pos+1) * -15
			// 			};
			// 		},
			// 		options : function(pos, itemstotal) {
			// 			return {
			// 				type: dynamics.spring,
			// 				delay: (itemstotal-pos-1)*30
			// 			};
			// 		}
			// 	},
			// 	onGridLoaded : function() {
			// 		classie.add(document.body, 'grid-loaded');
			// 	}
			// });
		})();
}
