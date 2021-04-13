$(document).ready(function(){
    var contador = 0;
    /* Charts */
    var myChart = null;
    var ctx = document.getElementById('myChart');
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            animation : {
                onComplete : done
            }
        }
    });

    /* Convert Graph in Image */
    function done(){
        contador++;
        $('#ContenedorImagenDatos').append("<img class='img-fluid' id='drag-" + contador + "' draggable='true' ondragstart='drag(event)' width='300' height='300'>");
        document.getElementById('drag-' + contador).setAttribute('src', myChart.toBase64Image());
    }


    var cuadroActivo = '';

    $( ".cuadro" ).click(function() {
        cuadroActivo = '';
        cuadroActivo = this.name;
        $('.collapse').collapse('hide');
    });

    $( "#AgregarTexto" ).click(function() {
        $('#' + cuadroActivo + 'Cuerpo').append("<textarea id='texto-" + contador +"' class='form-control' rows='4' style='margin: 0.5%'></textarea>");
    });

    $( "#AgregarImagen" ).click(function() {
        $('#' + cuadroActivo + 'Cuerpo').append("<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'></div>");
    });

    $( "#ActualizarGrafico" ).click(function() {
        console.log('ssss');
        myChart.data.datasets[0].data[0] = Math.floor(Math.random() * (100 - 1)) + 1;;
        myChart.data.datasets[0].data[0] = Math.floor(Math.random() * (100 - 1)) + 1;;
        myChart.data.datasets[0].data[0] = Math.floor(Math.random() * (100 - 1)) + 1;;
        myChart.data.datasets[0].data[0] = Math.floor(Math.random() * (100 - 1)) + 1;;
        myChart.data.datasets[0].data[0] = Math.floor(Math.random() * (100 - 1)) + 1;;
        myChart.update();
    });


    /* Generacion de PDF */
    $( "#GenerarPDF" ).click(function() {

        $.ajax({
            url : '/generate-pdf',
            data : { id : 123 },
            type : 'GET',
            dataType : 'json',
            success : function(response) {
                console.log(response);
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
        });
    });
});

/* Drag and Drop */
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}