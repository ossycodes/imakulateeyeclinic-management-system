$(".tab-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "none",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    finish: "Submit"
  },
  onFinished: function(event, currentIndex) {
    // swal(
    //   "Your Form Submitted!",
    //   "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor."
    // );
  }
});

var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "none",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    finish: "Submit"
  },
  onStepChanging: function(event, currentIndex, newIndex) {
    return (
      currentIndex > newIndex ||
      (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
        (currentIndex < newIndex &&
          (form.find(".body:eq(" + newIndex + ") label.error").remove(),
          form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
        (form.validate().settings.ignore = ":disabled,:hidden"),
        form.valid()))
    );
  },
  onFinishing: function(event, currentIndex) {
    return (form.validate().settings.ignore = ":disabled"), form.valid();
  },
  onFinished: function(event, currentIndex) {
    var fullname = document.getElementById("wfullname").value;
    var parentname = document.getElementById("wparentname").value;
    var address = document.getElementById("waddress").value;
    var occupation = document.getElementById("woccupation").value;
    var phonenumber = document.getElementById("wphonenumber").value;
    var alternativePhonenumber = document.getElementById(
      "walternatephonenumber"
    ).value;
    var nextOfKin = document.getElementById("wnextofkin").value;
    var dateOfBirth = document.getElementById("wdateofbirth").value;
    var cliniccardnumber = document.getElementById("wcliniccardnumber").value;
    var dateOfBirthExceptYear = document.getElementById("wdateofbirthexceptyear");
    var token = document.querySelector('[name="csrf-token"]').content;
    var xhr = new XMLHttpRequest();
    var jsonData;

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        jsonData = JSON.parse(xhr.responseText);
        swal("Patient Registered Successfully!");
        location.href = `/casefile/${jsonData.patientSlug}/create`;
       }
    };

    xhr.onprogress = function() {
      var loadingWidget = document.getElementById("widgethere");
      loadingWidget.innerHTML = `
            <div class="box box-danger box-inverse">
            <div class="box-header">
                <h3 class="box-title">Registering Patient <h3>
            </div>
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
            </div>
      `;
    };

    xhr.onload = function() {
      document.getElementById("widgethere").innerHTML = "";
    };

    xhr.open("POST", "/patients", true);

    //Send the proper header information along with the request
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.setRequestHeader("X-CSRF-TOKEN", token);

    xhr.send(
      `fullname=${fullname}&parentname=${parentname}&address=${address}&occupation=${occupation}&phonenumber=${phonenumber}&alternativephonenumber=${alternativePhonenumber}&nextofkin=${nextOfKin}&dateofbirth=${dateOfBirth}&dateofbirthexceptyear=${dateOfBirthExceptYear}&cliniccardnumber=${cliniccardnumber}`
    );

    // swal("Patient Registered Successfully!");
    // location.href = `/casefile/${jsonData.patientSlug}/create`;
  }
}),
  $(".validation-wizard").validate({
    ignore: "input[type=hidden]",
    errorClass: "text-danger",
    successClass: "text-success",
    highlight: function(element, errorClass) {
      $(element).removeClass(errorClass);
    },
    unhighlight: function(element, errorClass) {
      $(element).removeClass(errorClass);
    },
    errorPlacement: function(error, element) {
      error.insertAfter(element);
    },
    rules: {
      email: {
        email: !0
      }
    }
  });
