$("#boom").click(function () {
    if ($("#todayList").val() == "") {
        alert("search something");
    } else {
        //alert($("#todayList").val());
        let sendData = {
            searchText: $("#todayList").val()
        };
        //console.log(sendData);
        $.ajax({
            url: "../Controller/dashboard/searchController.php",
            type: "POST",
            data: sendData,
            success: function (res) {
                //console.log(res);
                let date = JSON.parse(res);
                console.log(date);
            },
            error: function (err) {
                alert(err);
            }
        });

    }
});