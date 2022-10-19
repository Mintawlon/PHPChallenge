$("#generalHealth").click(function () {
  let sendData = {
    searchText: $("#generalHealth").text(),
  };

  $.ajax({
    url: "../Controller/doctor/searchDoctorController.php",
    type: "POST",
    data: sendData,

    success: function (res) {
      let doctorSpeciality = JSON.parse(res);
      console.log(doctorSpeciality);
      $("#doctorSearch").empty();

      for (const doctor of doctorSpeciality) {
        $("#doctorSearch").append(
          `
              <div class="col-sm-12 col-md-6 col-lg-4 text-center">
              <div class="card cart" style="width: 23rem;">
                  <dvi class="image">
                      <img src="./storages/image/${doctor.profile_photo}" class="card-img-top" alt="...">
                      <h5 class="mt-2">${doctor.doctor_name}</h5>
                      <p>${doctor.speciality}</p>
                  </dvi>
                  <div class="card-body">
                      <div class="contact">
                          <div class="btk mb-3">
                              <span class="title">Day</span>
                              <span>Time</span>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                  Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                              </label>
                          </div>
                          <hr>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                                  Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                              </label>
                          </div>
                          <hr>
                          <button class=" btn btn-outline-primary submit">continued</button>
                      </div>
                  </div>
              </div>
          </div>
              `
        );
      }
    },
    error: function (err) {
      alert(err);
    },
  });
  // }
});

$("#generalHealth").click(function () {
  getData($("#generalHealth").text());
});

$("#pulmonology").click(function () {
  getData($("#pulmonology").text());
});

$("#ophthalmology").click(function () {
  getData($("#ophthalmology").text());
});
$("#neurology").click(function () {
  getData($("#neurology").text());
});
$("#og").click(function () {
  getData($("#og").text());
});
$("#dentist").click(function () {
  getData($("#dentist").text());
});
$("#paediatric").click(function () {
  getData($("#paediatric").text());
});

function getData(text) {
  let sendData = {
    searchText: text,
  };

  $.ajax({
    url: "../Controller/doctor/searchDoctorController.php",
    type: "POST",
    data: sendData,

    success: function (res) {
      let doctorSpeciality = JSON.parse(res);
      console.log(doctorSpeciality);
      $("#doctorSearch").empty();

      for (const doctor of doctorSpeciality) {
        $("#doctorSearch").append(
          `
            <div class="col-sm-12 col-md-6 col-lg-4 text-center">
            <div class="card cart" style="width: 23rem;">
                <dvi class="image">
                    <img src="./storages/image/${doctor.profile_photo}" class="card-img-top" alt="...">
                    <h5 class="mt-2">${doctor.doctor_name}</h5>
                    <p>${doctor.speciality}</p>
                </dvi>
                <div class="card-body">
                    <div class="contact">
                        <div class="btk mb-3">
                            <span class="title">Day</span>
                            <span>Time</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                            </label>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                            </label>
                        </div>
                        <hr>
                        <button class=" btn btn-outline-primary submit">continued</button>
                    </div>
                </div>
            </div>
        </div>
            `
        );
      }
    },
    error: function (err) {
      alert(err);
    },
  });
}
