var url = "http://localhost:8080/index.php?controller=reserva&method=buscarDadosReservas";
fetch(url)
.then((response)=>{
    return response.json();
})
.then ((data)=>{
    //console.log(data);
    gerarGrafico(data);
})
.catch ((error)=>{
    console.log(error);
});


function gerarGrafico(data){
    console.log(data);

        var valor_barra = [];
		var legenda = [];

        var dados = data;

		for(let x = 0; x < dados.length; x++){
			legenda[x] = dados[x].data;
			valor_barra[x] = parseInt(dados[x].qtd);
		}
		
		var option = {
			series:[{
			data:valor_barra}],
			
			chart:{
				height:350,
				width:700,
				type: "bar"
			},
			colors:["#ff0000", "#0000ff", "#00ff00"],
			title:{
				text:"Produtos mais vendidos",
				align: "center",
				style:{color: "#444"}
			},
			plotOptions:{
				bar:{
					columnWidth:"45%",
					distributed: true,
				},
				dataLabels:{
					position:"top",
				},
				legend:{
					show:false
					},
				xaxis:{
					categories:legenda,
					labels:{
						style:{
							fontSize: "12px"
						}
					}
				}
			  }
			
		};
		var chart = new ApexCharts(document.getElementById("grafico"), option);
		chart.render();
}