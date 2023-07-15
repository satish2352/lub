<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />

    <!-- Below, we are including the jQuery and jQuery plugin .js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
      $().ready(function () {
        $("#signupForm").validate({
          rules: {
            nameproject: "required",
            Nameofyourcollege: "required",
            nameparticipants: "required",
            PaymentUTRCode: "required",
            email: {
              required: true,
              email: true,
            },
            paymentconfirm: "required",
            paymentcode: "required",
            attchcopy: "required",
            imgupload:"required",
            projectupload:"required"
          },
          // In 'messages', users have to specify messages as per rules
          messages: {
            nameproject: "This field is required.*",
            nameparticipants: "This field is required.*",
            Nameofyourcollege: "This field is required.*",
            PaymentUTRCode: "This field is required*.",
            imgupload:"This field is required.*",
            projectupload:"This field is required.*"
          },
        });
      });
    </script>
  </head>

  <body>
    <div class="container">
      <div class="col-8">
        <form
          class="cmxform"
          id="signupForm"
          method="get"
          action="form-handler.html"
          autocomplete="off"
        >
          <h2>Talent search - College Students Registration form</h2>
          <h6>
            Event organized by Laghu Udyog Bharti & Government Polytechnic,
            Nashik (DTE)
          </h6>

          <fieldset>
            <p class="mt-4">
              <label for="email"><b>Email</b></label
              ><br />
              <input id="email" name="email" type="email" />
            </p>

            <p>
              <label for="nameproject"><b>Name of project</b></label
              ><br />
              <input id="nameproject" name="nameproject" type="text" />
            </p>

            <p>
              <label for="nameparticipants"><b>Name of participants</b></label
              ><br />
              <input
                id="nameparticipants"
                name="nameparticipants"
                type="text"
              />
            </p>
            <p>
              <label for="Nameofyourcollege"><b>Name of your college</b></label
              ><br />
              <input
                id="Nameofyourcollege"
                name="Nameofyourcollege"
                type="text"
              />
            </p>

            <div class="mb-3 mt-3 cc">
              <label for="registrationfees"
                ><b>Registration fees Rs.750/- paid by</b></label
              >
              <div class="form-check">
                <input class="form-check-input" type="radio" name="neft" />
                <label class="form-check-label" for="neft">NEFT</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="neft"
                  checked
                />
                <label class="form-check-label">QR code</label>
              </div>
            </div>

            <p>
              <label for="PaymentUTRCode"
                ><b>Payment confirmation - UTR Code</b></label
              ><br />
              <input id="PaymentUTRCode" name="PaymentUTRCode" type="text" />
            </p>

            <p class="mt-3">
              <label for="bankdetails">
                <b>Bank details:</b><br />
                A/c Name: Laghu Udyog Bharati <br />
                Bank: TJSB Bank <br />
                Branch: Gangapur Rd. <br />
                A/c No.: 021110100000661 <br />
                IFS Code: TJSB0000021 <br />
              </label>
              <img src="../LUB PAYMENT QR.jpg" alt="" />
            </p>
            <p class="mt-3"><b>Add Payment Screenshot</b></p>
            <input name="imgupload" type="file" value="Add Screenshot" accept="image/*"/>
            <p class="mt-4"></p>
            <b>Attach Your Project soft copy (Upload File)</b><br />
            <input  name="projectupload"  type="file" value="Add File" accept="pdf"/>

            <p class="mt-4">
              <input class="submit" type="submit" value="Submit" />
            </p>
          </fieldset>
          <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
          ></script>
        </form>
      </div>
    </div>
  </body>
</html>
