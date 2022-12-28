@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Repetidos Quina') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="w3-panel w3-card-4" id="grafico">
                            <canvas id="ciencia" width="80%" ></canvas></div>
                          <div class="col-md-3">
                            <script>
                                var x;
                                var dados = [];
                                var data = new FormData();
                                data.append("ultimo", "5");
                            
                                var xhr = new XMLHttpRequest();
                                xhr.withCredentials = true;
                            
                                xhr.addEventListener("readystatechange", function() {
                                  if(this.readyState === 4) {
                                x =JSON.parse(this.responseText);
                            //console.log(x);
                            for(let i=1;i<=25;i++){
                                dados.push((typeof x[i]==="undefined") ? 0 : parseInt(x[i] ));
                                
                            }
                            //console.log(dados);
                            //var provaveis = dados.filter(buscarvalores);    
                            
                            function buscarvalores(value,index) {
                                console.log(value );
                                console.log(index);
                                if (value ===3){ 
                                    switch(index){
                                    case 0:
                                        document.getElementById("btn0").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 1:
                                        document.getElementById("btn1").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 2:
                                        document.getElementById("btn2").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 3:
                                        document.getElementById("btn3").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 4:
                                        document.getElementById("btn4").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 5:
                                        document.getElementById("btn5").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 6:
                                        document.getElementById("btn6").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 7:
                                        document.getElementById("btn7").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 8:
                                        document.getElementById("btn8").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 9:
                                        document.getElementById("btn9").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 10:
                                        document.getElementById("btn10").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 11:
                                        document.getElementById("btn11").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 12:
                                        document.getElementById("btn12").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 13:
                                        document.getElementById("btn13").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 14:
                                        document.getElementById("btn14").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 15:
                                        document.getElementById("btn15").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 16:
                                        document.getElementById("btn16").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 17:
                                        document.getElementById("btn17").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 18:
                                        document.getElementById("btn18").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 19:
                                        document.getElementById("btn19").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 20:
                                        document.getElementById("btn20").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 21:
                                        document.getElementById("btn21").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 22:
                                        document.getElementById("btn22").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 23:
                                        document.getElementById("btn23").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 24:
                                        document.getElementById("btn24").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    case 25:
                                        document.getElementById("btn25").innerHTML ='<b style=color:grey>'+index+'</b>';
                                        break;
                                    }
                                }else
                                if (value < 3){ 
                                    switch(index-1){
                                    case 0:
                                        document.getElementById("btn0").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 1:
                                        document.getElementById("btn1").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 2:
                                        document.getElementById("btn2").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 3:
                                        document.getElementById("btn3").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 4:
                                        document.getElementById("btn4").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 5:
                                        document.getElementById("btn5").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 6:
                                        document.getElementById("btn6").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 7:
                                        document.getElementById("btn7").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 8:
                                        document.getElementById("btn8").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 9:
                                        document.getElementById("btn9").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 10:
                                        document.getElementById("btn10").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 11:
                                        document.getElementById("btn11").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 12:
                                        document.getElementById("btn12").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 13:
                                        document.getElementById("btn13").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 14:
                                        document.getElementById("btn14").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 15:
                                        document.getElementById("btn15").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 16:
                                        document.getElementById("btn16").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 17:
                                        document.getElementById("btn17").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 18:
                                        document.getElementById("btn18").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 19:
                                        document.getElementById("btn19").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 20:
                                        document.getElementById("btn20").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 21:
                                        document.getElementById("btn21").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 22:
                                        document.getElementById("btn22").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 23:
                                        document.getElementById("btn23").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 24:
                                        document.getElementById("btn24").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    case 25:
                                        document.getElementById("btn25").innerHTML ='<b style=color:green>'+index+'</b>';
                                        break;
                                    }
                                }else{
                                  return index;   
                                }
                            }
                            
                                              
                            
                                    var cience = document.getElementById("ciencia");
                                    window.chartColors = {
                                        red: 'rgb(255, 99, 132)',
                                        orange: 'rgb(255, 159, 64)',
                                        yellow: 'rgb(255, 205, 86)',
                                        green: 'rgb(51, 204, 51)',
                                        blue: 'rgb(54, 162, 235)',
                                        purple: 'rgb(153, 102, 255)',
                                        grey: 'rgb(201, 203, 207)'
                                    };
                                    var ctxC = cience.getContext('2d');
                                    var CPieChart = new Chart(ctxC, {
                                       type: 'bar',
                                       data: {
                                          labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
                                          '16','17','18','19','20','21','22','23','24','25'],
                                         datasets: [{
                                              axis: 'y',
                                             label: "Pares",
                                             data: [,dados[2],,dados[4],,dados[6],,dados[8],,dados[10],,
                                                    dados[12],,dados[14],,dados[16],,dados[18],,dados[20],,
                                                    dados[22],,dados[24],, 
                                                    ],
                                                backgroundColor: [
                                  
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)',
                                  'rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)',
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)',
                                  'rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)',
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)'
                                ],
                                borderColor: [
                                  'rgb(255, 99, 132)'
                                  ],
                                           
                                          },
                                          {
                                             label: "Ímpares",
                                             data: [ dados[1],,dados[3],,dados[5],,dados[7],,dados[9],,
                                                     dados[11],,dados[13],, dados[15],,dados[17],,
                                                     dados[19], ,dados[21],,dados[23],,dados[25]
                                                     ],
                                                backgroundColor: [
                                  
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)',
                                  'rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)',
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)',
                                  'rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)',
                                  'rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)','rgba(0, 0, 207, 0.5)','rgba(100, 0, 207, 0.5)'
                                ],
                                borderColor: [
                                  'rgb(255, 99, 132)'
                                  ],
                                           
                                          }]
                                       },
                                        
                                        options: {
                                            responsive: true,
                                            title: {
                                                display: true,
                                                text: 'Números mais repetidos nos últimos 5 sorteios'
                                            },
                                            
                                            backgroundRules: [{
                                                backgroundColor1: window.chartColors.green, 
                                                Color: window.chartColors.green, 
                                                yAxisSegement: 2
                                            }, {
                                                backgroundColor1: window.chartColors.grey,
                                                    Color: window.chartColors.grey, 
                                                yAxisSegement: 3
                                            }, {
                                                backgroundColor1: window.chartColors.red,
                                                    Color: window.chartColors.red, 
                                                yAxisSegement: 4
                                            }],
                                            scales: {
                                                 indexAxis: 'y',
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true,
                                                        stepSize: 1
                                                    }
                                                }]
                                            },
                                             
                                        },
                                        plugins: [{
                                            beforeDraw: function (chart) {
                                                var ctx = chart.chart.ctx;
                                                var ruleIndex = 0;
                                                var rules = chart.chart.options.backgroundRules;
                                                var yaxis = chart.chart.scales["y-axis-0"];
                                                var xaxis = chart.chart.scales["x-axis-0"];
                                                var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
                                                for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
                                                    if (yaxis.ticksAsNumbers[i] <= rules[ruleIndex].yAxisSegement) {
                                                        ctx.fillStyle = rules[ruleIndex].backgroundColor1;
                                                        ctx.fillStyle = rules[ruleIndex].Color;
                                                        ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
                                                    } else {
                                                        ruleIndex++;
                                                        i++;
                                                    }
                                                }
                                            }
                                        }]
                                    });
                                    cience.onclick = function(e) {
                                   var slice = CPieChart.getElementAtEvent(e);
                                   if (!slice.length) return; // return if not clicked on slice
                                   var label = slice[0]._model.label;
                                   
                                   switch (label) 
                                   {
                                      // add case for each label/slice
                                      case label:
                                         alert(label);
                                         break;
                                     
                                     
                                    }		
                                }	  
                                  
                            }
                            });
                            
                                xhr.open("GET", "http://localhost/repetidosqu");
                            
                                xhr.send(data);
                                
                                
                                </script>
                             
                               
                            
                             
                          </div>
                        
                      </div>
                     
                   
                                      
                        
                        
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
