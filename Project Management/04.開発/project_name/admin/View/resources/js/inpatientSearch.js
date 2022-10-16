$("#search").click(function (){
    // window.alert("OK");

    if ($("#searchText") .val() == "") {
        window.alert("Please Type Something");
    }else{
        let sendData = {
            searchText: $("#searchText").val()
        };

          $.ajax({
            url: "../Controller/inpatientSearchcontroller.php" ,
            type: "POST",
            data: sendData,

           success: function (res) {
            console.log(res);
           },
           error: function (err) {
            alert (err);
           }
          })
    };

})