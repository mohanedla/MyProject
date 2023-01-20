const request = require('request');

// Make a request to the Open Exchange Rates API
// request({
//     url: 'https://openexchangerates.org/api/latest.json',
//     method: 'GET',
//     qs: {
//         app_id: 'YOUR_APP_ID' // Replace with your app ID
//     }
// }, function(error, response, body) {
//     if (!error && response.statusCode === 200) {
//         // Parse the response as JSON
//         const data = JSON.parse(body);
        
//         // Extract the USD/LYD exchange rate
//         const rate = data.rates.LYD;
        
//         // Log the exchange rate
//         console.log(1 USD = ${rate} LYD);
//     }
// });