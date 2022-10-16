$("#search").click(function (){

    if ($("#searchText").val() == "") {
        window.alert("Please Type Something");
    }else{
        let sendData = {
           searchText: $("#searchText").val()
            
        };
         $.ajax({
            url: "../Controller/inpatientSearchcontroller.php",
            type: "POST",
            data: sendData,

            success: function(res){
                
                let inpatients = JSON.parse(res);

                $("#table_id").empty();
                for (const inpatient of inpatients) {
                    $("#table_id").append(
                        `<tr class="row_bdr">
                        <td>1</td> -->
                        <td>${inpatient.hospitalized_date} </td>
                        <td>${inpatient.name}</td>
                        <td>${inpatient.age}</td>
                        <td>${inpatient.disease}</td>
                        <td>${inpatient.status}</td>
                        <td>${inpatient.room}</td>
                        <td>${inpatient.address}</td>    
                        <td>
                                    <span class="edit_delete_btn"><a href="../Controller/inpatientEditController.php?id=<?= $iPatient["id"] ?>" class="color_sixth me-2">Edit</a></span>
                                    <span class="edit_delete_btn"><a href="../Controller/inpatientEditController.php?delId=<?= $iPatient["id"] ?>" class="color_fifth">Delete</a></span>
                         </td>                   
                    </tr>`
                    );
               
                }
                
            },
            error: function(err){
                alert(err);
            }
         })
    }

})