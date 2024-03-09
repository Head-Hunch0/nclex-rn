document.addEventListener("DOMContentLoaded", function () {
  // Function to initiate payment
  function initiatePayment() {
    // Data to be sent to Pesapal for payment initiation
    var requestData = {
      amount: 100, // Amount to be paid (replace with your actual amount)
      description: "Payment for product", // Description of the payment
      type: "MERCHANT", // Type of payment (MERCHANT or ORDER)
      reference: "unique_reference_number", // Unique reference number for the transaction
      email: "jeremyloki93@gmail.com", // Customer's email address
      phone_number: "+254790519395", // Customer's phone number
      currency: "KES", // Currency (Kenyan Shilling in this case)
      callback_url: "https://yourwebsite.com/pesapal/callback", // Callback URL for Pesapal to notify your server
      redirect_url: "https://yourwebsite.com/payment/success", // Redirect URL after successful payment
      onlinestore: "name_of_your_store", // Name of your online store (optional)
    };

      console.log(requestData);
    // Fetch options
    var fetchOptions = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(requestData),
    };

    // Make fetch request to Pesapal API
    fetch("https://www.pesapal.com/API/PostPesapalDirectOrderV4", fetchOptions)
      .then(function (response) {
        return response.text();
      })
      .then(function (responseText) {
        // Redirect user to Pesapal payment page
        window.location.href = responseText; // Redirect URL returned by Pesapal
      })
      .catch(function (error) {
        // Handle error
        console.error("Error initiating payment:", error);
      });
  }

  //   // Call the initiatePayment function when a button is clicked or any other event occurs
  //   var payButton = document.getElementById("payButton");
  //   payButton.addEventListener("click", function () {
  //     initiatePayment();
  //   });

  // Bind initiatePayment function to form submission
  var paymentForm = document.getElementById("paymentForm");
  paymentForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Call initiatePayment function
    initiatePayment();
  });
});


const url = "https://pay.pesapal.com/v3/api/Auth/RequestToken";
// const url = "https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken";
const data = {
  consumer_key: "oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV",
  consumer_secret: "S0HBz76TNtLNXMRpv+JQKHn5GAY=",
};

const requestOptions = {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
  },
  body: JSON.stringify(data),
};


fetch(url, requestOptions)
    .then((response) => {
      
        console.log(response);
        return response.json()
    })
    .then((data) => {
      console.log(data);
    // Check if the response contains a token
    if (data && data.token) {
      const bearerToken = data.token;
      console.log("Bearer Token:", bearerToken);

      // You can proceed to use the bearer token as needed
    } else {
      console.error("Token not found in response");
    }
  })
  .catch((error) => {
    console.error("Error:", error);
  });


const IPN_ID = "e53d4ff4-1a44-48da-b811-dd87deea8f1e";
const Token =
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3VzZXJkYXRhIjoiOTM1NGQyY2UtYmJhYi00MDBjLWIzZjMtZGU4Yjk3NDg4ZTM1IiwidWlkIjoib00xVkhvcUpQb21vb29MNktjM2hXNmVuR3RTbE5IdVYiLCJuYmYiOjE3MDkyMDU2OTEsImV4cCI6MTcwOTIwNTk5MSwiaWF0IjoxNzA5MjA1NjkxLCJpc3MiOiJodHRwOi8vcGF5LnBlc2FwYWwuY29tLyIsImF1ZCI6Imh0dHA6Ly9wYXkucGVzYXBhbC5jb20vIn0.3o6SXPy1ItfG_3U6cyFztAZyJebr39z6-KQ1uL8dEdo";


// fetch(
// //   "https://cybqa.pesapal.com/pesapalv3/api/Transactions/SubmitOrderRequest",
//   "https://pay.pesapal.com/v3/api/Transactions/SubmitOrderRequest",

//   {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/json",
//     },
//     body: JSON.stringify({
//       id: "ANYTHINGGOES",
//       currency: "KES",
//       amount: "10.0",
//       description: "Payment description goes here",
//       callback_url: "https://8696-196-201-231-254.ngrok-free.app/payments",
//       notification_id: "e53d4ff4-1a44-48da-b811-dd87deea8f1e",
//       billing_address: {
//         email_address: "john.doe@example.com",
//         phone_number: '+254790519395',
//         country_code: "KEN",
//         first_name: "John",
//         middle_name: "",
//         last_name: "Doe",
//         line_1: "",
//         line_2: "",
//         city: "",
//         state: "",
//         postal_code: null,
//         zip_code: null,
//       },
//     }),
//   }
// )
//   .then((response) => response.json())
//   .then((data) => {
//     console.log(data); // Log the response from Pesapal
//   })
//   .catch((error) => {
//     console.error("Error:", error);
//   });

const pesapalAPIEndpoint = "https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken";
const consumerKey = "your_consumer_key";
const consumerSecret = "your_consumer_secret";

const requestData2 = {
  consumer_key: "oM1VHoqJPomoooL6Kc3hW6enGtSlNHuV",
  consumer_secret: "S0HBz76TNtLNXMRpv+JQKHn5GAY=",
};

const requestOptions2 = {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
    Authorization: "Basic " + btoa(consumerKey + ":" + consumerSecret),
  },
  body: JSON.stringify(requestData2),
};


console.log(requestOptions2);
console.log(pesapalAPIEndpoint);
fetch(
    "https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken",
    requestOptions2
)
    .then((response) => response.json())
    .then((data) => {
        // Handle the response data here
        console.log(data);
    })
    .catch((error) => {
        // Handle errors here
        console.error("Error:", error);
    });
