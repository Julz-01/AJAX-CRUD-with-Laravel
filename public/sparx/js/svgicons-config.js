var svgIconConfig = {
	clock : { 
		url : 'img/clock.svg',
		animation : [
			{ 
				el : 'path:nth-child(2)', 
				animProperties : { 
					from : { val : '{"transform" : "r0 32 32"}' }, 
					to : { val : '{"transform" : "r630 32 32"}' } 
				} 
			},
			{ 
				el : 'path:nth-child(3)', 
				animProperties : { 
					from : { val :'{"transform" : "r0 32 32"}' }, 
					to : { val : '{"transform" : "r80 32 32"}' } 
				} 
			},
		]
	},
	mail : {
		url : 'img/mail.svg',
		animation : [
			{ 
				el : 'path', 
				animProperties : { 
					from : { val : '{"path" : "m 61.693118,24.434001 -59.386236,0 29.692524,19.897984 z"}' }, 
					to : { val : '{"path" : "m 61.693118,24.434001 -59.386236,0 29.692524,-19.7269617 z"}' }
				} 
			}
		]
	},
	hourglass : {
		url : 'img/hourglass.svg',
		animation : [
			{ 
				el : 'path:nth-child(1)', 
				animProperties : { 
					from : { val : '{"transform" : "r 0 32 32"}' }, 
					to : { val : '{"transform" : "r 180 32 32"}' }
				} 
			},
			{ 
				el : 'path:nth-child(2)', 
				animProperties : { 
					from : { val : '{"transform" : "r 0 32 32"}', animAfter : '{"path" : "m 31,32 2,0 0,0 9,15 -20,0 9,-15 z"}' }, 
					to : { val : '{"transform" : "r 180 32 32"}', animAfter : '{"path" : "m 22,17 20,0 -9,15 0,0 -2,0 0,0 z"}' }
				} 
			}
		]
	},
	flag : {
		url : 'img/flag.svg',
		animation : [
			{ 
				el : 'path', 
				animProperties : { 
					from : { val : '{"path" : "m 11.75,11.75 c 0,0 10.229631,3.237883 20.25,0 10.020369,-3.2378833 20.25,0 20.25,0 l 0,27 c 0,0 -6.573223,-3.833185 -16.007359,0 -9.434136,3.833185 -24.492641,0 -24.492641,0 z"}' }, 
					to : { val : '{"path" : "m 11.75,11.75 c 0,0 8.373476,-4.8054563 17.686738,0 9.313262,4.805456 22.813262,0 22.813262,0 l 0,27 c 0,0 -11.699747,4.363515 -22.724874,0 C 18.5,34.386485 11.75,38.75 11.75,38.75 z"}' }
				} 
			}
		]
	}
};