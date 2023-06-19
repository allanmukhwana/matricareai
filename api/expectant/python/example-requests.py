import requests

url = "https://concepts.mukhwana.guru/matricareai/demo/api.php"

payload = 'module=expectant&period=3%20months&history=Blind&apikey=MATRIC_CARE_API_KEY'
headers = {
  'Content-Type': 'application/x-www-form-urlencoded'
}

response = requests.request("POST", url, headers=headers, data=payload)

print(response.text)
