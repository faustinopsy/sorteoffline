var myChart1 = echarts.init(document.getElementById('chartli2'));
                        
myChart1.showLoading();

$.get('sorteoffline/public/mapas/maps/brazil.json', function (geoJson) {

    myChart1.hideLoading();

    echarts.registerMap('state', geoJson);
    $.ajax({
        type: "GET",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        url: 'sorteoffline/public/mapas/estados.json',
        error: function () {
            alert("An error occurred.");
        },
        success: function (data) {
            myChart1.setOption(option1 = {
                title: {
                    text: 'Ganhadores por Estado',
                    subtext: 'Ganhadores de 15 acertos',

                },
                tooltip: {
                    trigger: 'item',
                    formatter: function (params) {
                        
                        //console.log(params.id);
                        var res = '<b >'+params.name + '</b><hr />';
                        var myseries = option1.series;
                        for (var i = 0; i < myseries.length; i++) {

                            for (var j = 0; j < myseries[i].data.length; j++) {
                                
                                if (myseries[i].data[j].name === params.name) {
                                    
                                    res += myseries[i].data[j].value +'<br> Premios de 15 <br><b style=" text-align:right">e '+ myseries[i].data[j].ganhadores+'<br> Pessoas </b>' ;
                                }
                            }
                        }
                        return res;
                    }
                },
                toolbox: {
                    show: true,
                    orient: 'horizontal',
                    right: 'left',
                    top: 'top',
                    feature: {
                        dataView: {
                            show: false
                        },
                        restore: {
                            title: 'Yenile'
                        },
                        saveAsImage: {
                            title: 'İndir'
                        }
                    }
                },
                visualMap: {
                    min: 10,
                    max: 5000,

                    realtime: false,
                    calculable: true,
                    color: ['red', '#FFE066', 'white']
                },
                series: [{
                    name: 'Por Estados',
                    type: 'map',
                    mapType: 'state',
                    itemStyle: {
                        normal: {
                            label: {
                                show: false
                            }
                        },
                        emphasis: {
                            label: {
                                show: true
                            }
                        }
                    },

                    data: data.regiao,

                }]
            });
        }
    });

});

var myChart200 = echarts.init(document.getElementById('chartli3'));

myChart200.showLoading();

$.get('sorteoffline/public/mapas/maps/regiao.json', function (geoJson) {

    myChart200.hideLoading();

    echarts.registerMap('brazil', geoJson);
    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        url: 'sorteoffline/public/mapas/regioes.json',
        error: function () {
            alert("An error occurred c.");
        },
        success: function (data) {

            myChart200.setOption(option2 = {
                title: {
                    text: 'Sortudos por Região',
                    subtext: 'Sortudos por Região',
                },
                tooltip: {
                    trigger: 'item',
                    formatter: function (params) {
                        var res1 = '<b >'+params.name + '</b>';

                        var myseries = option2.series[0];
                        //console.log(myseries);
                        //console.log(params);
                        for (var i = 0; i < myseries.data.length; i++) {

                            if (myseries.data[i].name === params.name) {

                               res1 += ' <hr /><b > Ganhadores: </b><br>' + myseries.data[i].value +
                                    ' ';
                            }

                        }

                        return res1;
                    }
                },
                toolbox: {
                    show: true,
                    orient: 'horizontal',
                    right: 'left',
                    top: 'top',
                    feature: {
                        dataView: {
                            show: false
                        },
                        restore: {
                            title: 'Yenile'
                        },
                        saveAsImage: {
                            title: 'İndir'
                        }
                    }
                },
                visualMap: {
                    min: 0,
                    max: 30000,

                    realtime: true,
                    calculable: true,
                    color: ['#F25F5C', '#FFE066', '#247BA0']
                },

                series: [{
                        name: 'Sortudos por Região',
                        type: 'map',
                        map: 'brazil',
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: false
                                }
                            }
                        },

                        
                        data: data.regiao,

                    }
                ]
            });
        }
    });

});