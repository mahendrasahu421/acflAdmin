

<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                        Login Reports</h2>
                    <ul class="breadcrumb mb-0">
                        <li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Login Reports</li>

                    </ul>
                </div>

            </div>
        </div>
        <button onclick="exportTableToCSV()" class="mb-2 btn btn-primary">Export Table</button>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card p-4 mb-4">

                    <table id="myTable" class="table display dataTable table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Creation Date</th>
                                <th>Name</th>
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                               
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                              
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                               
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                               
                            </tr>


                    </table>
                </div> <!-- .card end -->

            </div>
        </div>

    </div>
</div>
<script>
    function downloadCSV(csv, filename) {
        var csvFile = new Blob([csv], {
            type: "text/csv"
        });
        var downloadLink = document.createElement("a");
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    }

    function exportTableToCSV() {
        var table = document.getElementById("myTable");
        var rows = table.getElementsByTagName("tr");
        var csv = [];

        for (var i = 0; i < rows.length; i++) {
            var row = [],
                cols = rows[i].getElementsByTagName("td");
            for (var j = 0; j < cols.length; j++) {
                row.push(cols[j].innerText);
            }
            csv.push(row.join(","));
        }

        var csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
        downloadCSV(csvContent, "table-export.csv");
    }
</script>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->