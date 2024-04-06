function sortTable(order) {
    var table, rows, switching, i, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
    
    while (switching) {
        switching = false;
        rows = table.rows;
        
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            var x, y;
            if (order.includes('asc')) {
                if (order === 'asc0') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[1].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[1].innerHTML);
                } else if (order === 'asc1') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[2].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[2].innerHTML);
                } else if (order === 'asc2') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[3].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[3].innerHTML);
                }
            } else if (order.includes('desc')) {
                if (order === 'desc0') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[1].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[1].innerHTML);
                } else if (order === 'desc1') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[2].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[2].innerHTML);
                } else if (order === 'desc2') {
                    x = parseFloat(rows[i].getElementsByTagName("TD")[3].innerHTML);
                    y = parseFloat(rows[i + 1].getElementsByTagName("TD")[3].innerHTML);
                }
            }
            
            if (order.includes('asc')) {
                if (x > y) {
                    shouldSwitch = true;
                    break;
                }
            } else if (order.includes('desc')) {
                if (x < y) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}




function zoomIn() {
    var container = document.getElementById("container");
    var currentWidth = parseInt(container.style.width);
    var currentHeight = parseInt(container.style.height);
    container.style.width = (currentWidth + 100) + "px";
    container.style.height = (currentHeight + 100) + "px";
}

// Function to zoom out
function zoomOut() {
    var container = document.getElementById("container");
    var currentWidth = parseInt(container.style.width);
    var currentHeight = parseInt(container.style.height);
    container.style.width = (currentWidth - 100) + "px";
    container.style.height = (currentHeight - 100) + "px";
}
