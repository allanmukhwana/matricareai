import http.client

conn = http.client.HTTPSConnection("concepts.mukhwana.guru")
payload = 'module=expectant&period=3%20months&history=Blind&apikey=MATRIC_CARE_API_KEY'
headers = {
  'Content-Type': 'application/x-www-form-urlencoded'
}
conn.request("POST", "/matricareai/demo/api.php", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))