
$(document).ready(function() {
      // On state change, populate districts dropdown
      $("#state").change(function() {
        var stateId = $(this).val();
        if (stateId) {
          $.ajax({
            url: "get_districts.php",
            data: { state_id: stateId },
            type: "POST",
            success: function(data) {
              $("#district").html(data);
            }
          });
        } else {
          $("#district").html('<option value="">Select District</option>');
          $("#city").html('<option value="">Select City</option>');
        }
      });

      // On district change, populate cities dropdown
      $("#district").change(function() {
        var districtId = $(this).val();
        if (districtId) {
          $.ajax({
            url: "get_cities.php",
            data: { district_id: districtId },
            type: "POST",
            success: function(data) {
              $("#city").html(data);
            }
          });
        } else {
          $("#city").html('<option value="">Select City</option>');
        }
      });
    });