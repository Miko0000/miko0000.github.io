async function main(){
	const watches = document.querySelectorAll(".scrollwatch");
	for(const watch of watches)
		watch.addEventListener("scrollwatch", function(ev){
			const { state } = ev.detail;
			
			// console.log(ev.target, state);
			
			document.querySelector(ev.target.getAttribute("data-for"))
				.style
				.display
				= state < 1 ? "none" : "block"
			;
			
			//alert(state);
		})
	;
	
	new Treant({
		chart: {
			container: "#site-map",
			rootOrientation: "WEST",
			node: {
				//HTMLclass: "
			},
			connectors: {
				type: "step",
				style: {
					stroke: "white"
				}
			},
		},
		
		nodeStructure:
			await sitemap.treant(await sitemap.fetch())
	});
}

/*function siteMap(config){
	new Treant({
		chart: {
			container: "#site-map"
		},
		
		nodeStructure: {
			text: {
				name: "Parent node"
			},
			
			children: [
				{
					text: { name: "First child" }
				},
				{
					text: { name: "Second child" }
				}
			]
		}
	})
*}*/

window.addEventListener("load", function(){
	main();
})
