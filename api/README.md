## Matri Care AI API Testing Instructions

These instructions will guide you on how to test the API of Matri Care AI using the provided information.

### Prerequisites
- Ensure you have obtained a MATRIC_CARE_API_KEY. For demo purposes, you can use the following key: `BOt0UBB5mRlDpQA6NZx9wY`.
- You will need a tool capable of making HTTP requests, such as cURL, Postman, or a similar application.

### API Endpoint
The API endpoint for Matri Care AI is:
```
POST https://concepts.mukhwana.guru/matricareai/demo/api.php
```

### Testing Expectant Mothers Module
To test the Expectant Mothers module, follow these steps:

1. Set the request method to `POST`.
2. Set the request URL to the API endpoint mentioned above.
3. Set the following parameters as `x-www-form-urlencoded` variables in the request body:
   - `module`: Set the value to `expectant`.
   - `period`: Replace `PREGNANCY_PERIOD_HERE` with the period of pregnancy.
   - `history`: Replace `HEALTH_HISTORY_HERE` with the relevant health history information.
   - `apikey`: Use the MATRIC_CARE_API_KEY obtained earlier.

4. Send the HTTP request to the API endpoint.

### Testing Existing Mothers Module
To test the Existing Mothers module, follow these steps:

1. Set the request method to `POST`.
2. Set the request URL to the API endpoint mentioned above.
3. Set the following parameters as `x-www-form-urlencoded` variables in the request body:
   - `module`: Set the value to `existing`.
   - `age`: Replace `AGE_OF_CHILD` with the age of the child.
   - `gender`: Replace `GENDER_OF_CHILD` with the gender of the child.
   - `apikey`: Use the MATRIC_CARE_API_KEY obtained earlier.

4. Send the HTTP request to the API endpoint.

### Expected Output
The API will respond with a JSON object in the following format:
```
{
  "type": "100",
  "message": "Fetched Successful",
  "maternal_tips": "Tips Here"
}
```
The `"maternal_tips"` field will contain the relevant tips and recommendations based on the provided parameters.

Please note that the API supports natural language input in English.

These instructions will assist you in testing the Matri Care AI API and retrieving personalized maternal health tips and recommendations.