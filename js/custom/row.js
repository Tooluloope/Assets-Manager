$(document).ready(function () {
    var counter = 0;

    $("#addrow1").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var newRow1 = $("<tr>");
        var cols1 = "";

        cols += '<td scope="col"><select name="certificate_name[]" id="single" class="form-control form-control-chosen" data-placeholder="Please select..."><option value="">Please select...</option><option value="Offshore Safety Permit">Offshore Safety Permit</option><option value="Curriculum vitae">Curriculum vitae</option><option value="Trade Certificate">Trade Certificate</option></select></td>';
        cols += '<td scope="col"><input class="form-control" type="file" name="certificate[]" id="image"></td>';
        cols += '<td scope="col"><input type="date" class="form-control" name="expiry_date[]"/></td>';
        cols += '<td scope="col"><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list1").append(newRow);
        counter++;
    });

    $("#addrow2").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var newRow1 = $("<tr>");
        var cols1 = "";

        cols += '<td scope="col"><select name="certificate_name[]" id="single" class="form-control form-control-chosen" data-placeholder="Please select..."><option value="">Please select...</option><option value="Offshore Safety Permit">Offshore Safety Permit</option><option value="Curriculum vitae">Curriculum vitae</option><option value="Trade Certificate">Trade Certificate</option></select></td>';
        cols += '<td scope="col"><input class="form-control" type="file" name="certificate[]" id="image"></td>';
        cols += '<td scope="col"><input type="date" class="form-control" name="expiry_date[]"/></td>';
        cols += '<td scope="col"><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list1").append(newRow);
        counter++;
    });



    $("table.order-list1").on("click", ".ibtnDel1", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
